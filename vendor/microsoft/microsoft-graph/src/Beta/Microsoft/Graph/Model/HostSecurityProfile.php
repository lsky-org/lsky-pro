<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* HostSecurityProfile File
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
* HostSecurityProfile class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class HostSecurityProfile extends Entity
{
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
    * @return HostSecurityProfile
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
    * @return HostSecurityProfile
    */
    public function setAzureTenantId($val)
    {
        $this->_propDict["azureTenantId"] = $val;
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
    * @return HostSecurityProfile
    */
    public function setFirstSeenDateTime($val)
    {
        $this->_propDict["firstSeenDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the fqdn
    *
    * @return string The fqdn
    */
    public function getFqdn()
    {
        if (array_key_exists("fqdn", $this->_propDict)) {
            return $this->_propDict["fqdn"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the fqdn
    *
    * @param string $val The fqdn
    *
    * @return HostSecurityProfile
    */
    public function setFqdn($val)
    {
        $this->_propDict["fqdn"] = $val;
        return $this;
    }
    
    /**
    * Gets the isAzureAdJoined
    *
    * @return bool The isAzureAdJoined
    */
    public function getIsAzureAdJoined()
    {
        if (array_key_exists("isAzureAdJoined", $this->_propDict)) {
            return $this->_propDict["isAzureAdJoined"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isAzureAdJoined
    *
    * @param bool $val The isAzureAdJoined
    *
    * @return HostSecurityProfile
    */
    public function setIsAzureAdJoined($val)
    {
        $this->_propDict["isAzureAdJoined"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the isAzureAdRegistered
    *
    * @return bool The isAzureAdRegistered
    */
    public function getIsAzureAdRegistered()
    {
        if (array_key_exists("isAzureAdRegistered", $this->_propDict)) {
            return $this->_propDict["isAzureAdRegistered"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isAzureAdRegistered
    *
    * @param bool $val The isAzureAdRegistered
    *
    * @return HostSecurityProfile
    */
    public function setIsAzureAdRegistered($val)
    {
        $this->_propDict["isAzureAdRegistered"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the isHybridAzureDomainJoined
    *
    * @return bool The isHybridAzureDomainJoined
    */
    public function getIsHybridAzureDomainJoined()
    {
        if (array_key_exists("isHybridAzureDomainJoined", $this->_propDict)) {
            return $this->_propDict["isHybridAzureDomainJoined"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isHybridAzureDomainJoined
    *
    * @param bool $val The isHybridAzureDomainJoined
    *
    * @return HostSecurityProfile
    */
    public function setIsHybridAzureDomainJoined($val)
    {
        $this->_propDict["isHybridAzureDomainJoined"] = boolval($val);
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
    * @return HostSecurityProfile
    */
    public function setLastSeenDateTime($val)
    {
        $this->_propDict["lastSeenDateTime"] = $val;
        return $this;
    }
    

     /** 
     * Gets the logonUsers
     *
     * @return array The logonUsers
     */
    public function getLogonUsers()
    {
        if (array_key_exists("logonUsers", $this->_propDict)) {
           return $this->_propDict["logonUsers"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the logonUsers
    *
    * @param LogonUser $val The logonUsers
    *
    * @return HostSecurityProfile
    */
    public function setLogonUsers($val)
    {
		$this->_propDict["logonUsers"] = $val;
        return $this;
    }
    
    /**
    * Gets the netBiosName
    *
    * @return string The netBiosName
    */
    public function getNetBiosName()
    {
        if (array_key_exists("netBiosName", $this->_propDict)) {
            return $this->_propDict["netBiosName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the netBiosName
    *
    * @param string $val The netBiosName
    *
    * @return HostSecurityProfile
    */
    public function setNetBiosName($val)
    {
        $this->_propDict["netBiosName"] = $val;
        return $this;
    }
    

     /** 
     * Gets the networkInterfaces
     *
     * @return array The networkInterfaces
     */
    public function getNetworkInterfaces()
    {
        if (array_key_exists("networkInterfaces", $this->_propDict)) {
           return $this->_propDict["networkInterfaces"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the networkInterfaces
    *
    * @param NetworkInterface $val The networkInterfaces
    *
    * @return HostSecurityProfile
    */
    public function setNetworkInterfaces($val)
    {
		$this->_propDict["networkInterfaces"] = $val;
        return $this;
    }
    
    /**
    * Gets the os
    *
    * @return string The os
    */
    public function getOs()
    {
        if (array_key_exists("os", $this->_propDict)) {
            return $this->_propDict["os"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the os
    *
    * @param string $val The os
    *
    * @return HostSecurityProfile
    */
    public function setOs($val)
    {
        $this->_propDict["os"] = $val;
        return $this;
    }
    
    /**
    * Gets the osVersion
    *
    * @return string The osVersion
    */
    public function getOsVersion()
    {
        if (array_key_exists("osVersion", $this->_propDict)) {
            return $this->_propDict["osVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the osVersion
    *
    * @param string $val The osVersion
    *
    * @return HostSecurityProfile
    */
    public function setOsVersion($val)
    {
        $this->_propDict["osVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the parentHost
    *
    * @return string The parentHost
    */
    public function getParentHost()
    {
        if (array_key_exists("parentHost", $this->_propDict)) {
            return $this->_propDict["parentHost"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the parentHost
    *
    * @param string $val The parentHost
    *
    * @return HostSecurityProfile
    */
    public function setParentHost($val)
    {
        $this->_propDict["parentHost"] = $val;
        return $this;
    }
    
    /**
    * Gets the relatedHostIds
    *
    * @return string The relatedHostIds
    */
    public function getRelatedHostIds()
    {
        if (array_key_exists("relatedHostIds", $this->_propDict)) {
            return $this->_propDict["relatedHostIds"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the relatedHostIds
    *
    * @param string $val The relatedHostIds
    *
    * @return HostSecurityProfile
    */
    public function setRelatedHostIds($val)
    {
        $this->_propDict["relatedHostIds"] = $val;
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
    * @return HostSecurityProfile
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
    * @return HostSecurityProfile
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
    * @return HostSecurityProfile
    */
    public function setVendorInformation($val)
    {
        $this->_propDict["vendorInformation"] = $val;
        return $this;
    }
    
}
