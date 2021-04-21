<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IdentityUserFlowAttributeAssignment File
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
* IdentityUserFlowAttributeAssignment class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IdentityUserFlowAttributeAssignment extends Entity
{
    /**
    * Gets the displayName
    * The display name of the identityUserFlowAttribute within a user flow.
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
    * The display name of the identityUserFlowAttribute within a user flow.
    *
    * @param string $val The displayName
    *
    * @return IdentityUserFlowAttributeAssignment
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the isOptional
    * Determines whether the identityUserFlowAttribute is optional. true means the user doesn't have to provide a value. false means the user cannot complete sign-up without providing a value.
    *
    * @return bool The isOptional
    */
    public function getIsOptional()
    {
        if (array_key_exists("isOptional", $this->_propDict)) {
            return $this->_propDict["isOptional"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isOptional
    * Determines whether the identityUserFlowAttribute is optional. true means the user doesn't have to provide a value. false means the user cannot complete sign-up without providing a value.
    *
    * @param bool $val The isOptional
    *
    * @return IdentityUserFlowAttributeAssignment
    */
    public function setIsOptional($val)
    {
        $this->_propDict["isOptional"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the requiresVerification
    * Determines whether the identityUserFlowAttribute requires verification. This is only used for verifying the user's phone number or email address.
    *
    * @return bool The requiresVerification
    */
    public function getRequiresVerification()
    {
        if (array_key_exists("requiresVerification", $this->_propDict)) {
            return $this->_propDict["requiresVerification"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the requiresVerification
    * Determines whether the identityUserFlowAttribute requires verification. This is only used for verifying the user's phone number or email address.
    *
    * @param bool $val The requiresVerification
    *
    * @return IdentityUserFlowAttributeAssignment
    */
    public function setRequiresVerification($val)
    {
        $this->_propDict["requiresVerification"] = boolval($val);
        return $this;
    }
    

     /** 
     * Gets the userAttributeValues
    * The input options for the user flow attribute. Only applicable when the userInputType is radioSingleSelect, dropdownSingleSelect, or checkboxMultiSelect.
     *
     * @return array The userAttributeValues
     */
    public function getUserAttributeValues()
    {
        if (array_key_exists("userAttributeValues", $this->_propDict)) {
           return $this->_propDict["userAttributeValues"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the userAttributeValues
    * The input options for the user flow attribute. Only applicable when the userInputType is radioSingleSelect, dropdownSingleSelect, or checkboxMultiSelect.
    *
    * @param UserAttributeValuesItem $val The userAttributeValues
    *
    * @return IdentityUserFlowAttributeAssignment
    */
    public function setUserAttributeValues($val)
    {
		$this->_propDict["userAttributeValues"] = $val;
        return $this;
    }
    
    /**
    * Gets the userInputType
    * The input type of the user flow attribute. Possible values are: textBox, dateTimeDropdown, radioSingleSelect, dropdownSingleSelect, emailBox, checkboxMultiSelect.
    *
    * @return IdentityUserFlowAttributeInputType The userInputType
    */
    public function getUserInputType()
    {
        if (array_key_exists("userInputType", $this->_propDict)) {
            if (is_a($this->_propDict["userInputType"], "\Beta\Microsoft\Graph\Model\IdentityUserFlowAttributeInputType")) {
                return $this->_propDict["userInputType"];
            } else {
                $this->_propDict["userInputType"] = new IdentityUserFlowAttributeInputType($this->_propDict["userInputType"]);
                return $this->_propDict["userInputType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the userInputType
    * The input type of the user flow attribute. Possible values are: textBox, dateTimeDropdown, radioSingleSelect, dropdownSingleSelect, emailBox, checkboxMultiSelect.
    *
    * @param IdentityUserFlowAttributeInputType $val The userInputType
    *
    * @return IdentityUserFlowAttributeAssignment
    */
    public function setUserInputType($val)
    {
        $this->_propDict["userInputType"] = $val;
        return $this;
    }
    
    /**
    * Gets the userAttribute
    * The user attribute that you want to add to your user flow.
    *
    * @return IdentityUserFlowAttribute The userAttribute
    */
    public function getUserAttribute()
    {
        if (array_key_exists("userAttribute", $this->_propDict)) {
            if (is_a($this->_propDict["userAttribute"], "\Beta\Microsoft\Graph\Model\IdentityUserFlowAttribute")) {
                return $this->_propDict["userAttribute"];
            } else {
                $this->_propDict["userAttribute"] = new IdentityUserFlowAttribute($this->_propDict["userAttribute"]);
                return $this->_propDict["userAttribute"];
            }
        }
        return null;
    }
    
    /**
    * Sets the userAttribute
    * The user attribute that you want to add to your user flow.
    *
    * @param IdentityUserFlowAttribute $val The userAttribute
    *
    * @return IdentityUserFlowAttributeAssignment
    */
    public function setUserAttribute($val)
    {
        $this->_propDict["userAttribute"] = $val;
        return $this;
    }
    
}
