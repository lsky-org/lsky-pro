<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ParentalControlSettings File
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
* ParentalControlSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ParentalControlSettings extends Entity
{
    /**
    * Gets the countriesBlockedForMinors
    * Specifies the two-letter ISO country codes. Access to the application will be blocked for minors from the countries specified in this list.
    *
    * @return string The countriesBlockedForMinors
    */
    public function getCountriesBlockedForMinors()
    {
        if (array_key_exists("countriesBlockedForMinors", $this->_propDict)) {
            return $this->_propDict["countriesBlockedForMinors"];
        } else {
            return null;
        }
    }

    /**
    * Sets the countriesBlockedForMinors
    * Specifies the two-letter ISO country codes. Access to the application will be blocked for minors from the countries specified in this list.
    *
    * @param string $val The value of the countriesBlockedForMinors
    *
    * @return ParentalControlSettings
    */
    public function setCountriesBlockedForMinors($val)
    {
        $this->_propDict["countriesBlockedForMinors"] = $val;
        return $this;
    }
    /**
    * Gets the legalAgeGroupRule
    * Specifies the legal age group rule that applies to users of the app. Can be set to one of the following values: ValueDescriptionAllowDefault. Enforces the legal minimum. This means parental consent is required for minors in the European Union and Korea.RequireConsentForPrivacyServicesEnforces the user to specify date of birth to comply with COPPA rules. RequireConsentForMinorsRequires parental consent for ages below 18, regardless of country minor rules.RequireConsentForKidsRequires parental consent for ages below 14, regardless of country minor rules.BlockMinorsBlocks minors from using the app.
    *
    * @return string The legalAgeGroupRule
    */
    public function getLegalAgeGroupRule()
    {
        if (array_key_exists("legalAgeGroupRule", $this->_propDict)) {
            return $this->_propDict["legalAgeGroupRule"];
        } else {
            return null;
        }
    }

    /**
    * Sets the legalAgeGroupRule
    * Specifies the legal age group rule that applies to users of the app. Can be set to one of the following values: ValueDescriptionAllowDefault. Enforces the legal minimum. This means parental consent is required for minors in the European Union and Korea.RequireConsentForPrivacyServicesEnforces the user to specify date of birth to comply with COPPA rules. RequireConsentForMinorsRequires parental consent for ages below 18, regardless of country minor rules.RequireConsentForKidsRequires parental consent for ages below 14, regardless of country minor rules.BlockMinorsBlocks minors from using the app.
    *
    * @param string $val The value of the legalAgeGroupRule
    *
    * @return ParentalControlSettings
    */
    public function setLegalAgeGroupRule($val)
    {
        $this->_propDict["legalAgeGroupRule"] = $val;
        return $this;
    }
}
