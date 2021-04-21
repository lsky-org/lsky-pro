<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessReviewInstance File
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
* AccessReviewInstance class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessReviewInstance extends Entity
{
    /**
    * Gets the endDateTime
    * DateTime when review instance is scheduled to end.The DatetimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @return \DateTime The endDateTime
    */
    public function getEndDateTime()
    {
        if (array_key_exists("endDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["endDateTime"], "\DateTime")) {
                return $this->_propDict["endDateTime"];
            } else {
                $this->_propDict["endDateTime"] = new \DateTime($this->_propDict["endDateTime"]);
                return $this->_propDict["endDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the endDateTime
    * DateTime when review instance is scheduled to end.The DatetimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The endDateTime
    *
    * @return AccessReviewInstance
    */
    public function setEndDateTime($val)
    {
        $this->_propDict["endDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the scope
    * Created based on scope and instanceEnumerationScope at the accessReviewScheduleDefinition level. Defines the scope of users reviewed in a group. In the case of a single-group review, the scope defined at the accessReviewScheduleDefinition level applies to all instances. In the case of all groups review, scope may be different for each group. Read-only.
    *
    * @return AccessReviewScope The scope
    */
    public function getScope()
    {
        if (array_key_exists("scope", $this->_propDict)) {
            if (is_a($this->_propDict["scope"], "\Beta\Microsoft\Graph\Model\AccessReviewScope")) {
                return $this->_propDict["scope"];
            } else {
                $this->_propDict["scope"] = new AccessReviewScope($this->_propDict["scope"]);
                return $this->_propDict["scope"];
            }
        }
        return null;
    }
    
    /**
    * Sets the scope
    * Created based on scope and instanceEnumerationScope at the accessReviewScheduleDefinition level. Defines the scope of users reviewed in a group. In the case of a single-group review, the scope defined at the accessReviewScheduleDefinition level applies to all instances. In the case of all groups review, scope may be different for each group. Read-only.
    *
    * @param AccessReviewScope $val The scope
    *
    * @return AccessReviewInstance
    */
    public function setScope($val)
    {
        $this->_propDict["scope"] = $val;
        return $this;
    }
    
    /**
    * Gets the startDateTime
    * DateTime when review instance is scheduled to start. May be in the future. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @return \DateTime The startDateTime
    */
    public function getStartDateTime()
    {
        if (array_key_exists("startDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["startDateTime"], "\DateTime")) {
                return $this->_propDict["startDateTime"];
            } else {
                $this->_propDict["startDateTime"] = new \DateTime($this->_propDict["startDateTime"]);
                return $this->_propDict["startDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the startDateTime
    * DateTime when review instance is scheduled to start. May be in the future. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The startDateTime
    *
    * @return AccessReviewInstance
    */
    public function setStartDateTime($val)
    {
        $this->_propDict["startDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the status
    * Specifies the status of an accessReview. The typical states include Initializing, NotStarted, Starting, InProgress, Completing, Completed, AutoReviewing, and AutoReviewed.  Read-only.
    *
    * @return string The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            return $this->_propDict["status"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the status
    * Specifies the status of an accessReview. The typical states include Initializing, NotStarted, Starting, InProgress, Completing, Completed, AutoReviewing, and AutoReviewed.  Read-only.
    *
    * @param string $val The status
    *
    * @return AccessReviewInstance
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }
    

     /** 
     * Gets the decisions
    * Each user reviewed in an accessReviewInstance has a decision item representing if their access was approved, denied, or not yet reviewed.
     *
     * @return array The decisions
     */
    public function getDecisions()
    {
        if (array_key_exists("decisions", $this->_propDict)) {
           return $this->_propDict["decisions"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the decisions
    * Each user reviewed in an accessReviewInstance has a decision item representing if their access was approved, denied, or not yet reviewed.
    *
    * @param AccessReviewInstanceDecisionItem $val The decisions
    *
    * @return AccessReviewInstance
    */
    public function setDecisions($val)
    {
		$this->_propDict["decisions"] = $val;
        return $this;
    }
    
    /**
    * Gets the definition
    * There is exactly one accessReviewScheduleDefinition associated with each instance. It is the parent schedule for the instance, where instances are created for each recurrence of a review definition and each group selected to review by the definition.
    *
    * @return AccessReviewScheduleDefinition The definition
    */
    public function getDefinition()
    {
        if (array_key_exists("definition", $this->_propDict)) {
            if (is_a($this->_propDict["definition"], "\Beta\Microsoft\Graph\Model\AccessReviewScheduleDefinition")) {
                return $this->_propDict["definition"];
            } else {
                $this->_propDict["definition"] = new AccessReviewScheduleDefinition($this->_propDict["definition"]);
                return $this->_propDict["definition"];
            }
        }
        return null;
    }
    
    /**
    * Sets the definition
    * There is exactly one accessReviewScheduleDefinition associated with each instance. It is the parent schedule for the instance, where instances are created for each recurrence of a review definition and each group selected to review by the definition.
    *
    * @param AccessReviewScheduleDefinition $val The definition
    *
    * @return AccessReviewInstance
    */
    public function setDefinition($val)
    {
        $this->_propDict["definition"] = $val;
        return $this;
    }
    
}
