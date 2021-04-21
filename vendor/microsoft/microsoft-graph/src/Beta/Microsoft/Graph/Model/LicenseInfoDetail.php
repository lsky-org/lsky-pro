<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* LicenseInfoDetail File
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
* LicenseInfoDetail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class LicenseInfoDetail extends Entity
{

    /**
    * Gets the licenseType
    *
    * @return AzureADLicenseType The licenseType
    */
    public function getLicenseType()
    {
        if (array_key_exists("licenseType", $this->_propDict)) {
            if (is_a($this->_propDict["licenseType"], "\Beta\Microsoft\Graph\Model\AzureADLicenseType")) {
                return $this->_propDict["licenseType"];
            } else {
                $this->_propDict["licenseType"] = new AzureADLicenseType($this->_propDict["licenseType"]);
                return $this->_propDict["licenseType"];
            }
        }
        return null;
    }

    /**
    * Sets the licenseType
    *
    * @param AzureADLicenseType $val The value to assign to the licenseType
    *
    * @return LicenseInfoDetail The LicenseInfoDetail
    */
    public function setLicenseType($val)
    {
        $this->_propDict["licenseType"] = $val;
         return $this;
    }
    /**
    * Gets the totalAssignedCount
    *
    * @return int The totalAssignedCount
    */
    public function getTotalAssignedCount()
    {
        if (array_key_exists("totalAssignedCount", $this->_propDict)) {
            return $this->_propDict["totalAssignedCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the totalAssignedCount
    *
    * @param int $val The value of the totalAssignedCount
    *
    * @return LicenseInfoDetail
    */
    public function setTotalAssignedCount($val)
    {
        $this->_propDict["totalAssignedCount"] = $val;
        return $this;
    }
    /**
    * Gets the totalLicenseCount
    *
    * @return int The totalLicenseCount
    */
    public function getTotalLicenseCount()
    {
        if (array_key_exists("totalLicenseCount", $this->_propDict)) {
            return $this->_propDict["totalLicenseCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the totalLicenseCount
    *
    * @param int $val The value of the totalLicenseCount
    *
    * @return LicenseInfoDetail
    */
    public function setTotalLicenseCount($val)
    {
        $this->_propDict["totalLicenseCount"] = $val;
        return $this;
    }
    /**
    * Gets the totalUsageCount
    *
    * @return int The totalUsageCount
    */
    public function getTotalUsageCount()
    {
        if (array_key_exists("totalUsageCount", $this->_propDict)) {
            return $this->_propDict["totalUsageCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the totalUsageCount
    *
    * @param int $val The value of the totalUsageCount
    *
    * @return LicenseInfoDetail
    */
    public function setTotalUsageCount($val)
    {
        $this->_propDict["totalUsageCount"] = $val;
        return $this;
    }
}
