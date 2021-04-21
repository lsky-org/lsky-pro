<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AssignmentFilterTypeAndEvaluationResult File
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
* AssignmentFilterTypeAndEvaluationResult class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AssignmentFilterTypeAndEvaluationResult extends Entity
{

    /**
    * Gets the assignmentFilterType
    * Represents the filter type. Possible values are: none, include, exclude.
    *
    * @return DeviceAndAppManagementAssignmentFilterType The assignmentFilterType
    */
    public function getAssignmentFilterType()
    {
        if (array_key_exists("assignmentFilterType", $this->_propDict)) {
            if (is_a($this->_propDict["assignmentFilterType"], "\Beta\Microsoft\Graph\Model\DeviceAndAppManagementAssignmentFilterType")) {
                return $this->_propDict["assignmentFilterType"];
            } else {
                $this->_propDict["assignmentFilterType"] = new DeviceAndAppManagementAssignmentFilterType($this->_propDict["assignmentFilterType"]);
                return $this->_propDict["assignmentFilterType"];
            }
        }
        return null;
    }

    /**
    * Sets the assignmentFilterType
    * Represents the filter type. Possible values are: none, include, exclude.
    *
    * @param DeviceAndAppManagementAssignmentFilterType $val The value to assign to the assignmentFilterType
    *
    * @return AssignmentFilterTypeAndEvaluationResult The AssignmentFilterTypeAndEvaluationResult
    */
    public function setAssignmentFilterType($val)
    {
        $this->_propDict["assignmentFilterType"] = $val;
         return $this;
    }

    /**
    * Gets the evaluationResult
    * Represents the evalaution result of the filter. Possible values are: unknown, match, notMatch, inconclusive, failure, notEvaluated.
    *
    * @return AssignmentFilterEvaluationResult The evaluationResult
    */
    public function getEvaluationResult()
    {
        if (array_key_exists("evaluationResult", $this->_propDict)) {
            if (is_a($this->_propDict["evaluationResult"], "\Beta\Microsoft\Graph\Model\AssignmentFilterEvaluationResult")) {
                return $this->_propDict["evaluationResult"];
            } else {
                $this->_propDict["evaluationResult"] = new AssignmentFilterEvaluationResult($this->_propDict["evaluationResult"]);
                return $this->_propDict["evaluationResult"];
            }
        }
        return null;
    }

    /**
    * Sets the evaluationResult
    * Represents the evalaution result of the filter. Possible values are: unknown, match, notMatch, inconclusive, failure, notEvaluated.
    *
    * @param AssignmentFilterEvaluationResult $val The value to assign to the evaluationResult
    *
    * @return AssignmentFilterTypeAndEvaluationResult The AssignmentFilterTypeAndEvaluationResult
    */
    public function setEvaluationResult($val)
    {
        $this->_propDict["evaluationResult"] = $val;
         return $this;
    }
}
