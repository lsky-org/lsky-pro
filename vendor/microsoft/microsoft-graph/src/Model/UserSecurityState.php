<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserSecurityState File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;
/**
* UserSecurityState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserSecurityState extends Entity
{
    /**
    * Gets the aadUserId
    * AAD User object identifier (GUID) - represents the physical/multi-account user entity.
    *
    * @return string The aadUserId
    */
    public function getAadUserId()
    {
        if (array_key_exists("aadUserId", $this->_propDict)) {
            return $this->_propDict["aadUserId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the aadUserId
    * AAD User object identifier (GUID) - represents the physical/multi-account user entity.
    *
    * @param string $val The value of the aadUserId
    *
    * @return UserSecurityState
    */
    public function setAadUserId($val)
    {
        $this->_propDict["aadUserId"] = $val;
        return $this;
    }
    /**
    * Gets the accountName
    * Account name of user account (without Active Directory domain or DNS domain) - (also called mailNickName).
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
    * Account name of user account (without Active Directory domain or DNS domain) - (also called mailNickName).
    *
    * @param string $val The value of the accountName
    *
    * @return UserSecurityState
    */
    public function setAccountName($val)
    {
        $this->_propDict["accountName"] = $val;
        return $this;
    }
    /**
    * Gets the domainName
    * NetBIOS/Active Directory domain of user account (that is, domain/account format).
    *
    * @return string The domainName
    */
    public function getDomainName()
    {
        if (array_key_exists("domainName", $this->_propDict)) {
            return $this->_propDict["domainName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the domainName
    * NetBIOS/Active Directory domain of user account (that is, domain/account format).
    *
    * @param string $val The value of the domainName
    *
    * @return UserSecurityState
    */
    public function setDomainName($val)
    {
        $this->_propDict["domainName"] = $val;
        return $this;
    }

    /**
    * Gets the emailRole
    * For email-related alerts - user account's email 'role'. Possible values are: unknown, sender, recipient.
    *
    * @return EmailRole The emailRole
    */
    public function getEmailRole()
    {
        if (array_key_exists("emailRole", $this->_propDict)) {
            if (is_a($this->_propDict["emailRole"], "\Microsoft\Graph\Model\EmailRole")) {
                return $this->_propDict["emailRole"];
            } else {
                $this->_propDict["emailRole"] = new EmailRole($this->_propDict["emailRole"]);
                return $this->_propDict["emailRole"];
            }
        }
        return null;
    }

    /**
    * Sets the emailRole
    * For email-related alerts - user account's email 'role'. Possible values are: unknown, sender, recipient.
    *
    * @param EmailRole $val The value to assign to the emailRole
    *
    * @return UserSecurityState The UserSecurityState
    */
    public function setEmailRole($val)
    {
        $this->_propDict["emailRole"] = $val;
         return $this;
    }
    /**
    * Gets the isVpn
    * Indicates whether the user logged on through a VPN.
    *
    * @return bool The isVpn
    */
    public function getIsVpn()
    {
        if (array_key_exists("isVpn", $this->_propDict)) {
            return $this->_propDict["isVpn"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isVpn
    * Indicates whether the user logged on through a VPN.
    *
    * @param bool $val The value of the isVpn
    *
    * @return UserSecurityState
    */
    public function setIsVpn($val)
    {
        $this->_propDict["isVpn"] = $val;
        return $this;
    }

    /**
    * Gets the logonDateTime
    * Time at which the sign-in occurred. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @return \DateTime The logonDateTime
    */
    public function getLogonDateTime()
    {
        if (array_key_exists("logonDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["logonDateTime"], "\DateTime")) {
                return $this->_propDict["logonDateTime"];
            } else {
                $this->_propDict["logonDateTime"] = new \DateTime($this->_propDict["logonDateTime"]);
                return $this->_propDict["logonDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the logonDateTime
    * Time at which the sign-in occurred. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The value to assign to the logonDateTime
    *
    * @return UserSecurityState The UserSecurityState
    */
    public function setLogonDateTime($val)
    {
        $this->_propDict["logonDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the logonId
    * User sign-in ID.
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
    * User sign-in ID.
    *
    * @param string $val The value of the logonId
    *
    * @return UserSecurityState
    */
    public function setLogonId($val)
    {
        $this->_propDict["logonId"] = $val;
        return $this;
    }
    /**
    * Gets the logonIp
    * IP Address the sign-in request originated from.
    *
    * @return string The logonIp
    */
    public function getLogonIp()
    {
        if (array_key_exists("logonIp", $this->_propDict)) {
            return $this->_propDict["logonIp"];
        } else {
            return null;
        }
    }

    /**
    * Sets the logonIp
    * IP Address the sign-in request originated from.
    *
    * @param string $val The value of the logonIp
    *
    * @return UserSecurityState
    */
    public function setLogonIp($val)
    {
        $this->_propDict["logonIp"] = $val;
        return $this;
    }
    /**
    * Gets the logonLocation
    * Location (by IP address mapping) associated with a user sign-in event by this user.
    *
    * @return string The logonLocation
    */
    public function getLogonLocation()
    {
        if (array_key_exists("logonLocation", $this->_propDict)) {
            return $this->_propDict["logonLocation"];
        } else {
            return null;
        }
    }

    /**
    * Sets the logonLocation
    * Location (by IP address mapping) associated with a user sign-in event by this user.
    *
    * @param string $val The value of the logonLocation
    *
    * @return UserSecurityState
    */
    public function setLogonLocation($val)
    {
        $this->_propDict["logonLocation"] = $val;
        return $this;
    }

    /**
    * Gets the logonType
    * Method of user sign in. Possible values are: unknown, interactive, remoteInteractive, network, batch, service.
    *
    * @return LogonType The logonType
    */
    public function getLogonType()
    {
        if (array_key_exists("logonType", $this->_propDict)) {
            if (is_a($this->_propDict["logonType"], "\Microsoft\Graph\Model\LogonType")) {
                return $this->_propDict["logonType"];
            } else {
                $this->_propDict["logonType"] = new LogonType($this->_propDict["logonType"]);
                return $this->_propDict["logonType"];
            }
        }
        return null;
    }

    /**
    * Sets the logonType
    * Method of user sign in. Possible values are: unknown, interactive, remoteInteractive, network, batch, service.
    *
    * @param LogonType $val The value to assign to the logonType
    *
    * @return UserSecurityState The UserSecurityState
    */
    public function setLogonType($val)
    {
        $this->_propDict["logonType"] = $val;
         return $this;
    }
    /**
    * Gets the onPremisesSecurityIdentifier
    * Active Directory (on-premises) Security Identifier (SID) of the user.
    *
    * @return string The onPremisesSecurityIdentifier
    */
    public function getOnPremisesSecurityIdentifier()
    {
        if (array_key_exists("onPremisesSecurityIdentifier", $this->_propDict)) {
            return $this->_propDict["onPremisesSecurityIdentifier"];
        } else {
            return null;
        }
    }

    /**
    * Sets the onPremisesSecurityIdentifier
    * Active Directory (on-premises) Security Identifier (SID) of the user.
    *
    * @param string $val The value of the onPremisesSecurityIdentifier
    *
    * @return UserSecurityState
    */
    public function setOnPremisesSecurityIdentifier($val)
    {
        $this->_propDict["onPremisesSecurityIdentifier"] = $val;
        return $this;
    }
    /**
    * Gets the riskScore
    * Provider-generated/calculated risk score of the user account. Recommended value range of 0-1, which equates to a percentage.
    *
    * @return string The riskScore
    */
    public function getRiskScore()
    {
        if (array_key_exists("riskScore", $this->_propDict)) {
            return $this->_propDict["riskScore"];
        } else {
            return null;
        }
    }

    /**
    * Sets the riskScore
    * Provider-generated/calculated risk score of the user account. Recommended value range of 0-1, which equates to a percentage.
    *
    * @param string $val The value of the riskScore
    *
    * @return UserSecurityState
    */
    public function setRiskScore($val)
    {
        $this->_propDict["riskScore"] = $val;
        return $this;
    }

    /**
    * Gets the userAccountType
    * User account type (group membership), per Windows definition. Possible values are: unknown, standard, power, administrator.
    *
    * @return UserAccountSecurityType The userAccountType
    */
    public function getUserAccountType()
    {
        if (array_key_exists("userAccountType", $this->_propDict)) {
            if (is_a($this->_propDict["userAccountType"], "\Microsoft\Graph\Model\UserAccountSecurityType")) {
                return $this->_propDict["userAccountType"];
            } else {
                $this->_propDict["userAccountType"] = new UserAccountSecurityType($this->_propDict["userAccountType"]);
                return $this->_propDict["userAccountType"];
            }
        }
        return null;
    }

    /**
    * Sets the userAccountType
    * User account type (group membership), per Windows definition. Possible values are: unknown, standard, power, administrator.
    *
    * @param UserAccountSecurityType $val The value to assign to the userAccountType
    *
    * @return UserSecurityState The UserSecurityState
    */
    public function setUserAccountType($val)
    {
        $this->_propDict["userAccountType"] = $val;
         return $this;
    }
    /**
    * Gets the userPrincipalName
    * User sign-in name - internet format: (user account name)@(user account DNS domain name).
    *
    * @return string The userPrincipalName
    */
    public function getUserPrincipalName()
    {
        if (array_key_exists("userPrincipalName", $this->_propDict)) {
            return $this->_propDict["userPrincipalName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userPrincipalName
    * User sign-in name - internet format: (user account name)@(user account DNS domain name).
    *
    * @param string $val The value of the userPrincipalName
    *
    * @return UserSecurityState
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }
}
