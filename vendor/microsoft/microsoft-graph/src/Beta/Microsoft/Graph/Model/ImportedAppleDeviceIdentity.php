<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ImportedAppleDeviceIdentity File
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
* ImportedAppleDeviceIdentity class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ImportedAppleDeviceIdentity extends Entity
{
    /**
    * Gets the createdDateTime
    * Created Date Time of the device
    *
    * @return \DateTime The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime")) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the createdDateTime
    * Created Date Time of the device
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return ImportedAppleDeviceIdentity
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the description
    * The description of the device
    *
    * @return string The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the description
    * The description of the device
    *
    * @param string $val The description
    *
    * @return ImportedAppleDeviceIdentity
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the discoverySource
    * Apple device discovery source. Possible values are: unknown, adminImport, deviceEnrollmentProgram.
    *
    * @return DiscoverySource The discoverySource
    */
    public function getDiscoverySource()
    {
        if (array_key_exists("discoverySource", $this->_propDict)) {
            if (is_a($this->_propDict["discoverySource"], "\Beta\Microsoft\Graph\Model\DiscoverySource")) {
                return $this->_propDict["discoverySource"];
            } else {
                $this->_propDict["discoverySource"] = new DiscoverySource($this->_propDict["discoverySource"]);
                return $this->_propDict["discoverySource"];
            }
        }
        return null;
    }
    
    /**
    * Sets the discoverySource
    * Apple device discovery source. Possible values are: unknown, adminImport, deviceEnrollmentProgram.
    *
    * @param DiscoverySource $val The discoverySource
    *
    * @return ImportedAppleDeviceIdentity
    */
    public function setDiscoverySource($val)
    {
        $this->_propDict["discoverySource"] = $val;
        return $this;
    }
    
    /**
    * Gets the enrollmentState
    * The state of the device in Intune. Possible values are: unknown, enrolled, pendingReset, failed, notContacted, blocked.
    *
    * @return EnrollmentState The enrollmentState
    */
    public function getEnrollmentState()
    {
        if (array_key_exists("enrollmentState", $this->_propDict)) {
            if (is_a($this->_propDict["enrollmentState"], "\Beta\Microsoft\Graph\Model\EnrollmentState")) {
                return $this->_propDict["enrollmentState"];
            } else {
                $this->_propDict["enrollmentState"] = new EnrollmentState($this->_propDict["enrollmentState"]);
                return $this->_propDict["enrollmentState"];
            }
        }
        return null;
    }
    
    /**
    * Sets the enrollmentState
    * The state of the device in Intune. Possible values are: unknown, enrolled, pendingReset, failed, notContacted, blocked.
    *
    * @param EnrollmentState $val The enrollmentState
    *
    * @return ImportedAppleDeviceIdentity
    */
    public function setEnrollmentState($val)
    {
        $this->_propDict["enrollmentState"] = $val;
        return $this;
    }
    
    /**
    * Gets the isDeleted
    * Indicates if the device is deleted from Apple Business Manager
    *
    * @return bool The isDeleted
    */
    public function getIsDeleted()
    {
        if (array_key_exists("isDeleted", $this->_propDict)) {
            return $this->_propDict["isDeleted"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isDeleted
    * Indicates if the device is deleted from Apple Business Manager
    *
    * @param bool $val The isDeleted
    *
    * @return ImportedAppleDeviceIdentity
    */
    public function setIsDeleted($val)
    {
        $this->_propDict["isDeleted"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the isSupervised
    * Indicates if the Apple device is supervised. More information is at: https://support.apple.com/HT202837
    *
    * @return bool The isSupervised
    */
    public function getIsSupervised()
    {
        if (array_key_exists("isSupervised", $this->_propDict)) {
            return $this->_propDict["isSupervised"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isSupervised
    * Indicates if the Apple device is supervised. More information is at: https://support.apple.com/HT202837
    *
    * @param bool $val The isSupervised
    *
    * @return ImportedAppleDeviceIdentity
    */
    public function setIsSupervised($val)
    {
        $this->_propDict["isSupervised"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the lastContactedDateTime
    * Last Contacted Date Time of the device
    *
    * @return \DateTime The lastContactedDateTime
    */
    public function getLastContactedDateTime()
    {
        if (array_key_exists("lastContactedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastContactedDateTime"], "\DateTime")) {
                return $this->_propDict["lastContactedDateTime"];
            } else {
                $this->_propDict["lastContactedDateTime"] = new \DateTime($this->_propDict["lastContactedDateTime"]);
                return $this->_propDict["lastContactedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastContactedDateTime
    * Last Contacted Date Time of the device
    *
    * @param \DateTime $val The lastContactedDateTime
    *
    * @return ImportedAppleDeviceIdentity
    */
    public function setLastContactedDateTime($val)
    {
        $this->_propDict["lastContactedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the platform
    * The platform of the Device. Possible values are: unknown, ios, android, windows, windowsMobile, macOS.
    *
    * @return Platform The platform
    */
    public function getPlatform()
    {
        if (array_key_exists("platform", $this->_propDict)) {
            if (is_a($this->_propDict["platform"], "\Beta\Microsoft\Graph\Model\Platform")) {
                return $this->_propDict["platform"];
            } else {
                $this->_propDict["platform"] = new Platform($this->_propDict["platform"]);
                return $this->_propDict["platform"];
            }
        }
        return null;
    }
    
    /**
    * Sets the platform
    * The platform of the Device. Possible values are: unknown, ios, android, windows, windowsMobile, macOS.
    *
    * @param Platform $val The platform
    *
    * @return ImportedAppleDeviceIdentity
    */
    public function setPlatform($val)
    {
        $this->_propDict["platform"] = $val;
        return $this;
    }
    
    /**
    * Gets the requestedEnrollmentProfileAssignmentDateTime
    * The time enrollment profile was assigned to the device
    *
    * @return \DateTime The requestedEnrollmentProfileAssignmentDateTime
    */
    public function getRequestedEnrollmentProfileAssignmentDateTime()
    {
        if (array_key_exists("requestedEnrollmentProfileAssignmentDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["requestedEnrollmentProfileAssignmentDateTime"], "\DateTime")) {
                return $this->_propDict["requestedEnrollmentProfileAssignmentDateTime"];
            } else {
                $this->_propDict["requestedEnrollmentProfileAssignmentDateTime"] = new \DateTime($this->_propDict["requestedEnrollmentProfileAssignmentDateTime"]);
                return $this->_propDict["requestedEnrollmentProfileAssignmentDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the requestedEnrollmentProfileAssignmentDateTime
    * The time enrollment profile was assigned to the device
    *
    * @param \DateTime $val The requestedEnrollmentProfileAssignmentDateTime
    *
    * @return ImportedAppleDeviceIdentity
    */
    public function setRequestedEnrollmentProfileAssignmentDateTime($val)
    {
        $this->_propDict["requestedEnrollmentProfileAssignmentDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the requestedEnrollmentProfileId
    * Enrollment profile Id admin intends to apply to the device during next enrollment
    *
    * @return string The requestedEnrollmentProfileId
    */
    public function getRequestedEnrollmentProfileId()
    {
        if (array_key_exists("requestedEnrollmentProfileId", $this->_propDict)) {
            return $this->_propDict["requestedEnrollmentProfileId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the requestedEnrollmentProfileId
    * Enrollment profile Id admin intends to apply to the device during next enrollment
    *
    * @param string $val The requestedEnrollmentProfileId
    *
    * @return ImportedAppleDeviceIdentity
    */
    public function setRequestedEnrollmentProfileId($val)
    {
        $this->_propDict["requestedEnrollmentProfileId"] = $val;
        return $this;
    }
    
    /**
    * Gets the serialNumber
    * Device serial number
    *
    * @return string The serialNumber
    */
    public function getSerialNumber()
    {
        if (array_key_exists("serialNumber", $this->_propDict)) {
            return $this->_propDict["serialNumber"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the serialNumber
    * Device serial number
    *
    * @param string $val The serialNumber
    *
    * @return ImportedAppleDeviceIdentity
    */
    public function setSerialNumber($val)
    {
        $this->_propDict["serialNumber"] = $val;
        return $this;
    }
    
}
