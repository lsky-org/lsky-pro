<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidManagedAppRegistration File
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
* AndroidManagedAppRegistration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AndroidManagedAppRegistration extends ManagedAppRegistration
{
    /**
    * Gets the patchVersion
    * The patch version for the current android app registration
    *
    * @return string The patchVersion
    */
    public function getPatchVersion()
    {
        if (array_key_exists("patchVersion", $this->_propDict)) {
            return $this->_propDict["patchVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the patchVersion
    * The patch version for the current android app registration
    *
    * @param string $val The patchVersion
    *
    * @return AndroidManagedAppRegistration
    */
    public function setPatchVersion($val)
    {
        $this->_propDict["patchVersion"] = $val;
        return $this;
    }
    
}
