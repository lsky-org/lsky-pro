<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* FeatureUsageDetail File
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
* FeatureUsageDetail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class FeatureUsageDetail extends Entity
{
    /**
    * Gets the featureName
    *
    * @return string The featureName
    */
    public function getFeatureName()
    {
        if (array_key_exists("featureName", $this->_propDict)) {
            return $this->_propDict["featureName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the featureName
    *
    * @param string $val The value of the featureName
    *
    * @return FeatureUsageDetail
    */
    public function setFeatureName($val)
    {
        $this->_propDict["featureName"] = $val;
        return $this;
    }

    /**
    * Gets the lastConfiguredDateTime
    *
    * @return \DateTime The lastConfiguredDateTime
    */
    public function getLastConfiguredDateTime()
    {
        if (array_key_exists("lastConfiguredDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastConfiguredDateTime"], "\DateTime")) {
                return $this->_propDict["lastConfiguredDateTime"];
            } else {
                $this->_propDict["lastConfiguredDateTime"] = new \DateTime($this->_propDict["lastConfiguredDateTime"]);
                return $this->_propDict["lastConfiguredDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastConfiguredDateTime
    *
    * @param \DateTime $val The value to assign to the lastConfiguredDateTime
    *
    * @return FeatureUsageDetail The FeatureUsageDetail
    */
    public function setLastConfiguredDateTime($val)
    {
        $this->_propDict["lastConfiguredDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the lastUsedDateTime
    *
    * @return \DateTime The lastUsedDateTime
    */
    public function getLastUsedDateTime()
    {
        if (array_key_exists("lastUsedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastUsedDateTime"], "\DateTime")) {
                return $this->_propDict["lastUsedDateTime"];
            } else {
                $this->_propDict["lastUsedDateTime"] = new \DateTime($this->_propDict["lastUsedDateTime"]);
                return $this->_propDict["lastUsedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastUsedDateTime
    *
    * @param \DateTime $val The value to assign to the lastUsedDateTime
    *
    * @return FeatureUsageDetail The FeatureUsageDetail
    */
    public function setLastUsedDateTime($val)
    {
        $this->_propDict["lastUsedDateTime"] = $val;
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
    * @param AzureADLicenseType $val The value to assign to the licenseAssigned
    *
    * @return FeatureUsageDetail The FeatureUsageDetail
    */
    public function setLicenseAssigned($val)
    {
        $this->_propDict["licenseAssigned"] = $val;
         return $this;
    }

    /**
    * Gets the licenseRequired
    *
    * @return AzureADLicenseType The licenseRequired
    */
    public function getLicenseRequired()
    {
        if (array_key_exists("licenseRequired", $this->_propDict)) {
            if (is_a($this->_propDict["licenseRequired"], "\Beta\Microsoft\Graph\Model\AzureADLicenseType")) {
                return $this->_propDict["licenseRequired"];
            } else {
                $this->_propDict["licenseRequired"] = new AzureADLicenseType($this->_propDict["licenseRequired"]);
                return $this->_propDict["licenseRequired"];
            }
        }
        return null;
    }

    /**
    * Sets the licenseRequired
    *
    * @param AzureADLicenseType $val The value to assign to the licenseRequired
    *
    * @return FeatureUsageDetail The FeatureUsageDetail
    */
    public function setLicenseRequired($val)
    {
        $this->_propDict["licenseRequired"] = $val;
         return $this;
    }
}
