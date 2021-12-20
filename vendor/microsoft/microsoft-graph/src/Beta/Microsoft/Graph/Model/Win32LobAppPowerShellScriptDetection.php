<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Win32LobAppPowerShellScriptDetection File
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
* Win32LobAppPowerShellScriptDetection class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Win32LobAppPowerShellScriptDetection extends Win32LobAppDetection
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.win32LobAppPowerShellScriptDetection");
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
    * @return Win32LobAppPowerShellScriptDetection
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
    * @return Win32LobAppPowerShellScriptDetection
    */
    public function setRunAs32Bit($val)
    {
        $this->_propDict["runAs32Bit"] = $val;
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
    * @return Win32LobAppPowerShellScriptDetection
    */
    public function setScriptContent($val)
    {
        $this->_propDict["scriptContent"] = $val;
        return $this;
    }
}
