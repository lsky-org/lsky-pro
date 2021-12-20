<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* GroupPolicyDefinitionFile File
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
* GroupPolicyDefinitionFile class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class GroupPolicyDefinitionFile extends Entity
{
    /**
    * Gets the description
    * The localized description of the policy settings in the ADMX file. The default value is empty.
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
    * The localized description of the policy settings in the ADMX file. The default value is empty.
    *
    * @param string $val The description
    *
    * @return GroupPolicyDefinitionFile
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * The localized friendly name of the ADMX file.
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
    * The localized friendly name of the ADMX file.
    *
    * @param string $val The displayName
    *
    * @return GroupPolicyDefinitionFile
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the languageCodes
    * The supported language codes for the ADMX file.
    *
    * @return string The languageCodes
    */
    public function getLanguageCodes()
    {
        if (array_key_exists("languageCodes", $this->_propDict)) {
            return $this->_propDict["languageCodes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the languageCodes
    * The supported language codes for the ADMX file.
    *
    * @param string $val The languageCodes
    *
    * @return GroupPolicyDefinitionFile
    */
    public function setLanguageCodes($val)
    {
        $this->_propDict["languageCodes"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastModifiedDateTime
    * The date and time the entity was last modified.
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
    * The date and time the entity was last modified.
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return GroupPolicyDefinitionFile
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the policyType
    * Specifies the type of group policy. Possible values are: admxBacked, admxIngested.
    *
    * @return GroupPolicyType The policyType
    */
    public function getPolicyType()
    {
        if (array_key_exists("policyType", $this->_propDict)) {
            if (is_a($this->_propDict["policyType"], "\Beta\Microsoft\Graph\Model\GroupPolicyType")) {
                return $this->_propDict["policyType"];
            } else {
                $this->_propDict["policyType"] = new GroupPolicyType($this->_propDict["policyType"]);
                return $this->_propDict["policyType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the policyType
    * Specifies the type of group policy. Possible values are: admxBacked, admxIngested.
    *
    * @param GroupPolicyType $val The policyType
    *
    * @return GroupPolicyDefinitionFile
    */
    public function setPolicyType($val)
    {
        $this->_propDict["policyType"] = $val;
        return $this;
    }
    
    /**
    * Gets the revision
    * The revision version associated with the file.
    *
    * @return string The revision
    */
    public function getRevision()
    {
        if (array_key_exists("revision", $this->_propDict)) {
            return $this->_propDict["revision"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the revision
    * The revision version associated with the file.
    *
    * @param string $val The revision
    *
    * @return GroupPolicyDefinitionFile
    */
    public function setRevision($val)
    {
        $this->_propDict["revision"] = $val;
        return $this;
    }
    
    /**
    * Gets the targetNamespace
    * Specifies the URI used to identify the namespace within the ADMX file.
    *
    * @return string The targetNamespace
    */
    public function getTargetNamespace()
    {
        if (array_key_exists("targetNamespace", $this->_propDict)) {
            return $this->_propDict["targetNamespace"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the targetNamespace
    * Specifies the URI used to identify the namespace within the ADMX file.
    *
    * @param string $val The targetNamespace
    *
    * @return GroupPolicyDefinitionFile
    */
    public function setTargetNamespace($val)
    {
        $this->_propDict["targetNamespace"] = $val;
        return $this;
    }
    
    /**
    * Gets the targetPrefix
    * Specifies the logical name that refers to the namespace within the ADMX file.
    *
    * @return string The targetPrefix
    */
    public function getTargetPrefix()
    {
        if (array_key_exists("targetPrefix", $this->_propDict)) {
            return $this->_propDict["targetPrefix"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the targetPrefix
    * Specifies the logical name that refers to the namespace within the ADMX file.
    *
    * @param string $val The targetPrefix
    *
    * @return GroupPolicyDefinitionFile
    */
    public function setTargetPrefix($val)
    {
        $this->_propDict["targetPrefix"] = $val;
        return $this;
    }
    

     /** 
     * Gets the definitions
    * The group policy definitions associated with the file.
     *
     * @return array The definitions
     */
    public function getDefinitions()
    {
        if (array_key_exists("definitions", $this->_propDict)) {
           return $this->_propDict["definitions"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the definitions
    * The group policy definitions associated with the file.
    *
    * @param GroupPolicyDefinition $val The definitions
    *
    * @return GroupPolicyDefinitionFile
    */
    public function setDefinitions($val)
    {
		$this->_propDict["definitions"] = $val;
        return $this;
    }
    
}
