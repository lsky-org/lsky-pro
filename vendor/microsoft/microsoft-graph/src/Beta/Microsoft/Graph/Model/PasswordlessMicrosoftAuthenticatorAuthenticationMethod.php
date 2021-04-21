<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PasswordlessMicrosoftAuthenticatorAuthenticationMethod File
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
* PasswordlessMicrosoftAuthenticatorAuthenticationMethod class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PasswordlessMicrosoftAuthenticatorAuthenticationMethod extends AuthenticationMethod
{
    /**
    * Gets the createdDateTime
    *
    * @return \DateTime The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime")) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the createdDateTime
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return PasswordlessMicrosoftAuthenticatorAuthenticationMethod
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the creationDateTime
    * The timestamp when this method was registered to the user.
    *
    * @return \DateTime The creationDateTime
    */
    public function getCreationDateTime()
    {
        if (array_key_exists("creationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["creationDateTime"], "\DateTime")) {
                return $this->_propDict["creationDateTime"];
            } else {
                $this->_propDict["creationDateTime"] = new \DateTime($this->_propDict["creationDateTime"]);
                return $this->_propDict["creationDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the creationDateTime
    * The timestamp when this method was registered to the user.
    *
    * @param \DateTime $val The creationDateTime
    *
    * @return PasswordlessMicrosoftAuthenticatorAuthenticationMethod
    */
    public function setCreationDateTime($val)
    {
        $this->_propDict["creationDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * The display name of the mobile device as given by the user.
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
    * The display name of the mobile device as given by the user.
    *
    * @param string $val The displayName
    *
    * @return PasswordlessMicrosoftAuthenticatorAuthenticationMethod
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the device
    *
    * @return Device The device
    */
    public function getDevice()
    {
        if (array_key_exists("device", $this->_propDict)) {
            if (is_a($this->_propDict["device"], "\Beta\Microsoft\Graph\Model\Device")) {
                return $this->_propDict["device"];
            } else {
                $this->_propDict["device"] = new Device($this->_propDict["device"]);
                return $this->_propDict["device"];
            }
        }
        return null;
    }
    
    /**
    * Sets the device
    *
    * @param Device $val The device
    *
    * @return PasswordlessMicrosoftAuthenticatorAuthenticationMethod
    */
    public function setDevice($val)
    {
        $this->_propDict["device"] = $val;
        return $this;
    }
    
}
