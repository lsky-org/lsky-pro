<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrintTaskStatus File
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
* PrintTaskStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PrintTaskStatus extends Entity
{
    /**
    * Gets the description
    * A human-readable description of the current processing state of the printTask.
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
    * A human-readable description of the current processing state of the printTask.
    *
    * @param string $val The value of the description
    *
    * @return PrintTaskStatus
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the state
    * The current processing state of the printTask. Valid values are described in the following table.
    *
    * @return PrintTaskProcessingState The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            if (is_a($this->_propDict["state"], "\Beta\Microsoft\Graph\Model\PrintTaskProcessingState")) {
                return $this->_propDict["state"];
            } else {
                $this->_propDict["state"] = new PrintTaskProcessingState($this->_propDict["state"]);
                return $this->_propDict["state"];
            }
        }
        return null;
    }

    /**
    * Sets the state
    * The current processing state of the printTask. Valid values are described in the following table.
    *
    * @param PrintTaskProcessingState $val The value to assign to the state
    *
    * @return PrintTaskStatus The PrintTaskStatus
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
         return $this;
    }
}
