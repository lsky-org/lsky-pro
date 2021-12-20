<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeleteAction File
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
* DeleteAction class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeleteAction extends Entity
{
    /**
    * Gets the name
    * The name of the item that was deleted.
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
    * The name of the item that was deleted.
    *
    * @param string $val The value of the name
    *
    * @return DeleteAction
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    /**
    * Gets the objectType
    * File or Folder, depending on the type of the deleted item.
    *
    * @return string The objectType
    */
    public function getObjectType()
    {
        if (array_key_exists("objectType", $this->_propDict)) {
            return $this->_propDict["objectType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the objectType
    * File or Folder, depending on the type of the deleted item.
    *
    * @param string $val The value of the objectType
    *
    * @return DeleteAction
    */
    public function setObjectType($val)
    {
        $this->_propDict["objectType"] = $val;
        return $this;
    }
}
