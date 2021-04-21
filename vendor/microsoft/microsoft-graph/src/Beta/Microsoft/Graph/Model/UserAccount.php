<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserAccount File
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
* UserAccount class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserAccount extends Entity
{
    /**
    * Gets the displayName
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
    *
    * @param string $val The value of the displayName
    *
    * @return UserAccount
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the lastSeenDateTime
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
    *
    * @param \DateTime $val The value to assign to the lastSeenDateTime
    *
    * @return UserAccount The UserAccount
    */
    public function setLastSeenDateTime($val)
    {
        $this->_propDict["lastSeenDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the riskScore
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
    *
    * @param string $val The value of the riskScore
    *
    * @return UserAccount
    */
    public function setRiskScore($val)
    {
        $this->_propDict["riskScore"] = $val;
        return $this;
    }
    /**
    * Gets the service
    *
    * @return string The service
    */
    public function getService()
    {
        if (array_key_exists("service", $this->_propDict)) {
            return $this->_propDict["service"];
        } else {
            return null;
        }
    }

    /**
    * Sets the service
    *
    * @param string $val The value of the service
    *
    * @return UserAccount
    */
    public function setService($val)
    {
        $this->_propDict["service"] = $val;
        return $this;
    }
    /**
    * Gets the signinName
    *
    * @return string The signinName
    */
    public function getSigninName()
    {
        if (array_key_exists("signinName", $this->_propDict)) {
            return $this->_propDict["signinName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the signinName
    *
    * @param string $val The value of the signinName
    *
    * @return UserAccount
    */
    public function setSigninName($val)
    {
        $this->_propDict["signinName"] = $val;
        return $this;
    }

    /**
    * Gets the status
    *
    * @return AccountStatus The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\Model\AccountStatus")) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new AccountStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    *
    * @param AccountStatus $val The value to assign to the status
    *
    * @return UserAccount The UserAccount
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
         return $this;
    }
}
