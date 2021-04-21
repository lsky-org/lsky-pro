<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PersonType File
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
* PersonType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PersonType extends Entity
{
    /**
    * Gets the class
    * The type of data source, such as Person.
    *
    * @return string The class
    */
    public function getClass()
    {
        if (array_key_exists("class", $this->_propDict)) {
            return $this->_propDict["class"];
        } else {
            return null;
        }
    }

    /**
    * Sets the class
    * The type of data source, such as Person.
    *
    * @param string $val The value of the class
    *
    * @return PersonType
    */
    public function setClass($val)
    {
        $this->_propDict["class"] = $val;
        return $this;
    }
    /**
    * Gets the subclass
    * The secondary type of data source, such as OrganizationUser.
    *
    * @return string The subclass
    */
    public function getSubclass()
    {
        if (array_key_exists("subclass", $this->_propDict)) {
            return $this->_propDict["subclass"];
        } else {
            return null;
        }
    }

    /**
    * Sets the subclass
    * The secondary type of data source, such as OrganizationUser.
    *
    * @param string $val The value of the subclass
    *
    * @return PersonType
    */
    public function setSubclass($val)
    {
        $this->_propDict["subclass"] = $val;
        return $this;
    }
}
