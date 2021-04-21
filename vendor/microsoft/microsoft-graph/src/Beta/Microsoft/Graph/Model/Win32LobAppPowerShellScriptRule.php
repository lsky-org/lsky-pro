<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Win32LobAppPowerShellScriptRule File
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
* Win32LobAppPowerShellScriptRule class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Win32LobAppPowerShellScriptRule extends Win32LobAppRule
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.win32LobAppPowerShellScriptRule");
    }

    /**
    * Gets the comparisonValue
    * The script output comparison value. Do not specify a value if the rule is used for detection.
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
    * The script output comparison value. Do not specify a value if the rule is used for detection.
    *
    * @param string $val The value of the comparisonValue
    *
    * @return Win32LobAppPowerShellScriptRule
    */
    public function setComparisonValue($val)
    {
        $this->_propDict["comparisonValue"] = $val;
        return $this;
    }
    /**
    * Gets the displayName
    * The display name for the rule. Do not specify this value if the rule is used for detection.
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
    * The display name for the rule. Do not specify this value if the rule is used for detection.
    *
    * @param string $val The value of the displayName
    *
    * @return Win32LobAppPowerShellScriptRule
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    /**
    * Gets the enforceSignatureCheck
    * A value indicating whether a signature check is enforced.
    *
    * @return bool The enforceSignatureCheck
    */
    public function getEnforceSignatureCheck()
    {
        if (array_key_exists("enforceSignatureCheck", $this->_propDict)) {
            return $this->_propDict["enforceSignatureCheck"];
        } else {
            return null;
        }
    }

    /**
    * Sets the enforceSignatureCheck
    * A value indicating whether a signature check is enforced.
    *
    * @param bool $val The value of the enforceSignatureCheck
    *
    * @return Win32LobAppPowerShellScriptRule
    */
    public function setEnforceSignatureCheck($val)
    {
        $this->_propDict["enforceSignatureCheck"] = $val;
        return $this;
    }

    /**
    * Gets the operationType
    * The script output comparison operation type. Use NotConfigured (the default value) if the rule is used for detection. Possible values are: notConfigured, string, dateTime, integer, float, version, boolean.
    *
    * @return Win32LobAppPowerShellScriptRuleOperationType The operationType
    */
    public function getOperationType()
    {
        if (array_key_exists("operationType", $this->_propDict)) {
            if (is_a($this->_propDict["operationType"], "\Beta\Microsoft\Graph\Model\Win32LobAppPowerShellScriptRuleOperationType")) {
                return $this->_propDict["operationType"];
            } else {
                $this->_propDict["operationType"] = new Win32LobAppPowerShellScriptRuleOperationType($this->_propDict["operationType"]);
                return $this->_propDict["operationType"];
            }
        }
        return null;
    }

    /**
    * Sets the operationType
    * The script output comparison operation type. Use NotConfigured (the default value) if the rule is used for detection. Possible values are: notConfigured, string, dateTime, integer, float, version, boolean.
    *
    * @param Win32LobAppPowerShellScriptRuleOperationType $val The value to assign to the operationType
    *
    * @return Win32LobAppPowerShellScriptRule The Win32LobAppPowerShellScriptRule
    */
    public function setOperationType($val)
    {
        $this->_propDict["operationType"] = $val;
         return $this;
    }

    /**
    * Gets the operator
    * The script output operator. Use NotConfigured (the default value) if the rule is used for detection. Possible values are: notConfigured, equal, notEqual, greaterThan, greaterThanOrEqual, lessThan, lessThanOrEqual.
    *
    * @return Win32LobAppRuleOperator The operator
    */
    public function getOperator()
    {
        if (array_key_exists("operator", $this->_propDict)) {
            if (is_a($this->_propDict["operator"], "\Beta\Microsoft\Graph\Model\Win32LobAppRuleOperator")) {
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
    * The script output operator. Use NotConfigured (the default value) if the rule is used for detection. Possible values are: notConfigured, equal, notEqual, greaterThan, greaterThanOrEqual, lessThan, lessThanOrEqual.
    *
    * @param Win32LobAppRuleOperator $val The value to assign to the operator
    *
    * @return Win32LobAppPowerShellScriptRule The Win32LobAppPowerShellScriptRule
    */
    public function setOperator($val)
    {
        $this->_propDict["operator"] = $val;
         return $this;
    }
    /**
    * Gets the runAs32Bit
    * A value indicating whether the script should run as 32-bit.
    *
    * @return bool The runAs32Bit
    */
    public function getRunAs32Bit()
    {
        if (array_key_exists("runAs32Bit", $this->_propDict)) {
            return $this->_propDict["runAs32Bit"];
        } else {
            return null;
        }
    }

    /**
    * Sets the runAs32Bit
    * A value indicating whether the script should run as 32-bit.
    *
    * @param bool $val The value of the runAs32Bit
    *
    * @return Win32LobAppPowerShellScriptRule
    */
    public function setRunAs32Bit($val)
    {
        $this->_propDict["runAs32Bit"] = $val;
        return $this;
    }

    /**
    * Gets the runAsAccount
    * The execution context of the script. Do not specify this value if the rule is used for detection. Script detection rules will run in the same context as the associated app install context. Possible values are: system, user.
    *
    * @return RunAsAccountType The runAsAccount
    */
    public function getRunAsAccount()
    {
        if (array_key_exists("runAsAccount", $this->_propDict)) {
            if (is_a($this->_propDict["runAsAccount"], "\Beta\Microsoft\Graph\Model\RunAsAccountType")) {
                return $this->_propDict["runAsAccount"];
            } else {
                $this->_propDict["runAsAccount"] = new RunAsAccountType($this->_propDict["runAsAccount"]);
                return $this->_propDict["runAsAccount"];
            }
        }
        return null;
    }

    /**
    * Sets the runAsAccount
    * The execution context of the script. Do not specify this value if the rule is used for detection. Script detection rules will run in the same context as the associated app install context. Possible values are: system, user.
    *
    * @param RunAsAccountType $val The value to assign to the runAsAccount
    *
    * @return Win32LobAppPowerShellScriptRule The Win32LobAppPowerShellScriptRule
    */
    public function setRunAsAccount($val)
    {
        $this->_propDict["runAsAccount"] = $val;
         return $this;
    }
    /**
    * Gets the scriptContent
    * The base64-encoded script content.
    *
    * @return string The scriptContent
    */
    public function getScriptContent()
    {
        if (array_key_exists("scriptContent", $this->_propDict)) {
            return $this->_propDict["scriptContent"];
        } else {
            return null;
        }
    }

    /**
    * Sets the scriptContent
    * The base64-encoded script content.
    *
    * @param string $val The value of the scriptContent
    *
    * @return Win32LobAppPowerShellScriptRule
    */
    public function setScriptContent($val)
    {
        $this->_propDict["scriptContent"] = $val;
        return $this;
    }
}
