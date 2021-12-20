<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ExtensionProperty File
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
* ExtensionProperty class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ExtensionProperty extends DirectoryObject
{
    /**
    * Gets the appDisplayName
    * Display name of the application object on which this extension property is defined. Read-only.
    *
    * @return string The appDisplayName
    */
    public function getAppDisplayName()
    {
        if (array_key_exists("appDisplayName", $this->_propDict)) {
            return $this->_propDict["appDisplayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appDisplayName
    * Display name of the application object on which this extension property is defined. Read-only.
    *
    * @param string $val The appDisplayName
    *
    * @return ExtensionProperty
    */
    public function setAppDisplayName($val)
    {
        $this->_propDict["appDisplayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the dataType
    * Specifies the data type of the value the extension property can hold. Following values are supported. Not nullable. Binary - 256 bytes maximumBooleanDateTime - Must be specified in ISO 8601 format. Will be stored in UTC.Integer - 32-bit value.LargeInteger - 64-bit value.String - 256 characters maximum
    *
    * @return string The dataType
    */
    public function getDataType()
    {
        if (array_key_exists("dataType", $this->_propDict)) {
            return $this->_propDict["dataType"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the dataType
    * Specifies the data type of the value the extension property can hold. Following values are supported. Not nullable. Binary - 256 bytes maximumBooleanDateTime - Must be specified in ISO 8601 format. Will be stored in UTC.Integer - 32-bit value.LargeInteger - 64-bit value.String - 256 characters maximum
    *
    * @param string $val The dataType
    *
    * @return ExtensionProperty
    */
    public function setDataType($val)
    {
        $this->_propDict["dataType"] = $val;
        return $this;
    }
    
    /**
    * Gets the isSyncedFromOnPremises
    * Indicates if this extension property was sycned from onpremises directory using Azure AD Connect. Read-only.
    *
    * @return bool The isSyncedFromOnPremises
    */
    public function getIsSyncedFromOnPremises()
    {
        if (array_key_exists("isSyncedFromOnPremises", $this->_propDict)) {
            return $this->_propDict["isSyncedFromOnPremises"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isSyncedFromOnPremises
    * Indicates if this extension property was sycned from onpremises directory using Azure AD Connect. Read-only.
    *
    * @param bool $val The isSyncedFromOnPremises
    *
    * @return ExtensionProperty
    */
    public function setIsSyncedFromOnPremises($val)
    {
        $this->_propDict["isSyncedFromOnPremises"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the name
    * Name of the extension property. Not nullable.
    *
    * @return string The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the name
    * Name of the extension property. Not nullable.
    *
    * @param string $val The name
    *
    * @return ExtensionProperty
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    
    /**
    * Gets the targetObjects
    * Following values are supported. Not nullable. UserGroupOrganizationDeviceApplication
    *
    * @return string The targetObjects
    */
    public function getTargetObjects()
    {
        if (array_key_exists("targetObjects", $this->_propDict)) {
            return $this->_propDict["targetObjects"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the targetObjects
    * Following values are supported. Not nullable. UserGroupOrganizationDeviceApplication
    *
    * @param string $val The targetObjects
    *
    * @return ExtensionProperty
    */
    public function setTargetObjects($val)
    {
        $this->_propDict["targetObjects"] = $val;
        return $this;
    }
    
}
