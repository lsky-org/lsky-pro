<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TranslationLanguageOverride File
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
* TranslationLanguageOverride class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TranslationLanguageOverride extends Entity
{
    /**
    * Gets the languageTag
    * The language to apply the override.Returned by default. Not nullable.
    *
    * @return string The languageTag
    */
    public function getLanguageTag()
    {
        if (array_key_exists("languageTag", $this->_propDict)) {
            return $this->_propDict["languageTag"];
        } else {
            return null;
        }
    }

    /**
    * Sets the languageTag
    * The language to apply the override.Returned by default. Not nullable.
    *
    * @param string $val The value of the languageTag
    *
    * @return TranslationLanguageOverride
    */
    public function setLanguageTag($val)
    {
        $this->_propDict["languageTag"] = $val;
        return $this;
    }

    /**
    * Gets the translationBehavior
    * The translation override behavior for the language, if any.Returned by default. Not nullable.
    *
    * @return TranslationBehavior The translationBehavior
    */
    public function getTranslationBehavior()
    {
        if (array_key_exists("translationBehavior", $this->_propDict)) {
            if (is_a($this->_propDict["translationBehavior"], "\Beta\Microsoft\Graph\Model\TranslationBehavior")) {
                return $this->_propDict["translationBehavior"];
            } else {
                $this->_propDict["translationBehavior"] = new TranslationBehavior($this->_propDict["translationBehavior"]);
                return $this->_propDict["translationBehavior"];
            }
        }
        return null;
    }

    /**
    * Sets the translationBehavior
    * The translation override behavior for the language, if any.Returned by default. Not nullable.
    *
    * @param TranslationBehavior $val The value to assign to the translationBehavior
    *
    * @return TranslationLanguageOverride The TranslationLanguageOverride
    */
    public function setTranslationBehavior($val)
    {
        $this->_propDict["translationBehavior"] = $val;
         return $this;
    }
}
