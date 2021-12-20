<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DirectRoutingLogRow File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\CallRecords\Model;
/**
* DirectRoutingLogRow class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DirectRoutingLogRow extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the calleeNumber
    *
    * @return string The calleeNumber
    */
    public function getCalleeNumber()
    {
        if (array_key_exists("calleeNumber", $this->_propDict)) {
            return $this->_propDict["calleeNumber"];
        } else {
            return null;
        }
    }

    /**
    * Sets the calleeNumber
    *
    * @param string $val The value of the calleeNumber
    *
    * @return DirectRoutingLogRow
    */
    public function setCalleeNumber($val)
    {
        $this->_propDict["calleeNumber"] = $val;
        return $this;
    }
    /**
    * Gets the callEndSubReason
    *
    * @return int The callEndSubReason
    */
    public function getCallEndSubReason()
    {
        if (array_key_exists("callEndSubReason", $this->_propDict)) {
            return $this->_propDict["callEndSubReason"];
        } else {
            return null;
        }
    }

    /**
    * Sets the callEndSubReason
    *
    * @param int $val The value of the callEndSubReason
    *
    * @return DirectRoutingLogRow
    */
    public function setCallEndSubReason($val)
    {
        $this->_propDict["callEndSubReason"] = $val;
        return $this;
    }
    /**
    * Gets the callerNumber
    *
    * @return string The callerNumber
    */
    public function getCallerNumber()
    {
        if (array_key_exists("callerNumber", $this->_propDict)) {
            return $this->_propDict["callerNumber"];
        } else {
            return null;
        }
    }

    /**
    * Sets the callerNumber
    *
    * @param string $val The value of the callerNumber
    *
    * @return DirectRoutingLogRow
    */
    public function setCallerNumber($val)
    {
        $this->_propDict["callerNumber"] = $val;
        return $this;
    }
    /**
    * Gets the callType
    *
    * @return string The callType
    */
    public function getCallType()
    {
        if (array_key_exists("callType", $this->_propDict)) {
            return $this->_propDict["callType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the callType
    *
    * @param string $val The value of the callType
    *
    * @return DirectRoutingLogRow
    */
    public function setCallType($val)
    {
        $this->_propDict["callType"] = $val;
        return $this;
    }
    /**
    * Gets the correlationId
    *
    * @return string The correlationId
    */
    public function getCorrelationId()
    {
        if (array_key_exists("correlationId", $this->_propDict)) {
            return $this->_propDict["correlationId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the correlationId
    *
    * @param string $val The value of the correlationId
    *
    * @return DirectRoutingLogRow
    */
    public function setCorrelationId($val)
    {
        $this->_propDict["correlationId"] = $val;
        return $this;
    }
    /**
    * Gets the duration
    *
    * @return int The duration
    */
    public function getDuration()
    {
        if (array_key_exists("duration", $this->_propDict)) {
            return $this->_propDict["duration"];
        } else {
            return null;
        }
    }

    /**
    * Sets the duration
    *
    * @param int $val The value of the duration
    *
    * @return DirectRoutingLogRow
    */
    public function setDuration($val)
    {
        $this->_propDict["duration"] = $val;
        return $this;
    }

    /**
    * Gets the endDateTime
    *
    * @return \DateTime The endDateTime
    */
    public function getEndDateTime()
    {
        if (array_key_exists("endDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["endDateTime"], "\DateTime")) {
                return $this->_propDict["endDateTime"];
            } else {
                $this->_propDict["endDateTime"] = new \DateTime($this->_propDict["endDateTime"]);
                return $this->_propDict["endDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the endDateTime
    *
    * @param \DateTime $val The value to assign to the endDateTime
    *
    * @return DirectRoutingLogRow The DirectRoutingLogRow
    */
    public function setEndDateTime($val)
    {
        $this->_propDict["endDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the failureDateTime
    *
    * @return \DateTime The failureDateTime
    */
    public function getFailureDateTime()
    {
        if (array_key_exists("failureDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["failureDateTime"], "\DateTime")) {
                return $this->_propDict["failureDateTime"];
            } else {
                $this->_propDict["failureDateTime"] = new \DateTime($this->_propDict["failureDateTime"]);
                return $this->_propDict["failureDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the failureDateTime
    *
    * @param \DateTime $val The value to assign to the failureDateTime
    *
    * @return DirectRoutingLogRow The DirectRoutingLogRow
    */
    public function setFailureDateTime($val)
    {
        $this->_propDict["failureDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the finalSipCode
    *
    * @return int The finalSipCode
    */
    public function getFinalSipCode()
    {
        if (array_key_exists("finalSipCode", $this->_propDict)) {
            return $this->_propDict["finalSipCode"];
        } else {
            return null;
        }
    }

    /**
    * Sets the finalSipCode
    *
    * @param int $val The value of the finalSipCode
    *
    * @return DirectRoutingLogRow
    */
    public function setFinalSipCode($val)
    {
        $this->_propDict["finalSipCode"] = $val;
        return $this;
    }
    /**
    * Gets the finalSipCodePhrase
    *
    * @return string The finalSipCodePhrase
    */
    public function getFinalSipCodePhrase()
    {
        if (array_key_exists("finalSipCodePhrase", $this->_propDict)) {
            return $this->_propDict["finalSipCodePhrase"];
        } else {
            return null;
        }
    }

    /**
    * Sets the finalSipCodePhrase
    *
    * @param string $val The value of the finalSipCodePhrase
    *
    * @return DirectRoutingLogRow
    */
    public function setFinalSipCodePhrase($val)
    {
        $this->_propDict["finalSipCodePhrase"] = $val;
        return $this;
    }
    /**
    * Gets the id
    *
    * @return string The id
    */
    public function getId()
    {
        if (array_key_exists("id", $this->_propDict)) {
            return $this->_propDict["id"];
        } else {
            return null;
        }
    }

    /**
    * Sets the id
    *
    * @param string $val The value of the id
    *
    * @return DirectRoutingLogRow
    */
    public function setId($val)
    {
        $this->_propDict["id"] = $val;
        return $this;
    }

    /**
    * Gets the inviteDateTime
    *
    * @return \DateTime The inviteDateTime
    */
    public function getInviteDateTime()
    {
        if (array_key_exists("inviteDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["inviteDateTime"], "\DateTime")) {
                return $this->_propDict["inviteDateTime"];
            } else {
                $this->_propDict["inviteDateTime"] = new \DateTime($this->_propDict["inviteDateTime"]);
                return $this->_propDict["inviteDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the inviteDateTime
    *
    * @param \DateTime $val The value to assign to the inviteDateTime
    *
    * @return DirectRoutingLogRow The DirectRoutingLogRow
    */
    public function setInviteDateTime($val)
    {
        $this->_propDict["inviteDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the mediaBypassEnabled
    *
    * @return bool The mediaBypassEnabled
    */
    public function getMediaBypassEnabled()
    {
        if (array_key_exists("mediaBypassEnabled", $this->_propDict)) {
            return $this->_propDict["mediaBypassEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the mediaBypassEnabled
    *
    * @param bool $val The value of the mediaBypassEnabled
    *
    * @return DirectRoutingLogRow
    */
    public function setMediaBypassEnabled($val)
    {
        $this->_propDict["mediaBypassEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the mediaPathLocation
    *
    * @return string The mediaPathLocation
    */
    public function getMediaPathLocation()
    {
        if (array_key_exists("mediaPathLocation", $this->_propDict)) {
            return $this->_propDict["mediaPathLocation"];
        } else {
            return null;
        }
    }

    /**
    * Sets the mediaPathLocation
    *
    * @param string $val The value of the mediaPathLocation
    *
    * @return DirectRoutingLogRow
    */
    public function setMediaPathLocation($val)
    {
        $this->_propDict["mediaPathLocation"] = $val;
        return $this;
    }
    /**
    * Gets the signalingLocation
    *
    * @return string The signalingLocation
    */
    public function getSignalingLocation()
    {
        if (array_key_exists("signalingLocation", $this->_propDict)) {
            return $this->_propDict["signalingLocation"];
        } else {
            return null;
        }
    }

    /**
    * Sets the signalingLocation
    *
    * @param string $val The value of the signalingLocation
    *
    * @return DirectRoutingLogRow
    */
    public function setSignalingLocation($val)
    {
        $this->_propDict["signalingLocation"] = $val;
        return $this;
    }

    /**
    * Gets the startDateTime
    *
    * @return \DateTime The startDateTime
    */
    public function getStartDateTime()
    {
        if (array_key_exists("startDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["startDateTime"], "\DateTime")) {
                return $this->_propDict["startDateTime"];
            } else {
                $this->_propDict["startDateTime"] = new \DateTime($this->_propDict["startDateTime"]);
                return $this->_propDict["startDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the startDateTime
    *
    * @param \DateTime $val The value to assign to the startDateTime
    *
    * @return DirectRoutingLogRow The DirectRoutingLogRow
    */
    public function setStartDateTime($val)
    {
        $this->_propDict["startDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the successfulCall
    *
    * @return bool The successfulCall
    */
    public function getSuccessfulCall()
    {
        if (array_key_exists("successfulCall", $this->_propDict)) {
            return $this->_propDict["successfulCall"];
        } else {
            return null;
        }
    }

    /**
    * Sets the successfulCall
    *
    * @param bool $val The value of the successfulCall
    *
    * @return DirectRoutingLogRow
    */
    public function setSuccessfulCall($val)
    {
        $this->_propDict["successfulCall"] = $val;
        return $this;
    }
    /**
    * Gets the trunkFullyQualifiedDomainName
    *
    * @return string The trunkFullyQualifiedDomainName
    */
    public function getTrunkFullyQualifiedDomainName()
    {
        if (array_key_exists("trunkFullyQualifiedDomainName", $this->_propDict)) {
            return $this->_propDict["trunkFullyQualifiedDomainName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the trunkFullyQualifiedDomainName
    *
    * @param string $val The value of the trunkFullyQualifiedDomainName
    *
    * @return DirectRoutingLogRow
    */
    public function setTrunkFullyQualifiedDomainName($val)
    {
        $this->_propDict["trunkFullyQualifiedDomainName"] = $val;
        return $this;
    }
    /**
    * Gets the userDisplayName
    *
    * @return string The userDisplayName
    */
    public function getUserDisplayName()
    {
        if (array_key_exists("userDisplayName", $this->_propDict)) {
            return $this->_propDict["userDisplayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userDisplayName
    *
    * @param string $val The value of the userDisplayName
    *
    * @return DirectRoutingLogRow
    */
    public function setUserDisplayName($val)
    {
        $this->_propDict["userDisplayName"] = $val;
        return $this;
    }
    /**
    * Gets the userId
    *
    * @return string The userId
    */
    public function getUserId()
    {
        if (array_key_exists("userId", $this->_propDict)) {
            return $this->_propDict["userId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userId
    *
    * @param string $val The value of the userId
    *
    * @return DirectRoutingLogRow
    */
    public function setUserId($val)
    {
        $this->_propDict["userId"] = $val;
        return $this;
    }
    /**
    * Gets the userPrincipalName
    *
    * @return string The userPrincipalName
    */
    public function getUserPrincipalName()
    {
        if (array_key_exists("userPrincipalName", $this->_propDict)) {
            return $this->_propDict["userPrincipalName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userPrincipalName
    *
    * @param string $val The value of the userPrincipalName
    *
    * @return DirectRoutingLogRow
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }
}
