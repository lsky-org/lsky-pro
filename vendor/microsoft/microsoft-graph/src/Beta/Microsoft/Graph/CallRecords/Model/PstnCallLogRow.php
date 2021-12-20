<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PstnCallLogRow File
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
* PstnCallLogRow class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PstnCallLogRow extends \Beta\Microsoft\Graph\Model\Entity
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
    * @return PstnCallLogRow
    */
    public function setCalleeNumber($val)
    {
        $this->_propDict["calleeNumber"] = $val;
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
    * @return PstnCallLogRow
    */
    public function setCallerNumber($val)
    {
        $this->_propDict["callerNumber"] = $val;
        return $this;
    }
    /**
    * Gets the callId
    *
    * @return string The callId
    */
    public function getCallId()
    {
        if (array_key_exists("callId", $this->_propDict)) {
            return $this->_propDict["callId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the callId
    *
    * @param string $val The value of the callId
    *
    * @return PstnCallLogRow
    */
    public function setCallId($val)
    {
        $this->_propDict["callId"] = $val;
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
    * @return PstnCallLogRow
    */
    public function setCallType($val)
    {
        $this->_propDict["callType"] = $val;
        return $this;
    }

    /**
    * Gets the charge
    *
    * @return \Beta\Microsoft\Graph\Model\Decimal The charge
    */
    public function getCharge()
    {
        if (array_key_exists("charge", $this->_propDict)) {
            if (is_a($this->_propDict["charge"], "\Beta\Microsoft\Graph\Model\Decimal")) {
                return $this->_propDict["charge"];
            } else {
                $this->_propDict["charge"] = new \Beta\Microsoft\Graph\Model\Decimal($this->_propDict["charge"]);
                return $this->_propDict["charge"];
            }
        }
        return null;
    }

    /**
    * Sets the charge
    *
    * @param \Beta\Microsoft\Graph\Model\Decimal $val The value to assign to the charge
    *
    * @return PstnCallLogRow The PstnCallLogRow
    */
    public function setCharge($val)
    {
        $this->_propDict["charge"] = $val;
         return $this;
    }
    /**
    * Gets the conferenceId
    *
    * @return string The conferenceId
    */
    public function getConferenceId()
    {
        if (array_key_exists("conferenceId", $this->_propDict)) {
            return $this->_propDict["conferenceId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the conferenceId
    *
    * @param string $val The value of the conferenceId
    *
    * @return PstnCallLogRow
    */
    public function setConferenceId($val)
    {
        $this->_propDict["conferenceId"] = $val;
        return $this;
    }

    /**
    * Gets the connectionCharge
    *
    * @return \Beta\Microsoft\Graph\Model\Decimal The connectionCharge
    */
    public function getConnectionCharge()
    {
        if (array_key_exists("connectionCharge", $this->_propDict)) {
            if (is_a($this->_propDict["connectionCharge"], "\Beta\Microsoft\Graph\Model\Decimal")) {
                return $this->_propDict["connectionCharge"];
            } else {
                $this->_propDict["connectionCharge"] = new \Beta\Microsoft\Graph\Model\Decimal($this->_propDict["connectionCharge"]);
                return $this->_propDict["connectionCharge"];
            }
        }
        return null;
    }

    /**
    * Sets the connectionCharge
    *
    * @param \Beta\Microsoft\Graph\Model\Decimal $val The value to assign to the connectionCharge
    *
    * @return PstnCallLogRow The PstnCallLogRow
    */
    public function setConnectionCharge($val)
    {
        $this->_propDict["connectionCharge"] = $val;
         return $this;
    }
    /**
    * Gets the currency
    *
    * @return string The currency
    */
    public function getCurrency()
    {
        if (array_key_exists("currency", $this->_propDict)) {
            return $this->_propDict["currency"];
        } else {
            return null;
        }
    }

    /**
    * Sets the currency
    *
    * @param string $val The value of the currency
    *
    * @return PstnCallLogRow
    */
    public function setCurrency($val)
    {
        $this->_propDict["currency"] = $val;
        return $this;
    }
    /**
    * Gets the destinationContext
    *
    * @return string The destinationContext
    */
    public function getDestinationContext()
    {
        if (array_key_exists("destinationContext", $this->_propDict)) {
            return $this->_propDict["destinationContext"];
        } else {
            return null;
        }
    }

    /**
    * Sets the destinationContext
    *
    * @param string $val The value of the destinationContext
    *
    * @return PstnCallLogRow
    */
    public function setDestinationContext($val)
    {
        $this->_propDict["destinationContext"] = $val;
        return $this;
    }
    /**
    * Gets the destinationName
    *
    * @return string The destinationName
    */
    public function getDestinationName()
    {
        if (array_key_exists("destinationName", $this->_propDict)) {
            return $this->_propDict["destinationName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the destinationName
    *
    * @param string $val The value of the destinationName
    *
    * @return PstnCallLogRow
    */
    public function setDestinationName($val)
    {
        $this->_propDict["destinationName"] = $val;
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
    * @return PstnCallLogRow
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
    * @return PstnCallLogRow The PstnCallLogRow
    */
    public function setEndDateTime($val)
    {
        $this->_propDict["endDateTime"] = $val;
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
    * @return PstnCallLogRow
    */
    public function setId($val)
    {
        $this->_propDict["id"] = $val;
        return $this;
    }
    /**
    * Gets the inventoryType
    *
    * @return string The inventoryType
    */
    public function getInventoryType()
    {
        if (array_key_exists("inventoryType", $this->_propDict)) {
            return $this->_propDict["inventoryType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the inventoryType
    *
    * @param string $val The value of the inventoryType
    *
    * @return PstnCallLogRow
    */
    public function setInventoryType($val)
    {
        $this->_propDict["inventoryType"] = $val;
        return $this;
    }
    /**
    * Gets the licenseCapability
    *
    * @return string The licenseCapability
    */
    public function getLicenseCapability()
    {
        if (array_key_exists("licenseCapability", $this->_propDict)) {
            return $this->_propDict["licenseCapability"];
        } else {
            return null;
        }
    }

    /**
    * Sets the licenseCapability
    *
    * @param string $val The value of the licenseCapability
    *
    * @return PstnCallLogRow
    */
    public function setLicenseCapability($val)
    {
        $this->_propDict["licenseCapability"] = $val;
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
    * @return PstnCallLogRow The PstnCallLogRow
    */
    public function setStartDateTime($val)
    {
        $this->_propDict["startDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the tenantCountryCode
    *
    * @return string The tenantCountryCode
    */
    public function getTenantCountryCode()
    {
        if (array_key_exists("tenantCountryCode", $this->_propDict)) {
            return $this->_propDict["tenantCountryCode"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tenantCountryCode
    *
    * @param string $val The value of the tenantCountryCode
    *
    * @return PstnCallLogRow
    */
    public function setTenantCountryCode($val)
    {
        $this->_propDict["tenantCountryCode"] = $val;
        return $this;
    }
    /**
    * Gets the usageCountryCode
    *
    * @return string The usageCountryCode
    */
    public function getUsageCountryCode()
    {
        if (array_key_exists("usageCountryCode", $this->_propDict)) {
            return $this->_propDict["usageCountryCode"];
        } else {
            return null;
        }
    }

    /**
    * Sets the usageCountryCode
    *
    * @param string $val The value of the usageCountryCode
    *
    * @return PstnCallLogRow
    */
    public function setUsageCountryCode($val)
    {
        $this->_propDict["usageCountryCode"] = $val;
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
    * @return PstnCallLogRow
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
    * @return PstnCallLogRow
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
    * @return PstnCallLogRow
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }
}
