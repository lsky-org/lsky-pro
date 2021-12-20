<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RenameAction File
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
* RenameAction class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RenameAction extends Entity
{
    /**
    * Gets the newName
    * The new name of the item.
    *
    * @return string The newName
    */
    public function getNewName()
    {
        if (array_key_exists("newName", $this->_propDict)) {
            return $this->_propDict["newName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the newName
    * The new name of the item.
    *
    * @param string $val The value of the newName
    *
    * @return RenameAction
    */
    public function setNewName($val)
    {
        $this->_propDict["newName"] = $val;
        return $this;
    }
    /**
    * Gets the oldName
    * The previous name of the item.
    *
    * @return string The oldName
    */
    public function getOldName()
    {
        if (array_key_exists("oldName", $this->_propDict)) {
            return $this->_propDict["oldName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the oldName
    * The previous name of the item.
    *
    * @param string $val The value of the oldName
    *
    * @return RenameAction
    */
    public function setOldName($val)
    {
        $this->_propDict["oldName"] = $val;
        return $this;
    }
}
