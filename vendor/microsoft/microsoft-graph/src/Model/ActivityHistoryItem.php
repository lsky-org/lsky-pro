<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ActivityHistoryItem File
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
* ActivityHistoryItem class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ActivityHistoryItem extends Entity
{
    /**
    * Gets the activeDurationSeconds
    * Optional. The duration of active user engagement. if not supplied, this is calculated from the startedDateTime and lastActiveDateTime.
    *
    * @return int The activeDurationSeconds
    */
    public function getActiveDurationSeconds()
    {
        if (array_key_exists("activeDurationSeconds", $this->_propDict)) {
            return $this->_propDict["activeDurationSeconds"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the activeDurationSeconds
    * Optional. The duration of active user engagement. if not supplied, this is calculated from the startedDateTime and lastActiveDateTime.
    *
    * @param int $val The activeDurationSeconds
    *
    * @return ActivityHistoryItem
    */
    public function setActiveDurationSeconds($val)
    {
        $this->_propDict["activeDurationSeconds"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the createdDateTime
    * Set by the server. DateTime in UTC when the object was created on the server.
    *
    * @return \DateTime The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime")) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the createdDateTime
    * Set by the server. DateTime in UTC when the object was created on the server.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return ActivityHistoryItem
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the expirationDateTime
    * Optional. UTC DateTime when the historyItem will undergo hard-delete. Can be set by the client.
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
    * Optional. UTC DateTime when the historyItem will undergo hard-delete. Can be set by the client.
    *
    * @param \DateTime $val The expirationDateTime
    *
    * @return ActivityHistoryItem
    */
    public function setExpirationDateTime($val)
    {
        $this->_propDict["expirationDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastActiveDateTime
    * Optional. UTC DateTime when the historyItem (activity session) was last understood as active or finished - if null, historyItem status should be Ongoing.
    *
    * @return \DateTime The lastActiveDateTime
    */
    public function getLastActiveDateTime()
    {
        if (array_key_exists("lastActiveDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastActiveDateTime"], "\DateTime")) {
                return $this->_propDict["lastActiveDateTime"];
            } else {
                $this->_propDict["lastActiveDateTime"] = new \DateTime($this->_propDict["lastActiveDateTime"]);
                return $this->_propDict["lastActiveDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastActiveDateTime
    * Optional. UTC DateTime when the historyItem (activity session) was last understood as active or finished - if null, historyItem status should be Ongoing.
    *
    * @param \DateTime $val The lastActiveDateTime
    *
    * @return ActivityHistoryItem
    */
    public function setLastActiveDateTime($val)
    {
        $this->_propDict["lastActiveDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastModifiedDateTime
    * Set by the server. DateTime in UTC when the object was modified on the server.
    *
    * @return \DateTime The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedDateTime"], "\DateTime")) {
                return $this->_propDict["lastModifiedDateTime"];
            } else {
                $this->_propDict["lastModifiedDateTime"] = new \DateTime($this->_propDict["lastModifiedDateTime"]);
                return $this->_propDict["lastModifiedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastModifiedDateTime
    * Set by the server. DateTime in UTC when the object was modified on the server.
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return ActivityHistoryItem
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the startedDateTime
    * Required. UTC DateTime when the historyItem (activity session) was started. Required for timeline history.
    *
    * @return \DateTime The startedDateTime
    */
    public function getStartedDateTime()
    {
        if (array_key_exists("startedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["startedDateTime"], "\DateTime")) {
                return $this->_propDict["startedDateTime"];
            } else {
                $this->_propDict["startedDateTime"] = new \DateTime($this->_propDict["startedDateTime"]);
                return $this->_propDict["startedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the startedDateTime
    * Required. UTC DateTime when the historyItem (activity session) was started. Required for timeline history.
    *
    * @param \DateTime $val The startedDateTime
    *
    * @return ActivityHistoryItem
    */
    public function setStartedDateTime($val)
    {
        $this->_propDict["startedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the status
    * Set by the server. A status code used to identify valid objects. Values: active, updated, deleted, ignored.
    *
    * @return Status The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Microsoft\Graph\Model\Status")) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new Status($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }
    
    /**
    * Sets the status
    * Set by the server. A status code used to identify valid objects. Values: active, updated, deleted, ignored.
    *
    * @param Status $val The status
    *
    * @return ActivityHistoryItem
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }
    
    /**
    * Gets the userTimezone
    * Optional. The timezone in which the user's device used to generate the activity was located at activity creation time. Values supplied as Olson IDs in order to support cross-platform representation.
    *
    * @return string The userTimezone
    */
    public function getUserTimezone()
    {
        if (array_key_exists("userTimezone", $this->_propDict)) {
            return $this->_propDict["userTimezone"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userTimezone
    * Optional. The timezone in which the user's device used to generate the activity was located at activity creation time. Values supplied as Olson IDs in order to support cross-platform representation.
    *
    * @param string $val The userTimezone
    *
    * @return ActivityHistoryItem
    */
    public function setUserTimezone($val)
    {
        $this->_propDict["userTimezone"] = $val;
        return $this;
    }
    
    /**
    * Gets the activity
    * Optional. NavigationProperty/Containment; navigation property to the associated activity.
    *
    * @return UserActivity The activity
    */
    public function getActivity()
    {
        if (array_key_exists("activity", $this->_propDict)) {
            if (is_a($this->_propDict["activity"], "\Microsoft\Graph\Model\UserActivity")) {
                return $this->_propDict["activity"];
            } else {
                $this->_propDict["activity"] = new UserActivity($this->_propDict["activity"]);
                return $this->_propDict["activity"];
            }
        }
        return null;
    }
    
    /**
    * Sets the activity
    * Optional. NavigationProperty/Containment; navigation property to the associated activity.
    *
    * @param UserActivity $val The activity
    *
    * @return ActivityHistoryItem
    */
    public function setActivity($val)
    {
        $this->_propDict["activity"] = $val;
        return $this;
    }
    
}
