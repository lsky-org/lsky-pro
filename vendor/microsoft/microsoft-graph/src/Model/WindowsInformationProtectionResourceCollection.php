<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsInformationProtectionResourceCollection File
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
* WindowsInformationProtectionResourceCollection class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsInformationProtectionResourceCollection extends Entity
{
    /**
    * Gets the displayName
    * Display name
    *
    * @return string The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayName
    * Display name
    *
    * @param string $val The value of the displayName
    *
    * @return WindowsInformationProtectionResourceCollection
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    /**
    * Gets the resources
    * Collection of resources
    *
    * @return string The resources
    */
    public function getResources()
    {
        if (array_key_exists("resources", $this->_propDict)) {
            return $this->_propDict["resources"];
        } else {
            return null;
        }
    }

    /**
    * Sets the resources
    * Collection of resources
    *
    * @param string $val The value of the resources
    *
    * @return WindowsInformationProtectionResourceCollection
    */
    public function setResources($val)
    {
        $this->_propDict["resources"] = $val;
        return $this;
    }
}
