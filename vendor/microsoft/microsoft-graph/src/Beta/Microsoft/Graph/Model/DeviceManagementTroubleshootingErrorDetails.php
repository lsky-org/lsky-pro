<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementTroubleshootingErrorDetails File
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
* DeviceManagementTroubleshootingErrorDetails class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementTroubleshootingErrorDetails extends Entity
{
    /**
    * Gets the context
    * Not yet documented
    *
    * @return string The context
    */
    public function getContext()
    {
        if (array_key_exists("context", $this->_propDict)) {
            return $this->_propDict["context"];
        } else {
            return null;
        }
    }

    /**
    * Sets the context
    * Not yet documented
    *
    * @param string $val The value of the context
    *
    * @return DeviceManagementTroubleshootingErrorDetails
    */
    public function setContext($val)
    {
        $this->_propDict["context"] = $val;
        return $this;
    }
    /**
    * Gets the failure
    * Not yet documented
    *
    * @return string The failure
    */
    public function getFailure()
    {
        if (array_key_exists("failure", $this->_propDict)) {
            return $this->_propDict["failure"];
        } else {
            return null;
        }
    }

    /**
    * Sets the failure
    * Not yet documented
    *
    * @param string $val The value of the failure
    *
    * @return DeviceManagementTroubleshootingErrorDetails
    */
    public function setFailure($val)
    {
        $this->_propDict["failure"] = $val;
        return $this;
    }
    /**
    * Gets the failureDetails
    * The detailed description of what went wrong.
    *
    * @return string The failureDetails
    */
    public function getFailureDetails()
    {
        if (array_key_exists("failureDetails", $this->_propDict)) {
            return $this->_propDict["failureDetails"];
        } else {
            return null;
        }
    }

    /**
    * Sets the failureDetails
    * The detailed description of what went wrong.
    *
    * @param string $val The value of the failureDetails
    *
    * @return DeviceManagementTroubleshootingErrorDetails
    */
    public function setFailureDetails($val)
    {
        $this->_propDict["failureDetails"] = $val;
        return $this;
    }
    /**
    * Gets the remediation
    * The detailed description of how to remediate this issue.
    *
    * @return string The remediation
    */
    public function getRemediation()
    {
        if (array_key_exists("remediation", $this->_propDict)) {
            return $this->_propDict["remediation"];
        } else {
            return null;
        }
    }

    /**
    * Sets the remediation
    * The detailed description of how to remediate this issue.
    *
    * @param string $val The value of the remediation
    *
    * @return DeviceManagementTroubleshootingErrorDetails
    */
    public function setRemediation($val)
    {
        $this->_propDict["remediation"] = $val;
        return $this;
    }

    /**
    * Gets the resources
    * Links to helpful documentation about this failure.
    *
    * @return DeviceManagementTroubleshootingErrorResource The resources
    */
    public function getResources()
    {
        if (array_key_exists("resources", $this->_propDict)) {
            if (is_a($this->_propDict["resources"], "\Beta\Microsoft\Graph\Model\DeviceManagementTroubleshootingErrorResource")) {
                return $this->_propDict["resources"];
            } else {
                $this->_propDict["resources"] = new DeviceManagementTroubleshootingErrorResource($this->_propDict["resources"]);
                return $this->_propDict["resources"];
            }
        }
        return null;
    }

    /**
    * Sets the resources
    * Links to helpful documentation about this failure.
    *
    * @param DeviceManagementTroubleshootingErrorResource $val The value to assign to the resources
    *
    * @return DeviceManagementTroubleshootingErrorDetails The DeviceManagementTroubleshootingErrorDetails
    */
    public function setResources($val)
    {
        $this->_propDict["resources"] = $val;
         return $this;
    }
}
