<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AssignmentFilterEvaluationSummary File
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
* AssignmentFilterEvaluationSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AssignmentFilterEvaluationSummary extends Entity
{
    /**
    * Gets the assignmentFilterDisplayName
    * The admin defined name for assignment filter.
    *
    * @return string The assignmentFilterDisplayName
    */
    public function getAssignmentFilterDisplayName()
    {
        if (array_key_exists("assignmentFilterDisplayName", $this->_propDict)) {
            return $this->_propDict["assignmentFilterDisplayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the assignmentFilterDisplayName
    * The admin defined name for assignment filter.
    *
    * @param string $val The value of the assignmentFilterDisplayName
    *
    * @return AssignmentFilterEvaluationSummary
    */
    public function setAssignmentFilterDisplayName($val)
    {
        $this->_propDict["assignmentFilterDisplayName"] = $val;
        return $this;
    }
    /**
    * Gets the assignmentFilterId
    * Unique identifier for the assignment filter object
    *
    * @return string The assignmentFilterId
    */
    public function getAssignmentFilterId()
    {
        if (array_key_exists("assignmentFilterId", $this->_propDict)) {
            return $this->_propDict["assignmentFilterId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the assignmentFilterId
    * Unique identifier for the assignment filter object
    *
    * @param string $val The value of the assignmentFilterId
    *
    * @return AssignmentFilterEvaluationSummary
    */
    public function setAssignmentFilterId($val)
    {
        $this->_propDict["assignmentFilterId"] = $val;
        return $this;
    }

    /**
    * Gets the assignmentFilterLastModifiedDateTime
    * The time the assignment filter was last modified.
    *
    * @return \DateTime The assignmentFilterLastModifiedDateTime
    */
    public function getAssignmentFilterLastModifiedDateTime()
    {
        if (array_key_exists("assignmentFilterLastModifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["assignmentFilterLastModifiedDateTime"], "\DateTime")) {
                return $this->_propDict["assignmentFilterLastModifiedDateTime"];
            } else {
                $this->_propDict["assignmentFilterLastModifiedDateTime"] = new \DateTime($this->_propDict["assignmentFilterLastModifiedDateTime"]);
                return $this->_propDict["assignmentFilterLastModifiedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the assignmentFilterLastModifiedDateTime
    * The time the assignment filter was last modified.
    *
    * @param \DateTime $val The value to assign to the assignmentFilterLastModifiedDateTime
    *
    * @return AssignmentFilterEvaluationSummary The AssignmentFilterEvaluationSummary
    */
    public function setAssignmentFilterLastModifiedDateTime($val)
    {
        $this->_propDict["assignmentFilterLastModifiedDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the assignmentFilterPlatform
    * The platform for which this assignment filter is created. Possible values are: android, androidForWork, iOS, macOS, windowsPhone81, windows81AndLater, windows10AndLater, androidWorkProfile, unknown.
    *
    * @return DevicePlatformType The assignmentFilterPlatform
    */
    public function getAssignmentFilterPlatform()
    {
        if (array_key_exists("assignmentFilterPlatform", $this->_propDict)) {
            if (is_a($this->_propDict["assignmentFilterPlatform"], "\Beta\Microsoft\Graph\Model\DevicePlatformType")) {
                return $this->_propDict["assignmentFilterPlatform"];
            } else {
                $this->_propDict["assignmentFilterPlatform"] = new DevicePlatformType($this->_propDict["assignmentFilterPlatform"]);
                return $this->_propDict["assignmentFilterPlatform"];
            }
        }
        return null;
    }

    /**
    * Sets the assignmentFilterPlatform
    * The platform for which this assignment filter is created. Possible values are: android, androidForWork, iOS, macOS, windowsPhone81, windows81AndLater, windows10AndLater, androidWorkProfile, unknown.
    *
    * @param DevicePlatformType $val The value to assign to the assignmentFilterPlatform
    *
    * @return AssignmentFilterEvaluationSummary The AssignmentFilterEvaluationSummary
    */
    public function setAssignmentFilterPlatform($val)
    {
        $this->_propDict["assignmentFilterPlatform"] = $val;
         return $this;
    }

    /**
    * Gets the assignmentFilterType
    * Indicate filter type either include or exclude. Possible values are: none, include, exclude.
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
    * Indicate filter type either include or exclude. Possible values are: none, include, exclude.
    *
    * @param DeviceAndAppManagementAssignmentFilterType $val The value to assign to the assignmentFilterType
    *
    * @return AssignmentFilterEvaluationSummary The AssignmentFilterEvaluationSummary
    */
    public function setAssignmentFilterType($val)
    {
        $this->_propDict["assignmentFilterType"] = $val;
         return $this;
    }

    /**
    * Gets the assignmentFilterTypeAndEvaluationResults
    * A collection of filter types and their corresponding evaluation results.
    *
    * @return AssignmentFilterTypeAndEvaluationResult The assignmentFilterTypeAndEvaluationResults
    */
    public function getAssignmentFilterTypeAndEvaluationResults()
    {
        if (array_key_exists("assignmentFilterTypeAndEvaluationResults", $this->_propDict)) {
            if (is_a($this->_propDict["assignmentFilterTypeAndEvaluationResults"], "\Beta\Microsoft\Graph\Model\AssignmentFilterTypeAndEvaluationResult")) {
                return $this->_propDict["assignmentFilterTypeAndEvaluationResults"];
            } else {
                $this->_propDict["assignmentFilterTypeAndEvaluationResults"] = new AssignmentFilterTypeAndEvaluationResult($this->_propDict["assignmentFilterTypeAndEvaluationResults"]);
                return $this->_propDict["assignmentFilterTypeAndEvaluationResults"];
            }
        }
        return null;
    }

    /**
    * Sets the assignmentFilterTypeAndEvaluationResults
    * A collection of filter types and their corresponding evaluation results.
    *
    * @param AssignmentFilterTypeAndEvaluationResult $val The value to assign to the assignmentFilterTypeAndEvaluationResults
    *
    * @return AssignmentFilterEvaluationSummary The AssignmentFilterEvaluationSummary
    */
    public function setAssignmentFilterTypeAndEvaluationResults($val)
    {
        $this->_propDict["assignmentFilterTypeAndEvaluationResults"] = $val;
         return $this;
    }

    /**
    * Gets the evaluationDateTime
    * The time assignment filter was evaluated.
    *
    * @return \DateTime The evaluationDateTime
    */
    public function getEvaluationDateTime()
    {
        if (array_key_exists("evaluationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["evaluationDateTime"], "\DateTime")) {
                return $this->_propDict["evaluationDateTime"];
            } else {
                $this->_propDict["evaluationDateTime"] = new \DateTime($this->_propDict["evaluationDateTime"]);
                return $this->_propDict["evaluationDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the evaluationDateTime
    * The time assignment filter was evaluated.
    *
    * @param \DateTime $val The value to assign to the evaluationDateTime
    *
    * @return AssignmentFilterEvaluationSummary The AssignmentFilterEvaluationSummary
    */
    public function setEvaluationDateTime($val)
    {
        $this->_propDict["evaluationDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the evaluationResult
    * Assignment filter evaluation result. Possible values are: unknown, match, notMatch, inconclusive, failure, notEvaluated.
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
    * Assignment filter evaluation result. Possible values are: unknown, match, notMatch, inconclusive, failure, notEvaluated.
    *
    * @param AssignmentFilterEvaluationResult $val The value to assign to the evaluationResult
    *
    * @return AssignmentFilterEvaluationSummary The AssignmentFilterEvaluationSummary
    */
    public function setEvaluationResult($val)
    {
        $this->_propDict["evaluationResult"] = $val;
         return $this;
    }
}
