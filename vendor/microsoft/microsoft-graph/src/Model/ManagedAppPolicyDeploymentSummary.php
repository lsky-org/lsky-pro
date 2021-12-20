<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ManagedAppPolicyDeploymentSummary File
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
* ManagedAppPolicyDeploymentSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ManagedAppPolicyDeploymentSummary extends Entity
{
    /**
    * Gets the configurationDeployedUserCount
    * Not yet documented
    *
    * @return int The configurationDeployedUserCount
    */
    public function getConfigurationDeployedUserCount()
    {
        if (array_key_exists("configurationDeployedUserCount", $this->_propDict)) {
            return $this->_propDict["configurationDeployedUserCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the configurationDeployedUserCount
    * Not yet documented
    *
    * @param int $val The configurationDeployedUserCount
    *
    * @return ManagedAppPolicyDeploymentSummary
    */
    public function setConfigurationDeployedUserCount($val)
    {
        $this->_propDict["configurationDeployedUserCount"] = intval($val);
        return $this;
    }
    

     /** 
     * Gets the configurationDeploymentSummaryPerApp
    * Not yet documented
     *
     * @return array The configurationDeploymentSummaryPerApp
     */
    public function getConfigurationDeploymentSummaryPerApp()
    {
        if (array_key_exists("configurationDeploymentSummaryPerApp", $this->_propDict)) {
           return $this->_propDict["configurationDeploymentSummaryPerApp"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the configurationDeploymentSummaryPerApp
    * Not yet documented
    *
    * @param ManagedAppPolicyDeploymentSummaryPerApp $val The configurationDeploymentSummaryPerApp
    *
    * @return ManagedAppPolicyDeploymentSummary
    */
    public function setConfigurationDeploymentSummaryPerApp($val)
    {
		$this->_propDict["configurationDeploymentSummaryPerApp"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * Not yet documented
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
    * Not yet documented
    *
    * @param string $val The displayName
    *
    * @return ManagedAppPolicyDeploymentSummary
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastRefreshTime
    * Not yet documented
    *
    * @return \DateTime The lastRefreshTime
    */
    public function getLastRefreshTime()
    {
        if (array_key_exists("lastRefreshTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastRefreshTime"], "\DateTime")) {
                return $this->_propDict["lastRefreshTime"];
            } else {
                $this->_propDict["lastRefreshTime"] = new \DateTime($this->_propDict["lastRefreshTime"]);
                return $this->_propDict["lastRefreshTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastRefreshTime
    * Not yet documented
    *
    * @param \DateTime $val The lastRefreshTime
    *
    * @return ManagedAppPolicyDeploymentSummary
    */
    public function setLastRefreshTime($val)
    {
        $this->_propDict["lastRefreshTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the version
    * Version of the entity.
    *
    * @return string The version
    */
    public function getVersion()
    {
        if (array_key_exists("version", $this->_propDict)) {
            return $this->_propDict["version"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the version
    * Version of the entity.
    *
    * @param string $val The version
    *
    * @return ManagedAppPolicyDeploymentSummary
    */
    public function setVersion($val)
    {
        $this->_propDict["version"] = $val;
        return $this;
    }
    
}
