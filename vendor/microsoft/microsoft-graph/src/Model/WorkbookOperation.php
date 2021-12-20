<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkbookOperation File
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
* WorkbookOperation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WorkbookOperation extends Entity
{
    /**
    * Gets the error
    * The error returned by the operation.
    *
    * @return WorkbookOperationError The error
    */
    public function getError()
    {
        if (array_key_exists("error", $this->_propDict)) {
            if (is_a($this->_propDict["error"], "\Microsoft\Graph\Model\WorkbookOperationError")) {
                return $this->_propDict["error"];
            } else {
                $this->_propDict["error"] = new WorkbookOperationError($this->_propDict["error"]);
                return $this->_propDict["error"];
            }
        }
        return null;
    }
    
    /**
    * Sets the error
    * The error returned by the operation.
    *
    * @param WorkbookOperationError $val The error
    *
    * @return WorkbookOperation
    */
    public function setError($val)
    {
        $this->_propDict["error"] = $val;
        return $this;
    }
    
    /**
    * Gets the resourceLocation
    * The resource URI for the result.
    *
    * @return string The resourceLocation
    */
    public function getResourceLocation()
    {
        if (array_key_exists("resourceLocation", $this->_propDict)) {
            return $this->_propDict["resourceLocation"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the resourceLocation
    * The resource URI for the result.
    *
    * @param string $val The resourceLocation
    *
    * @return WorkbookOperation
    */
    public function setResourceLocation($val)
    {
        $this->_propDict["resourceLocation"] = $val;
        return $this;
    }
    
    /**
    * Gets the status
    * The current status of the operation. Possible values are: notStarted, running, succeeded, failed.
    *
    * @return WorkbookOperationStatus The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Microsoft\Graph\Model\WorkbookOperationStatus")) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new WorkbookOperationStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }
    
    /**
    * Sets the status
    * The current status of the operation. Possible values are: notStarted, running, succeeded, failed.
    *
    * @param WorkbookOperationStatus $val The status
    *
    * @return WorkbookOperation
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }
    
}
