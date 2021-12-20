<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamsAppDefinition File
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
* TeamsAppDefinition class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TeamsAppDefinition extends Entity
{
    /**
    * Gets the allowedInstallationScopes
    *
    * @return TeamsAppInstallationScopes The allowedInstallationScopes
    */
    public function getAllowedInstallationScopes()
    {
        if (array_key_exists("allowedInstallationScopes", $this->_propDict)) {
            if (is_a($this->_propDict["allowedInstallationScopes"], "\Beta\Microsoft\Graph\Model\TeamsAppInstallationScopes")) {
                return $this->_propDict["allowedInstallationScopes"];
            } else {
                $this->_propDict["allowedInstallationScopes"] = new TeamsAppInstallationScopes($this->_propDict["allowedInstallationScopes"]);
                return $this->_propDict["allowedInstallationScopes"];
            }
        }
        return null;
    }
    
    /**
    * Sets the allowedInstallationScopes
    *
    * @param TeamsAppInstallationScopes $val The allowedInstallationScopes
    *
    * @return TeamsAppDefinition
    */
    public function setAllowedInstallationScopes($val)
    {
        $this->_propDict["allowedInstallationScopes"] = $val;
        return $this;
    }
    
    /**
    * Gets the azureADAppId
    * The WebApplicationInfo.id from the Teams App manifest.
    *
    * @return string The azureADAppId
    */
    public function getAzureADAppId()
    {
        if (array_key_exists("azureADAppId", $this->_propDict)) {
            return $this->_propDict["azureADAppId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the azureADAppId
    * The WebApplicationInfo.id from the Teams App manifest.
    *
    * @param string $val The azureADAppId
    *
    * @return TeamsAppDefinition
    */
    public function setAzureADAppId($val)
    {
        $this->_propDict["azureADAppId"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdBy
    *
    * @return IdentitySet The createdBy
    */
    public function getCreatedBy()
    {
        if (array_key_exists("createdBy", $this->_propDict)) {
            if (is_a($this->_propDict["createdBy"], "\Beta\Microsoft\Graph\Model\IdentitySet")) {
                return $this->_propDict["createdBy"];
            } else {
                $this->_propDict["createdBy"] = new IdentitySet($this->_propDict["createdBy"]);
                return $this->_propDict["createdBy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the createdBy
    *
    * @param IdentitySet $val The createdBy
    *
    * @return TeamsAppDefinition
    */
    public function setCreatedBy($val)
    {
        $this->_propDict["createdBy"] = $val;
        return $this;
    }
    
    /**
    * Gets the description
    * Verbose description of the application.
    *
    * @return string The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the description
    * Verbose description of the application.
    *
    * @param string $val The description
    *
    * @return TeamsAppDefinition
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * The name of the app provided by the app developer.
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
    * The name of the app provided by the app developer.
    *
    * @param string $val The displayName
    *
    * @return TeamsAppDefinition
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastModifiedDateTime
    *
    * @return \DateTime The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedDateTime"], "\DateTime")) {
                return $this->_propDict["lastModifiedDateTime"];
            } else {
                $this->_propDict["lastModifiedDateTime"] = new \DateTime($this->_propDict["lastModifiedDateTime"]);
                return $this->_propDict["lastModifiedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastModifiedDateTime
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return TeamsAppDefinition
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the publishingState
    * The published status of a specific version of a Teams app. Possible values are:submitted — The specific version of the Teams app has been submitted and is under review. published  — The request to publish the specific version of the Teams app has been approved by the admin and the app is published.  rejected — The request to publish the specific version of the Teams app was rejected by the admin.
    *
    * @return TeamsAppPublishingState The publishingState
    */
    public function getPublishingState()
    {
        if (array_key_exists("publishingState", $this->_propDict)) {
            if (is_a($this->_propDict["publishingState"], "\Beta\Microsoft\Graph\Model\TeamsAppPublishingState")) {
                return $this->_propDict["publishingState"];
            } else {
                $this->_propDict["publishingState"] = new TeamsAppPublishingState($this->_propDict["publishingState"]);
                return $this->_propDict["publishingState"];
            }
        }
        return null;
    }
    
    /**
    * Sets the publishingState
    * The published status of a specific version of a Teams app. Possible values are:submitted — The specific version of the Teams app has been submitted and is under review. published  — The request to publish the specific version of the Teams app has been approved by the admin and the app is published.  rejected — The request to publish the specific version of the Teams app was rejected by the admin.
    *
    * @param TeamsAppPublishingState $val The publishingState
    *
    * @return TeamsAppDefinition
    */
    public function setPublishingState($val)
    {
        $this->_propDict["publishingState"] = $val;
        return $this;
    }
    
    /**
    * Gets the shortdescription
    *
    * @return string The shortdescription
    */
    public function getShortdescription()
    {
        if (array_key_exists("shortdescription", $this->_propDict)) {
            return $this->_propDict["shortdescription"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the shortdescription
    *
    * @param string $val The shortdescription
    *
    * @return TeamsAppDefinition
    */
    public function setShortdescription($val)
    {
        $this->_propDict["shortdescription"] = $val;
        return $this;
    }
    
    /**
    * Gets the teamsAppId
    * The id from the Teams App manifest.
    *
    * @return string The teamsAppId
    */
    public function getTeamsAppId()
    {
        if (array_key_exists("teamsAppId", $this->_propDict)) {
            return $this->_propDict["teamsAppId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the teamsAppId
    * The id from the Teams App manifest.
    *
    * @param string $val The teamsAppId
    *
    * @return TeamsAppDefinition
    */
    public function setTeamsAppId($val)
    {
        $this->_propDict["teamsAppId"] = $val;
        return $this;
    }
    
    /**
    * Gets the version
    * The version number of the application.
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
    * The version number of the application.
    *
    * @param string $val The version
    *
    * @return TeamsAppDefinition
    */
    public function setVersion($val)
    {
        $this->_propDict["version"] = $val;
        return $this;
    }
    
    /**
    * Gets the bot
    * The details of the bot specified in the Teams App manifest.
    *
    * @return TeamworkBot The bot
    */
    public function getBot()
    {
        if (array_key_exists("bot", $this->_propDict)) {
            if (is_a($this->_propDict["bot"], "\Beta\Microsoft\Graph\Model\TeamworkBot")) {
                return $this->_propDict["bot"];
            } else {
                $this->_propDict["bot"] = new TeamworkBot($this->_propDict["bot"]);
                return $this->_propDict["bot"];
            }
        }
        return null;
    }
    
    /**
    * Sets the bot
    * The details of the bot specified in the Teams App manifest.
    *
    * @param TeamworkBot $val The bot
    *
    * @return TeamsAppDefinition
    */
    public function setBot($val)
    {
        $this->_propDict["bot"] = $val;
        return $this;
    }
    
}
