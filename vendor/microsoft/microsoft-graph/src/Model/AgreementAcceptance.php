<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AgreementAcceptance File
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
* AgreementAcceptance class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AgreementAcceptance extends Entity
{
    /**
    * Gets the agreementFileId
    * ID of the agreement file accepted by the user.
    *
    * @return string The agreementFileId
    */
    public function getAgreementFileId()
    {
        if (array_key_exists("agreementFileId", $this->_propDict)) {
            return $this->_propDict["agreementFileId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the agreementFileId
    * ID of the agreement file accepted by the user.
    *
    * @param string $val The agreementFileId
    *
    * @return AgreementAcceptance
    */
    public function setAgreementFileId($val)
    {
        $this->_propDict["agreementFileId"] = $val;
        return $this;
    }
    
    /**
    * Gets the agreementId
    * ID of the agreement.
    *
    * @return string The agreementId
    */
    public function getAgreementId()
    {
        if (array_key_exists("agreementId", $this->_propDict)) {
            return $this->_propDict["agreementId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the agreementId
    * ID of the agreement.
    *
    * @param string $val The agreementId
    *
    * @return AgreementAcceptance
    */
    public function setAgreementId($val)
    {
        $this->_propDict["agreementId"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceDisplayName
    * The display name of the device used for accepting the agreement.
    *
    * @return string The deviceDisplayName
    */
    public function getDeviceDisplayName()
    {
        if (array_key_exists("deviceDisplayName", $this->_propDict)) {
            return $this->_propDict["deviceDisplayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceDisplayName
    * The display name of the device used for accepting the agreement.
    *
    * @param string $val The deviceDisplayName
    *
    * @return AgreementAcceptance
    */
    public function setDeviceDisplayName($val)
    {
        $this->_propDict["deviceDisplayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceId
    * The unique identifier of the device used for accepting the agreement.
    *
    * @return string The deviceId
    */
    public function getDeviceId()
    {
        if (array_key_exists("deviceId", $this->_propDict)) {
            return $this->_propDict["deviceId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceId
    * The unique identifier of the device used for accepting the agreement.
    *
    * @param string $val The deviceId
    *
    * @return AgreementAcceptance
    */
    public function setDeviceId($val)
    {
        $this->_propDict["deviceId"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceOSType
    * The operating system used for accepting the agreement.
    *
    * @return string The deviceOSType
    */
    public function getDeviceOSType()
    {
        if (array_key_exists("deviceOSType", $this->_propDict)) {
            return $this->_propDict["deviceOSType"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceOSType
    * The operating system used for accepting the agreement.
    *
    * @param string $val The deviceOSType
    *
    * @return AgreementAcceptance
    */
    public function setDeviceOSType($val)
    {
        $this->_propDict["deviceOSType"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceOSVersion
    * The operating system version of the device used for accepting the agreement.
    *
    * @return string The deviceOSVersion
    */
    public function getDeviceOSVersion()
    {
        if (array_key_exists("deviceOSVersion", $this->_propDict)) {
            return $this->_propDict["deviceOSVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceOSVersion
    * The operating system version of the device used for accepting the agreement.
    *
    * @param string $val The deviceOSVersion
    *
    * @return AgreementAcceptance
    */
    public function setDeviceOSVersion($val)
    {
        $this->_propDict["deviceOSVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the expirationDateTime
    * The expiration date time of the acceptance. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @return \DateTime The expirationDateTime
    */
    public function getExpirationDateTime()
    {
        if (array_key_exists("expirationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["expirationDateTime"], "\DateTime")) {
                return $this->_propDict["expirationDateTime"];
            } else {
                $this->_propDict["expirationDateTime"] = new \DateTime($this->_propDict["expirationDateTime"]);
                return $this->_propDict["expirationDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the expirationDateTime
    * The expiration date time of the acceptance. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @param \DateTime $val The expirationDateTime
    *
    * @return AgreementAcceptance
    */
    public function setExpirationDateTime($val)
    {
        $this->_propDict["expirationDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the recordedDateTime
    * The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @return \DateTime The recordedDateTime
    */
    public function getRecordedDateTime()
    {
        if (array_key_exists("recordedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["recordedDateTime"], "\DateTime")) {
                return $this->_propDict["recordedDateTime"];
            } else {
                $this->_propDict["recordedDateTime"] = new \DateTime($this->_propDict["recordedDateTime"]);
                return $this->_propDict["recordedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the recordedDateTime
    * The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @param \DateTime $val The recordedDateTime
    *
    * @return AgreementAcceptance
    */
    public function setRecordedDateTime($val)
    {
        $this->_propDict["recordedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the state
    * Possible values are: accepted, declined.
    *
    * @return AgreementAcceptanceState The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            if (is_a($this->_propDict["state"], "\Microsoft\Graph\Model\AgreementAcceptanceState")) {
                return $this->_propDict["state"];
            } else {
                $this->_propDict["state"] = new AgreementAcceptanceState($this->_propDict["state"]);
                return $this->_propDict["state"];
            }
        }
        return null;
    }
    
    /**
    * Sets the state
    * Possible values are: accepted, declined.
    *
    * @param AgreementAcceptanceState $val The state
    *
    * @return AgreementAcceptance
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
        return $this;
    }
    
    /**
    * Gets the userDisplayName
    * Display name of the user when the acceptance was recorded.
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
    * Display name of the user when the acceptance was recorded.
    *
    * @param string $val The userDisplayName
    *
    * @return AgreementAcceptance
    */
    public function setUserDisplayName($val)
    {
        $this->_propDict["userDisplayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the userEmail
    * Email of the user when the acceptance was recorded.
    *
    * @return string The userEmail
    */
    public function getUserEmail()
    {
        if (array_key_exists("userEmail", $this->_propDict)) {
            return $this->_propDict["userEmail"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userEmail
    * Email of the user when the acceptance was recorded.
    *
    * @param string $val The userEmail
    *
    * @return AgreementAcceptance
    */
    public function setUserEmail($val)
    {
        $this->_propDict["userEmail"] = $val;
        return $this;
    }
    
    /**
    * Gets the userId
    * ID of the user who accepted the agreement.
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
    * ID of the user who accepted the agreement.
    *
    * @param string $val The userId
    *
    * @return AgreementAcceptance
    */
    public function setUserId($val)
    {
        $this->_propDict["userId"] = $val;
        return $this;
    }
    
    /**
    * Gets the userPrincipalName
    * UPN of the user when the acceptance was recorded.
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
    * UPN of the user when the acceptance was recorded.
    *
    * @param string $val The userPrincipalName
    *
    * @return AgreementAcceptance
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }
    
}
