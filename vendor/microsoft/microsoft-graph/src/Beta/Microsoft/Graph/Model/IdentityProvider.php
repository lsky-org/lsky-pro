<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IdentityProvider File
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
* IdentityProvider class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IdentityProvider extends Entity
{
    /**
    * Gets the clientId
    * The client ID for the application obtained when registering the application with the identity provider. This is a required field.  Required. Not nullable.
    *
    * @return string The clientId
    */
    public function getClientId()
    {
        if (array_key_exists("clientId", $this->_propDict)) {
            return $this->_propDict["clientId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the clientId
    * The client ID for the application obtained when registering the application with the identity provider. This is a required field.  Required. Not nullable.
    *
    * @param string $val The clientId
    *
    * @return IdentityProvider
    */
    public function setClientId($val)
    {
        $this->_propDict["clientId"] = $val;
        return $this;
    }
    
    /**
    * Gets the clientSecret
    * The client secret for the application obtained when registering the application with the identity provider. This is write-only. A read operation will return ****. This is a required field. Required. Not nullable.
    *
    * @return string The clientSecret
    */
    public function getClientSecret()
    {
        if (array_key_exists("clientSecret", $this->_propDict)) {
            return $this->_propDict["clientSecret"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the clientSecret
    * The client secret for the application obtained when registering the application with the identity provider. This is write-only. A read operation will return ****. This is a required field. Required. Not nullable.
    *
    * @param string $val The clientSecret
    *
    * @return IdentityProvider
    */
    public function setClientSecret($val)
    {
        $this->_propDict["clientSecret"] = $val;
        return $this;
    }
    
    /**
    * Gets the name
    * The display name of the identity provider. Not nullable.
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
    * The display name of the identity provider. Not nullable.
    *
    * @param string $val The name
    *
    * @return IdentityProvider
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    
    /**
    * Gets the type
    * The identity provider type is a required field. For B2B scenario: Google, Facebook. For B2C scenario: Microsoft, Google, Amazon, LinkedIn, Facebook, GitHub, Twitter, Weibo,QQ, WeChat, OpenIDConnect. Not nullable.
    *
    * @return string The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            return $this->_propDict["type"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the type
    * The identity provider type is a required field. For B2B scenario: Google, Facebook. For B2C scenario: Microsoft, Google, Amazon, LinkedIn, Facebook, GitHub, Twitter, Weibo,QQ, WeChat, OpenIDConnect. Not nullable.
    *
    * @param string $val The type
    *
    * @return IdentityProvider
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
        return $this;
    }
    
}
