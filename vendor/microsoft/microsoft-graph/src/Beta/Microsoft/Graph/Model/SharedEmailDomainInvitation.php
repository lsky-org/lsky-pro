<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SharedEmailDomainInvitation File
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
* SharedEmailDomainInvitation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SharedEmailDomainInvitation extends Entity
{
    /**
    * Gets the expiryTime
    *
    * @return \DateTime The expiryTime
    */
    public function getExpiryTime()
    {
        if (array_key_exists("expiryTime", $this->_propDict)) {
            if (is_a($this->_propDict["expiryTime"], "\DateTime")) {
                return $this->_propDict["expiryTime"];
            } else {
                $this->_propDict["expiryTime"] = new \DateTime($this->_propDict["expiryTime"]);
                return $this->_propDict["expiryTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the expiryTime
    *
    * @param \DateTime $val The expiryTime
    *
    * @return SharedEmailDomainInvitation
    */
    public function setExpiryTime($val)
    {
        $this->_propDict["expiryTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the invitationDomain
    *
    * @return string The invitationDomain
    */
    public function getInvitationDomain()
    {
        if (array_key_exists("invitationDomain", $this->_propDict)) {
            return $this->_propDict["invitationDomain"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the invitationDomain
    *
    * @param string $val The invitationDomain
    *
    * @return SharedEmailDomainInvitation
    */
    public function setInvitationDomain($val)
    {
        $this->_propDict["invitationDomain"] = $val;
        return $this;
    }
    
    /**
    * Gets the invitationStatus
    *
    * @return string The invitationStatus
    */
    public function getInvitationStatus()
    {
        if (array_key_exists("invitationStatus", $this->_propDict)) {
            return $this->_propDict["invitationStatus"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the invitationStatus
    *
    * @param string $val The invitationStatus
    *
    * @return SharedEmailDomainInvitation
    */
    public function setInvitationStatus($val)
    {
        $this->_propDict["invitationStatus"] = $val;
        return $this;
    }
    
}
