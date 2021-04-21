<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* GroupPolicyPresentationDropdownList File
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
* GroupPolicyPresentationDropdownList class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class GroupPolicyPresentationDropdownList extends GroupPolicyPresentation
{
    /**
    * Gets the defaultItem
    * Localized string value identifying the default choice of the list of items.
    *
    * @return GroupPolicyPresentationDropdownListItem The defaultItem
    */
    public function getDefaultItem()
    {
        if (array_key_exists("defaultItem", $this->_propDict)) {
            if (is_a($this->_propDict["defaultItem"], "\Beta\Microsoft\Graph\Model\GroupPolicyPresentationDropdownListItem")) {
                return $this->_propDict["defaultItem"];
            } else {
                $this->_propDict["defaultItem"] = new GroupPolicyPresentationDropdownListItem($this->_propDict["defaultItem"]);
                return $this->_propDict["defaultItem"];
            }
        }
        return null;
    }
    
    /**
    * Sets the defaultItem
    * Localized string value identifying the default choice of the list of items.
    *
    * @param GroupPolicyPresentationDropdownListItem $val The defaultItem
    *
    * @return GroupPolicyPresentationDropdownList
    */
    public function setDefaultItem($val)
    {
        $this->_propDict["defaultItem"] = $val;
        return $this;
    }
    

     /** 
     * Gets the items
    * Represents a set of localized display names and their associated values.
     *
     * @return array The items
     */
    public function getItems()
    {
        if (array_key_exists("items", $this->_propDict)) {
           return $this->_propDict["items"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the items
    * Represents a set of localized display names and their associated values.
    *
    * @param GroupPolicyPresentationDropdownListItem $val The items
    *
    * @return GroupPolicyPresentationDropdownList
    */
    public function setItems($val)
    {
		$this->_propDict["items"] = $val;
        return $this;
    }
    
    /**
    * Gets the required
    * Requirement to enter a value in the parameter box. The default value is false.
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
    * Requirement to enter a value in the parameter box. The default value is false.
    *
    * @param bool $val The required
    *
    * @return GroupPolicyPresentationDropdownList
    */
    public function setRequired($val)
    {
        $this->_propDict["required"] = boolval($val);
        return $this;
    }
    
}
