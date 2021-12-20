<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* YammerGroupsActivityDetail File
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
* YammerGroupsActivityDetail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class YammerGroupsActivityDetail extends Entity
{
    /**
    * Gets the groupDisplayName
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
    *
    * @param string $val The groupDisplayName
    *
    * @return YammerGroupsActivityDetail
    */
    public function setGroupDisplayName($val)
    {
        $this->_propDict["groupDisplayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the groupType
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
    *
    * @param string $val The groupType
    *
    * @return YammerGroupsActivityDetail
    */
    public function setGroupType($val)
    {
        $this->_propDict["groupType"] = $val;
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
    * @return YammerGroupsActivityDetail
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
    * @return YammerGroupsActivityDetail
    */
    public function setLastActivityDate($val)
    {
        $this->_propDict["lastActivityDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the likedCount
    *
    * @return int The likedCount
    */
    public function getLikedCount()
    {
        if (array_key_exists("likedCount", $this->_propDict)) {
            return $this->_propDict["likedCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the likedCount
    *
    * @param int $val The likedCount
    *
    * @return YammerGroupsActivityDetail
    */
    public function setLikedCount($val)
    {
        $this->_propDict["likedCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the memberCount
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
    *
    * @param int $val The memberCount
    *
    * @return YammerGroupsActivityDetail
    */
    public function setMemberCount($val)
    {
        $this->_propDict["memberCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the networkDisplayName
    *
    * @return string The networkDisplayName
    */
    public function getNetworkDisplayName()
    {
        if (array_key_exists("networkDisplayName", $this->_propDict)) {
            return $this->_propDict["networkDisplayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the networkDisplayName
    *
    * @param string $val The networkDisplayName
    *
    * @return YammerGroupsActivityDetail
    */
    public function setNetworkDisplayName($val)
    {
        $this->_propDict["networkDisplayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the office365Connected
    *
    * @return bool The office365Connected
    */
    public function getOffice365Connected()
    {
        if (array_key_exists("office365Connected", $this->_propDict)) {
            return $this->_propDict["office365Connected"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the office365Connected
    *
    * @param bool $val The office365Connected
    *
    * @return YammerGroupsActivityDetail
    */
    public function setOffice365Connected($val)
    {
        $this->_propDict["office365Connected"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the ownerPrincipalName
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
    *
    * @param string $val The ownerPrincipalName
    *
    * @return YammerGroupsActivityDetail
    */
    public function setOwnerPrincipalName($val)
    {
        $this->_propDict["ownerPrincipalName"] = $val;
        return $this;
    }
    
    /**
    * Gets the postedCount
    *
    * @return int The postedCount
    */
    public function getPostedCount()
    {
        if (array_key_exists("postedCount", $this->_propDict)) {
            return $this->_propDict["postedCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the postedCount
    *
    * @param int $val The postedCount
    *
    * @return YammerGroupsActivityDetail
    */
    public function setPostedCount($val)
    {
        $this->_propDict["postedCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the readCount
    *
    * @return int The readCount
    */
    public function getReadCount()
    {
        if (array_key_exists("readCount", $this->_propDict)) {
            return $this->_propDict["readCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the readCount
    *
    * @param int $val The readCount
    *
    * @return YammerGroupsActivityDetail
    */
    public function setReadCount($val)
    {
        $this->_propDict["readCount"] = intval($val);
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
    * @return YammerGroupsActivityDetail
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
    * @return YammerGroupsActivityDetail
    */
    public function setReportRefreshDate($val)
    {
        $this->_propDict["reportRefreshDate"] = $val;
        return $this;
    }
    
}
