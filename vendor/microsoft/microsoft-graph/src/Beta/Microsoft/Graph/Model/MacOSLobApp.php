<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MacOSLobApp File
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
* MacOSLobApp class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MacOSLobApp extends MobileLobApp
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
    * @param string $val The buildNumber
    *
    * @return MacOSLobApp
    */
    public function setBuildNumber($val)
    {
        $this->_propDict["buildNumber"] = $val;
        return $this;
    }
    
    /**
    * Gets the bundleId
    * The bundle id.
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
    * The bundle id.
    *
    * @param string $val The bundleId
    *
    * @return MacOSLobApp
    */
    public function setBundleId($val)
    {
        $this->_propDict["bundleId"] = $val;
        return $this;
    }
    

     /** 
     * Gets the childApps
    * The app list in this bundle package
     *
     * @return array The childApps
     */
    public function getChildApps()
    {
        if (array_key_exists("childApps", $this->_propDict)) {
           return $this->_propDict["childApps"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the childApps
    * The app list in this bundle package
    *
    * @param MacOSLobChildApp $val The childApps
    *
    * @return MacOSLobApp
    */
    public function setChildApps($val)
    {
		$this->_propDict["childApps"] = $val;
        return $this;
    }
    
    /**
    * Gets the identityVersion
    * The identity version.
    *
    * @return string The identityVersion
    */
    public function getIdentityVersion()
    {
        if (array_key_exists("identityVersion", $this->_propDict)) {
            return $this->_propDict["identityVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the identityVersion
    * The identity version.
    *
    * @param string $val The identityVersion
    *
    * @return MacOSLobApp
    */
    public function setIdentityVersion($val)
    {
        $this->_propDict["identityVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the ignoreVersionDetection
    * A boolean to control whether the app's version will be used to detect the app after it is installed on a device. Set this to true for macOS Line of Business (LoB) apps that use a self update feature.
    *
    * @return bool The ignoreVersionDetection
    */
    public function getIgnoreVersionDetection()
    {
        if (array_key_exists("ignoreVersionDetection", $this->_propDict)) {
            return $this->_propDict["ignoreVersionDetection"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the ignoreVersionDetection
    * A boolean to control whether the app's version will be used to detect the app after it is installed on a device. Set this to true for macOS Line of Business (LoB) apps that use a self update feature.
    *
    * @param bool $val The ignoreVersionDetection
    *
    * @return MacOSLobApp
    */
    public function setIgnoreVersionDetection($val)
    {
        $this->_propDict["ignoreVersionDetection"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the installAsManaged
    * A boolean to control whether the app will be installed as managed (requires macOS 11.0 and other PKG restrictions).
    *
    * @return bool The installAsManaged
    */
    public function getInstallAsManaged()
    {
        if (array_key_exists("installAsManaged", $this->_propDict)) {
            return $this->_propDict["installAsManaged"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the installAsManaged
    * A boolean to control whether the app will be installed as managed (requires macOS 11.0 and other PKG restrictions).
    *
    * @param bool $val The installAsManaged
    *
    * @return MacOSLobApp
    */
    public function setInstallAsManaged($val)
    {
        $this->_propDict["installAsManaged"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the md5Hash
    * The MD5 hash codes
    *
    * @return string The md5Hash
    */
    public function getMd5Hash()
    {
        if (array_key_exists("md5Hash", $this->_propDict)) {
            return $this->_propDict["md5Hash"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the md5Hash
    * The MD5 hash codes
    *
    * @param string $val The md5Hash
    *
    * @return MacOSLobApp
    */
    public function setMd5Hash($val)
    {
        $this->_propDict["md5Hash"] = $val;
        return $this;
    }
    
    /**
    * Gets the md5HashChunkSize
    * The chunk size for MD5 hash
    *
    * @return int The md5HashChunkSize
    */
    public function getMd5HashChunkSize()
    {
        if (array_key_exists("md5HashChunkSize", $this->_propDict)) {
            return $this->_propDict["md5HashChunkSize"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the md5HashChunkSize
    * The chunk size for MD5 hash
    *
    * @param int $val The md5HashChunkSize
    *
    * @return MacOSLobApp
    */
    public function setMd5HashChunkSize($val)
    {
        $this->_propDict["md5HashChunkSize"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the minimumSupportedOperatingSystem
    * The value for the minimum applicable operating system.
    *
    * @return MacOSMinimumOperatingSystem The minimumSupportedOperatingSystem
    */
    public function getMinimumSupportedOperatingSystem()
    {
        if (array_key_exists("minimumSupportedOperatingSystem", $this->_propDict)) {
            if (is_a($this->_propDict["minimumSupportedOperatingSystem"], "\Beta\Microsoft\Graph\Model\MacOSMinimumOperatingSystem")) {
                return $this->_propDict["minimumSupportedOperatingSystem"];
            } else {
                $this->_propDict["minimumSupportedOperatingSystem"] = new MacOSMinimumOperatingSystem($this->_propDict["minimumSupportedOperatingSystem"]);
                return $this->_propDict["minimumSupportedOperatingSystem"];
            }
        }
        return null;
    }
    
    /**
    * Sets the minimumSupportedOperatingSystem
    * The value for the minimum applicable operating system.
    *
    * @param MacOSMinimumOperatingSystem $val The minimumSupportedOperatingSystem
    *
    * @return MacOSLobApp
    */
    public function setMinimumSupportedOperatingSystem($val)
    {
        $this->_propDict["minimumSupportedOperatingSystem"] = $val;
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
    * @param string $val The versionNumber
    *
    * @return MacOSLobApp
    */
    public function setVersionNumber($val)
    {
        $this->_propDict["versionNumber"] = $val;
        return $this;
    }
    
}
