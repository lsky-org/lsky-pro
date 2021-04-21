<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* GroupPolicyPresentationTextBox File
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
* GroupPolicyPresentationTextBox class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class GroupPolicyPresentationTextBox extends GroupPolicyPresentation
{
    /**
    * Gets the defaultValue
    * Localized default string displayed in the text box. The default value is empty.
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
    * Localized default string displayed in the text box. The default value is empty.
    *
    * @param string $val The defaultValue
    *
    * @return GroupPolicyPresentationTextBox
    */
    public function setDefaultValue($val)
    {
        $this->_propDict["defaultValue"] = $val;
        return $this;
    }
    
    /**
    * Gets the maxLength
    * An unsigned integer that specifies the maximum number of text characters. Default value is 1023.
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
    * An unsigned integer that specifies the maximum number of text characters. Default value is 1023.
    *
    * @param int $val The maxLength
    *
    * @return GroupPolicyPresentationTextBox
    */
    public function setMaxLength($val)
    {
        $this->_propDict["maxLength"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the required
    * Requirement to enter a value in the text box. Default value is false.
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
    * Requirement to enter a value in the text box. Default value is false.
    *
    * @param bool $val The required
    *
    * @return GroupPolicyPresentationTextBox
    */
    public function setRequired($val)
    {
        $this->_propDict["required"] = boolval($val);
        return $this;
    }
    
}
