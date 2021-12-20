<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AutomaticRepliesMailTips File
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
* AutomaticRepliesMailTips class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AutomaticRepliesMailTips extends Entity
{
    /**
    * Gets the message
    * The automatic reply message.
    *
    * @return string The message
    */
    public function getMessage()
    {
        if (array_key_exists("message", $this->_propDict)) {
            return $this->_propDict["message"];
        } else {
            return null;
        }
    }

    /**
    * Sets the message
    * The automatic reply message.
    *
    * @param string $val The value of the message
    *
    * @return AutomaticRepliesMailTips
    */
    public function setMessage($val)
    {
        $this->_propDict["message"] = $val;
        return $this;
    }

    /**
    * Gets the messageLanguage
    * The language that the automatic reply message is in.
    *
    * @return LocaleInfo The messageLanguage
    */
    public function getMessageLanguage()
    {
        if (array_key_exists("messageLanguage", $this->_propDict)) {
            if (is_a($this->_propDict["messageLanguage"], "\Microsoft\Graph\Model\LocaleInfo")) {
                return $this->_propDict["messageLanguage"];
            } else {
                $this->_propDict["messageLanguage"] = new LocaleInfo($this->_propDict["messageLanguage"]);
                return $this->_propDict["messageLanguage"];
            }
        }
        return null;
    }

    /**
    * Sets the messageLanguage
    * The language that the automatic reply message is in.
    *
    * @param LocaleInfo $val The value to assign to the messageLanguage
    *
    * @return AutomaticRepliesMailTips The AutomaticRepliesMailTips
    */
    public function setMessageLanguage($val)
    {
        $this->_propDict["messageLanguage"] = $val;
         return $this;
    }

    /**
    * Gets the scheduledEndTime
    * The date and time that automatic replies are set to end.
    *
    * @return DateTimeTimeZone The scheduledEndTime
    */
    public function getScheduledEndTime()
    {
        if (array_key_exists("scheduledEndTime", $this->_propDict)) {
            if (is_a($this->_propDict["scheduledEndTime"], "\Microsoft\Graph\Model\DateTimeTimeZone")) {
                return $this->_propDict["scheduledEndTime"];
            } else {
                $this->_propDict["scheduledEndTime"] = new DateTimeTimeZone($this->_propDict["scheduledEndTime"]);
                return $this->_propDict["scheduledEndTime"];
            }
        }
        return null;
    }

    /**
    * Sets the scheduledEndTime
    * The date and time that automatic replies are set to end.
    *
    * @param DateTimeTimeZone $val The value to assign to the scheduledEndTime
    *
    * @return AutomaticRepliesMailTips The AutomaticRepliesMailTips
    */
    public function setScheduledEndTime($val)
    {
        $this->_propDict["scheduledEndTime"] = $val;
         return $this;
    }

    /**
    * Gets the scheduledStartTime
    * The date and time that automatic replies are set to begin.
    *
    * @return DateTimeTimeZone The scheduledStartTime
    */
    public function getScheduledStartTime()
    {
        if (array_key_exists("scheduledStartTime", $this->_propDict)) {
            if (is_a($this->_propDict["scheduledStartTime"], "\Microsoft\Graph\Model\DateTimeTimeZone")) {
                return $this->_propDict["scheduledStartTime"];
            } else {
                $this->_propDict["scheduledStartTime"] = new DateTimeTimeZone($this->_propDict["scheduledStartTime"]);
                return $this->_propDict["scheduledStartTime"];
            }
        }
        return null;
    }

    /**
    * Sets the scheduledStartTime
    * The date and time that automatic replies are set to begin.
    *
    * @param DateTimeTimeZone $val The value to assign to the scheduledStartTime
    *
    * @return AutomaticRepliesMailTips The AutomaticRepliesMailTips
    */
    public function setScheduledStartTime($val)
    {
        $this->_propDict["scheduledStartTime"] = $val;
         return $this;
    }
}
