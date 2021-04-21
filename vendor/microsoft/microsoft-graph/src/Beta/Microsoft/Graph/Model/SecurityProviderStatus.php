<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SecurityProviderStatus File
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
* SecurityProviderStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SecurityProviderStatus extends Entity
{
    /**
    * Gets the enabled
    *
    * @return bool The enabled
    */
    public function getEnabled()
    {
        if (array_key_exists("enabled", $this->_propDict)) {
            return $this->_propDict["enabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the enabled
    *
    * @param bool $val The value of the enabled
    *
    * @return SecurityProviderStatus
    */
    public function setEnabled($val)
    {
        $this->_propDict["enabled"] = $val;
        return $this;
    }
    /**
    * Gets the endpoint
    *
    * @return string The endpoint
    */
    public function getEndpoint()
    {
        if (array_key_exists("endpoint", $this->_propDict)) {
            return $this->_propDict["endpoint"];
        } else {
            return null;
        }
    }

    /**
    * Sets the endpoint
    *
    * @param string $val The value of the endpoint
    *
    * @return SecurityProviderStatus
    */
    public function setEndpoint($val)
    {
        $this->_propDict["endpoint"] = $val;
        return $this;
    }
    /**
    * Gets the provider
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
    *
    * @param string $val The value of the provider
    *
    * @return SecurityProviderStatus
    */
    public function setProvider($val)
    {
        $this->_propDict["provider"] = $val;
        return $this;
    }
    /**
    * Gets the region
    *
    * @return string The region
    */
    public function getRegion()
    {
        if (array_key_exists("region", $this->_propDict)) {
            return $this->_propDict["region"];
        } else {
            return null;
        }
    }

    /**
    * Sets the region
    *
    * @param string $val The value of the region
    *
    * @return SecurityProviderStatus
    */
    public function setRegion($val)
    {
        $this->_propDict["region"] = $val;
        return $this;
    }
    /**
    * Gets the vendor
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
    *
    * @param string $val The value of the vendor
    *
    * @return SecurityProviderStatus
    */
    public function setVendor($val)
    {
        $this->_propDict["vendor"] = $val;
        return $this;
    }
}
