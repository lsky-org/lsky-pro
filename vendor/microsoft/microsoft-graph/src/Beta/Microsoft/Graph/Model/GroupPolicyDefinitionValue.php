<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* GroupPolicyDefinitionValue File
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
* GroupPolicyDefinitionValue class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class GroupPolicyDefinitionValue extends Entity
{
    /**
    * Gets the configurationType
    * Specifies how the value should be configured. This can be either as a Policy or as a Preference. Possible values are: policy, preference.
    *
    * @return GroupPolicyConfigurationType The configurationType
    */
    public function getConfigurationType()
    {
        if (array_key_exists("configurationType", $this->_propDict)) {
            if (is_a($this->_propDict["configurationType"], "\Beta\Microsoft\Graph\Model\GroupPolicyConfigurationType")) {
                return $this->_propDict["configurationType"];
            } else {
                $this->_propDict["configurationType"] = new GroupPolicyConfigurationType($this->_propDict["configurationType"]);
                return $this->_propDict["configurationType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the configurationType
    * Specifies how the value should be configured. This can be either as a Policy or as a Preference. Possible values are: policy, preference.
    *
    * @param GroupPolicyConfigurationType $val The configurationType
    *
    * @return GroupPolicyDefinitionValue
    */
    public function setConfigurationType($val)
    {
        $this->_propDict["configurationType"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdDateTime
    * The date and time the object was created.
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
    * The date and time the object was created.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return GroupPolicyDefinitionValue
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the enabled
    * Enables or disables the associated group policy definition.
    *
    * @return bool The enabled
    */
    public function getEnabled()
    {
        if (array_key_exists("enabled", $this->_propDict)) {
            return $this->_propDict["enabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the enabled
    * Enables or disables the associated group policy definition.
    *
    * @param bool $val The enabled
    *
    * @return GroupPolicyDefinitionValue
    */
    public function setEnabled($val)
    {
        $this->_propDict["enabled"] = boolval($val);
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
    * @return GroupPolicyDefinitionValue
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the definition
    * The associated group policy definition with the value.
    *
    * @return GroupPolicyDefinition The definition
    */
    public function getDefinition()
    {
        if (array_key_exists("definition", $this->_propDict)) {
            if (is_a($this->_propDict["definition"], "\Beta\Microsoft\Graph\Model\GroupPolicyDefinition")) {
                return $this->_propDict["definition"];
            } else {
                $this->_propDict["definition"] = new GroupPolicyDefinition($this->_propDict["definition"]);
                return $this->_propDict["definition"];
            }
        }
        return null;
    }
    
    /**
    * Sets the definition
    * The associated group policy definition with the value.
    *
    * @param GroupPolicyDefinition $val The definition
    *
    * @return GroupPolicyDefinitionValue
    */
    public function setDefinition($val)
    {
        $this->_propDict["definition"] = $val;
        return $this;
    }
    

     /** 
     * Gets the presentationValues
    * The associated group policy presentation values with the definition value.
     *
     * @return array The presentationValues
     */
    public function getPresentationValues()
    {
        if (array_key_exists("presentationValues", $this->_propDict)) {
           return $this->_propDict["presentationValues"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the presentationValues
    * The associated group policy presentation values with the definition value.
    *
    * @param GroupPolicyPresentationValue $val The presentationValues
    *
    * @return GroupPolicyDefinitionValue
    */
    public function setPresentationValues($val)
    {
		$this->_propDict["presentationValues"] = $val;
        return $this;
    }
    
}
