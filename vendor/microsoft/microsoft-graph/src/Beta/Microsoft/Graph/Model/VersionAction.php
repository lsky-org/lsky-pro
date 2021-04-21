<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* VersionAction File
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
* VersionAction class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class VersionAction extends Entity
{
    /**
    * Gets the newVersion
    * The name of the new version that was created by this action.
    *
    * @return string The newVersion
    */
    public function getNewVersion()
    {
        if (array_key_exists("newVersion", $this->_propDict)) {
            return $this->_propDict["newVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the newVersion
    * The name of the new version that was created by this action.
    *
    * @param string $val The value of the newVersion
    *
    * @return VersionAction
    */
    public function setNewVersion($val)
    {
        $this->_propDict["newVersion"] = $val;
        return $this;
    }
}
