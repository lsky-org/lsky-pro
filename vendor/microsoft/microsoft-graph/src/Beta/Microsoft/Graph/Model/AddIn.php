<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AddIn File
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
* AddIn class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AddIn extends Entity
{
    /**
    * Gets the id
    *
    * @return string The id
    */
    public function getId()
    {
        if (array_key_exists("id", $this->_propDict)) {
            return $this->_propDict["id"];
        } else {
            return null;
        }
    }

    /**
    * Sets the id
    *
    * @param string $val The value of the id
    *
    * @return AddIn
    */
    public function setId($val)
    {
        $this->_propDict["id"] = $val;
        return $this;
    }

    /**
    * Gets the addInProperties
    *
    * @return KeyValue The addInProperties
    */
    public function getAddInProperties()
    {
        if (array_key_exists("properties", $this->_propDict)) {
            if (is_a($this->_propDict["properties"], "\Beta\Microsoft\Graph\Model\KeyValue")) {
                return $this->_propDict["properties"];
            } else {
                $this->_propDict["properties"] = new KeyValue($this->_propDict["properties"]);
                return $this->_propDict["properties"];
            }
        }
        return null;
    }

    /**
    * Sets the addInProperties
    *
    * @param KeyValue $val The value to assign to the properties
    *
    * @return AddIn The AddIn
    */
    public function setAddInProperties($val)
    {
        $this->_propDict["properties"] = $val;
         return $this;
    }
    /**
    * Gets the type
    *
    * @return string The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            return $this->_propDict["type"];
        } else {
            return null;
        }
    }

    /**
    * Sets the type
    *
    * @param string $val The value of the type
    *
    * @return AddIn
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
        return $this;
    }
}
