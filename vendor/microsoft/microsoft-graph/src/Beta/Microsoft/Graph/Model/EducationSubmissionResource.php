<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EducationSubmissionResource File
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
* EducationSubmissionResource class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EducationSubmissionResource extends Entity
{
    /**
    * Gets the assignmentResourceUrl
    * Pointer to the assignment from which this resource was copied. If this is null, the student uploaded the resource.
    *
    * @return string The assignmentResourceUrl
    */
    public function getAssignmentResourceUrl()
    {
        if (array_key_exists("assignmentResourceUrl", $this->_propDict)) {
            return $this->_propDict["assignmentResourceUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the assignmentResourceUrl
    * Pointer to the assignment from which this resource was copied. If this is null, the student uploaded the resource.
    *
    * @param string $val The assignmentResourceUrl
    *
    * @return EducationSubmissionResource
    */
    public function setAssignmentResourceUrl($val)
    {
        $this->_propDict["assignmentResourceUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the resource
    * Resource object.
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
    * Resource object.
    *
    * @param EducationResource $val The resource
    *
    * @return EducationSubmissionResource
    */
    public function setResource($val)
    {
        $this->_propDict["resource"] = $val;
        return $this;
    }
    
}
