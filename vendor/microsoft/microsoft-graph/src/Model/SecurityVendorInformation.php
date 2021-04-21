<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SecurityVendorInformation File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;
/**
* SecurityVendorInformation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SecurityVendorInformation extends Entity
{
    /**
    * Gets the provider
    * Specific provider (product/service - not vendor company); for example, WindowsDefenderATP.
    *
    * @return string The provider
    */
    public function getProvider()
    {
        if (array_key_exists("provider", $this->_propDict)) {
            return $this->_propDict["provider"];
        } else {
            return null;
        }
    }

    /**
    * Sets the provider
    * Specific provider (product/service - not vendor company); for example, WindowsDefenderATP.
    *
    * @param string $val The value of the provider
    *
    * @return SecurityVendorInformation
    */
    public function setProvider($val)
    {
        $this->_propDict["provider"] = $val;
        return $this;
    }
    /**
    * Gets the providerVersion
    * Version of the provider or subprovider, if it exists, that generated the alert. Required
    *
    * @return string The providerVersion
    */
    public function getProviderVersion()
    {
        if (array_key_exists("providerVersion", $this->_propDict)) {
            return $this->_propDict["providerVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the providerVersion
    * Version of the provider or subprovider, if it exists, that generated the alert. Required
    *
    * @param string $val The value of the providerVersion
    *
    * @return SecurityVendorInformation
    */
    public function setProviderVersion($val)
    {
        $this->_propDict["providerVersion"] = $val;
        return $this;
    }
    /**
    * Gets the subProvider
    * Specific subprovider (under aggregating provider); for example, WindowsDefenderATP.SmartScreen.
    *
    * @return string The subProvider
    */
    public function getSubProvider()
    {
        if (array_key_exists("subProvider", $this->_propDict)) {
            return $this->_propDict["subProvider"];
        } else {
            return null;
        }
    }

    /**
    * Sets the subProvider
    * Specific subprovider (under aggregating provider); for example, WindowsDefenderATP.SmartScreen.
    *
    * @param string $val The value of the subProvider
    *
    * @return SecurityVendorInformation
    */
    public function setSubProvider($val)
    {
        $this->_propDict["subProvider"] = $val;
        return $this;
    }
    /**
    * Gets the vendor
    * Name of the alert vendor (for example, Microsoft, Dell, FireEye). Required
    *
    * @return string The vendor
    */
    public function getVendor()
    {
        if (array_key_exists("vendor", $this->_propDict)) {
            return $this->_propDict["vendor"];
        } else {
            return null;
        }
    }

    /**
    * Sets the vendor
    * Name of the alert vendor (for example, Microsoft, Dell, FireEye). Required
    *
    * @param string $val The value of the vendor
    *
    * @return SecurityVendorInformation
    */
    public function setVendor($val)
    {
        $this->_propDict["vendor"] = $val;
        return $this;
    }
}
