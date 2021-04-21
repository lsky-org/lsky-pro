<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AllowedDataLocation File
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
* AllowedDataLocation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AllowedDataLocation extends Entity
{
    /**
    * Gets the appId
    *
    * @return string The appId
    */
    public function getAppId()
    {
        if (array_key_exists("appId", $this->_propDict)) {
            return $this->_propDict["appId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appId
    *
    * @param string $val The appId
    *
    * @return AllowedDataLocation
    */
    public function setAppId($val)
    {
        $this->_propDict["appId"] = $val;
        return $this;
    }
    
    /**
    * Gets the domain
    *
    * @return string The domain
    */
    public function getDomain()
    {
        if (array_key_exists("domain", $this->_propDict)) {
            return $this->_propDict["domain"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the domain
    *
    * @param string $val The domain
    *
    * @return AllowedDataLocation
    */
    public function setDomain($val)
    {
        $this->_propDict["domain"] = $val;
        return $this;
    }
    
    /**
    * Gets the isDefault
    *
    * @return bool The isDefault
    */
    public function getIsDefault()
    {
        if (array_key_exists("isDefault", $this->_propDict)) {
            return $this->_propDict["isDefault"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isDefault
    *
    * @param bool $val The isDefault
    *
    * @return AllowedDataLocation
    */
    public function setIsDefault($val)
    {
        $this->_propDict["isDefault"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the location
    *
    * @return string The location
    */
    public function getLocation()
    {
        if (array_key_exists("location", $this->_propDict)) {
            return $this->_propDict["location"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the location
    *
    * @param string $val The location
    *
    * @return AllowedDataLocation
    */
    public function setLocation($val)
    {
        $this->_propDict["location"] = $val;
        return $this;
    }
    
}
