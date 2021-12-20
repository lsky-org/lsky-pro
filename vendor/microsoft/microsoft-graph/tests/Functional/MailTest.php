<?php
use PHPUnit\Framework\TestCase;
use Microsoft\Graph\Test\GraphTestBase;
use Microsoft\Graph\Model;

class MailTest extends TestCase
{
    private $_client;

    protected function setUp(): void
    {
        $graphTestBase = new GraphTestBase();
        $this->_client = $graphTestBase->graphClient;
    }

    /**
    * @group functional
    */
    public function createEmail($emailBody)
    {
        $me = $this->_client->createRequest("GET", "/me")
                            ->setReturnType(Model\User::class)
                            ->execute();
        $subject = new DateTime();
        $subject = $subject->format('Y-m-d H:i:s');
        
        $message = new Model\Message();
        $message->setSubject($subject);
        $body = new Model\ItemBody();
        $body->setContent($emailBody);
        $message->setBody($body);
        $emailAddress = new Model\EmailAddress();
        $emailAddress->setAddress($me->getMail());
        $recipient = new Model\Recipient();
        $recipient->setEmailAddress($emailAddress);
        $message->setToRecipients(array($recipient));
        return $message;
    }

    /**
    * @group functional
    */
    public function testSendMail()
    {
        $message = $this->createEmail("Sent from the SendMail test - Técnica");

        $body = array("message" => $message);

        $this->_client->createRequest("POST", "/me/sendmail")
                      ->attachBody($body)
                      ->execute();

        $subject = $message->getSubject();

        $mailFolderMessages = $this->_client->createRequest("GET", "/me/mailFolders/sentItems/messages?\$filter=subject eq '$subject'")
                                            ->setReturnType(Model\Message::class)
                                            ->execute();
        $this->assertNotNull($mailFolderMessages);
    }
    
    /**
    * @group functional
    */
    public function testSendMailWithAttachment()
    {
        $message = $this->createEmail("Sent from the SendMailWithAttachment test");

        $attachment = new Model\FileAttachment();
        $attachment->setName("MyFileAttachment.txt");
        $attachment->setContentBytes("data");
        $attachment->setODataType("#microsoft.graph.fileAttachment");

        $message->setAttachments(array($attachment));

        $body = array("message" => $message);

        $this->_client->createRequest("POST", "/me/sendmail")
                      ->attachBody($body)
                      ->execute();

        $mailFolderMessages = $this->_client->createRequest("GET", "/me/mailFolders/sentItems/messages?\$filter=subject eq '\$message->getSubject()'")
                                            ->setReturnType(Model\Message::class)
                                            ->execute();
        $this->assertNotNull($mailFolderMessages);
    }

    /**
    * @group functional
    */
    public function testGetMailWithAttachment()
    {
        $messageCollection = $this->_client->createRequest("GET", "/me/messages?\$filter=hasAttachments eq true")
                                           ->setReturnType(Model\Message::class)
                                           ->execute();
        $messageId = $messageCollection[0]->getId();

        if (count($messageCollection) > 0) {
            $attachments = $this->_client->createRequest("GET", "/me/messages/$messageId/attachments")
                                         ->setReturnType(Model\Attachment::class)
                                         ->execute();

            $attachmentId = $attachments[0]->getId();
            $attachment = $this->_client->createRequest("GET", "/me/messages/$messageId/attachments/$attachmentId")
                                        ->setReturnType(Model\FileAttachment::class)
                                        ->execute();

            $this->assertInstanceOf(Model\FileAttachment::class, $attachment);
            $this->assertNotNull($attachment->getContentBytes());
        }
    }

    /**
    * @group functional
    */
    public function testMailGetNextPage()
    {
        $messageIterator = $this->_client->createCollectionRequest("GET", "/me/messages")
                                         ->setReturnType(Model\Message::class);
        $messages = $messageIterator->getPage();

        while (!$messageIterator->isEnd())
        {
            $messages = $messageIterator->getPage();
        }
        $this->assertNotNull($messages);
    }
}