<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ManagedAppDiagnosticStatus File
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
* ManagedAppDiagnosticStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ManagedAppDiagnosticStatus extends Entity
{
    /**
    * Gets the mitigationInstruction
    * Instruction on how to mitigate a failed validation
    *
    * @return string The mitigationInstruction
    */
    public function getMitigationInstruction()
    {
        if (array_key_exists("mitigationInstruction", $this->_propDict)) {
            return $this->_propDict["mitigationInstruction"];
        } else {
            return null;
        }
    }

    /**
    * Sets the mitigationInstruction
    * Instruction on how to mitigate a failed validation
    *
    * @param string $val The value of the mitigationInstruction
    *
    * @return ManagedAppDiagnosticStatus
    */
    public function setMitigationInstruction($val)
    {
        $this->_propDict["mitigationInstruction"] = $val;
        return $this;
    }
    /**
    * Gets the state
    * The state of the operation
    *
    * @return string The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            return $this->_propDict["state"];
        } else {
            return null;
        }
    }

    /**
    * Sets the state
    * The state of the operation
    *
    * @param string $val The value of the state
    *
    * @return ManagedAppDiagnosticStatus
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
        return $this;
    }
    /**
    * Gets the validationName
    * The validation friendly name
    *
    * @return string The validationName
    */
    public function getValidationName()
    {
        if (array_key_exists("validationName", $this->_propDict)) {
            return $this->_propDict["validationName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the validationName
    * The validation friendly name
    *
    * @param string $val The value of the validationName
    *
    * @return ManagedAppDiagnosticStatus
    */
    public function setValidationName($val)
    {
        $this->_propDict["validationName"] = $val;
        return $this;
    }
}
