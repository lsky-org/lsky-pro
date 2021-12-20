<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsPhone81AppX File
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
* WindowsPhone81AppX class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsPhone81AppX extends MobileLobApp
{
    /**
    * Gets the applicableArchitectures
    * The Windows architecture(s) for which this app can run on. Possible values are: none, x86, x64, arm, neutral, arm64.
    *
    * @return WindowsArchitecture The applicableArchitectures
    */
    public function getApplicableArchitectures()
    {
        if (array_key_exists("applicableArchitectures", $this->_propDict)) {
            if (is_a($this->_propDict["applicableArchitectures"], "\Beta\Microsoft\Graph\Model\WindowsArchitecture")) {
                return $this->_propDict["applicableArchitectures"];
            } else {
                $this->_propDict["applicableArchitectures"] = new WindowsArchitecture($this->_propDict["applicableArchitectures"]);
                return $this->_propDict["applicableArchitectures"];
            }
        }
        return null;
    }
    
    /**
    * Sets the applicableArchitectures
    * The Windows architecture(s) for which this app can run on. Possible values are: none, x86, x64, arm, neutral, arm64.
    *
    * @param WindowsArchitecture $val The applicableArchitectures
    *
    * @return WindowsPhone81AppX
    */
    public function setApplicableArchitectures($val)
    {
        $this->_propDict["applicableArchitectures"] = $val;
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
    * @param string $val The identityName
    *
    * @return WindowsPhone81AppX
    */
    public function setIdentityName($val)
    {
        $this->_propDict["identityName"] = $val;
        return $this;
    }
    
    /**
    * Gets the identityPublisherHash
    * The Identity Publisher Hash.
    *
    * @return string The identityPublisherHash
    */
    public function getIdentityPublisherHash()
    {
        if (array_key_exists("identityPublisherHash", $this->_propDict)) {
            return $this->_propDict["identityPublisherHash"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the identityPublisherHash
    * The Identity Publisher Hash.
    *
    * @param string $val The identityPublisherHash
    *
    * @return WindowsPhone81AppX
    */
    public function setIdentityPublisherHash($val)
    {
        $this->_propDict["identityPublisherHash"] = $val;
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
    * @param string $val The identityResourceIdentifier
    *
    * @return WindowsPhone81AppX
    */
    public function setIdentityResourceIdentifier($val)
    {
        $this->_propDict["identityResourceIdentifier"] = $val;
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
    * @return WindowsPhone81AppX
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
    * @param WindowsMinimumOperatingSystem $val The minimumSupportedOperatingSystem
    *
    * @return WindowsPhone81AppX
    */
    public function setMinimumSupportedOperatingSystem($val)
    {
        $this->_propDict["minimumSupportedOperatingSystem"] = $val;
        return $this;
    }
    
    /**
    * Gets the phoneProductIdentifier
    * The Phone Product Identifier.
    *
    * @return string The phoneProductIdentifier
    */
    public function getPhoneProductIdentifier()
    {
        if (array_key_exists("phoneProductIdentifier", $this->_propDict)) {
            return $this->_propDict["phoneProductIdentifier"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the phoneProductIdentifier
    * The Phone Product Identifier.
    *
    * @param string $val The phoneProductIdentifier
    *
    * @return WindowsPhone81AppX
    */
    public function setPhoneProductIdentifier($val)
    {
        $this->_propDict["phoneProductIdentifier"] = $val;
        return $this;
    }
    
    /**
    * Gets the phonePublisherId
    * The Phone Publisher Id.
    *
    * @return string The phonePublisherId
    */
    public function getPhonePublisherId()
    {
        if (array_key_exists("phonePublisherId", $this->_propDict)) {
            return $this->_propDict["phonePublisherId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the phonePublisherId
    * The Phone Publisher Id.
    *
    * @param string $val The phonePublisherId
    *
    * @return WindowsPhone81AppX
    */
    public function setPhonePublisherId($val)
    {
        $this->_propDict["phonePublisherId"] = $val;
        return $this;
    }
    
}
