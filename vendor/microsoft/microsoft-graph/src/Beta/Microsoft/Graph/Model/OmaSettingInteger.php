<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OmaSettingInteger File
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
* OmaSettingInteger class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OmaSettingInteger extends OmaSetting
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.omaSettingInteger");
    }

    /**
    * Gets the isReadOnly
    * By setting to true, the CSP (configuration service provider) specified in the OMA-URI will perform a get, instead of set
    *
    * @return bool The isReadOnly
    */
    public function getIsReadOnly()
    {
        if (array_key_exists("isReadOnly", $this->_propDict)) {
            return $this->_propDict["isReadOnly"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isReadOnly
    * By setting to true, the CSP (configuration service provider) specified in the OMA-URI will perform a get, instead of set
    *
    * @param bool $val The value of the isReadOnly
    *
    * @return OmaSettingInteger
    */
    public function setIsReadOnly($val)
    {
        $this->_propDict["isReadOnly"] = $val;
        return $this;
    }
    /**
    * Gets the value
    * Value.
    *
    * @return int The value
    */
    public function getValue()
    {
        if (array_key_exists("value", $this->_propDict)) {
            return $this->_propDict["value"];
        } else {
            return null;
        }
    }

    /**
    * Sets the value
    * Value.
    *
    * @param int $val The value of the value
    *
    * @return OmaSettingInteger
    */
    public function setValue($val)
    {
        $this->_propDict["value"] = $val;
        return $this;
    }
}
