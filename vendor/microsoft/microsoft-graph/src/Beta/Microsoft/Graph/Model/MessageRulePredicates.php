<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MessageRulePredicates File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;
/**
* MessageRulePredicates class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MessageRulePredicates extends Entity
{
    /**
    * Gets the bodyContains
    * Represents the strings that should appear in the body of an incoming message in order for the condition or exception to apply.
    *
    * @return string The bodyContains
    */
    public function getBodyContains()
    {
        if (array_key_exists("bodyContains", $this->_propDict)) {
            return $this->_propDict["bodyContains"];
        } else {
            return null;
        }
    }

    /**
    * Sets the bodyContains
    * Represents the strings that should appear in the body of an incoming message in order for the condition or exception to apply.
    *
    * @param string $val The value of the bodyContains
    *
    * @return MessageRulePredicates
    */
    public function setBodyContains($val)
    {
        $this->_propDict["bodyContains"] = $val;
        return $this;
    }
    /**
    * Gets the bodyOrSubjectContains
    * Represents the strings that should appear in the body or subject of an incoming message in order for the condition or exception to apply.
    *
    * @return string The bodyOrSubjectContains
    */
    public function getBodyOrSubjectContains()
    {
        if (array_key_exists("bodyOrSubjectContains", $this->_propDict)) {
            return $this->_propDict["bodyOrSubjectContains"];
        } else {
            return null;
        }
    }

    /**
    * Sets the bodyOrSubjectContains
    * Represents the strings that should appear in the body or subject of an incoming message in order for the condition or exception to apply.
    *
    * @param string $val The value of the bodyOrSubjectContains
    *
    * @return MessageRulePredicates
    */
    public function setBodyOrSubjectContains($val)
    {
        $this->_propDict["bodyOrSubjectContains"] = $val;
        return $this;
    }
    /**
    * Gets the categories
    * Represents the categories that an incoming message should be labeled with in order for the condition or exception to apply.
    *
    * @return string The categories
    */
    public function getCategories()
    {
        if (array_key_exists("categories", $this->_propDict)) {
            return $this->_propDict["categories"];
        } else {
            return null;
        }
    }

    /**
    * Sets the categories
    * Represents the categories that an incoming message should be labeled with in order for the condition or exception to apply.
    *
    * @param string $val The value of the categories
    *
    * @return MessageRulePredicates
    */
    public function setCategories($val)
    {
        $this->_propDict["categories"] = $val;
        return $this;
    }

    /**
    * Gets the fromAddresses
    * Represents the specific sender email addresses of an incoming message in order for the condition or exception to apply.
    *
    * @return Recipient The fromAddresses
    */
    public function getFromAddresses()
    {
        if (array_key_exists("fromAddresses", $this->_propDict)) {
            if (is_a($this->_propDict["fromAddresses"], "\Beta\Microsoft\Graph\Model\Recipient")) {
                return $this->_propDict["fromAddresses"];
            } else {
                $this->_propDict["fromAddresses"] = new Recipient($this->_propDict["fromAddresses"]);
                return $this->_propDict["fromAddresses"];
            }
        }
        return null;
    }

    /**
    * Sets the fromAddresses
    * Represents the specific sender email addresses of an incoming message in order for the condition or exception to apply.
    *
    * @param Recipient $val The value to assign to the fromAddresses
    *
    * @return MessageRulePredicates The MessageRulePredicates
    */
    public function setFromAddresses($val)
    {
        $this->_propDict["fromAddresses"] = $val;
         return $this;
    }
    /**
    * Gets the hasAttachments
    * Indicates whether an incoming message must have attachments in order for the condition or exception to apply.
    *
    * @return bool The hasAttachments
    */
    public function getHasAttachments()
    {
        if (array_key_exists("hasAttachments", $this->_propDict)) {
            return $this->_propDict["hasAttachments"];
        } else {
            return null;
        }
    }

    /**
    * Sets the hasAttachments
    * Indicates whether an incoming message must have attachments in order for the condition or exception to apply.
    *
    * @param bool $val The value of the hasAttachments
    *
    * @return MessageRulePredicates
    */
    public function setHasAttachments($val)
    {
        $this->_propDict["hasAttachments"] = $val;
        return $this;
    }
    /**
    * Gets the headerContains
    * Represents the strings that appear in the headers of an incoming message in order for the condition or exception to apply.
    *
    * @return string The headerContains
    */
    public function getHeaderContains()
    {
        if (array_key_exists("headerContains", $this->_propDict)) {
            return $this->_propDict["headerContains"];
        } else {
            return null;
        }
    }

    /**
    * Sets the headerContains
    * Represents the strings that appear in the headers of an incoming message in order for the condition or exception to apply.
    *
    * @param string $val The value of the headerContains
    *
    * @return MessageRulePredicates
    */
    public function setHeaderContains($val)
    {
        $this->_propDict["headerContains"] = $val;
        return $this;
    }

    /**
    * Gets the importance
    * The importance that is stamped on an incoming message in order for the condition or exception to apply: low, normal, high.
    *
    * @return Importance The importance
    */
    public function getImportance()
    {
        if (array_key_exists("importance", $this->_propDict)) {
            if (is_a($this->_propDict["importance"], "\Beta\Microsoft\Graph\Model\Importance")) {
                return $this->_propDict["importance"];
            } else {
                $this->_propDict["importance"] = new Importance($this->_propDict["importance"]);
                return $this->_propDict["importance"];
            }
        }
        return null;
    }

    /**
    * Sets the importance
    * The importance that is stamped on an incoming message in order for the condition or exception to apply: low, normal, high.
    *
    * @param Importance $val The value to assign to the importance
    *
    * @return MessageRulePredicates The MessageRulePredicates
    */
    public function setImportance($val)
    {
        $this->_propDict["importance"] = $val;
         return $this;
    }
    /**
    * Gets the isApprovalRequest
    * Indicates whether an incoming message must be an approval request in order for the condition or exception to apply.
    *
    * @return bool The isApprovalRequest
    */
    public function getIsApprovalRequest()
    {
        if (array_key_exists("isApprovalRequest", $this->_propDict)) {
            return $this->_propDict["isApprovalRequest"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isApprovalRequest
    * Indicates whether an incoming message must be an approval request in order for the condition or exception to apply.
    *
    * @param bool $val The value of the isApprovalRequest
    *
    * @return MessageRulePredicates
    */
    public function setIsApprovalRequest($val)
    {
        $this->_propDict["isApprovalRequest"] = $val;
        return $this;
    }
    /**
    * Gets the isAutomaticForward
    * Indicates whether an incoming message must be automatically forwarded in order for the condition or exception to apply.
    *
    * @return bool The isAutomaticForward
    */
    public function getIsAutomaticForward()
    {
        if (array_key_exists("isAutomaticForward", $this->_propDict)) {
            return $this->_propDict["isAutomaticForward"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isAutomaticForward
    * Indicates whether an incoming message must be automatically forwarded in order for the condition or exception to apply.
    *
    * @param bool $val The value of the isAutomaticForward
    *
    * @return MessageRulePredicates
    */
    public function setIsAutomaticForward($val)
    {
        $this->_propDict["isAutomaticForward"] = $val;
        return $this;
    }
    /**
    * Gets the isAutomaticReply
    * Indicates whether an incoming message must be an auto reply in order for the condition or exception to apply.
    *
    * @return bool The isAutomaticReply
    */
    public function getIsAutomaticReply()
    {
        if (array_key_exists("isAutomaticReply", $this->_propDict)) {
            return $this->_propDict["isAutomaticReply"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isAutomaticReply
    * Indicates whether an incoming message must be an auto reply in order for the condition or exception to apply.
    *
    * @param bool $val The value of the isAutomaticReply
    *
    * @return MessageRulePredicates
    */
    public function setIsAutomaticReply($val)
    {
        $this->_propDict["isAutomaticReply"] = $val;
        return $this;
    }
    /**
    * Gets the isEncrypted
    * Indicates whether an incoming message must be encrypted in order for the condition or exception to apply.
    *
    * @return bool The isEncrypted
    */
    public function getIsEncrypted()
    {
        if (array_key_exists("isEncrypted", $this->_propDict)) {
            return $this->_propDict["isEncrypted"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isEncrypted
    * Indicates whether an incoming message must be encrypted in order for the condition or exception to apply.
    *
    * @param bool $val The value of the isEncrypted
    *
    * @return MessageRulePredicates
    */
    public function setIsEncrypted($val)
    {
        $this->_propDict["isEncrypted"] = $val;
        return $this;
    }
    /**
    * Gets the isMeetingRequest
    * Indicates whether an incoming message must be a meeting request in order for the condition or exception to apply.
    *
    * @return bool The isMeetingRequest
    */
    public function getIsMeetingRequest()
    {
        if (array_key_exists("isMeetingRequest", $this->_propDict)) {
            return $this->_propDict["isMeetingRequest"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isMeetingRequest
    * Indicates whether an incoming message must be a meeting request in order for the condition or exception to apply.
    *
    * @param bool $val The value of the isMeetingRequest
    *
    * @return MessageRulePredicates
    */
    public function setIsMeetingRequest($val)
    {
        $this->_propDict["isMeetingRequest"] = $val;
        return $this;
    }
    /**
    * Gets the isMeetingResponse
    * Indicates whether an incoming message must be a meeting response in order for the condition or exception to apply.
    *
    * @return bool The isMeetingResponse
    */
    public function getIsMeetingResponse()
    {
        if (array_key_exists("isMeetingResponse", $this->_propDict)) {
            return $this->_propDict["isMeetingResponse"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isMeetingResponse
    * Indicates whether an incoming message must be a meeting response in order for the condition or exception to apply.
    *
    * @param bool $val The value of the isMeetingResponse
    *
    * @return MessageRulePredicates
    */
    public function setIsMeetingResponse($val)
    {
        $this->_propDict["isMeetingResponse"] = $val;
        return $this;
    }
    /**
    * Gets the isNonDeliveryReport
    * Indicates whether an incoming message must be a non-delivery report in order for the condition or exception to apply.
    *
    * @return bool The isNonDeliveryReport
    */
    public function getIsNonDeliveryReport()
    {
        if (array_key_exists("isNonDeliveryReport", $this->_propDict)) {
            return $this->_propDict["isNonDeliveryReport"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isNonDeliveryReport
    * Indicates whether an incoming message must be a non-delivery report in order for the condition or exception to apply.
    *
    * @param bool $val The value of the isNonDeliveryReport
    *
    * @return MessageRulePredicates
    */
    public function setIsNonDeliveryReport($val)
    {
        $this->_propDict["isNonDeliveryReport"] = $val;
        return $this;
    }
    /**
    * Gets the isPermissionControlled
    * Indicates whether an incoming message must be permission controlled (RMS-protected) in order for the condition or exception to apply.
    *
    * @return bool The isPermissionControlled
    */
    public function getIsPermissionControlled()
    {
        if (array_key_exists("isPermissionControlled", $this->_propDict)) {
            return $this->_propDict["isPermissionControlled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isPermissionControlled
    * Indicates whether an incoming message must be permission controlled (RMS-protected) in order for the condition or exception to apply.
    *
    * @param bool $val The value of the isPermissionControlled
    *
    * @return MessageRulePredicates
    */
    public function setIsPermissionControlled($val)
    {
        $this->_propDict["isPermissionControlled"] = $val;
        return $this;
    }
    /**
    * Gets the isReadReceipt
    * Indicates whether an incoming message must be a read receipt in order for the condition or exception to apply.
    *
    * @return bool The isReadReceipt
    */
    public function getIsReadReceipt()
    {
        if (array_key_exists("isReadReceipt", $this->_propDict)) {
            return $this->_propDict["isReadReceipt"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isReadReceipt
    * Indicates whether an incoming message must be a read receipt in order for the condition or exception to apply.
    *
    * @param bool $val The value of the isReadReceipt
    *
    * @return MessageRulePredicates
    */
    public function setIsReadReceipt($val)
    {
        $this->_propDict["isReadReceipt"] = $val;
        return $this;
    }
    /**
    * Gets the isSigned
    * Indicates whether an incoming message must be S/MIME-signed in order for the condition or exception to apply.
    *
    * @return bool The isSigned
    */
    public function getIsSigned()
    {
        if (array_key_exists("isSigned", $this->_propDict)) {
            return $this->_propDict["isSigned"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isSigned
    * Indicates whether an incoming message must be S/MIME-signed in order for the condition or exception to apply.
    *
    * @param bool $val The value of the isSigned
    *
    * @return MessageRulePredicates
    */
    public function setIsSigned($val)
    {
        $this->_propDict["isSigned"] = $val;
        return $this;
    }
    /**
    * Gets the isVoicemail
    * Indicates whether an incoming message must be a voice mail in order for the condition or exception to apply.
    *
    * @return bool The isVoicemail
    */
    public function getIsVoicemail()
    {
        if (array_key_exists("isVoicemail", $this->_propDict)) {
            return $this->_propDict["isVoicemail"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isVoicemail
    * Indicates whether an incoming message must be a voice mail in order for the condition or exception to apply.
    *
    * @param bool $val The value of the isVoicemail
    *
    * @return MessageRulePredicates
    */
    public function setIsVoicemail($val)
    {
        $this->_propDict["isVoicemail"] = $val;
        return $this;
    }

    /**
    * Gets the messageActionFlag
    * Represents the flag-for-action value that appears on an incoming message in order for the condition or exception to apply. The possible values are: any, call, doNotForward, followUp, fyi, forward, noResponseNecessary, read, reply, replyToAll, review.
    *
    * @return MessageActionFlag The messageActionFlag
    */
    public function getMessageActionFlag()
    {
        if (array_key_exists("messageActionFlag", $this->_propDict)) {
            if (is_a($this->_propDict["messageActionFlag"], "\Beta\Microsoft\Graph\Model\MessageActionFlag")) {
                return $this->_propDict["messageActionFlag"];
            } else {
                $this->_propDict["messageActionFlag"] = new MessageActionFlag($this->_propDict["messageActionFlag"]);
                return $this->_propDict["messageActionFlag"];
            }
        }
        return null;
    }

    /**
    * Sets the messageActionFlag
    * Represents the flag-for-action value that appears on an incoming message in order for the condition or exception to apply. The possible values are: any, call, doNotForward, followUp, fyi, forward, noResponseNecessary, read, reply, replyToAll, review.
    *
    * @param MessageActionFlag $val The value to assign to the messageActionFlag
    *
    * @return MessageRulePredicates The MessageRulePredicates
    */
    public function setMessageActionFlag($val)
    {
        $this->_propDict["messageActionFlag"] = $val;
         return $this;
    }
    /**
    * Gets the notSentToMe
    * Indicates whether the owner of the mailbox must not be a recipient of an incoming message in order for the condition or exception to apply.
    *
    * @return bool The notSentToMe
    */
    public function getNotSentToMe()
    {
        if (array_key_exists("notSentToMe", $this->_propDict)) {
            return $this->_propDict["notSentToMe"];
        } else {
            return null;
        }
    }

    /**
    * Sets the notSentToMe
    * Indicates whether the owner of the mailbox must not be a recipient of an incoming message in order for the condition or exception to apply.
    *
    * @param bool $val The value of the notSentToMe
    *
    * @return MessageRulePredicates
    */
    public function setNotSentToMe($val)
    {
        $this->_propDict["notSentToMe"] = $val;
        return $this;
    }
    /**
    * Gets the recipientContains
    * Represents the strings that appear in either the toRecipients or ccRecipients properties of an incoming message in order for the condition or exception to apply.
    *
    * @return string The recipientContains
    */
    public function getRecipientContains()
    {
        if (array_key_exists("recipientContains", $this->_propDict)) {
            return $this->_propDict["recipientContains"];
        } else {
            return null;
        }
    }

    /**
    * Sets the recipientContains
    * Represents the strings that appear in either the toRecipients or ccRecipients properties of an incoming message in order for the condition or exception to apply.
    *
    * @param string $val The value of the recipientContains
    *
    * @return MessageRulePredicates
    */
    public function setRecipientContains($val)
    {
        $this->_propDict["recipientContains"] = $val;
        return $this;
    }
    /**
    * Gets the senderContains
    * Represents the strings that appear in the from property of an incoming message in order for the condition or exception to apply.
    *
    * @return string The senderContains
    */
    public function getSenderContains()
    {
        if (array_key_exists("senderContains", $this->_propDict)) {
            return $this->_propDict["senderContains"];
        } else {
            return null;
        }
    }

    /**
    * Sets the senderContains
    * Represents the strings that appear in the from property of an incoming message in order for the condition or exception to apply.
    *
    * @param string $val The value of the senderContains
    *
    * @return MessageRulePredicates
    */
    public function setSenderContains($val)
    {
        $this->_propDict["senderContains"] = $val;
        return $this;
    }

    /**
    * Gets the sensitivity
    * Represents the sensitivity level that must be stamped on an incoming message in order for the condition or exception to apply. The possible values are: normal, personal, private, confidential.
    *
    * @return Sensitivity The sensitivity
    */
    public function getSensitivity()
    {
        if (array_key_exists("sensitivity", $this->_propDict)) {
            if (is_a($this->_propDict["sensitivity"], "\Beta\Microsoft\Graph\Model\Sensitivity")) {
                return $this->_propDict["sensitivity"];
            } else {
                $this->_propDict["sensitivity"] = new Sensitivity($this->_propDict["sensitivity"]);
                return $this->_propDict["sensitivity"];
            }
        }
        return null;
    }

    /**
    * Sets the sensitivity
    * Represents the sensitivity level that must be stamped on an incoming message in order for the condition or exception to apply. The possible values are: normal, personal, private, confidential.
    *
    * @param Sensitivity $val The value to assign to the sensitivity
    *
    * @return MessageRulePredicates The MessageRulePredicates
    */
    public function setSensitivity($val)
    {
        $this->_propDict["sensitivity"] = $val;
         return $this;
    }
    /**
    * Gets the sentCcMe
    * Indicates whether the owner of the mailbox must be in the ccRecipients property of an incoming message in order for the condition or exception to apply.
    *
    * @return bool The sentCcMe
    */
    public function getSentCcMe()
    {
        if (array_key_exists("sentCcMe", $this->_propDict)) {
            return $this->_propDict["sentCcMe"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sentCcMe
    * Indicates whether the owner of the mailbox must be in the ccRecipients property of an incoming message in order for the condition or exception to apply.
    *
    * @param bool $val The value of the sentCcMe
    *
    * @return MessageRulePredicates
    */
    public function setSentCcMe($val)
    {
        $this->_propDict["sentCcMe"] = $val;
        return $this;
    }
    /**
    * Gets the sentOnlyToMe
    * Indicates whether the owner of the mailbox must be the only recipient in an incoming message in order for the condition or exception to apply.
    *
    * @return bool The sentOnlyToMe
    */
    public function getSentOnlyToMe()
    {
        if (array_key_exists("sentOnlyToMe", $this->_propDict)) {
            return $this->_propDict["sentOnlyToMe"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sentOnlyToMe
    * Indicates whether the owner of the mailbox must be the only recipient in an incoming message in order for the condition or exception to apply.
    *
    * @param bool $val The value of the sentOnlyToMe
    *
    * @return MessageRulePredicates
    */
    public function setSentOnlyToMe($val)
    {
        $this->_propDict["sentOnlyToMe"] = $val;
        return $this;
    }

    /**
    * Gets the sentToAddresses
    * Represents the email addresses that an incoming message must have been sent to in order for the condition or exception to apply.
    *
    * @return Recipient The sentToAddresses
    */
    public function getSentToAddresses()
    {
        if (array_key_exists("sentToAddresses", $this->_propDict)) {
            if (is_a($this->_propDict["sentToAddresses"], "\Beta\Microsoft\Graph\Model\Recipient")) {
                return $this->_propDict["sentToAddresses"];
            } else {
                $this->_propDict["sentToAddresses"] = new Recipient($this->_propDict["sentToAddresses"]);
                return $this->_propDict["sentToAddresses"];
            }
        }
        return null;
    }

    /**
    * Sets the sentToAddresses
    * Represents the email addresses that an incoming message must have been sent to in order for the condition or exception to apply.
    *
    * @param Recipient $val The value to assign to the sentToAddresses
    *
    * @return MessageRulePredicates The MessageRulePredicates
    */
    public function setSentToAddresses($val)
    {
        $this->_propDict["sentToAddresses"] = $val;
         return $this;
    }
    /**
    * Gets the sentToMe
    * Indicates whether the owner of the mailbox must be in the toRecipients property of an incoming message in order for the condition or exception to apply.
    *
    * @return bool The sentToMe
    */
    public function getSentToMe()
    {
        if (array_key_exists("sentToMe", $this->_propDict)) {
            return $this->_propDict["sentToMe"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sentToMe
    * Indicates whether the owner of the mailbox must be in the toRecipients property of an incoming message in order for the condition or exception to apply.
    *
    * @param bool $val The value of the sentToMe
    *
    * @return MessageRulePredicates
    */
    public function setSentToMe($val)
    {
        $this->_propDict["sentToMe"] = $val;
        return $this;
    }
    /**
    * Gets the sentToOrCcMe
    * Indicates whether the owner of the mailbox must be in either a toRecipients or ccRecipients property of an incoming message in order for the condition or exception to apply.
    *
    * @return bool The sentToOrCcMe
    */
    public function getSentToOrCcMe()
    {
        if (array_key_exists("sentToOrCcMe", $this->_propDict)) {
            return $this->_propDict["sentToOrCcMe"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sentToOrCcMe
    * Indicates whether the owner of the mailbox must be in either a toRecipients or ccRecipients property of an incoming message in order for the condition or exception to apply.
    *
    * @param bool $val The value of the sentToOrCcMe
    *
    * @return MessageRulePredicates
    */
    public function setSentToOrCcMe($val)
    {
        $this->_propDict["sentToOrCcMe"] = $val;
        return $this;
    }
    /**
    * Gets the subjectContains
    * Represents the strings that appear in the subject of an incoming message in order for the condition or exception to apply.
    *
    * @return string The subjectContains
    */
    public function getSubjectContains()
    {
        if (array_key_exists("subjectContains", $this->_propDict)) {
            return $this->_propDict["subjectContains"];
        } else {
            return null;
        }
    }

    /**
    * Sets the subjectContains
    * Represents the strings that appear in the subject of an incoming message in order for the condition or exception to apply.
    *
    * @param string $val The value of the subjectContains
    *
    * @return MessageRulePredicates
    */
    public function setSubjectContains($val)
    {
        $this->_propDict["subjectContains"] = $val;
        return $this;
    }

    /**
    * Gets the withinSizeRange
    * Represents the minimum and maximum sizes (in kilobytes) that an incoming message must fall in between in order for the condition or exception to apply.
    *
    * @return SizeRange The withinSizeRange
    */
    public function getWithinSizeRange()
    {
        if (array_key_exists("withinSizeRange", $this->_propDict)) {
            if (is_a($this->_propDict["withinSizeRange"], "\Beta\Microsoft\Graph\Model\SizeRange")) {
                return $this->_propDict["withinSizeRange"];
            } else {
                $this->_propDict["withinSizeRange"] = new SizeRange($this->_propDict["withinSizeRange"]);
                return $this->_propDict["withinSizeRange"];
            }
        }
        return null;
    }

    /**
    * Sets the withinSizeRange
    * Represents the minimum and maximum sizes (in kilobytes) that an incoming message must fall in between in order for the condition or exception to apply.
    *
    * @param SizeRange $val The value to assign to the withinSizeRange
    *
    * @return MessageRulePredicates The MessageRulePredicates
    */
    public function setWithinSizeRange($val)
    {
        $this->_propDict["withinSizeRange"] = $val;
         return $this;
    }
}
