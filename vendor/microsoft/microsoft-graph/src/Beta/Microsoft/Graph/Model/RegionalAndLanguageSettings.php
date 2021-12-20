<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RegionalAndLanguageSettings File
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
* RegionalAndLanguageSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RegionalAndLanguageSettings extends Entity
{

     /** 
     * Gets the authoringLanguages
    * Prioritized list of languages the user reads and authors in.Returned by default. Not nullable.
     *
     * @return array The authoringLanguages
     */
    public function getAuthoringLanguages()
    {
        if (array_key_exists("authoringLanguages", $this->_propDict)) {
           return $this->_propDict["authoringLanguages"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the authoringLanguages
    * Prioritized list of languages the user reads and authors in.Returned by default. Not nullable.
    *
    * @param LocaleInfo $val The authoringLanguages
    *
    * @return RegionalAndLanguageSettings
    */
    public function setAuthoringLanguages($val)
    {
		$this->_propDict["authoringLanguages"] = $val;
        return $this;
    }
    
    /**
    * Gets the defaultDisplayLanguage
    * The  user's preferred user interface language (menus, buttons, ribbons, warning messages) for Microsoft web applications.Returned by default. Not nullable.
    *
    * @return LocaleInfo The defaultDisplayLanguage
    */
    public function getDefaultDisplayLanguage()
    {
        if (array_key_exists("defaultDisplayLanguage", $this->_propDict)) {
            if (is_a($this->_propDict["defaultDisplayLanguage"], "\Beta\Microsoft\Graph\Model\LocaleInfo")) {
                return $this->_propDict["defaultDisplayLanguage"];
            } else {
                $this->_propDict["defaultDisplayLanguage"] = new LocaleInfo($this->_propDict["defaultDisplayLanguage"]);
                return $this->_propDict["defaultDisplayLanguage"];
            }
        }
        return null;
    }
    
    /**
    * Sets the defaultDisplayLanguage
    * The  user's preferred user interface language (menus, buttons, ribbons, warning messages) for Microsoft web applications.Returned by default. Not nullable.
    *
    * @param LocaleInfo $val The defaultDisplayLanguage
    *
    * @return RegionalAndLanguageSettings
    */
    public function setDefaultDisplayLanguage($val)
    {
        $this->_propDict["defaultDisplayLanguage"] = $val;
        return $this;
    }
    
    /**
    * Gets the defaultRegionalFormat
    * The locale that drives the default date, time, and calendar formatting.Returned by default.
    *
    * @return LocaleInfo The defaultRegionalFormat
    */
    public function getDefaultRegionalFormat()
    {
        if (array_key_exists("defaultRegionalFormat", $this->_propDict)) {
            if (is_a($this->_propDict["defaultRegionalFormat"], "\Beta\Microsoft\Graph\Model\LocaleInfo")) {
                return $this->_propDict["defaultRegionalFormat"];
            } else {
                $this->_propDict["defaultRegionalFormat"] = new LocaleInfo($this->_propDict["defaultRegionalFormat"]);
                return $this->_propDict["defaultRegionalFormat"];
            }
        }
        return null;
    }
    
    /**
    * Sets the defaultRegionalFormat
    * The locale that drives the default date, time, and calendar formatting.Returned by default.
    *
    * @param LocaleInfo $val The defaultRegionalFormat
    *
    * @return RegionalAndLanguageSettings
    */
    public function setDefaultRegionalFormat($val)
    {
        $this->_propDict["defaultRegionalFormat"] = $val;
        return $this;
    }
    
    /**
    * Gets the defaultSpeechInputLanguage
    * The language a user expected to use as input for text to speech scenarios.Returned by default.
    *
    * @return LocaleInfo The defaultSpeechInputLanguage
    */
    public function getDefaultSpeechInputLanguage()
    {
        if (array_key_exists("defaultSpeechInputLanguage", $this->_propDict)) {
            if (is_a($this->_propDict["defaultSpeechInputLanguage"], "\Beta\Microsoft\Graph\Model\LocaleInfo")) {
                return $this->_propDict["defaultSpeechInputLanguage"];
            } else {
                $this->_propDict["defaultSpeechInputLanguage"] = new LocaleInfo($this->_propDict["defaultSpeechInputLanguage"]);
                return $this->_propDict["defaultSpeechInputLanguage"];
            }
        }
        return null;
    }
    
    /**
    * Sets the defaultSpeechInputLanguage
    * The language a user expected to use as input for text to speech scenarios.Returned by default.
    *
    * @param LocaleInfo $val The defaultSpeechInputLanguage
    *
    * @return RegionalAndLanguageSettings
    */
    public function setDefaultSpeechInputLanguage($val)
    {
        $this->_propDict["defaultSpeechInputLanguage"] = $val;
        return $this;
    }
    
    /**
    * Gets the defaultTranslationLanguage
    * The language a user expects to have documents, emails, and messages translated into.Returned by default.
    *
    * @return LocaleInfo The defaultTranslationLanguage
    */
    public function getDefaultTranslationLanguage()
    {
        if (array_key_exists("defaultTranslationLanguage", $this->_propDict)) {
            if (is_a($this->_propDict["defaultTranslationLanguage"], "\Beta\Microsoft\Graph\Model\LocaleInfo")) {
                return $this->_propDict["defaultTranslationLanguage"];
            } else {
                $this->_propDict["defaultTranslationLanguage"] = new LocaleInfo($this->_propDict["defaultTranslationLanguage"]);
                return $this->_propDict["defaultTranslationLanguage"];
            }
        }
        return null;
    }
    
    /**
    * Sets the defaultTranslationLanguage
    * The language a user expects to have documents, emails, and messages translated into.Returned by default.
    *
    * @param LocaleInfo $val The defaultTranslationLanguage
    *
    * @return RegionalAndLanguageSettings
    */
    public function setDefaultTranslationLanguage($val)
    {
        $this->_propDict["defaultTranslationLanguage"] = $val;
        return $this;
    }
    
    /**
    * Gets the regionalFormatOverrides
    * Allows a user to override their defaultRegionalFormat with field specific formats.Returned by default.
    *
    * @return RegionalFormatOverrides The regionalFormatOverrides
    */
    public function getRegionalFormatOverrides()
    {
        if (array_key_exists("regionalFormatOverrides", $this->_propDict)) {
            if (is_a($this->_propDict["regionalFormatOverrides"], "\Beta\Microsoft\Graph\Model\RegionalFormatOverrides")) {
                return $this->_propDict["regionalFormatOverrides"];
            } else {
                $this->_propDict["regionalFormatOverrides"] = new RegionalFormatOverrides($this->_propDict["regionalFormatOverrides"]);
                return $this->_propDict["regionalFormatOverrides"];
            }
        }
        return null;
    }
    
    /**
    * Sets the regionalFormatOverrides
    * Allows a user to override their defaultRegionalFormat with field specific formats.Returned by default.
    *
    * @param RegionalFormatOverrides $val The regionalFormatOverrides
    *
    * @return RegionalAndLanguageSettings
    */
    public function setRegionalFormatOverrides($val)
    {
        $this->_propDict["regionalFormatOverrides"] = $val;
        return $this;
    }
    
    /**
    * Gets the translationPreferences
    * The user's preferred settings when consuming translated documents, emails, messages, and websites.Returned by default. Not nullable.
    *
    * @return TranslationPreferences The translationPreferences
    */
    public function getTranslationPreferences()
    {
        if (array_key_exists("translationPreferences", $this->_propDict)) {
            if (is_a($this->_propDict["translationPreferences"], "\Beta\Microsoft\Graph\Model\TranslationPreferences")) {
                return $this->_propDict["translationPreferences"];
            } else {
                $this->_propDict["translationPreferences"] = new TranslationPreferences($this->_propDict["translationPreferences"]);
                return $this->_propDict["translationPreferences"];
            }
        }
        return null;
    }
    
    /**
    * Sets the translationPreferences
    * The user's preferred settings when consuming translated documents, emails, messages, and websites.Returned by default. Not nullable.
    *
    * @param TranslationPreferences $val The translationPreferences
    *
    * @return RegionalAndLanguageSettings
    */
    public function setTranslationPreferences($val)
    {
        $this->_propDict["translationPreferences"] = $val;
        return $this;
    }
    
}
