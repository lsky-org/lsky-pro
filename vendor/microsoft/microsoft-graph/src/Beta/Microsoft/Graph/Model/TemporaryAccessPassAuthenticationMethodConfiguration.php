<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TemporaryAccessPassAuthenticationMethodConfiguration File
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
* TemporaryAccessPassAuthenticationMethodConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TemporaryAccessPassAuthenticationMethodConfiguration extends AuthenticationMethodConfiguration
{
    /**
    * Gets the defaultLength
    *
    * @return int The defaultLength
    */
    public function getDefaultLength()
    {
        if (array_key_exists("defaultLength", $this->_propDict)) {
            return $this->_propDict["defaultLength"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the defaultLength
    *
    * @param int $val The defaultLength
    *
    * @return TemporaryAccessPassAuthenticationMethodConfiguration
    */
    public function setDefaultLength($val)
    {
        $this->_propDict["defaultLength"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the defaultLifetimeInMinutes
    *
    * @return int The defaultLifetimeInMinutes
    */
    public function getDefaultLifetimeInMinutes()
    {
        if (array_key_exists("defaultLifetimeInMinutes", $this->_propDict)) {
            return $this->_propDict["defaultLifetimeInMinutes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the defaultLifetimeInMinutes
    *
    * @param int $val The defaultLifetimeInMinutes
    *
    * @return TemporaryAccessPassAuthenticationMethodConfiguration
    */
    public function setDefaultLifetimeInMinutes($val)
    {
        $this->_propDict["defaultLifetimeInMinutes"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the isUsableOnce
    *
    * @return bool The isUsableOnce
    */
    public function getIsUsableOnce()
    {
        if (array_key_exists("isUsableOnce", $this->_propDict)) {
            return $this->_propDict["isUsableOnce"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isUsableOnce
    *
    * @param bool $val The isUsableOnce
    *
    * @return TemporaryAccessPassAuthenticationMethodConfiguration
    */
    public function setIsUsableOnce($val)
    {
        $this->_propDict["isUsableOnce"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the maximumLifetimeInMinutes
    *
    * @return int The maximumLifetimeInMinutes
    */
    public function getMaximumLifetimeInMinutes()
    {
        if (array_key_exists("maximumLifetimeInMinutes", $this->_propDict)) {
            return $this->_propDict["maximumLifetimeInMinutes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the maximumLifetimeInMinutes
    *
    * @param int $val The maximumLifetimeInMinutes
    *
    * @return TemporaryAccessPassAuthenticationMethodConfiguration
    */
    public function setMaximumLifetimeInMinutes($val)
    {
        $this->_propDict["maximumLifetimeInMinutes"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the minimumLifetimeInMinutes
    *
    * @return int The minimumLifetimeInMinutes
    */
    public function getMinimumLifetimeInMinutes()
    {
        if (array_key_exists("minimumLifetimeInMinutes", $this->_propDict)) {
            return $this->_propDict["minimumLifetimeInMinutes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the minimumLifetimeInMinutes
    *
    * @param int $val The minimumLifetimeInMinutes
    *
    * @return TemporaryAccessPassAuthenticationMethodConfiguration
    */
    public function setMinimumLifetimeInMinutes($val)
    {
        $this->_propDict["minimumLifetimeInMinutes"] = intval($val);
        return $this;
    }
    

     /** 
     * Gets the includeTargets
     *
     * @return array The includeTargets
     */
    public function getIncludeTargets()
    {
        if (array_key_exists("includeTargets", $this->_propDict)) {
           return $this->_propDict["includeTargets"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the includeTargets
    *
    * @param AuthenticationMethodTarget $val The includeTargets
    *
    * @return TemporaryAccessPassAuthenticationMethodConfiguration
    */
    public function setIncludeTargets($val)
    {
		$this->_propDict["includeTargets"] = $val;
        return $this;
    }
    
}
