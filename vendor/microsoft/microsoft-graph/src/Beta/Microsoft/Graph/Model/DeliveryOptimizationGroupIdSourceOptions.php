<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeliveryOptimizationGroupIdSourceOptions File
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
* DeliveryOptimizationGroupIdSourceOptions class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeliveryOptimizationGroupIdSourceOptions extends DeliveryOptimizationGroupIdSource
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.deliveryOptimizationGroupIdSourceOptions");
    }


    /**
    * Gets the groupIdSourceOption
    * Set this policy to restrict peer selection to a specific source. Possible values are: notConfigured, adSite, authenticatedDomainSid, dhcpUserOption, dnsSuffix.
    *
    * @return DeliveryOptimizationGroupIdOptionsType The groupIdSourceOption
    */
    public function getGroupIdSourceOption()
    {
        if (array_key_exists("groupIdSourceOption", $this->_propDict)) {
            if (is_a($this->_propDict["groupIdSourceOption"], "\Beta\Microsoft\Graph\Model\DeliveryOptimizationGroupIdOptionsType")) {
                return $this->_propDict["groupIdSourceOption"];
            } else {
                $this->_propDict["groupIdSourceOption"] = new DeliveryOptimizationGroupIdOptionsType($this->_propDict["groupIdSourceOption"]);
                return $this->_propDict["groupIdSourceOption"];
            }
        }
        return null;
    }

    /**
    * Sets the groupIdSourceOption
    * Set this policy to restrict peer selection to a specific source. Possible values are: notConfigured, adSite, authenticatedDomainSid, dhcpUserOption, dnsSuffix.
    *
    * @param DeliveryOptimizationGroupIdOptionsType $val The value to assign to the groupIdSourceOption
    *
    * @return DeliveryOptimizationGroupIdSourceOptions The DeliveryOptimizationGroupIdSourceOptions
    */
    public function setGroupIdSourceOption($val)
    {
        $this->_propDict["groupIdSourceOption"] = $val;
         return $this;
    }
}
