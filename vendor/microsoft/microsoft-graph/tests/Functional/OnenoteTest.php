<?php
use PHPUnit\Framework\TestCase;
use Microsoft\Graph\Test\GraphTestBase;
use Microsoft\Graph\Model;

class OnenoteTest extends TestCase
{
    private $_client;
    private $_testNotebook;
    private $_testSection;
    private $_testPage;

    protected function setUp(): void
    {
        $graphTestBase = new GraphTestBase();
        $this->_client = $graphTestBase->graphClient;

        $this->_testNotebook = $this->_client
            ->createRequest("GET", "/me/onenote/notebooks/1-525fe350-0199-4c02-879d-e5b142ae8632")
            ->setReturnType(Model\Notebook::class)
            ->execute();

        $sectionReader = $this->_client
            ->createCollectionRequest("GET", "/me/onenote/notebooks/" . $this->_testNotebook->getId() . "/sections")
            ->setReturnType(Model\OnenoteSection::class);
        $this->_testSection = $sectionReader->getPage()[0];

        $pageReader = $this->_client
            ->createCollectionRequest("GET", "/me/onenote/pages")
            ->setReturnType(Model\OnenotePage::class);
        $this->_testPage = $pageReader->getPage()[0];
    }

    /**
    * @group functional
    */
	public function testODataQueries()
    {
        $countedBooks = $this->_client
            ->createRequest("GET", "/me/onenote/notebooks?count=true")
            ->setReturnType(Model\Notebook::class)
            ->execute();
        $this->assertTrue(count($countedBooks) > 0);
    }

    /**
    * @group functional
    */
    public function testGetPageContent()
    {
        $content = $this->_client
            ->createRequest("GET", "/me/onenote/pages/" . $this->_testPage->getId() . "/content")
            ->setReturnType(GuzzleHttp\Psr7\Stream::class)
            ->execute();

        $this->assertNotNull($content->getContents());
    }

    /**
    * @group functional
    */
    public function testPostToNotebook()
    {
        $contentStream = GuzzleHttp\Psr7\stream_for('<html><head><title>Test Title</title></head><body>Test body</body></html>');
        $newPage = $this->_client
            ->createRequest("POST", "/me/onenote/sections/" . $this->_testSection->getId() . "/pages")
            ->addHeaders(array("Content-Type" => "application/xhtml+xml"))
            ->attachBody($contentStream)
            ->setReturnType(Model\OnenotePage::class)
            ->execute();
        $this->assertEquals("Test Title", $newPage->getTitle());
    }

    /**
    * @group functional
    */
    public function testMultipartPost()
    {
        $boundary = md5(time());

        $html = "--" . $boundary . "\r\n" .
                "Content-Disposition:form-data; name=\"Presentation\"" . "\r\n" .
                "Content-Type: text/html" . "\r\n" .
                "\r\n" .
                "<!DOCTYPE html>\r\n" .
                "<html lang=\"en-US\">\r\n" .
                "<head>\r\n" .
                "<title>Test Multipart Page</title>\r\n" .
                "<meta name=\"created\" content=\"2001-01-01T01:01+0100\">\r\n" .
                "</head>\r\n" .
                "<body>\r\n" .
                "<p>\r\n" .
                "<img src=\"name:image\" />\r\n" .
                "</p>\r\n" .
                "<p>\r\n" .
                "<object data=\"name:attachment\" data-attachment=\"document.pdf\" /></p>\r\n" .
                "\r\n" .
                "</body>\r\n" .
                "</html>\r\n" .
                "\r\n" .
                "--" . $boundary . "\r\n" .
                "Content-Disposition:form-data; name=\"image\"\r\n" .
                "Content-Type: image/jpeg\r\n\r\n";

        $doc = "\r\n\r\n" .
                "--" . $boundary . "\r\n" .
                "Content-Disposition:form-data; name=\"attachment\"\r\n" .
                "Content-Type:application/pdf\r\n\r\n";

        $end = "\r\n\r\n" .
                "--" . $boundary . "--";

        $imageStream = GuzzleHttp\Psr7\stream_for(fopen("./tests/Functional/Resources/hamilton.jpg", "r"));
        $docStream = GuzzleHttp\Psr7\stream_for(fopen("./tests/Functional/Resources/document.pdf", "r"));

        $request = GuzzleHttp\Psr7\stream_for($html . $imageStream . $doc . $docStream . $end);

        $newPage = $this->_client
            ->createRequest("POST", "/me/onenote/sections/" . $this->_testSection->getId() . "/pages")
            ->addHeaders(array("Content-Type" => "multipart/form-data; boundary=\"" . $boundary . "\""))
            ->attachBody($request)
            ->execute();
        $this->assertNotNull($newPage);
    }
}