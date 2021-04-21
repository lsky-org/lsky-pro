<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EducationAssignmentPointsGradeType File
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
* EducationAssignmentPointsGradeType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EducationAssignmentPointsGradeType extends EducationAssignmentGradeType
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.educationAssignmentPointsGradeType");
    }


    /**
    * Gets the maxPoints
    * Max points possible for this assignment.
    *
    * @return Single The maxPoints
    */
    public function getMaxPoints()
    {
        if (array_key_exists("maxPoints", $this->_propDict)) {
            if (is_a($this->_propDict["maxPoints"], "\Beta\Microsoft\Graph\Model\Single")) {
                return $this->_propDict["maxPoints"];
            } else {
                $this->_propDict["maxPoints"] = new Single($this->_propDict["maxPoints"]);
                return $this->_propDict["maxPoints"];
            }
        }
        return null;
    }

    /**
    * Sets the maxPoints
    * Max points possible for this assignment.
    *
    * @param Single $val The value to assign to the maxPoints
    *
    * @return EducationAssignmentPointsGradeType The EducationAssignmentPointsGradeType
    */
    public function setMaxPoints($val)
    {
        $this->_propDict["maxPoints"] = $val;
         return $this;
    }
}
