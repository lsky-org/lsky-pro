<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AuthenticationRequirementPolicy File
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
* AuthenticationRequirementPolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AuthenticationRequirementPolicy extends Entity
{
    /**
    * Gets the detail
    *
    * @return string The detail
    */
    public function getDetail()
    {
        if (array_key_exists("detail", $this->_propDict)) {
            return $this->_propDict["detail"];
        } else {
            return null;
        }
    }

    /**
    * Sets the detail
    *
    * @param string $val The value of the detail
    *
    * @return AuthenticationRequirementPolicy
    */
    public function setDetail($val)
    {
        $this->_propDict["detail"] = $val;
        return $this;
    }

    /**
    * Gets the requirementProvider
    *
    * @return RequirementProvider The requirementProvider
    */
    public function getRequirementProvider()
    {
        if (array_key_exists("requirementProvider", $this->_propDict)) {
            if (is_a($this->_propDict["requirementProvider"], "\Beta\Microsoft\Graph\Model\RequirementProvider")) {
                return $this->_propDict["requirementProvider"];
            } else {
                $this->_propDict["requirementProvider"] = new RequirementProvider($this->_propDict["requirementProvider"]);
                return $this->_propDict["requirementProvider"];
            }
        }
        return null;
    }

    /**
    * Sets the requirementProvider
    *
    * @param RequirementProvider $val The value to assign to the requirementProvider
    *
    * @return AuthenticationRequirementPolicy The AuthenticationRequirementPolicy
    */
    public function setRequirementProvider($val)
    {
        $this->_propDict["requirementProvider"] = $val;
         return $this;
    }
}
