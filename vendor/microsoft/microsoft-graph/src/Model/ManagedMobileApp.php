<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ManagedMobileApp File
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
* ManagedMobileApp class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ManagedMobileApp extends Entity
{
    /**
    * Gets the mobileAppIdentifier
    * The identifier for an app with it's operating system type.
    *
    * @return MobileAppIdentifier The mobileAppIdentifier
    */
    public function getMobileAppIdentifier()
    {
        if (array_key_exists("mobileAppIdentifier", $this->_propDict)) {
            if (is_a($this->_propDict["mobileAppIdentifier"], "\Microsoft\Graph\Model\MobileAppIdentifier")) {
                return $this->_propDict["mobileAppIdentifier"];
            } else {
                $this->_propDict["mobileAppIdentifier"] = new MobileAppIdentifier($this->_propDict["mobileAppIdentifier"]);
                return $this->_propDict["mobileAppIdentifier"];
            }
        }
        return null;
    }
    
    /**
    * Sets the mobileAppIdentifier
    * The identifier for an app with it's operating system type.
    *
    * @param MobileAppIdentifier $val The mobileAppIdentifier
    *
    * @return ManagedMobileApp
    */
    public function setMobileAppIdentifier($val)
    {
        $this->_propDict["mobileAppIdentifier"] = $val;
        return $this;
    }
    
    /**
    * Gets the version
    * Version of the entity.
    *
    * @return string The version
    */
    public function getVersion()
    {
        if (array_key_exists("version", $this->_propDict)) {
            return $this->_propDict["version"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the version
    * Version of the entity.
    *
    * @param string $val The version
    *
    * @return ManagedMobileApp
    */
    public function setVersion($val)
    {
        $this->_propDict["version"] = $val;
        return $this;
    }
    
}
