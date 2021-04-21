<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamsAsyncOperation File
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
* TeamsAsyncOperation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TeamsAsyncOperation extends Entity
{
    /**
    * Gets the attemptsCount
    * Number of times the operation was attempted before being marked successful or failed.
    *
    * @return int The attemptsCount
    */
    public function getAttemptsCount()
    {
        if (array_key_exists("attemptsCount", $this->_propDict)) {
            return $this->_propDict["attemptsCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the attemptsCount
    * Number of times the operation was attempted before being marked successful or failed.
    *
    * @param int $val The attemptsCount
    *
    * @return TeamsAsyncOperation
    */
    public function setAttemptsCount($val)
    {
        $this->_propDict["attemptsCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the createdDateTime
    * Time when the operation was created.
    *
    * @return \DateTime The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime")) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the createdDateTime
    * Time when the operation was created.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return TeamsAsyncOperation
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the error
    * Any error that causes the async operation to fail.
    *
    * @return OperationError The error
    */
    public function getError()
    {
        if (array_key_exists("error", $this->_propDict)) {
            if (is_a($this->_propDict["error"], "\Microsoft\Graph\Model\OperationError")) {
                return $this->_propDict["error"];
            } else {
                $this->_propDict["error"] = new OperationError($this->_propDict["error"]);
                return $this->_propDict["error"];
            }
        }
        return null;
    }
    
    /**
    * Sets the error
    * Any error that causes the async operation to fail.
    *
    * @param OperationError $val The error
    *
    * @return TeamsAsyncOperation
    */
    public function setError($val)
    {
        $this->_propDict["error"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastActionDateTime
    * Time when the async operation was last updated.
    *
    * @return \DateTime The lastActionDateTime
    */
    public function getLastActionDateTime()
    {
        if (array_key_exists("lastActionDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastActionDateTime"], "\DateTime")) {
                return $this->_propDict["lastActionDateTime"];
            } else {
                $this->_propDict["lastActionDateTime"] = new \DateTime($this->_propDict["lastActionDateTime"]);
                return $this->_propDict["lastActionDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastActionDateTime
    * Time when the async operation was last updated.
    *
    * @param \DateTime $val The lastActionDateTime
    *
    * @return TeamsAsyncOperation
    */
    public function setLastActionDateTime($val)
    {
        $this->_propDict["lastActionDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the operationType
    * Denotes which type of operation is being described.
    *
    * @return TeamsAsyncOperationType The operationType
    */
    public function getOperationType()
    {
        if (array_key_exists("operationType", $this->_propDict)) {
            if (is_a($this->_propDict["operationType"], "\Microsoft\Graph\Model\TeamsAsyncOperationType")) {
                return $this->_propDict["operationType"];
            } else {
                $this->_propDict["operationType"] = new TeamsAsyncOperationType($this->_propDict["operationType"]);
                return $this->_propDict["operationType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the operationType
    * Denotes which type of operation is being described.
    *
    * @param TeamsAsyncOperationType $val The operationType
    *
    * @return TeamsAsyncOperation
    */
    public function setOperationType($val)
    {
        $this->_propDict["operationType"] = $val;
        return $this;
    }
    
    /**
    * Gets the status
    * Operation status.
    *
    * @return TeamsAsyncOperationStatus The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Microsoft\Graph\Model\TeamsAsyncOperationStatus")) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new TeamsAsyncOperationStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }
    
    /**
    * Sets the status
    * Operation status.
    *
    * @param TeamsAsyncOperationStatus $val The status
    *
    * @return TeamsAsyncOperation
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }
    
    /**
    * Gets the targetResourceId
    * The ID of the object that's created or modified as result of this async operation, typically a team.
    *
    * @return string The targetResourceId
    */
    public function getTargetResourceId()
    {
        if (array_key_exists("targetResourceId", $this->_propDict)) {
            return $this->_propDict["targetResourceId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the targetResourceId
    * The ID of the object that's created or modified as result of this async operation, typically a team.
    *
    * @param string $val The targetResourceId
    *
    * @return TeamsAsyncOperation
    */
    public function setTargetResourceId($val)
    {
        $this->_propDict["targetResourceId"] = $val;
        return $this;
    }
    
    /**
    * Gets the targetResourceLocation
    * The location of the object that's created or modified as result of this async operation. This URL should be treated as an opaque value and not parsed into its component paths.
    *
    * @return string The targetResourceLocation
    */
    public function getTargetResourceLocation()
    {
        if (array_key_exists("targetResourceLocation", $this->_propDict)) {
            return $this->_propDict["targetResourceLocation"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the targetResourceLocation
    * The location of the object that's created or modified as result of this async operation. This URL should be treated as an opaque value and not parsed into its component paths.
    *
    * @param string $val The targetResourceLocation
    *
    * @return TeamsAsyncOperation
    */
    public function setTargetResourceLocation($val)
    {
        $this->_propDict["targetResourceLocation"] = $val;
        return $this;
    }
    
}
