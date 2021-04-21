<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OnPremisesProvisioningError File
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
* OnPremisesProvisioningError class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OnPremisesProvisioningError extends Entity
{
    /**
    * Gets the category
    * Category of the provisioning error. Note: Currently, there is only one possible value. Possible value: PropertyConflict - indicates a property value is not unique. Other objects contain the same value for the property.
    *
    * @return string The category
    */
    public function getCategory()
    {
        if (array_key_exists("category", $this->_propDict)) {
            return $this->_propDict["category"];
        } else {
            return null;
        }
    }

    /**
    * Sets the category
    * Category of the provisioning error. Note: Currently, there is only one possible value. Possible value: PropertyConflict - indicates a property value is not unique. Other objects contain the same value for the property.
    *
    * @param string $val The value of the category
    *
    * @return OnPremisesProvisioningError
    */
    public function setCategory($val)
    {
        $this->_propDict["category"] = $val;
        return $this;
    }

    /**
    * Gets the occurredDateTime
    * The date and time at which the error occurred.
    *
    * @return \DateTime The occurredDateTime
    */
    public function getOccurredDateTime()
    {
        if (array_key_exists("occurredDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["occurredDateTime"], "\DateTime")) {
                return $this->_propDict["occurredDateTime"];
            } else {
                $this->_propDict["occurredDateTime"] = new \DateTime($this->_propDict["occurredDateTime"]);
                return $this->_propDict["occurredDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the occurredDateTime
    * The date and time at which the error occurred.
    *
    * @param \DateTime $val The value to assign to the occurredDateTime
    *
    * @return OnPremisesProvisioningError The OnPremisesProvisioningError
    */
    public function setOccurredDateTime($val)
    {
        $this->_propDict["occurredDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the propertyCausingError
    * Name of the directory property causing the error. Current possible values: UserPrincipalName or ProxyAddress
    *
    * @return string The propertyCausingError
    */
    public function getPropertyCausingError()
    {
        if (array_key_exists("propertyCausingError", $this->_propDict)) {
            return $this->_propDict["propertyCausingError"];
        } else {
            return null;
        }
    }

    /**
    * Sets the propertyCausingError
    * Name of the directory property causing the error. Current possible values: UserPrincipalName or ProxyAddress
    *
    * @param string $val The value of the propertyCausingError
    *
    * @return OnPremisesProvisioningError
    */
    public function setPropertyCausingError($val)
    {
        $this->_propDict["propertyCausingError"] = $val;
        return $this;
    }
    /**
    * Gets the value
    * Value of the property causing the error.
    *
    * @return string The value
    */
    public function getValue()
    {
        if (array_key_exists("value", $this->_propDict)) {
            return $this->_propDict["value"];
        } else {
            return null;
        }
    }

    /**
    * Sets the value
    * Value of the property causing the error.
    *
    * @param string $val The value of the value
    *
    * @return OnPremisesProvisioningError
    */
    public function setValue($val)
    {
        $this->_propDict["value"] = $val;
        return $this;
    }
}
