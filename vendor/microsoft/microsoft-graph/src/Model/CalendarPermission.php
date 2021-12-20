<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CalendarPermission File
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
* CalendarPermission class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CalendarPermission extends Entity
{

     /** 
     * Gets the allowedRoles
    * List of allowed sharing or delegating permission levels for the calendar. Possible values are: none, freeBusyRead, limitedRead, read, write, delegateWithoutPrivateEventAccess, delegateWithPrivateEventAccess, custom.
     *
     * @return array The allowedRoles
     */
    public function getAllowedRoles()
    {
        if (array_key_exists("allowedRoles", $this->_propDict)) {
           return $this->_propDict["allowedRoles"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the allowedRoles
    * List of allowed sharing or delegating permission levels for the calendar. Possible values are: none, freeBusyRead, limitedRead, read, write, delegateWithoutPrivateEventAccess, delegateWithPrivateEventAccess, custom.
    *
    * @param CalendarRoleType $val The allowedRoles
    *
    * @return CalendarPermission
    */
    public function setAllowedRoles($val)
    {
		$this->_propDict["allowedRoles"] = $val;
        return $this;
    }
    
    /**
    * Gets the emailAddress
    * Represents a sharee or delegate who has access to the calendar. For the 'My Organization' sharee, the address property is null. Read-only.
    *
    * @return EmailAddress The emailAddress
    */
    public function getEmailAddress()
    {
        if (array_key_exists("emailAddress", $this->_propDict)) {
            if (is_a($this->_propDict["emailAddress"], "\Microsoft\Graph\Model\EmailAddress")) {
                return $this->_propDict["emailAddress"];
            } else {
                $this->_propDict["emailAddress"] = new EmailAddress($this->_propDict["emailAddress"]);
                return $this->_propDict["emailAddress"];
            }
        }
        return null;
    }
    
    /**
    * Sets the emailAddress
    * Represents a sharee or delegate who has access to the calendar. For the 'My Organization' sharee, the address property is null. Read-only.
    *
    * @param EmailAddress $val The emailAddress
    *
    * @return CalendarPermission
    */
    public function setEmailAddress($val)
    {
        $this->_propDict["emailAddress"] = $val;
        return $this;
    }
    
    /**
    * Gets the isInsideOrganization
    * True if the user in context (sharee or delegate) is inside the same organization as the calendar owner.
    *
    * @return bool The isInsideOrganization
    */
    public function getIsInsideOrganization()
    {
        if (array_key_exists("isInsideOrganization", $this->_propDict)) {
            return $this->_propDict["isInsideOrganization"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isInsideOrganization
    * True if the user in context (sharee or delegate) is inside the same organization as the calendar owner.
    *
    * @param bool $val The isInsideOrganization
    *
    * @return CalendarPermission
    */
    public function setIsInsideOrganization($val)
    {
        $this->_propDict["isInsideOrganization"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the isRemovable
    * True if the user can be removed from the list of sharees or delegates for the specified calendar, false otherwise. The 'My organization' user determines the permissions other people within your organization have to the given calendar. You cannot remove 'My organization' as a sharee to a calendar.
    *
    * @return bool The isRemovable
    */
    public function getIsRemovable()
    {
        if (array_key_exists("isRemovable", $this->_propDict)) {
            return $this->_propDict["isRemovable"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isRemovable
    * True if the user can be removed from the list of sharees or delegates for the specified calendar, false otherwise. The 'My organization' user determines the permissions other people within your organization have to the given calendar. You cannot remove 'My organization' as a sharee to a calendar.
    *
    * @param bool $val The isRemovable
    *
    * @return CalendarPermission
    */
    public function setIsRemovable($val)
    {
        $this->_propDict["isRemovable"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the role
    * Current permission level of the calendar sharee or delegate.
    *
    * @return CalendarRoleType The role
    */
    public function getRole()
    {
        if (array_key_exists("role", $this->_propDict)) {
            if (is_a($this->_propDict["role"], "\Microsoft\Graph\Model\CalendarRoleType")) {
                return $this->_propDict["role"];
            } else {
                $this->_propDict["role"] = new CalendarRoleType($this->_propDict["role"]);
                return $this->_propDict["role"];
            }
        }
        return null;
    }
    
    /**
    * Sets the role
    * Current permission level of the calendar sharee or delegate.
    *
    * @param CalendarRoleType $val The role
    *
    * @return CalendarPermission
    */
    public function setRole($val)
    {
        $this->_propDict["role"] = $val;
        return $this;
    }
    
}
