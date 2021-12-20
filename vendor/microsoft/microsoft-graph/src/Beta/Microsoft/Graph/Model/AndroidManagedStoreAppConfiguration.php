<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidManagedStoreAppConfiguration File
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
* AndroidManagedStoreAppConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AndroidManagedStoreAppConfiguration extends ManagedDeviceMobileAppConfiguration
{
    /**
    * Gets the appSupportsOemConfig
    * Whether or not this AppConfig is an OEMConfig policy.
    *
    * @return bool The appSupportsOemConfig
    */
    public function getAppSupportsOemConfig()
    {
        if (array_key_exists("appSupportsOemConfig", $this->_propDict)) {
            return $this->_propDict["appSupportsOemConfig"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appSupportsOemConfig
    * Whether or not this AppConfig is an OEMConfig policy.
    *
    * @param bool $val The appSupportsOemConfig
    *
    * @return AndroidManagedStoreAppConfiguration
    */
    public function setAppSupportsOemConfig($val)
    {
        $this->_propDict["appSupportsOemConfig"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the packageId
    * Android Enterprise app configuration package id.
    *
    * @return string The packageId
    */
    public function getPackageId()
    {
        if (array_key_exists("packageId", $this->_propDict)) {
            return $this->_propDict["packageId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the packageId
    * Android Enterprise app configuration package id.
    *
    * @param string $val The packageId
    *
    * @return AndroidManagedStoreAppConfiguration
    */
    public function setPackageId($val)
    {
        $this->_propDict["packageId"] = $val;
        return $this;
    }
    
    /**
    * Gets the payloadJson
    * Android Enterprise app configuration JSON payload.
    *
    * @return string The payloadJson
    */
    public function getPayloadJson()
    {
        if (array_key_exists("payloadJson", $this->_propDict)) {
            return $this->_propDict["payloadJson"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the payloadJson
    * Android Enterprise app configuration JSON payload.
    *
    * @param string $val The payloadJson
    *
    * @return AndroidManagedStoreAppConfiguration
    */
    public function setPayloadJson($val)
    {
        $this->_propDict["payloadJson"] = $val;
        return $this;
    }
    

     /** 
     * Gets the permissionActions
    * List of Android app permissions and corresponding permission actions.
     *
     * @return array The permissionActions
     */
    public function getPermissionActions()
    {
        if (array_key_exists("permissionActions", $this->_propDict)) {
           return $this->_propDict["permissionActions"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the permissionActions
    * List of Android app permissions and corresponding permission actions.
    *
    * @param AndroidPermissionAction $val The permissionActions
    *
    * @return AndroidManagedStoreAppConfiguration
    */
    public function setPermissionActions($val)
    {
		$this->_propDict["permissionActions"] = $val;
        return $this;
    }
    
    /**
    * Gets the profileApplicability
    * Android Enterprise profile applicability (AndroidWorkProfile, DeviceOwner, or default (applies to both)). Possible values are: default, androidWorkProfile, androidDeviceOwner.
    *
    * @return AndroidProfileApplicability The profileApplicability
    */
    public function getProfileApplicability()
    {
        if (array_key_exists("profileApplicability", $this->_propDict)) {
            if (is_a($this->_propDict["profileApplicability"], "\Beta\Microsoft\Graph\Model\AndroidProfileApplicability")) {
                return $this->_propDict["profileApplicability"];
            } else {
                $this->_propDict["profileApplicability"] = new AndroidProfileApplicability($this->_propDict["profileApplicability"]);
                return $this->_propDict["profileApplicability"];
            }
        }
        return null;
    }
    
    /**
    * Sets the profileApplicability
    * Android Enterprise profile applicability (AndroidWorkProfile, DeviceOwner, or default (applies to both)). Possible values are: default, androidWorkProfile, androidDeviceOwner.
    *
    * @param AndroidProfileApplicability $val The profileApplicability
    *
    * @return AndroidManagedStoreAppConfiguration
    */
    public function setProfileApplicability($val)
    {
        $this->_propDict["profileApplicability"] = $val;
        return $this;
    }
    
}
