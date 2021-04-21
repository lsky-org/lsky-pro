<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Win32LobAppRegistryRule File
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
* Win32LobAppRegistryRule class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Win32LobAppRegistryRule extends Win32LobAppRule
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.win32LobAppRegistryRule");
    }

    /**
    * Gets the check32BitOn64System
    * A value indicating whether to search the 32-bit registry on 64-bit systems.
    *
    * @return bool The check32BitOn64System
    */
    public function getCheck32BitOn64System()
    {
        if (array_key_exists("check32BitOn64System", $this->_propDict)) {
            return $this->_propDict["check32BitOn64System"];
        } else {
            return null;
        }
    }

    /**
    * Sets the check32BitOn64System
    * A value indicating whether to search the 32-bit registry on 64-bit systems.
    *
    * @param bool $val The value of the check32BitOn64System
    *
    * @return Win32LobAppRegistryRule
    */
    public function setCheck32BitOn64System($val)
    {
        $this->_propDict["check32BitOn64System"] = $val;
        return $this;
    }
    /**
    * Gets the comparisonValue
    * The registry comparison value.
    *
    * @return string The comparisonValue
    */
    public function getComparisonValue()
    {
        if (array_key_exists("comparisonValue", $this->_propDict)) {
            return $this->_propDict["comparisonValue"];
        } else {
            return null;
        }
    }

    /**
    * Sets the comparisonValue
    * The registry comparison value.
    *
    * @param string $val The value of the comparisonValue
    *
    * @return Win32LobAppRegistryRule
    */
    public function setComparisonValue($val)
    {
        $this->_propDict["comparisonValue"] = $val;
        return $this;
    }
    /**
    * Gets the keyPath
    * The full path of the registry entry containing the value to detect.
    *
    * @return string The keyPath
    */
    public function getKeyPath()
    {
        if (array_key_exists("keyPath", $this->_propDict)) {
            return $this->_propDict["keyPath"];
        } else {
            return null;
        }
    }

    /**
    * Sets the keyPath
    * The full path of the registry entry containing the value to detect.
    *
    * @param string $val The value of the keyPath
    *
    * @return Win32LobAppRegistryRule
    */
    public function setKeyPath($val)
    {
        $this->_propDict["keyPath"] = $val;
        return $this;
    }

    /**
    * Gets the operationType
    * The registry operation type. Possible values are: notConfigured, exists, doesNotExist, string, integer, version.
    *
    * @return Win32LobAppRegistryRuleOperationType The operationType
    */
    public function getOperationType()
    {
        if (array_key_exists("operationType", $this->_propDict)) {
            if (is_a($this->_propDict["operationType"], "\Microsoft\Graph\Model\Win32LobAppRegistryRuleOperationType")) {
                return $this->_propDict["operationType"];
            } else {
                $this->_propDict["operationType"] = new Win32LobAppRegistryRuleOperationType($this->_propDict["operationType"]);
                return $this->_propDict["operationType"];
            }
        }
        return null;
    }

    /**
    * Sets the operationType
    * The registry operation type. Possible values are: notConfigured, exists, doesNotExist, string, integer, version.
    *
    * @param Win32LobAppRegistryRuleOperationType $val The value to assign to the operationType
    *
    * @return Win32LobAppRegistryRule The Win32LobAppRegistryRule
    */
    public function setOperationType($val)
    {
        $this->_propDict["operationType"] = $val;
         return $this;
    }

    /**
    * Gets the operator
    * The operator for registry detection. Possible values are: notConfigured, equal, notEqual, greaterThan, greaterThanOrEqual, lessThan, lessThanOrEqual.
    *
    * @return Win32LobAppRuleOperator The operator
    */
    public function getOperator()
    {
        if (array_key_exists("operator", $this->_propDict)) {
            if (is_a($this->_propDict["operator"], "\Microsoft\Graph\Model\Win32LobAppRuleOperator")) {
                return $this->_propDict["operator"];
            } else {
                $this->_propDict["operator"] = new Win32LobAppRuleOperator($this->_propDict["operator"]);
                return $this->_propDict["operator"];
            }
        }
        return null;
    }

    /**
    * Sets the operator
    * The operator for registry detection. Possible values are: notConfigured, equal, notEqual, greaterThan, greaterThanOrEqual, lessThan, lessThanOrEqual.
    *
    * @param Win32LobAppRuleOperator $val The value to assign to the operator
    *
    * @return Win32LobAppRegistryRule The Win32LobAppRegistryRule
    */
    public function setOperator($val)
    {
        $this->_propDict["operator"] = $val;
         return $this;
    }
    /**
    * Gets the valueName
    * The name of the registry value to detect.
    *
    * @return string The valueName
    */
    public function getValueName()
    {
        if (array_key_exists("valueName", $this->_propDict)) {
            return $this->_propDict["valueName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the valueName
    * The name of the registry value to detect.
    *
    * @param string $val The value of the valueName
    *
    * @return Win32LobAppRegistryRule
    */
    public function setValueName($val)
    {
        $this->_propDict["valueName"] = $val;
        return $this;
    }
}
