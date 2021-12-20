<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TermsAndConditionsGroupAssignment File
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
* TermsAndConditionsGroupAssignment class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TermsAndConditionsGroupAssignment extends Entity
{
    /**
    * Gets the targetGroupId
    * Unique identifier of a group that the T&amp;C policy is assigned to.
    *
    * @return string The targetGroupId
    */
    public function getTargetGroupId()
    {
        if (array_key_exists("targetGroupId", $this->_propDict)) {
            return $this->_propDict["targetGroupId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the targetGroupId
    * Unique identifier of a group that the T&amp;C policy is assigned to.
    *
    * @param string $val The targetGroupId
    *
    * @return TermsAndConditionsGroupAssignment
    */
    public function setTargetGroupId($val)
    {
        $this->_propDict["targetGroupId"] = $val;
        return $this;
    }
    
    /**
    * Gets the termsAndConditions
    * Navigation link to the terms and conditions that are assigned.
    *
    * @return TermsAndConditions The termsAndConditions
    */
    public function getTermsAndConditions()
    {
        if (array_key_exists("termsAndConditions", $this->_propDict)) {
            if (is_a($this->_propDict["termsAndConditions"], "\Beta\Microsoft\Graph\Model\TermsAndConditions")) {
                return $this->_propDict["termsAndConditions"];
            } else {
                $this->_propDict["termsAndConditions"] = new TermsAndConditions($this->_propDict["termsAndConditions"]);
                return $this->_propDict["termsAndConditions"];
            }
        }
        return null;
    }
    
    /**
    * Sets the termsAndConditions
    * Navigation link to the terms and conditions that are assigned.
    *
    * @param TermsAndConditions $val The termsAndConditions
    *
    * @return TermsAndConditionsGroupAssignment
    */
    public function setTermsAndConditions($val)
    {
        $this->_propDict["termsAndConditions"] = $val;
        return $this;
    }
    
}
