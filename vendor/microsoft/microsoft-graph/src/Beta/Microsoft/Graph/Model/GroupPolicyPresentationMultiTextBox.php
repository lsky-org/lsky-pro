<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* GroupPolicyPresentationMultiTextBox File
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
* GroupPolicyPresentationMultiTextBox class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class GroupPolicyPresentationMultiTextBox extends GroupPolicyPresentation
{
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
    * @return GroupPolicyPresentationMultiTextBox
    */
    public function setMaxLength($val)
    {
        $this->_propDict["maxLength"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the maxStrings
    * An unsigned integer that specifies the maximum number of strings. Default value is 0.
    *
    * @return int The maxStrings
    */
    public function getMaxStrings()
    {
        if (array_key_exists("maxStrings", $this->_propDict)) {
            return $this->_propDict["maxStrings"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the maxStrings
    * An unsigned integer that specifies the maximum number of strings. Default value is 0.
    *
    * @param int $val The maxStrings
    *
    * @return GroupPolicyPresentationMultiTextBox
    */
    public function setMaxStrings($val)
    {
        $this->_propDict["maxStrings"] = intval($val);
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
    * @return GroupPolicyPresentationMultiTextBox
    */
    public function setRequired($val)
    {
        $this->_propDict["required"] = boolval($val);
        return $this;
    }
    
}
