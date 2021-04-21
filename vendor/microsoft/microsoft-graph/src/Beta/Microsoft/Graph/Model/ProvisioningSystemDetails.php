<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ProvisioningSystemDetails File
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
* ProvisioningSystemDetails class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ProvisioningSystemDetails extends Entity
{

    /**
    * Gets the details
    * Details of the system.
    *
    * @return DetailsInfo The details
    */
    public function getDetails()
    {
        if (array_key_exists("details", $this->_propDict)) {
            if (is_a($this->_propDict["details"], "\Beta\Microsoft\Graph\Model\DetailsInfo")) {
                return $this->_propDict["details"];
            } else {
                $this->_propDict["details"] = new DetailsInfo($this->_propDict["details"]);
                return $this->_propDict["details"];
            }
        }
        return null;
    }

    /**
    * Sets the details
    * Details of the system.
    *
    * @param DetailsInfo $val The value to assign to the details
    *
    * @return ProvisioningSystemDetails The ProvisioningSystemDetails
    */
    public function setDetails($val)
    {
        $this->_propDict["details"] = $val;
         return $this;
    }
    /**
    * Gets the displayName
    * Name of the system that a user was provisioned to or from.
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
    * Name of the system that a user was provisioned to or from.
    *
    * @param string $val The value of the displayName
    *
    * @return ProvisioningSystemDetails
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    /**
    * Gets the id
    * Identifier of the system that a user was provisioned to or from.
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
    * Identifier of the system that a user was provisioned to or from.
    *
    * @param string $val The value of the id
    *
    * @return ProvisioningSystemDetails
    */
    public function setId($val)
    {
        $this->_propDict["id"] = $val;
        return $this;
    }
}
