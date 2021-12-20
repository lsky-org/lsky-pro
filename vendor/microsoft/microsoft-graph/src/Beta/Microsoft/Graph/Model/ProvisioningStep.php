<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ProvisioningStep File
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
* ProvisioningStep class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ProvisioningStep extends Entity
{
    /**
    * Gets the description
    * Summary of what occurred during the step.
    *
    * @return string The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }

    /**
    * Sets the description
    * Summary of what occurred during the step.
    *
    * @param string $val The value of the description
    *
    * @return ProvisioningStep
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the details
    * Details of what occurred during the step.
    *
    * @return DetailsInfo The details
    */
    public function getDetails()
    {
        if (array_key_exists("details", $this->_propDict)) {
            if (is_a($this->_propDict["details"], "\Beta\Microsoft\Graph\Model\DetailsInfo")) {
                return $this->_propDict["details"];
            } else {
                $this->_propDict["details"] = new DetailsInfo($this->_propDict["details"]);
                return $this->_propDict["details"];
            }
        }
        return null;
    }

    /**
    * Sets the details
    * Details of what occurred during the step.
    *
    * @param DetailsInfo $val The value to assign to the details
    *
    * @return ProvisioningStep The ProvisioningStep
    */
    public function setDetails($val)
    {
        $this->_propDict["details"] = $val;
         return $this;
    }
    /**
    * Gets the name
    * Name of the step.
    *
    * @return string The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }

    /**
    * Sets the name
    * Name of the step.
    *
    * @param string $val The value of the name
    *
    * @return ProvisioningStep
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }

    /**
    * Gets the provisioningStepType
    * Type of step. Possible values are: import, scoping, matching, processing, referenceResolution, export, unknownFutureValue.
    *
    * @return ProvisioningStepType The provisioningStepType
    */
    public function getProvisioningStepType()
    {
        if (array_key_exists("provisioningStepType", $this->_propDict)) {
            if (is_a($this->_propDict["provisioningStepType"], "\Beta\Microsoft\Graph\Model\ProvisioningStepType")) {
                return $this->_propDict["provisioningStepType"];
            } else {
                $this->_propDict["provisioningStepType"] = new ProvisioningStepType($this->_propDict["provisioningStepType"]);
                return $this->_propDict["provisioningStepType"];
            }
        }
        return null;
    }

    /**
    * Sets the provisioningStepType
    * Type of step. Possible values are: import, scoping, matching, processing, referenceResolution, export, unknownFutureValue.
    *
    * @param ProvisioningStepType $val The value to assign to the provisioningStepType
    *
    * @return ProvisioningStep The ProvisioningStep
    */
    public function setProvisioningStepType($val)
    {
        $this->_propDict["provisioningStepType"] = $val;
         return $this;
    }

    /**
    * Gets the status
    * Status of the step. Possible values are: success, warning,  failure, skipped, unknownFutureValue.
    *
    * @return ProvisioningResult The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\Model\ProvisioningResult")) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new ProvisioningResult($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    * Status of the step. Possible values are: success, warning,  failure, skipped, unknownFutureValue.
    *
    * @param ProvisioningResult $val The value to assign to the status
    *
    * @return ProvisioningStep The ProvisioningStep
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
         return $this;
    }
}
