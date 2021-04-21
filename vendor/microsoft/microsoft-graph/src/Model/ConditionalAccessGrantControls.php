<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ConditionalAccessGrantControls File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;
/**
* ConditionalAccessGrantControls class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ConditionalAccessGrantControls extends Entity
{

    /**
    * Gets the builtInControls
    * List of values of built-in controls required by the policy. Possible values: block, mfa, compliantDevice, domainJoinedDevice, approvedApplication, compliantApplication, passwordChange, unknownFutureValue.
    *
    * @return ConditionalAccessGrantControl The builtInControls
    */
    public function getBuiltInControls()
    {
        if (array_key_exists("builtInControls", $this->_propDict)) {
            if (is_a($this->_propDict["builtInControls"], "\Microsoft\Graph\Model\ConditionalAccessGrantControl")) {
                return $this->_propDict["builtInControls"];
            } else {
                $this->_propDict["builtInControls"] = new ConditionalAccessGrantControl($this->_propDict["builtInControls"]);
                return $this->_propDict["builtInControls"];
            }
        }
        return null;
    }

    /**
    * Sets the builtInControls
    * List of values of built-in controls required by the policy. Possible values: block, mfa, compliantDevice, domainJoinedDevice, approvedApplication, compliantApplication, passwordChange, unknownFutureValue.
    *
    * @param ConditionalAccessGrantControl $val The value to assign to the builtInControls
    *
    * @return ConditionalAccessGrantControls The ConditionalAccessGrantControls
    */
    public function setBuiltInControls($val)
    {
        $this->_propDict["builtInControls"] = $val;
         return $this;
    }
    /**
    * Gets the customAuthenticationFactors
    * List of custom controls IDs required by the policy. Learn more about custom controls here: https://docs.microsoft.com/azure/active-directory/conditional-access/controls#custom-controls-preview
    *
    * @return string The customAuthenticationFactors
    */
    public function getCustomAuthenticationFactors()
    {
        if (array_key_exists("customAuthenticationFactors", $this->_propDict)) {
            return $this->_propDict["customAuthenticationFactors"];
        } else {
            return null;
        }
    }

    /**
    * Sets the customAuthenticationFactors
    * List of custom controls IDs required by the policy. Learn more about custom controls here: https://docs.microsoft.com/azure/active-directory/conditional-access/controls#custom-controls-preview
    *
    * @param string $val The value of the customAuthenticationFactors
    *
    * @return ConditionalAccessGrantControls
    */
    public function setCustomAuthenticationFactors($val)
    {
        $this->_propDict["customAuthenticationFactors"] = $val;
        return $this;
    }
    /**
    * Gets the operator
    * Defines the relationship of the grant controls. Possible values: AND, OR.
    *
    * @return string The operator
    */
    public function getOperator()
    {
        if (array_key_exists("operator", $this->_propDict)) {
            return $this->_propDict["operator"];
        } else {
            return null;
        }
    }

    /**
    * Sets the operator
    * Defines the relationship of the grant controls. Possible values: AND, OR.
    *
    * @param string $val The value of the operator
    *
    * @return ConditionalAccessGrantControls
    */
    public function setOperator($val)
    {
        $this->_propDict["operator"] = $val;
        return $this;
    }
    /**
    * Gets the termsOfUse
    * List of terms of use IDs required by the policy.
    *
    * @return string The termsOfUse
    */
    public function getTermsOfUse()
    {
        if (array_key_exists("termsOfUse", $this->_propDict)) {
            return $this->_propDict["termsOfUse"];
        } else {
            return null;
        }
    }

    /**
    * Sets the termsOfUse
    * List of terms of use IDs required by the policy.
    *
    * @param string $val The value of the termsOfUse
    *
    * @return ConditionalAccessGrantControls
    */
    public function setTermsOfUse($val)
    {
        $this->_propDict["termsOfUse"] = $val;
        return $this;
    }
}
