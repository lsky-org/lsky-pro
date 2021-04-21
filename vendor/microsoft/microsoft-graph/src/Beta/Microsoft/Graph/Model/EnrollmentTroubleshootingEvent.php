<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EnrollmentTroubleshootingEvent File
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
* EnrollmentTroubleshootingEvent class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EnrollmentTroubleshootingEvent extends DeviceManagementTroubleshootingEvent
{
    /**
    * Gets the deviceId
    * Azure AD device identifier.
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
    * Azure AD device identifier.
    *
    * @param string $val The deviceId
    *
    * @return EnrollmentTroubleshootingEvent
    */
    public function setDeviceId($val)
    {
        $this->_propDict["deviceId"] = $val;
        return $this;
    }
    
    /**
    * Gets the enrollmentType
    * Type of the enrollment. Possible values are: unknown, userEnrollment, deviceEnrollmentManager, appleBulkWithUser, appleBulkWithoutUser, windowsAzureADJoin, windowsBulkUserless, windowsAutoEnrollment, windowsBulkAzureDomainJoin, windowsCoManagement, windowsAzureADJoinUsingDeviceAuth, appleUserEnrollment, appleUserEnrollmentWithServiceAccount, azureAdJoinUsingAzureVmExtension, androidEnterpriseDedicatedDevice, androidEnterpriseFullyManaged, androidEnterpriseCorporateWorkProfile.
    *
    * @return DeviceEnrollmentType The enrollmentType
    */
    public function getEnrollmentType()
    {
        if (array_key_exists("enrollmentType", $this->_propDict)) {
            if (is_a($this->_propDict["enrollmentType"], "\Beta\Microsoft\Graph\Model\DeviceEnrollmentType")) {
                return $this->_propDict["enrollmentType"];
            } else {
                $this->_propDict["enrollmentType"] = new DeviceEnrollmentType($this->_propDict["enrollmentType"]);
                return $this->_propDict["enrollmentType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the enrollmentType
    * Type of the enrollment. Possible values are: unknown, userEnrollment, deviceEnrollmentManager, appleBulkWithUser, appleBulkWithoutUser, windowsAzureADJoin, windowsBulkUserless, windowsAutoEnrollment, windowsBulkAzureDomainJoin, windowsCoManagement, windowsAzureADJoinUsingDeviceAuth, appleUserEnrollment, appleUserEnrollmentWithServiceAccount, azureAdJoinUsingAzureVmExtension, androidEnterpriseDedicatedDevice, androidEnterpriseFullyManaged, androidEnterpriseCorporateWorkProfile.
    *
    * @param DeviceEnrollmentType $val The enrollmentType
    *
    * @return EnrollmentTroubleshootingEvent
    */
    public function setEnrollmentType($val)
    {
        $this->_propDict["enrollmentType"] = $val;
        return $this;
    }
    
    /**
    * Gets the failureCategory
    * Highlevel failure category. Possible values are: unknown, authentication, authorization, accountValidation, userValidation, deviceNotSupported, inMaintenance, badRequest, featureNotSupported, enrollmentRestrictionsEnforced, clientDisconnected, userAbandonment.
    *
    * @return DeviceEnrollmentFailureReason The failureCategory
    */
    public function getFailureCategory()
    {
        if (array_key_exists("failureCategory", $this->_propDict)) {
            if (is_a($this->_propDict["failureCategory"], "\Beta\Microsoft\Graph\Model\DeviceEnrollmentFailureReason")) {
                return $this->_propDict["failureCategory"];
            } else {
                $this->_propDict["failureCategory"] = new DeviceEnrollmentFailureReason($this->_propDict["failureCategory"]);
                return $this->_propDict["failureCategory"];
            }
        }
        return null;
    }
    
    /**
    * Sets the failureCategory
    * Highlevel failure category. Possible values are: unknown, authentication, authorization, accountValidation, userValidation, deviceNotSupported, inMaintenance, badRequest, featureNotSupported, enrollmentRestrictionsEnforced, clientDisconnected, userAbandonment.
    *
    * @param DeviceEnrollmentFailureReason $val The failureCategory
    *
    * @return EnrollmentTroubleshootingEvent
    */
    public function setFailureCategory($val)
    {
        $this->_propDict["failureCategory"] = $val;
        return $this;
    }
    
    /**
    * Gets the failureReason
    * Detailed failure reason.
    *
    * @return string The failureReason
    */
    public function getFailureReason()
    {
        if (array_key_exists("failureReason", $this->_propDict)) {
            return $this->_propDict["failureReason"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the failureReason
    * Detailed failure reason.
    *
    * @param string $val The failureReason
    *
    * @return EnrollmentTroubleshootingEvent
    */
    public function setFailureReason($val)
    {
        $this->_propDict["failureReason"] = $val;
        return $this;
    }
    
    /**
    * Gets the managedDeviceIdentifier
    * Device identifier created or collected by Intune.
    *
    * @return string The managedDeviceIdentifier
    */
    public function getManagedDeviceIdentifier()
    {
        if (array_key_exists("managedDeviceIdentifier", $this->_propDict)) {
            return $this->_propDict["managedDeviceIdentifier"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the managedDeviceIdentifier
    * Device identifier created or collected by Intune.
    *
    * @param string $val The managedDeviceIdentifier
    *
    * @return EnrollmentTroubleshootingEvent
    */
    public function setManagedDeviceIdentifier($val)
    {
        $this->_propDict["managedDeviceIdentifier"] = $val;
        return $this;
    }
    
    /**
    * Gets the operatingSystem
    * Operating System.
    *
    * @return string The operatingSystem
    */
    public function getOperatingSystem()
    {
        if (array_key_exists("operatingSystem", $this->_propDict)) {
            return $this->_propDict["operatingSystem"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the operatingSystem
    * Operating System.
    *
    * @param string $val The operatingSystem
    *
    * @return EnrollmentTroubleshootingEvent
    */
    public function setOperatingSystem($val)
    {
        $this->_propDict["operatingSystem"] = $val;
        return $this;
    }
    
    /**
    * Gets the osVersion
    * OS Version.
    *
    * @return string The osVersion
    */
    public function getOsVersion()
    {
        if (array_key_exists("osVersion", $this->_propDict)) {
            return $this->_propDict["osVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the osVersion
    * OS Version.
    *
    * @param string $val The osVersion
    *
    * @return EnrollmentTroubleshootingEvent
    */
    public function setOsVersion($val)
    {
        $this->_propDict["osVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the userId
    * Identifier for the user that tried to enroll the device.
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
    * Identifier for the user that tried to enroll the device.
    *
    * @param string $val The userId
    *
    * @return EnrollmentTroubleshootingEvent
    */
    public function setUserId($val)
    {
        $this->_propDict["userId"] = $val;
        return $this;
    }
    
}
