<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ColumnValidation File
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
* ColumnValidation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ColumnValidation extends Entity
{
    /**
    * Gets the defaultLanguage
    * Default BCP 47 language tag for the description.
    *
    * @return string The defaultLanguage
    */
    public function getDefaultLanguage()
    {
        if (array_key_exists("defaultLanguage", $this->_propDict)) {
            return $this->_propDict["defaultLanguage"];
        } else {
            return null;
        }
    }

    /**
    * Sets the defaultLanguage
    * Default BCP 47 language tag for the description.
    *
    * @param string $val The value of the defaultLanguage
    *
    * @return ColumnValidation
    */
    public function setDefaultLanguage($val)
    {
        $this->_propDict["defaultLanguage"] = $val;
        return $this;
    }

    /**
    * Gets the descriptions
    * Localized messages that explain what is needed for this column's value to be considered valid. User will be prompted with this message if validation fails.
    *
    * @return DisplayNameLocalization The descriptions
    */
    public function getDescriptions()
    {
        if (array_key_exists("descriptions", $this->_propDict)) {
            if (is_a($this->_propDict["descriptions"], "\Beta\Microsoft\Graph\Model\DisplayNameLocalization")) {
                return $this->_propDict["descriptions"];
            } else {
                $this->_propDict["descriptions"] = new DisplayNameLocalization($this->_propDict["descriptions"]);
                return $this->_propDict["descriptions"];
            }
        }
        return null;
    }

    /**
    * Sets the descriptions
    * Localized messages that explain what is needed for this column's value to be considered valid. User will be prompted with this message if validation fails.
    *
    * @param DisplayNameLocalization $val The value to assign to the descriptions
    *
    * @return ColumnValidation The ColumnValidation
    */
    public function setDescriptions($val)
    {
        $this->_propDict["descriptions"] = $val;
         return $this;
    }
    /**
    * Gets the formula
    * The formula to validate column value. For examples, see Examples of common formulas in lists
    *
    * @return string The formula
    */
    public function getFormula()
    {
        if (array_key_exists("formula", $this->_propDict)) {
            return $this->_propDict["formula"];
        } else {
            return null;
        }
    }

    /**
    * Sets the formula
    * The formula to validate column value. For examples, see Examples of common formulas in lists
    *
    * @param string $val The value of the formula
    *
    * @return ColumnValidation
    */
    public function setFormula($val)
    {
        $this->_propDict["formula"] = $val;
        return $this;
    }
}
