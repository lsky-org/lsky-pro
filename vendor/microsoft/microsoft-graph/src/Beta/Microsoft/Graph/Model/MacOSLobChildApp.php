<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MacOSLobChildApp File
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
* MacOSLobChildApp class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MacOSLobChildApp extends Entity
{
    /**
    * Gets the buildNumber
    * The build number of MacOS Line of Business (LoB) app.
    *
    * @return string The buildNumber
    */
    public function getBuildNumber()
    {
        if (array_key_exists("buildNumber", $this->_propDict)) {
            return $this->_propDict["buildNumber"];
        } else {
            return null;
        }
    }

    /**
    * Sets the buildNumber
    * The build number of MacOS Line of Business (LoB) app.
    *
    * @param string $val The value of the buildNumber
    *
    * @return MacOSLobChildApp
    */
    public function setBuildNumber($val)
    {
        $this->_propDict["buildNumber"] = $val;
        return $this;
    }
    /**
    * Gets the bundleId
    * The Identity Name.
    *
    * @return string The bundleId
    */
    public function getBundleId()
    {
        if (array_key_exists("bundleId", $this->_propDict)) {
            return $this->_propDict["bundleId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the bundleId
    * The Identity Name.
    *
    * @param string $val The value of the bundleId
    *
    * @return MacOSLobChildApp
    */
    public function setBundleId($val)
    {
        $this->_propDict["bundleId"] = $val;
        return $this;
    }
    /**
    * Gets the versionNumber
    * The version number of MacOS Line of Business (LoB) app.
    *
    * @return string The versionNumber
    */
    public function getVersionNumber()
    {
        if (array_key_exists("versionNumber", $this->_propDict)) {
            return $this->_propDict["versionNumber"];
        } else {
            return null;
        }
    }

    /**
    * Sets the versionNumber
    * The version number of MacOS Line of Business (LoB) app.
    *
    * @param string $val The value of the versionNumber
    *
    * @return MacOSLobChildApp
    */
    public function setVersionNumber($val)
    {
        $this->_propDict["versionNumber"] = $val;
        return $this;
    }
}
