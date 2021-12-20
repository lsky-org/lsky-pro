<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ChatMessagePolicyViolationPolicyTip File
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
* ChatMessagePolicyViolationPolicyTip class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ChatMessagePolicyViolationPolicyTip extends Entity
{
    /**
    * Gets the complianceUrl
    * The URL a user can visit to read about the data loss prevention policies for the organization. (ie, policies about what users shouldn't say in chats)
    *
    * @return string The complianceUrl
    */
    public function getComplianceUrl()
    {
        if (array_key_exists("complianceUrl", $this->_propDict)) {
            return $this->_propDict["complianceUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the complianceUrl
    * The URL a user can visit to read about the data loss prevention policies for the organization. (ie, policies about what users shouldn't say in chats)
    *
    * @param string $val The value of the complianceUrl
    *
    * @return ChatMessagePolicyViolationPolicyTip
    */
    public function setComplianceUrl($val)
    {
        $this->_propDict["complianceUrl"] = $val;
        return $this;
    }
    /**
    * Gets the generalText
    * Explanatory text shown to the sender of the message.
    *
    * @return string The generalText
    */
    public function getGeneralText()
    {
        if (array_key_exists("generalText", $this->_propDict)) {
            return $this->_propDict["generalText"];
        } else {
            return null;
        }
    }

    /**
    * Sets the generalText
    * Explanatory text shown to the sender of the message.
    *
    * @param string $val The value of the generalText
    *
    * @return ChatMessagePolicyViolationPolicyTip
    */
    public function setGeneralText($val)
    {
        $this->_propDict["generalText"] = $val;
        return $this;
    }
    /**
    * Gets the matchedConditionDescriptions
    * The list of improper data in the message that was detected by the data loss prevention app. Each DLP app defines its own conditions, examples include 'Credit Card Number' and 'Social Security Number'.
    *
    * @return string The matchedConditionDescriptions
    */
    public function getMatchedConditionDescriptions()
    {
        if (array_key_exists("matchedConditionDescriptions", $this->_propDict)) {
            return $this->_propDict["matchedConditionDescriptions"];
        } else {
            return null;
        }
    }

    /**
    * Sets the matchedConditionDescriptions
    * The list of improper data in the message that was detected by the data loss prevention app. Each DLP app defines its own conditions, examples include 'Credit Card Number' and 'Social Security Number'.
    *
    * @param string $val The value of the matchedConditionDescriptions
    *
    * @return ChatMessagePolicyViolationPolicyTip
    */
    public function setMatchedConditionDescriptions($val)
    {
        $this->_propDict["matchedConditionDescriptions"] = $val;
        return $this;
    }
}
