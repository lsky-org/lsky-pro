<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamsApp File
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
* TeamsApp class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TeamsApp extends Entity
{
    /**
    * Gets the displayName
    * The name of the catalog app provided by the app developer in the Microsoft Teams zip app package.
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
    * The name of the catalog app provided by the app developer in the Microsoft Teams zip app package.
    *
    * @param string $val The displayName
    *
    * @return TeamsApp
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the distributionMethod
    * The method of distribution for the app. Read-only.
    *
    * @return TeamsAppDistributionMethod The distributionMethod
    */
    public function getDistributionMethod()
    {
        if (array_key_exists("distributionMethod", $this->_propDict)) {
            if (is_a($this->_propDict["distributionMethod"], "\Beta\Microsoft\Graph\Model\TeamsAppDistributionMethod")) {
                return $this->_propDict["distributionMethod"];
            } else {
                $this->_propDict["distributionMethod"] = new TeamsAppDistributionMethod($this->_propDict["distributionMethod"]);
                return $this->_propDict["distributionMethod"];
            }
        }
        return null;
    }
    
    /**
    * Sets the distributionMethod
    * The method of distribution for the app. Read-only.
    *
    * @param TeamsAppDistributionMethod $val The distributionMethod
    *
    * @return TeamsApp
    */
    public function setDistributionMethod($val)
    {
        $this->_propDict["distributionMethod"] = $val;
        return $this;
    }
    
    /**
    * Gets the externalId
    * The ID of the catalog provided by the app developer in the Microsoft Teams zip app package.
    *
    * @return string The externalId
    */
    public function getExternalId()
    {
        if (array_key_exists("externalId", $this->_propDict)) {
            return $this->_propDict["externalId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the externalId
    * The ID of the catalog provided by the app developer in the Microsoft Teams zip app package.
    *
    * @param string $val The externalId
    *
    * @return TeamsApp
    */
    public function setExternalId($val)
    {
        $this->_propDict["externalId"] = $val;
        return $this;
    }
    

     /** 
     * Gets the appDefinitions
    * The details for each version of the app.
     *
     * @return array The appDefinitions
     */
    public function getAppDefinitions()
    {
        if (array_key_exists("appDefinitions", $this->_propDict)) {
           return $this->_propDict["appDefinitions"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the appDefinitions
    * The details for each version of the app.
    *
    * @param TeamsAppDefinition $val The appDefinitions
    *
    * @return TeamsApp
    */
    public function setAppDefinitions($val)
    {
		$this->_propDict["appDefinitions"] = $val;
        return $this;
    }
    
}
