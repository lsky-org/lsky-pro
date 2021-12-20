<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserFlowLanguageConfiguration File
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
* UserFlowLanguageConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserFlowLanguageConfiguration extends Entity
{
    /**
    * Gets the displayName
    * The language name to display. This property is read-only.
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
    * The language name to display. This property is read-only.
    *
    * @param string $val The displayName
    *
    * @return UserFlowLanguageConfiguration
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the isEnabled
    * Indicates whether the language is enabled within the user flow.
    *
    * @return bool The isEnabled
    */
    public function getIsEnabled()
    {
        if (array_key_exists("isEnabled", $this->_propDict)) {
            return $this->_propDict["isEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isEnabled
    * Indicates whether the language is enabled within the user flow.
    *
    * @param bool $val The isEnabled
    *
    * @return UserFlowLanguageConfiguration
    */
    public function setIsEnabled($val)
    {
        $this->_propDict["isEnabled"] = boolval($val);
        return $this;
    }
    

     /** 
     * Gets the defaultPages
    * Collection of pages with the default content to display in a user flow for a specified language. This collection does not allow any kind of modification.
     *
     * @return array The defaultPages
     */
    public function getDefaultPages()
    {
        if (array_key_exists("defaultPages", $this->_propDict)) {
           return $this->_propDict["defaultPages"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the defaultPages
    * Collection of pages with the default content to display in a user flow for a specified language. This collection does not allow any kind of modification.
    *
    * @param UserFlowLanguagePage $val The defaultPages
    *
    * @return UserFlowLanguageConfiguration
    */
    public function setDefaultPages($val)
    {
		$this->_propDict["defaultPages"] = $val;
        return $this;
    }
    

     /** 
     * Gets the overridesPages
    * Collection of pages with the overrides messages to display in a user flow for a specified language. This collection only allows to modify the content of the page, any other modification is not allowed (creation or deletion of pages).
     *
     * @return array The overridesPages
     */
    public function getOverridesPages()
    {
        if (array_key_exists("overridesPages", $this->_propDict)) {
           return $this->_propDict["overridesPages"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the overridesPages
    * Collection of pages with the overrides messages to display in a user flow for a specified language. This collection only allows to modify the content of the page, any other modification is not allowed (creation or deletion of pages).
    *
    * @param UserFlowLanguagePage $val The overridesPages
    *
    * @return UserFlowLanguageConfiguration
    */
    public function setOverridesPages($val)
    {
		$this->_propDict["overridesPages"] = $val;
        return $this;
    }
    
}
