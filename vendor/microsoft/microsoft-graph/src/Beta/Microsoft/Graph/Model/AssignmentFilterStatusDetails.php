<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AssignmentFilterStatusDetails File
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
* AssignmentFilterStatusDetails class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AssignmentFilterStatusDetails extends Entity
{

    /**
    * Gets the deviceProperties
    * Device properties used for filter evaluation during device check-in time.
    *
    * @return KeyValuePair The deviceProperties
    */
    public function getDeviceProperties()
    {
        if (array_key_exists("deviceProperties", $this->_propDict)) {
            if (is_a($this->_propDict["deviceProperties"], "\Beta\Microsoft\Graph\Model\KeyValuePair")) {
                return $this->_propDict["deviceProperties"];
            } else {
                $this->_propDict["deviceProperties"] = new KeyValuePair($this->_propDict["deviceProperties"]);
                return $this->_propDict["deviceProperties"];
            }
        }
        return null;
    }

    /**
    * Sets the deviceProperties
    * Device properties used for filter evaluation during device check-in time.
    *
    * @param KeyValuePair $val The value to assign to the deviceProperties
    *
    * @return AssignmentFilterStatusDetails The AssignmentFilterStatusDetails
    */
    public function setDeviceProperties($val)
    {
        $this->_propDict["deviceProperties"] = $val;
         return $this;
    }

    /**
    * Gets the evalutionSummaries
    * Evaluation result summaries for each filter associated to device and payload
    *
    * @return AssignmentFilterEvaluationSummary The evalutionSummaries
    */
    public function getEvalutionSummaries()
    {
        if (array_key_exists("evalutionSummaries", $this->_propDict)) {
            if (is_a($this->_propDict["evalutionSummaries"], "\Beta\Microsoft\Graph\Model\AssignmentFilterEvaluationSummary")) {
                return $this->_propDict["evalutionSummaries"];
            } else {
                $this->_propDict["evalutionSummaries"] = new AssignmentFilterEvaluationSummary($this->_propDict["evalutionSummaries"]);
                return $this->_propDict["evalutionSummaries"];
            }
        }
        return null;
    }

    /**
    * Sets the evalutionSummaries
    * Evaluation result summaries for each filter associated to device and payload
    *
    * @param AssignmentFilterEvaluationSummary $val The value to assign to the evalutionSummaries
    *
    * @return AssignmentFilterStatusDetails The AssignmentFilterStatusDetails
    */
    public function setEvalutionSummaries($val)
    {
        $this->_propDict["evalutionSummaries"] = $val;
         return $this;
    }
    /**
    * Gets the managedDeviceId
    * Unique identifier for the device object.
    *
    * @return string The managedDeviceId
    */
    public function getManagedDeviceId()
    {
        if (array_key_exists("managedDeviceId", $this->_propDict)) {
            return $this->_propDict["managedDeviceId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the managedDeviceId
    * Unique identifier for the device object.
    *
    * @param string $val The value of the managedDeviceId
    *
    * @return AssignmentFilterStatusDetails
    */
    public function setManagedDeviceId($val)
    {
        $this->_propDict["managedDeviceId"] = $val;
        return $this;
    }
    /**
    * Gets the payloadId
    * Unique identifier for payload object.
    *
    * @return string The payloadId
    */
    public function getPayloadId()
    {
        if (array_key_exists("payloadId", $this->_propDict)) {
            return $this->_propDict["payloadId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the payloadId
    * Unique identifier for payload object.
    *
    * @param string $val The value of the payloadId
    *
    * @return AssignmentFilterStatusDetails
    */
    public function setPayloadId($val)
    {
        $this->_propDict["payloadId"] = $val;
        return $this;
    }
    /**
    * Gets the userId
    * Unique identifier for UserId object. Can be null
    *
    * @return string The userId
    */
    public function getUserId()
    {
        if (array_key_exists("userId", $this->_propDict)) {
            return $this->_propDict["userId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userId
    * Unique identifier for UserId object. Can be null
    *
    * @param string $val The value of the userId
    *
    * @return AssignmentFilterStatusDetails
    */
    public function setUserId($val)
    {
        $this->_propDict["userId"] = $val;
        return $this;
    }
}
