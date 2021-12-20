<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Notification File
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
* Notification class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Notification extends Entity
{
    /**
    * Gets the displayTimeToLive
    * Sets how long (in seconds) this notification content will stay in each platform’s notification viewer. For example, when the notification is delivered to a Windows device, the value of this property is passed on to ToastNotification.ExpirationTime, which determines how long the toast notification will stay in the user’s Windows Action Center.
    *
    * @return int The displayTimeToLive
    */
    public function getDisplayTimeToLive()
    {
        if (array_key_exists("displayTimeToLive", $this->_propDict)) {
            return $this->_propDict["displayTimeToLive"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the displayTimeToLive
    * Sets how long (in seconds) this notification content will stay in each platform’s notification viewer. For example, when the notification is delivered to a Windows device, the value of this property is passed on to ToastNotification.ExpirationTime, which determines how long the toast notification will stay in the user’s Windows Action Center.
    *
    * @param int $val The displayTimeToLive
    *
    * @return Notification
    */
    public function setDisplayTimeToLive($val)
    {
        $this->_propDict["displayTimeToLive"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the expirationDateTime
    * Sets a UTC expiration date and time on a user notification using ISO 8601 format (for example, midnight UTC on Jan 1, 2019 would look like this: '2019-01-01T00:00:00Z'). When time is up, the notification is removed from the Microsoft Graph notification feed store completely and is no longer part of notification history. Max value is 30 days.
    *
    * @return \DateTime The expirationDateTime
    */
    public function getExpirationDateTime()
    {
        if (array_key_exists("expirationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["expirationDateTime"], "\DateTime")) {
                return $this->_propDict["expirationDateTime"];
            } else {
                $this->_propDict["expirationDateTime"] = new \DateTime($this->_propDict["expirationDateTime"]);
                return $this->_propDict["expirationDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the expirationDateTime
    * Sets a UTC expiration date and time on a user notification using ISO 8601 format (for example, midnight UTC on Jan 1, 2019 would look like this: '2019-01-01T00:00:00Z'). When time is up, the notification is removed from the Microsoft Graph notification feed store completely and is no longer part of notification history. Max value is 30 days.
    *
    * @param \DateTime $val The expirationDateTime
    *
    * @return Notification
    */
    public function setExpirationDateTime($val)
    {
        $this->_propDict["expirationDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the groupName
    * The name of the group that this notification belongs to. It is set by the developer for the purpose of grouping notifications together.
    *
    * @return string The groupName
    */
    public function getGroupName()
    {
        if (array_key_exists("groupName", $this->_propDict)) {
            return $this->_propDict["groupName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the groupName
    * The name of the group that this notification belongs to. It is set by the developer for the purpose of grouping notifications together.
    *
    * @param string $val The groupName
    *
    * @return Notification
    */
    public function setGroupName($val)
    {
        $this->_propDict["groupName"] = $val;
        return $this;
    }
    
    /**
    * Gets the payload
    * This is the data content of a raw or visual user notification that will be delivered to and consumed by the app client receiving this notification.
    *
    * @return PayloadTypes The payload
    */
    public function getPayload()
    {
        if (array_key_exists("payload", $this->_propDict)) {
            if (is_a($this->_propDict["payload"], "\Beta\Microsoft\Graph\Model\PayloadTypes")) {
                return $this->_propDict["payload"];
            } else {
                $this->_propDict["payload"] = new PayloadTypes($this->_propDict["payload"]);
                return $this->_propDict["payload"];
            }
        }
        return null;
    }
    
    /**
    * Sets the payload
    * This is the data content of a raw or visual user notification that will be delivered to and consumed by the app client receiving this notification.
    *
    * @param PayloadTypes $val The payload
    *
    * @return Notification
    */
    public function setPayload($val)
    {
        $this->_propDict["payload"] = $val;
        return $this;
    }
    
    /**
    * Gets the priority
    * Indicates the priority of a raw user notification. Visual notifications are sent with high priority by default. Valid values are None, High and Low.
    *
    * @return Priority The priority
    */
    public function getPriority()
    {
        if (array_key_exists("priority", $this->_propDict)) {
            if (is_a($this->_propDict["priority"], "\Beta\Microsoft\Graph\Model\Priority")) {
                return $this->_propDict["priority"];
            } else {
                $this->_propDict["priority"] = new Priority($this->_propDict["priority"]);
                return $this->_propDict["priority"];
            }
        }
        return null;
    }
    
    /**
    * Sets the priority
    * Indicates the priority of a raw user notification. Visual notifications are sent with high priority by default. Valid values are None, High and Low.
    *
    * @param Priority $val The priority
    *
    * @return Notification
    */
    public function setPriority($val)
    {
        $this->_propDict["priority"] = $val;
        return $this;
    }
    
    /**
    * Gets the targetHostName
    * Represents the host name of the app to which the calling service wants to post the notification, for the given user. If targeting web endpoints (see targetPolicy.platformTypes), ensure that targetHostName is the same as the name used when creating a subscription on the client side within the application JSON property.
    *
    * @return string The targetHostName
    */
    public function getTargetHostName()
    {
        if (array_key_exists("targetHostName", $this->_propDict)) {
            return $this->_propDict["targetHostName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the targetHostName
    * Represents the host name of the app to which the calling service wants to post the notification, for the given user. If targeting web endpoints (see targetPolicy.platformTypes), ensure that targetHostName is the same as the name used when creating a subscription on the client side within the application JSON property.
    *
    * @param string $val The targetHostName
    *
    * @return Notification
    */
    public function setTargetHostName($val)
    {
        $this->_propDict["targetHostName"] = $val;
        return $this;
    }
    
    /**
    * Gets the targetPolicy
    * Target policy object handles notification delivery policy for endpoint types that should be targeted (Windows, iOS, Android and WebPush) for the given user.
    *
    * @return TargetPolicyEndpoints The targetPolicy
    */
    public function getTargetPolicy()
    {
        if (array_key_exists("targetPolicy", $this->_propDict)) {
            if (is_a($this->_propDict["targetPolicy"], "\Beta\Microsoft\Graph\Model\TargetPolicyEndpoints")) {
                return $this->_propDict["targetPolicy"];
            } else {
                $this->_propDict["targetPolicy"] = new TargetPolicyEndpoints($this->_propDict["targetPolicy"]);
                return $this->_propDict["targetPolicy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the targetPolicy
    * Target policy object handles notification delivery policy for endpoint types that should be targeted (Windows, iOS, Android and WebPush) for the given user.
    *
    * @param TargetPolicyEndpoints $val The targetPolicy
    *
    * @return Notification
    */
    public function setTargetPolicy($val)
    {
        $this->_propDict["targetPolicy"] = $val;
        return $this;
    }
    
}
