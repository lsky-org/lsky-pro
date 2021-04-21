<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OnPremisesAgentGroup File
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
* OnPremisesAgentGroup class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OnPremisesAgentGroup extends Entity
{
    /**
    * Gets the displayName
    * Display name of the onPremisesAgentGroup.
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
    * Display name of the onPremisesAgentGroup.
    *
    * @param string $val The displayName
    *
    * @return OnPremisesAgentGroup
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the isDefault
    * Indicates if the onPremisesAgentGroup is the default agent group. Only a single agent group can be the default onPremisesAgentGroup and is set by the system.
    *
    * @return bool The isDefault
    */
    public function getIsDefault()
    {
        if (array_key_exists("isDefault", $this->_propDict)) {
            return $this->_propDict["isDefault"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isDefault
    * Indicates if the onPremisesAgentGroup is the default agent group. Only a single agent group can be the default onPremisesAgentGroup and is set by the system.
    *
    * @param bool $val The isDefault
    *
    * @return OnPremisesAgentGroup
    */
    public function setIsDefault($val)
    {
        $this->_propDict["isDefault"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the publishingType
    * Possible values are: applicationProxy, exchangeOnline, authentication, provisioning, adAdministration.
    *
    * @return OnPremisesPublishingType The publishingType
    */
    public function getPublishingType()
    {
        if (array_key_exists("publishingType", $this->_propDict)) {
            if (is_a($this->_propDict["publishingType"], "\Beta\Microsoft\Graph\Model\OnPremisesPublishingType")) {
                return $this->_propDict["publishingType"];
            } else {
                $this->_propDict["publishingType"] = new OnPremisesPublishingType($this->_propDict["publishingType"]);
                return $this->_propDict["publishingType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the publishingType
    * Possible values are: applicationProxy, exchangeOnline, authentication, provisioning, adAdministration.
    *
    * @param OnPremisesPublishingType $val The publishingType
    *
    * @return OnPremisesAgentGroup
    */
    public function setPublishingType($val)
    {
        $this->_propDict["publishingType"] = $val;
        return $this;
    }
    

     /** 
     * Gets the agents
    * List of onPremisesAgent that are assigned to an onPremisesAgentGroup. Read-only. Nullable.
     *
     * @return array The agents
     */
    public function getAgents()
    {
        if (array_key_exists("agents", $this->_propDict)) {
           return $this->_propDict["agents"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the agents
    * List of onPremisesAgent that are assigned to an onPremisesAgentGroup. Read-only. Nullable.
    *
    * @param OnPremisesAgent $val The agents
    *
    * @return OnPremisesAgentGroup
    */
    public function setAgents($val)
    {
		$this->_propDict["agents"] = $val;
        return $this;
    }
    

     /** 
     * Gets the publishedResources
    * List of publishedResource that are assigned to an onPremisesAgentGroup. Read-only. Nullable.
     *
     * @return array The publishedResources
     */
    public function getPublishedResources()
    {
        if (array_key_exists("publishedResources", $this->_propDict)) {
           return $this->_propDict["publishedResources"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the publishedResources
    * List of publishedResource that are assigned to an onPremisesAgentGroup. Read-only. Nullable.
    *
    * @param PublishedResource $val The publishedResources
    *
    * @return OnPremisesAgentGroup
    */
    public function setPublishedResources($val)
    {
		$this->_propDict["publishedResources"] = $val;
        return $this;
    }
    
}
