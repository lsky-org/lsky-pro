<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ManagedDeviceOverview File
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
* ManagedDeviceOverview class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ManagedDeviceOverview extends Entity
{
    /**
    * Gets the deviceExchangeAccessStateSummary
    * Distribution of Exchange Access State in Intune
    *
    * @return DeviceExchangeAccessStateSummary The deviceExchangeAccessStateSummary
    */
    public function getDeviceExchangeAccessStateSummary()
    {
        if (array_key_exists("deviceExchangeAccessStateSummary", $this->_propDict)) {
            if (is_a($this->_propDict["deviceExchangeAccessStateSummary"], "\Beta\Microsoft\Graph\Model\DeviceExchangeAccessStateSummary")) {
                return $this->_propDict["deviceExchangeAccessStateSummary"];
            } else {
                $this->_propDict["deviceExchangeAccessStateSummary"] = new DeviceExchangeAccessStateSummary($this->_propDict["deviceExchangeAccessStateSummary"]);
                return $this->_propDict["deviceExchangeAccessStateSummary"];
            }
        }
        return null;
    }
    
    /**
    * Sets the deviceExchangeAccessStateSummary
    * Distribution of Exchange Access State in Intune
    *
    * @param DeviceExchangeAccessStateSummary $val The deviceExchangeAccessStateSummary
    *
    * @return ManagedDeviceOverview
    */
    public function setDeviceExchangeAccessStateSummary($val)
    {
        $this->_propDict["deviceExchangeAccessStateSummary"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceOperatingSystemSummary
    * Device operating system summary.
    *
    * @return DeviceOperatingSystemSummary The deviceOperatingSystemSummary
    */
    public function getDeviceOperatingSystemSummary()
    {
        if (array_key_exists("deviceOperatingSystemSummary", $this->_propDict)) {
            if (is_a($this->_propDict["deviceOperatingSystemSummary"], "\Beta\Microsoft\Graph\Model\DeviceOperatingSystemSummary")) {
                return $this->_propDict["deviceOperatingSystemSummary"];
            } else {
                $this->_propDict["deviceOperatingSystemSummary"] = new DeviceOperatingSystemSummary($this->_propDict["deviceOperatingSystemSummary"]);
                return $this->_propDict["deviceOperatingSystemSummary"];
            }
        }
        return null;
    }
    
    /**
    * Sets the deviceOperatingSystemSummary
    * Device operating system summary.
    *
    * @param DeviceOperatingSystemSummary $val The deviceOperatingSystemSummary
    *
    * @return ManagedDeviceOverview
    */
    public function setDeviceOperatingSystemSummary($val)
    {
        $this->_propDict["deviceOperatingSystemSummary"] = $val;
        return $this;
    }
    
    /**
    * Gets the dualEnrolledDeviceCount
    * The number of devices enrolled in both MDM and EAS
    *
    * @return int The dualEnrolledDeviceCount
    */
    public function getDualEnrolledDeviceCount()
    {
        if (array_key_exists("dualEnrolledDeviceCount", $this->_propDict)) {
            return $this->_propDict["dualEnrolledDeviceCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the dualEnrolledDeviceCount
    * The number of devices enrolled in both MDM and EAS
    *
    * @param int $val The dualEnrolledDeviceCount
    *
    * @return ManagedDeviceOverview
    */
    public function setDualEnrolledDeviceCount($val)
    {
        $this->_propDict["dualEnrolledDeviceCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the enrolledDeviceCount
    * Total enrolled device count. Does not include PC devices managed via Intune PC Agent
    *
    * @return int The enrolledDeviceCount
    */
    public function getEnrolledDeviceCount()
    {
        if (array_key_exists("enrolledDeviceCount", $this->_propDict)) {
            return $this->_propDict["enrolledDeviceCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the enrolledDeviceCount
    * Total enrolled device count. Does not include PC devices managed via Intune PC Agent
    *
    * @param int $val The enrolledDeviceCount
    *
    * @return ManagedDeviceOverview
    */
    public function setEnrolledDeviceCount($val)
    {
        $this->_propDict["enrolledDeviceCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the lastModifiedDateTime
    * Last modified date time of device overview
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
    * Last modified date time of device overview
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return ManagedDeviceOverview
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the managedDeviceModelsAndManufacturers
    * Models and Manufactures meatadata for managed devices in the account
    *
    * @return ManagedDeviceModelsAndManufacturers The managedDeviceModelsAndManufacturers
    */
    public function getManagedDeviceModelsAndManufacturers()
    {
        if (array_key_exists("managedDeviceModelsAndManufacturers", $this->_propDict)) {
            if (is_a($this->_propDict["managedDeviceModelsAndManufacturers"], "\Beta\Microsoft\Graph\Model\ManagedDeviceModelsAndManufacturers")) {
                return $this->_propDict["managedDeviceModelsAndManufacturers"];
            } else {
                $this->_propDict["managedDeviceModelsAndManufacturers"] = new ManagedDeviceModelsAndManufacturers($this->_propDict["managedDeviceModelsAndManufacturers"]);
                return $this->_propDict["managedDeviceModelsAndManufacturers"];
            }
        }
        return null;
    }
    
    /**
    * Sets the managedDeviceModelsAndManufacturers
    * Models and Manufactures meatadata for managed devices in the account
    *
    * @param ManagedDeviceModelsAndManufacturers $val The managedDeviceModelsAndManufacturers
    *
    * @return ManagedDeviceOverview
    */
    public function setManagedDeviceModelsAndManufacturers($val)
    {
        $this->_propDict["managedDeviceModelsAndManufacturers"] = $val;
        return $this;
    }
    
    /**
    * Gets the mdmEnrolledCount
    * The number of devices enrolled in MDM
    *
    * @return int The mdmEnrolledCount
    */
    public function getMdmEnrolledCount()
    {
        if (array_key_exists("mdmEnrolledCount", $this->_propDict)) {
            return $this->_propDict["mdmEnrolledCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the mdmEnrolledCount
    * The number of devices enrolled in MDM
    *
    * @param int $val The mdmEnrolledCount
    *
    * @return ManagedDeviceOverview
    */
    public function setMdmEnrolledCount($val)
    {
        $this->_propDict["mdmEnrolledCount"] = intval($val);
        return $this;
    }
    
}
