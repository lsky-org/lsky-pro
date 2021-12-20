<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SkypeForBusinessActivityCounts File
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
* SkypeForBusinessActivityCounts class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SkypeForBusinessActivityCounts extends Entity
{
    /**
    * Gets the organized
    *
    * @return int The organized
    */
    public function getOrganized()
    {
        if (array_key_exists("organized", $this->_propDict)) {
            return $this->_propDict["organized"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the organized
    *
    * @param int $val The organized
    *
    * @return SkypeForBusinessActivityCounts
    */
    public function setOrganized($val)
    {
        $this->_propDict["organized"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the participated
    *
    * @return int The participated
    */
    public function getParticipated()
    {
        if (array_key_exists("participated", $this->_propDict)) {
            return $this->_propDict["participated"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the participated
    *
    * @param int $val The participated
    *
    * @return SkypeForBusinessActivityCounts
    */
    public function setParticipated($val)
    {
        $this->_propDict["participated"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the peerToPeer
    *
    * @return int The peerToPeer
    */
    public function getPeerToPeer()
    {
        if (array_key_exists("peerToPeer", $this->_propDict)) {
            return $this->_propDict["peerToPeer"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the peerToPeer
    *
    * @param int $val The peerToPeer
    *
    * @return SkypeForBusinessActivityCounts
    */
    public function setPeerToPeer($val)
    {
        $this->_propDict["peerToPeer"] = intval($val);
        return $this;
    }
    
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
    * @return SkypeForBusinessActivityCounts
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
    * @return SkypeForBusinessActivityCounts
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
    * @return SkypeForBusinessActivityCounts
    */
    public function setReportRefreshDate($val)
    {
        $this->_propDict["reportRefreshDate"] = $val;
        return $this;
    }
    
}
