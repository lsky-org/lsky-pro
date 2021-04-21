<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MeetingCapability File
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
* MeetingCapability class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MeetingCapability extends Entity
{
    /**
    * Gets the allowAnonymousUsersToDialOut
    * Indicates whether anonymous users dialout is allowed in a meeting.
    *
    * @return bool The allowAnonymousUsersToDialOut
    */
    public function getAllowAnonymousUsersToDialOut()
    {
        if (array_key_exists("allowAnonymousUsersToDialOut", $this->_propDict)) {
            return $this->_propDict["allowAnonymousUsersToDialOut"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowAnonymousUsersToDialOut
    * Indicates whether anonymous users dialout is allowed in a meeting.
    *
    * @param bool $val The value of the allowAnonymousUsersToDialOut
    *
    * @return MeetingCapability
    */
    public function setAllowAnonymousUsersToDialOut($val)
    {
        $this->_propDict["allowAnonymousUsersToDialOut"] = $val;
        return $this;
    }
    /**
    * Gets the allowAnonymousUsersToStartMeeting
    * Indicates whether anonymous users are allowed to start a meeting.
    *
    * @return bool The allowAnonymousUsersToStartMeeting
    */
    public function getAllowAnonymousUsersToStartMeeting()
    {
        if (array_key_exists("allowAnonymousUsersToStartMeeting", $this->_propDict)) {
            return $this->_propDict["allowAnonymousUsersToStartMeeting"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowAnonymousUsersToStartMeeting
    * Indicates whether anonymous users are allowed to start a meeting.
    *
    * @param bool $val The value of the allowAnonymousUsersToStartMeeting
    *
    * @return MeetingCapability
    */
    public function setAllowAnonymousUsersToStartMeeting($val)
    {
        $this->_propDict["allowAnonymousUsersToStartMeeting"] = $val;
        return $this;
    }

    /**
    * Gets the autoAdmittedUsers
    * Possible values are: everyoneInCompany, everyone.
    *
    * @return AutoAdmittedUsersType The autoAdmittedUsers
    */
    public function getAutoAdmittedUsers()
    {
        if (array_key_exists("autoAdmittedUsers", $this->_propDict)) {
            if (is_a($this->_propDict["autoAdmittedUsers"], "\Beta\Microsoft\Graph\Model\AutoAdmittedUsersType")) {
                return $this->_propDict["autoAdmittedUsers"];
            } else {
                $this->_propDict["autoAdmittedUsers"] = new AutoAdmittedUsersType($this->_propDict["autoAdmittedUsers"]);
                return $this->_propDict["autoAdmittedUsers"];
            }
        }
        return null;
    }

    /**
    * Sets the autoAdmittedUsers
    * Possible values are: everyoneInCompany, everyone.
    *
    * @param AutoAdmittedUsersType $val The value to assign to the autoAdmittedUsers
    *
    * @return MeetingCapability The MeetingCapability
    */
    public function setAutoAdmittedUsers($val)
    {
        $this->_propDict["autoAdmittedUsers"] = $val;
         return $this;
    }
}
