<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessPackageResourceAttribute File
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
* AccessPackageResourceAttribute class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessPackageResourceAttribute extends Entity
{

    /**
    * Gets the attributeDestination
    *
    * @return AccessPackageResourceAttributeDestination The attributeDestination
    */
    public function getAttributeDestination()
    {
        if (array_key_exists("attributeDestination", $this->_propDict)) {
            if (is_a($this->_propDict["attributeDestination"], "\Beta\Microsoft\Graph\Model\AccessPackageResourceAttributeDestination")) {
                return $this->_propDict["attributeDestination"];
            } else {
                $this->_propDict["attributeDestination"] = new AccessPackageResourceAttributeDestination($this->_propDict["attributeDestination"]);
                return $this->_propDict["attributeDestination"];
            }
        }
        return null;
    }

    /**
    * Sets the attributeDestination
    *
    * @param AccessPackageResourceAttributeDestination $val The value to assign to the attributeDestination
    *
    * @return AccessPackageResourceAttribute The AccessPackageResourceAttribute
    */
    public function setAttributeDestination($val)
    {
        $this->_propDict["attributeDestination"] = $val;
         return $this;
    }
    /**
    * Gets the attributeName
    *
    * @return string The attributeName
    */
    public function getAttributeName()
    {
        if (array_key_exists("attributeName", $this->_propDict)) {
            return $this->_propDict["attributeName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the attributeName
    *
    * @param string $val The value of the attributeName
    *
    * @return AccessPackageResourceAttribute
    */
    public function setAttributeName($val)
    {
        $this->_propDict["attributeName"] = $val;
        return $this;
    }

    /**
    * Gets the attributeSource
    *
    * @return AccessPackageResourceAttributeSource The attributeSource
    */
    public function getAttributeSource()
    {
        if (array_key_exists("attributeSource", $this->_propDict)) {
            if (is_a($this->_propDict["attributeSource"], "\Beta\Microsoft\Graph\Model\AccessPackageResourceAttributeSource")) {
                return $this->_propDict["attributeSource"];
            } else {
                $this->_propDict["attributeSource"] = new AccessPackageResourceAttributeSource($this->_propDict["attributeSource"]);
                return $this->_propDict["attributeSource"];
            }
        }
        return null;
    }

    /**
    * Sets the attributeSource
    *
    * @param AccessPackageResourceAttributeSource $val The value to assign to the attributeSource
    *
    * @return AccessPackageResourceAttribute The AccessPackageResourceAttribute
    */
    public function setAttributeSource($val)
    {
        $this->_propDict["attributeSource"] = $val;
         return $this;
    }
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
    * @return AccessPackageResourceAttribute
    */
    public function setId($val)
    {
        $this->_propDict["id"] = $val;
        return $this;
    }
}
