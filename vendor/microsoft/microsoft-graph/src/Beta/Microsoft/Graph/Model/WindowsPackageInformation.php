<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsPackageInformation File
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
* WindowsPackageInformation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsPackageInformation extends Entity
{

    /**
    * Gets the applicableArchitecture
    * The Windows architecture for which this app can run on. Possible values are: none, x86, x64, arm, neutral, arm64.
    *
    * @return WindowsArchitecture The applicableArchitecture
    */
    public function getApplicableArchitecture()
    {
        if (array_key_exists("applicableArchitecture", $this->_propDict)) {
            if (is_a($this->_propDict["applicableArchitecture"], "\Beta\Microsoft\Graph\Model\WindowsArchitecture")) {
                return $this->_propDict["applicableArchitecture"];
            } else {
                $this->_propDict["applicableArchitecture"] = new WindowsArchitecture($this->_propDict["applicableArchitecture"]);
                return $this->_propDict["applicableArchitecture"];
            }
        }
        return null;
    }

    /**
    * Sets the applicableArchitecture
    * The Windows architecture for which this app can run on. Possible values are: none, x86, x64, arm, neutral, arm64.
    *
    * @param WindowsArchitecture $val The value to assign to the applicableArchitecture
    *
    * @return WindowsPackageInformation The WindowsPackageInformation
    */
    public function setApplicableArchitecture($val)
    {
        $this->_propDict["applicableArchitecture"] = $val;
         return $this;
    }
    /**
    * Gets the displayName
    * The Display Name.
    *
    * @return string The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayName
    * The Display Name.
    *
    * @param string $val The value of the displayName
    *
    * @return WindowsPackageInformation
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    /**
    * Gets the identityName
    * The Identity Name.
    *
    * @return string The identityName
    */
    public function getIdentityName()
    {
        if (array_key_exists("identityName", $this->_propDict)) {
            return $this->_propDict["identityName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the identityName
    * The Identity Name.
    *
    * @param string $val The value of the identityName
    *
    * @return WindowsPackageInformation
    */
    public function setIdentityName($val)
    {
        $this->_propDict["identityName"] = $val;
        return $this;
    }
    /**
    * Gets the identityPublisher
    * The Identity Publisher.
    *
    * @return string The identityPublisher
    */
    public function getIdentityPublisher()
    {
        if (array_key_exists("identityPublisher", $this->_propDict)) {
            return $this->_propDict["identityPublisher"];
        } else {
            return null;
        }
    }

    /**
    * Sets the identityPublisher
    * The Identity Publisher.
    *
    * @param string $val The value of the identityPublisher
    *
    * @return WindowsPackageInformation
    */
    public function setIdentityPublisher($val)
    {
        $this->_propDict["identityPublisher"] = $val;
        return $this;
    }
    /**
    * Gets the identityResourceIdentifier
    * The Identity Resource Identifier.
    *
    * @return string The identityResourceIdentifier
    */
    public function getIdentityResourceIdentifier()
    {
        if (array_key_exists("identityResourceIdentifier", $this->_propDict)) {
            return $this->_propDict["identityResourceIdentifier"];
        } else {
            return null;
        }
    }

    /**
    * Sets the identityResourceIdentifier
    * The Identity Resource Identifier.
    *
    * @param string $val The value of the identityResourceIdentifier
    *
    * @return WindowsPackageInformation
    */
    public function setIdentityResourceIdentifier($val)
    {
        $this->_propDict["identityResourceIdentifier"] = $val;
        return $this;
    }
    /**
    * Gets the identityVersion
    * The Identity Version.
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
    * The Identity Version.
    *
    * @param string $val The value of the identityVersion
    *
    * @return WindowsPackageInformation
    */
    public function setIdentityVersion($val)
    {
        $this->_propDict["identityVersion"] = $val;
        return $this;
    }

    /**
    * Gets the minimumSupportedOperatingSystem
    * The value for the minimum applicable operating system.
    *
    * @return WindowsMinimumOperatingSystem The minimumSupportedOperatingSystem
    */
    public function getMinimumSupportedOperatingSystem()
    {
        if (array_key_exists("minimumSupportedOperatingSystem", $this->_propDict)) {
            if (is_a($this->_propDict["minimumSupportedOperatingSystem"], "\Beta\Microsoft\Graph\Model\WindowsMinimumOperatingSystem")) {
                return $this->_propDict["minimumSupportedOperatingSystem"];
            } else {
                $this->_propDict["minimumSupportedOperatingSystem"] = new WindowsMinimumOperatingSystem($this->_propDict["minimumSupportedOperatingSystem"]);
                return $this->_propDict["minimumSupportedOperatingSystem"];
            }
        }
        return null;
    }

    /**
    * Sets the minimumSupportedOperatingSystem
    * The value for the minimum applicable operating system.
    *
    * @param WindowsMinimumOperatingSystem $val The value to assign to the minimumSupportedOperatingSystem
    *
    * @return WindowsPackageInformation The WindowsPackageInformation
    */
    public function setMinimumSupportedOperatingSystem($val)
    {
        $this->_propDict["minimumSupportedOperatingSystem"] = $val;
         return $this;
    }
}
