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
namespace Beta\Microsoft\Graph\Model;
/**
* Configuration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Configuration extends Entity
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
    /**
    * Gets the authorizedApps
    * A collection of application IDs for registered Azure Active Directory apps that are allowed to manage the externalConnection and to index content in the externalConnection.
    *
    * @return string The authorizedApps
    */
    public function getAuthorizedApps()
    {
        if (array_key_exists("authorizedApps", $this->_propDict)) {
            return $this->_propDict["authorizedApps"];
        } else {
            return null;
        }
    }

    /**
    * Sets the authorizedApps
    * A collection of application IDs for registered Azure Active Directory apps that are allowed to manage the externalConnection and to index content in the externalConnection.
    *
    * @param string $val The value of the authorizedApps
    *
    * @return Configuration
    */
    public function setAuthorizedApps($val)
    {
        $this->_propDict["authorizedApps"] = $val;
        return $this;
    }
}
