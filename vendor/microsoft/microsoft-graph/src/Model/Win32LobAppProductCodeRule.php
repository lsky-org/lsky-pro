<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Win32LobAppProductCodeRule File
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
* Win32LobAppProductCodeRule class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Win32LobAppProductCodeRule extends Win32LobAppRule
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.win32LobAppProductCodeRule");
    }

    /**
    * Gets the productCode
    * The product code of the app.
    *
    * @return string The productCode
    */
    public function getProductCode()
    {
        if (array_key_exists("productCode", $this->_propDict)) {
            return $this->_propDict["productCode"];
        } else {
            return null;
        }
    }

    /**
    * Sets the productCode
    * The product code of the app.
    *
    * @param string $val The value of the productCode
    *
    * @return Win32LobAppProductCodeRule
    */
    public function setProductCode($val)
    {
        $this->_propDict["productCode"] = $val;
        return $this;
    }
    /**
    * Gets the productVersion
    * The product version comparison value.
    *
    * @return string The productVersion
    */
    public function getProductVersion()
    {
        if (array_key_exists("productVersion", $this->_propDict)) {
            return $this->_propDict["productVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the productVersion
    * The product version comparison value.
    *
    * @param string $val The value of the productVersion
    *
    * @return Win32LobAppProductCodeRule
    */
    public function setProductVersion($val)
    {
        $this->_propDict["productVersion"] = $val;
        return $this;
    }

    /**
    * Gets the productVersionOperator
    * The product version comparison operator. Possible values are: notConfigured, equal, notEqual, greaterThan, greaterThanOrEqual, lessThan, lessThanOrEqual.
    *
    * @return Win32LobAppRuleOperator The productVersionOperator
    */
    public function getProductVersionOperator()
    {
        if (array_key_exists("productVersionOperator", $this->_propDict)) {
            if (is_a($this->_propDict["productVersionOperator"], "\Microsoft\Graph\Model\Win32LobAppRuleOperator")) {
                return $this->_propDict["productVersionOperator"];
            } else {
                $this->_propDict["productVersionOperator"] = new Win32LobAppRuleOperator($this->_propDict["productVersionOperator"]);
                return $this->_propDict["productVersionOperator"];
            }
        }
        return null;
    }

    /**
    * Sets the productVersionOperator
    * The product version comparison operator. Possible values are: notConfigured, equal, notEqual, greaterThan, greaterThanOrEqual, lessThan, lessThanOrEqual.
    *
    * @param Win32LobAppRuleOperator $val The value to assign to the productVersionOperator
    *
    * @return Win32LobAppProductCodeRule The Win32LobAppProductCodeRule
    */
    public function setProductVersionOperator($val)
    {
        $this->_propDict["productVersionOperator"] = $val;
         return $this;
    }
}
