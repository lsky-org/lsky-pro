<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DomainSecurityProfile File
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
* DomainSecurityProfile class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DomainSecurityProfile extends Entity
{
    /**
    * Gets the activityGroupNames
    *
    * @return string The activityGroupNames
    */
    public function getActivityGroupNames()
    {
        if (array_key_exists("activityGroupNames", $this->_propDict)) {
            return $this->_propDict["activityGroupNames"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the activityGroupNames
    *
    * @param string $val The activityGroupNames
    *
    * @return DomainSecurityProfile
    */
    public function setActivityGroupNames($val)
    {
        $this->_propDict["activityGroupNames"] = $val;
        return $this;
    }
    
    /**
    * Gets the azureSubscriptionId
    *
    * @return string The azureSubscriptionId
    */
    public function getAzureSubscriptionId()
    {
        if (array_key_exists("azureSubscriptionId", $this->_propDict)) {
            return $this->_propDict["azureSubscriptionId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the azureSubscriptionId
    *
    * @param string $val The azureSubscriptionId
    *
    * @return DomainSecurityProfile
    */
    public function setAzureSubscriptionId($val)
    {
        $this->_propDict["azureSubscriptionId"] = $val;
        return $this;
    }
    
    /**
    * Gets the azureTenantId
    *
    * @return string The azureTenantId
    */
    public function getAzureTenantId()
    {
        if (array_key_exists("azureTenantId", $this->_propDict)) {
            return $this->_propDict["azureTenantId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the azureTenantId
    *
    * @param string $val The azureTenantId
    *
    * @return DomainSecurityProfile
    */
    public function setAzureTenantId($val)
    {
        $this->_propDict["azureTenantId"] = $val;
        return $this;
    }
    
    /**
    * Gets the countHits
    *
    * @return int The countHits
    */
    public function getCountHits()
    {
        if (array_key_exists("countHits", $this->_propDict)) {
            return $this->_propDict["countHits"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the countHits
    *
    * @param int $val The countHits
    *
    * @return DomainSecurityProfile
    */
    public function setCountHits($val)
    {
        $this->_propDict["countHits"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the countInOrg
    *
    * @return int The countInOrg
    */
    public function getCountInOrg()
    {
        if (array_key_exists("countInOrg", $this->_propDict)) {
            return $this->_propDict["countInOrg"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the countInOrg
    *
    * @param int $val The countInOrg
    *
    * @return DomainSecurityProfile
    */
    public function setCountInOrg($val)
    {
        $this->_propDict["countInOrg"] = intval($val);
        return $this;
    }
    

     /** 
     * Gets the domainCategories
     *
     * @return array The domainCategories
     */
    public function getDomainCategories()
    {
        if (array_key_exists("domainCategories", $this->_propDict)) {
           return $this->_propDict["domainCategories"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the domainCategories
    *
    * @param ReputationCategory $val The domainCategories
    *
    * @return DomainSecurityProfile
    */
    public function setDomainCategories($val)
    {
		$this->_propDict["domainCategories"] = $val;
        return $this;
    }
    
    /**
    * Gets the domainRegisteredDateTime
    *
    * @return \DateTime The domainRegisteredDateTime
    */
    public function getDomainRegisteredDateTime()
    {
        if (array_key_exists("domainRegisteredDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["domainRegisteredDateTime"], "\DateTime")) {
                return $this->_propDict["domainRegisteredDateTime"];
            } else {
                $this->_propDict["domainRegisteredDateTime"] = new \DateTime($this->_propDict["domainRegisteredDateTime"]);
                return $this->_propDict["domainRegisteredDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the domainRegisteredDateTime
    *
    * @param \DateTime $val The domainRegisteredDateTime
    *
    * @return DomainSecurityProfile
    */
    public function setDomainRegisteredDateTime($val)
    {
        $this->_propDict["domainRegisteredDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the firstSeenDateTime
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
    *
    * @param \DateTime $val The firstSeenDateTime
    *
    * @return DomainSecurityProfile
    */
    public function setFirstSeenDateTime($val)
    {
        $this->_propDict["firstSeenDateTime"] = $val;
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
    * @param \DateTime $val The lastSeenDateTime
    *
    * @return DomainSecurityProfile
    */
    public function setLastSeenDateTime($val)
    {
        $this->_propDict["lastSeenDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the name
    *
    * @return string The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the name
    *
    * @param string $val The name
    *
    * @return DomainSecurityProfile
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    
    /**
    * Gets the registrant
    *
    * @return DomainRegistrant The registrant
    */
    public function getRegistrant()
    {
        if (array_key_exists("registrant", $this->_propDict)) {
            if (is_a($this->_propDict["registrant"], "\Beta\Microsoft\Graph\Model\DomainRegistrant")) {
                return $this->_propDict["registrant"];
            } else {
                $this->_propDict["registrant"] = new DomainRegistrant($this->_propDict["registrant"]);
                return $this->_propDict["registrant"];
            }
        }
        return null;
    }
    
    /**
    * Sets the registrant
    *
    * @param DomainRegistrant $val The registrant
    *
    * @return DomainSecurityProfile
    */
    public function setRegistrant($val)
    {
        $this->_propDict["registrant"] = $val;
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
    * @param string $val The riskScore
    *
    * @return DomainSecurityProfile
    */
    public function setRiskScore($val)
    {
        $this->_propDict["riskScore"] = $val;
        return $this;
    }
    
    /**
    * Gets the tags
    *
    * @return string The tags
    */
    public function getTags()
    {
        if (array_key_exists("tags", $this->_propDict)) {
            return $this->_propDict["tags"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the tags
    *
    * @param string $val The tags
    *
    * @return DomainSecurityProfile
    */
    public function setTags($val)
    {
        $this->_propDict["tags"] = $val;
        return $this;
    }
    
    /**
    * Gets the vendorInformation
    *
    * @return SecurityVendorInformation The vendorInformation
    */
    public function getVendorInformation()
    {
        if (array_key_exists("vendorInformation", $this->_propDict)) {
            if (is_a($this->_propDict["vendorInformation"], "\Beta\Microsoft\Graph\Model\SecurityVendorInformation")) {
                return $this->_propDict["vendorInformation"];
            } else {
                $this->_propDict["vendorInformation"] = new SecurityVendorInformation($this->_propDict["vendorInformation"]);
                return $this->_propDict["vendorInformation"];
            }
        }
        return null;
    }
    
    /**
    * Sets the vendorInformation
    *
    * @param SecurityVendorInformation $val The vendorInformation
    *
    * @return DomainSecurityProfile
    */
    public function setVendorInformation($val)
    {
        $this->_propDict["vendorInformation"] = $val;
        return $this;
    }
    
}
