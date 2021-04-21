<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrivilegedRoleAssignment File
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
* PrivilegedRoleAssignment class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PrivilegedRoleAssignment extends Entity
{
    /**
    * Gets the expirationDateTime
    * The UTC DateTime when the temporary privileged role assignment will be expired. For permanent role assignment, the value is null.
    *
    * @return \DateTime The expirationDateTime
    */
    public function getExpirationDateTime()
    {
        if (array_key_exists("expirationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["expirationDateTime"], "\DateTime")) {
                return $this->_propDict["expirationDateTime"];
            } else {
                $this->_propDict["expirationDateTime"] = new \DateTime($this->_propDict["expirationDateTime"]);
                return $this->_propDict["expirationDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the expirationDateTime
    * The UTC DateTime when the temporary privileged role assignment will be expired. For permanent role assignment, the value is null.
    *
    * @param \DateTime $val The expirationDateTime
    *
    * @return PrivilegedRoleAssignment
    */
    public function setExpirationDateTime($val)
    {
        $this->_propDict["expirationDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the isElevated
    * true if the role assignment is activated. false if the role assignment is deactivated.
    *
    * @return bool The isElevated
    */
    public function getIsElevated()
    {
        if (array_key_exists("isElevated", $this->_propDict)) {
            return $this->_propDict["isElevated"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isElevated
    * true if the role assignment is activated. false if the role assignment is deactivated.
    *
    * @param bool $val The isElevated
    *
    * @return PrivilegedRoleAssignment
    */
    public function setIsElevated($val)
    {
        $this->_propDict["isElevated"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the resultMessage
    * Result message set by the service.
    *
    * @return string The resultMessage
    */
    public function getResultMessage()
    {
        if (array_key_exists("resultMessage", $this->_propDict)) {
            return $this->_propDict["resultMessage"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the resultMessage
    * Result message set by the service.
    *
    * @param string $val The resultMessage
    *
    * @return PrivilegedRoleAssignment
    */
    public function setResultMessage($val)
    {
        $this->_propDict["resultMessage"] = $val;
        return $this;
    }
    
    /**
    * Gets the roleId
    * Role identifier. In GUID string format.
    *
    * @return string The roleId
    */
    public function getRoleId()
    {
        if (array_key_exists("roleId", $this->_propDict)) {
            return $this->_propDict["roleId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the roleId
    * Role identifier. In GUID string format.
    *
    * @param string $val The roleId
    *
    * @return PrivilegedRoleAssignment
    */
    public function setRoleId($val)
    {
        $this->_propDict["roleId"] = $val;
        return $this;
    }
    
    /**
    * Gets the userId
    * User identifier. In GUID string format.
    *
    * @return string The userId
    */
    public function getUserId()
    {
        if (array_key_exists("userId", $this->_propDict)) {
            return $this->_propDict["userId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userId
    * User identifier. In GUID string format.
    *
    * @param string $val The userId
    *
    * @return PrivilegedRoleAssignment
    */
    public function setUserId($val)
    {
        $this->_propDict["userId"] = $val;
        return $this;
    }
    
    /**
    * Gets the roleInfo
    * Read-only. Nullable. The associated role information.
    *
    * @return PrivilegedRole The roleInfo
    */
    public function getRoleInfo()
    {
        if (array_key_exists("roleInfo", $this->_propDict)) {
            if (is_a($this->_propDict["roleInfo"], "\Beta\Microsoft\Graph\Model\PrivilegedRole")) {
                return $this->_propDict["roleInfo"];
            } else {
                $this->_propDict["roleInfo"] = new PrivilegedRole($this->_propDict["roleInfo"]);
                return $this->_propDict["roleInfo"];
            }
        }
        return null;
    }
    
    /**
    * Sets the roleInfo
    * Read-only. Nullable. The associated role information.
    *
    * @param PrivilegedRole $val The roleInfo
    *
    * @return PrivilegedRoleAssignment
    */
    public function setRoleInfo($val)
    {
        $this->_propDict["roleInfo"] = $val;
        return $this;
    }
    
}
