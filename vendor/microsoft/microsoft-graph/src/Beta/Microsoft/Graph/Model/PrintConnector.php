<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrintConnector File
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
* PrintConnector class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PrintConnector extends Entity
{
    /**
    * Gets the appVersion
    * The connector's version.
    *
    * @return string The appVersion
    */
    public function getAppVersion()
    {
        if (array_key_exists("appVersion", $this->_propDict)) {
            return $this->_propDict["appVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appVersion
    * The connector's version.
    *
    * @param string $val The appVersion
    *
    * @return PrintConnector
    */
    public function setAppVersion($val)
    {
        $this->_propDict["appVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceHealth
    * The connector's device health.
    *
    * @return DeviceHealth The deviceHealth
    */
    public function getDeviceHealth()
    {
        if (array_key_exists("deviceHealth", $this->_propDict)) {
            if (is_a($this->_propDict["deviceHealth"], "\Beta\Microsoft\Graph\Model\DeviceHealth")) {
                return $this->_propDict["deviceHealth"];
            } else {
                $this->_propDict["deviceHealth"] = new DeviceHealth($this->_propDict["deviceHealth"]);
                return $this->_propDict["deviceHealth"];
            }
        }
        return null;
    }
    
    /**
    * Sets the deviceHealth
    * The connector's device health.
    *
    * @param DeviceHealth $val The deviceHealth
    *
    * @return PrintConnector
    */
    public function setDeviceHealth($val)
    {
        $this->_propDict["deviceHealth"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * The name of the connector.
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
    * The name of the connector.
    *
    * @param string $val The displayName
    *
    * @return PrintConnector
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the fullyQualifiedDomainName
    * The connector machine's hostname.
    *
    * @return string The fullyQualifiedDomainName
    */
    public function getFullyQualifiedDomainName()
    {
        if (array_key_exists("fullyQualifiedDomainName", $this->_propDict)) {
            return $this->_propDict["fullyQualifiedDomainName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the fullyQualifiedDomainName
    * The connector machine's hostname.
    *
    * @param string $val The fullyQualifiedDomainName
    *
    * @return PrintConnector
    */
    public function setFullyQualifiedDomainName($val)
    {
        $this->_propDict["fullyQualifiedDomainName"] = $val;
        return $this;
    }
    
    /**
    * Gets the location
    * The physical and/or organizational location of the connector.
    *
    * @return PrinterLocation The location
    */
    public function getLocation()
    {
        if (array_key_exists("location", $this->_propDict)) {
            if (is_a($this->_propDict["location"], "\Beta\Microsoft\Graph\Model\PrinterLocation")) {
                return $this->_propDict["location"];
            } else {
                $this->_propDict["location"] = new PrinterLocation($this->_propDict["location"]);
                return $this->_propDict["location"];
            }
        }
        return null;
    }
    
    /**
    * Sets the location
    * The physical and/or organizational location of the connector.
    *
    * @param PrinterLocation $val The location
    *
    * @return PrintConnector
    */
    public function setLocation($val)
    {
        $this->_propDict["location"] = $val;
        return $this;
    }
    
    /**
    * Gets the name
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
    *
    * @param string $val The name
    *
    * @return PrintConnector
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    
    /**
    * Gets the operatingSystem
    * The connector machine's operating system version.
    *
    * @return string The operatingSystem
    */
    public function getOperatingSystem()
    {
        if (array_key_exists("operatingSystem", $this->_propDict)) {
            return $this->_propDict["operatingSystem"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the operatingSystem
    * The connector machine's operating system version.
    *
    * @param string $val The operatingSystem
    *
    * @return PrintConnector
    */
    public function setOperatingSystem($val)
    {
        $this->_propDict["operatingSystem"] = $val;
        return $this;
    }
    
    /**
    * Gets the registeredDateTime
    * The DateTimeOffset when the connector was registered.
    *
    * @return \DateTime The registeredDateTime
    */
    public function getRegisteredDateTime()
    {
        if (array_key_exists("registeredDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["registeredDateTime"], "\DateTime")) {
                return $this->_propDict["registeredDateTime"];
            } else {
                $this->_propDict["registeredDateTime"] = new \DateTime($this->_propDict["registeredDateTime"]);
                return $this->_propDict["registeredDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the registeredDateTime
    * The DateTimeOffset when the connector was registered.
    *
    * @param \DateTime $val The registeredDateTime
    *
    * @return PrintConnector
    */
    public function setRegisteredDateTime($val)
    {
        $this->_propDict["registeredDateTime"] = $val;
        return $this;
    }
    
}
