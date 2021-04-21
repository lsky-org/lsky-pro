<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DataPolicyOperation File
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
* DataPolicyOperation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DataPolicyOperation extends Entity
{
    /**
    * Gets the completedDateTime
    * Represents when the request for this data policy operation was completed, in UTC time, using the ISO 8601 format. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Null until the operation completes.
    *
    * @return \DateTime The completedDateTime
    */
    public function getCompletedDateTime()
    {
        if (array_key_exists("completedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["completedDateTime"], "\DateTime")) {
                return $this->_propDict["completedDateTime"];
            } else {
                $this->_propDict["completedDateTime"] = new \DateTime($this->_propDict["completedDateTime"]);
                return $this->_propDict["completedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the completedDateTime
    * Represents when the request for this data policy operation was completed, in UTC time, using the ISO 8601 format. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Null until the operation completes.
    *
    * @param \DateTime $val The completedDateTime
    *
    * @return DataPolicyOperation
    */
    public function setCompletedDateTime($val)
    {
        $this->_propDict["completedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the progress
    * Specifies the progress of an operation.
    *
    * @return float The progress
    */
    public function getProgress()
    {
        if (array_key_exists("progress", $this->_propDict)) {
            return $this->_propDict["progress"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the progress
    * Specifies the progress of an operation.
    *
    * @param float $val The progress
    *
    * @return DataPolicyOperation
    */
    public function setProgress($val)
    {
        $this->_propDict["progress"] = $val;
        return $this;
    }
    
    /**
    * Gets the status
    * Possible values are: notStarted, running, complete, failed, unknownFutureValue.
    *
    * @return DataPolicyOperationStatus The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Microsoft\Graph\Model\DataPolicyOperationStatus")) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new DataPolicyOperationStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }
    
    /**
    * Sets the status
    * Possible values are: notStarted, running, complete, failed, unknownFutureValue.
    *
    * @param DataPolicyOperationStatus $val The status
    *
    * @return DataPolicyOperation
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }
    
    /**
    * Gets the storageLocation
    * The URL location to where data is being exported for export requests.
    *
    * @return string The storageLocation
    */
    public function getStorageLocation()
    {
        if (array_key_exists("storageLocation", $this->_propDict)) {
            return $this->_propDict["storageLocation"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the storageLocation
    * The URL location to where data is being exported for export requests.
    *
    * @param string $val The storageLocation
    *
    * @return DataPolicyOperation
    */
    public function setStorageLocation($val)
    {
        $this->_propDict["storageLocation"] = $val;
        return $this;
    }
    
    /**
    * Gets the submittedDateTime
    * Represents when the request for this data operation was submitted, in UTC time, using the ISO 8601 format. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @return \DateTime The submittedDateTime
    */
    public function getSubmittedDateTime()
    {
        if (array_key_exists("submittedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["submittedDateTime"], "\DateTime")) {
                return $this->_propDict["submittedDateTime"];
            } else {
                $this->_propDict["submittedDateTime"] = new \DateTime($this->_propDict["submittedDateTime"]);
                return $this->_propDict["submittedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the submittedDateTime
    * Represents when the request for this data operation was submitted, in UTC time, using the ISO 8601 format. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @param \DateTime $val The submittedDateTime
    *
    * @return DataPolicyOperation
    */
    public function setSubmittedDateTime($val)
    {
        $this->_propDict["submittedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the userId
    * The id for the user on whom the operation is performed.
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
    * The id for the user on whom the operation is performed.
    *
    * @param string $val The userId
    *
    * @return DataPolicyOperation
    */
    public function setUserId($val)
    {
        $this->_propDict["userId"] = $val;
        return $this;
    }
    
}
