<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CommsOperation File
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
* CommsOperation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CommsOperation extends Entity
{
    /**
    * Gets the clientContext
    * Unique Client Context string. Max limit is 256 chars.
    *
    * @return string The clientContext
    */
    public function getClientContext()
    {
        if (array_key_exists("clientContext", $this->_propDict)) {
            return $this->_propDict["clientContext"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the clientContext
    * Unique Client Context string. Max limit is 256 chars.
    *
    * @param string $val The clientContext
    *
    * @return CommsOperation
    */
    public function setClientContext($val)
    {
        $this->_propDict["clientContext"] = $val;
        return $this;
    }
    
    /**
    * Gets the resultInfo
    * The result information. Read-only.
    *
    * @return ResultInfo The resultInfo
    */
    public function getResultInfo()
    {
        if (array_key_exists("resultInfo", $this->_propDict)) {
            if (is_a($this->_propDict["resultInfo"], "\Beta\Microsoft\Graph\Model\ResultInfo")) {
                return $this->_propDict["resultInfo"];
            } else {
                $this->_propDict["resultInfo"] = new ResultInfo($this->_propDict["resultInfo"]);
                return $this->_propDict["resultInfo"];
            }
        }
        return null;
    }
    
    /**
    * Sets the resultInfo
    * The result information. Read-only.
    *
    * @param ResultInfo $val The resultInfo
    *
    * @return CommsOperation
    */
    public function setResultInfo($val)
    {
        $this->_propDict["resultInfo"] = $val;
        return $this;
    }
    
    /**
    * Gets the status
    * Possible values are: notStarted, running, completed, failed. Read-only.
    *
    * @return OperationStatus The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\Model\OperationStatus")) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new OperationStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }
    
    /**
    * Sets the status
    * Possible values are: notStarted, running, completed, failed. Read-only.
    *
    * @param OperationStatus $val The status
    *
    * @return CommsOperation
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }
    
}
