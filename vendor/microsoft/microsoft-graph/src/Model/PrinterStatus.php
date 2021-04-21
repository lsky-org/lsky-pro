<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrinterStatus File
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
* PrinterStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PrinterStatus extends Entity
{
    /**
    * Gets the description
    * A human-readable description of the printer's current processing state. Read-only.
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
    * A human-readable description of the printer's current processing state. Read-only.
    *
    * @param string $val The value of the description
    *
    * @return PrinterStatus
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the details
    * The list of details describing why the printer is in the current state. Valid values are described in the following table. Read-only.
    *
    * @return PrinterProcessingStateDetail The details
    */
    public function getDetails()
    {
        if (array_key_exists("details", $this->_propDict)) {
            if (is_a($this->_propDict["details"], "\Microsoft\Graph\Model\PrinterProcessingStateDetail")) {
                return $this->_propDict["details"];
            } else {
                $this->_propDict["details"] = new PrinterProcessingStateDetail($this->_propDict["details"]);
                return $this->_propDict["details"];
            }
        }
        return null;
    }

    /**
    * Sets the details
    * The list of details describing why the printer is in the current state. Valid values are described in the following table. Read-only.
    *
    * @param PrinterProcessingStateDetail $val The value to assign to the details
    *
    * @return PrinterStatus The PrinterStatus
    */
    public function setDetails($val)
    {
        $this->_propDict["details"] = $val;
         return $this;
    }

    /**
    * Gets the state
    * The current processing state. Valid values are described in the following table. Read-only.
    *
    * @return PrinterProcessingState The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            if (is_a($this->_propDict["state"], "\Microsoft\Graph\Model\PrinterProcessingState")) {
                return $this->_propDict["state"];
            } else {
                $this->_propDict["state"] = new PrinterProcessingState($this->_propDict["state"]);
                return $this->_propDict["state"];
            }
        }
        return null;
    }

    /**
    * Sets the state
    * The current processing state. Valid values are described in the following table. Read-only.
    *
    * @param PrinterProcessingState $val The value to assign to the state
    *
    * @return PrinterStatus The PrinterStatus
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
         return $this;
    }
}
