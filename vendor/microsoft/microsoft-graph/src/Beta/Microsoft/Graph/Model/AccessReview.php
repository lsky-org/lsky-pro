<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessReview File
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
* AccessReview class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessReview extends Entity
{
    /**
    * Gets the businessFlowTemplateId
    * The business flow template identifier. Required on create.  This value is case sensitive.
    *
    * @return string The businessFlowTemplateId
    */
    public function getBusinessFlowTemplateId()
    {
        if (array_key_exists("businessFlowTemplateId", $this->_propDict)) {
            return $this->_propDict["businessFlowTemplateId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the businessFlowTemplateId
    * The business flow template identifier. Required on create.  This value is case sensitive.
    *
    * @param string $val The businessFlowTemplateId
    *
    * @return AccessReview
    */
    public function setBusinessFlowTemplateId($val)
    {
        $this->_propDict["businessFlowTemplateId"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdBy
    * The user who created this review.
    *
    * @return UserIdentity The createdBy
    */
    public function getCreatedBy()
    {
        if (array_key_exists("createdBy", $this->_propDict)) {
            if (is_a($this->_propDict["createdBy"], "\Beta\Microsoft\Graph\Model\UserIdentity")) {
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
    * The user who created this review.
    *
    * @param UserIdentity $val The createdBy
    *
    * @return AccessReview
    */
    public function setCreatedBy($val)
    {
        $this->_propDict["createdBy"] = $val;
        return $this;
    }
    
    /**
    * Gets the description
    * The description provided by the access review creator, to show to the reviewers.
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
    * The description provided by the access review creator, to show to the reviewers.
    *
    * @param string $val The description
    *
    * @return AccessReview
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * The access review name. Required on create.
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
    * The access review name. Required on create.
    *
    * @param string $val The displayName
    *
    * @return AccessReview
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the endDateTime
    * The DateTime when the review is scheduled to end. This must be at least one day later than the start date.  Required on create.
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
    * The DateTime when the review is scheduled to end. This must be at least one day later than the start date.  Required on create.
    *
    * @param \DateTime $val The endDateTime
    *
    * @return AccessReview
    */
    public function setEndDateTime($val)
    {
        $this->_propDict["endDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the reviewedEntity
    * The object for which the access reviews is reviewing the access rights assignments. This can be the group for the review of memberships of users in a group, or the app for a review of assignments of users to an application. Required on create.
    *
    * @return Identity The reviewedEntity
    */
    public function getReviewedEntity()
    {
        if (array_key_exists("reviewedEntity", $this->_propDict)) {
            if (is_a($this->_propDict["reviewedEntity"], "\Beta\Microsoft\Graph\Model\Identity")) {
                return $this->_propDict["reviewedEntity"];
            } else {
                $this->_propDict["reviewedEntity"] = new Identity($this->_propDict["reviewedEntity"]);
                return $this->_propDict["reviewedEntity"];
            }
        }
        return null;
    }
    
    /**
    * Sets the reviewedEntity
    * The object for which the access reviews is reviewing the access rights assignments. This can be the group for the review of memberships of users in a group, or the app for a review of assignments of users to an application. Required on create.
    *
    * @param Identity $val The reviewedEntity
    *
    * @return AccessReview
    */
    public function setReviewedEntity($val)
    {
        $this->_propDict["reviewedEntity"] = $val;
        return $this;
    }
    
    /**
    * Gets the reviewerType
    * The relationship type of reviewer to the target object, one of self, delegated or entityOwners. Required on create.
    *
    * @return string The reviewerType
    */
    public function getReviewerType()
    {
        if (array_key_exists("reviewerType", $this->_propDict)) {
            return $this->_propDict["reviewerType"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the reviewerType
    * The relationship type of reviewer to the target object, one of self, delegated or entityOwners. Required on create.
    *
    * @param string $val The reviewerType
    *
    * @return AccessReview
    */
    public function setReviewerType($val)
    {
        $this->_propDict["reviewerType"] = $val;
        return $this;
    }
    
    /**
    * Gets the settings
    * The settings of an accessReview, see type definition below.
    *
    * @return AccessReviewSettings The settings
    */
    public function getSettings()
    {
        if (array_key_exists("settings", $this->_propDict)) {
            if (is_a($this->_propDict["settings"], "\Beta\Microsoft\Graph\Model\AccessReviewSettings")) {
                return $this->_propDict["settings"];
            } else {
                $this->_propDict["settings"] = new AccessReviewSettings($this->_propDict["settings"]);
                return $this->_propDict["settings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the settings
    * The settings of an accessReview, see type definition below.
    *
    * @param AccessReviewSettings $val The settings
    *
    * @return AccessReview
    */
    public function setSettings($val)
    {
        $this->_propDict["settings"] = $val;
        return $this;
    }
    
    /**
    * Gets the startDateTime
    * The DateTime when the review is scheduled to be start.  This could be a date in the future.  Required on create.
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
    * The DateTime when the review is scheduled to be start.  This could be a date in the future.  Required on create.
    *
    * @param \DateTime $val The startDateTime
    *
    * @return AccessReview
    */
    public function setStartDateTime($val)
    {
        $this->_propDict["startDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the status
    * This read-only field specifies the status of an accessReview. The typical states include Initializing, NotStarted, Starting,InProgress, Completing, Completed, AutoReviewing, and AutoReviewed.
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
    * This read-only field specifies the status of an accessReview. The typical states include Initializing, NotStarted, Starting,InProgress, Completing, Completed, AutoReviewing, and AutoReviewed.
    *
    * @param string $val The status
    *
    * @return AccessReview
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }
    

     /** 
     * Gets the decisions
    * The collection of decisions for this access review.
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
    * The collection of decisions for this access review.
    *
    * @param AccessReviewDecision $val The decisions
    *
    * @return AccessReview
    */
    public function setDecisions($val)
    {
		$this->_propDict["decisions"] = $val;
        return $this;
    }
    

     /** 
     * Gets the instances
    * The collection of access reviews instances past, present and future, if this object is a recurring access review.
     *
     * @return array The instances
     */
    public function getInstances()
    {
        if (array_key_exists("instances", $this->_propDict)) {
           return $this->_propDict["instances"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the instances
    * The collection of access reviews instances past, present and future, if this object is a recurring access review.
    *
    * @param AccessReview $val The instances
    *
    * @return AccessReview
    */
    public function setInstances($val)
    {
		$this->_propDict["instances"] = $val;
        return $this;
    }
    

     /** 
     * Gets the myDecisions
    * The collection of decisions for the caller, if the caller is a reviewer.
     *
     * @return array The myDecisions
     */
    public function getMyDecisions()
    {
        if (array_key_exists("myDecisions", $this->_propDict)) {
           return $this->_propDict["myDecisions"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the myDecisions
    * The collection of decisions for the caller, if the caller is a reviewer.
    *
    * @param AccessReviewDecision $val The myDecisions
    *
    * @return AccessReview
    */
    public function setMyDecisions($val)
    {
		$this->_propDict["myDecisions"] = $val;
        return $this;
    }
    

     /** 
     * Gets the reviewers
    * The collection of reviewers for an access review, if access review reviewerType is of type delegated.
     *
     * @return array The reviewers
     */
    public function getReviewers()
    {
        if (array_key_exists("reviewers", $this->_propDict)) {
           return $this->_propDict["reviewers"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the reviewers
    * The collection of reviewers for an access review, if access review reviewerType is of type delegated.
    *
    * @param AccessReviewReviewer $val The reviewers
    *
    * @return AccessReview
    */
    public function setReviewers($val)
    {
		$this->_propDict["reviewers"] = $val;
        return $this;
    }
    
}
