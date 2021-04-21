<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SkypeForBusinessOrganizerActivityMinuteCounts File
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
* SkypeForBusinessOrganizerActivityMinuteCounts class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SkypeForBusinessOrganizerActivityMinuteCounts extends Entity
{
    /**
    * Gets the audioVideo
    *
    * @return int The audioVideo
    */
    public function getAudioVideo()
    {
        if (array_key_exists("audioVideo", $this->_propDict)) {
            return $this->_propDict["audioVideo"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the audioVideo
    *
    * @param int $val The audioVideo
    *
    * @return SkypeForBusinessOrganizerActivityMinuteCounts
    */
    public function setAudioVideo($val)
    {
        $this->_propDict["audioVideo"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the dialInMicrosoft
    *
    * @return int The dialInMicrosoft
    */
    public function getDialInMicrosoft()
    {
        if (array_key_exists("dialInMicrosoft", $this->_propDict)) {
            return $this->_propDict["dialInMicrosoft"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the dialInMicrosoft
    *
    * @param int $val The dialInMicrosoft
    *
    * @return SkypeForBusinessOrganizerActivityMinuteCounts
    */
    public function setDialInMicrosoft($val)
    {
        $this->_propDict["dialInMicrosoft"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the dialOutMicrosoft
    *
    * @return int The dialOutMicrosoft
    */
    public function getDialOutMicrosoft()
    {
        if (array_key_exists("dialOutMicrosoft", $this->_propDict)) {
            return $this->_propDict["dialOutMicrosoft"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the dialOutMicrosoft
    *
    * @param int $val The dialOutMicrosoft
    *
    * @return SkypeForBusinessOrganizerActivityMinuteCounts
    */
    public function setDialOutMicrosoft($val)
    {
        $this->_propDict["dialOutMicrosoft"] = intval($val);
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
    * @return SkypeForBusinessOrganizerActivityMinuteCounts
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
    * @return SkypeForBusinessOrganizerActivityMinuteCounts
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
    * @return SkypeForBusinessOrganizerActivityMinuteCounts
    */
    public function setReportRefreshDate($val)
    {
        $this->_propDict["reportRefreshDate"] = $val;
        return $this;
    }
    
}
