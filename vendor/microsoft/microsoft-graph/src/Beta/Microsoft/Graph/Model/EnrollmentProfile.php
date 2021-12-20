<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EnrollmentProfile File
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
* EnrollmentProfile class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EnrollmentProfile extends Entity
{
    /**
    * Gets the configurationEndpointUrl
    * Configuration endpoint url to use for Enrollment
    *
    * @return string The configurationEndpointUrl
    */
    public function getConfigurationEndpointUrl()
    {
        if (array_key_exists("configurationEndpointUrl", $this->_propDict)) {
            return $this->_propDict["configurationEndpointUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the configurationEndpointUrl
    * Configuration endpoint url to use for Enrollment
    *
    * @param string $val The configurationEndpointUrl
    *
    * @return EnrollmentProfile
    */
    public function setConfigurationEndpointUrl($val)
    {
        $this->_propDict["configurationEndpointUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the description
    * Description of the profile
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
    * Description of the profile
    *
    * @param string $val The description
    *
    * @return EnrollmentProfile
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * Name of the profile
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
    * Name of the profile
    *
    * @param string $val The displayName
    *
    * @return EnrollmentProfile
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the enableAuthenticationViaCompanyPortal
    * Indicates to authenticate with Apple Setup Assistant instead of Company Portal.
    *
    * @return bool The enableAuthenticationViaCompanyPortal
    */
    public function getEnableAuthenticationViaCompanyPortal()
    {
        if (array_key_exists("enableAuthenticationViaCompanyPortal", $this->_propDict)) {
            return $this->_propDict["enableAuthenticationViaCompanyPortal"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the enableAuthenticationViaCompanyPortal
    * Indicates to authenticate with Apple Setup Assistant instead of Company Portal.
    *
    * @param bool $val The enableAuthenticationViaCompanyPortal
    *
    * @return EnrollmentProfile
    */
    public function setEnableAuthenticationViaCompanyPortal($val)
    {
        $this->_propDict["enableAuthenticationViaCompanyPortal"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the requireCompanyPortalOnSetupAssistantEnrolledDevices
    * Indicates that Company Portal is required on setup assistant enrolled devices
    *
    * @return bool The requireCompanyPortalOnSetupAssistantEnrolledDevices
    */
    public function getRequireCompanyPortalOnSetupAssistantEnrolledDevices()
    {
        if (array_key_exists("requireCompanyPortalOnSetupAssistantEnrolledDevices", $this->_propDict)) {
            return $this->_propDict["requireCompanyPortalOnSetupAssistantEnrolledDevices"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the requireCompanyPortalOnSetupAssistantEnrolledDevices
    * Indicates that Company Portal is required on setup assistant enrolled devices
    *
    * @param bool $val The requireCompanyPortalOnSetupAssistantEnrolledDevices
    *
    * @return EnrollmentProfile
    */
    public function setRequireCompanyPortalOnSetupAssistantEnrolledDevices($val)
    {
        $this->_propDict["requireCompanyPortalOnSetupAssistantEnrolledDevices"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the requiresUserAuthentication
    * Indicates if the profile requires user authentication
    *
    * @return bool The requiresUserAuthentication
    */
    public function getRequiresUserAuthentication()
    {
        if (array_key_exists("requiresUserAuthentication", $this->_propDict)) {
            return $this->_propDict["requiresUserAuthentication"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the requiresUserAuthentication
    * Indicates if the profile requires user authentication
    *
    * @param bool $val The requiresUserAuthentication
    *
    * @return EnrollmentProfile
    */
    public function setRequiresUserAuthentication($val)
    {
        $this->_propDict["requiresUserAuthentication"] = boolval($val);
        return $this;
    }
    
}
