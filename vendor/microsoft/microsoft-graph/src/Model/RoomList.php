<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RoomList File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

/**
* RoomList class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RoomList extends Place
{
    /**
    * Gets the emailAddress
    * The email address of the room list.
    *
    * @return string The emailAddress
    */
    public function getEmailAddress()
    {
        if (array_key_exists("emailAddress", $this->_propDict)) {
            return $this->_propDict["emailAddress"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the emailAddress
    * The email address of the room list.
    *
    * @param string $val The emailAddress
    *
    * @return RoomList
    */
    public function setEmailAddress($val)
    {
        $this->_propDict["emailAddress"] = $val;
        return $this;
    }
    

     /** 
     * Gets the rooms
    * Read-only. Nullable.
     *
     * @return array The rooms
     */
    public function getRooms()
    {
        if (array_key_exists("rooms", $this->_propDict)) {
           return $this->_propDict["rooms"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the rooms
    * Read-only. Nullable.
    *
    * @param Room $val The rooms
    *
    * @return RoomList
    */
    public function setRooms($val)
    {
		$this->_propDict["rooms"] = $val;
        return $this;
    }
    
}
