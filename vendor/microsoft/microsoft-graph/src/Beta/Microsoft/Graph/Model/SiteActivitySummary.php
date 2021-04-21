<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SiteActivitySummary File
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
* SiteActivitySummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SiteActivitySummary extends Entity
{
    /**
    * Gets the reportDate
    *
    * @return \DateTime The reportDate
    */
    public function getReportDate()
    {
        if (array_key_exists("reportDate", $this->_propDict)) {
            if (is_a($this->_propDict["reportDate"], "\DateTime")) {
                return $this->_propDict["reportDate"];
            } else {
                $this->_propDict["reportDate"] = new \DateTime($this->_propDict["reportDate"]);
                return $this->_propDict["reportDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the reportDate
    *
    * @param \DateTime $val The reportDate
    *
    * @return SiteActivitySummary
    */
    public function setReportDate($val)
    {
        $this->_propDict["reportDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the reportPeriod
    *
    * @return string The reportPeriod
    */
    public function getReportPeriod()
    {
        if (array_key_exists("reportPeriod", $this->_propDict)) {
            return $this->_propDict["reportPeriod"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the reportPeriod
    *
    * @param string $val The reportPeriod
    *
    * @return SiteActivitySummary
    */
    public function setReportPeriod($val)
    {
        $this->_propDict["reportPeriod"] = $val;
        return $this;
    }
    
    /**
    * Gets the reportRefreshDate
    *
    * @return \DateTime The reportRefreshDate
    */
    public function getReportRefreshDate()
    {
        if (array_key_exists("reportRefreshDate", $this->_propDict)) {
            if (is_a($this->_propDict["reportRefreshDate"], "\DateTime")) {
                return $this->_propDict["reportRefreshDate"];
            } else {
                $this->_propDict["reportRefreshDate"] = new \DateTime($this->_propDict["reportRefreshDate"]);
                return $this->_propDict["reportRefreshDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the reportRefreshDate
    *
    * @param \DateTime $val The reportRefreshDate
    *
    * @return SiteActivitySummary
    */
    public function setReportRefreshDate($val)
    {
        $this->_propDict["reportRefreshDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the sharedExternally
    *
    * @return int The sharedExternally
    */
    public function getSharedExternally()
    {
        if (array_key_exists("sharedExternally", $this->_propDict)) {
            return $this->_propDict["sharedExternally"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the sharedExternally
    *
    * @param int $val The sharedExternally
    *
    * @return SiteActivitySummary
    */
    public function setSharedExternally($val)
    {
        $this->_propDict["sharedExternally"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the sharedInternally
    *
    * @return int The sharedInternally
    */
    public function getSharedInternally()
    {
        if (array_key_exists("sharedInternally", $this->_propDict)) {
            return $this->_propDict["sharedInternally"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the sharedInternally
    *
    * @param int $val The sharedInternally
    *
    * @return SiteActivitySummary
    */
    public function setSharedInternally($val)
    {
        $this->_propDict["sharedInternally"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the synced
    *
    * @return int The synced
    */
    public function getSynced()
    {
        if (array_key_exists("synced", $this->_propDict)) {
            return $this->_propDict["synced"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the synced
    *
    * @param int $val The synced
    *
    * @return SiteActivitySummary
    */
    public function setSynced($val)
    {
        $this->_propDict["synced"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the viewedOrEdited
    *
    * @return int The viewedOrEdited
    */
    public function getViewedOrEdited()
    {
        if (array_key_exists("viewedOrEdited", $this->_propDict)) {
            return $this->_propDict["viewedOrEdited"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the viewedOrEdited
    *
    * @param int $val The viewedOrEdited
    *
    * @return SiteActivitySummary
    */
    public function setViewedOrEdited($val)
    {
        $this->_propDict["viewedOrEdited"] = intval($val);
        return $this;
    }
    
}
