<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OverallPrintUsageSummary File
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
* OverallPrintUsageSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OverallPrintUsageSummary extends Entity
{
    /**
    * Gets the activePrintersCount
    *
    * @return int The activePrintersCount
    */
    public function getActivePrintersCount()
    {
        if (array_key_exists("activePrintersCount", $this->_propDict)) {
            return $this->_propDict["activePrintersCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the activePrintersCount
    *
    * @param int $val The value of the activePrintersCount
    *
    * @return OverallPrintUsageSummary
    */
    public function setActivePrintersCount($val)
    {
        $this->_propDict["activePrintersCount"] = $val;
        return $this;
    }
    /**
    * Gets the activeUsersCount
    *
    * @return int The activeUsersCount
    */
    public function getActiveUsersCount()
    {
        if (array_key_exists("activeUsersCount", $this->_propDict)) {
            return $this->_propDict["activeUsersCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the activeUsersCount
    *
    * @param int $val The value of the activeUsersCount
    *
    * @return OverallPrintUsageSummary
    */
    public function setActiveUsersCount($val)
    {
        $this->_propDict["activeUsersCount"] = $val;
        return $this;
    }
    /**
    * Gets the daysInPeriod
    *
    * @return int The daysInPeriod
    */
    public function getDaysInPeriod()
    {
        if (array_key_exists("daysInPeriod", $this->_propDict)) {
            return $this->_propDict["daysInPeriod"];
        } else {
            return null;
        }
    }

    /**
    * Sets the daysInPeriod
    *
    * @param int $val The value of the daysInPeriod
    *
    * @return OverallPrintUsageSummary
    */
    public function setDaysInPeriod($val)
    {
        $this->_propDict["daysInPeriod"] = $val;
        return $this;
    }

    /**
    * Gets the topPrinters
    *
    * @return PrinterUsageSummary The topPrinters
    */
    public function getTopPrinters()
    {
        if (array_key_exists("topPrinters", $this->_propDict)) {
            if (is_a($this->_propDict["topPrinters"], "\Beta\Microsoft\Graph\Model\PrinterUsageSummary")) {
                return $this->_propDict["topPrinters"];
            } else {
                $this->_propDict["topPrinters"] = new PrinterUsageSummary($this->_propDict["topPrinters"]);
                return $this->_propDict["topPrinters"];
            }
        }
        return null;
    }

    /**
    * Sets the topPrinters
    *
    * @param PrinterUsageSummary $val The value to assign to the topPrinters
    *
    * @return OverallPrintUsageSummary The OverallPrintUsageSummary
    */
    public function setTopPrinters($val)
    {
        $this->_propDict["topPrinters"] = $val;
         return $this;
    }

    /**
    * Gets the topUsers
    *
    * @return UserPrintUsageSummary The topUsers
    */
    public function getTopUsers()
    {
        if (array_key_exists("topUsers", $this->_propDict)) {
            if (is_a($this->_propDict["topUsers"], "\Beta\Microsoft\Graph\Model\UserPrintUsageSummary")) {
                return $this->_propDict["topUsers"];
            } else {
                $this->_propDict["topUsers"] = new UserPrintUsageSummary($this->_propDict["topUsers"]);
                return $this->_propDict["topUsers"];
            }
        }
        return null;
    }

    /**
    * Sets the topUsers
    *
    * @param UserPrintUsageSummary $val The value to assign to the topUsers
    *
    * @return OverallPrintUsageSummary The OverallPrintUsageSummary
    */
    public function setTopUsers($val)
    {
        $this->_propDict["topUsers"] = $val;
         return $this;
    }
    /**
    * Gets the totalIncompleteJobs
    *
    * @return int The totalIncompleteJobs
    */
    public function getTotalIncompleteJobs()
    {
        if (array_key_exists("totalIncompleteJobs", $this->_propDict)) {
            return $this->_propDict["totalIncompleteJobs"];
        } else {
            return null;
        }
    }

    /**
    * Sets the totalIncompleteJobs
    *
    * @param int $val The value of the totalIncompleteJobs
    *
    * @return OverallPrintUsageSummary
    */
    public function setTotalIncompleteJobs($val)
    {
        $this->_propDict["totalIncompleteJobs"] = $val;
        return $this;
    }
    /**
    * Gets the totalJobsProcessed
    *
    * @return int The totalJobsProcessed
    */
    public function getTotalJobsProcessed()
    {
        if (array_key_exists("totalJobsProcessed", $this->_propDict)) {
            return $this->_propDict["totalJobsProcessed"];
        } else {
            return null;
        }
    }

    /**
    * Sets the totalJobsProcessed
    *
    * @param int $val The value of the totalJobsProcessed
    *
    * @return OverallPrintUsageSummary
    */
    public function setTotalJobsProcessed($val)
    {
        $this->_propDict["totalJobsProcessed"] = $val;
        return $this;
    }
}
