<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceEnrollmentLimitConfiguration File
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
* DeviceEnrollmentLimitConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceEnrollmentLimitConfiguration extends DeviceEnrollmentConfiguration
{
    /**
    * Gets the limit
    * The maximum number of devices that a user can enroll
    *
    * @return int The limit
    */
    public function getLimit()
    {
        if (array_key_exists("limit", $this->_propDict)) {
            return $this->_propDict["limit"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the limit
    * The maximum number of devices that a user can enroll
    *
    * @param int $val The limit
    *
    * @return DeviceEnrollmentLimitConfiguration
    */
    public function setLimit($val)
    {
        $this->_propDict["limit"] = intval($val);
        return $this;
    }
    
}
