<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AzureADLicenseUsage File
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
* AzureADLicenseUsage class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AzureADLicenseUsage extends Entity
{

     /** 
     * Gets the licenseInfoDetails
     *
     * @return array The licenseInfoDetails
     */
    public function getLicenseInfoDetails()
    {
        if (array_key_exists("licenseInfoDetails", $this->_propDict)) {
           return $this->_propDict["licenseInfoDetails"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the licenseInfoDetails
    *
    * @param LicenseInfoDetail $val The licenseInfoDetails
    *
    * @return AzureADLicenseUsage
    */
    public function setLicenseInfoDetails($val)
    {
		$this->_propDict["licenseInfoDetails"] = $val;
        return $this;
    }
    
    /**
    * Gets the snapshotDateTime
    *
    * @return \DateTime The snapshotDateTime
    */
    public function getSnapshotDateTime()
    {
        if (array_key_exists("snapshotDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["snapshotDateTime"], "\DateTime")) {
                return $this->_propDict["snapshotDateTime"];
            } else {
                $this->_propDict["snapshotDateTime"] = new \DateTime($this->_propDict["snapshotDateTime"]);
                return $this->_propDict["snapshotDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the snapshotDateTime
    *
    * @param \DateTime $val The snapshotDateTime
    *
    * @return AzureADLicenseUsage
    */
    public function setSnapshotDateTime($val)
    {
        $this->_propDict["snapshotDateTime"] = $val;
        return $this;
    }
    
}
