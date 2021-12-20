<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AuditEvent File
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
* AuditEvent class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AuditEvent extends Entity
{
    /**
    * Gets the activity
    * Friendly name of the activity.
    *
    * @return string The activity
    */
    public function getActivity()
    {
        if (array_key_exists("activity", $this->_propDict)) {
            return $this->_propDict["activity"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the activity
    * Friendly name of the activity.
    *
    * @param string $val The activity
    *
    * @return AuditEvent
    */
    public function setActivity($val)
    {
        $this->_propDict["activity"] = $val;
        return $this;
    }
    
    /**
    * Gets the activityDateTime
    * The date time in UTC when the activity was performed.
    *
    * @return \DateTime The activityDateTime
    */
    public function getActivityDateTime()
    {
        if (array_key_exists("activityDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["activityDateTime"], "\DateTime")) {
                return $this->_propDict["activityDateTime"];
            } else {
                $this->_propDict["activityDateTime"] = new \DateTime($this->_propDict["activityDateTime"]);
                return $this->_propDict["activityDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the activityDateTime
    * The date time in UTC when the activity was performed.
    *
    * @param \DateTime $val The activityDateTime
    *
    * @return AuditEvent
    */
    public function setActivityDateTime($val)
    {
        $this->_propDict["activityDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the activityOperationType
    * The HTTP operation type of the activity.
    *
    * @return string The activityOperationType
    */
    public function getActivityOperationType()
    {
        if (array_key_exists("activityOperationType", $this->_propDict)) {
            return $this->_propDict["activityOperationType"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the activityOperationType
    * The HTTP operation type of the activity.
    *
    * @param string $val The activityOperationType
    *
    * @return AuditEvent
    */
    public function setActivityOperationType($val)
    {
        $this->_propDict["activityOperationType"] = $val;
        return $this;
    }
    
    /**
    * Gets the activityResult
    * The result of the activity.
    *
    * @return string The activityResult
    */
    public function getActivityResult()
    {
        if (array_key_exists("activityResult", $this->_propDict)) {
            return $this->_propDict["activityResult"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the activityResult
    * The result of the activity.
    *
    * @param string $val The activityResult
    *
    * @return AuditEvent
    */
    public function setActivityResult($val)
    {
        $this->_propDict["activityResult"] = $val;
        return $this;
    }
    
    /**
    * Gets the activityType
    * The type of activity that was being performed.
    *
    * @return string The activityType
    */
    public function getActivityType()
    {
        if (array_key_exists("activityType", $this->_propDict)) {
            return $this->_propDict["activityType"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the activityType
    * The type of activity that was being performed.
    *
    * @param string $val The activityType
    *
    * @return AuditEvent
    */
    public function setActivityType($val)
    {
        $this->_propDict["activityType"] = $val;
        return $this;
    }
    
    /**
    * Gets the actor
    * AAD user and application that are associated with the audit event.
    *
    * @return AuditActor The actor
    */
    public function getActor()
    {
        if (array_key_exists("actor", $this->_propDict)) {
            if (is_a($this->_propDict["actor"], "\Beta\Microsoft\Graph\Model\AuditActor")) {
                return $this->_propDict["actor"];
            } else {
                $this->_propDict["actor"] = new AuditActor($this->_propDict["actor"]);
                return $this->_propDict["actor"];
            }
        }
        return null;
    }
    
    /**
    * Sets the actor
    * AAD user and application that are associated with the audit event.
    *
    * @param AuditActor $val The actor
    *
    * @return AuditEvent
    */
    public function setActor($val)
    {
        $this->_propDict["actor"] = $val;
        return $this;
    }
    
    /**
    * Gets the category
    * Audit category.
    *
    * @return string The category
    */
    public function getCategory()
    {
        if (array_key_exists("category", $this->_propDict)) {
            return $this->_propDict["category"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the category
    * Audit category.
    *
    * @param string $val The category
    *
    * @return AuditEvent
    */
    public function setCategory($val)
    {
        $this->_propDict["category"] = $val;
        return $this;
    }
    
    /**
    * Gets the componentName
    * Component name.
    *
    * @return string The componentName
    */
    public function getComponentName()
    {
        if (array_key_exists("componentName", $this->_propDict)) {
            return $this->_propDict["componentName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the componentName
    * Component name.
    *
    * @param string $val The componentName
    *
    * @return AuditEvent
    */
    public function setComponentName($val)
    {
        $this->_propDict["componentName"] = $val;
        return $this;
    }
    
    /**
    * Gets the correlationId
    * The client request Id that is used to correlate activity within the system.
    *
    * @return string The correlationId
    */
    public function getCorrelationId()
    {
        if (array_key_exists("correlationId", $this->_propDict)) {
            return $this->_propDict["correlationId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the correlationId
    * The client request Id that is used to correlate activity within the system.
    *
    * @param string $val The correlationId
    *
    * @return AuditEvent
    */
    public function setCorrelationId($val)
    {
        $this->_propDict["correlationId"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * Event display name.
    *
    * @return string The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the displayName
    * Event display name.
    *
    * @param string $val The displayName
    *
    * @return AuditEvent
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    

     /** 
     * Gets the resources
    * Resources being modified.
     *
     * @return array The resources
     */
    public function getResources()
    {
        if (array_key_exists("resources", $this->_propDict)) {
           return $this->_propDict["resources"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the resources
    * Resources being modified.
    *
    * @param AuditResource $val The resources
    *
    * @return AuditEvent
    */
    public function setResources($val)
    {
		$this->_propDict["resources"] = $val;
        return $this;
    }
    
}
