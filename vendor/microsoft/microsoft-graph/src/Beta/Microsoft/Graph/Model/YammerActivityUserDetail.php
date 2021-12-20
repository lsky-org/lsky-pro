<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* YammerActivityUserDetail File
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
* YammerActivityUserDetail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class YammerActivityUserDetail extends Entity
{
    /**
    * Gets the assignedProducts
    *
    * @return string The assignedProducts
    */
    public function getAssignedProducts()
    {
        if (array_key_exists("assignedProducts", $this->_propDict)) {
            return $this->_propDict["assignedProducts"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the assignedProducts
    *
    * @param string $val The assignedProducts
    *
    * @return YammerActivityUserDetail
    */
    public function setAssignedProducts($val)
    {
        $this->_propDict["assignedProducts"] = $val;
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
    * @return YammerActivityUserDetail
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
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
    * @return YammerActivityUserDetail
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
    * @return YammerActivityUserDetail
    */
    public function setLikedCount($val)
    {
        $this->_propDict["likedCount"] = intval($val);
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
    * @return YammerActivityUserDetail
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
    * @return YammerActivityUserDetail
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
    * @return YammerActivityUserDetail
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
    * @return YammerActivityUserDetail
    */
    public function setReportRefreshDate($val)
    {
        $this->_propDict["reportRefreshDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the stateChangeDate
    *
    * @return \DateTime The stateChangeDate
    */
    public function getStateChangeDate()
    {
        if (array_key_exists("stateChangeDate", $this->_propDict)) {
            if (is_a($this->_propDict["stateChangeDate"], "\DateTime")) {
                return $this->_propDict["stateChangeDate"];
            } else {
                $this->_propDict["stateChangeDate"] = new \DateTime($this->_propDict["stateChangeDate"]);
                return $this->_propDict["stateChangeDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the stateChangeDate
    *
    * @param \DateTime $val The stateChangeDate
    *
    * @return YammerActivityUserDetail
    */
    public function setStateChangeDate($val)
    {
        $this->_propDict["stateChangeDate"] = $val;
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
    * @return YammerActivityUserDetail
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }
    
    /**
    * Gets the userState
    *
    * @return string The userState
    */
    public function getUserState()
    {
        if (array_key_exists("userState", $this->_propDict)) {
            return $this->_propDict["userState"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userState
    *
    * @param string $val The userState
    *
    * @return YammerActivityUserDetail
    */
    public function setUserState($val)
    {
        $this->_propDict["userState"] = $val;
        return $this;
    }
    
}
