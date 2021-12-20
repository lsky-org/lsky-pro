<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EducationSubmission File
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
* EducationSubmission class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EducationSubmission extends Entity
{
    /**
    * Gets the recipient
    * Who this submission is assigned to.
    *
    * @return EducationSubmissionRecipient The recipient
    */
    public function getRecipient()
    {
        if (array_key_exists("recipient", $this->_propDict)) {
            if (is_a($this->_propDict["recipient"], "\Beta\Microsoft\Graph\Model\EducationSubmissionRecipient")) {
                return $this->_propDict["recipient"];
            } else {
                $this->_propDict["recipient"] = new EducationSubmissionRecipient($this->_propDict["recipient"]);
                return $this->_propDict["recipient"];
            }
        }
        return null;
    }
    
    /**
    * Sets the recipient
    * Who this submission is assigned to.
    *
    * @param EducationSubmissionRecipient $val The recipient
    *
    * @return EducationSubmission
    */
    public function setRecipient($val)
    {
        $this->_propDict["recipient"] = $val;
        return $this;
    }
    
    /**
    * Gets the releasedBy
    * User who moved the status of this submission to released.
    *
    * @return IdentitySet The releasedBy
    */
    public function getReleasedBy()
    {
        if (array_key_exists("releasedBy", $this->_propDict)) {
            if (is_a($this->_propDict["releasedBy"], "\Beta\Microsoft\Graph\Model\IdentitySet")) {
                return $this->_propDict["releasedBy"];
            } else {
                $this->_propDict["releasedBy"] = new IdentitySet($this->_propDict["releasedBy"]);
                return $this->_propDict["releasedBy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the releasedBy
    * User who moved the status of this submission to released.
    *
    * @param IdentitySet $val The releasedBy
    *
    * @return EducationSubmission
    */
    public function setReleasedBy($val)
    {
        $this->_propDict["releasedBy"] = $val;
        return $this;
    }
    
    /**
    * Gets the releasedDateTime
    * Moment in time when the submission was released. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @return \DateTime The releasedDateTime
    */
    public function getReleasedDateTime()
    {
        if (array_key_exists("releasedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["releasedDateTime"], "\DateTime")) {
                return $this->_propDict["releasedDateTime"];
            } else {
                $this->_propDict["releasedDateTime"] = new \DateTime($this->_propDict["releasedDateTime"]);
                return $this->_propDict["releasedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the releasedDateTime
    * Moment in time when the submission was released. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @param \DateTime $val The releasedDateTime
    *
    * @return EducationSubmission
    */
    public function setReleasedDateTime($val)
    {
        $this->_propDict["releasedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the resourcesFolderUrl
    * Folder where all file resources for this submission need to be stored.
    *
    * @return string The resourcesFolderUrl
    */
    public function getResourcesFolderUrl()
    {
        if (array_key_exists("resourcesFolderUrl", $this->_propDict)) {
            return $this->_propDict["resourcesFolderUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the resourcesFolderUrl
    * Folder where all file resources for this submission need to be stored.
    *
    * @param string $val The resourcesFolderUrl
    *
    * @return EducationSubmission
    */
    public function setResourcesFolderUrl($val)
    {
        $this->_propDict["resourcesFolderUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the returnedBy
    * User who moved the status of this submission to returned.
    *
    * @return IdentitySet The returnedBy
    */
    public function getReturnedBy()
    {
        if (array_key_exists("returnedBy", $this->_propDict)) {
            if (is_a($this->_propDict["returnedBy"], "\Beta\Microsoft\Graph\Model\IdentitySet")) {
                return $this->_propDict["returnedBy"];
            } else {
                $this->_propDict["returnedBy"] = new IdentitySet($this->_propDict["returnedBy"]);
                return $this->_propDict["returnedBy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the returnedBy
    * User who moved the status of this submission to returned.
    *
    * @param IdentitySet $val The returnedBy
    *
    * @return EducationSubmission
    */
    public function setReturnedBy($val)
    {
        $this->_propDict["returnedBy"] = $val;
        return $this;
    }
    
    /**
    * Gets the returnedDateTime
    * Moment in time when the submission was returned. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @return \DateTime The returnedDateTime
    */
    public function getReturnedDateTime()
    {
        if (array_key_exists("returnedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["returnedDateTime"], "\DateTime")) {
                return $this->_propDict["returnedDateTime"];
            } else {
                $this->_propDict["returnedDateTime"] = new \DateTime($this->_propDict["returnedDateTime"]);
                return $this->_propDict["returnedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the returnedDateTime
    * Moment in time when the submission was returned. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @param \DateTime $val The returnedDateTime
    *
    * @return EducationSubmission
    */
    public function setReturnedDateTime($val)
    {
        $this->_propDict["returnedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the status
    * Read-Only. Possible values are: working, submitted, released, returned.
    *
    * @return EducationSubmissionStatus The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\Model\EducationSubmissionStatus")) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new EducationSubmissionStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }
    
    /**
    * Sets the status
    * Read-Only. Possible values are: working, submitted, released, returned.
    *
    * @param EducationSubmissionStatus $val The status
    *
    * @return EducationSubmission
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }
    
    /**
    * Gets the submittedBy
    * User who moved the resource into the submitted state.
    *
    * @return IdentitySet The submittedBy
    */
    public function getSubmittedBy()
    {
        if (array_key_exists("submittedBy", $this->_propDict)) {
            if (is_a($this->_propDict["submittedBy"], "\Beta\Microsoft\Graph\Model\IdentitySet")) {
                return $this->_propDict["submittedBy"];
            } else {
                $this->_propDict["submittedBy"] = new IdentitySet($this->_propDict["submittedBy"]);
                return $this->_propDict["submittedBy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the submittedBy
    * User who moved the resource into the submitted state.
    *
    * @param IdentitySet $val The submittedBy
    *
    * @return EducationSubmission
    */
    public function setSubmittedBy($val)
    {
        $this->_propDict["submittedBy"] = $val;
        return $this;
    }
    
    /**
    * Gets the submittedDateTime
    * Moment in time when the submission was moved into the submitted state. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @return \DateTime The submittedDateTime
    */
    public function getSubmittedDateTime()
    {
        if (array_key_exists("submittedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["submittedDateTime"], "\DateTime")) {
                return $this->_propDict["submittedDateTime"];
            } else {
                $this->_propDict["submittedDateTime"] = new \DateTime($this->_propDict["submittedDateTime"]);
                return $this->_propDict["submittedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the submittedDateTime
    * Moment in time when the submission was moved into the submitted state. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @param \DateTime $val The submittedDateTime
    *
    * @return EducationSubmission
    */
    public function setSubmittedDateTime($val)
    {
        $this->_propDict["submittedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the unsubmittedBy
    * User who moved the resource from submitted into the working state.
    *
    * @return IdentitySet The unsubmittedBy
    */
    public function getUnsubmittedBy()
    {
        if (array_key_exists("unsubmittedBy", $this->_propDict)) {
            if (is_a($this->_propDict["unsubmittedBy"], "\Beta\Microsoft\Graph\Model\IdentitySet")) {
                return $this->_propDict["unsubmittedBy"];
            } else {
                $this->_propDict["unsubmittedBy"] = new IdentitySet($this->_propDict["unsubmittedBy"]);
                return $this->_propDict["unsubmittedBy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the unsubmittedBy
    * User who moved the resource from submitted into the working state.
    *
    * @param IdentitySet $val The unsubmittedBy
    *
    * @return EducationSubmission
    */
    public function setUnsubmittedBy($val)
    {
        $this->_propDict["unsubmittedBy"] = $val;
        return $this;
    }
    
    /**
    * Gets the unsubmittedDateTime
    * Moment in time when the submission was moved from submitted into the working state. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @return \DateTime The unsubmittedDateTime
    */
    public function getUnsubmittedDateTime()
    {
        if (array_key_exists("unsubmittedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["unsubmittedDateTime"], "\DateTime")) {
                return $this->_propDict["unsubmittedDateTime"];
            } else {
                $this->_propDict["unsubmittedDateTime"] = new \DateTime($this->_propDict["unsubmittedDateTime"]);
                return $this->_propDict["unsubmittedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the unsubmittedDateTime
    * Moment in time when the submission was moved from submitted into the working state. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @param \DateTime $val The unsubmittedDateTime
    *
    * @return EducationSubmission
    */
    public function setUnsubmittedDateTime($val)
    {
        $this->_propDict["unsubmittedDateTime"] = $val;
        return $this;
    }
    

     /** 
     * Gets the outcomes
    * Read-Write. Nullable.
     *
     * @return array The outcomes
     */
    public function getOutcomes()
    {
        if (array_key_exists("outcomes", $this->_propDict)) {
           return $this->_propDict["outcomes"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the outcomes
    * Read-Write. Nullable.
    *
    * @param EducationOutcome $val The outcomes
    *
    * @return EducationSubmission
    */
    public function setOutcomes($val)
    {
		$this->_propDict["outcomes"] = $val;
        return $this;
    }
    

     /** 
     * Gets the resources
    * Nullable.
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
    * Nullable.
    *
    * @param EducationSubmissionResource $val The resources
    *
    * @return EducationSubmission
    */
    public function setResources($val)
    {
		$this->_propDict["resources"] = $val;
        return $this;
    }
    

     /** 
     * Gets the submittedResources
    * Read-only. Nullable.
     *
     * @return array The submittedResources
     */
    public function getSubmittedResources()
    {
        if (array_key_exists("submittedResources", $this->_propDict)) {
           return $this->_propDict["submittedResources"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the submittedResources
    * Read-only. Nullable.
    *
    * @param EducationSubmissionResource $val The submittedResources
    *
    * @return EducationSubmission
    */
    public function setSubmittedResources($val)
    {
		$this->_propDict["submittedResources"] = $val;
        return $this;
    }
    
}
