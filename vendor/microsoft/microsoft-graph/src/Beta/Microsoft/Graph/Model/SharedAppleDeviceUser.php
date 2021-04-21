<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SharedAppleDeviceUser File
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
* SharedAppleDeviceUser class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SharedAppleDeviceUser extends Entity
{
    /**
    * Gets the dataQuota
    * Data quota
    *
    * @return int The dataQuota
    */
    public function getDataQuota()
    {
        if (array_key_exists("dataQuota", $this->_propDict)) {
            return $this->_propDict["dataQuota"];
        } else {
            return null;
        }
    }

    /**
    * Sets the dataQuota
    * Data quota
    *
    * @param int $val The value of the dataQuota
    *
    * @return SharedAppleDeviceUser
    */
    public function setDataQuota($val)
    {
        $this->_propDict["dataQuota"] = $val;
        return $this;
    }
    /**
    * Gets the dataToSync
    * Data to sync
    *
    * @return bool The dataToSync
    */
    public function getDataToSync()
    {
        if (array_key_exists("dataToSync", $this->_propDict)) {
            return $this->_propDict["dataToSync"];
        } else {
            return null;
        }
    }

    /**
    * Sets the dataToSync
    * Data to sync
    *
    * @param bool $val The value of the dataToSync
    *
    * @return SharedAppleDeviceUser
    */
    public function setDataToSync($val)
    {
        $this->_propDict["dataToSync"] = $val;
        return $this;
    }
    /**
    * Gets the dataUsed
    * Data quota
    *
    * @return int The dataUsed
    */
    public function getDataUsed()
    {
        if (array_key_exists("dataUsed", $this->_propDict)) {
            return $this->_propDict["dataUsed"];
        } else {
            return null;
        }
    }

    /**
    * Sets the dataUsed
    * Data quota
    *
    * @param int $val The value of the dataUsed
    *
    * @return SharedAppleDeviceUser
    */
    public function setDataUsed($val)
    {
        $this->_propDict["dataUsed"] = $val;
        return $this;
    }
    /**
    * Gets the userPrincipalName
    * User name
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
    * User name
    *
    * @param string $val The value of the userPrincipalName
    *
    * @return SharedAppleDeviceUser
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }
}
