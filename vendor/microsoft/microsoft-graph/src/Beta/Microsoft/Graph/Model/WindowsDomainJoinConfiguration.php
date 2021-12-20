<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsDomainJoinConfiguration File
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
* WindowsDomainJoinConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsDomainJoinConfiguration extends DeviceConfiguration
{
    /**
    * Gets the activeDirectoryDomainName
    * Active Directory domain name to join.
    *
    * @return string The activeDirectoryDomainName
    */
    public function getActiveDirectoryDomainName()
    {
        if (array_key_exists("activeDirectoryDomainName", $this->_propDict)) {
            return $this->_propDict["activeDirectoryDomainName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the activeDirectoryDomainName
    * Active Directory domain name to join.
    *
    * @param string $val The activeDirectoryDomainName
    *
    * @return WindowsDomainJoinConfiguration
    */
    public function setActiveDirectoryDomainName($val)
    {
        $this->_propDict["activeDirectoryDomainName"] = $val;
        return $this;
    }
    
    /**
    * Gets the computerNameStaticPrefix
    * Fixed prefix to be used for computer name.
    *
    * @return string The computerNameStaticPrefix
    */
    public function getComputerNameStaticPrefix()
    {
        if (array_key_exists("computerNameStaticPrefix", $this->_propDict)) {
            return $this->_propDict["computerNameStaticPrefix"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the computerNameStaticPrefix
    * Fixed prefix to be used for computer name.
    *
    * @param string $val The computerNameStaticPrefix
    *
    * @return WindowsDomainJoinConfiguration
    */
    public function setComputerNameStaticPrefix($val)
    {
        $this->_propDict["computerNameStaticPrefix"] = $val;
        return $this;
    }
    
    /**
    * Gets the computerNameSuffixRandomCharCount
    * Dynamically generated characters used as suffix for computer name. Valid values 3 to 14
    *
    * @return int The computerNameSuffixRandomCharCount
    */
    public function getComputerNameSuffixRandomCharCount()
    {
        if (array_key_exists("computerNameSuffixRandomCharCount", $this->_propDict)) {
            return $this->_propDict["computerNameSuffixRandomCharCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the computerNameSuffixRandomCharCount
    * Dynamically generated characters used as suffix for computer name. Valid values 3 to 14
    *
    * @param int $val The computerNameSuffixRandomCharCount
    *
    * @return WindowsDomainJoinConfiguration
    */
    public function setComputerNameSuffixRandomCharCount($val)
    {
        $this->_propDict["computerNameSuffixRandomCharCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the organizationalUnit
    * Organizational unit (OU) where the computer account will be created. If this parameter is NULL, the well known computer object container will be used as published in the domain.
    *
    * @return string The organizationalUnit
    */
    public function getOrganizationalUnit()
    {
        if (array_key_exists("organizationalUnit", $this->_propDict)) {
            return $this->_propDict["organizationalUnit"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the organizationalUnit
    * Organizational unit (OU) where the computer account will be created. If this parameter is NULL, the well known computer object container will be used as published in the domain.
    *
    * @param string $val The organizationalUnit
    *
    * @return WindowsDomainJoinConfiguration
    */
    public function setOrganizationalUnit($val)
    {
        $this->_propDict["organizationalUnit"] = $val;
        return $this;
    }
    

     /** 
     * Gets the networkAccessConfigurations
    * Reference to device configurations required for network connectivity
     *
     * @return array The networkAccessConfigurations
     */
    public function getNetworkAccessConfigurations()
    {
        if (array_key_exists("networkAccessConfigurations", $this->_propDict)) {
           return $this->_propDict["networkAccessConfigurations"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the networkAccessConfigurations
    * Reference to device configurations required for network connectivity
    *
    * @param DeviceConfiguration $val The networkAccessConfigurations
    *
    * @return WindowsDomainJoinConfiguration
    */
    public function setNetworkAccessConfigurations($val)
    {
		$this->_propDict["networkAccessConfigurations"] = $val;
        return $this;
    }
    
}
