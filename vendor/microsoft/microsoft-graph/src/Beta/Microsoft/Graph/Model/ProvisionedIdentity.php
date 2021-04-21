<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ProvisionedIdentity File
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
* ProvisionedIdentity class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ProvisionedIdentity extends Entity
{

    /**
    * Gets the details
    * Details of the identity.
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
    * Details of the identity.
    *
    * @param DetailsInfo $val The value to assign to the details
    *
    * @return ProvisionedIdentity The ProvisionedIdentity
    */
    public function setDetails($val)
    {
        $this->_propDict["details"] = $val;
         return $this;
    }
    /**
    * Gets the displayName
    * Display name of the identity.
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
    * Display name of the identity.
    *
    * @param string $val The value of the displayName
    *
    * @return ProvisionedIdentity
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    /**
    * Gets the id
    * Uniquely identifies the identity.
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
    * Uniquely identifies the identity.
    *
    * @param string $val The value of the id
    *
    * @return ProvisionedIdentity
    */
    public function setId($val)
    {
        $this->_propDict["id"] = $val;
        return $this;
    }
    /**
    * Gets the identityType
    * Type of identity that has been provisioned, such as 'user' or 'group'.
    *
    * @return string The identityType
    */
    public function getIdentityType()
    {
        if (array_key_exists("identityType", $this->_propDict)) {
            return $this->_propDict["identityType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the identityType
    * Type of identity that has been provisioned, such as 'user' or 'group'.
    *
    * @param string $val The value of the identityType
    *
    * @return ProvisionedIdentity
    */
    public function setIdentityType($val)
    {
        $this->_propDict["identityType"] = $val;
        return $this;
    }
}
