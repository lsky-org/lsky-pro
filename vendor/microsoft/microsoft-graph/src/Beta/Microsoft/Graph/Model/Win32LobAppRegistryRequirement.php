<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Win32LobAppRegistryRequirement File
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
* Win32LobAppRegistryRequirement class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Win32LobAppRegistryRequirement extends Win32LobAppRequirement
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.win32LobAppRegistryRequirement");
    }

    /**
    * Gets the check32BitOn64System
    * A value indicating whether this registry path is for checking 32-bit app on 64-bit system
    *
    * @return bool The check32BitOn64System
    */
    public function getCheck32BitOn64System()
    {
        if (array_key_exists("check32BitOn64System", $this->_propDict)) {
            return $this->_propDict["check32BitOn64System"];
        } else {
            return null;
        }
    }

    /**
    * Sets the check32BitOn64System
    * A value indicating whether this registry path is for checking 32-bit app on 64-bit system
    *
    * @param bool $val The value of the check32BitOn64System
    *
    * @return Win32LobAppRegistryRequirement
    */
    public function setCheck32BitOn64System($val)
    {
        $this->_propDict["check32BitOn64System"] = $val;
        return $this;
    }

    /**
    * Gets the detectionType
    * The registry data detection type. Possible values are: notConfigured, exists, doesNotExist, string, integer, version.
    *
    * @return Win32LobAppRegistryDetectionType The detectionType
    */
    public function getDetectionType()
    {
        if (array_key_exists("detectionType", $this->_propDict)) {
            if (is_a($this->_propDict["detectionType"], "\Beta\Microsoft\Graph\Model\Win32LobAppRegistryDetectionType")) {
                return $this->_propDict["detectionType"];
            } else {
                $this->_propDict["detectionType"] = new Win32LobAppRegistryDetectionType($this->_propDict["detectionType"]);
                return $this->_propDict["detectionType"];
            }
        }
        return null;
    }

    /**
    * Sets the detectionType
    * The registry data detection type. Possible values are: notConfigured, exists, doesNotExist, string, integer, version.
    *
    * @param Win32LobAppRegistryDetectionType $val The value to assign to the detectionType
    *
    * @return Win32LobAppRegistryRequirement The Win32LobAppRegistryRequirement
    */
    public function setDetectionType($val)
    {
        $this->_propDict["detectionType"] = $val;
         return $this;
    }
    /**
    * Gets the keyPath
    * The registry key path to detect Win32 Line of Business (LoB) app
    *
    * @return string The keyPath
    */
    public function getKeyPath()
    {
        if (array_key_exists("keyPath", $this->_propDict)) {
            return $this->_propDict["keyPath"];
        } else {
            return null;
        }
    }

    /**
    * Sets the keyPath
    * The registry key path to detect Win32 Line of Business (LoB) app
    *
    * @param string $val The value of the keyPath
    *
    * @return Win32LobAppRegistryRequirement
    */
    public function setKeyPath($val)
    {
        $this->_propDict["keyPath"] = $val;
        return $this;
    }
    /**
    * Gets the valueName
    * The registry value name
    *
    * @return string The valueName
    */
    public function getValueName()
    {
        if (array_key_exists("valueName", $this->_propDict)) {
            return $this->_propDict["valueName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the valueName
    * The registry value name
    *
    * @param string $val The value of the valueName
    *
    * @return Win32LobAppRegistryRequirement
    */
    public function setValueName($val)
    {
        $this->_propDict["valueName"] = $val;
        return $this;
    }
}
