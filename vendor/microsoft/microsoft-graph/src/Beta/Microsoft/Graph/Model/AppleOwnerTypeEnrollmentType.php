<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AppleOwnerTypeEnrollmentType File
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
* AppleOwnerTypeEnrollmentType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AppleOwnerTypeEnrollmentType extends Entity
{

    /**
    * Gets the enrollmentType
    * The enrollment type. Possible values are: unknown, device, user.
    *
    * @return AppleUserInitiatedEnrollmentType The enrollmentType
    */
    public function getEnrollmentType()
    {
        if (array_key_exists("enrollmentType", $this->_propDict)) {
            if (is_a($this->_propDict["enrollmentType"], "\Beta\Microsoft\Graph\Model\AppleUserInitiatedEnrollmentType")) {
                return $this->_propDict["enrollmentType"];
            } else {
                $this->_propDict["enrollmentType"] = new AppleUserInitiatedEnrollmentType($this->_propDict["enrollmentType"]);
                return $this->_propDict["enrollmentType"];
            }
        }
        return null;
    }

    /**
    * Sets the enrollmentType
    * The enrollment type. Possible values are: unknown, device, user.
    *
    * @param AppleUserInitiatedEnrollmentType $val The value to assign to the enrollmentType
    *
    * @return AppleOwnerTypeEnrollmentType The AppleOwnerTypeEnrollmentType
    */
    public function setEnrollmentType($val)
    {
        $this->_propDict["enrollmentType"] = $val;
         return $this;
    }

    /**
    * Gets the ownerType
    * The owner type. Possible values are: unknown, company, personal.
    *
    * @return ManagedDeviceOwnerType The ownerType
    */
    public function getOwnerType()
    {
        if (array_key_exists("ownerType", $this->_propDict)) {
            if (is_a($this->_propDict["ownerType"], "\Beta\Microsoft\Graph\Model\ManagedDeviceOwnerType")) {
                return $this->_propDict["ownerType"];
            } else {
                $this->_propDict["ownerType"] = new ManagedDeviceOwnerType($this->_propDict["ownerType"]);
                return $this->_propDict["ownerType"];
            }
        }
        return null;
    }

    /**
    * Sets the ownerType
    * The owner type. Possible values are: unknown, company, personal.
    *
    * @param ManagedDeviceOwnerType $val The value to assign to the ownerType
    *
    * @return AppleOwnerTypeEnrollmentType The AppleOwnerTypeEnrollmentType
    */
    public function setOwnerType($val)
    {
        $this->_propDict["ownerType"] = $val;
         return $this;
    }
}
