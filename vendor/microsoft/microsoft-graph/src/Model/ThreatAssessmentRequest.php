<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ThreatAssessmentRequest File
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
* ThreatAssessmentRequest class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ThreatAssessmentRequest extends Entity
{
    /**
    * Gets the category
    * The threat category. Possible values are: spam, phishing, malware.
    *
    * @return ThreatCategory The category
    */
    public function getCategory()
    {
        if (array_key_exists("category", $this->_propDict)) {
            if (is_a($this->_propDict["category"], "\Microsoft\Graph\Model\ThreatCategory")) {
                return $this->_propDict["category"];
            } else {
                $this->_propDict["category"] = new ThreatCategory($this->_propDict["category"]);
                return $this->_propDict["category"];
            }
        }
        return null;
    }
    
    /**
    * Sets the category
    * The threat category. Possible values are: spam, phishing, malware.
    *
    * @param ThreatCategory $val The category
    *
    * @return ThreatAssessmentRequest
    */
    public function setCategory($val)
    {
        $this->_propDict["category"] = $val;
        return $this;
    }
    
    /**
    * Gets the contentType
    * The content type of threat assessment. Possible values are: mail, url, file.
    *
    * @return ThreatAssessmentContentType The contentType
    */
    public function getContentType()
    {
        if (array_key_exists("contentType", $this->_propDict)) {
            if (is_a($this->_propDict["contentType"], "\Microsoft\Graph\Model\ThreatAssessmentContentType")) {
                return $this->_propDict["contentType"];
            } else {
                $this->_propDict["contentType"] = new ThreatAssessmentContentType($this->_propDict["contentType"]);
                return $this->_propDict["contentType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the contentType
    * The content type of threat assessment. Possible values are: mail, url, file.
    *
    * @param ThreatAssessmentContentType $val The contentType
    *
    * @return ThreatAssessmentRequest
    */
    public function setContentType($val)
    {
        $this->_propDict["contentType"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdBy
    * The threat assessment request creator.
    *
    * @return IdentitySet The createdBy
    */
    public function getCreatedBy()
    {
        if (array_key_exists("createdBy", $this->_propDict)) {
            if (is_a($this->_propDict["createdBy"], "\Microsoft\Graph\Model\IdentitySet")) {
                return $this->_propDict["createdBy"];
            } else {
                $this->_propDict["createdBy"] = new IdentitySet($this->_propDict["createdBy"]);
                return $this->_propDict["createdBy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the createdBy
    * The threat assessment request creator.
    *
    * @param IdentitySet $val The createdBy
    *
    * @return ThreatAssessmentRequest
    */
    public function setCreatedBy($val)
    {
        $this->_propDict["createdBy"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdDateTime
    * The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
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
    * The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return ThreatAssessmentRequest
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the expectedAssessment
    * The expected assessment from submitter. Possible values are: block, unblock.
    *
    * @return ThreatExpectedAssessment The expectedAssessment
    */
    public function getExpectedAssessment()
    {
        if (array_key_exists("expectedAssessment", $this->_propDict)) {
            if (is_a($this->_propDict["expectedAssessment"], "\Microsoft\Graph\Model\ThreatExpectedAssessment")) {
                return $this->_propDict["expectedAssessment"];
            } else {
                $this->_propDict["expectedAssessment"] = new ThreatExpectedAssessment($this->_propDict["expectedAssessment"]);
                return $this->_propDict["expectedAssessment"];
            }
        }
        return null;
    }
    
    /**
    * Sets the expectedAssessment
    * The expected assessment from submitter. Possible values are: block, unblock.
    *
    * @param ThreatExpectedAssessment $val The expectedAssessment
    *
    * @return ThreatAssessmentRequest
    */
    public function setExpectedAssessment($val)
    {
        $this->_propDict["expectedAssessment"] = $val;
        return $this;
    }
    
    /**
    * Gets the requestSource
    * The source of the threat assessment request. Possible values are: user, administrator.
    *
    * @return ThreatAssessmentRequestSource The requestSource
    */
    public function getRequestSource()
    {
        if (array_key_exists("requestSource", $this->_propDict)) {
            if (is_a($this->_propDict["requestSource"], "\Microsoft\Graph\Model\ThreatAssessmentRequestSource")) {
                return $this->_propDict["requestSource"];
            } else {
                $this->_propDict["requestSource"] = new ThreatAssessmentRequestSource($this->_propDict["requestSource"]);
                return $this->_propDict["requestSource"];
            }
        }
        return null;
    }
    
    /**
    * Sets the requestSource
    * The source of the threat assessment request. Possible values are: user, administrator.
    *
    * @param ThreatAssessmentRequestSource $val The requestSource
    *
    * @return ThreatAssessmentRequest
    */
    public function setRequestSource($val)
    {
        $this->_propDict["requestSource"] = $val;
        return $this;
    }
    
    /**
    * Gets the status
    * The assessment process status. Possible values are: pending, completed.
    *
    * @return ThreatAssessmentStatus The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Microsoft\Graph\Model\ThreatAssessmentStatus")) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new ThreatAssessmentStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }
    
    /**
    * Sets the status
    * The assessment process status. Possible values are: pending, completed.
    *
    * @param ThreatAssessmentStatus $val The status
    *
    * @return ThreatAssessmentRequest
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }
    

     /** 
     * Gets the results
    * A collection of threat assessment results. Read-only. By default, a GET /threatAssessmentRequests/{id} does not return this property unless you apply $expand on it.
     *
     * @return array The results
     */
    public function getResults()
    {
        if (array_key_exists("results", $this->_propDict)) {
           return $this->_propDict["results"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the results
    * A collection of threat assessment results. Read-only. By default, a GET /threatAssessmentRequests/{id} does not return this property unless you apply $expand on it.
    *
    * @param ThreatAssessmentResult $val The results
    *
    * @return ThreatAssessmentRequest
    */
    public function setResults($val)
    {
		$this->_propDict["results"] = $val;
        return $this;
    }
    
}
