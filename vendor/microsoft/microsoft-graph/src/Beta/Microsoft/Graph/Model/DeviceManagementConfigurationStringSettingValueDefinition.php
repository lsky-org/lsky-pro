<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementConfigurationStringSettingValueDefinition File
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
* DeviceManagementConfigurationStringSettingValueDefinition class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementConfigurationStringSettingValueDefinition extends DeviceManagementConfigurationSettingValueDefinition
{

    /**
    * Gets the format
    * Pre-defined format of the string. Possible values are: none, email, guid, ip, base64, url, version, xml, date, time, binary, regEx, json, dateTime, surfaceHub.
    *
    * @return DeviceManagementConfigurationStringFormat The format
    */
    public function getFormat()
    {
        if (array_key_exists("format", $this->_propDict)) {
            if (is_a($this->_propDict["format"], "\Beta\Microsoft\Graph\Model\DeviceManagementConfigurationStringFormat")) {
                return $this->_propDict["format"];
            } else {
                $this->_propDict["format"] = new DeviceManagementConfigurationStringFormat($this->_propDict["format"]);
                return $this->_propDict["format"];
            }
        }
        return null;
    }

    /**
    * Sets the format
    * Pre-defined format of the string. Possible values are: none, email, guid, ip, base64, url, version, xml, date, time, binary, regEx, json, dateTime, surfaceHub.
    *
    * @param DeviceManagementConfigurationStringFormat $val The value to assign to the format
    *
    * @return DeviceManagementConfigurationStringSettingValueDefinition The DeviceManagementConfigurationStringSettingValueDefinition
    */
    public function setFormat($val)
    {
        $this->_propDict["format"] = $val;
         return $this;
    }
    /**
    * Gets the inputValidationSchema
    * Regular expression or any xml or json schema that the input string should match
    *
    * @return string The inputValidationSchema
    */
    public function getInputValidationSchema()
    {
        if (array_key_exists("inputValidationSchema", $this->_propDict)) {
            return $this->_propDict["inputValidationSchema"];
        } else {
            return null;
        }
    }

    /**
    * Sets the inputValidationSchema
    * Regular expression or any xml or json schema that the input string should match
    *
    * @param string $val The value of the inputValidationSchema
    *
    * @return DeviceManagementConfigurationStringSettingValueDefinition
    */
    public function setInputValidationSchema($val)
    {
        $this->_propDict["inputValidationSchema"] = $val;
        return $this;
    }
    /**
    * Gets the isSecret
    * Specifies whether the setting needs to be treated as a secret. Settings marked as yes will be encrypted in transit and at rest and will be displayed as asterisks when represented in the UX.
    *
    * @return bool The isSecret
    */
    public function getIsSecret()
    {
        if (array_key_exists("isSecret", $this->_propDict)) {
            return $this->_propDict["isSecret"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isSecret
    * Specifies whether the setting needs to be treated as a secret. Settings marked as yes will be encrypted in transit and at rest and will be displayed as asterisks when represented in the UX.
    *
    * @param bool $val The value of the isSecret
    *
    * @return DeviceManagementConfigurationStringSettingValueDefinition
    */
    public function setIsSecret($val)
    {
        $this->_propDict["isSecret"] = $val;
        return $this;
    }
    /**
    * Gets the maximumLength
    * Maximum length of string. Valid values 0 to 87516
    *
    * @return int The maximumLength
    */
    public function getMaximumLength()
    {
        if (array_key_exists("maximumLength", $this->_propDict)) {
            return $this->_propDict["maximumLength"];
        } else {
            return null;
        }
    }

    /**
    * Sets the maximumLength
    * Maximum length of string. Valid values 0 to 87516
    *
    * @param int $val The value of the maximumLength
    *
    * @return DeviceManagementConfigurationStringSettingValueDefinition
    */
    public function setMaximumLength($val)
    {
        $this->_propDict["maximumLength"] = $val;
        return $this;
    }
    /**
    * Gets the minimumLength
    * Minimum length of string. Valid values 0 to 87516
    *
    * @return int The minimumLength
    */
    public function getMinimumLength()
    {
        if (array_key_exists("minimumLength", $this->_propDict)) {
            return $this->_propDict["minimumLength"];
        } else {
            return null;
        }
    }

    /**
    * Sets the minimumLength
    * Minimum length of string. Valid values 0 to 87516
    *
    * @param int $val The value of the minimumLength
    *
    * @return DeviceManagementConfigurationStringSettingValueDefinition
    */
    public function setMinimumLength($val)
    {
        $this->_propDict["minimumLength"] = $val;
        return $this;
    }
}
