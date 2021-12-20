<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MailboxUsageDetail File
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
* MailboxUsageDetail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MailboxUsageDetail extends Entity
{
    /**
    * Gets the createdDate
    *
    * @return \DateTime The createdDate
    */
    public function getCreatedDate()
    {
        if (array_key_exists("createdDate", $this->_propDict)) {
            if (is_a($this->_propDict["createdDate"], "\DateTime")) {
                return $this->_propDict["createdDate"];
            } else {
                $this->_propDict["createdDate"] = new \DateTime($this->_propDict["createdDate"]);
                return $this->_propDict["createdDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the createdDate
    *
    * @param \DateTime $val The createdDate
    *
    * @return MailboxUsageDetail
    */
    public function setCreatedDate($val)
    {
        $this->_propDict["createdDate"] = $val;
        return $this;
    }
    
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
    * @return MailboxUsageDetail
    */
    public function setDeletedDate($val)
    {
        $this->_propDict["deletedDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the deletedItemCount
    *
    * @return int The deletedItemCount
    */
    public function getDeletedItemCount()
    {
        if (array_key_exists("deletedItemCount", $this->_propDict)) {
            return $this->_propDict["deletedItemCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deletedItemCount
    *
    * @param int $val The deletedItemCount
    *
    * @return MailboxUsageDetail
    */
    public function setDeletedItemCount($val)
    {
        $this->_propDict["deletedItemCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the deletedItemSizeInBytes
    *
    * @return int The deletedItemSizeInBytes
    */
    public function getDeletedItemSizeInBytes()
    {
        if (array_key_exists("deletedItemSizeInBytes", $this->_propDict)) {
            return $this->_propDict["deletedItemSizeInBytes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deletedItemSizeInBytes
    *
    * @param int $val The deletedItemSizeInBytes
    *
    * @return MailboxUsageDetail
    */
    public function setDeletedItemSizeInBytes($val)
    {
        $this->_propDict["deletedItemSizeInBytes"] = intval($val);
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
    * @return MailboxUsageDetail
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
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
    * @return MailboxUsageDetail
    */
    public function setIsDeleted($val)
    {
        $this->_propDict["isDeleted"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the issueWarningQuotaInBytes
    *
    * @return int The issueWarningQuotaInBytes
    */
    public function getIssueWarningQuotaInBytes()
    {
        if (array_key_exists("issueWarningQuotaInBytes", $this->_propDict)) {
            return $this->_propDict["issueWarningQuotaInBytes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the issueWarningQuotaInBytes
    *
    * @param int $val The issueWarningQuotaInBytes
    *
    * @return MailboxUsageDetail
    */
    public function setIssueWarningQuotaInBytes($val)
    {
        $this->_propDict["issueWarningQuotaInBytes"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the itemCount
    *
    * @return int The itemCount
    */
    public function getItemCount()
    {
        if (array_key_exists("itemCount", $this->_propDict)) {
            return $this->_propDict["itemCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the itemCount
    *
    * @param int $val The itemCount
    *
    * @return MailboxUsageDetail
    */
    public function setItemCount($val)
    {
        $this->_propDict["itemCount"] = intval($val);
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
    * @return MailboxUsageDetail
    */
    public function setLastActivityDate($val)
    {
        $this->_propDict["lastActivityDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the prohibitSendQuotaInBytes
    *
    * @return int The prohibitSendQuotaInBytes
    */
    public function getProhibitSendQuotaInBytes()
    {
        if (array_key_exists("prohibitSendQuotaInBytes", $this->_propDict)) {
            return $this->_propDict["prohibitSendQuotaInBytes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the prohibitSendQuotaInBytes
    *
    * @param int $val The prohibitSendQuotaInBytes
    *
    * @return MailboxUsageDetail
    */
    public function setProhibitSendQuotaInBytes($val)
    {
        $this->_propDict["prohibitSendQuotaInBytes"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the prohibitSendReceiveQuotaInBytes
    *
    * @return int The prohibitSendReceiveQuotaInBytes
    */
    public function getProhibitSendReceiveQuotaInBytes()
    {
        if (array_key_exists("prohibitSendReceiveQuotaInBytes", $this->_propDict)) {
            return $this->_propDict["prohibitSendReceiveQuotaInBytes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the prohibitSendReceiveQuotaInBytes
    *
    * @param int $val The prohibitSendReceiveQuotaInBytes
    *
    * @return MailboxUsageDetail
    */
    public function setProhibitSendReceiveQuotaInBytes($val)
    {
        $this->_propDict["prohibitSendReceiveQuotaInBytes"] = intval($val);
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
    * @return MailboxUsageDetail
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
    * @return MailboxUsageDetail
    */
    public function setReportRefreshDate($val)
    {
        $this->_propDict["reportRefreshDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the storageUsedInBytes
    *
    * @return int The storageUsedInBytes
    */
    public function getStorageUsedInBytes()
    {
        if (array_key_exists("storageUsedInBytes", $this->_propDict)) {
            return $this->_propDict["storageUsedInBytes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the storageUsedInBytes
    *
    * @param int $val The storageUsedInBytes
    *
    * @return MailboxUsageDetail
    */
    public function setStorageUsedInBytes($val)
    {
        $this->_propDict["storageUsedInBytes"] = intval($val);
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
    * @return MailboxUsageDetail
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }
    
}
