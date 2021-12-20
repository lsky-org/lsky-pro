<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* InvitedUserMessageInfo File
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
* InvitedUserMessageInfo class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class InvitedUserMessageInfo extends Entity
{

    /**
    * Gets the ccRecipients
    * Additional recipients the invitation message should be sent to. Currently only 1 additional recipient is supported.
    *
    * @return Recipient The ccRecipients
    */
    public function getCcRecipients()
    {
        if (array_key_exists("ccRecipients", $this->_propDict)) {
            if (is_a($this->_propDict["ccRecipients"], "\Microsoft\Graph\Model\Recipient")) {
                return $this->_propDict["ccRecipients"];
            } else {
                $this->_propDict["ccRecipients"] = new Recipient($this->_propDict["ccRecipients"]);
                return $this->_propDict["ccRecipients"];
            }
        }
        return null;
    }

    /**
    * Sets the ccRecipients
    * Additional recipients the invitation message should be sent to. Currently only 1 additional recipient is supported.
    *
    * @param Recipient $val The value to assign to the ccRecipients
    *
    * @return InvitedUserMessageInfo The InvitedUserMessageInfo
    */
    public function setCcRecipients($val)
    {
        $this->_propDict["ccRecipients"] = $val;
         return $this;
    }
    /**
    * Gets the customizedMessageBody
    * Customized message body you want to send if you don't want the default message.
    *
    * @return string The customizedMessageBody
    */
    public function getCustomizedMessageBody()
    {
        if (array_key_exists("customizedMessageBody", $this->_propDict)) {
            return $this->_propDict["customizedMessageBody"];
        } else {
            return null;
        }
    }

    /**
    * Sets the customizedMessageBody
    * Customized message body you want to send if you don't want the default message.
    *
    * @param string $val The value of the customizedMessageBody
    *
    * @return InvitedUserMessageInfo
    */
    public function setCustomizedMessageBody($val)
    {
        $this->_propDict["customizedMessageBody"] = $val;
        return $this;
    }
    /**
    * Gets the messageLanguage
    * The language you want to send the default message in. If the customizedMessageBody is specified, this property is ignored, and the message is sent using the customizedMessageBody. The language format should be in ISO 639. The default is en-US.
    *
    * @return string The messageLanguage
    */
    public function getMessageLanguage()
    {
        if (array_key_exists("messageLanguage", $this->_propDict)) {
            return $this->_propDict["messageLanguage"];
        } else {
            return null;
        }
    }

    /**
    * Sets the messageLanguage
    * The language you want to send the default message in. If the customizedMessageBody is specified, this property is ignored, and the message is sent using the customizedMessageBody. The language format should be in ISO 639. The default is en-US.
    *
    * @param string $val The value of the messageLanguage
    *
    * @return InvitedUserMessageInfo
    */
    public function setMessageLanguage($val)
    {
        $this->_propDict["messageLanguage"] = $val;
        return $this;
    }
}
