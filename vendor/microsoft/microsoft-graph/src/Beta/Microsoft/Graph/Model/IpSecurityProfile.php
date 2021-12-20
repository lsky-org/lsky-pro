<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IpSecurityProfile File
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
* IpSecurityProfile class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IpSecurityProfile extends Entity
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
    * @return IpSecurityProfile
    */
    public function setActivityGroupNames($val)
    {
        $this->_propDict["activityGroupNames"] = $val;
        return $this;
    }
    
    /**
    * Gets the address
    *
    * @return string The address
    */
    public function getAddress()
    {
        if (array_key_exists("address", $this->_propDict)) {
            return $this->_propDict["address"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the address
    *
    * @param string $val The address
    *
    * @return IpSecurityProfile
    */
    public function setAddress($val)
    {
        $this->_propDict["address"] = $val;
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
    * @return IpSecurityProfile
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
    * @return IpSecurityProfile
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
    * @return IpSecurityProfile
    */
    public function setCountHits($val)
    {
        $this->_propDict["countHits"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the countHosts
    *
    * @return int The countHosts
    */
    public function getCountHosts()
    {
        if (array_key_exists("countHosts", $this->_propDict)) {
            return $this->_propDict["countHosts"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the countHosts
    *
    * @param int $val The countHosts
    *
    * @return IpSecurityProfile
    */
    public function setCountHosts($val)
    {
        $this->_propDict["countHosts"] = intval($val);
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
    * @return IpSecurityProfile
    */
    public function setFirstSeenDateTime($val)
    {
        $this->_propDict["firstSeenDateTime"] = $val;
        return $this;
    }
    

     /** 
     * Gets the ipCategories
     *
     * @return array The ipCategories
     */
    public function getIpCategories()
    {
        if (array_key_exists("ipCategories", $this->_propDict)) {
           return $this->_propDict["ipCategories"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the ipCategories
    *
    * @param IpCategory $val The ipCategories
    *
    * @return IpSecurityProfile
    */
    public function setIpCategories($val)
    {
		$this->_propDict["ipCategories"] = $val;
        return $this;
    }
    

     /** 
     * Gets the ipReferenceData
     *
     * @return array The ipReferenceData
     */
    public function getIpReferenceData()
    {
        if (array_key_exists("ipReferenceData", $this->_propDict)) {
           return $this->_propDict["ipReferenceData"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the ipReferenceData
    *
    * @param IpReferenceData $val The ipReferenceData
    *
    * @return IpSecurityProfile
    */
    public function setIpReferenceData($val)
    {
		$this->_propDict["ipReferenceData"] = $val;
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
    * @return IpSecurityProfile
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
    * @param string $val The riskScore
    *
    * @return IpSecurityProfile
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
    * @return IpSecurityProfile
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
    * @return IpSecurityProfile
    */
    public function setVendorInformation($val)
    {
        $this->_propDict["vendorInformation"] = $val;
        return $this;
    }
    
}
