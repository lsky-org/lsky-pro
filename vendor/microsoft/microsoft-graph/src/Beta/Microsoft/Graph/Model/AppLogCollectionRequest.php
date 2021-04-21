<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AppLogCollectionRequest File
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
* AppLogCollectionRequest class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AppLogCollectionRequest extends Entity
{
    /**
    * Gets the completedDateTime
    * Time at which the upload log request reached a terminal state
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
    * Time at which the upload log request reached a terminal state
    *
    * @param \DateTime $val The completedDateTime
    *
    * @return AppLogCollectionRequest
    */
    public function setCompletedDateTime($val)
    {
        $this->_propDict["completedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the customLogFolders
    * List of log folders.
    *
    * @return string The customLogFolders
    */
    public function getCustomLogFolders()
    {
        if (array_key_exists("customLogFolders", $this->_propDict)) {
            return $this->_propDict["customLogFolders"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the customLogFolders
    * List of log folders.
    *
    * @param string $val The customLogFolders
    *
    * @return AppLogCollectionRequest
    */
    public function setCustomLogFolders($val)
    {
        $this->_propDict["customLogFolders"] = $val;
        return $this;
    }
    
    /**
    * Gets the errorMessage
    * Error message if any during the upload process
    *
    * @return string The errorMessage
    */
    public function getErrorMessage()
    {
        if (array_key_exists("errorMessage", $this->_propDict)) {
            return $this->_propDict["errorMessage"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the errorMessage
    * Error message if any during the upload process
    *
    * @param string $val The errorMessage
    *
    * @return AppLogCollectionRequest
    */
    public function setErrorMessage($val)
    {
        $this->_propDict["errorMessage"] = $val;
        return $this;
    }
    
    /**
    * Gets the status
    * Log upload status. Possible values are: pending, completed, failed.
    *
    * @return AppLogUploadState The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\Model\AppLogUploadState")) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new AppLogUploadState($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }
    
    /**
    * Sets the status
    * Log upload status. Possible values are: pending, completed, failed.
    *
    * @param AppLogUploadState $val The status
    *
    * @return AppLogCollectionRequest
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }
    
}
