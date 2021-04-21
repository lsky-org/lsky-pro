<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ApplicationTemplate File
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
* ApplicationTemplate class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ApplicationTemplate extends Entity
{
    /**
    * Gets the categories
    * The list of categories for the application. Supported values can be: Collaboration, Business Management, Consumer,Content management, CRM, Data services, Developer services, E-commerce, Education, ERP, Finance, Health, Human resources, IT infrastructure, Mail, Management, Marketing, Media, Productivity, Project management, Telecommunications, Tools, Travel, and Web design &amp; hosting.
    *
    * @return string The categories
    */
    public function getCategories()
    {
        if (array_key_exists("categories", $this->_propDict)) {
            return $this->_propDict["categories"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the categories
    * The list of categories for the application. Supported values can be: Collaboration, Business Management, Consumer,Content management, CRM, Data services, Developer services, E-commerce, Education, ERP, Finance, Health, Human resources, IT infrastructure, Mail, Management, Marketing, Media, Productivity, Project management, Telecommunications, Tools, Travel, and Web design &amp; hosting.
    *
    * @param string $val The categories
    *
    * @return ApplicationTemplate
    */
    public function setCategories($val)
    {
        $this->_propDict["categories"] = $val;
        return $this;
    }
    
    /**
    * Gets the description
    * A description of the application.
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
    * A description of the application.
    *
    * @param string $val The description
    *
    * @return ApplicationTemplate
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * The name of the application.
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
    * The name of the application.
    *
    * @param string $val The displayName
    *
    * @return ApplicationTemplate
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the homePageUrl
    * The home page URL of the application.
    *
    * @return string The homePageUrl
    */
    public function getHomePageUrl()
    {
        if (array_key_exists("homePageUrl", $this->_propDict)) {
            return $this->_propDict["homePageUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the homePageUrl
    * The home page URL of the application.
    *
    * @param string $val The homePageUrl
    *
    * @return ApplicationTemplate
    */
    public function setHomePageUrl($val)
    {
        $this->_propDict["homePageUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the logoUrl
    * The URL to get the logo for this application.
    *
    * @return string The logoUrl
    */
    public function getLogoUrl()
    {
        if (array_key_exists("logoUrl", $this->_propDict)) {
            return $this->_propDict["logoUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the logoUrl
    * The URL to get the logo for this application.
    *
    * @param string $val The logoUrl
    *
    * @return ApplicationTemplate
    */
    public function setLogoUrl($val)
    {
        $this->_propDict["logoUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the publisher
    * The name of the publisher for this application.
    *
    * @return string The publisher
    */
    public function getPublisher()
    {
        if (array_key_exists("publisher", $this->_propDict)) {
            return $this->_propDict["publisher"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the publisher
    * The name of the publisher for this application.
    *
    * @param string $val The publisher
    *
    * @return ApplicationTemplate
    */
    public function setPublisher($val)
    {
        $this->_propDict["publisher"] = $val;
        return $this;
    }
    
    /**
    * Gets the supportedProvisioningTypes
    * The list of provisioning modes supported by this application. The only valid value is sync.
    *
    * @return string The supportedProvisioningTypes
    */
    public function getSupportedProvisioningTypes()
    {
        if (array_key_exists("supportedProvisioningTypes", $this->_propDict)) {
            return $this->_propDict["supportedProvisioningTypes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the supportedProvisioningTypes
    * The list of provisioning modes supported by this application. The only valid value is sync.
    *
    * @param string $val The supportedProvisioningTypes
    *
    * @return ApplicationTemplate
    */
    public function setSupportedProvisioningTypes($val)
    {
        $this->_propDict["supportedProvisioningTypes"] = $val;
        return $this;
    }
    
    /**
    * Gets the supportedSingleSignOnModes
    * The list of single sign-on modes supported by this application. The supported values are oidc, password, saml, and notSupported.
    *
    * @return string The supportedSingleSignOnModes
    */
    public function getSupportedSingleSignOnModes()
    {
        if (array_key_exists("supportedSingleSignOnModes", $this->_propDict)) {
            return $this->_propDict["supportedSingleSignOnModes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the supportedSingleSignOnModes
    * The list of single sign-on modes supported by this application. The supported values are oidc, password, saml, and notSupported.
    *
    * @param string $val The supportedSingleSignOnModes
    *
    * @return ApplicationTemplate
    */
    public function setSupportedSingleSignOnModes($val)
    {
        $this->_propDict["supportedSingleSignOnModes"] = $val;
        return $this;
    }
    
}
