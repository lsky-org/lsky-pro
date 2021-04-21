<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EdgeHomeButtonOpensCustomURL File
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
* EdgeHomeButtonOpensCustomURL class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EdgeHomeButtonOpensCustomURL extends EdgeHomeButtonConfiguration
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.edgeHomeButtonOpensCustomURL");
    }

    /**
    * Gets the homeButtonCustomURL
    * The specific URL to load.
    *
    * @return string The homeButtonCustomURL
    */
    public function getHomeButtonCustomURL()
    {
        if (array_key_exists("homeButtonCustomURL", $this->_propDict)) {
            return $this->_propDict["homeButtonCustomURL"];
        } else {
            return null;
        }
    }

    /**
    * Sets the homeButtonCustomURL
    * The specific URL to load.
    *
    * @param string $val The value of the homeButtonCustomURL
    *
    * @return EdgeHomeButtonOpensCustomURL
    */
    public function setHomeButtonCustomURL($val)
    {
        $this->_propDict["homeButtonCustomURL"] = $val;
        return $this;
    }
}
