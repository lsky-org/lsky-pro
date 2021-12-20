<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TodoTask File
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
* TodoTask class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TodoTask extends Entity
{
    /**
    * Gets the body
    * The task body that typically contains information about the task.
    *
    * @return ItemBody The body
    */
    public function getBody()
    {
        if (array_key_exists("body", $this->_propDict)) {
            if (is_a($this->_propDict["body"], "\Microsoft\Graph\Model\ItemBody")) {
                return $this->_propDict["body"];
            } else {
                $this->_propDict["body"] = new ItemBody($this->_propDict["body"]);
                return $this->_propDict["body"];
            }
        }
        return null;
    }
    
    /**
    * Sets the body
    * The task body that typically contains information about the task.
    *
    * @param ItemBody $val The body
    *
    * @return TodoTask
    */
    public function setBody($val)
    {
        $this->_propDict["body"] = $val;
        return $this;
    }
    
    /**
    * Gets the bodyLastModifiedDateTime
    * The date and time when the task was last modified. By default, it is in UTC. You can provide a custom time zone in the request header. The property value uses ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2020 would look like this: '2020-01-01T00:00:00Z'.
    *
    * @return \DateTime The bodyLastModifiedDateTime
    */
    public function getBodyLastModifiedDateTime()
    {
        if (array_key_exists("bodyLastModifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["bodyLastModifiedDateTime"], "\DateTime")) {
                return $this->_propDict["bodyLastModifiedDateTime"];
            } else {
                $this->_propDict["bodyLastModifiedDateTime"] = new \DateTime($this->_propDict["bodyLastModifiedDateTime"]);
                return $this->_propDict["bodyLastModifiedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the bodyLastModifiedDateTime
    * The date and time when the task was last modified. By default, it is in UTC. You can provide a custom time zone in the request header. The property value uses ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2020 would look like this: '2020-01-01T00:00:00Z'.
    *
    * @param \DateTime $val The bodyLastModifiedDateTime
    *
    * @return TodoTask
    */
    public function setBodyLastModifiedDateTime($val)
    {
        $this->_propDict["bodyLastModifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the completedDateTime
    * The date in the specified time zone that the task was finished.
    *
    * @return DateTimeTimeZone The completedDateTime
    */
    public function getCompletedDateTime()
    {
        if (array_key_exists("completedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["completedDateTime"], "\Microsoft\Graph\Model\DateTimeTimeZone")) {
                return $this->_propDict["completedDateTime"];
            } else {
                $this->_propDict["completedDateTime"] = new DateTimeTimeZone($this->_propDict["completedDateTime"]);
                return $this->_propDict["completedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the completedDateTime
    * The date in the specified time zone that the task was finished.
    *
    * @param DateTimeTimeZone $val The completedDateTime
    *
    * @return TodoTask
    */
    public function setCompletedDateTime($val)
    {
        $this->_propDict["completedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdDateTime
    * The date and time when the task was created. By default, it is in UTC. You can provide a custom time zone in the request header. The property value uses ISO 8601 format. For example, midnight UTC on Jan 1, 2020 would look like this: '2020-01-01T00:00:00Z'.
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
    * The date and time when the task was created. By default, it is in UTC. You can provide a custom time zone in the request header. The property value uses ISO 8601 format. For example, midnight UTC on Jan 1, 2020 would look like this: '2020-01-01T00:00:00Z'.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return TodoTask
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the dueDateTime
    * The date in the specified time zone that the task is to be finished.
    *
    * @return DateTimeTimeZone The dueDateTime
    */
    public function getDueDateTime()
    {
        if (array_key_exists("dueDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["dueDateTime"], "\Microsoft\Graph\Model\DateTimeTimeZone")) {
                return $this->_propDict["dueDateTime"];
            } else {
                $this->_propDict["dueDateTime"] = new DateTimeTimeZone($this->_propDict["dueDateTime"]);
                return $this->_propDict["dueDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the dueDateTime
    * The date in the specified time zone that the task is to be finished.
    *
    * @param DateTimeTimeZone $val The dueDateTime
    *
    * @return TodoTask
    */
    public function setDueDateTime($val)
    {
        $this->_propDict["dueDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the importance
    * The importance of the task. Possible values are: low, normal, high.
    *
    * @return Importance The importance
    */
    public function getImportance()
    {
        if (array_key_exists("importance", $this->_propDict)) {
            if (is_a($this->_propDict["importance"], "\Microsoft\Graph\Model\Importance")) {
                return $this->_propDict["importance"];
            } else {
                $this->_propDict["importance"] = new Importance($this->_propDict["importance"]);
                return $this->_propDict["importance"];
            }
        }
        return null;
    }
    
    /**
    * Sets the importance
    * The importance of the task. Possible values are: low, normal, high.
    *
    * @param Importance $val The importance
    *
    * @return TodoTask
    */
    public function setImportance($val)
    {
        $this->_propDict["importance"] = $val;
        return $this;
    }
    
    /**
    * Gets the isReminderOn
    * Set to true if an alert is set to remind the user of the task.
    *
    * @return bool The isReminderOn
    */
    public function getIsReminderOn()
    {
        if (array_key_exists("isReminderOn", $this->_propDict)) {
            return $this->_propDict["isReminderOn"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isReminderOn
    * Set to true if an alert is set to remind the user of the task.
    *
    * @param bool $val The isReminderOn
    *
    * @return TodoTask
    */
    public function setIsReminderOn($val)
    {
        $this->_propDict["isReminderOn"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the lastModifiedDateTime
    * The date and time when the task was last modified. By default, it is in UTC. You can provide a custom time zone in the request header. The property value uses ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2020 would look like this: '2020-01-01T00:00:00Z'.
    *
    * @return \DateTime The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedDateTime"], "\DateTime")) {
                return $this->_propDict["lastModifiedDateTime"];
            } else {
                $this->_propDict["lastModifiedDateTime"] = new \DateTime($this->_propDict["lastModifiedDateTime"]);
                return $this->_propDict["lastModifiedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastModifiedDateTime
    * The date and time when the task was last modified. By default, it is in UTC. You can provide a custom time zone in the request header. The property value uses ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2020 would look like this: '2020-01-01T00:00:00Z'.
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return TodoTask
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the recurrence
    * The recurrence pattern for the task.
    *
    * @return PatternedRecurrence The recurrence
    */
    public function getRecurrence()
    {
        if (array_key_exists("recurrence", $this->_propDict)) {
            if (is_a($this->_propDict["recurrence"], "\Microsoft\Graph\Model\PatternedRecurrence")) {
                return $this->_propDict["recurrence"];
            } else {
                $this->_propDict["recurrence"] = new PatternedRecurrence($this->_propDict["recurrence"]);
                return $this->_propDict["recurrence"];
            }
        }
        return null;
    }
    
    /**
    * Sets the recurrence
    * The recurrence pattern for the task.
    *
    * @param PatternedRecurrence $val The recurrence
    *
    * @return TodoTask
    */
    public function setRecurrence($val)
    {
        $this->_propDict["recurrence"] = $val;
        return $this;
    }
    
    /**
    * Gets the reminderDateTime
    * The date and time for a reminder alert of the task to occur.
    *
    * @return DateTimeTimeZone The reminderDateTime
    */
    public function getReminderDateTime()
    {
        if (array_key_exists("reminderDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["reminderDateTime"], "\Microsoft\Graph\Model\DateTimeTimeZone")) {
                return $this->_propDict["reminderDateTime"];
            } else {
                $this->_propDict["reminderDateTime"] = new DateTimeTimeZone($this->_propDict["reminderDateTime"]);
                return $this->_propDict["reminderDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the reminderDateTime
    * The date and time for a reminder alert of the task to occur.
    *
    * @param DateTimeTimeZone $val The reminderDateTime
    *
    * @return TodoTask
    */
    public function setReminderDateTime($val)
    {
        $this->_propDict["reminderDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the status
    * Indicates the state or progress of the task. Possible values are: notStarted, inProgress, completed, waitingOnOthers, deferred.
    *
    * @return TaskStatus The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Microsoft\Graph\Model\TaskStatus")) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new TaskStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }
    
    /**
    * Sets the status
    * Indicates the state or progress of the task. Possible values are: notStarted, inProgress, completed, waitingOnOthers, deferred.
    *
    * @param TaskStatus $val The status
    *
    * @return TodoTask
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }
    
    /**
    * Gets the title
    * A brief description of the task.
    *
    * @return string The title
    */
    public function getTitle()
    {
        if (array_key_exists("title", $this->_propDict)) {
            return $this->_propDict["title"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the title
    * A brief description of the task.
    *
    * @param string $val The title
    *
    * @return TodoTask
    */
    public function setTitle($val)
    {
        $this->_propDict["title"] = $val;
        return $this;
    }
    

     /** 
     * Gets the extensions
    * The collection of open extensions defined for the task. Nullable.
     *
     * @return array The extensions
     */
    public function getExtensions()
    {
        if (array_key_exists("extensions", $this->_propDict)) {
           return $this->_propDict["extensions"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the extensions
    * The collection of open extensions defined for the task. Nullable.
    *
    * @param Extension $val The extensions
    *
    * @return TodoTask
    */
    public function setExtensions($val)
    {
		$this->_propDict["extensions"] = $val;
        return $this;
    }
    

     /** 
     * Gets the linkedResources
    * A collection of resources linked to the task.
     *
     * @return array The linkedResources
     */
    public function getLinkedResources()
    {
        if (array_key_exists("linkedResources", $this->_propDict)) {
           return $this->_propDict["linkedResources"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the linkedResources
    * A collection of resources linked to the task.
    *
    * @param LinkedResource $val The linkedResources
    *
    * @return TodoTask
    */
    public function setLinkedResources($val)
    {
		$this->_propDict["linkedResources"] = $val;
        return $this;
    }
    
}
