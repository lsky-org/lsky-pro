<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Windows10SecureAssessmentConfiguration File
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
* Windows10SecureAssessmentConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Windows10SecureAssessmentConfiguration extends DeviceConfiguration
{
    /**
    * Gets the allowPrinting
    * Indicates whether or not to allow the app from printing during the test.
    *
    * @return bool The allowPrinting
    */
    public function getAllowPrinting()
    {
        if (array_key_exists("allowPrinting", $this->_propDict)) {
            return $this->_propDict["allowPrinting"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the allowPrinting
    * Indicates whether or not to allow the app from printing during the test.
    *
    * @param bool $val The allowPrinting
    *
    * @return Windows10SecureAssessmentConfiguration
    */
    public function setAllowPrinting($val)
    {
        $this->_propDict["allowPrinting"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the allowScreenCapture
    * Indicates whether or not to allow screen capture capability during a test.
    *
    * @return bool The allowScreenCapture
    */
    public function getAllowScreenCapture()
    {
        if (array_key_exists("allowScreenCapture", $this->_propDict)) {
            return $this->_propDict["allowScreenCapture"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the allowScreenCapture
    * Indicates whether or not to allow screen capture capability during a test.
    *
    * @param bool $val The allowScreenCapture
    *
    * @return Windows10SecureAssessmentConfiguration
    */
    public function setAllowScreenCapture($val)
    {
        $this->_propDict["allowScreenCapture"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the allowTextSuggestion
    * Indicates whether or not to allow text suggestions during the test.
    *
    * @return bool The allowTextSuggestion
    */
    public function getAllowTextSuggestion()
    {
        if (array_key_exists("allowTextSuggestion", $this->_propDict)) {
            return $this->_propDict["allowTextSuggestion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the allowTextSuggestion
    * Indicates whether or not to allow text suggestions during the test.
    *
    * @param bool $val The allowTextSuggestion
    *
    * @return Windows10SecureAssessmentConfiguration
    */
    public function setAllowTextSuggestion($val)
    {
        $this->_propDict["allowTextSuggestion"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the assessmentAppUserModelId
    * Specifies the application user model ID of the assessment app launched when a user signs in to a secure assessment with a local guest account. Important notice: this property must be set with localGuestAccountName in order to make the local guest account sign-in experience work properly for secure assessments.
    *
    * @return string The assessmentAppUserModelId
    */
    public function getAssessmentAppUserModelId()
    {
        if (array_key_exists("assessmentAppUserModelId", $this->_propDict)) {
            return $this->_propDict["assessmentAppUserModelId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the assessmentAppUserModelId
    * Specifies the application user model ID of the assessment app launched when a user signs in to a secure assessment with a local guest account. Important notice: this property must be set with localGuestAccountName in order to make the local guest account sign-in experience work properly for secure assessments.
    *
    * @param string $val The assessmentAppUserModelId
    *
    * @return Windows10SecureAssessmentConfiguration
    */
    public function setAssessmentAppUserModelId($val)
    {
        $this->_propDict["assessmentAppUserModelId"] = $val;
        return $this;
    }
    
    /**
    * Gets the configurationAccount
    * The account used to configure the Windows device for taking the test. The user can be a domain account (domain/user), an AAD account (username@tenant.com) or a local account (username).
    *
    * @return string The configurationAccount
    */
    public function getConfigurationAccount()
    {
        if (array_key_exists("configurationAccount", $this->_propDict)) {
            return $this->_propDict["configurationAccount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the configurationAccount
    * The account used to configure the Windows device for taking the test. The user can be a domain account (domain/user), an AAD account (username@tenant.com) or a local account (username).
    *
    * @param string $val The configurationAccount
    *
    * @return Windows10SecureAssessmentConfiguration
    */
    public function setConfigurationAccount($val)
    {
        $this->_propDict["configurationAccount"] = $val;
        return $this;
    }
    
    /**
    * Gets the configurationAccountType
    * The account type used to by ConfigurationAccount. Possible values are: azureADAccount, domainAccount, localAccount, localGuestAccount.
    *
    * @return SecureAssessmentAccountType The configurationAccountType
    */
    public function getConfigurationAccountType()
    {
        if (array_key_exists("configurationAccountType", $this->_propDict)) {
            if (is_a($this->_propDict["configurationAccountType"], "\Beta\Microsoft\Graph\Model\SecureAssessmentAccountType")) {
                return $this->_propDict["configurationAccountType"];
            } else {
                $this->_propDict["configurationAccountType"] = new SecureAssessmentAccountType($this->_propDict["configurationAccountType"]);
                return $this->_propDict["configurationAccountType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the configurationAccountType
    * The account type used to by ConfigurationAccount. Possible values are: azureADAccount, domainAccount, localAccount, localGuestAccount.
    *
    * @param SecureAssessmentAccountType $val The configurationAccountType
    *
    * @return Windows10SecureAssessmentConfiguration
    */
    public function setConfigurationAccountType($val)
    {
        $this->_propDict["configurationAccountType"] = $val;
        return $this;
    }
    
    /**
    * Gets the launchUri
    * Url link to an assessment that's automatically loaded when the secure assessment browser is launched. It has to be a valid Url (http[s]://msdn.microsoft.com/).
    *
    * @return string The launchUri
    */
    public function getLaunchUri()
    {
        if (array_key_exists("launchUri", $this->_propDict)) {
            return $this->_propDict["launchUri"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the launchUri
    * Url link to an assessment that's automatically loaded when the secure assessment browser is launched. It has to be a valid Url (http[s]://msdn.microsoft.com/).
    *
    * @param string $val The launchUri
    *
    * @return Windows10SecureAssessmentConfiguration
    */
    public function setLaunchUri($val)
    {
        $this->_propDict["launchUri"] = $val;
        return $this;
    }
    
    /**
    * Gets the localGuestAccountName
    * Specifies the display text for the local guest account shown on the sign-in screen. Typically is the name of an assessment. When the user clicks the local guest account on the sign-in screen, an assessment app is launched with a specified assessment URL. Secure assessments can only be configured with local guest account sign-in on devices running Windows 10, version 1903 or later. Important notice: this property must be set with assessmentAppUserModelID in order to make the local guest account sign-in experience work properly for secure assessments.
    *
    * @return string The localGuestAccountName
    */
    public function getLocalGuestAccountName()
    {
        if (array_key_exists("localGuestAccountName", $this->_propDict)) {
            return $this->_propDict["localGuestAccountName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the localGuestAccountName
    * Specifies the display text for the local guest account shown on the sign-in screen. Typically is the name of an assessment. When the user clicks the local guest account on the sign-in screen, an assessment app is launched with a specified assessment URL. Secure assessments can only be configured with local guest account sign-in on devices running Windows 10, version 1903 or later. Important notice: this property must be set with assessmentAppUserModelID in order to make the local guest account sign-in experience work properly for secure assessments.
    *
    * @param string $val The localGuestAccountName
    *
    * @return Windows10SecureAssessmentConfiguration
    */
    public function setLocalGuestAccountName($val)
    {
        $this->_propDict["localGuestAccountName"] = $val;
        return $this;
    }
    
}
