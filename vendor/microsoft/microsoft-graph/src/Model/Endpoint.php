<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Endpoint File
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
* Endpoint class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Endpoint extends DirectoryObject
{
    /**
    * Gets the capability
    * Describes the capability that is associated with this resource. (e.g. Messages, Conversations, etc.)  Not nullable. Read-only.
    *
    * @return string The capability
    */
    public function getCapability()
    {
        if (array_key_exists("capability", $this->_propDict)) {
            return $this->_propDict["capability"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the capability
    * Describes the capability that is associated with this resource. (e.g. Messages, Conversations, etc.)  Not nullable. Read-only.
    *
    * @param string $val The capability
    *
    * @return Endpoint
    */
    public function setCapability($val)
    {
        $this->_propDict["capability"] = $val;
        return $this;
    }
    
    /**
    * Gets the providerId
    * Application id of the publishing underlying service. Not nullable. Read-only.
    *
    * @return string The providerId
    */
    public function getProviderId()
    {
        if (array_key_exists("providerId", $this->_propDict)) {
            return $this->_propDict["providerId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the providerId
    * Application id of the publishing underlying service. Not nullable. Read-only.
    *
    * @param string $val The providerId
    *
    * @return Endpoint
    */
    public function setProviderId($val)
    {
        $this->_propDict["providerId"] = $val;
        return $this;
    }
    
    /**
    * Gets the providerName
    * Name of the publishing underlying service. Read-only.
    *
    * @return string The providerName
    */
    public function getProviderName()
    {
        if (array_key_exists("providerName", $this->_propDict)) {
            return $this->_propDict["providerName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the providerName
    * Name of the publishing underlying service. Read-only.
    *
    * @param string $val The providerName
    *
    * @return Endpoint
    */
    public function setProviderName($val)
    {
        $this->_propDict["providerName"] = $val;
        return $this;
    }
    
    /**
    * Gets the providerResourceId
    * For Microsoft 365 groups, this is set to a well-known name for the resource (e.g. Yammer.FeedURL etc.). Not nullable. Read-only.
    *
    * @return string The providerResourceId
    */
    public function getProviderResourceId()
    {
        if (array_key_exists("providerResourceId", $this->_propDict)) {
            return $this->_propDict["providerResourceId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the providerResourceId
    * For Microsoft 365 groups, this is set to a well-known name for the resource (e.g. Yammer.FeedURL etc.). Not nullable. Read-only.
    *
    * @param string $val The providerResourceId
    *
    * @return Endpoint
    */
    public function setProviderResourceId($val)
    {
        $this->_propDict["providerResourceId"] = $val;
        return $this;
    }
    
    /**
    * Gets the uri
    * URL of the published resource. Not nullable. Read-only.
    *
    * @return string The uri
    */
    public function getUri()
    {
        if (array_key_exists("uri", $this->_propDict)) {
            return $this->_propDict["uri"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the uri
    * URL of the published resource. Not nullable. Read-only.
    *
    * @param string $val The uri
    *
    * @return Endpoint
    */
    public function setUri($val)
    {
        $this->_propDict["uri"] = $val;
        return $this;
    }
    
}
