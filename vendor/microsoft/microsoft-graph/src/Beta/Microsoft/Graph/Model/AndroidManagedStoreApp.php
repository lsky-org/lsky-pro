<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidManagedStoreApp File
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
* AndroidManagedStoreApp class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AndroidManagedStoreApp extends MobileApp
{
    /**
    * Gets the appIdentifier
    * The Identity Name.
    *
    * @return string The appIdentifier
    */
    public function getAppIdentifier()
    {
        if (array_key_exists("appIdentifier", $this->_propDict)) {
            return $this->_propDict["appIdentifier"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appIdentifier
    * The Identity Name.
    *
    * @param string $val The appIdentifier
    *
    * @return AndroidManagedStoreApp
    */
    public function setAppIdentifier($val)
    {
        $this->_propDict["appIdentifier"] = $val;
        return $this;
    }
    
    /**
    * Gets the appStoreUrl
    * The Play for Work Store app URL.
    *
    * @return string The appStoreUrl
    */
    public function getAppStoreUrl()
    {
        if (array_key_exists("appStoreUrl", $this->_propDict)) {
            return $this->_propDict["appStoreUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appStoreUrl
    * The Play for Work Store app URL.
    *
    * @param string $val The appStoreUrl
    *
    * @return AndroidManagedStoreApp
    */
    public function setAppStoreUrl($val)
    {
        $this->_propDict["appStoreUrl"] = $val;
        return $this;
    }
    

     /** 
     * Gets the appTracks
    * The tracks that are visible to this enterprise.
     *
     * @return array The appTracks
     */
    public function getAppTracks()
    {
        if (array_key_exists("appTracks", $this->_propDict)) {
           return $this->_propDict["appTracks"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the appTracks
    * The tracks that are visible to this enterprise.
    *
    * @param AndroidManagedStoreAppTrack $val The appTracks
    *
    * @return AndroidManagedStoreApp
    */
    public function setAppTracks($val)
    {
		$this->_propDict["appTracks"] = $val;
        return $this;
    }
    
    /**
    * Gets the isPrivate
    * Indicates whether the app is only available to a given enterprise's users.
    *
    * @return bool The isPrivate
    */
    public function getIsPrivate()
    {
        if (array_key_exists("isPrivate", $this->_propDict)) {
            return $this->_propDict["isPrivate"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isPrivate
    * Indicates whether the app is only available to a given enterprise's users.
    *
    * @param bool $val The isPrivate
    *
    * @return AndroidManagedStoreApp
    */
    public function setIsPrivate($val)
    {
        $this->_propDict["isPrivate"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the isSystemApp
    * Indicates whether the app is a preinstalled system app.
    *
    * @return bool The isSystemApp
    */
    public function getIsSystemApp()
    {
        if (array_key_exists("isSystemApp", $this->_propDict)) {
            return $this->_propDict["isSystemApp"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isSystemApp
    * Indicates whether the app is a preinstalled system app.
    *
    * @param bool $val The isSystemApp
    *
    * @return AndroidManagedStoreApp
    */
    public function setIsSystemApp($val)
    {
        $this->_propDict["isSystemApp"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the packageId
    * The package identifier.
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
    * The package identifier.
    *
    * @param string $val The packageId
    *
    * @return AndroidManagedStoreApp
    */
    public function setPackageId($val)
    {
        $this->_propDict["packageId"] = $val;
        return $this;
    }
    
    /**
    * Gets the supportsOemConfig
    * Whether this app supports OEMConfig policy.
    *
    * @return bool The supportsOemConfig
    */
    public function getSupportsOemConfig()
    {
        if (array_key_exists("supportsOemConfig", $this->_propDict)) {
            return $this->_propDict["supportsOemConfig"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the supportsOemConfig
    * Whether this app supports OEMConfig policy.
    *
    * @param bool $val The supportsOemConfig
    *
    * @return AndroidManagedStoreApp
    */
    public function setSupportsOemConfig($val)
    {
        $this->_propDict["supportsOemConfig"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the totalLicenseCount
    * The total number of VPP licenses.
    *
    * @return int The totalLicenseCount
    */
    public function getTotalLicenseCount()
    {
        if (array_key_exists("totalLicenseCount", $this->_propDict)) {
            return $this->_propDict["totalLicenseCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the totalLicenseCount
    * The total number of VPP licenses.
    *
    * @param int $val The totalLicenseCount
    *
    * @return AndroidManagedStoreApp
    */
    public function setTotalLicenseCount($val)
    {
        $this->_propDict["totalLicenseCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the usedLicenseCount
    * The number of VPP licenses in use.
    *
    * @return int The usedLicenseCount
    */
    public function getUsedLicenseCount()
    {
        if (array_key_exists("usedLicenseCount", $this->_propDict)) {
            return $this->_propDict["usedLicenseCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the usedLicenseCount
    * The number of VPP licenses in use.
    *
    * @param int $val The usedLicenseCount
    *
    * @return AndroidManagedStoreApp
    */
    public function setUsedLicenseCount($val)
    {
        $this->_propDict["usedLicenseCount"] = intval($val);
        return $this;
    }
    
}
