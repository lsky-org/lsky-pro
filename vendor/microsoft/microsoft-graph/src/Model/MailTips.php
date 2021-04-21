<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MailTips File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;
/**
* MailTips class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MailTips extends Entity
{

    /**
    * Gets the automaticReplies
    * Mail tips for automatic reply if it has been set up by the recipient.
    *
    * @return AutomaticRepliesMailTips The automaticReplies
    */
    public function getAutomaticReplies()
    {
        if (array_key_exists("automaticReplies", $this->_propDict)) {
            if (is_a($this->_propDict["automaticReplies"], "\Microsoft\Graph\Model\AutomaticRepliesMailTips")) {
                return $this->_propDict["automaticReplies"];
            } else {
                $this->_propDict["automaticReplies"] = new AutomaticRepliesMailTips($this->_propDict["automaticReplies"]);
                return $this->_propDict["automaticReplies"];
            }
        }
        return null;
    }

    /**
    * Sets the automaticReplies
    * Mail tips for automatic reply if it has been set up by the recipient.
    *
    * @param AutomaticRepliesMailTips $val The value to assign to the automaticReplies
    *
    * @return MailTips The MailTips
    */
    public function setAutomaticReplies($val)
    {
        $this->_propDict["automaticReplies"] = $val;
         return $this;
    }
    /**
    * Gets the customMailTip
    * A custom mail tip that can be set on the recipient's mailbox.
    *
    * @return string The customMailTip
    */
    public function getCustomMailTip()
    {
        if (array_key_exists("customMailTip", $this->_propDict)) {
            return $this->_propDict["customMailTip"];
        } else {
            return null;
        }
    }

    /**
    * Sets the customMailTip
    * A custom mail tip that can be set on the recipient's mailbox.
    *
    * @param string $val The value of the customMailTip
    *
    * @return MailTips
    */
    public function setCustomMailTip($val)
    {
        $this->_propDict["customMailTip"] = $val;
        return $this;
    }
    /**
    * Gets the deliveryRestricted
    * Whether the recipient's mailbox is restricted, for example, accepting messages from only a predefined list of senders, rejecting messages from a predefined list of senders, or accepting messages from only authenticated senders.
    *
    * @return bool The deliveryRestricted
    */
    public function getDeliveryRestricted()
    {
        if (array_key_exists("deliveryRestricted", $this->_propDict)) {
            return $this->_propDict["deliveryRestricted"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deliveryRestricted
    * Whether the recipient's mailbox is restricted, for example, accepting messages from only a predefined list of senders, rejecting messages from a predefined list of senders, or accepting messages from only authenticated senders.
    *
    * @param bool $val The value of the deliveryRestricted
    *
    * @return MailTips
    */
    public function setDeliveryRestricted($val)
    {
        $this->_propDict["deliveryRestricted"] = $val;
        return $this;
    }

    /**
    * Gets the emailAddress
    * The email address of the recipient to get mailtips for.
    *
    * @return EmailAddress The emailAddress
    */
    public function getEmailAddress()
    {
        if (array_key_exists("emailAddress", $this->_propDict)) {
            if (is_a($this->_propDict["emailAddress"], "\Microsoft\Graph\Model\EmailAddress")) {
                return $this->_propDict["emailAddress"];
            } else {
                $this->_propDict["emailAddress"] = new EmailAddress($this->_propDict["emailAddress"]);
                return $this->_propDict["emailAddress"];
            }
        }
        return null;
    }

    /**
    * Sets the emailAddress
    * The email address of the recipient to get mailtips for.
    *
    * @param EmailAddress $val The value to assign to the emailAddress
    *
    * @return MailTips The MailTips
    */
    public function setEmailAddress($val)
    {
        $this->_propDict["emailAddress"] = $val;
         return $this;
    }

    /**
    * Gets the error
    * Errors that occur during the getMailTips action.
    *
    * @return MailTipsError The error
    */
    public function getError()
    {
        if (array_key_exists("error", $this->_propDict)) {
            if (is_a($this->_propDict["error"], "\Microsoft\Graph\Model\MailTipsError")) {
                return $this->_propDict["error"];
            } else {
                $this->_propDict["error"] = new MailTipsError($this->_propDict["error"]);
                return $this->_propDict["error"];
            }
        }
        return null;
    }

    /**
    * Sets the error
    * Errors that occur during the getMailTips action.
    *
    * @param MailTipsError $val The value to assign to the error
    *
    * @return MailTips The MailTips
    */
    public function setError($val)
    {
        $this->_propDict["error"] = $val;
         return $this;
    }
    /**
    * Gets the externalMemberCount
    * The number of external members if the recipient is a distribution list.
    *
    * @return int The externalMemberCount
    */
    public function getExternalMemberCount()
    {
        if (array_key_exists("externalMemberCount", $this->_propDict)) {
            return $this->_propDict["externalMemberCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the externalMemberCount
    * The number of external members if the recipient is a distribution list.
    *
    * @param int $val The value of the externalMemberCount
    *
    * @return MailTips
    */
    public function setExternalMemberCount($val)
    {
        $this->_propDict["externalMemberCount"] = $val;
        return $this;
    }
    /**
    * Gets the isModerated
    * Whether sending messages to the recipient requires approval. For example, if the recipient is a large distribution list and a moderator has been set up to approve messages sent to that distribution list, or if sending messages to a recipient requires approval of the recipient's manager.
    *
    * @return bool The isModerated
    */
    public function getIsModerated()
    {
        if (array_key_exists("isModerated", $this->_propDict)) {
            return $this->_propDict["isModerated"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isModerated
    * Whether sending messages to the recipient requires approval. For example, if the recipient is a large distribution list and a moderator has been set up to approve messages sent to that distribution list, or if sending messages to a recipient requires approval of the recipient's manager.
    *
    * @param bool $val The value of the isModerated
    *
    * @return MailTips
    */
    public function setIsModerated($val)
    {
        $this->_propDict["isModerated"] = $val;
        return $this;
    }
    /**
    * Gets the mailboxFull
    * The mailbox full status of the recipient.
    *
    * @return bool The mailboxFull
    */
    public function getMailboxFull()
    {
        if (array_key_exists("mailboxFull", $this->_propDict)) {
            return $this->_propDict["mailboxFull"];
        } else {
            return null;
        }
    }

    /**
    * Sets the mailboxFull
    * The mailbox full status of the recipient.
    *
    * @param bool $val The value of the mailboxFull
    *
    * @return MailTips
    */
    public function setMailboxFull($val)
    {
        $this->_propDict["mailboxFull"] = $val;
        return $this;
    }
    /**
    * Gets the maxMessageSize
    * The maximum message size that has been configured for the recipient's organization or mailbox.
    *
    * @return int The maxMessageSize
    */
    public function getMaxMessageSize()
    {
        if (array_key_exists("maxMessageSize", $this->_propDict)) {
            return $this->_propDict["maxMessageSize"];
        } else {
            return null;
        }
    }

    /**
    * Sets the maxMessageSize
    * The maximum message size that has been configured for the recipient's organization or mailbox.
    *
    * @param int $val The value of the maxMessageSize
    *
    * @return MailTips
    */
    public function setMaxMessageSize($val)
    {
        $this->_propDict["maxMessageSize"] = $val;
        return $this;
    }

    /**
    * Gets the recipientScope
    * The scope of the recipient. Possible values are: none, internal, external, externalPartner, externalNonParther. For example, an administrator can set another organization to be its 'partner'. The scope is useful if an administrator wants certain mailtips to be accessible to certain scopes. It's also useful to senders to inform them that their message may leave the organization, helping them make the correct decisions about wording, tone and content.
    *
    * @return RecipientScopeType The recipientScope
    */
    public function getRecipientScope()
    {
        if (array_key_exists("recipientScope", $this->_propDict)) {
            if (is_a($this->_propDict["recipientScope"], "\Microsoft\Graph\Model\RecipientScopeType")) {
                return $this->_propDict["recipientScope"];
            } else {
                $this->_propDict["recipientScope"] = new RecipientScopeType($this->_propDict["recipientScope"]);
                return $this->_propDict["recipientScope"];
            }
        }
        return null;
    }

    /**
    * Sets the recipientScope
    * The scope of the recipient. Possible values are: none, internal, external, externalPartner, externalNonParther. For example, an administrator can set another organization to be its 'partner'. The scope is useful if an administrator wants certain mailtips to be accessible to certain scopes. It's also useful to senders to inform them that their message may leave the organization, helping them make the correct decisions about wording, tone and content.
    *
    * @param RecipientScopeType $val The value to assign to the recipientScope
    *
    * @return MailTips The MailTips
    */
    public function setRecipientScope($val)
    {
        $this->_propDict["recipientScope"] = $val;
         return $this;
    }

    /**
    * Gets the recipientSuggestions
    * Recipients suggested based on previous contexts where they appear in the same message.
    *
    * @return Recipient The recipientSuggestions
    */
    public function getRecipientSuggestions()
    {
        if (array_key_exists("recipientSuggestions", $this->_propDict)) {
            if (is_a($this->_propDict["recipientSuggestions"], "\Microsoft\Graph\Model\Recipient")) {
                return $this->_propDict["recipientSuggestions"];
            } else {
                $this->_propDict["recipientSuggestions"] = new Recipient($this->_propDict["recipientSuggestions"]);
                return $this->_propDict["recipientSuggestions"];
            }
        }
        return null;
    }

    /**
    * Sets the recipientSuggestions
    * Recipients suggested based on previous contexts where they appear in the same message.
    *
    * @param Recipient $val The value to assign to the recipientSuggestions
    *
    * @return MailTips The MailTips
    */
    public function setRecipientSuggestions($val)
    {
        $this->_propDict["recipientSuggestions"] = $val;
         return $this;
    }
    /**
    * Gets the totalMemberCount
    * The number of members if the recipient is a distribution list.
    *
    * @return int The totalMemberCount
    */
    public function getTotalMemberCount()
    {
        if (array_key_exists("totalMemberCount", $this->_propDict)) {
            return $this->_propDict["totalMemberCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the totalMemberCount
    * The number of members if the recipient is a distribution list.
    *
    * @param int $val The value of the totalMemberCount
    *
    * @return MailTips
    */
    public function setTotalMemberCount($val)
    {
        $this->_propDict["totalMemberCount"] = $val;
        return $this;
    }
}
