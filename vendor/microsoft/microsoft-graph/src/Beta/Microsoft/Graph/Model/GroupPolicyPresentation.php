<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* GroupPolicyPresentation File
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
* GroupPolicyPresentation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class GroupPolicyPresentation extends Entity
{
    /**
    * Gets the label
    * Localized text label for any presentation entity. The default value is empty.
    *
    * @return string The label
    */
    public function getLabel()
    {
        if (array_key_exists("label", $this->_propDict)) {
            return $this->_propDict["label"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the label
    * Localized text label for any presentation entity. The default value is empty.
    *
    * @param string $val The label
    *
    * @return GroupPolicyPresentation
    */
    public function setLabel($val)
    {
        $this->_propDict["label"] = $val;
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
    * @return GroupPolicyPresentation
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the definition
    * The group policy definition associated with the presentation.
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
    * The group policy definition associated with the presentation.
    *
    * @param GroupPolicyDefinition $val The definition
    *
    * @return GroupPolicyPresentation
    */
    public function setDefinition($val)
    {
        $this->_propDict["definition"] = $val;
        return $this;
    }
    
}
