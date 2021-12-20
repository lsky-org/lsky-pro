<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* GroupLifecyclePolicy File
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
* GroupLifecyclePolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class GroupLifecyclePolicy extends Entity
{
    /**
    * Gets the alternateNotificationEmails
    * List of email address to send notifications for groups without owners. Multiple email address can be defined by separating email address with a semicolon.
    *
    * @return string The alternateNotificationEmails
    */
    public function getAlternateNotificationEmails()
    {
        if (array_key_exists("alternateNotificationEmails", $this->_propDict)) {
            return $this->_propDict["alternateNotificationEmails"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the alternateNotificationEmails
    * List of email address to send notifications for groups without owners. Multiple email address can be defined by separating email address with a semicolon.
    *
    * @param string $val The alternateNotificationEmails
    *
    * @return GroupLifecyclePolicy
    */
    public function setAlternateNotificationEmails($val)
    {
        $this->_propDict["alternateNotificationEmails"] = $val;
        return $this;
    }
    
    /**
    * Gets the groupLifetimeInDays
    * Number of days before a group expires and needs to be renewed. Once renewed, the group expiration is extended by the number of days defined.
    *
    * @return int The groupLifetimeInDays
    */
    public function getGroupLifetimeInDays()
    {
        if (array_key_exists("groupLifetimeInDays", $this->_propDict)) {
            return $this->_propDict["groupLifetimeInDays"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the groupLifetimeInDays
    * Number of days before a group expires and needs to be renewed. Once renewed, the group expiration is extended by the number of days defined.
    *
    * @param int $val The groupLifetimeInDays
    *
    * @return GroupLifecyclePolicy
    */
    public function setGroupLifetimeInDays($val)
    {
        $this->_propDict["groupLifetimeInDays"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the managedGroupTypes
    * The group type for which the expiration policy applies. Possible values are All, Selected or None.
    *
    * @return string The managedGroupTypes
    */
    public function getManagedGroupTypes()
    {
        if (array_key_exists("managedGroupTypes", $this->_propDict)) {
            return $this->_propDict["managedGroupTypes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the managedGroupTypes
    * The group type for which the expiration policy applies. Possible values are All, Selected or None.
    *
    * @param string $val The managedGroupTypes
    *
    * @return GroupLifecyclePolicy
    */
    public function setManagedGroupTypes($val)
    {
        $this->_propDict["managedGroupTypes"] = $val;
        return $this;
    }
    
}
