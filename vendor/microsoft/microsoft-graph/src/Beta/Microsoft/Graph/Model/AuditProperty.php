<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AuditProperty File
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
* AuditProperty class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AuditProperty extends Entity
{
    /**
    * Gets the displayName
    * Display name.
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
    * Display name.
    *
    * @param string $val The value of the displayName
    *
    * @return AuditProperty
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    /**
    * Gets the newValue
    * New value.
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
    * New value.
    *
    * @param string $val The value of the newValue
    *
    * @return AuditProperty
    */
    public function setNewValue($val)
    {
        $this->_propDict["newValue"] = $val;
        return $this;
    }
    /**
    * Gets the oldValue
    * Old value.
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
    * Old value.
    *
    * @param string $val The value of the oldValue
    *
    * @return AuditProperty
    */
    public function setOldValue($val)
    {
        $this->_propDict["oldValue"] = $val;
        return $this;
    }
}
