<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MembershipRuleEvaluationDetails File
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
* MembershipRuleEvaluationDetails class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MembershipRuleEvaluationDetails extends Entity
{

    /**
    * Gets the membershipRuleEvaluationDetails
    *
    * @return ExpressionEvaluationDetails The membershipRuleEvaluationDetails
    */
    public function getMembershipRuleEvaluationDetails()
    {
        if (array_key_exists("membershipRuleEvaluationDetails", $this->_propDict)) {
            if (is_a($this->_propDict["membershipRuleEvaluationDetails"], "\Beta\Microsoft\Graph\Model\ExpressionEvaluationDetails")) {
                return $this->_propDict["membershipRuleEvaluationDetails"];
            } else {
                $this->_propDict["membershipRuleEvaluationDetails"] = new ExpressionEvaluationDetails($this->_propDict["membershipRuleEvaluationDetails"]);
                return $this->_propDict["membershipRuleEvaluationDetails"];
            }
        }
        return null;
    }

    /**
    * Sets the membershipRuleEvaluationDetails
    *
    * @param ExpressionEvaluationDetails $val The value to assign to the membershipRuleEvaluationDetails
    *
    * @return MembershipRuleEvaluationDetails The MembershipRuleEvaluationDetails
    */
    public function setMembershipRuleEvaluationDetails($val)
    {
        $this->_propDict["membershipRuleEvaluationDetails"] = $val;
         return $this;
    }
}
