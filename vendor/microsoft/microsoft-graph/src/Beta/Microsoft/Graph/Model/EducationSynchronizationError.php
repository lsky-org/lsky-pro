<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EducationSynchronizationError File
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
* EducationSynchronizationError class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EducationSynchronizationError extends Entity
{
    /**
    * Gets the entryType
    * Represents the sync entity (school, section, student, teacher).
    *
    * @return string The entryType
    */
    public function getEntryType()
    {
        if (array_key_exists("entryType", $this->_propDict)) {
            return $this->_propDict["entryType"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the entryType
    * Represents the sync entity (school, section, student, teacher).
    *
    * @param string $val The entryType
    *
    * @return EducationSynchronizationError
    */
    public function setEntryType($val)
    {
        $this->_propDict["entryType"] = $val;
        return $this;
    }
    
    /**
    * Gets the errorCode
    * Represents the error code for this error.
    *
    * @return string The errorCode
    */
    public function getErrorCode()
    {
        if (array_key_exists("errorCode", $this->_propDict)) {
            return $this->_propDict["errorCode"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the errorCode
    * Represents the error code for this error.
    *
    * @param string $val The errorCode
    *
    * @return EducationSynchronizationError
    */
    public function setErrorCode($val)
    {
        $this->_propDict["errorCode"] = $val;
        return $this;
    }
    
    /**
    * Gets the errorMessage
    * Contains a description of the error.
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
    * Contains a description of the error.
    *
    * @param string $val The errorMessage
    *
    * @return EducationSynchronizationError
    */
    public function setErrorMessage($val)
    {
        $this->_propDict["errorMessage"] = $val;
        return $this;
    }
    
    /**
    * Gets the joiningValue
    * The unique identifier for the entry.
    *
    * @return string The joiningValue
    */
    public function getJoiningValue()
    {
        if (array_key_exists("joiningValue", $this->_propDict)) {
            return $this->_propDict["joiningValue"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the joiningValue
    * The unique identifier for the entry.
    *
    * @param string $val The joiningValue
    *
    * @return EducationSynchronizationError
    */
    public function setJoiningValue($val)
    {
        $this->_propDict["joiningValue"] = $val;
        return $this;
    }
    
    /**
    * Gets the recordedDateTime
    * The time of occurrence of this error.
    *
    * @return \DateTime The recordedDateTime
    */
    public function getRecordedDateTime()
    {
        if (array_key_exists("recordedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["recordedDateTime"], "\DateTime")) {
                return $this->_propDict["recordedDateTime"];
            } else {
                $this->_propDict["recordedDateTime"] = new \DateTime($this->_propDict["recordedDateTime"]);
                return $this->_propDict["recordedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the recordedDateTime
    * The time of occurrence of this error.
    *
    * @param \DateTime $val The recordedDateTime
    *
    * @return EducationSynchronizationError
    */
    public function setRecordedDateTime($val)
    {
        $this->_propDict["recordedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the reportableIdentifier
    * The identifier of this error entry.
    *
    * @return string The reportableIdentifier
    */
    public function getReportableIdentifier()
    {
        if (array_key_exists("reportableIdentifier", $this->_propDict)) {
            return $this->_propDict["reportableIdentifier"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the reportableIdentifier
    * The identifier of this error entry.
    *
    * @param string $val The reportableIdentifier
    *
    * @return EducationSynchronizationError
    */
    public function setReportableIdentifier($val)
    {
        $this->_propDict["reportableIdentifier"] = $val;
        return $this;
    }
    
}
