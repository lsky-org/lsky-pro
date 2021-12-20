<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrintJobStatus File
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
* PrintJobStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PrintJobStatus extends Entity
{
    /**
    * Gets the description
    * A human-readable description of the print job's current processing state. Read-only.
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
    * A human-readable description of the print job's current processing state. Read-only.
    *
    * @param string $val The value of the description
    *
    * @return PrintJobStatus
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the details
    * Additional details for print job state. Valid values are described in the following table. Read-only.
    *
    * @return PrintJobStateDetail The details
    */
    public function getDetails()
    {
        if (array_key_exists("details", $this->_propDict)) {
            if (is_a($this->_propDict["details"], "\Microsoft\Graph\Model\PrintJobStateDetail")) {
                return $this->_propDict["details"];
            } else {
                $this->_propDict["details"] = new PrintJobStateDetail($this->_propDict["details"]);
                return $this->_propDict["details"];
            }
        }
        return null;
    }

    /**
    * Sets the details
    * Additional details for print job state. Valid values are described in the following table. Read-only.
    *
    * @param PrintJobStateDetail $val The value to assign to the details
    *
    * @return PrintJobStatus The PrintJobStatus
    */
    public function setDetails($val)
    {
        $this->_propDict["details"] = $val;
         return $this;
    }
    /**
    * Gets the isAcquiredByPrinter
    * True if the job was acknowledged by a printer; false otherwise. Read-only.
    *
    * @return bool The isAcquiredByPrinter
    */
    public function getIsAcquiredByPrinter()
    {
        if (array_key_exists("isAcquiredByPrinter", $this->_propDict)) {
            return $this->_propDict["isAcquiredByPrinter"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isAcquiredByPrinter
    * True if the job was acknowledged by a printer; false otherwise. Read-only.
    *
    * @param bool $val The value of the isAcquiredByPrinter
    *
    * @return PrintJobStatus
    */
    public function setIsAcquiredByPrinter($val)
    {
        $this->_propDict["isAcquiredByPrinter"] = $val;
        return $this;
    }

    /**
    * Gets the state
    * The print job's current processing state. Valid values are described in the following table. Read-only.
    *
    * @return PrintJobProcessingState The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            if (is_a($this->_propDict["state"], "\Microsoft\Graph\Model\PrintJobProcessingState")) {
                return $this->_propDict["state"];
            } else {
                $this->_propDict["state"] = new PrintJobProcessingState($this->_propDict["state"]);
                return $this->_propDict["state"];
            }
        }
        return null;
    }

    /**
    * Sets the state
    * The print job's current processing state. Valid values are described in the following table. Read-only.
    *
    * @param PrintJobProcessingState $val The value to assign to the state
    *
    * @return PrintJobStatus The PrintJobStatus
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
         return $this;
    }
}
