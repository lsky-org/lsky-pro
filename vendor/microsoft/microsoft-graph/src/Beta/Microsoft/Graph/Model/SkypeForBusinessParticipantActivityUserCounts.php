<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SkypeForBusinessParticipantActivityUserCounts File
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
* SkypeForBusinessParticipantActivityUserCounts class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SkypeForBusinessParticipantActivityUserCounts extends Entity
{
    /**
    * Gets the appSharing
    *
    * @return int The appSharing
    */
    public function getAppSharing()
    {
        if (array_key_exists("appSharing", $this->_propDict)) {
            return $this->_propDict["appSharing"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appSharing
    *
    * @param int $val The appSharing
    *
    * @return SkypeForBusinessParticipantActivityUserCounts
    */
    public function setAppSharing($val)
    {
        $this->_propDict["appSharing"] = intval($val);
        return $this;
    }
    
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
    * @return SkypeForBusinessParticipantActivityUserCounts
    */
    public function setAudioVideo($val)
    {
        $this->_propDict["audioVideo"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the dialInOut3rdParty
    *
    * @return int The dialInOut3rdParty
    */
    public function getDialInOut3rdParty()
    {
        if (array_key_exists("dialInOut3rdParty", $this->_propDict)) {
            return $this->_propDict["dialInOut3rdParty"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the dialInOut3rdParty
    *
    * @param int $val The dialInOut3rdParty
    *
    * @return SkypeForBusinessParticipantActivityUserCounts
    */
    public function setDialInOut3rdParty($val)
    {
        $this->_propDict["dialInOut3rdParty"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the im
    *
    * @return int The im
    */
    public function getIm()
    {
        if (array_key_exists("im", $this->_propDict)) {
            return $this->_propDict["im"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the im
    *
    * @param int $val The im
    *
    * @return SkypeForBusinessParticipantActivityUserCounts
    */
    public function setIm($val)
    {
        $this->_propDict["im"] = intval($val);
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
    * @return SkypeForBusinessParticipantActivityUserCounts
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
    * @return SkypeForBusinessParticipantActivityUserCounts
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
    * @return SkypeForBusinessParticipantActivityUserCounts
    */
    public function setReportRefreshDate($val)
    {
        $this->_propDict["reportRefreshDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the web
    *
    * @return int The web
    */
    public function getWeb()
    {
        if (array_key_exists("web", $this->_propDict)) {
            return $this->_propDict["web"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the web
    *
    * @param int $val The web
    *
    * @return SkypeForBusinessParticipantActivityUserCounts
    */
    public function setWeb($val)
    {
        $this->_propDict["web"] = intval($val);
        return $this;
    }
    
}
