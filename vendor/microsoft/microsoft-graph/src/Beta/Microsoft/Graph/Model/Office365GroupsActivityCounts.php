<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Office365GroupsActivityCounts File
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
* Office365GroupsActivityCounts class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Office365GroupsActivityCounts extends Entity
{
    /**
    * Gets the exchangeEmailsReceived
    * The number of emails received by Group mailboxes.
    *
    * @return int The exchangeEmailsReceived
    */
    public function getExchangeEmailsReceived()
    {
        if (array_key_exists("exchangeEmailsReceived", $this->_propDict)) {
            return $this->_propDict["exchangeEmailsReceived"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the exchangeEmailsReceived
    * The number of emails received by Group mailboxes.
    *
    * @param int $val The exchangeEmailsReceived
    *
    * @return Office365GroupsActivityCounts
    */
    public function setExchangeEmailsReceived($val)
    {
        $this->_propDict["exchangeEmailsReceived"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the reportDate
    * The date on which a number of emails were sent to a group mailbox or a number of messages were posted, read, or liked in a Yammer group
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
    * The date on which a number of emails were sent to a group mailbox or a number of messages were posted, read, or liked in a Yammer group
    *
    * @param \DateTime $val The reportDate
    *
    * @return Office365GroupsActivityCounts
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
    * @return Office365GroupsActivityCounts
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
    * @return Office365GroupsActivityCounts
    */
    public function setReportRefreshDate($val)
    {
        $this->_propDict["reportRefreshDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the yammerMessagesLiked
    * The number of messages liked in Yammer groups.
    *
    * @return int The yammerMessagesLiked
    */
    public function getYammerMessagesLiked()
    {
        if (array_key_exists("yammerMessagesLiked", $this->_propDict)) {
            return $this->_propDict["yammerMessagesLiked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the yammerMessagesLiked
    * The number of messages liked in Yammer groups.
    *
    * @param int $val The yammerMessagesLiked
    *
    * @return Office365GroupsActivityCounts
    */
    public function setYammerMessagesLiked($val)
    {
        $this->_propDict["yammerMessagesLiked"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the yammerMessagesPosted
    * The number of messages posted to Yammer groups.
    *
    * @return int The yammerMessagesPosted
    */
    public function getYammerMessagesPosted()
    {
        if (array_key_exists("yammerMessagesPosted", $this->_propDict)) {
            return $this->_propDict["yammerMessagesPosted"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the yammerMessagesPosted
    * The number of messages posted to Yammer groups.
    *
    * @param int $val The yammerMessagesPosted
    *
    * @return Office365GroupsActivityCounts
    */
    public function setYammerMessagesPosted($val)
    {
        $this->_propDict["yammerMessagesPosted"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the yammerMessagesRead
    * The number of messages read in Yammer groups.
    *
    * @return int The yammerMessagesRead
    */
    public function getYammerMessagesRead()
    {
        if (array_key_exists("yammerMessagesRead", $this->_propDict)) {
            return $this->_propDict["yammerMessagesRead"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the yammerMessagesRead
    * The number of messages read in Yammer groups.
    *
    * @param int $val The yammerMessagesRead
    *
    * @return Office365GroupsActivityCounts
    */
    public function setYammerMessagesRead($val)
    {
        $this->_propDict["yammerMessagesRead"] = intval($val);
        return $this;
    }
    
}
