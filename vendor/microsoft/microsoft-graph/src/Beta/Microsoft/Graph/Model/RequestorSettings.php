<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RequestorSettings File
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
* RequestorSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RequestorSettings extends Entity
{
    /**
    * Gets the acceptRequests
    * Indicates whether new requests are accepted on this policy.
    *
    * @return bool The acceptRequests
    */
    public function getAcceptRequests()
    {
        if (array_key_exists("acceptRequests", $this->_propDict)) {
            return $this->_propDict["acceptRequests"];
        } else {
            return null;
        }
    }

    /**
    * Sets the acceptRequests
    * Indicates whether new requests are accepted on this policy.
    *
    * @param bool $val The value of the acceptRequests
    *
    * @return RequestorSettings
    */
    public function setAcceptRequests($val)
    {
        $this->_propDict["acceptRequests"] = $val;
        return $this;
    }

    /**
    * Gets the allowedRequestors
    * The users who are allowed to request on this policy, which can be singleUser, groupMembers, and connectedOrganizationMembers.
    *
    * @return UserSet The allowedRequestors
    */
    public function getAllowedRequestors()
    {
        if (array_key_exists("allowedRequestors", $this->_propDict)) {
            if (is_a($this->_propDict["allowedRequestors"], "\Beta\Microsoft\Graph\Model\UserSet")) {
                return $this->_propDict["allowedRequestors"];
            } else {
                $this->_propDict["allowedRequestors"] = new UserSet($this->_propDict["allowedRequestors"]);
                return $this->_propDict["allowedRequestors"];
            }
        }
        return null;
    }

    /**
    * Sets the allowedRequestors
    * The users who are allowed to request on this policy, which can be singleUser, groupMembers, and connectedOrganizationMembers.
    *
    * @param UserSet $val The value to assign to the allowedRequestors
    *
    * @return RequestorSettings The RequestorSettings
    */
    public function setAllowedRequestors($val)
    {
        $this->_propDict["allowedRequestors"] = $val;
         return $this;
    }
    /**
    * Gets the scopeType
    * Who can request. One of NoSubjects, SpecificDirectorySubjects, SpecificConnectedOrganizationSubjects, AllConfiguredConnectedOrganizationSubjects, AllExistingConnectedOrganizationSubjects, AllExistingDirectoryMemberUsers, AllExistingDirectorySubjects or AllExternalSubjects.
    *
    * @return string The scopeType
    */
    public function getScopeType()
    {
        if (array_key_exists("scopeType", $this->_propDict)) {
            return $this->_propDict["scopeType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the scopeType
    * Who can request. One of NoSubjects, SpecificDirectorySubjects, SpecificConnectedOrganizationSubjects, AllConfiguredConnectedOrganizationSubjects, AllExistingConnectedOrganizationSubjects, AllExistingDirectoryMemberUsers, AllExistingDirectorySubjects or AllExternalSubjects.
    *
    * @param string $val The value of the scopeType
    *
    * @return RequestorSettings
    */
    public function setScopeType($val)
    {
        $this->_propDict["scopeType"] = $val;
        return $this;
    }
}
