<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PasswordSingleSignOnField File
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
* PasswordSingleSignOnField class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PasswordSingleSignOnField extends Entity
{
    /**
    * Gets the customizedLabel
    * Title/label override for customization.
    *
    * @return string The customizedLabel
    */
    public function getCustomizedLabel()
    {
        if (array_key_exists("customizedLabel", $this->_propDict)) {
            return $this->_propDict["customizedLabel"];
        } else {
            return null;
        }
    }

    /**
    * Sets the customizedLabel
    * Title/label override for customization.
    *
    * @param string $val The value of the customizedLabel
    *
    * @return PasswordSingleSignOnField
    */
    public function setCustomizedLabel($val)
    {
        $this->_propDict["customizedLabel"] = $val;
        return $this;
    }
    /**
    * Gets the defaultLabel
    * Label that would be used if no customizedLabel is provided. Read only.
    *
    * @return string The defaultLabel
    */
    public function getDefaultLabel()
    {
        if (array_key_exists("defaultLabel", $this->_propDict)) {
            return $this->_propDict["defaultLabel"];
        } else {
            return null;
        }
    }

    /**
    * Sets the defaultLabel
    * Label that would be used if no customizedLabel is provided. Read only.
    *
    * @param string $val The value of the defaultLabel
    *
    * @return PasswordSingleSignOnField
    */
    public function setDefaultLabel($val)
    {
        $this->_propDict["defaultLabel"] = $val;
        return $this;
    }
    /**
    * Gets the fieldId
    * Id used to identity the field type. This is an internal id and possible values are param_1, param_2, param_userName, param_password.
    *
    * @return string The fieldId
    */
    public function getFieldId()
    {
        if (array_key_exists("fieldId", $this->_propDict)) {
            return $this->_propDict["fieldId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the fieldId
    * Id used to identity the field type. This is an internal id and possible values are param_1, param_2, param_userName, param_password.
    *
    * @param string $val The value of the fieldId
    *
    * @return PasswordSingleSignOnField
    */
    public function setFieldId($val)
    {
        $this->_propDict["fieldId"] = $val;
        return $this;
    }
    /**
    * Gets the type
    * Type of the credential. The values can be text, password.
    *
    * @return string The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            return $this->_propDict["type"];
        } else {
            return null;
        }
    }

    /**
    * Sets the type
    * Type of the credential. The values can be text, password.
    *
    * @param string $val The value of the type
    *
    * @return PasswordSingleSignOnField
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
        return $this;
    }
}
