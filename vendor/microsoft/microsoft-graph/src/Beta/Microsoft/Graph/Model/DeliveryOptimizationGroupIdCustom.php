<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeliveryOptimizationGroupIdCustom File
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
* DeliveryOptimizationGroupIdCustom class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeliveryOptimizationGroupIdCustom extends DeliveryOptimizationGroupIdSource
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.deliveryOptimizationGroupIdCustom");
    }

    /**
    * Gets the groupIdCustom
    * Specifies an arbitrary group ID that the device belongs to
    *
    * @return string The groupIdCustom
    */
    public function getGroupIdCustom()
    {
        if (array_key_exists("groupIdCustom", $this->_propDict)) {
            return $this->_propDict["groupIdCustom"];
        } else {
            return null;
        }
    }

    /**
    * Sets the groupIdCustom
    * Specifies an arbitrary group ID that the device belongs to
    *
    * @param string $val The value of the groupIdCustom
    *
    * @return DeliveryOptimizationGroupIdCustom
    */
    public function setGroupIdCustom($val)
    {
        $this->_propDict["groupIdCustom"] = $val;
        return $this;
    }
}
