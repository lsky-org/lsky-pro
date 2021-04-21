<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EducationAssignmentPointsGrade File
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
* EducationAssignmentPointsGrade class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EducationAssignmentPointsGrade extends EducationAssignmentGrade
{

    /**
    * Gets the points
    * Number of points a teacher is giving this submission object.
    *
    * @return Single The points
    */
    public function getPoints()
    {
        if (array_key_exists("points", $this->_propDict)) {
            if (is_a($this->_propDict["points"], "\Beta\Microsoft\Graph\Model\Single")) {
                return $this->_propDict["points"];
            } else {
                $this->_propDict["points"] = new Single($this->_propDict["points"]);
                return $this->_propDict["points"];
            }
        }
        return null;
    }

    /**
    * Sets the points
    * Number of points a teacher is giving this submission object.
    *
    * @param Single $val The value to assign to the points
    *
    * @return EducationAssignmentPointsGrade The EducationAssignmentPointsGrade
    */
    public function setPoints($val)
    {
        $this->_propDict["points"] = $val;
         return $this;
    }
}
