<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Win32LobAppPowerShellScriptRequirement File
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
* Win32LobAppPowerShellScriptRequirement class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Win32LobAppPowerShellScriptRequirement extends Win32LobAppRequirement
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.win32LobAppPowerShellScriptRequirement");
    }


    /**
    * Gets the detectionType
    * The detection type for script output. Possible values are: notConfigured, string, dateTime, integer, float, version, boolean.
    *
    * @return Win32LobAppPowerShellScriptDetectionType The detectionType
    */
    public function getDetectionType()
    {
        if (array_key_exists("detectionType", $this->_propDict)) {
            if (is_a($this->_propDict["detectionType"], "\Beta\Microsoft\Graph\Model\Win32LobAppPowerShellScriptDetectionType")) {
                return $this->_propDict["detectionType"];
            } else {
                $this->_propDict["detectionType"] = new Win32LobAppPowerShellScriptDetectionType($this->_propDict["detectionType"]);
                return $this->_propDict["detectionType"];
            }
        }
        return null;
    }

    /**
    * Sets the detectionType
    * The detection type for script output. Possible values are: notConfigured, string, dateTime, integer, float, version, boolean.
    *
    * @param Win32LobAppPowerShellScriptDetectionType $val The value to assign to the detectionType
    *
    * @return Win32LobAppPowerShellScriptRequirement The Win32LobAppPowerShellScriptRequirement
    */
    public function setDetectionType($val)
    {
        $this->_propDict["detectionType"] = $val;
         return $this;
    }
    /**
    * Gets the displayName
    * The unique display name for this rule
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
    * The unique display name for this rule
    *
    * @param string $val The value of the displayName
    *
    * @return Win32LobAppPowerShellScriptRequirement
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    /**
    * Gets the enforceSignatureCheck
    * A value indicating whether signature check is enforced
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
    * A value indicating whether signature check is enforced
    *
    * @param bool $val The value of the enforceSignatureCheck
    *
    * @return Win32LobAppPowerShellScriptRequirement
    */
    public function setEnforceSignatureCheck($val)
    {
        $this->_propDict["enforceSignatureCheck"] = $val;
        return $this;
    }
    /**
    * Gets the runAs32Bit
    * A value indicating whether this script should run as 32-bit
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
    * A value indicating whether this script should run as 32-bit
    *
    * @param bool $val The value of the runAs32Bit
    *
    * @return Win32LobAppPowerShellScriptRequirement
    */
    public function setRunAs32Bit($val)
    {
        $this->_propDict["runAs32Bit"] = $val;
        return $this;
    }

    /**
    * Gets the runAsAccount
    * Indicates the type of execution context the script runs in. Possible values are: system, user.
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
    * Indicates the type of execution context the script runs in. Possible values are: system, user.
    *
    * @param RunAsAccountType $val The value to assign to the runAsAccount
    *
    * @return Win32LobAppPowerShellScriptRequirement The Win32LobAppPowerShellScriptRequirement
    */
    public function setRunAsAccount($val)
    {
        $this->_propDict["runAsAccount"] = $val;
         return $this;
    }
    /**
    * Gets the scriptContent
    * The base64 encoded script content to detect Win32 Line of Business (LoB) app
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
    * The base64 encoded script content to detect Win32 Line of Business (LoB) app
    *
    * @param string $val The value of the scriptContent
    *
    * @return Win32LobAppPowerShellScriptRequirement
    */
    public function setScriptContent($val)
    {
        $this->_propDict["scriptContent"] = $val;
        return $this;
    }
}
