<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IosVppAppAssignedLicense File
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
* IosVppAppAssignedLicense class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IosVppAppAssignedLicense extends Entity
{
    /**
    * Gets the userEmailAddress
    * The user email address.
    *
    * @return string The userEmailAddress
    */
    public function getUserEmailAddress()
    {
        if (array_key_exists("userEmailAddress", $this->_propDict)) {
            return $this->_propDict["userEmailAddress"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userEmailAddress
    * The user email address.
    *
    * @param string $val The userEmailAddress
    *
    * @return IosVppAppAssignedLicense
    */
    public function setUserEmailAddress($val)
    {
        $this->_propDict["userEmailAddress"] = $val;
        return $this;
    }
    
    /**
    * Gets the userId
    * The user ID.
    *
    * @return string The userId
    */
    public function getUserId()
    {
        if (array_key_exists("userId", $this->_propDict)) {
            return $this->_propDict["userId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userId
    * The user ID.
    *
    * @param string $val The userId
    *
    * @return IosVppAppAssignedLicense
    */
    public function setUserId($val)
    {
        $this->_propDict["userId"] = $val;
        return $this;
    }
    
    /**
    * Gets the userName
    * The user name.
    *
    * @return string The userName
    */
    public function getUserName()
    {
        if (array_key_exists("userName", $this->_propDict)) {
            return $this->_propDict["userName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userName
    * The user name.
    *
    * @param string $val The userName
    *
    * @return IosVppAppAssignedLicense
    */
    public function setUserName($val)
    {
        $this->_propDict["userName"] = $val;
        return $this;
    }
    
    /**
    * Gets the userPrincipalName
    * The user principal name.
    *
    * @return string The userPrincipalName
    */
    public function getUserPrincipalName()
    {
        if (array_key_exists("userPrincipalName", $this->_propDict)) {
            return $this->_propDict["userPrincipalName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userPrincipalName
    * The user principal name.
    *
    * @param string $val The userPrincipalName
    *
    * @return IosVppAppAssignedLicense
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }
    
}
