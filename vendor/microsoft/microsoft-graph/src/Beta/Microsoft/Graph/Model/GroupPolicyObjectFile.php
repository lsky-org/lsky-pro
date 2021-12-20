<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* GroupPolicyObjectFile File
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
* GroupPolicyObjectFile class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class GroupPolicyObjectFile extends Entity
{
    /**
    * Gets the content
    * The Group Policy Object file content.
    *
    * @return string The content
    */
    public function getContent()
    {
        if (array_key_exists("content", $this->_propDict)) {
            return $this->_propDict["content"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the content
    * The Group Policy Object file content.
    *
    * @param string $val The content
    *
    * @return GroupPolicyObjectFile
    */
    public function setContent($val)
    {
        $this->_propDict["content"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdDateTime
    * The date and time at which the GroupPolicy was first uploaded.
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
    * The date and time at which the GroupPolicy was first uploaded.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return GroupPolicyObjectFile
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the groupPolicyObjectId
    * The Group Policy Object GUID from GPO Xml content
    *
    * @return string The groupPolicyObjectId
    */
    public function getGroupPolicyObjectId()
    {
        if (array_key_exists("groupPolicyObjectId", $this->_propDict)) {
            return $this->_propDict["groupPolicyObjectId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the groupPolicyObjectId
    * The Group Policy Object GUID from GPO Xml content
    *
    * @param string $val The groupPolicyObjectId
    *
    * @return GroupPolicyObjectFile
    */
    public function setGroupPolicyObjectId($val)
    {
        $this->_propDict["groupPolicyObjectId"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastModifiedDateTime
    * The date and time at which the GroupPolicyObjectFile was last modified.
    *
    * @return \DateTime The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedDateTime"], "\DateTime")) {
                return $this->_propDict["lastModifiedDateTime"];
            } else {
                $this->_propDict["lastModifiedDateTime"] = new \DateTime($this->_propDict["lastModifiedDateTime"]);
                return $this->_propDict["lastModifiedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastModifiedDateTime
    * The date and time at which the GroupPolicyObjectFile was last modified.
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return GroupPolicyObjectFile
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the ouDistinguishedName
    * The distinguished name of the OU.
    *
    * @return string The ouDistinguishedName
    */
    public function getOuDistinguishedName()
    {
        if (array_key_exists("ouDistinguishedName", $this->_propDict)) {
            return $this->_propDict["ouDistinguishedName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the ouDistinguishedName
    * The distinguished name of the OU.
    *
    * @param string $val The ouDistinguishedName
    *
    * @return GroupPolicyObjectFile
    */
    public function setOuDistinguishedName($val)
    {
        $this->_propDict["ouDistinguishedName"] = $val;
        return $this;
    }
    
}
