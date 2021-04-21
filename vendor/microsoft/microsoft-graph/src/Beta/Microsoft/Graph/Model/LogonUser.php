<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* LogonUser File
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
* LogonUser class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class LogonUser extends Entity
{
    /**
    * Gets the accountDomain
    * Domain of user account used to logon.
    *
    * @return string The accountDomain
    */
    public function getAccountDomain()
    {
        if (array_key_exists("accountDomain", $this->_propDict)) {
            return $this->_propDict["accountDomain"];
        } else {
            return null;
        }
    }

    /**
    * Sets the accountDomain
    * Domain of user account used to logon.
    *
    * @param string $val The value of the accountDomain
    *
    * @return LogonUser
    */
    public function setAccountDomain($val)
    {
        $this->_propDict["accountDomain"] = $val;
        return $this;
    }
    /**
    * Gets the accountName
    * Account name of user account used to logon.
    *
    * @return string The accountName
    */
    public function getAccountName()
    {
        if (array_key_exists("accountName", $this->_propDict)) {
            return $this->_propDict["accountName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the accountName
    * Account name of user account used to logon.
    *
    * @param string $val The value of the accountName
    *
    * @return LogonUser
    */
    public function setAccountName($val)
    {
        $this->_propDict["accountName"] = $val;
        return $this;
    }

    /**
    * Gets the accountType
    * User Account type, per Windows definition. Possible values are: unknown, standard, power, administrator.
    *
    * @return UserAccountSecurityType The accountType
    */
    public function getAccountType()
    {
        if (array_key_exists("accountType", $this->_propDict)) {
            if (is_a($this->_propDict["accountType"], "\Beta\Microsoft\Graph\Model\UserAccountSecurityType")) {
                return $this->_propDict["accountType"];
            } else {
                $this->_propDict["accountType"] = new UserAccountSecurityType($this->_propDict["accountType"]);
                return $this->_propDict["accountType"];
            }
        }
        return null;
    }

    /**
    * Sets the accountType
    * User Account type, per Windows definition. Possible values are: unknown, standard, power, administrator.
    *
    * @param UserAccountSecurityType $val The value to assign to the accountType
    *
    * @return LogonUser The LogonUser
    */
    public function setAccountType($val)
    {
        $this->_propDict["accountType"] = $val;
         return $this;
    }

    /**
    * Gets the firstSeenDateTime
    * DateTime at which the earliest logon by this user account occurred (provider-determined period). The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @return \DateTime The firstSeenDateTime
    */
    public function getFirstSeenDateTime()
    {
        if (array_key_exists("firstSeenDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["firstSeenDateTime"], "\DateTime")) {
                return $this->_propDict["firstSeenDateTime"];
            } else {
                $this->_propDict["firstSeenDateTime"] = new \DateTime($this->_propDict["firstSeenDateTime"]);
                return $this->_propDict["firstSeenDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the firstSeenDateTime
    * DateTime at which the earliest logon by this user account occurred (provider-determined period). The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The value to assign to the firstSeenDateTime
    *
    * @return LogonUser The LogonUser
    */
    public function setFirstSeenDateTime($val)
    {
        $this->_propDict["firstSeenDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the lastSeenDateTime
    * DateTime at which the latest logon by this user account occurred. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @return \DateTime The lastSeenDateTime
    */
    public function getLastSeenDateTime()
    {
        if (array_key_exists("lastSeenDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastSeenDateTime"], "\DateTime")) {
                return $this->_propDict["lastSeenDateTime"];
            } else {
                $this->_propDict["lastSeenDateTime"] = new \DateTime($this->_propDict["lastSeenDateTime"]);
                return $this->_propDict["lastSeenDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastSeenDateTime
    * DateTime at which the latest logon by this user account occurred. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The value to assign to the lastSeenDateTime
    *
    * @return LogonUser The LogonUser
    */
    public function setLastSeenDateTime($val)
    {
        $this->_propDict["lastSeenDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the logonId
    * User logon ID.
    *
    * @return string The logonId
    */
    public function getLogonId()
    {
        if (array_key_exists("logonId", $this->_propDict)) {
            return $this->_propDict["logonId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the logonId
    * User logon ID.
    *
    * @param string $val The value of the logonId
    *
    * @return LogonUser
    */
    public function setLogonId($val)
    {
        $this->_propDict["logonId"] = $val;
        return $this;
    }

    /**
    * Gets the logonTypes
    * Collection of the logon types observed for the logged on user from when first to last seen. Possible values are: unknown, interactive, remoteInteractive, network, batch, service.
    *
    * @return LogonType The logonTypes
    */
    public function getLogonTypes()
    {
        if (array_key_exists("logonTypes", $this->_propDict)) {
            if (is_a($this->_propDict["logonTypes"], "\Beta\Microsoft\Graph\Model\LogonType")) {
                return $this->_propDict["logonTypes"];
            } else {
                $this->_propDict["logonTypes"] = new LogonType($this->_propDict["logonTypes"]);
                return $this->_propDict["logonTypes"];
            }
        }
        return null;
    }

    /**
    * Sets the logonTypes
    * Collection of the logon types observed for the logged on user from when first to last seen. Possible values are: unknown, interactive, remoteInteractive, network, batch, service.
    *
    * @param LogonType $val The value to assign to the logonTypes
    *
    * @return LogonUser The LogonUser
    */
    public function setLogonTypes($val)
    {
        $this->_propDict["logonTypes"] = $val;
         return $this;
    }
}
