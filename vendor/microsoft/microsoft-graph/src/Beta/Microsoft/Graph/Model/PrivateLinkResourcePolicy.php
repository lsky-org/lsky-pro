<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrivateLinkResourcePolicy File
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
* PrivateLinkResourcePolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PrivateLinkResourcePolicy extends Entity
{
    /**
    * Gets the allowedTenantIds
    *
    * @return string The allowedTenantIds
    */
    public function getAllowedTenantIds()
    {
        if (array_key_exists("allowedTenantIds", $this->_propDict)) {
            return $this->_propDict["allowedTenantIds"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the allowedTenantIds
    *
    * @param string $val The allowedTenantIds
    *
    * @return PrivateLinkResourcePolicy
    */
    public function setAllowedTenantIds($val)
    {
        $this->_propDict["allowedTenantIds"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
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
    *
    * @param string $val The displayName
    *
    * @return PrivateLinkResourcePolicy
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the externalPrivateLinkId
    *
    * @return string The externalPrivateLinkId
    */
    public function getExternalPrivateLinkId()
    {
        if (array_key_exists("externalPrivateLinkId", $this->_propDict)) {
            return $this->_propDict["externalPrivateLinkId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the externalPrivateLinkId
    *
    * @param string $val The externalPrivateLinkId
    *
    * @return PrivateLinkResourcePolicy
    */
    public function setExternalPrivateLinkId($val)
    {
        $this->_propDict["externalPrivateLinkId"] = $val;
        return $this;
    }
    

     /** 
     * Gets the privateEndpointConnections
     *
     * @return array The privateEndpointConnections
     */
    public function getPrivateEndpointConnections()
    {
        if (array_key_exists("privateEndpointConnections", $this->_propDict)) {
           return $this->_propDict["privateEndpointConnections"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the privateEndpointConnections
    *
    * @param PrivateEndpointConnection $val The privateEndpointConnections
    *
    * @return PrivateLinkResourcePolicy
    */
    public function setPrivateEndpointConnections($val)
    {
		$this->_propDict["privateEndpointConnections"] = $val;
        return $this;
    }
    
}
