<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Configuration File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\ExternalConnectors\Model;
/**
* Configuration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Configuration extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the authorizedAppIds
    *
    * @return string The authorizedAppIds
    */
    public function getAuthorizedAppIds()
    {
        if (array_key_exists("authorizedAppIds", $this->_propDict)) {
            return $this->_propDict["authorizedAppIds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the authorizedAppIds
    *
    * @param string $val The value of the authorizedAppIds
    *
    * @return Configuration
    */
    public function setAuthorizedAppIds($val)
    {
        $this->_propDict["authorizedAppIds"] = $val;
        return $this;
    }
}
