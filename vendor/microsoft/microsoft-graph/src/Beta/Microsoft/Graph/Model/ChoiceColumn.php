<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ChoiceColumn File
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
* ChoiceColumn class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ChoiceColumn extends Entity
{
    /**
    * Gets the allowTextEntry
    * If true, allows custom values that aren't in the configured choices.
    *
    * @return bool The allowTextEntry
    */
    public function getAllowTextEntry()
    {
        if (array_key_exists("allowTextEntry", $this->_propDict)) {
            return $this->_propDict["allowTextEntry"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowTextEntry
    * If true, allows custom values that aren't in the configured choices.
    *
    * @param bool $val The value of the allowTextEntry
    *
    * @return ChoiceColumn
    */
    public function setAllowTextEntry($val)
    {
        $this->_propDict["allowTextEntry"] = $val;
        return $this;
    }
    /**
    * Gets the choices
    * The list of values available for this column.
    *
    * @return string The choices
    */
    public function getChoices()
    {
        if (array_key_exists("choices", $this->_propDict)) {
            return $this->_propDict["choices"];
        } else {
            return null;
        }
    }

    /**
    * Sets the choices
    * The list of values available for this column.
    *
    * @param string $val The value of the choices
    *
    * @return ChoiceColumn
    */
    public function setChoices($val)
    {
        $this->_propDict["choices"] = $val;
        return $this;
    }
    /**
    * Gets the displayAs
    * How the choices are to be presented in the UX. Must be one of checkBoxes, dropDownMenu, or radioButtons
    *
    * @return string The displayAs
    */
    public function getDisplayAs()
    {
        if (array_key_exists("displayAs", $this->_propDict)) {
            return $this->_propDict["displayAs"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayAs
    * How the choices are to be presented in the UX. Must be one of checkBoxes, dropDownMenu, or radioButtons
    *
    * @param string $val The value of the displayAs
    *
    * @return ChoiceColumn
    */
    public function setDisplayAs($val)
    {
        $this->_propDict["displayAs"] = $val;
        return $this;
    }
}
