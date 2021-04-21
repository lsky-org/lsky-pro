<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RoleSuccessStatistics File
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
* RoleSuccessStatistics class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RoleSuccessStatistics extends Entity
{
    /**
    * Gets the permanentFail
    *
    * @return int The permanentFail
    */
    public function getPermanentFail()
    {
        if (array_key_exists("permanentFail", $this->_propDict)) {
            return $this->_propDict["permanentFail"];
        } else {
            return null;
        }
    }

    /**
    * Sets the permanentFail
    *
    * @param int $val The value of the permanentFail
    *
    * @return RoleSuccessStatistics
    */
    public function setPermanentFail($val)
    {
        $this->_propDict["permanentFail"] = $val;
        return $this;
    }
    /**
    * Gets the permanentSuccess
    *
    * @return int The permanentSuccess
    */
    public function getPermanentSuccess()
    {
        if (array_key_exists("permanentSuccess", $this->_propDict)) {
            return $this->_propDict["permanentSuccess"];
        } else {
            return null;
        }
    }

    /**
    * Sets the permanentSuccess
    *
    * @param int $val The value of the permanentSuccess
    *
    * @return RoleSuccessStatistics
    */
    public function setPermanentSuccess($val)
    {
        $this->_propDict["permanentSuccess"] = $val;
        return $this;
    }
    /**
    * Gets the removeFail
    *
    * @return int The removeFail
    */
    public function getRemoveFail()
    {
        if (array_key_exists("removeFail", $this->_propDict)) {
            return $this->_propDict["removeFail"];
        } else {
            return null;
        }
    }

    /**
    * Sets the removeFail
    *
    * @param int $val The value of the removeFail
    *
    * @return RoleSuccessStatistics
    */
    public function setRemoveFail($val)
    {
        $this->_propDict["removeFail"] = $val;
        return $this;
    }
    /**
    * Gets the removeSuccess
    *
    * @return int The removeSuccess
    */
    public function getRemoveSuccess()
    {
        if (array_key_exists("removeSuccess", $this->_propDict)) {
            return $this->_propDict["removeSuccess"];
        } else {
            return null;
        }
    }

    /**
    * Sets the removeSuccess
    *
    * @param int $val The value of the removeSuccess
    *
    * @return RoleSuccessStatistics
    */
    public function setRemoveSuccess($val)
    {
        $this->_propDict["removeSuccess"] = $val;
        return $this;
    }
    /**
    * Gets the roleId
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
    *
    * @param string $val The value of the roleId
    *
    * @return RoleSuccessStatistics
    */
    public function setRoleId($val)
    {
        $this->_propDict["roleId"] = $val;
        return $this;
    }
    /**
    * Gets the roleName
    *
    * @return string The roleName
    */
    public function getRoleName()
    {
        if (array_key_exists("roleName", $this->_propDict)) {
            return $this->_propDict["roleName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the roleName
    *
    * @param string $val The value of the roleName
    *
    * @return RoleSuccessStatistics
    */
    public function setRoleName($val)
    {
        $this->_propDict["roleName"] = $val;
        return $this;
    }
    /**
    * Gets the temporaryFail
    *
    * @return int The temporaryFail
    */
    public function getTemporaryFail()
    {
        if (array_key_exists("temporaryFail", $this->_propDict)) {
            return $this->_propDict["temporaryFail"];
        } else {
            return null;
        }
    }

    /**
    * Sets the temporaryFail
    *
    * @param int $val The value of the temporaryFail
    *
    * @return RoleSuccessStatistics
    */
    public function setTemporaryFail($val)
    {
        $this->_propDict["temporaryFail"] = $val;
        return $this;
    }
    /**
    * Gets the temporarySuccess
    *
    * @return int The temporarySuccess
    */
    public function getTemporarySuccess()
    {
        if (array_key_exists("temporarySuccess", $this->_propDict)) {
            return $this->_propDict["temporarySuccess"];
        } else {
            return null;
        }
    }

    /**
    * Sets the temporarySuccess
    *
    * @param int $val The value of the temporarySuccess
    *
    * @return RoleSuccessStatistics
    */
    public function setTemporarySuccess($val)
    {
        $this->_propDict["temporarySuccess"] = $val;
        return $this;
    }
    /**
    * Gets the unknownFail
    *
    * @return int The unknownFail
    */
    public function getUnknownFail()
    {
        if (array_key_exists("unknownFail", $this->_propDict)) {
            return $this->_propDict["unknownFail"];
        } else {
            return null;
        }
    }

    /**
    * Sets the unknownFail
    *
    * @param int $val The value of the unknownFail
    *
    * @return RoleSuccessStatistics
    */
    public function setUnknownFail($val)
    {
        $this->_propDict["unknownFail"] = $val;
        return $this;
    }
}
