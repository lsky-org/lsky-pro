<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ModifiedProperty File
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
* ModifiedProperty class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ModifiedProperty extends Entity
{
    /**
    * Gets the displayName
    * Name of property that was modified.
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
    * Name of property that was modified.
    *
    * @param string $val The value of the displayName
    *
    * @return ModifiedProperty
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    /**
    * Gets the newValue
    * New property value.
    *
    * @return string The newValue
    */
    public function getNewValue()
    {
        if (array_key_exists("newValue", $this->_propDict)) {
            return $this->_propDict["newValue"];
        } else {
            return null;
        }
    }

    /**
    * Sets the newValue
    * New property value.
    *
    * @param string $val The value of the newValue
    *
    * @return ModifiedProperty
    */
    public function setNewValue($val)
    {
        $this->_propDict["newValue"] = $val;
        return $this;
    }
    /**
    * Gets the oldValue
    * Old property value.
    *
    * @return string The oldValue
    */
    public function getOldValue()
    {
        if (array_key_exists("oldValue", $this->_propDict)) {
            return $this->_propDict["oldValue"];
        } else {
            return null;
        }
    }

    /**
    * Sets the oldValue
    * Old property value.
    *
    * @param string $val The value of the oldValue
    *
    * @return ModifiedProperty
    */
    public function setOldValue($val)
    {
        $this->_propDict["oldValue"] = $val;
        return $this;
    }
}
