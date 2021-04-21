<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* GroupPolicyPresentationComboBox File
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
* GroupPolicyPresentationComboBox class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class GroupPolicyPresentationComboBox extends GroupPolicyPresentation
{
    /**
    * Gets the defaultValue
    * Localized default string displayed in the combo box. The default value is empty.
    *
    * @return string The defaultValue
    */
    public function getDefaultValue()
    {
        if (array_key_exists("defaultValue", $this->_propDict)) {
            return $this->_propDict["defaultValue"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the defaultValue
    * Localized default string displayed in the combo box. The default value is empty.
    *
    * @param string $val The defaultValue
    *
    * @return GroupPolicyPresentationComboBox
    */
    public function setDefaultValue($val)
    {
        $this->_propDict["defaultValue"] = $val;
        return $this;
    }
    
    /**
    * Gets the maxLength
    * An unsigned integer that specifies the maximum number of text characters for the parameter. The default value is 1023.
    *
    * @return int The maxLength
    */
    public function getMaxLength()
    {
        if (array_key_exists("maxLength", $this->_propDict)) {
            return $this->_propDict["maxLength"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the maxLength
    * An unsigned integer that specifies the maximum number of text characters for the parameter. The default value is 1023.
    *
    * @param int $val The maxLength
    *
    * @return GroupPolicyPresentationComboBox
    */
    public function setMaxLength($val)
    {
        $this->_propDict["maxLength"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the required
    * Specifies whether a value must be specified for the parameter. The default value is false.
    *
    * @return bool The required
    */
    public function getRequired()
    {
        if (array_key_exists("required", $this->_propDict)) {
            return $this->_propDict["required"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the required
    * Specifies whether a value must be specified for the parameter. The default value is false.
    *
    * @param bool $val The required
    *
    * @return GroupPolicyPresentationComboBox
    */
    public function setRequired($val)
    {
        $this->_propDict["required"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the suggestions
    * Localized strings listed in the drop-down list of the combo box. The default value is empty.
    *
    * @return string The suggestions
    */
    public function getSuggestions()
    {
        if (array_key_exists("suggestions", $this->_propDict)) {
            return $this->_propDict["suggestions"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the suggestions
    * Localized strings listed in the drop-down list of the combo box. The default value is empty.
    *
    * @param string $val The suggestions
    *
    * @return GroupPolicyPresentationComboBox
    */
    public function setSuggestions($val)
    {
        $this->_propDict["suggestions"] = $val;
        return $this;
    }
    
}
