<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* GroupPolicyPresentationValue File
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
* GroupPolicyPresentationValue class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class GroupPolicyPresentationValue extends Entity
{
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
    * @return GroupPolicyPresentationValue
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastModifiedDateTime
    * The date and time the object was last modified.
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
    * The date and time the object was last modified.
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return GroupPolicyPresentationValue
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the definitionValue
    * The group policy definition value associated with the presentation value.
    *
    * @return GroupPolicyDefinitionValue The definitionValue
    */
    public function getDefinitionValue()
    {
        if (array_key_exists("definitionValue", $this->_propDict)) {
            if (is_a($this->_propDict["definitionValue"], "\Beta\Microsoft\Graph\Model\GroupPolicyDefinitionValue")) {
                return $this->_propDict["definitionValue"];
            } else {
                $this->_propDict["definitionValue"] = new GroupPolicyDefinitionValue($this->_propDict["definitionValue"]);
                return $this->_propDict["definitionValue"];
            }
        }
        return null;
    }
    
    /**
    * Sets the definitionValue
    * The group policy definition value associated with the presentation value.
    *
    * @param GroupPolicyDefinitionValue $val The definitionValue
    *
    * @return GroupPolicyPresentationValue
    */
    public function setDefinitionValue($val)
    {
        $this->_propDict["definitionValue"] = $val;
        return $this;
    }
    
    /**
    * Gets the presentation
    * The group policy presentation associated with the presentation value.
    *
    * @return GroupPolicyPresentation The presentation
    */
    public function getPresentation()
    {
        if (array_key_exists("presentation", $this->_propDict)) {
            if (is_a($this->_propDict["presentation"], "\Beta\Microsoft\Graph\Model\GroupPolicyPresentation")) {
                return $this->_propDict["presentation"];
            } else {
                $this->_propDict["presentation"] = new GroupPolicyPresentation($this->_propDict["presentation"]);
                return $this->_propDict["presentation"];
            }
        }
        return null;
    }
    
    /**
    * Sets the presentation
    * The group policy presentation associated with the presentation value.
    *
    * @param GroupPolicyPresentation $val The presentation
    *
    * @return GroupPolicyPresentationValue
    */
    public function setPresentation($val)
    {
        $this->_propDict["presentation"] = $val;
        return $this;
    }
    
}
