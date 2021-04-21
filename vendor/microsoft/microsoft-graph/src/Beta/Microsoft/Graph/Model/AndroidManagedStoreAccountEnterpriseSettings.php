<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidManagedStoreAccountEnterpriseSettings File
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
* AndroidManagedStoreAccountEnterpriseSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AndroidManagedStoreAccountEnterpriseSettings extends Entity
{
    /**
    * Gets the androidDeviceOwnerFullyManagedEnrollmentEnabled
    * Company codes for AndroidManagedStoreAccountEnterpriseSettings
    *
    * @return bool The androidDeviceOwnerFullyManagedEnrollmentEnabled
    */
    public function getAndroidDeviceOwnerFullyManagedEnrollmentEnabled()
    {
        if (array_key_exists("androidDeviceOwnerFullyManagedEnrollmentEnabled", $this->_propDict)) {
            return $this->_propDict["androidDeviceOwnerFullyManagedEnrollmentEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the androidDeviceOwnerFullyManagedEnrollmentEnabled
    * Company codes for AndroidManagedStoreAccountEnterpriseSettings
    *
    * @param bool $val The androidDeviceOwnerFullyManagedEnrollmentEnabled
    *
    * @return AndroidManagedStoreAccountEnterpriseSettings
    */
    public function setAndroidDeviceOwnerFullyManagedEnrollmentEnabled($val)
    {
        $this->_propDict["androidDeviceOwnerFullyManagedEnrollmentEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the bindStatus
    * Bind status of the tenant with the Google EMM API. Possible values are: notBound, bound, boundAndValidated, unbinding.
    *
    * @return AndroidManagedStoreAccountBindStatus The bindStatus
    */
    public function getBindStatus()
    {
        if (array_key_exists("bindStatus", $this->_propDict)) {
            if (is_a($this->_propDict["bindStatus"], "\Beta\Microsoft\Graph\Model\AndroidManagedStoreAccountBindStatus")) {
                return $this->_propDict["bindStatus"];
            } else {
                $this->_propDict["bindStatus"] = new AndroidManagedStoreAccountBindStatus($this->_propDict["bindStatus"]);
                return $this->_propDict["bindStatus"];
            }
        }
        return null;
    }
    
    /**
    * Sets the bindStatus
    * Bind status of the tenant with the Google EMM API. Possible values are: notBound, bound, boundAndValidated, unbinding.
    *
    * @param AndroidManagedStoreAccountBindStatus $val The bindStatus
    *
    * @return AndroidManagedStoreAccountEnterpriseSettings
    */
    public function setBindStatus($val)
    {
        $this->_propDict["bindStatus"] = $val;
        return $this;
    }
    

     /** 
     * Gets the companyCodes
    * Company codes for AndroidManagedStoreAccountEnterpriseSettings
     *
     * @return array The companyCodes
     */
    public function getCompanyCodes()
    {
        if (array_key_exists("companyCodes", $this->_propDict)) {
           return $this->_propDict["companyCodes"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the companyCodes
    * Company codes for AndroidManagedStoreAccountEnterpriseSettings
    *
    * @param AndroidEnrollmentCompanyCode $val The companyCodes
    *
    * @return AndroidManagedStoreAccountEnterpriseSettings
    */
    public function setCompanyCodes($val)
    {
		$this->_propDict["companyCodes"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceOwnerManagementEnabled
    * Indicates if this account is flighting for Android Device Owner Management with CloudDPC.
    *
    * @return bool The deviceOwnerManagementEnabled
    */
    public function getDeviceOwnerManagementEnabled()
    {
        if (array_key_exists("deviceOwnerManagementEnabled", $this->_propDict)) {
            return $this->_propDict["deviceOwnerManagementEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceOwnerManagementEnabled
    * Indicates if this account is flighting for Android Device Owner Management with CloudDPC.
    *
    * @param bool $val The deviceOwnerManagementEnabled
    *
    * @return AndroidManagedStoreAccountEnterpriseSettings
    */
    public function setDeviceOwnerManagementEnabled($val)
    {
        $this->_propDict["deviceOwnerManagementEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the enrollmentTarget
    * Indicates which users can enroll devices in Android Enterprise device management. Possible values are: none, all, targeted, targetedAsEnrollmentRestrictions.
    *
    * @return AndroidManagedStoreAccountEnrollmentTarget The enrollmentTarget
    */
    public function getEnrollmentTarget()
    {
        if (array_key_exists("enrollmentTarget", $this->_propDict)) {
            if (is_a($this->_propDict["enrollmentTarget"], "\Beta\Microsoft\Graph\Model\AndroidManagedStoreAccountEnrollmentTarget")) {
                return $this->_propDict["enrollmentTarget"];
            } else {
                $this->_propDict["enrollmentTarget"] = new AndroidManagedStoreAccountEnrollmentTarget($this->_propDict["enrollmentTarget"]);
                return $this->_propDict["enrollmentTarget"];
            }
        }
        return null;
    }
    
    /**
    * Sets the enrollmentTarget
    * Indicates which users can enroll devices in Android Enterprise device management. Possible values are: none, all, targeted, targetedAsEnrollmentRestrictions.
    *
    * @param AndroidManagedStoreAccountEnrollmentTarget $val The enrollmentTarget
    *
    * @return AndroidManagedStoreAccountEnterpriseSettings
    */
    public function setEnrollmentTarget($val)
    {
        $this->_propDict["enrollmentTarget"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastAppSyncDateTime
    * Last completion time for app sync
    *
    * @return \DateTime The lastAppSyncDateTime
    */
    public function getLastAppSyncDateTime()
    {
        if (array_key_exists("lastAppSyncDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastAppSyncDateTime"], "\DateTime")) {
                return $this->_propDict["lastAppSyncDateTime"];
            } else {
                $this->_propDict["lastAppSyncDateTime"] = new \DateTime($this->_propDict["lastAppSyncDateTime"]);
                return $this->_propDict["lastAppSyncDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastAppSyncDateTime
    * Last completion time for app sync
    *
    * @param \DateTime $val The lastAppSyncDateTime
    *
    * @return AndroidManagedStoreAccountEnterpriseSettings
    */
    public function setLastAppSyncDateTime($val)
    {
        $this->_propDict["lastAppSyncDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastAppSyncStatus
    * Last application sync result. Possible values are: success, credentialsNotValid, androidForWorkApiError, managementServiceError, unknownError, none.
    *
    * @return AndroidManagedStoreAccountAppSyncStatus The lastAppSyncStatus
    */
    public function getLastAppSyncStatus()
    {
        if (array_key_exists("lastAppSyncStatus", $this->_propDict)) {
            if (is_a($this->_propDict["lastAppSyncStatus"], "\Beta\Microsoft\Graph\Model\AndroidManagedStoreAccountAppSyncStatus")) {
                return $this->_propDict["lastAppSyncStatus"];
            } else {
                $this->_propDict["lastAppSyncStatus"] = new AndroidManagedStoreAccountAppSyncStatus($this->_propDict["lastAppSyncStatus"]);
                return $this->_propDict["lastAppSyncStatus"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastAppSyncStatus
    * Last application sync result. Possible values are: success, credentialsNotValid, androidForWorkApiError, managementServiceError, unknownError, none.
    *
    * @param AndroidManagedStoreAccountAppSyncStatus $val The lastAppSyncStatus
    *
    * @return AndroidManagedStoreAccountEnterpriseSettings
    */
    public function setLastAppSyncStatus($val)
    {
        $this->_propDict["lastAppSyncStatus"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastModifiedDateTime
    * Last modification time for Android enterprise settings
    *
    * @return \DateTime The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedDateTime"], "\DateTime")) {
                return $this->_propDict["lastModifiedDateTime"];
            } else {
                $this->_propDict["lastModifiedDateTime"] = new \DateTime($this->_propDict["lastModifiedDateTime"]);
                return $this->_propDict["lastModifiedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastModifiedDateTime
    * Last modification time for Android enterprise settings
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return AndroidManagedStoreAccountEnterpriseSettings
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the ownerOrganizationName
    * Organization name used when onboarding Android Enterprise
    *
    * @return string The ownerOrganizationName
    */
    public function getOwnerOrganizationName()
    {
        if (array_key_exists("ownerOrganizationName", $this->_propDict)) {
            return $this->_propDict["ownerOrganizationName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the ownerOrganizationName
    * Organization name used when onboarding Android Enterprise
    *
    * @param string $val The ownerOrganizationName
    *
    * @return AndroidManagedStoreAccountEnterpriseSettings
    */
    public function setOwnerOrganizationName($val)
    {
        $this->_propDict["ownerOrganizationName"] = $val;
        return $this;
    }
    
    /**
    * Gets the ownerUserPrincipalName
    * Owner UPN that created the enterprise
    *
    * @return string The ownerUserPrincipalName
    */
    public function getOwnerUserPrincipalName()
    {
        if (array_key_exists("ownerUserPrincipalName", $this->_propDict)) {
            return $this->_propDict["ownerUserPrincipalName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the ownerUserPrincipalName
    * Owner UPN that created the enterprise
    *
    * @param string $val The ownerUserPrincipalName
    *
    * @return AndroidManagedStoreAccountEnterpriseSettings
    */
    public function setOwnerUserPrincipalName($val)
    {
        $this->_propDict["ownerUserPrincipalName"] = $val;
        return $this;
    }
    
    /**
    * Gets the targetGroupIds
    * Specifies which AAD groups can enroll devices in Android for Work device management if enrollmentTarget is set to 'Targeted'
    *
    * @return string The targetGroupIds
    */
    public function getTargetGroupIds()
    {
        if (array_key_exists("targetGroupIds", $this->_propDict)) {
            return $this->_propDict["targetGroupIds"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the targetGroupIds
    * Specifies which AAD groups can enroll devices in Android for Work device management if enrollmentTarget is set to 'Targeted'
    *
    * @param string $val The targetGroupIds
    *
    * @return AndroidManagedStoreAccountEnterpriseSettings
    */
    public function setTargetGroupIds($val)
    {
        $this->_propDict["targetGroupIds"] = $val;
        return $this;
    }
    
}
