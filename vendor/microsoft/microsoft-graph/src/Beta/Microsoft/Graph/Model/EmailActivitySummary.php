<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EmailActivitySummary File
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
* EmailActivitySummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EmailActivitySummary extends Entity
{
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
    * @return EmailActivitySummary
    */
    public function setRead($val)
    {
        $this->_propDict["read"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the receive
    *
    * @return int The receive
    */
    public function getReceive()
    {
        if (array_key_exists("receive", $this->_propDict)) {
            return $this->_propDict["receive"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the receive
    *
    * @param int $val The receive
    *
    * @return EmailActivitySummary
    */
    public function setReceive($val)
    {
        $this->_propDict["receive"] = intval($val);
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
    * @return EmailActivitySummary
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
    * @return EmailActivitySummary
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
    * @return EmailActivitySummary
    */
    public function setReportRefreshDate($val)
    {
        $this->_propDict["reportRefreshDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the send
    *
    * @return int The send
    */
    public function getSend()
    {
        if (array_key_exists("send", $this->_propDict)) {
            return $this->_propDict["send"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the send
    *
    * @param int $val The send
    *
    * @return EmailActivitySummary
    */
    public function setSend($val)
    {
        $this->_propDict["send"] = intval($val);
        return $this;
    }
    
}
