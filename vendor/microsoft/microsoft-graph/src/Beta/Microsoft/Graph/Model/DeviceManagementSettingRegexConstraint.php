<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementSettingRegexConstraint File
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
* DeviceManagementSettingRegexConstraint class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementSettingRegexConstraint extends DeviceManagementConstraint
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.deviceManagementSettingRegexConstraint");
    }

    /**
    * Gets the regex
    * The RegEx pattern to match against
    *
    * @return string The regex
    */
    public function getRegex()
    {
        if (array_key_exists("regex", $this->_propDict)) {
            return $this->_propDict["regex"];
        } else {
            return null;
        }
    }

    /**
    * Sets the regex
    * The RegEx pattern to match against
    *
    * @param string $val The value of the regex
    *
    * @return DeviceManagementSettingRegexConstraint
    */
    public function setRegex($val)
    {
        $this->_propDict["regex"] = $val;
        return $this;
    }
}
