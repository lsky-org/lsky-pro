<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EducationAssignmentSettings File
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
* EducationAssignmentSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EducationAssignmentSettings extends Entity
{
    /**
    * Gets the submissionAnimationDisabled
    * Indicates whether turn-in celebration animation will be shown. A value of true indicates that the animation will not be shown. Default value is false.
    *
    * @return bool The submissionAnimationDisabled
    */
    public function getSubmissionAnimationDisabled()
    {
        if (array_key_exists("submissionAnimationDisabled", $this->_propDict)) {
            return $this->_propDict["submissionAnimationDisabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the submissionAnimationDisabled
    * Indicates whether turn-in celebration animation will be shown. A value of true indicates that the animation will not be shown. Default value is false.
    *
    * @param bool $val The submissionAnimationDisabled
    *
    * @return EducationAssignmentSettings
    */
    public function setSubmissionAnimationDisabled($val)
    {
        $this->_propDict["submissionAnimationDisabled"] = boolval($val);
        return $this;
    }
    
}
