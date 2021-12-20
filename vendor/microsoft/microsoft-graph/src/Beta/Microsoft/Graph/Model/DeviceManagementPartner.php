<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementPartner File
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
* DeviceManagementPartner class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementPartner extends Entity
{
    /**
    * Gets the displayName
    * Partner display name
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
    * Partner display name
    *
    * @param string $val The displayName
    *
    * @return DeviceManagementPartner
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    

     /** 
     * Gets the groupsRequiringPartnerEnrollment
    * User groups that specifies whether enrollment is through partner.
     *
     * @return array The groupsRequiringPartnerEnrollment
     */
    public function getGroupsRequiringPartnerEnrollment()
    {
        if (array_key_exists("groupsRequiringPartnerEnrollment", $this->_propDict)) {
           return $this->_propDict["groupsRequiringPartnerEnrollment"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the groupsRequiringPartnerEnrollment
    * User groups that specifies whether enrollment is through partner.
    *
    * @param DeviceManagementPartnerAssignment $val The groupsRequiringPartnerEnrollment
    *
    * @return DeviceManagementPartner
    */
    public function setGroupsRequiringPartnerEnrollment($val)
    {
		$this->_propDict["groupsRequiringPartnerEnrollment"] = $val;
        return $this;
    }
    
    /**
    * Gets the isConfigured
    * Whether device management partner is configured or not
    *
    * @return bool The isConfigured
    */
    public function getIsConfigured()
    {
        if (array_key_exists("isConfigured", $this->_propDict)) {
            return $this->_propDict["isConfigured"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isConfigured
    * Whether device management partner is configured or not
    *
    * @param bool $val The isConfigured
    *
    * @return DeviceManagementPartner
    */
    public function setIsConfigured($val)
    {
        $this->_propDict["isConfigured"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the lastHeartbeatDateTime
    * Timestamp of last heartbeat after admin enabled option Connect to Device management Partner
    *
    * @return \DateTime The lastHeartbeatDateTime
    */
    public function getLastHeartbeatDateTime()
    {
        if (array_key_exists("lastHeartbeatDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastHeartbeatDateTime"], "\DateTime")) {
                return $this->_propDict["lastHeartbeatDateTime"];
            } else {
                $this->_propDict["lastHeartbeatDateTime"] = new \DateTime($this->_propDict["lastHeartbeatDateTime"]);
                return $this->_propDict["lastHeartbeatDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastHeartbeatDateTime
    * Timestamp of last heartbeat after admin enabled option Connect to Device management Partner
    *
    * @param \DateTime $val The lastHeartbeatDateTime
    *
    * @return DeviceManagementPartner
    */
    public function setLastHeartbeatDateTime($val)
    {
        $this->_propDict["lastHeartbeatDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the partnerAppType
    * Partner App type. Possible values are: unknown, singleTenantApp, multiTenantApp.
    *
    * @return DeviceManagementPartnerAppType The partnerAppType
    */
    public function getPartnerAppType()
    {
        if (array_key_exists("partnerAppType", $this->_propDict)) {
            if (is_a($this->_propDict["partnerAppType"], "\Beta\Microsoft\Graph\Model\DeviceManagementPartnerAppType")) {
                return $this->_propDict["partnerAppType"];
            } else {
                $this->_propDict["partnerAppType"] = new DeviceManagementPartnerAppType($this->_propDict["partnerAppType"]);
                return $this->_propDict["partnerAppType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the partnerAppType
    * Partner App type. Possible values are: unknown, singleTenantApp, multiTenantApp.
    *
    * @param DeviceManagementPartnerAppType $val The partnerAppType
    *
    * @return DeviceManagementPartner
    */
    public function setPartnerAppType($val)
    {
        $this->_propDict["partnerAppType"] = $val;
        return $this;
    }
    
    /**
    * Gets the partnerState
    * Partner state of this tenant. Possible values are: unknown, unavailable, enabled, terminated, rejected, unresponsive.
    *
    * @return DeviceManagementPartnerTenantState The partnerState
    */
    public function getPartnerState()
    {
        if (array_key_exists("partnerState", $this->_propDict)) {
            if (is_a($this->_propDict["partnerState"], "\Beta\Microsoft\Graph\Model\DeviceManagementPartnerTenantState")) {
                return $this->_propDict["partnerState"];
            } else {
                $this->_propDict["partnerState"] = new DeviceManagementPartnerTenantState($this->_propDict["partnerState"]);
                return $this->_propDict["partnerState"];
            }
        }
        return null;
    }
    
    /**
    * Sets the partnerState
    * Partner state of this tenant. Possible values are: unknown, unavailable, enabled, terminated, rejected, unresponsive.
    *
    * @param DeviceManagementPartnerTenantState $val The partnerState
    *
    * @return DeviceManagementPartner
    */
    public function setPartnerState($val)
    {
        $this->_propDict["partnerState"] = $val;
        return $this;
    }
    
    /**
    * Gets the singleTenantAppId
    * Partner Single tenant App id
    *
    * @return string The singleTenantAppId
    */
    public function getSingleTenantAppId()
    {
        if (array_key_exists("singleTenantAppId", $this->_propDict)) {
            return $this->_propDict["singleTenantAppId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the singleTenantAppId
    * Partner Single tenant App id
    *
    * @param string $val The singleTenantAppId
    *
    * @return DeviceManagementPartner
    */
    public function setSingleTenantAppId($val)
    {
        $this->_propDict["singleTenantAppId"] = $val;
        return $this;
    }
    
    /**
    * Gets the whenPartnerDevicesWillBeMarkedAsNonCompliant
    * DateTime in UTC when PartnerDevices will be marked as NonCompliant. This will become obselete soon.
    *
    * @return \DateTime The whenPartnerDevicesWillBeMarkedAsNonCompliant
    */
    public function getWhenPartnerDevicesWillBeMarkedAsNonCompliant()
    {
        if (array_key_exists("whenPartnerDevicesWillBeMarkedAsNonCompliant", $this->_propDict)) {
            if (is_a($this->_propDict["whenPartnerDevicesWillBeMarkedAsNonCompliant"], "\DateTime")) {
                return $this->_propDict["whenPartnerDevicesWillBeMarkedAsNonCompliant"];
            } else {
                $this->_propDict["whenPartnerDevicesWillBeMarkedAsNonCompliant"] = new \DateTime($this->_propDict["whenPartnerDevicesWillBeMarkedAsNonCompliant"]);
                return $this->_propDict["whenPartnerDevicesWillBeMarkedAsNonCompliant"];
            }
        }
        return null;
    }
    
    /**
    * Sets the whenPartnerDevicesWillBeMarkedAsNonCompliant
    * DateTime in UTC when PartnerDevices will be marked as NonCompliant. This will become obselete soon.
    *
    * @param \DateTime $val The whenPartnerDevicesWillBeMarkedAsNonCompliant
    *
    * @return DeviceManagementPartner
    */
    public function setWhenPartnerDevicesWillBeMarkedAsNonCompliant($val)
    {
        $this->_propDict["whenPartnerDevicesWillBeMarkedAsNonCompliant"] = $val;
        return $this;
    }
    
    /**
    * Gets the whenPartnerDevicesWillBeMarkedAsNonCompliantDateTime
    * DateTime in UTC when PartnerDevices will be marked as NonCompliant
    *
    * @return \DateTime The whenPartnerDevicesWillBeMarkedAsNonCompliantDateTime
    */
    public function getWhenPartnerDevicesWillBeMarkedAsNonCompliantDateTime()
    {
        if (array_key_exists("whenPartnerDevicesWillBeMarkedAsNonCompliantDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["whenPartnerDevicesWillBeMarkedAsNonCompliantDateTime"], "\DateTime")) {
                return $this->_propDict["whenPartnerDevicesWillBeMarkedAsNonCompliantDateTime"];
            } else {
                $this->_propDict["whenPartnerDevicesWillBeMarkedAsNonCompliantDateTime"] = new \DateTime($this->_propDict["whenPartnerDevicesWillBeMarkedAsNonCompliantDateTime"]);
                return $this->_propDict["whenPartnerDevicesWillBeMarkedAsNonCompliantDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the whenPartnerDevicesWillBeMarkedAsNonCompliantDateTime
    * DateTime in UTC when PartnerDevices will be marked as NonCompliant
    *
    * @param \DateTime $val The whenPartnerDevicesWillBeMarkedAsNonCompliantDateTime
    *
    * @return DeviceManagementPartner
    */
    public function setWhenPartnerDevicesWillBeMarkedAsNonCompliantDateTime($val)
    {
        $this->_propDict["whenPartnerDevicesWillBeMarkedAsNonCompliantDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the whenPartnerDevicesWillBeRemoved
    * DateTime in UTC when PartnerDevices will be removed. This will become obselete soon.
    *
    * @return \DateTime The whenPartnerDevicesWillBeRemoved
    */
    public function getWhenPartnerDevicesWillBeRemoved()
    {
        if (array_key_exists("whenPartnerDevicesWillBeRemoved", $this->_propDict)) {
            if (is_a($this->_propDict["whenPartnerDevicesWillBeRemoved"], "\DateTime")) {
                return $this->_propDict["whenPartnerDevicesWillBeRemoved"];
            } else {
                $this->_propDict["whenPartnerDevicesWillBeRemoved"] = new \DateTime($this->_propDict["whenPartnerDevicesWillBeRemoved"]);
                return $this->_propDict["whenPartnerDevicesWillBeRemoved"];
            }
        }
        return null;
    }
    
    /**
    * Sets the whenPartnerDevicesWillBeRemoved
    * DateTime in UTC when PartnerDevices will be removed. This will become obselete soon.
    *
    * @param \DateTime $val The whenPartnerDevicesWillBeRemoved
    *
    * @return DeviceManagementPartner
    */
    public function setWhenPartnerDevicesWillBeRemoved($val)
    {
        $this->_propDict["whenPartnerDevicesWillBeRemoved"] = $val;
        return $this;
    }
    
    /**
    * Gets the whenPartnerDevicesWillBeRemovedDateTime
    * DateTime in UTC when PartnerDevices will be removed
    *
    * @return \DateTime The whenPartnerDevicesWillBeRemovedDateTime
    */
    public function getWhenPartnerDevicesWillBeRemovedDateTime()
    {
        if (array_key_exists("whenPartnerDevicesWillBeRemovedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["whenPartnerDevicesWillBeRemovedDateTime"], "\DateTime")) {
                return $this->_propDict["whenPartnerDevicesWillBeRemovedDateTime"];
            } else {
                $this->_propDict["whenPartnerDevicesWillBeRemovedDateTime"] = new \DateTime($this->_propDict["whenPartnerDevicesWillBeRemovedDateTime"]);
                return $this->_propDict["whenPartnerDevicesWillBeRemovedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the whenPartnerDevicesWillBeRemovedDateTime
    * DateTime in UTC when PartnerDevices will be removed
    *
    * @param \DateTime $val The whenPartnerDevicesWillBeRemovedDateTime
    *
    * @return DeviceManagementPartner
    */
    public function setWhenPartnerDevicesWillBeRemovedDateTime($val)
    {
        $this->_propDict["whenPartnerDevicesWillBeRemovedDateTime"] = $val;
        return $this;
    }
    
}
