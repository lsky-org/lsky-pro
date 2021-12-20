<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EmailAppUsageUserCounts File
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
* EmailAppUsageUserCounts class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EmailAppUsageUserCounts extends Entity
{
    /**
    * Gets the imap4App
    *
    * @return int The imap4App
    */
    public function getImap4App()
    {
        if (array_key_exists("imap4App", $this->_propDict)) {
            return $this->_propDict["imap4App"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the imap4App
    *
    * @param int $val The imap4App
    *
    * @return EmailAppUsageUserCounts
    */
    public function setImap4App($val)
    {
        $this->_propDict["imap4App"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the mailForMac
    *
    * @return int The mailForMac
    */
    public function getMailForMac()
    {
        if (array_key_exists("mailForMac", $this->_propDict)) {
            return $this->_propDict["mailForMac"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the mailForMac
    *
    * @param int $val The mailForMac
    *
    * @return EmailAppUsageUserCounts
    */
    public function setMailForMac($val)
    {
        $this->_propDict["mailForMac"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the otherForMobile
    *
    * @return int The otherForMobile
    */
    public function getOtherForMobile()
    {
        if (array_key_exists("otherForMobile", $this->_propDict)) {
            return $this->_propDict["otherForMobile"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the otherForMobile
    *
    * @param int $val The otherForMobile
    *
    * @return EmailAppUsageUserCounts
    */
    public function setOtherForMobile($val)
    {
        $this->_propDict["otherForMobile"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the outlookForMac
    *
    * @return int The outlookForMac
    */
    public function getOutlookForMac()
    {
        if (array_key_exists("outlookForMac", $this->_propDict)) {
            return $this->_propDict["outlookForMac"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the outlookForMac
    *
    * @param int $val The outlookForMac
    *
    * @return EmailAppUsageUserCounts
    */
    public function setOutlookForMac($val)
    {
        $this->_propDict["outlookForMac"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the outlookForMobile
    *
    * @return int The outlookForMobile
    */
    public function getOutlookForMobile()
    {
        if (array_key_exists("outlookForMobile", $this->_propDict)) {
            return $this->_propDict["outlookForMobile"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the outlookForMobile
    *
    * @param int $val The outlookForMobile
    *
    * @return EmailAppUsageUserCounts
    */
    public function setOutlookForMobile($val)
    {
        $this->_propDict["outlookForMobile"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the outlookForWeb
    *
    * @return int The outlookForWeb
    */
    public function getOutlookForWeb()
    {
        if (array_key_exists("outlookForWeb", $this->_propDict)) {
            return $this->_propDict["outlookForWeb"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the outlookForWeb
    *
    * @param int $val The outlookForWeb
    *
    * @return EmailAppUsageUserCounts
    */
    public function setOutlookForWeb($val)
    {
        $this->_propDict["outlookForWeb"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the outlookForWindows
    *
    * @return int The outlookForWindows
    */
    public function getOutlookForWindows()
    {
        if (array_key_exists("outlookForWindows", $this->_propDict)) {
            return $this->_propDict["outlookForWindows"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the outlookForWindows
    *
    * @param int $val The outlookForWindows
    *
    * @return EmailAppUsageUserCounts
    */
    public function setOutlookForWindows($val)
    {
        $this->_propDict["outlookForWindows"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the pop3App
    *
    * @return int The pop3App
    */
    public function getPop3App()
    {
        if (array_key_exists("pop3App", $this->_propDict)) {
            return $this->_propDict["pop3App"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the pop3App
    *
    * @param int $val The pop3App
    *
    * @return EmailAppUsageUserCounts
    */
    public function setPop3App($val)
    {
        $this->_propDict["pop3App"] = intval($val);
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
    * @return EmailAppUsageUserCounts
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
    * @return EmailAppUsageUserCounts
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
    * @return EmailAppUsageUserCounts
    */
    public function setReportRefreshDate($val)
    {
        $this->_propDict["reportRefreshDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the smtpApp
    *
    * @return int The smtpApp
    */
    public function getSmtpApp()
    {
        if (array_key_exists("smtpApp", $this->_propDict)) {
            return $this->_propDict["smtpApp"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the smtpApp
    *
    * @param int $val The smtpApp
    *
    * @return EmailAppUsageUserCounts
    */
    public function setSmtpApp($val)
    {
        $this->_propDict["smtpApp"] = intval($val);
        return $this;
    }
    
}
