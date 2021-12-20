<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UsageRight File
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
* UsageRight class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UsageRight extends Entity
{
    /**
    * Gets the catalogId
    * Product id corresponding to the usage right.
    *
    * @return string The catalogId
    */
    public function getCatalogId()
    {
        if (array_key_exists("catalogId", $this->_propDict)) {
            return $this->_propDict["catalogId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the catalogId
    * Product id corresponding to the usage right.
    *
    * @param string $val The catalogId
    *
    * @return UsageRight
    */
    public function setCatalogId($val)
    {
        $this->_propDict["catalogId"] = $val;
        return $this;
    }
    
    /**
    * Gets the serviceIdentifier
    * Identifier of the service corresponding to the usage right.
    *
    * @return string The serviceIdentifier
    */
    public function getServiceIdentifier()
    {
        if (array_key_exists("serviceIdentifier", $this->_propDict)) {
            return $this->_propDict["serviceIdentifier"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the serviceIdentifier
    * Identifier of the service corresponding to the usage right.
    *
    * @param string $val The serviceIdentifier
    *
    * @return UsageRight
    */
    public function setServiceIdentifier($val)
    {
        $this->_propDict["serviceIdentifier"] = $val;
        return $this;
    }
    
    /**
    * Gets the state
    * The state of the usage right. Possible values are: active, inactive, warning, suspended.
    *
    * @return UsageRightState The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            if (is_a($this->_propDict["state"], "\Beta\Microsoft\Graph\Model\UsageRightState")) {
                return $this->_propDict["state"];
            } else {
                $this->_propDict["state"] = new UsageRightState($this->_propDict["state"]);
                return $this->_propDict["state"];
            }
        }
        return null;
    }
    
    /**
    * Sets the state
    * The state of the usage right. Possible values are: active, inactive, warning, suspended.
    *
    * @param UsageRightState $val The state
    *
    * @return UsageRight
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
        return $this;
    }
    
}
