<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EducationAssignmentResource File
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
* EducationAssignmentResource class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EducationAssignmentResource extends Entity
{
    /**
    * Gets the distributeForStudentWork
    * Indicates whether this resource should be copied to each student submission for modification and submission.
    *
    * @return bool The distributeForStudentWork
    */
    public function getDistributeForStudentWork()
    {
        if (array_key_exists("distributeForStudentWork", $this->_propDict)) {
            return $this->_propDict["distributeForStudentWork"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the distributeForStudentWork
    * Indicates whether this resource should be copied to each student submission for modification and submission.
    *
    * @param bool $val The distributeForStudentWork
    *
    * @return EducationAssignmentResource
    */
    public function setDistributeForStudentWork($val)
    {
        $this->_propDict["distributeForStudentWork"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the resource
    * Resource object that has been associated with this assignment.
    *
    * @return EducationResource The resource
    */
    public function getResource()
    {
        if (array_key_exists("resource", $this->_propDict)) {
            if (is_a($this->_propDict["resource"], "\Beta\Microsoft\Graph\Model\EducationResource")) {
                return $this->_propDict["resource"];
            } else {
                $this->_propDict["resource"] = new EducationResource($this->_propDict["resource"]);
                return $this->_propDict["resource"];
            }
        }
        return null;
    }
    
    /**
    * Sets the resource
    * Resource object that has been associated with this assignment.
    *
    * @param EducationResource $val The resource
    *
    * @return EducationAssignmentResource
    */
    public function setResource($val)
    {
        $this->_propDict["resource"] = $val;
        return $this;
    }
    
}
