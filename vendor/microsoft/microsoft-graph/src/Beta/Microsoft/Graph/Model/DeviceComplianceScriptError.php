<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceComplianceScriptError File
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
* DeviceComplianceScriptError class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceComplianceScriptError extends Entity
{

    /**
    * Gets the code
    * Error code. Possible values are: none, jsonFileInvalid, jsonFileMissing, jsonFileTooLarge, rulesMissing, duplicateRules, tooManyRulesSpecified, operatorMissing, operatorNotSupported, datatypeMissing, datatypeNotSupported, operatorDataTypeCombinationNotSupported, moreInfoUriMissing, moreInfoUriInvalid, moreInfoUriTooLarge, descriptionMissing, descriptionInvalid, descriptionTooLarge, titleMissing, titleInvalid, titleTooLarge, operandMissing, operandInvalid, operandTooLarge, settingNameMissing, settingNameInvalid, settingNameTooLarge, englishLocaleMissing, duplicateLocales, unrecognizedLocale, unknown, remediationStringsMissing.
    *
    * @return Code The code
    */
    public function getCode()
    {
        if (array_key_exists("code", $this->_propDict)) {
            if (is_a($this->_propDict["code"], "\Beta\Microsoft\Graph\Model\Code")) {
                return $this->_propDict["code"];
            } else {
                $this->_propDict["code"] = new Code($this->_propDict["code"]);
                return $this->_propDict["code"];
            }
        }
        return null;
    }

    /**
    * Sets the code
    * Error code. Possible values are: none, jsonFileInvalid, jsonFileMissing, jsonFileTooLarge, rulesMissing, duplicateRules, tooManyRulesSpecified, operatorMissing, operatorNotSupported, datatypeMissing, datatypeNotSupported, operatorDataTypeCombinationNotSupported, moreInfoUriMissing, moreInfoUriInvalid, moreInfoUriTooLarge, descriptionMissing, descriptionInvalid, descriptionTooLarge, titleMissing, titleInvalid, titleTooLarge, operandMissing, operandInvalid, operandTooLarge, settingNameMissing, settingNameInvalid, settingNameTooLarge, englishLocaleMissing, duplicateLocales, unrecognizedLocale, unknown, remediationStringsMissing.
    *
    * @param Code $val The value to assign to the code
    *
    * @return DeviceComplianceScriptError The DeviceComplianceScriptError
    */
    public function setCode($val)
    {
        $this->_propDict["code"] = $val;
         return $this;
    }

    /**
    * Gets the deviceComplianceScriptRulesValidationError
    * Error code. Possible values are: none, jsonFileInvalid, jsonFileMissing, jsonFileTooLarge, rulesMissing, duplicateRules, tooManyRulesSpecified, operatorMissing, operatorNotSupported, datatypeMissing, datatypeNotSupported, operatorDataTypeCombinationNotSupported, moreInfoUriMissing, moreInfoUriInvalid, moreInfoUriTooLarge, descriptionMissing, descriptionInvalid, descriptionTooLarge, titleMissing, titleInvalid, titleTooLarge, operandMissing, operandInvalid, operandTooLarge, settingNameMissing, settingNameInvalid, settingNameTooLarge, englishLocaleMissing, duplicateLocales, unrecognizedLocale, unknown, remediationStringsMissing.
    *
    * @return DeviceComplianceScriptRulesValidationError The deviceComplianceScriptRulesValidationError
    */
    public function getDeviceComplianceScriptRulesValidationError()
    {
        if (array_key_exists("deviceComplianceScriptRulesValidationError", $this->_propDict)) {
            if (is_a($this->_propDict["deviceComplianceScriptRulesValidationError"], "\Beta\Microsoft\Graph\Model\DeviceComplianceScriptRulesValidationError")) {
                return $this->_propDict["deviceComplianceScriptRulesValidationError"];
            } else {
                $this->_propDict["deviceComplianceScriptRulesValidationError"] = new DeviceComplianceScriptRulesValidationError($this->_propDict["deviceComplianceScriptRulesValidationError"]);
                return $this->_propDict["deviceComplianceScriptRulesValidationError"];
            }
        }
        return null;
    }

    /**
    * Sets the deviceComplianceScriptRulesValidationError
    * Error code. Possible values are: none, jsonFileInvalid, jsonFileMissing, jsonFileTooLarge, rulesMissing, duplicateRules, tooManyRulesSpecified, operatorMissing, operatorNotSupported, datatypeMissing, datatypeNotSupported, operatorDataTypeCombinationNotSupported, moreInfoUriMissing, moreInfoUriInvalid, moreInfoUriTooLarge, descriptionMissing, descriptionInvalid, descriptionTooLarge, titleMissing, titleInvalid, titleTooLarge, operandMissing, operandInvalid, operandTooLarge, settingNameMissing, settingNameInvalid, settingNameTooLarge, englishLocaleMissing, duplicateLocales, unrecognizedLocale, unknown, remediationStringsMissing.
    *
    * @param DeviceComplianceScriptRulesValidationError $val The value to assign to the deviceComplianceScriptRulesValidationError
    *
    * @return DeviceComplianceScriptError The DeviceComplianceScriptError
    */
    public function setDeviceComplianceScriptRulesValidationError($val)
    {
        $this->_propDict["deviceComplianceScriptRulesValidationError"] = $val;
         return $this;
    }
    /**
    * Gets the message
    * Error message.
    *
    * @return string The message
    */
    public function getMessage()
    {
        if (array_key_exists("message", $this->_propDict)) {
            return $this->_propDict["message"];
        } else {
            return null;
        }
    }

    /**
    * Sets the message
    * Error message.
    *
    * @param string $val The value of the message
    *
    * @return DeviceComplianceScriptError
    */
    public function setMessage($val)
    {
        $this->_propDict["message"] = $val;
        return $this;
    }
}
