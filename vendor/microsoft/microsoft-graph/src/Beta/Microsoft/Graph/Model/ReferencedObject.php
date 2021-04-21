<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ReferencedObject File
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
* ReferencedObject class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ReferencedObject extends Entity
{
    /**
    * Gets the referencedObjectName
    * Name of the referenced object. Must match one of the objects in the directory definition.
    *
    * @return string The referencedObjectName
    */
    public function getReferencedObjectName()
    {
        if (array_key_exists("referencedObjectName", $this->_propDict)) {
            return $this->_propDict["referencedObjectName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the referencedObjectName
    * Name of the referenced object. Must match one of the objects in the directory definition.
    *
    * @param string $val The value of the referencedObjectName
    *
    * @return ReferencedObject
    */
    public function setReferencedObjectName($val)
    {
        $this->_propDict["referencedObjectName"] = $val;
        return $this;
    }
    /**
    * Gets the referencedProperty
    * Currently not supported. Name of the property in the referenced object, the value for which is used as the reference.
    *
    * @return string The referencedProperty
    */
    public function getReferencedProperty()
    {
        if (array_key_exists("referencedProperty", $this->_propDict)) {
            return $this->_propDict["referencedProperty"];
        } else {
            return null;
        }
    }

    /**
    * Sets the referencedProperty
    * Currently not supported. Name of the property in the referenced object, the value for which is used as the reference.
    *
    * @param string $val The value of the referencedProperty
    *
    * @return ReferencedObject
    */
    public function setReferencedProperty($val)
    {
        $this->_propDict["referencedProperty"] = $val;
        return $this;
    }
}
