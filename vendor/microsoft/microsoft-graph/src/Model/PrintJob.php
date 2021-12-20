<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrintJob File
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
* PrintJob class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PrintJob extends Entity
{
    /**
    * Gets the configuration
    * A group of settings that a printer should use to print a job.
    *
    * @return PrintJobConfiguration The configuration
    */
    public function getConfiguration()
    {
        if (array_key_exists("configuration", $this->_propDict)) {
            if (is_a($this->_propDict["configuration"], "\Microsoft\Graph\Model\PrintJobConfiguration")) {
                return $this->_propDict["configuration"];
            } else {
                $this->_propDict["configuration"] = new PrintJobConfiguration($this->_propDict["configuration"]);
                return $this->_propDict["configuration"];
            }
        }
        return null;
    }
    
    /**
    * Sets the configuration
    * A group of settings that a printer should use to print a job.
    *
    * @param PrintJobConfiguration $val The configuration
    *
    * @return PrintJob
    */
    public function setConfiguration($val)
    {
        $this->_propDict["configuration"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdBy
    * Read-only. Nullable.
    *
    * @return UserIdentity The createdBy
    */
    public function getCreatedBy()
    {
        if (array_key_exists("createdBy", $this->_propDict)) {
            if (is_a($this->_propDict["createdBy"], "\Microsoft\Graph\Model\UserIdentity")) {
                return $this->_propDict["createdBy"];
            } else {
                $this->_propDict["createdBy"] = new UserIdentity($this->_propDict["createdBy"]);
                return $this->_propDict["createdBy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the createdBy
    * Read-only. Nullable.
    *
    * @param UserIdentity $val The createdBy
    *
    * @return PrintJob
    */
    public function setCreatedBy($val)
    {
        $this->_propDict["createdBy"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdDateTime
    * The DateTimeOffset when the job was created. Read-only.
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
    * The DateTimeOffset when the job was created. Read-only.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return PrintJob
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the isFetchable
    * If true, document can be fetched by printer.
    *
    * @return bool The isFetchable
    */
    public function getIsFetchable()
    {
        if (array_key_exists("isFetchable", $this->_propDict)) {
            return $this->_propDict["isFetchable"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isFetchable
    * If true, document can be fetched by printer.
    *
    * @param bool $val The isFetchable
    *
    * @return PrintJob
    */
    public function setIsFetchable($val)
    {
        $this->_propDict["isFetchable"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the redirectedFrom
    * Contains the source job URL, if the job has been redirected from another printer.
    *
    * @return string The redirectedFrom
    */
    public function getRedirectedFrom()
    {
        if (array_key_exists("redirectedFrom", $this->_propDict)) {
            return $this->_propDict["redirectedFrom"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the redirectedFrom
    * Contains the source job URL, if the job has been redirected from another printer.
    *
    * @param string $val The redirectedFrom
    *
    * @return PrintJob
    */
    public function setRedirectedFrom($val)
    {
        $this->_propDict["redirectedFrom"] = $val;
        return $this;
    }
    
    /**
    * Gets the redirectedTo
    * Contains the destination job URL, if the job has been redirected to another printer.
    *
    * @return string The redirectedTo
    */
    public function getRedirectedTo()
    {
        if (array_key_exists("redirectedTo", $this->_propDict)) {
            return $this->_propDict["redirectedTo"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the redirectedTo
    * Contains the destination job URL, if the job has been redirected to another printer.
    *
    * @param string $val The redirectedTo
    *
    * @return PrintJob
    */
    public function setRedirectedTo($val)
    {
        $this->_propDict["redirectedTo"] = $val;
        return $this;
    }
    
    /**
    * Gets the status
    * The status of the print job. Read-only.
    *
    * @return PrintJobStatus The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Microsoft\Graph\Model\PrintJobStatus")) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new PrintJobStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }
    
    /**
    * Sets the status
    * The status of the print job. Read-only.
    *
    * @param PrintJobStatus $val The status
    *
    * @return PrintJob
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }
    

     /** 
     * Gets the documents
    * Read-only.
     *
     * @return array The documents
     */
    public function getDocuments()
    {
        if (array_key_exists("documents", $this->_propDict)) {
           return $this->_propDict["documents"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the documents
    * Read-only.
    *
    * @param PrintDocument $val The documents
    *
    * @return PrintJob
    */
    public function setDocuments($val)
    {
		$this->_propDict["documents"] = $val;
        return $this;
    }
    

     /** 
     * Gets the tasks
    * A list of printTasks that were triggered by this print job.
     *
     * @return array The tasks
     */
    public function getTasks()
    {
        if (array_key_exists("tasks", $this->_propDict)) {
           return $this->_propDict["tasks"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the tasks
    * A list of printTasks that were triggered by this print job.
    *
    * @param PrintTask $val The tasks
    *
    * @return PrintJob
    */
    public function setTasks($val)
    {
		$this->_propDict["tasks"] = $val;
        return $this;
    }
    
}
