<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrintOperationStatus File
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
* PrintOperationStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PrintOperationStatus extends Entity
{
    /**
    * Gets the description
    * A human-readable description of the printOperation's current processing state. Read-only.
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
    * A human-readable description of the printOperation's current processing state. Read-only.
    *
    * @param string $val The value of the description
    *
    * @return PrintOperationStatus
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the state
    * The printOperation's current processing state. Valid values are described in the following table. Read-only.
    *
    * @return PrintOperationProcessingState The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            if (is_a($this->_propDict["state"], "\Microsoft\Graph\Model\PrintOperationProcessingState")) {
                return $this->_propDict["state"];
            } else {
                $this->_propDict["state"] = new PrintOperationProcessingState($this->_propDict["state"]);
                return $this->_propDict["state"];
            }
        }
        return null;
    }

    /**
    * Sets the state
    * The printOperation's current processing state. Valid values are described in the following table. Read-only.
    *
    * @param PrintOperationProcessingState $val The value to assign to the state
    *
    * @return PrintOperationStatus The PrintOperationStatus
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
         return $this;
    }
}
