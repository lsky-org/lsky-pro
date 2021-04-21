<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrivateEndpointConnection File
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
* PrivateEndpointConnection class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PrivateEndpointConnection extends Entity
{
    /**
    * Gets the externalPrivateEndpointId
    *
    * @return string The externalPrivateEndpointId
    */
    public function getExternalPrivateEndpointId()
    {
        if (array_key_exists("externalPrivateEndpointId", $this->_propDict)) {
            return $this->_propDict["externalPrivateEndpointId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the externalPrivateEndpointId
    *
    * @param string $val The externalPrivateEndpointId
    *
    * @return PrivateEndpointConnection
    */
    public function setExternalPrivateEndpointId($val)
    {
        $this->_propDict["externalPrivateEndpointId"] = $val;
        return $this;
    }
    
    /**
    * Gets the privateLinkIds
    *
    * @return int The privateLinkIds
    */
    public function getPrivateLinkIds()
    {
        if (array_key_exists("privateLinkIds", $this->_propDict)) {
            return $this->_propDict["privateLinkIds"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the privateLinkIds
    *
    * @param int $val The privateLinkIds
    *
    * @return PrivateEndpointConnection
    */
    public function setPrivateLinkIds($val)
    {
        $this->_propDict["privateLinkIds"] = intval($val);
        return $this;
    }
    
}
