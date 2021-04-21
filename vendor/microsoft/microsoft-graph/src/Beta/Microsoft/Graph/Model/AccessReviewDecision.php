<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessReviewDecision File
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
* AccessReviewDecision class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessReviewDecision extends Entity
{
    /**
    * Gets the accessRecommendation
    * The feature- generated recommendation shown to the reviewer, one of Approve, Deny or NotAvailable.
    *
    * @return string The accessRecommendation
    */
    public function getAccessRecommendation()
    {
        if (array_key_exists("accessRecommendation", $this->_propDict)) {
            return $this->_propDict["accessRecommendation"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the accessRecommendation
    * The feature- generated recommendation shown to the reviewer, one of Approve, Deny or NotAvailable.
    *
    * @param string $val The accessRecommendation
    *
    * @return AccessReviewDecision
    */
    public function setAccessRecommendation($val)
    {
        $this->_propDict["accessRecommendation"] = $val;
        return $this;
    }
    
    /**
    * Gets the accessReviewId
    * The feature-generated id of the access review.
    *
    * @return string The accessReviewId
    */
    public function getAccessReviewId()
    {
        if (array_key_exists("accessReviewId", $this->_propDict)) {
            return $this->_propDict["accessReviewId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the accessReviewId
    * The feature-generated id of the access review.
    *
    * @param string $val The accessReviewId
    *
    * @return AccessReviewDecision
    */
    public function setAccessReviewId($val)
    {
        $this->_propDict["accessReviewId"] = $val;
        return $this;
    }
    
    /**
    * Gets the appliedBy
    * When the review completes, if the results were manually applied, the user identity of the user who applied the decision. If the review was auto-applied, the userPrincipalName is empty.
    *
    * @return UserIdentity The appliedBy
    */
    public function getAppliedBy()
    {
        if (array_key_exists("appliedBy", $this->_propDict)) {
            if (is_a($this->_propDict["appliedBy"], "\Beta\Microsoft\Graph\Model\UserIdentity")) {
                return $this->_propDict["appliedBy"];
            } else {
                $this->_propDict["appliedBy"] = new UserIdentity($this->_propDict["appliedBy"]);
                return $this->_propDict["appliedBy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the appliedBy
    * When the review completes, if the results were manually applied, the user identity of the user who applied the decision. If the review was auto-applied, the userPrincipalName is empty.
    *
    * @param UserIdentity $val The appliedBy
    *
    * @return AccessReviewDecision
    */
    public function setAppliedBy($val)
    {
        $this->_propDict["appliedBy"] = $val;
        return $this;
    }
    
    /**
    * Gets the appliedDateTime
    * The date and time when the review decision was applied.
    *
    * @return \DateTime The appliedDateTime
    */
    public function getAppliedDateTime()
    {
        if (array_key_exists("appliedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["appliedDateTime"], "\DateTime")) {
                return $this->_propDict["appliedDateTime"];
            } else {
                $this->_propDict["appliedDateTime"] = new \DateTime($this->_propDict["appliedDateTime"]);
                return $this->_propDict["appliedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the appliedDateTime
    * The date and time when the review decision was applied.
    *
    * @param \DateTime $val The appliedDateTime
    *
    * @return AccessReviewDecision
    */
    public function setAppliedDateTime($val)
    {
        $this->_propDict["appliedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the applyResult
    * The outcome of applying the decision, one of NotApplied, Success, Failed, NotFound or NotSupported.
    *
    * @return string The applyResult
    */
    public function getApplyResult()
    {
        if (array_key_exists("applyResult", $this->_propDict)) {
            return $this->_propDict["applyResult"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the applyResult
    * The outcome of applying the decision, one of NotApplied, Success, Failed, NotFound or NotSupported.
    *
    * @param string $val The applyResult
    *
    * @return AccessReviewDecision
    */
    public function setApplyResult($val)
    {
        $this->_propDict["applyResult"] = $val;
        return $this;
    }
    
    /**
    * Gets the justification
    * The reviewer's business justification, if supplied.
    *
    * @return string The justification
    */
    public function getJustification()
    {
        if (array_key_exists("justification", $this->_propDict)) {
            return $this->_propDict["justification"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the justification
    * The reviewer's business justification, if supplied.
    *
    * @param string $val The justification
    *
    * @return AccessReviewDecision
    */
    public function setJustification($val)
    {
        $this->_propDict["justification"] = $val;
        return $this;
    }
    
    /**
    * Gets the reviewedBy
    * The identity of the reviewer. If the recommendation was used as the review, the userPrincipalName is empty.
    *
    * @return UserIdentity The reviewedBy
    */
    public function getReviewedBy()
    {
        if (array_key_exists("reviewedBy", $this->_propDict)) {
            if (is_a($this->_propDict["reviewedBy"], "\Beta\Microsoft\Graph\Model\UserIdentity")) {
                return $this->_propDict["reviewedBy"];
            } else {
                $this->_propDict["reviewedBy"] = new UserIdentity($this->_propDict["reviewedBy"]);
                return $this->_propDict["reviewedBy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the reviewedBy
    * The identity of the reviewer. If the recommendation was used as the review, the userPrincipalName is empty.
    *
    * @param UserIdentity $val The reviewedBy
    *
    * @return AccessReviewDecision
    */
    public function setReviewedBy($val)
    {
        $this->_propDict["reviewedBy"] = $val;
        return $this;
    }
    
    /**
    * Gets the reviewedDateTime
    *
    * @return \DateTime The reviewedDateTime
    */
    public function getReviewedDateTime()
    {
        if (array_key_exists("reviewedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["reviewedDateTime"], "\DateTime")) {
                return $this->_propDict["reviewedDateTime"];
            } else {
                $this->_propDict["reviewedDateTime"] = new \DateTime($this->_propDict["reviewedDateTime"]);
                return $this->_propDict["reviewedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the reviewedDateTime
    *
    * @param \DateTime $val The reviewedDateTime
    *
    * @return AccessReviewDecision
    */
    public function setReviewedDateTime($val)
    {
        $this->_propDict["reviewedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the reviewResult
    * The result of the review, one of NotReviewed, Deny, DontKnow or Approve.
    *
    * @return string The reviewResult
    */
    public function getReviewResult()
    {
        if (array_key_exists("reviewResult", $this->_propDict)) {
            return $this->_propDict["reviewResult"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the reviewResult
    * The result of the review, one of NotReviewed, Deny, DontKnow or Approve.
    *
    * @param string $val The reviewResult
    *
    * @return AccessReviewDecision
    */
    public function setReviewResult($val)
    {
        $this->_propDict["reviewResult"] = $val;
        return $this;
    }
    
}
