<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AutomaticRepliesSetting File
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
* AutomaticRepliesSetting class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AutomaticRepliesSetting extends Entity
{

    /**
    * Gets the externalAudience
    * The set of audience external to the signed-in user's organization who will receive the ExternalReplyMessage, if Status is AlwaysEnabled or Scheduled. Possible values are: none, contactsOnly, all.
    *
    * @return ExternalAudienceScope The externalAudience
    */
    public function getExternalAudience()
    {
        if (array_key_exists("externalAudience", $this->_propDict)) {
            if (is_a($this->_propDict["externalAudience"], "\Microsoft\Graph\Model\ExternalAudienceScope")) {
                return $this->_propDict["externalAudience"];
            } else {
                $this->_propDict["externalAudience"] = new ExternalAudienceScope($this->_propDict["externalAudience"]);
                return $this->_propDict["externalAudience"];
            }
        }
        return null;
    }

    /**
    * Sets the externalAudience
    * The set of audience external to the signed-in user's organization who will receive the ExternalReplyMessage, if Status is AlwaysEnabled or Scheduled. Possible values are: none, contactsOnly, all.
    *
    * @param ExternalAudienceScope $val The value to assign to the externalAudience
    *
    * @return AutomaticRepliesSetting The AutomaticRepliesSetting
    */
    public function setExternalAudience($val)
    {
        $this->_propDict["externalAudience"] = $val;
         return $this;
    }
    /**
    * Gets the externalReplyMessage
    * The automatic reply to send to the specified external audience, if Status is AlwaysEnabled or Scheduled.
    *
    * @return string The externalReplyMessage
    */
    public function getExternalReplyMessage()
    {
        if (array_key_exists("externalReplyMessage", $this->_propDict)) {
            return $this->_propDict["externalReplyMessage"];
        } else {
            return null;
        }
    }

    /**
    * Sets the externalReplyMessage
    * The automatic reply to send to the specified external audience, if Status is AlwaysEnabled or Scheduled.
    *
    * @param string $val The value of the externalReplyMessage
    *
    * @return AutomaticRepliesSetting
    */
    public function setExternalReplyMessage($val)
    {
        $this->_propDict["externalReplyMessage"] = $val;
        return $this;
    }
    /**
    * Gets the internalReplyMessage
    * The automatic reply to send to the audience internal to the signed-in user's organization, if Status is AlwaysEnabled or Scheduled.
    *
    * @return string The internalReplyMessage
    */
    public function getInternalReplyMessage()
    {
        if (array_key_exists("internalReplyMessage", $this->_propDict)) {
            return $this->_propDict["internalReplyMessage"];
        } else {
            return null;
        }
    }

    /**
    * Sets the internalReplyMessage
    * The automatic reply to send to the audience internal to the signed-in user's organization, if Status is AlwaysEnabled or Scheduled.
    *
    * @param string $val The value of the internalReplyMessage
    *
    * @return AutomaticRepliesSetting
    */
    public function setInternalReplyMessage($val)
    {
        $this->_propDict["internalReplyMessage"] = $val;
        return $this;
    }

    /**
    * Gets the scheduledEndDateTime
    * The date and time that automatic replies are set to end, if Status is set to Scheduled.
    *
    * @return DateTimeTimeZone The scheduledEndDateTime
    */
    public function getScheduledEndDateTime()
    {
        if (array_key_exists("scheduledEndDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["scheduledEndDateTime"], "\Microsoft\Graph\Model\DateTimeTimeZone")) {
                return $this->_propDict["scheduledEndDateTime"];
            } else {
                $this->_propDict["scheduledEndDateTime"] = new DateTimeTimeZone($this->_propDict["scheduledEndDateTime"]);
                return $this->_propDict["scheduledEndDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the scheduledEndDateTime
    * The date and time that automatic replies are set to end, if Status is set to Scheduled.
    *
    * @param DateTimeTimeZone $val The value to assign to the scheduledEndDateTime
    *
    * @return AutomaticRepliesSetting The AutomaticRepliesSetting
    */
    public function setScheduledEndDateTime($val)
    {
        $this->_propDict["scheduledEndDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the scheduledStartDateTime
    * The date and time that automatic replies are set to begin, if Status is set to Scheduled.
    *
    * @return DateTimeTimeZone The scheduledStartDateTime
    */
    public function getScheduledStartDateTime()
    {
        if (array_key_exists("scheduledStartDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["scheduledStartDateTime"], "\Microsoft\Graph\Model\DateTimeTimeZone")) {
                return $this->_propDict["scheduledStartDateTime"];
            } else {
                $this->_propDict["scheduledStartDateTime"] = new DateTimeTimeZone($this->_propDict["scheduledStartDateTime"]);
                return $this->_propDict["scheduledStartDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the scheduledStartDateTime
    * The date and time that automatic replies are set to begin, if Status is set to Scheduled.
    *
    * @param DateTimeTimeZone $val The value to assign to the scheduledStartDateTime
    *
    * @return AutomaticRepliesSetting The AutomaticRepliesSetting
    */
    public function setScheduledStartDateTime($val)
    {
        $this->_propDict["scheduledStartDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the status
    * Configurations status for automatic replies. Possible values are: disabled, alwaysEnabled, scheduled.
    *
    * @return AutomaticRepliesStatus The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Microsoft\Graph\Model\AutomaticRepliesStatus")) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new AutomaticRepliesStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    * Configurations status for automatic replies. Possible values are: disabled, alwaysEnabled, scheduled.
    *
    * @param AutomaticRepliesStatus $val The value to assign to the status
    *
    * @return AutomaticRepliesSetting The AutomaticRepliesSetting
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
         return $this;
    }
}
