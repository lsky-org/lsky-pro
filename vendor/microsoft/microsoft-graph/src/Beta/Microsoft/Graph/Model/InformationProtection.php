<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* InformationProtection File
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
* InformationProtection class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class InformationProtection extends Entity
{
    /**
    * Gets the bitlocker
    *
    * @return Bitlocker The bitlocker
    */
    public function getBitlocker()
    {
        if (array_key_exists("bitlocker", $this->_propDict)) {
            if (is_a($this->_propDict["bitlocker"], "\Beta\Microsoft\Graph\Model\Bitlocker")) {
                return $this->_propDict["bitlocker"];
            } else {
                $this->_propDict["bitlocker"] = new Bitlocker($this->_propDict["bitlocker"]);
                return $this->_propDict["bitlocker"];
            }
        }
        return null;
    }
    
    /**
    * Sets the bitlocker
    *
    * @param Bitlocker $val The bitlocker
    *
    * @return InformationProtection
    */
    public function setBitlocker($val)
    {
        $this->_propDict["bitlocker"] = $val;
        return $this;
    }
    

     /** 
     * Gets the dataLossPreventionPolicies
     *
     * @return array The dataLossPreventionPolicies
     */
    public function getDataLossPreventionPolicies()
    {
        if (array_key_exists("dataLossPreventionPolicies", $this->_propDict)) {
           return $this->_propDict["dataLossPreventionPolicies"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the dataLossPreventionPolicies
    *
    * @param DataLossPreventionPolicy $val The dataLossPreventionPolicies
    *
    * @return InformationProtection
    */
    public function setDataLossPreventionPolicies($val)
    {
		$this->_propDict["dataLossPreventionPolicies"] = $val;
        return $this;
    }
    

     /** 
     * Gets the sensitivityLabels
     *
     * @return array The sensitivityLabels
     */
    public function getSensitivityLabels()
    {
        if (array_key_exists("sensitivityLabels", $this->_propDict)) {
           return $this->_propDict["sensitivityLabels"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the sensitivityLabels
    *
    * @param SensitivityLabel $val The sensitivityLabels
    *
    * @return InformationProtection
    */
    public function setSensitivityLabels($val)
    {
		$this->_propDict["sensitivityLabels"] = $val;
        return $this;
    }
    
    /**
    * Gets the sensitivityPolicySettings
    *
    * @return SensitivityPolicySettings The sensitivityPolicySettings
    */
    public function getSensitivityPolicySettings()
    {
        if (array_key_exists("sensitivityPolicySettings", $this->_propDict)) {
            if (is_a($this->_propDict["sensitivityPolicySettings"], "\Beta\Microsoft\Graph\Model\SensitivityPolicySettings")) {
                return $this->_propDict["sensitivityPolicySettings"];
            } else {
                $this->_propDict["sensitivityPolicySettings"] = new SensitivityPolicySettings($this->_propDict["sensitivityPolicySettings"]);
                return $this->_propDict["sensitivityPolicySettings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the sensitivityPolicySettings
    *
    * @param SensitivityPolicySettings $val The sensitivityPolicySettings
    *
    * @return InformationProtection
    */
    public function setSensitivityPolicySettings($val)
    {
        $this->_propDict["sensitivityPolicySettings"] = $val;
        return $this;
    }
    
    /**
    * Gets the policy
    *
    * @return InformationProtectionPolicy The policy
    */
    public function getPolicy()
    {
        if (array_key_exists("policy", $this->_propDict)) {
            if (is_a($this->_propDict["policy"], "\Beta\Microsoft\Graph\Model\InformationProtectionPolicy")) {
                return $this->_propDict["policy"];
            } else {
                $this->_propDict["policy"] = new InformationProtectionPolicy($this->_propDict["policy"]);
                return $this->_propDict["policy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the policy
    *
    * @param InformationProtectionPolicy $val The policy
    *
    * @return InformationProtection
    */
    public function setPolicy($val)
    {
        $this->_propDict["policy"] = $val;
        return $this;
    }
    

     /** 
     * Gets the threatAssessmentRequests
     *
     * @return array The threatAssessmentRequests
     */
    public function getThreatAssessmentRequests()
    {
        if (array_key_exists("threatAssessmentRequests", $this->_propDict)) {
           return $this->_propDict["threatAssessmentRequests"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the threatAssessmentRequests
    *
    * @param ThreatAssessmentRequest $val The threatAssessmentRequests
    *
    * @return InformationProtection
    */
    public function setThreatAssessmentRequests($val)
    {
		$this->_propDict["threatAssessmentRequests"] = $val;
        return $this;
    }
    
}
