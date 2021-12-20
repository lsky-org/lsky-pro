<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ExtendedKeyUsage File
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
* ExtendedKeyUsage class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ExtendedKeyUsage extends Entity
{
    /**
    * Gets the name
    * Extended Key Usage Name
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
    * Extended Key Usage Name
    *
    * @param string $val The value of the name
    *
    * @return ExtendedKeyUsage
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    /**
    * Gets the objectIdentifier
    * Extended Key Usage Object Identifier
    *
    * @return string The objectIdentifier
    */
    public function getObjectIdentifier()
    {
        if (array_key_exists("objectIdentifier", $this->_propDict)) {
            return $this->_propDict["objectIdentifier"];
        } else {
            return null;
        }
    }

    /**
    * Sets the objectIdentifier
    * Extended Key Usage Object Identifier
    *
    * @param string $val The value of the objectIdentifier
    *
    * @return ExtendedKeyUsage
    */
    public function setObjectIdentifier($val)
    {
        $this->_propDict["objectIdentifier"] = $val;
        return $this;
    }
}
