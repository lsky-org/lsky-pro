<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DlpPoliciesJobResult File
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
* DlpPoliciesJobResult class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DlpPoliciesJobResult extends Entity
{

    /**
    * Gets the matchingRules
    *
    * @return MatchingDlpRule The matchingRules
    */
    public function getMatchingRules()
    {
        if (array_key_exists("matchingRules", $this->_propDict)) {
            if (is_a($this->_propDict["matchingRules"], "\Beta\Microsoft\Graph\Model\MatchingDlpRule")) {
                return $this->_propDict["matchingRules"];
            } else {
                $this->_propDict["matchingRules"] = new MatchingDlpRule($this->_propDict["matchingRules"]);
                return $this->_propDict["matchingRules"];
            }
        }
        return null;
    }

    /**
    * Sets the matchingRules
    *
    * @param MatchingDlpRule $val The value to assign to the matchingRules
    *
    * @return DlpPoliciesJobResult The DlpPoliciesJobResult
    */
    public function setMatchingRules($val)
    {
        $this->_propDict["matchingRules"] = $val;
         return $this;
    }
}
