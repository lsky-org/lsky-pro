<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ManagedApp File
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
* ManagedApp class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ManagedApp extends MobileApp
{
    /**
    * Gets the appAvailability
    * The Application's availability. Possible values are: global, lineOfBusiness.
    *
    * @return ManagedAppAvailability The appAvailability
    */
    public function getAppAvailability()
    {
        if (array_key_exists("appAvailability", $this->_propDict)) {
            if (is_a($this->_propDict["appAvailability"], "\Microsoft\Graph\Model\ManagedAppAvailability")) {
                return $this->_propDict["appAvailability"];
            } else {
                $this->_propDict["appAvailability"] = new ManagedAppAvailability($this->_propDict["appAvailability"]);
                return $this->_propDict["appAvailability"];
            }
        }
        return null;
    }
    
    /**
    * Sets the appAvailability
    * The Application's availability. Possible values are: global, lineOfBusiness.
    *
    * @param ManagedAppAvailability $val The appAvailability
    *
    * @return ManagedApp
    */
    public function setAppAvailability($val)
    {
        $this->_propDict["appAvailability"] = $val;
        return $this;
    }
    
    /**
    * Gets the version
    * The Application's version.
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
    * The Application's version.
    *
    * @param string $val The version
    *
    * @return ManagedApp
    */
    public function setVersion($val)
    {
        $this->_propDict["version"] = $val;
        return $this;
    }
    
}
