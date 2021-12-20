<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ProtectGroup File
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
* ProtectGroup class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ProtectGroup extends LabelActionBase
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.protectGroup");
    }

    /**
    * Gets the allowEmailFromGuestUsers
    *
    * @return bool The allowEmailFromGuestUsers
    */
    public function getAllowEmailFromGuestUsers()
    {
        if (array_key_exists("allowEmailFromGuestUsers", $this->_propDict)) {
            return $this->_propDict["allowEmailFromGuestUsers"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowEmailFromGuestUsers
    *
    * @param bool $val The value of the allowEmailFromGuestUsers
    *
    * @return ProtectGroup
    */
    public function setAllowEmailFromGuestUsers($val)
    {
        $this->_propDict["allowEmailFromGuestUsers"] = $val;
        return $this;
    }
    /**
    * Gets the allowGuestUsers
    *
    * @return bool The allowGuestUsers
    */
    public function getAllowGuestUsers()
    {
        if (array_key_exists("allowGuestUsers", $this->_propDict)) {
            return $this->_propDict["allowGuestUsers"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowGuestUsers
    *
    * @param bool $val The value of the allowGuestUsers
    *
    * @return ProtectGroup
    */
    public function setAllowGuestUsers($val)
    {
        $this->_propDict["allowGuestUsers"] = $val;
        return $this;
    }

    /**
    * Gets the privacy
    *
    * @return GroupPrivacy The privacy
    */
    public function getPrivacy()
    {
        if (array_key_exists("privacy", $this->_propDict)) {
            if (is_a($this->_propDict["privacy"], "\Beta\Microsoft\Graph\Model\GroupPrivacy")) {
                return $this->_propDict["privacy"];
            } else {
                $this->_propDict["privacy"] = new GroupPrivacy($this->_propDict["privacy"]);
                return $this->_propDict["privacy"];
            }
        }
        return null;
    }

    /**
    * Sets the privacy
    *
    * @param GroupPrivacy $val The value to assign to the privacy
    *
    * @return ProtectGroup The ProtectGroup
    */
    public function setPrivacy($val)
    {
        $this->_propDict["privacy"] = $val;
         return $this;
    }
}
