<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Initiator File
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
* Initiator class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Initiator extends Entity
{
    /**
    * Gets the displayName
    * Name of the person or service that initiated the provisioning event.
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
    * Name of the person or service that initiated the provisioning event.
    *
    * @param string $val The value of the displayName
    *
    * @return Initiator
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    /**
    * Gets the id
    * Uniquely identifies the person or service that initiated the provisioning event.
    *
    * @return string The id
    */
    public function getId()
    {
        if (array_key_exists("id", $this->_propDict)) {
            return $this->_propDict["id"];
        } else {
            return null;
        }
    }

    /**
    * Sets the id
    * Uniquely identifies the person or service that initiated the provisioning event.
    *
    * @param string $val The value of the id
    *
    * @return Initiator
    */
    public function setId($val)
    {
        $this->_propDict["id"] = $val;
        return $this;
    }

    /**
    * Gets the initiatorType
    * Type of initiator. Possible values are: user, app, system, unknownFutureValue.
    *
    * @return InitiatorType The initiatorType
    */
    public function getInitiatorType()
    {
        if (array_key_exists("initiatorType", $this->_propDict)) {
            if (is_a($this->_propDict["initiatorType"], "\Beta\Microsoft\Graph\Model\InitiatorType")) {
                return $this->_propDict["initiatorType"];
            } else {
                $this->_propDict["initiatorType"] = new InitiatorType($this->_propDict["initiatorType"]);
                return $this->_propDict["initiatorType"];
            }
        }
        return null;
    }

    /**
    * Sets the initiatorType
    * Type of initiator. Possible values are: user, app, system, unknownFutureValue.
    *
    * @param InitiatorType $val The value to assign to the initiatorType
    *
    * @return Initiator The Initiator
    */
    public function setInitiatorType($val)
    {
        $this->_propDict["initiatorType"] = $val;
         return $this;
    }
}
