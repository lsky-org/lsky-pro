<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* YammerActivitySummary File
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
* YammerActivitySummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class YammerActivitySummary extends Entity
{
    /**
    * Gets the liked
    *
    * @return int The liked
    */
    public function getLiked()
    {
        if (array_key_exists("liked", $this->_propDict)) {
            return $this->_propDict["liked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the liked
    *
    * @param int $val The liked
    *
    * @return YammerActivitySummary
    */
    public function setLiked($val)
    {
        $this->_propDict["liked"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the posted
    *
    * @return int The posted
    */
    public function getPosted()
    {
        if (array_key_exists("posted", $this->_propDict)) {
            return $this->_propDict["posted"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the posted
    *
    * @param int $val The posted
    *
    * @return YammerActivitySummary
    */
    public function setPosted($val)
    {
        $this->_propDict["posted"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the read
    *
    * @return int The read
    */
    public function getRead()
    {
        if (array_key_exists("read", $this->_propDict)) {
            return $this->_propDict["read"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the read
    *
    * @param int $val The read
    *
    * @return YammerActivitySummary
    */
    public function setRead($val)
    {
        $this->_propDict["read"] = intval($val);
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
    * @return YammerActivitySummary
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
    * @return YammerActivitySummary
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
    * @return YammerActivitySummary
    */
    public function setReportRefreshDate($val)
    {
        $this->_propDict["reportRefreshDate"] = $val;
        return $this;
    }
    
}
