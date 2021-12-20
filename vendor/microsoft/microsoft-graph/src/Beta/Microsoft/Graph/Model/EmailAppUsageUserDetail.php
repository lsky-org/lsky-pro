<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EmailAppUsageUserDetail File
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
* EmailAppUsageUserDetail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EmailAppUsageUserDetail extends Entity
{
    /**
    * Gets the deletedDate
    *
    * @return \DateTime The deletedDate
    */
    public function getDeletedDate()
    {
        if (array_key_exists("deletedDate", $this->_propDict)) {
            if (is_a($this->_propDict["deletedDate"], "\DateTime")) {
                return $this->_propDict["deletedDate"];
            } else {
                $this->_propDict["deletedDate"] = new \DateTime($this->_propDict["deletedDate"]);
                return $this->_propDict["deletedDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the deletedDate
    *
    * @param \DateTime $val The deletedDate
    *
    * @return EmailAppUsageUserDetail
    */
    public function setDeletedDate($val)
    {
        $this->_propDict["deletedDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    *
    * @return string The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the displayName
    *
    * @param string $val The displayName
    *
    * @return EmailAppUsageUserDetail
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the imap4App
    *
    * @return string The imap4App
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
    * @param string $val The imap4App
    *
    * @return EmailAppUsageUserDetail
    */
    public function setImap4App($val)
    {
        $this->_propDict["imap4App"] = $val;
        return $this;
    }
    
    /**
    * Gets the isDeleted
    *
    * @return bool The isDeleted
    */
    public function getIsDeleted()
    {
        if (array_key_exists("isDeleted", $this->_propDict)) {
            return $this->_propDict["isDeleted"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isDeleted
    *
    * @param bool $val The isDeleted
    *
    * @return EmailAppUsageUserDetail
    */
    public function setIsDeleted($val)
    {
        $this->_propDict["isDeleted"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the lastActivityDate
    *
    * @return \DateTime The lastActivityDate
    */
    public function getLastActivityDate()
    {
        if (array_key_exists("lastActivityDate", $this->_propDict)) {
            if (is_a($this->_propDict["lastActivityDate"], "\DateTime")) {
                return $this->_propDict["lastActivityDate"];
            } else {
                $this->_propDict["lastActivityDate"] = new \DateTime($this->_propDict["lastActivityDate"]);
                return $this->_propDict["lastActivityDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastActivityDate
    *
    * @param \DateTime $val The lastActivityDate
    *
    * @return EmailAppUsageUserDetail
    */
    public function setLastActivityDate($val)
    {
        $this->_propDict["lastActivityDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the mailForMac
    *
    * @return string The mailForMac
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
    * @param string $val The mailForMac
    *
    * @return EmailAppUsageUserDetail
    */
    public function setMailForMac($val)
    {
        $this->_propDict["mailForMac"] = $val;
        return $this;
    }
    
    /**
    * Gets the otherForMobile
    *
    * @return string The otherForMobile
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
    * @param string $val The otherForMobile
    *
    * @return EmailAppUsageUserDetail
    */
    public function setOtherForMobile($val)
    {
        $this->_propDict["otherForMobile"] = $val;
        return $this;
    }
    
    /**
    * Gets the outlookForMac
    *
    * @return string The outlookForMac
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
    * @param string $val The outlookForMac
    *
    * @return EmailAppUsageUserDetail
    */
    public function setOutlookForMac($val)
    {
        $this->_propDict["outlookForMac"] = $val;
        return $this;
    }
    
    /**
    * Gets the outlookForMobile
    *
    * @return string The outlookForMobile
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
    * @param string $val The outlookForMobile
    *
    * @return EmailAppUsageUserDetail
    */
    public function setOutlookForMobile($val)
    {
        $this->_propDict["outlookForMobile"] = $val;
        return $this;
    }
    
    /**
    * Gets the outlookForWeb
    *
    * @return string The outlookForWeb
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
    * @param string $val The outlookForWeb
    *
    * @return EmailAppUsageUserDetail
    */
    public function setOutlookForWeb($val)
    {
        $this->_propDict["outlookForWeb"] = $val;
        return $this;
    }
    
    /**
    * Gets the outlookForWindows
    *
    * @return string The outlookForWindows
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
    * @param string $val The outlookForWindows
    *
    * @return EmailAppUsageUserDetail
    */
    public function setOutlookForWindows($val)
    {
        $this->_propDict["outlookForWindows"] = $val;
        return $this;
    }
    
    /**
    * Gets the pop3App
    *
    * @return string The pop3App
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
    * @param string $val The pop3App
    *
    * @return EmailAppUsageUserDetail
    */
    public function setPop3App($val)
    {
        $this->_propDict["pop3App"] = $val;
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
    * @return EmailAppUsageUserDetail
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
    * @return EmailAppUsageUserDetail
    */
    public function setReportRefreshDate($val)
    {
        $this->_propDict["reportRefreshDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the smtpApp
    *
    * @return string The smtpApp
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
    * @param string $val The smtpApp
    *
    * @return EmailAppUsageUserDetail
    */
    public function setSmtpApp($val)
    {
        $this->_propDict["smtpApp"] = $val;
        return $this;
    }
    
    /**
    * Gets the userPrincipalName
    *
    * @return string The userPrincipalName
    */
    public function getUserPrincipalName()
    {
        if (array_key_exists("userPrincipalName", $this->_propDict)) {
            return $this->_propDict["userPrincipalName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userPrincipalName
    *
    * @param string $val The userPrincipalName
    *
    * @return EmailAppUsageUserDetail
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }
    
}
