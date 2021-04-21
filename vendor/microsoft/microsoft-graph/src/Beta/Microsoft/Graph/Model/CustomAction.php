<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CustomAction File
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
* CustomAction class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CustomAction extends InformationProtectionAction
{
    /**
    * Gets the name
    * Name of the custom action.
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
    * Name of the custom action.
    *
    * @param string $val The value of the name
    *
    * @return CustomAction
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }

    /**
    * Gets the customActionProperties
    * Properties, in key value pair format, of the action.
    *
    * @return KeyValuePair The customActionProperties
    */
    public function getCustomActionProperties()
    {
        if (array_key_exists("properties", $this->_propDict)) {
            if (is_a($this->_propDict["properties"], "\Beta\Microsoft\Graph\Model\KeyValuePair")) {
                return $this->_propDict["properties"];
            } else {
                $this->_propDict["properties"] = new KeyValuePair($this->_propDict["properties"]);
                return $this->_propDict["properties"];
            }
        }
        return null;
    }

    /**
    * Sets the customActionProperties
    * Properties, in key value pair format, of the action.
    *
    * @param KeyValuePair $val The value to assign to the properties
    *
    * @return CustomAction The CustomAction
    */
    public function setCustomActionProperties($val)
    {
        $this->_propDict["properties"] = $val;
         return $this;
    }
}
