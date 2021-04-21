<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EducationIdentityDomain File
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
* EducationIdentityDomain class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EducationIdentityDomain extends Entity
{

    /**
    * Gets the appliesTo
    * The user role type to assign to the license. Possible values are: student, teacher, faculty.
    *
    * @return EducationUserRole The appliesTo
    */
    public function getAppliesTo()
    {
        if (array_key_exists("appliesTo", $this->_propDict)) {
            if (is_a($this->_propDict["appliesTo"], "\Beta\Microsoft\Graph\Model\EducationUserRole")) {
                return $this->_propDict["appliesTo"];
            } else {
                $this->_propDict["appliesTo"] = new EducationUserRole($this->_propDict["appliesTo"]);
                return $this->_propDict["appliesTo"];
            }
        }
        return null;
    }

    /**
    * Sets the appliesTo
    * The user role type to assign to the license. Possible values are: student, teacher, faculty.
    *
    * @param EducationUserRole $val The value to assign to the appliesTo
    *
    * @return EducationIdentityDomain The EducationIdentityDomain
    */
    public function setAppliesTo($val)
    {
        $this->_propDict["appliesTo"] = $val;
         return $this;
    }
    /**
    * Gets the name
    * Represents the domain for the user account.
    *
    * @return string The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }

    /**
    * Sets the name
    * Represents the domain for the user account.
    *
    * @param string $val The value of the name
    *
    * @return EducationIdentityDomain
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
}
