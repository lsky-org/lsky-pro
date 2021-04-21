<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PersonOrGroupColumn File
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
* PersonOrGroupColumn class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PersonOrGroupColumn extends Entity
{
    /**
    * Gets the allowMultipleSelection
    * Indicates whether multiple values can be selected from the source.
    *
    * @return bool The allowMultipleSelection
    */
    public function getAllowMultipleSelection()
    {
        if (array_key_exists("allowMultipleSelection", $this->_propDict)) {
            return $this->_propDict["allowMultipleSelection"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowMultipleSelection
    * Indicates whether multiple values can be selected from the source.
    *
    * @param bool $val The value of the allowMultipleSelection
    *
    * @return PersonOrGroupColumn
    */
    public function setAllowMultipleSelection($val)
    {
        $this->_propDict["allowMultipleSelection"] = $val;
        return $this;
    }
    /**
    * Gets the chooseFromType
    * Whether to allow selection of people only, or people and groups. Must be one of peopleAndGroups or peopleOnly.
    *
    * @return string The chooseFromType
    */
    public function getChooseFromType()
    {
        if (array_key_exists("chooseFromType", $this->_propDict)) {
            return $this->_propDict["chooseFromType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the chooseFromType
    * Whether to allow selection of people only, or people and groups. Must be one of peopleAndGroups or peopleOnly.
    *
    * @param string $val The value of the chooseFromType
    *
    * @return PersonOrGroupColumn
    */
    public function setChooseFromType($val)
    {
        $this->_propDict["chooseFromType"] = $val;
        return $this;
    }
    /**
    * Gets the displayAs
    * How to display the information about the person or group chosen. See below.
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
    * How to display the information about the person or group chosen. See below.
    *
    * @param string $val The value of the displayAs
    *
    * @return PersonOrGroupColumn
    */
    public function setDisplayAs($val)
    {
        $this->_propDict["displayAs"] = $val;
        return $this;
    }
}
