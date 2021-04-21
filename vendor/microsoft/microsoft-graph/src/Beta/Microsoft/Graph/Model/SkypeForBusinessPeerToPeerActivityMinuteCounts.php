<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SkypeForBusinessPeerToPeerActivityMinuteCounts File
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
* SkypeForBusinessPeerToPeerActivityMinuteCounts class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SkypeForBusinessPeerToPeerActivityMinuteCounts extends Entity
{
    /**
    * Gets the audio
    *
    * @return int The audio
    */
    public function getAudio()
    {
        if (array_key_exists("audio", $this->_propDict)) {
            return $this->_propDict["audio"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the audio
    *
    * @param int $val The audio
    *
    * @return SkypeForBusinessPeerToPeerActivityMinuteCounts
    */
    public function setAudio($val)
    {
        $this->_propDict["audio"] = intval($val);
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
    * @return SkypeForBusinessPeerToPeerActivityMinuteCounts
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
    * @return SkypeForBusinessPeerToPeerActivityMinuteCounts
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
    * @return SkypeForBusinessPeerToPeerActivityMinuteCounts
    */
    public function setReportRefreshDate($val)
    {
        $this->_propDict["reportRefreshDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the video
    *
    * @return int The video
    */
    public function getVideo()
    {
        if (array_key_exists("video", $this->_propDict)) {
            return $this->_propDict["video"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the video
    *
    * @param int $val The video
    *
    * @return SkypeForBusinessPeerToPeerActivityMinuteCounts
    */
    public function setVideo($val)
    {
        $this->_propDict["video"] = intval($val);
        return $this;
    }
    
}
