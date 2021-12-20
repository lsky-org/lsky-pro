<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UnsupportedDeviceConfiguration File
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
* UnsupportedDeviceConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UnsupportedDeviceConfiguration extends DeviceConfiguration
{

     /** 
     * Gets the details
    * Details describing why the entity is unsupported. This collection can contain a maximum of 1000 elements.
     *
     * @return array The details
     */
    public function getDetails()
    {
        if (array_key_exists("details", $this->_propDict)) {
           return $this->_propDict["details"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the details
    * Details describing why the entity is unsupported. This collection can contain a maximum of 1000 elements.
    *
    * @param UnsupportedDeviceConfigurationDetail $val The details
    *
    * @return UnsupportedDeviceConfiguration
    */
    public function setDetails($val)
    {
		$this->_propDict["details"] = $val;
        return $this;
    }
    
    /**
    * Gets the originalEntityTypeName
    * The type of entity that would be returned otherwise.
    *
    * @return string The originalEntityTypeName
    */
    public function getOriginalEntityTypeName()
    {
        if (array_key_exists("originalEntityTypeName", $this->_propDict)) {
            return $this->_propDict["originalEntityTypeName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the originalEntityTypeName
    * The type of entity that would be returned otherwise.
    *
    * @param string $val The originalEntityTypeName
    *
    * @return UnsupportedDeviceConfiguration
    */
    public function setOriginalEntityTypeName($val)
    {
        $this->_propDict["originalEntityTypeName"] = $val;
        return $this;
    }
    
}
