<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamworkTag File
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
* TeamworkTag class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TeamworkTag extends Entity
{
    /**
    * Gets the description
    *
    * @return string The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the description
    *
    * @param string $val The description
    *
    * @return TeamworkTag
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
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
    * @return TeamworkTag
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
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
    * @return TeamworkTag
    */
    public function setMemberCount($val)
    {
        $this->_propDict["memberCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the tagType
    *
    * @return TeamworkTagType The tagType
    */
    public function getTagType()
    {
        if (array_key_exists("tagType", $this->_propDict)) {
            if (is_a($this->_propDict["tagType"], "\Beta\Microsoft\Graph\Model\TeamworkTagType")) {
                return $this->_propDict["tagType"];
            } else {
                $this->_propDict["tagType"] = new TeamworkTagType($this->_propDict["tagType"]);
                return $this->_propDict["tagType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the tagType
    *
    * @param TeamworkTagType $val The tagType
    *
    * @return TeamworkTag
    */
    public function setTagType($val)
    {
        $this->_propDict["tagType"] = $val;
        return $this;
    }
    
    /**
    * Gets the teamId
    *
    * @return string The teamId
    */
    public function getTeamId()
    {
        if (array_key_exists("teamId", $this->_propDict)) {
            return $this->_propDict["teamId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the teamId
    *
    * @param string $val The teamId
    *
    * @return TeamworkTag
    */
    public function setTeamId($val)
    {
        $this->_propDict["teamId"] = $val;
        return $this;
    }
    

     /** 
     * Gets the members
     *
     * @return array The members
     */
    public function getMembers()
    {
        if (array_key_exists("members", $this->_propDict)) {
           return $this->_propDict["members"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the members
    *
    * @param TeamworkTagMember $val The members
    *
    * @return TeamworkTag
    */
    public function setMembers($val)
    {
		$this->_propDict["members"] = $val;
        return $this;
    }
    
}
