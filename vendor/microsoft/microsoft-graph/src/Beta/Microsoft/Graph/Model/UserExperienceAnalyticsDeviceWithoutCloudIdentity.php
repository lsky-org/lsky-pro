<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserExperienceAnalyticsDeviceWithoutCloudIdentity File
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
* UserExperienceAnalyticsDeviceWithoutCloudIdentity class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserExperienceAnalyticsDeviceWithoutCloudIdentity extends Entity
{
    /**
    * Gets the azureAdDeviceId
    * Azure Active Directory Device Id
    *
    * @return string The azureAdDeviceId
    */
    public function getAzureAdDeviceId()
    {
        if (array_key_exists("azureAdDeviceId", $this->_propDict)) {
            return $this->_propDict["azureAdDeviceId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the azureAdDeviceId
    * Azure Active Directory Device Id
    *
    * @param string $val The azureAdDeviceId
    *
    * @return UserExperienceAnalyticsDeviceWithoutCloudIdentity
    */
    public function setAzureAdDeviceId($val)
    {
        $this->_propDict["azureAdDeviceId"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceName
    * The tenant attach device's name.
    *
    * @return string The deviceName
    */
    public function getDeviceName()
    {
        if (array_key_exists("deviceName", $this->_propDict)) {
            return $this->_propDict["deviceName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceName
    * The tenant attach device's name.
    *
    * @param string $val The deviceName
    *
    * @return UserExperienceAnalyticsDeviceWithoutCloudIdentity
    */
    public function setDeviceName($val)
    {
        $this->_propDict["deviceName"] = $val;
        return $this;
    }
    
}
