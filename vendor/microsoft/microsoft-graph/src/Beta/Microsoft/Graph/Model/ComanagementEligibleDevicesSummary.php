<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ComanagementEligibleDevicesSummary File
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
* ComanagementEligibleDevicesSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ComanagementEligibleDevicesSummary extends Entity
{
    /**
    * Gets the comanagedCount
    * Count of devices already Co-Managed
    *
    * @return int The comanagedCount
    */
    public function getComanagedCount()
    {
        if (array_key_exists("comanagedCount", $this->_propDict)) {
            return $this->_propDict["comanagedCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the comanagedCount
    * Count of devices already Co-Managed
    *
    * @param int $val The value of the comanagedCount
    *
    * @return ComanagementEligibleDevicesSummary
    */
    public function setComanagedCount($val)
    {
        $this->_propDict["comanagedCount"] = $val;
        return $this;
    }
    /**
    * Gets the eligibleButNotAzureAdJoinedCount
    * Count of devices eligible for Co-Management but not yet joined to Azure Active Directory
    *
    * @return int The eligibleButNotAzureAdJoinedCount
    */
    public function getEligibleButNotAzureAdJoinedCount()
    {
        if (array_key_exists("eligibleButNotAzureAdJoinedCount", $this->_propDict)) {
            return $this->_propDict["eligibleButNotAzureAdJoinedCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the eligibleButNotAzureAdJoinedCount
    * Count of devices eligible for Co-Management but not yet joined to Azure Active Directory
    *
    * @param int $val The value of the eligibleButNotAzureAdJoinedCount
    *
    * @return ComanagementEligibleDevicesSummary
    */
    public function setEligibleButNotAzureAdJoinedCount($val)
    {
        $this->_propDict["eligibleButNotAzureAdJoinedCount"] = $val;
        return $this;
    }
    /**
    * Gets the eligibleCount
    * Count of devices fully eligible for Co-Management
    *
    * @return int The eligibleCount
    */
    public function getEligibleCount()
    {
        if (array_key_exists("eligibleCount", $this->_propDict)) {
            return $this->_propDict["eligibleCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the eligibleCount
    * Count of devices fully eligible for Co-Management
    *
    * @param int $val The value of the eligibleCount
    *
    * @return ComanagementEligibleDevicesSummary
    */
    public function setEligibleCount($val)
    {
        $this->_propDict["eligibleCount"] = $val;
        return $this;
    }
    /**
    * Gets the ineligibleCount
    * Count of devices ineligible for Co-Management
    *
    * @return int The ineligibleCount
    */
    public function getIneligibleCount()
    {
        if (array_key_exists("ineligibleCount", $this->_propDict)) {
            return $this->_propDict["ineligibleCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ineligibleCount
    * Count of devices ineligible for Co-Management
    *
    * @param int $val The value of the ineligibleCount
    *
    * @return ComanagementEligibleDevicesSummary
    */
    public function setIneligibleCount($val)
    {
        $this->_propDict["ineligibleCount"] = $val;
        return $this;
    }
    /**
    * Gets the needsOsUpdateCount
    * Count of devices that will be eligible for Co-Management after an OS update
    *
    * @return int The needsOsUpdateCount
    */
    public function getNeedsOsUpdateCount()
    {
        if (array_key_exists("needsOsUpdateCount", $this->_propDict)) {
            return $this->_propDict["needsOsUpdateCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the needsOsUpdateCount
    * Count of devices that will be eligible for Co-Management after an OS update
    *
    * @param int $val The value of the needsOsUpdateCount
    *
    * @return ComanagementEligibleDevicesSummary
    */
    public function setNeedsOsUpdateCount($val)
    {
        $this->_propDict["needsOsUpdateCount"] = $val;
        return $this;
    }
}
