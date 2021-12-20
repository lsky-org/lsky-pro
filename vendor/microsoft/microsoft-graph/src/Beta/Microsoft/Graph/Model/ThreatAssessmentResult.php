<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ThreatAssessmentResult File
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
* ThreatAssessmentResult class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ThreatAssessmentResult extends Entity
{
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
    * @return ThreatAssessmentResult
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the message
    * The result message for each threat assessment.
    *
    * @return string The message
    */
    public function getMessage()
    {
        if (array_key_exists("message", $this->_propDict)) {
            return $this->_propDict["message"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the message
    * The result message for each threat assessment.
    *
    * @param string $val The message
    *
    * @return ThreatAssessmentResult
    */
    public function setMessage($val)
    {
        $this->_propDict["message"] = $val;
        return $this;
    }
    
    /**
    * Gets the resultType
    * The threat assessment result type. Possible values are: checkPolicy (only for mail assessment), rescan.
    *
    * @return ThreatAssessmentResultType The resultType
    */
    public function getResultType()
    {
        if (array_key_exists("resultType", $this->_propDict)) {
            if (is_a($this->_propDict["resultType"], "\Beta\Microsoft\Graph\Model\ThreatAssessmentResultType")) {
                return $this->_propDict["resultType"];
            } else {
                $this->_propDict["resultType"] = new ThreatAssessmentResultType($this->_propDict["resultType"]);
                return $this->_propDict["resultType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the resultType
    * The threat assessment result type. Possible values are: checkPolicy (only for mail assessment), rescan.
    *
    * @param ThreatAssessmentResultType $val The resultType
    *
    * @return ThreatAssessmentResult
    */
    public function setResultType($val)
    {
        $this->_propDict["resultType"] = $val;
        return $this;
    }
    
}
