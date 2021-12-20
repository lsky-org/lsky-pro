<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EducationSynchronizationLicenseAssignment File
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
* EducationSynchronizationLicenseAssignment class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EducationSynchronizationLicenseAssignment extends Entity
{

    /**
    * Gets the appliesTo
    * The user role type to assign to license. Possible values are: student, teacher, faculty.
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
    * The user role type to assign to license. Possible values are: student, teacher, faculty.
    *
    * @param EducationUserRole $val The value to assign to the appliesTo
    *
    * @return EducationSynchronizationLicenseAssignment The EducationSynchronizationLicenseAssignment
    */
    public function setAppliesTo($val)
    {
        $this->_propDict["appliesTo"] = $val;
         return $this;
    }
    /**
    * Gets the skuIds
    * Represents the SKU identifiers of the licenses to assign.
    *
    * @return string The skuIds
    */
    public function getSkuIds()
    {
        if (array_key_exists("skuIds", $this->_propDict)) {
            return $this->_propDict["skuIds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the skuIds
    * Represents the SKU identifiers of the licenses to assign.
    *
    * @param string $val The value of the skuIds
    *
    * @return EducationSynchronizationLicenseAssignment
    */
    public function setSkuIds($val)
    {
        $this->_propDict["skuIds"] = $val;
        return $this;
    }
}
