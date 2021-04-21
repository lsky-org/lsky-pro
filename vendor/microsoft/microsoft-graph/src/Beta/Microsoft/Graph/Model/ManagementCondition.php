<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ManagementCondition File
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
* ManagementCondition class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ManagementCondition extends Entity
{

     /** 
     * Gets the applicablePlatforms
    * The applicable platforms for this management condition.
     *
     * @return array The applicablePlatforms
     */
    public function getApplicablePlatforms()
    {
        if (array_key_exists("applicablePlatforms", $this->_propDict)) {
           return $this->_propDict["applicablePlatforms"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the applicablePlatforms
    * The applicable platforms for this management condition.
    *
    * @param DevicePlatformType $val The applicablePlatforms
    *
    * @return ManagementCondition
    */
    public function setApplicablePlatforms($val)
    {
		$this->_propDict["applicablePlatforms"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdDateTime
    * The time the management condition was created. Generated service side.
    *
    * @return \DateTime The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime")) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the createdDateTime
    * The time the management condition was created. Generated service side.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return ManagementCondition
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the description
    * The admin defined description of the management condition.
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
    * The admin defined description of the management condition.
    *
    * @param string $val The description
    *
    * @return ManagementCondition
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * The admin defined name of the management condition.
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
    * The admin defined name of the management condition.
    *
    * @param string $val The displayName
    *
    * @return ManagementCondition
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the eTag
    * ETag of the management condition. Updated service side.
    *
    * @return string The eTag
    */
    public function getETag()
    {
        if (array_key_exists("eTag", $this->_propDict)) {
            return $this->_propDict["eTag"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the eTag
    * ETag of the management condition. Updated service side.
    *
    * @param string $val The eTag
    *
    * @return ManagementCondition
    */
    public function setETag($val)
    {
        $this->_propDict["eTag"] = $val;
        return $this;
    }
    
    /**
    * Gets the modifiedDateTime
    * The time the management condition was last modified. Updated service side.
    *
    * @return \DateTime The modifiedDateTime
    */
    public function getModifiedDateTime()
    {
        if (array_key_exists("modifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["modifiedDateTime"], "\DateTime")) {
                return $this->_propDict["modifiedDateTime"];
            } else {
                $this->_propDict["modifiedDateTime"] = new \DateTime($this->_propDict["modifiedDateTime"]);
                return $this->_propDict["modifiedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the modifiedDateTime
    * The time the management condition was last modified. Updated service side.
    *
    * @param \DateTime $val The modifiedDateTime
    *
    * @return ManagementCondition
    */
    public function setModifiedDateTime($val)
    {
        $this->_propDict["modifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the uniqueName
    * Unique name for the management condition. Used in management condition expressions.
    *
    * @return string The uniqueName
    */
    public function getUniqueName()
    {
        if (array_key_exists("uniqueName", $this->_propDict)) {
            return $this->_propDict["uniqueName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the uniqueName
    * Unique name for the management condition. Used in management condition expressions.
    *
    * @param string $val The uniqueName
    *
    * @return ManagementCondition
    */
    public function setUniqueName($val)
    {
        $this->_propDict["uniqueName"] = $val;
        return $this;
    }
    

     /** 
     * Gets the managementConditionStatements
    * The management condition statements associated to the management condition.
     *
     * @return array The managementConditionStatements
     */
    public function getManagementConditionStatements()
    {
        if (array_key_exists("managementConditionStatements", $this->_propDict)) {
           return $this->_propDict["managementConditionStatements"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the managementConditionStatements
    * The management condition statements associated to the management condition.
    *
    * @param ManagementConditionStatement $val The managementConditionStatements
    *
    * @return ManagementCondition
    */
    public function setManagementConditionStatements($val)
    {
		$this->_propDict["managementConditionStatements"] = $val;
        return $this;
    }
    
}
