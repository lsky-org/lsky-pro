<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IPv6Range File
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
* IPv6Range class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IPv6Range extends IpRange
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.iPv6Range");
    }

    /**
    * Gets the lowerAddress
    * Lower address.
    *
    * @return string The lowerAddress
    */
    public function getLowerAddress()
    {
        if (array_key_exists("lowerAddress", $this->_propDict)) {
            return $this->_propDict["lowerAddress"];
        } else {
            return null;
        }
    }

    /**
    * Sets the lowerAddress
    * Lower address.
    *
    * @param string $val The value of the lowerAddress
    *
    * @return IPv6Range
    */
    public function setLowerAddress($val)
    {
        $this->_propDict["lowerAddress"] = $val;
        return $this;
    }
    /**
    * Gets the upperAddress
    * Upper address.
    *
    * @return string The upperAddress
    */
    public function getUpperAddress()
    {
        if (array_key_exists("upperAddress", $this->_propDict)) {
            return $this->_propDict["upperAddress"];
        } else {
            return null;
        }
    }

    /**
    * Sets the upperAddress
    * Upper address.
    *
    * @param string $val The value of the upperAddress
    *
    * @return IPv6Range
    */
    public function setUpperAddress($val)
    {
        $this->_propDict["upperAddress"] = $val;
        return $this;
    }
}
