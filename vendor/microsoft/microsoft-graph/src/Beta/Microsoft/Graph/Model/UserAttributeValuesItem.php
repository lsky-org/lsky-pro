<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserAttributeValuesItem File
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
* UserAttributeValuesItem class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserAttributeValuesItem extends Entity
{
    /**
    * Gets the isDefault
    * Used to set the value as the default.
    *
    * @return bool The isDefault
    */
    public function getIsDefault()
    {
        if (array_key_exists("isDefault", $this->_propDict)) {
            return $this->_propDict["isDefault"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isDefault
    * Used to set the value as the default.
    *
    * @param bool $val The value of the isDefault
    *
    * @return UserAttributeValuesItem
    */
    public function setIsDefault($val)
    {
        $this->_propDict["isDefault"] = $val;
        return $this;
    }
    /**
    * Gets the name
    * The display name of the property displayed to the end user in the user flow.
    *
    * @return string The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }

    /**
    * Sets the name
    * The display name of the property displayed to the end user in the user flow.
    *
    * @param string $val The value of the name
    *
    * @return UserAttributeValuesItem
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    /**
    * Gets the value
    * The value that is set when this item is selected.
    *
    * @return string The value
    */
    public function getValue()
    {
        if (array_key_exists("value", $this->_propDict)) {
            return $this->_propDict["value"];
        } else {
            return null;
        }
    }

    /**
    * Sets the value
    * The value that is set when this item is selected.
    *
    * @param string $val The value of the value
    *
    * @return UserAttributeValuesItem
    */
    public function setValue($val)
    {
        $this->_propDict["value"] = $val;
        return $this;
    }
}
