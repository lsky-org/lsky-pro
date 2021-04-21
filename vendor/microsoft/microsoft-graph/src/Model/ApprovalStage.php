<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ApprovalStage File
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
* ApprovalStage class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ApprovalStage extends Entity
{
    /**
    * Gets the assignedToMe
    * Indicates whether the stage is assigned to the calling user to review. Read-only.
    *
    * @return bool The assignedToMe
    */
    public function getAssignedToMe()
    {
        if (array_key_exists("assignedToMe", $this->_propDict)) {
            return $this->_propDict["assignedToMe"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the assignedToMe
    * Indicates whether the stage is assigned to the calling user to review. Read-only.
    *
    * @param bool $val The assignedToMe
    *
    * @return ApprovalStage
    */
    public function setAssignedToMe($val)
    {
        $this->_propDict["assignedToMe"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the displayName
    * The label provided by the policy creator to identify an approval stage. Read-only.
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
    * The label provided by the policy creator to identify an approval stage. Read-only.
    *
    * @param string $val The displayName
    *
    * @return ApprovalStage
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the justification
    * The justification associated with the approval stage decision.
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
    * The justification associated with the approval stage decision.
    *
    * @param string $val The justification
    *
    * @return ApprovalStage
    */
    public function setJustification($val)
    {
        $this->_propDict["justification"] = $val;
        return $this;
    }
    
    /**
    * Gets the reviewedBy
    * The identifier of the reviewer. Read-only.
    *
    * @return Identity The reviewedBy
    */
    public function getReviewedBy()
    {
        if (array_key_exists("reviewedBy", $this->_propDict)) {
            if (is_a($this->_propDict["reviewedBy"], "\Microsoft\Graph\Model\Identity")) {
                return $this->_propDict["reviewedBy"];
            } else {
                $this->_propDict["reviewedBy"] = new Identity($this->_propDict["reviewedBy"]);
                return $this->_propDict["reviewedBy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the reviewedBy
    * The identifier of the reviewer. Read-only.
    *
    * @param Identity $val The reviewedBy
    *
    * @return ApprovalStage
    */
    public function setReviewedBy($val)
    {
        $this->_propDict["reviewedBy"] = $val;
        return $this;
    }
    
    /**
    * Gets the reviewedDateTime
    * The date and time when a decision was recorded. The date and time information uses ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
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
    * The date and time when a decision was recorded. The date and time information uses ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
    *
    * @param \DateTime $val The reviewedDateTime
    *
    * @return ApprovalStage
    */
    public function setReviewedDateTime($val)
    {
        $this->_propDict["reviewedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the reviewResult
    * The result of this approval record. Possible values include: NotReviewed, Approved, Denied.
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
    * The result of this approval record. Possible values include: NotReviewed, Approved, Denied.
    *
    * @param string $val The reviewResult
    *
    * @return ApprovalStage
    */
    public function setReviewResult($val)
    {
        $this->_propDict["reviewResult"] = $val;
        return $this;
    }
    
    /**
    * Gets the status
    * The stage status. Possible values: InProgress, Initializing, Completed, Expired. Read-only.
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
    * The stage status. Possible values: InProgress, Initializing, Completed, Expired. Read-only.
    *
    * @param string $val The status
    *
    * @return ApprovalStage
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }
    
}
