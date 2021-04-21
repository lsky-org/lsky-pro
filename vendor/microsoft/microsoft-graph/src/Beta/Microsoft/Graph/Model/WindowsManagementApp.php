<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsManagementApp File
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
* WindowsManagementApp class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsManagementApp extends Entity
{
    /**
    * Gets the availableVersion
    * Windows management app available version.
    *
    * @return string The availableVersion
    */
    public function getAvailableVersion()
    {
        if (array_key_exists("availableVersion", $this->_propDict)) {
            return $this->_propDict["availableVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the availableVersion
    * Windows management app available version.
    *
    * @param string $val The availableVersion
    *
    * @return WindowsManagementApp
    */
    public function setAvailableVersion($val)
    {
        $this->_propDict["availableVersion"] = $val;
        return $this;
    }
    

     /** 
     * Gets the healthStates
    * The list of health states for installed Windows management app.
     *
     * @return array The healthStates
     */
    public function getHealthStates()
    {
        if (array_key_exists("healthStates", $this->_propDict)) {
           return $this->_propDict["healthStates"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the healthStates
    * The list of health states for installed Windows management app.
    *
    * @param WindowsManagementAppHealthState $val The healthStates
    *
    * @return WindowsManagementApp
    */
    public function setHealthStates($val)
    {
		$this->_propDict["healthStates"] = $val;
        return $this;
    }
    
}
