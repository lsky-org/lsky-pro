<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OfferShiftRequest File
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
* OfferShiftRequest class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OfferShiftRequest extends ScheduleChangeRequest
{
    /**
    * Gets the recipientActionDateTime
    * The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @return \DateTime The recipientActionDateTime
    */
    public function getRecipientActionDateTime()
    {
        if (array_key_exists("recipientActionDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["recipientActionDateTime"], "\DateTime")) {
                return $this->_propDict["recipientActionDateTime"];
            } else {
                $this->_propDict["recipientActionDateTime"] = new \DateTime($this->_propDict["recipientActionDateTime"]);
                return $this->_propDict["recipientActionDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the recipientActionDateTime
    * The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @param \DateTime $val The recipientActionDateTime
    *
    * @return OfferShiftRequest
    */
    public function setRecipientActionDateTime($val)
    {
        $this->_propDict["recipientActionDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the recipientActionMessage
    * Custom message sent by recipient of the offer shift request.
    *
    * @return string The recipientActionMessage
    */
    public function getRecipientActionMessage()
    {
        if (array_key_exists("recipientActionMessage", $this->_propDict)) {
            return $this->_propDict["recipientActionMessage"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the recipientActionMessage
    * Custom message sent by recipient of the offer shift request.
    *
    * @param string $val The recipientActionMessage
    *
    * @return OfferShiftRequest
    */
    public function setRecipientActionMessage($val)
    {
        $this->_propDict["recipientActionMessage"] = $val;
        return $this;
    }
    
    /**
    * Gets the recipientUserId
    * User id of the recipient of the offer shift request.
    *
    * @return string The recipientUserId
    */
    public function getRecipientUserId()
    {
        if (array_key_exists("recipientUserId", $this->_propDict)) {
            return $this->_propDict["recipientUserId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the recipientUserId
    * User id of the recipient of the offer shift request.
    *
    * @param string $val The recipientUserId
    *
    * @return OfferShiftRequest
    */
    public function setRecipientUserId($val)
    {
        $this->_propDict["recipientUserId"] = $val;
        return $this;
    }
    
    /**
    * Gets the senderShiftId
    * User id of the sender of the offer shift request.
    *
    * @return string The senderShiftId
    */
    public function getSenderShiftId()
    {
        if (array_key_exists("senderShiftId", $this->_propDict)) {
            return $this->_propDict["senderShiftId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the senderShiftId
    * User id of the sender of the offer shift request.
    *
    * @param string $val The senderShiftId
    *
    * @return OfferShiftRequest
    */
    public function setSenderShiftId($val)
    {
        $this->_propDict["senderShiftId"] = $val;
        return $this;
    }
    
}
