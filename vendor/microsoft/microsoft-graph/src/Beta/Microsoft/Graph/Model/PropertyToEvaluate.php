<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PropertyToEvaluate File
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
* PropertyToEvaluate class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PropertyToEvaluate extends Entity
{
    /**
    * Gets the propertyName
    * Provides the property name.
    *
    * @return string The propertyName
    */
    public function getPropertyName()
    {
        if (array_key_exists("propertyName", $this->_propDict)) {
            return $this->_propDict["propertyName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the propertyName
    * Provides the property name.
    *
    * @param string $val The value of the propertyName
    *
    * @return PropertyToEvaluate
    */
    public function setPropertyName($val)
    {
        $this->_propDict["propertyName"] = $val;
        return $this;
    }
    /**
    * Gets the propertyValue
    * Provides the property value.
    *
    * @return string The propertyValue
    */
    public function getPropertyValue()
    {
        if (array_key_exists("propertyValue", $this->_propDict)) {
            return $this->_propDict["propertyValue"];
        } else {
            return null;
        }
    }

    /**
    * Sets the propertyValue
    * Provides the property value.
    *
    * @param string $val The value of the propertyValue
    *
    * @return PropertyToEvaluate
    */
    public function setPropertyValue($val)
    {
        $this->_propDict["propertyValue"] = $val;
        return $this;
    }
}
