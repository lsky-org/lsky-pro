<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* VpnOnDemandRule File
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
* VpnOnDemandRule class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class VpnOnDemandRule extends Entity
{

    /**
    * Gets the action
    * Action. Possible values are: connect, evaluateConnection, ignore, disconnect.
    *
    * @return VpnOnDemandRuleConnectionAction The action
    */
    public function getAction()
    {
        if (array_key_exists("action", $this->_propDict)) {
            if (is_a($this->_propDict["action"], "\Beta\Microsoft\Graph\Model\VpnOnDemandRuleConnectionAction")) {
                return $this->_propDict["action"];
            } else {
                $this->_propDict["action"] = new VpnOnDemandRuleConnectionAction($this->_propDict["action"]);
                return $this->_propDict["action"];
            }
        }
        return null;
    }

    /**
    * Sets the action
    * Action. Possible values are: connect, evaluateConnection, ignore, disconnect.
    *
    * @param VpnOnDemandRuleConnectionAction $val The value to assign to the action
    *
    * @return VpnOnDemandRule The VpnOnDemandRule
    */
    public function setAction($val)
    {
        $this->_propDict["action"] = $val;
         return $this;
    }
    /**
    * Gets the dnsSearchDomains
    * DNS Search Domains.
    *
    * @return string The dnsSearchDomains
    */
    public function getDnsSearchDomains()
    {
        if (array_key_exists("dnsSearchDomains", $this->_propDict)) {
            return $this->_propDict["dnsSearchDomains"];
        } else {
            return null;
        }
    }

    /**
    * Sets the dnsSearchDomains
    * DNS Search Domains.
    *
    * @param string $val The value of the dnsSearchDomains
    *
    * @return VpnOnDemandRule
    */
    public function setDnsSearchDomains($val)
    {
        $this->_propDict["dnsSearchDomains"] = $val;
        return $this;
    }

    /**
    * Gets the domainAction
    * Domain Action (Only applicable when Action is evaluate connection). Possible values are: connectIfNeeded, neverConnect.
    *
    * @return VpnOnDemandRuleConnectionDomainAction The domainAction
    */
    public function getDomainAction()
    {
        if (array_key_exists("domainAction", $this->_propDict)) {
            if (is_a($this->_propDict["domainAction"], "\Beta\Microsoft\Graph\Model\VpnOnDemandRuleConnectionDomainAction")) {
                return $this->_propDict["domainAction"];
            } else {
                $this->_propDict["domainAction"] = new VpnOnDemandRuleConnectionDomainAction($this->_propDict["domainAction"]);
                return $this->_propDict["domainAction"];
            }
        }
        return null;
    }

    /**
    * Sets the domainAction
    * Domain Action (Only applicable when Action is evaluate connection). Possible values are: connectIfNeeded, neverConnect.
    *
    * @param VpnOnDemandRuleConnectionDomainAction $val The value to assign to the domainAction
    *
    * @return VpnOnDemandRule The VpnOnDemandRule
    */
    public function setDomainAction($val)
    {
        $this->_propDict["domainAction"] = $val;
         return $this;
    }
    /**
    * Gets the domains
    * Domains (Only applicable when Action is evaluate connection).
    *
    * @return string The domains
    */
    public function getDomains()
    {
        if (array_key_exists("domains", $this->_propDict)) {
            return $this->_propDict["domains"];
        } else {
            return null;
        }
    }

    /**
    * Sets the domains
    * Domains (Only applicable when Action is evaluate connection).
    *
    * @param string $val The value of the domains
    *
    * @return VpnOnDemandRule
    */
    public function setDomains($val)
    {
        $this->_propDict["domains"] = $val;
        return $this;
    }
    /**
    * Gets the probeRequiredUrl
    * Probe Required Url (Only applicable when Action is evaluate connection and DomainAction is connect if needed).
    *
    * @return string The probeRequiredUrl
    */
    public function getProbeRequiredUrl()
    {
        if (array_key_exists("probeRequiredUrl", $this->_propDict)) {
            return $this->_propDict["probeRequiredUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the probeRequiredUrl
    * Probe Required Url (Only applicable when Action is evaluate connection and DomainAction is connect if needed).
    *
    * @param string $val The value of the probeRequiredUrl
    *
    * @return VpnOnDemandRule
    */
    public function setProbeRequiredUrl($val)
    {
        $this->_propDict["probeRequiredUrl"] = $val;
        return $this;
    }
    /**
    * Gets the probeUrl
    * A URL to probe. If this URL is successfully fetched (returning a 200 HTTP status code) without redirection, this rule matches.
    *
    * @return string The probeUrl
    */
    public function getProbeUrl()
    {
        if (array_key_exists("probeUrl", $this->_propDict)) {
            return $this->_propDict["probeUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the probeUrl
    * A URL to probe. If this URL is successfully fetched (returning a 200 HTTP status code) without redirection, this rule matches.
    *
    * @param string $val The value of the probeUrl
    *
    * @return VpnOnDemandRule
    */
    public function setProbeUrl($val)
    {
        $this->_propDict["probeUrl"] = $val;
        return $this;
    }
    /**
    * Gets the ssids
    * Network Service Set Identifiers (SSIDs).
    *
    * @return string The ssids
    */
    public function getSsids()
    {
        if (array_key_exists("ssids", $this->_propDict)) {
            return $this->_propDict["ssids"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ssids
    * Network Service Set Identifiers (SSIDs).
    *
    * @param string $val The value of the ssids
    *
    * @return VpnOnDemandRule
    */
    public function setSsids($val)
    {
        $this->_propDict["ssids"] = $val;
        return $this;
    }
}
