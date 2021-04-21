<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidForWorkNineWorkEasConfiguration File
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
* AndroidForWorkNineWorkEasConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AndroidForWorkNineWorkEasConfiguration extends AndroidForWorkEasEmailProfileBase
{
    /**
    * Gets the syncCalendar
    * Toggles syncing the calendar. If set to false the calendar is turned off on the device.
    *
    * @return bool The syncCalendar
    */
    public function getSyncCalendar()
    {
        if (array_key_exists("syncCalendar", $this->_propDict)) {
            return $this->_propDict["syncCalendar"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the syncCalendar
    * Toggles syncing the calendar. If set to false the calendar is turned off on the device.
    *
    * @param bool $val The syncCalendar
    *
    * @return AndroidForWorkNineWorkEasConfiguration
    */
    public function setSyncCalendar($val)
    {
        $this->_propDict["syncCalendar"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the syncContacts
    * Toggles syncing contacts. If set to false contacts are turned off on the device.
    *
    * @return bool The syncContacts
    */
    public function getSyncContacts()
    {
        if (array_key_exists("syncContacts", $this->_propDict)) {
            return $this->_propDict["syncContacts"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the syncContacts
    * Toggles syncing contacts. If set to false contacts are turned off on the device.
    *
    * @param bool $val The syncContacts
    *
    * @return AndroidForWorkNineWorkEasConfiguration
    */
    public function setSyncContacts($val)
    {
        $this->_propDict["syncContacts"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the syncTasks
    * Toggles syncing tasks. If set to false tasks are turned off on the device.
    *
    * @return bool The syncTasks
    */
    public function getSyncTasks()
    {
        if (array_key_exists("syncTasks", $this->_propDict)) {
            return $this->_propDict["syncTasks"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the syncTasks
    * Toggles syncing tasks. If set to false tasks are turned off on the device.
    *
    * @param bool $val The syncTasks
    *
    * @return AndroidForWorkNineWorkEasConfiguration
    */
    public function setSyncTasks($val)
    {
        $this->_propDict["syncTasks"] = boolval($val);
        return $this;
    }
    
}
