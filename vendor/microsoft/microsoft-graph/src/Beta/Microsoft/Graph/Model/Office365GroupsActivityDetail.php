<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Office365GroupsActivityDetail File
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
* Office365GroupsActivityDetail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Office365GroupsActivityDetail extends Entity
{
    /**
    * Gets the exchangeMailboxStorageUsedInBytes
    * The storage used of the group mailbox.
    *
    * @return int The exchangeMailboxStorageUsedInBytes
    */
    public function getExchangeMailboxStorageUsedInBytes()
    {
        if (array_key_exists("exchangeMailboxStorageUsedInBytes", $this->_propDict)) {
            return $this->_propDict["exchangeMailboxStorageUsedInBytes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the exchangeMailboxStorageUsedInBytes
    * The storage used of the group mailbox.
    *
    * @param int $val The exchangeMailboxStorageUsedInBytes
    *
    * @return Office365GroupsActivityDetail
    */
    public function setExchangeMailboxStorageUsedInBytes($val)
    {
        $this->_propDict["exchangeMailboxStorageUsedInBytes"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the exchangeMailboxTotalItemCount
    * The number of items in the group mailbox.
    *
    * @return int The exchangeMailboxTotalItemCount
    */
    public function getExchangeMailboxTotalItemCount()
    {
        if (array_key_exists("exchangeMailboxTotalItemCount", $this->_propDict)) {
            return $this->_propDict["exchangeMailboxTotalItemCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the exchangeMailboxTotalItemCount
    * The number of items in the group mailbox.
    *
    * @param int $val The exchangeMailboxTotalItemCount
    *
    * @return Office365GroupsActivityDetail
    */
    public function setExchangeMailboxTotalItemCount($val)
    {
        $this->_propDict["exchangeMailboxTotalItemCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the exchangeReceivedEmailCount
    * The number of email that the group mailbox received.
    *
    * @return int The exchangeReceivedEmailCount
    */
    public function getExchangeReceivedEmailCount()
    {
        if (array_key_exists("exchangeReceivedEmailCount", $this->_propDict)) {
            return $this->_propDict["exchangeReceivedEmailCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the exchangeReceivedEmailCount
    * The number of email that the group mailbox received.
    *
    * @param int $val The exchangeReceivedEmailCount
    *
    * @return Office365GroupsActivityDetail
    */
    public function setExchangeReceivedEmailCount($val)
    {
        $this->_propDict["exchangeReceivedEmailCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the externalMemberCount
    * The group external member count.
    *
    * @return int The externalMemberCount
    */
    public function getExternalMemberCount()
    {
        if (array_key_exists("externalMemberCount", $this->_propDict)) {
            return $this->_propDict["externalMemberCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the externalMemberCount
    * The group external member count.
    *
    * @param int $val The externalMemberCount
    *
    * @return Office365GroupsActivityDetail
    */
    public function setExternalMemberCount($val)
    {
        $this->_propDict["externalMemberCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the groupDisplayName
    * The display name of the group.
    *
    * @return string The groupDisplayName
    */
    public function getGroupDisplayName()
    {
        if (array_key_exists("groupDisplayName", $this->_propDict)) {
            return $this->_propDict["groupDisplayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the groupDisplayName
    * The display name of the group.
    *
    * @param string $val The groupDisplayName
    *
    * @return Office365GroupsActivityDetail
    */
    public function setGroupDisplayName($val)
    {
        $this->_propDict["groupDisplayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the groupId
    * The group id.
    *
    * @return string The groupId
    */
    public function getGroupId()
    {
        if (array_key_exists("groupId", $this->_propDict)) {
            return $this->_propDict["groupId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the groupId
    * The group id.
    *
    * @param string $val The groupId
    *
    * @return Office365GroupsActivityDetail
    */
    public function setGroupId($val)
    {
        $this->_propDict["groupId"] = $val;
        return $this;
    }
    
    /**
    * Gets the groupType
    * The group type. Possible values are: Public or Private.
    *
    * @return string The groupType
    */
    public function getGroupType()
    {
        if (array_key_exists("groupType", $this->_propDict)) {
            return $this->_propDict["groupType"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the groupType
    * The group type. Possible values are: Public or Private.
    *
    * @param string $val The groupType
    *
    * @return Office365GroupsActivityDetail
    */
    public function setGroupType($val)
    {
        $this->_propDict["groupType"] = $val;
        return $this;
    }
    
    /**
    * Gets the isDeleted
    * Whether this user has been deleted or soft deleted.
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
    * Whether this user has been deleted or soft deleted.
    *
    * @param bool $val The isDeleted
    *
    * @return Office365GroupsActivityDetail
    */
    public function setIsDeleted($val)
    {
        $this->_propDict["isDeleted"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the lastActivityDate
    * The last activity date for the following scenarios:  group mailbox received email; user viewed, edited, shared, or synced files in SharePoint document library; user viewed SharePoint pages; user posted, read, or liked messages in Yammer groups.
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
    * The last activity date for the following scenarios:  group mailbox received email; user viewed, edited, shared, or synced files in SharePoint document library; user viewed SharePoint pages; user posted, read, or liked messages in Yammer groups.
    *
    * @param \DateTime $val The lastActivityDate
    *
    * @return Office365GroupsActivityDetail
    */
    public function setLastActivityDate($val)
    {
        $this->_propDict["lastActivityDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the memberCount
    * The group member count.
    *
    * @return int The memberCount
    */
    public function getMemberCount()
    {
        if (array_key_exists("memberCount", $this->_propDict)) {
            return $this->_propDict["memberCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the memberCount
    * The group member count.
    *
    * @param int $val The memberCount
    *
    * @return Office365GroupsActivityDetail
    */
    public function setMemberCount($val)
    {
        $this->_propDict["memberCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the ownerPrincipalName
    * The group owner principal name.
    *
    * @return string The ownerPrincipalName
    */
    public function getOwnerPrincipalName()
    {
        if (array_key_exists("ownerPrincipalName", $this->_propDict)) {
            return $this->_propDict["ownerPrincipalName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the ownerPrincipalName
    * The group owner principal name.
    *
    * @param string $val The ownerPrincipalName
    *
    * @return Office365GroupsActivityDetail
    */
    public function setOwnerPrincipalName($val)
    {
        $this->_propDict["ownerPrincipalName"] = $val;
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
    * @return Office365GroupsActivityDetail
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
    * @return Office365GroupsActivityDetail
    */
    public function setReportRefreshDate($val)
    {
        $this->_propDict["reportRefreshDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the sharePointActiveFileCount
    * The number of active files in SharePoint Group site.
    *
    * @return int The sharePointActiveFileCount
    */
    public function getSharePointActiveFileCount()
    {
        if (array_key_exists("sharePointActiveFileCount", $this->_propDict)) {
            return $this->_propDict["sharePointActiveFileCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the sharePointActiveFileCount
    * The number of active files in SharePoint Group site.
    *
    * @param int $val The sharePointActiveFileCount
    *
    * @return Office365GroupsActivityDetail
    */
    public function setSharePointActiveFileCount($val)
    {
        $this->_propDict["sharePointActiveFileCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the sharePointSiteStorageUsedInBytes
    * The storage used by SharePoint Group site.
    *
    * @return int The sharePointSiteStorageUsedInBytes
    */
    public function getSharePointSiteStorageUsedInBytes()
    {
        if (array_key_exists("sharePointSiteStorageUsedInBytes", $this->_propDict)) {
            return $this->_propDict["sharePointSiteStorageUsedInBytes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the sharePointSiteStorageUsedInBytes
    * The storage used by SharePoint Group site.
    *
    * @param int $val The sharePointSiteStorageUsedInBytes
    *
    * @return Office365GroupsActivityDetail
    */
    public function setSharePointSiteStorageUsedInBytes($val)
    {
        $this->_propDict["sharePointSiteStorageUsedInBytes"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the sharePointTotalFileCount
    * The total number of files in SharePoint Group site.
    *
    * @return int The sharePointTotalFileCount
    */
    public function getSharePointTotalFileCount()
    {
        if (array_key_exists("sharePointTotalFileCount", $this->_propDict)) {
            return $this->_propDict["sharePointTotalFileCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the sharePointTotalFileCount
    * The total number of files in SharePoint Group site.
    *
    * @param int $val The sharePointTotalFileCount
    *
    * @return Office365GroupsActivityDetail
    */
    public function setSharePointTotalFileCount($val)
    {
        $this->_propDict["sharePointTotalFileCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the yammerLikedMessageCount
    * The number of messages liked in Yammer groups.
    *
    * @return int The yammerLikedMessageCount
    */
    public function getYammerLikedMessageCount()
    {
        if (array_key_exists("yammerLikedMessageCount", $this->_propDict)) {
            return $this->_propDict["yammerLikedMessageCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the yammerLikedMessageCount
    * The number of messages liked in Yammer groups.
    *
    * @param int $val The yammerLikedMessageCount
    *
    * @return Office365GroupsActivityDetail
    */
    public function setYammerLikedMessageCount($val)
    {
        $this->_propDict["yammerLikedMessageCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the yammerPostedMessageCount
    * The number of messages posted to Yammer groups.
    *
    * @return int The yammerPostedMessageCount
    */
    public function getYammerPostedMessageCount()
    {
        if (array_key_exists("yammerPostedMessageCount", $this->_propDict)) {
            return $this->_propDict["yammerPostedMessageCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the yammerPostedMessageCount
    * The number of messages posted to Yammer groups.
    *
    * @param int $val The yammerPostedMessageCount
    *
    * @return Office365GroupsActivityDetail
    */
    public function setYammerPostedMessageCount($val)
    {
        $this->_propDict["yammerPostedMessageCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the yammerReadMessageCount
    * The number of messages read in Yammer groups.
    *
    * @return int The yammerReadMessageCount
    */
    public function getYammerReadMessageCount()
    {
        if (array_key_exists("yammerReadMessageCount", $this->_propDict)) {
            return $this->_propDict["yammerReadMessageCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the yammerReadMessageCount
    * The number of messages read in Yammer groups.
    *
    * @param int $val The yammerReadMessageCount
    *
    * @return Office365GroupsActivityDetail
    */
    public function setYammerReadMessageCount($val)
    {
        $this->_propDict["yammerReadMessageCount"] = intval($val);
        return $this;
    }
    
}
