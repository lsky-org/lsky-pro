<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SideLoadingKey File
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
* SideLoadingKey class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SideLoadingKey extends Entity
{
    /**
    * Gets the description
    * Side Loading Key description displayed to the ITPro Admins..
    *
    * @return string The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the description
    * Side Loading Key description displayed to the ITPro Admins..
    *
    * @param string $val The description
    *
    * @return SideLoadingKey
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * Side Loading Key Name displayed to the ITPro Admins.
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
    * Side Loading Key Name displayed to the ITPro Admins.
    *
    * @param string $val The displayName
    *
    * @return SideLoadingKey
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastUpdatedDateTime
    * Side Loading Key Last Updated Date displayed to the ITPro Admins.
    *
    * @return string The lastUpdatedDateTime
    */
    public function getLastUpdatedDateTime()
    {
        if (array_key_exists("lastUpdatedDateTime", $this->_propDict)) {
            return $this->_propDict["lastUpdatedDateTime"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the lastUpdatedDateTime
    * Side Loading Key Last Updated Date displayed to the ITPro Admins.
    *
    * @param string $val The lastUpdatedDateTime
    *
    * @return SideLoadingKey
    */
    public function setLastUpdatedDateTime($val)
    {
        $this->_propDict["lastUpdatedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the totalActivation
    * Side Loading Key Total Activation displayed to the ITPro Admins.
    *
    * @return int The totalActivation
    */
    public function getTotalActivation()
    {
        if (array_key_exists("totalActivation", $this->_propDict)) {
            return $this->_propDict["totalActivation"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the totalActivation
    * Side Loading Key Total Activation displayed to the ITPro Admins.
    *
    * @param int $val The totalActivation
    *
    * @return SideLoadingKey
    */
    public function setTotalActivation($val)
    {
        $this->_propDict["totalActivation"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the value
    * Side Loading Key Value, it is 5x5 value, seperated by hiphens.
    *
    * @return string The value
    */
    public function getValue()
    {
        if (array_key_exists("value", $this->_propDict)) {
            return $this->_propDict["value"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the value
    * Side Loading Key Value, it is 5x5 value, seperated by hiphens.
    *
    * @param string $val The value
    *
    * @return SideLoadingKey
    */
    public function setValue($val)
    {
        $this->_propDict["value"] = $val;
        return $this;
    }
    
}
