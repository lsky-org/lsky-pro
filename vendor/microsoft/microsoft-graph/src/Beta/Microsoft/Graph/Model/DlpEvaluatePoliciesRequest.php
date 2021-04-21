<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DlpEvaluatePoliciesRequest File
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
* DlpEvaluatePoliciesRequest class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DlpEvaluatePoliciesRequest extends Entity
{

    /**
    * Gets the evaluationInput
    *
    * @return DlpEvaluationInput The evaluationInput
    */
    public function getEvaluationInput()
    {
        if (array_key_exists("evaluationInput", $this->_propDict)) {
            if (is_a($this->_propDict["evaluationInput"], "\Beta\Microsoft\Graph\Model\DlpEvaluationInput")) {
                return $this->_propDict["evaluationInput"];
            } else {
                $this->_propDict["evaluationInput"] = new DlpEvaluationInput($this->_propDict["evaluationInput"]);
                return $this->_propDict["evaluationInput"];
            }
        }
        return null;
    }

    /**
    * Sets the evaluationInput
    *
    * @param DlpEvaluationInput $val The value to assign to the evaluationInput
    *
    * @return DlpEvaluatePoliciesRequest The DlpEvaluatePoliciesRequest
    */
    public function setEvaluationInput($val)
    {
        $this->_propDict["evaluationInput"] = $val;
         return $this;
    }

    /**
    * Gets the notificationInfo
    *
    * @return DlpNotification The notificationInfo
    */
    public function getNotificationInfo()
    {
        if (array_key_exists("notificationInfo", $this->_propDict)) {
            if (is_a($this->_propDict["notificationInfo"], "\Beta\Microsoft\Graph\Model\DlpNotification")) {
                return $this->_propDict["notificationInfo"];
            } else {
                $this->_propDict["notificationInfo"] = new DlpNotification($this->_propDict["notificationInfo"]);
                return $this->_propDict["notificationInfo"];
            }
        }
        return null;
    }

    /**
    * Sets the notificationInfo
    *
    * @param DlpNotification $val The value to assign to the notificationInfo
    *
    * @return DlpEvaluatePoliciesRequest The DlpEvaluatePoliciesRequest
    */
    public function setNotificationInfo($val)
    {
        $this->_propDict["notificationInfo"] = $val;
         return $this;
    }
    /**
    * Gets the target
    *
    * @return string The target
    */
    public function getTarget()
    {
        if (array_key_exists("target", $this->_propDict)) {
            return $this->_propDict["target"];
        } else {
            return null;
        }
    }

    /**
    * Sets the target
    *
    * @param string $val The value of the target
    *
    * @return DlpEvaluatePoliciesRequest
    */
    public function setTarget($val)
    {
        $this->_propDict["target"] = $val;
        return $this;
    }
}
