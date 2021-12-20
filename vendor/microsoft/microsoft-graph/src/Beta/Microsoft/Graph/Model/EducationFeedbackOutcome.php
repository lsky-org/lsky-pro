<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EducationFeedbackOutcome File
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
* EducationFeedbackOutcome class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EducationFeedbackOutcome extends EducationOutcome
{
    /**
    * Gets the feedback
    * Teacher's written feedback to the student.
    *
    * @return EducationFeedback The feedback
    */
    public function getFeedback()
    {
        if (array_key_exists("feedback", $this->_propDict)) {
            if (is_a($this->_propDict["feedback"], "\Beta\Microsoft\Graph\Model\EducationFeedback")) {
                return $this->_propDict["feedback"];
            } else {
                $this->_propDict["feedback"] = new EducationFeedback($this->_propDict["feedback"]);
                return $this->_propDict["feedback"];
            }
        }
        return null;
    }
    
    /**
    * Sets the feedback
    * Teacher's written feedback to the student.
    *
    * @param EducationFeedback $val The feedback
    *
    * @return EducationFeedbackOutcome
    */
    public function setFeedback($val)
    {
        $this->_propDict["feedback"] = $val;
        return $this;
    }
    
    /**
    * Gets the publishedFeedback
    * A copy of the feedback property that is made when the grade is released to the student.
    *
    * @return EducationFeedback The publishedFeedback
    */
    public function getPublishedFeedback()
    {
        if (array_key_exists("publishedFeedback", $this->_propDict)) {
            if (is_a($this->_propDict["publishedFeedback"], "\Beta\Microsoft\Graph\Model\EducationFeedback")) {
                return $this->_propDict["publishedFeedback"];
            } else {
                $this->_propDict["publishedFeedback"] = new EducationFeedback($this->_propDict["publishedFeedback"]);
                return $this->_propDict["publishedFeedback"];
            }
        }
        return null;
    }
    
    /**
    * Sets the publishedFeedback
    * A copy of the feedback property that is made when the grade is released to the student.
    *
    * @param EducationFeedback $val The publishedFeedback
    *
    * @return EducationFeedbackOutcome
    */
    public function setPublishedFeedback($val)
    {
        $this->_propDict["publishedFeedback"] = $val;
        return $this;
    }
    
}
