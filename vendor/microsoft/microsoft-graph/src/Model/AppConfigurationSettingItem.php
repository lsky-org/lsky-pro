<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AppConfigurationSettingItem File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;
/**
* AppConfigurationSettingItem class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AppConfigurationSettingItem extends Entity
{
    /**
    * Gets the appConfigKey
    * app configuration key.
    *
    * @return string The appConfigKey
    */
    public function getAppConfigKey()
    {
        if (array_key_exists("appConfigKey", $this->_propDict)) {
            return $this->_propDict["appConfigKey"];
        } else {
            return null;
        }
    }

    /**
    * Sets the appConfigKey
    * app configuration key.
    *
    * @param string $val The value of the appConfigKey
    *
    * @return AppConfigurationSettingItem
    */
    public function setAppConfigKey($val)
    {
        $this->_propDict["appConfigKey"] = $val;
        return $this;
    }

    /**
    * Gets the appConfigKeyType
    * app configuration key type. Possible values are: stringType, integerType, realType, booleanType, tokenType.
    *
    * @return MdmAppConfigKeyType The appConfigKeyType
    */
    public function getAppConfigKeyType()
    {
        if (array_key_exists("appConfigKeyType", $this->_propDict)) {
            if (is_a($this->_propDict["appConfigKeyType"], "\Microsoft\Graph\Model\MdmAppConfigKeyType")) {
                return $this->_propDict["appConfigKeyType"];
            } else {
                $this->_propDict["appConfigKeyType"] = new MdmAppConfigKeyType($this->_propDict["appConfigKeyType"]);
                return $this->_propDict["appConfigKeyType"];
            }
        }
        return null;
    }

    /**
    * Sets the appConfigKeyType
    * app configuration key type. Possible values are: stringType, integerType, realType, booleanType, tokenType.
    *
    * @param MdmAppConfigKeyType $val The value to assign to the appConfigKeyType
    *
    * @return AppConfigurationSettingItem The AppConfigurationSettingItem
    */
    public function setAppConfigKeyType($val)
    {
        $this->_propDict["appConfigKeyType"] = $val;
         return $this;
    }
    /**
    * Gets the appConfigKeyValue
    * app configuration key value.
    *
    * @return string The appConfigKeyValue
    */
    public function getAppConfigKeyValue()
    {
        if (array_key_exists("appConfigKeyValue", $this->_propDict)) {
            return $this->_propDict["appConfigKeyValue"];
        } else {
            return null;
        }
    }

    /**
    * Sets the appConfigKeyValue
    * app configuration key value.
    *
    * @param string $val The value of the appConfigKeyValue
    *
    * @return AppConfigurationSettingItem
    */
    public function setAppConfigKeyValue($val)
    {
        $this->_propDict["appConfigKeyValue"] = $val;
        return $this;
    }
}
