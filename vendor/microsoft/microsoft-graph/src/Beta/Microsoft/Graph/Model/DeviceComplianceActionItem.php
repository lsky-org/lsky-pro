<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceComplianceActionItem File
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
* DeviceComplianceActionItem class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceComplianceActionItem extends Entity
{
    /**
    * Gets the actionType
    * What action to take. Possible values are: noAction, notification, block, retire, wipe, removeResourceAccessProfiles, pushNotification, remoteLock.
    *
    * @return DeviceComplianceActionType The actionType
    */
    public function getActionType()
    {
        if (array_key_exists("actionType", $this->_propDict)) {
            if (is_a($this->_propDict["actionType"], "\Beta\Microsoft\Graph\Model\DeviceComplianceActionType")) {
                return $this->_propDict["actionType"];
            } else {
                $this->_propDict["actionType"] = new DeviceComplianceActionType($this->_propDict["actionType"]);
                return $this->_propDict["actionType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the actionType
    * What action to take. Possible values are: noAction, notification, block, retire, wipe, removeResourceAccessProfiles, pushNotification, remoteLock.
    *
    * @param DeviceComplianceActionType $val The actionType
    *
    * @return DeviceComplianceActionItem
    */
    public function setActionType($val)
    {
        $this->_propDict["actionType"] = $val;
        return $this;
    }
    
    /**
    * Gets the gracePeriodHours
    * Number of hours to wait till the action will be enforced. Valid values 0 to 8760
    *
    * @return int The gracePeriodHours
    */
    public function getGracePeriodHours()
    {
        if (array_key_exists("gracePeriodHours", $this->_propDict)) {
            return $this->_propDict["gracePeriodHours"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the gracePeriodHours
    * Number of hours to wait till the action will be enforced. Valid values 0 to 8760
    *
    * @param int $val The gracePeriodHours
    *
    * @return DeviceComplianceActionItem
    */
    public function setGracePeriodHours($val)
    {
        $this->_propDict["gracePeriodHours"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the notificationMessageCCList
    * A list of group IDs to speicify who to CC this notification message to.
    *
    * @return string The notificationMessageCCList
    */
    public function getNotificationMessageCCList()
    {
        if (array_key_exists("notificationMessageCCList", $this->_propDict)) {
            return $this->_propDict["notificationMessageCCList"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the notificationMessageCCList
    * A list of group IDs to speicify who to CC this notification message to.
    *
    * @param string $val The notificationMessageCCList
    *
    * @return DeviceComplianceActionItem
    */
    public function setNotificationMessageCCList($val)
    {
        $this->_propDict["notificationMessageCCList"] = $val;
        return $this;
    }
    
    /**
    * Gets the notificationTemplateId
    * What notification Message template to use
    *
    * @return string The notificationTemplateId
    */
    public function getNotificationTemplateId()
    {
        if (array_key_exists("notificationTemplateId", $this->_propDict)) {
            return $this->_propDict["notificationTemplateId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the notificationTemplateId
    * What notification Message template to use
    *
    * @param string $val The notificationTemplateId
    *
    * @return DeviceComplianceActionItem
    */
    public function setNotificationTemplateId($val)
    {
        $this->_propDict["notificationTemplateId"] = $val;
        return $this;
    }
    
}
