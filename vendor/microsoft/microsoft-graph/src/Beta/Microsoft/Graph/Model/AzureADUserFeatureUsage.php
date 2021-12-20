<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AzureADUserFeatureUsage File
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
* AzureADUserFeatureUsage class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AzureADUserFeatureUsage extends Entity
{

     /** 
     * Gets the featureUsageDetails
     *
     * @return array The featureUsageDetails
     */
    public function getFeatureUsageDetails()
    {
        if (array_key_exists("featureUsageDetails", $this->_propDict)) {
           return $this->_propDict["featureUsageDetails"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the featureUsageDetails
    *
    * @param FeatureUsageDetail $val The featureUsageDetails
    *
    * @return AzureADUserFeatureUsage
    */
    public function setFeatureUsageDetails($val)
    {
		$this->_propDict["featureUsageDetails"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastUpdatedDateTime
    *
    * @return \DateTime The lastUpdatedDateTime
    */
    public function getLastUpdatedDateTime()
    {
        if (array_key_exists("lastUpdatedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastUpdatedDateTime"], "\DateTime")) {
                return $this->_propDict["lastUpdatedDateTime"];
            } else {
                $this->_propDict["lastUpdatedDateTime"] = new \DateTime($this->_propDict["lastUpdatedDateTime"]);
                return $this->_propDict["lastUpdatedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastUpdatedDateTime
    *
    * @param \DateTime $val The lastUpdatedDateTime
    *
    * @return AzureADUserFeatureUsage
    */
    public function setLastUpdatedDateTime($val)
    {
        $this->_propDict["lastUpdatedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the licenseAssigned
    *
    * @return AzureADLicenseType The licenseAssigned
    */
    public function getLicenseAssigned()
    {
        if (array_key_exists("licenseAssigned", $this->_propDict)) {
            if (is_a($this->_propDict["licenseAssigned"], "\Beta\Microsoft\Graph\Model\AzureADLicenseType")) {
                return $this->_propDict["licenseAssigned"];
            } else {
                $this->_propDict["licenseAssigned"] = new AzureADLicenseType($this->_propDict["licenseAssigned"]);
                return $this->_propDict["licenseAssigned"];
            }
        }
        return null;
    }
    
    /**
    * Sets the licenseAssigned
    *
    * @param AzureADLicenseType $val The licenseAssigned
    *
    * @return AzureADUserFeatureUsage
    */
    public function setLicenseAssigned($val)
    {
        $this->_propDict["licenseAssigned"] = $val;
        return $this;
    }
    
    /**
    * Gets the licenseRecommended
    *
    * @return AzureADLicenseType The licenseRecommended
    */
    public function getLicenseRecommended()
    {
        if (array_key_exists("licenseRecommended", $this->_propDict)) {
            if (is_a($this->_propDict["licenseRecommended"], "\Beta\Microsoft\Graph\Model\AzureADLicenseType")) {
                return $this->_propDict["licenseRecommended"];
            } else {
                $this->_propDict["licenseRecommended"] = new AzureADLicenseType($this->_propDict["licenseRecommended"]);
                return $this->_propDict["licenseRecommended"];
            }
        }
        return null;
    }
    
    /**
    * Sets the licenseRecommended
    *
    * @param AzureADLicenseType $val The licenseRecommended
    *
    * @return AzureADUserFeatureUsage
    */
    public function setLicenseRecommended($val)
    {
        $this->_propDict["licenseRecommended"] = $val;
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
    * @param string $val The userDisplayName
    *
    * @return AzureADUserFeatureUsage
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
    * @param string $val The userId
    *
    * @return AzureADUserFeatureUsage
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
    * @param string $val The userPrincipalName
    *
    * @return AzureADUserFeatureUsage
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }
    
}
