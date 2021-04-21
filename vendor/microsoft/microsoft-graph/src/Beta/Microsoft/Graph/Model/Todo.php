<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Todo File
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
* Todo class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Todo extends Entity
{

     /** 
     * Gets the lists
    * The task lists in the users mailbox.
     *
     * @return array The lists
     */
    public function getLists()
    {
        if (array_key_exists("lists", $this->_propDict)) {
           return $this->_propDict["lists"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the lists
    * The task lists in the users mailbox.
    *
    * @param TodoTaskList $val The lists
    *
    * @return Todo
    */
    public function setLists($val)
    {
		$this->_propDict["lists"] = $val;
        return $this;
    }
    
}
