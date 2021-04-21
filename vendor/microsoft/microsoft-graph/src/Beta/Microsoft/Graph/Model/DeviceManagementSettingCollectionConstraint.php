<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementSettingCollectionConstraint File
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
* DeviceManagementSettingCollectionConstraint class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementSettingCollectionConstraint extends DeviceManagementConstraint
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.deviceManagementSettingCollectionConstraint");
    }

    /**
    * Gets the maximumLength
    * The maximum number of elements in the collection
    *
    * @return int The maximumLength
    */
    public function getMaximumLength()
    {
        if (array_key_exists("maximumLength", $this->_propDict)) {
            return $this->_propDict["maximumLength"];
        } else {
            return null;
        }
    }

    /**
    * Sets the maximumLength
    * The maximum number of elements in the collection
    *
    * @param int $val The value of the maximumLength
    *
    * @return DeviceManagementSettingCollectionConstraint
    */
    public function setMaximumLength($val)
    {
        $this->_propDict["maximumLength"] = $val;
        return $this;
    }
    /**
    * Gets the minimumLength
    * The minimum number of elements in the collection
    *
    * @return int The minimumLength
    */
    public function getMinimumLength()
    {
        if (array_key_exists("minimumLength", $this->_propDict)) {
            return $this->_propDict["minimumLength"];
        } else {
            return null;
        }
    }

    /**
    * Sets the minimumLength
    * The minimum number of elements in the collection
    *
    * @param int $val The value of the minimumLength
    *
    * @return DeviceManagementSettingCollectionConstraint
    */
    public function setMinimumLength($val)
    {
        $this->_propDict["minimumLength"] = $val;
        return $this;
    }
}
