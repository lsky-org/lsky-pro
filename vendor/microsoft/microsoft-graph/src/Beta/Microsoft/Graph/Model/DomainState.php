<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DomainState File
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
* DomainState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DomainState extends Entity
{

    /**
    * Gets the lastActionDateTime
    * Timestamp for when the last activity occurred. The value is updated when an operation is scheduled, the asynchronous task starts, and when the operation completes.
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
    * Timestamp for when the last activity occurred. The value is updated when an operation is scheduled, the asynchronous task starts, and when the operation completes.
    *
    * @param \DateTime $val The value to assign to the lastActionDateTime
    *
    * @return DomainState The DomainState
    */
    public function setLastActionDateTime($val)
    {
        $this->_propDict["lastActionDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the operation
    * Type of asynchronous operation. The values can be ForceDelete or Verification
    *
    * @return string The operation
    */
    public function getOperation()
    {
        if (array_key_exists("operation", $this->_propDict)) {
            return $this->_propDict["operation"];
        } else {
            return null;
        }
    }

    /**
    * Sets the operation
    * Type of asynchronous operation. The values can be ForceDelete or Verification
    *
    * @param string $val The value of the operation
    *
    * @return DomainState
    */
    public function setOperation($val)
    {
        $this->_propDict["operation"] = $val;
        return $this;
    }
    /**
    * Gets the status
    * Current status of the operation.  Scheduled - Operation has been scheduled but has not started.  InProgress - Task has started and is in progress.  Failed - Operation has failed.
    *
    * @return string The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            return $this->_propDict["status"];
        } else {
            return null;
        }
    }

    /**
    * Sets the status
    * Current status of the operation.  Scheduled - Operation has been scheduled but has not started.  InProgress - Task has started and is in progress.  Failed - Operation has failed.
    *
    * @param string $val The value of the status
    *
    * @return DomainState
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }
}
