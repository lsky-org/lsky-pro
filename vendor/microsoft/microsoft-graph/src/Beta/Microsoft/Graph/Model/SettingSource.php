<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SettingSource File
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
* SettingSource class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SettingSource extends Entity
{
    /**
    * Gets the displayName
    * Not yet documented
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
    * Not yet documented
    *
    * @param string $val The value of the displayName
    *
    * @return SettingSource
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    /**
    * Gets the id
    * Not yet documented
    *
    * @return string The id
    */
    public function getId()
    {
        if (array_key_exists("id", $this->_propDict)) {
            return $this->_propDict["id"];
        } else {
            return null;
        }
    }

    /**
    * Sets the id
    * Not yet documented
    *
    * @param string $val The value of the id
    *
    * @return SettingSource
    */
    public function setId($val)
    {
        $this->_propDict["id"] = $val;
        return $this;
    }

    /**
    * Gets the sourceType
    * Not yet documented. Possible values are: deviceConfiguration, deviceIntent.
    *
    * @return SettingSourceType The sourceType
    */
    public function getSourceType()
    {
        if (array_key_exists("sourceType", $this->_propDict)) {
            if (is_a($this->_propDict["sourceType"], "\Beta\Microsoft\Graph\Model\SettingSourceType")) {
                return $this->_propDict["sourceType"];
            } else {
                $this->_propDict["sourceType"] = new SettingSourceType($this->_propDict["sourceType"]);
                return $this->_propDict["sourceType"];
            }
        }
        return null;
    }

    /**
    * Sets the sourceType
    * Not yet documented. Possible values are: deviceConfiguration, deviceIntent.
    *
    * @param SettingSourceType $val The value to assign to the sourceType
    *
    * @return SettingSource The SettingSource
    */
    public function setSourceType($val)
    {
        $this->_propDict["sourceType"] = $val;
         return $this;
    }
}
