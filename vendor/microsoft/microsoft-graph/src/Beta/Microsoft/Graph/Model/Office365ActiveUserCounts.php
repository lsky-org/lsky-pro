<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Office365ActiveUserCounts File
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
* Office365ActiveUserCounts class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Office365ActiveUserCounts extends Entity
{
    /**
    * Gets the exchange
    * The number of active users in Exchange. Any user who can read and send email is considered an active user.
    *
    * @return int The exchange
    */
    public function getExchange()
    {
        if (array_key_exists("exchange", $this->_propDict)) {
            return $this->_propDict["exchange"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the exchange
    * The number of active users in Exchange. Any user who can read and send email is considered an active user.
    *
    * @param int $val The exchange
    *
    * @return Office365ActiveUserCounts
    */
    public function setExchange($val)
    {
        $this->_propDict["exchange"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the office365
    * The number of active users in Microsoft 365. This number includes all the active users in Exchange, OneDrive, SharePoint, Skype For Business, Yammer, and Microsoft Teams. You can find the definition of active user for each product in the respective property description.
    *
    * @return int The office365
    */
    public function getOffice365()
    {
        if (array_key_exists("office365", $this->_propDict)) {
            return $this->_propDict["office365"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the office365
    * The number of active users in Microsoft 365. This number includes all the active users in Exchange, OneDrive, SharePoint, Skype For Business, Yammer, and Microsoft Teams. You can find the definition of active user for each product in the respective property description.
    *
    * @param int $val The office365
    *
    * @return Office365ActiveUserCounts
    */
    public function setOffice365($val)
    {
        $this->_propDict["office365"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the oneDrive
    * The number of active users in OneDrive. Any user who viewed or edited files, shared files internally or externally, or synced files is considered an active user.
    *
    * @return int The oneDrive
    */
    public function getOneDrive()
    {
        if (array_key_exists("oneDrive", $this->_propDict)) {
            return $this->_propDict["oneDrive"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the oneDrive
    * The number of active users in OneDrive. Any user who viewed or edited files, shared files internally or externally, or synced files is considered an active user.
    *
    * @param int $val The oneDrive
    *
    * @return Office365ActiveUserCounts
    */
    public function setOneDrive($val)
    {
        $this->_propDict["oneDrive"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the reportDate
    * The date on which a number of users were active.
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
    * The date on which a number of users were active.
    *
    * @param \DateTime $val The reportDate
    *
    * @return Office365ActiveUserCounts
    */
    public function setReportDate($val)
    {
        $this->_propDict["reportDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the reportPeriod
    * The number of days the report covers.
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
    * The number of days the report covers.
    *
    * @param string $val The reportPeriod
    *
    * @return Office365ActiveUserCounts
    */
    public function setReportPeriod($val)
    {
        $this->_propDict["reportPeriod"] = $val;
        return $this;
    }
    
    /**
    * Gets the reportRefreshDate
    * The latest date of the content.
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
    * The latest date of the content.
    *
    * @param \DateTime $val The reportRefreshDate
    *
    * @return Office365ActiveUserCounts
    */
    public function setReportRefreshDate($val)
    {
        $this->_propDict["reportRefreshDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the sharePoint
    * The number of active users in SharePoint. Any user who viewed or edited files, shared files internally or externally, synced files, or viewed SharePoint pages is considered an active user.
    *
    * @return int The sharePoint
    */
    public function getSharePoint()
    {
        if (array_key_exists("sharePoint", $this->_propDict)) {
            return $this->_propDict["sharePoint"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the sharePoint
    * The number of active users in SharePoint. Any user who viewed or edited files, shared files internally or externally, synced files, or viewed SharePoint pages is considered an active user.
    *
    * @param int $val The sharePoint
    *
    * @return Office365ActiveUserCounts
    */
    public function setSharePoint($val)
    {
        $this->_propDict["sharePoint"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the skypeForBusiness
    * The number of active users in Skype For Business. Any user who organized or participated in conferences, or joined peer-to-peer sessions is considered an active user.
    *
    * @return int The skypeForBusiness
    */
    public function getSkypeForBusiness()
    {
        if (array_key_exists("skypeForBusiness", $this->_propDict)) {
            return $this->_propDict["skypeForBusiness"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the skypeForBusiness
    * The number of active users in Skype For Business. Any user who organized or participated in conferences, or joined peer-to-peer sessions is considered an active user.
    *
    * @param int $val The skypeForBusiness
    *
    * @return Office365ActiveUserCounts
    */
    public function setSkypeForBusiness($val)
    {
        $this->_propDict["skypeForBusiness"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the teams
    * The number of active users in Microsoft Teams. Any user who posted messages in team channels, sent messages in private chat sessions, or participated in meetings or calls is considered an active user.
    *
    * @return int The teams
    */
    public function getTeams()
    {
        if (array_key_exists("teams", $this->_propDict)) {
            return $this->_propDict["teams"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the teams
    * The number of active users in Microsoft Teams. Any user who posted messages in team channels, sent messages in private chat sessions, or participated in meetings or calls is considered an active user.
    *
    * @param int $val The teams
    *
    * @return Office365ActiveUserCounts
    */
    public function setTeams($val)
    {
        $this->_propDict["teams"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the yammer
    * The number of active users in Yammer. Any user who can post, read, or like messages is considered an active user.
    *
    * @return int The yammer
    */
    public function getYammer()
    {
        if (array_key_exists("yammer", $this->_propDict)) {
            return $this->_propDict["yammer"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the yammer
    * The number of active users in Yammer. Any user who can post, read, or like messages is considered an active user.
    *
    * @param int $val The yammer
    *
    * @return Office365ActiveUserCounts
    */
    public function setYammer($val)
    {
        $this->_propDict["yammer"] = intval($val);
        return $this;
    }
    
}
