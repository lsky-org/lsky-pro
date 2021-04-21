<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ApprovalWorkflowProvider File
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
* ApprovalWorkflowProvider class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ApprovalWorkflowProvider extends Entity
{
    /**
    * Gets the displayName
    *
    * @return string The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the displayName
    *
    * @param string $val The displayName
    *
    * @return ApprovalWorkflowProvider
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    

     /** 
     * Gets the businessFlows
     *
     * @return array The businessFlows
     */
    public function getBusinessFlows()
    {
        if (array_key_exists("businessFlows", $this->_propDict)) {
           return $this->_propDict["businessFlows"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the businessFlows
    *
    * @param BusinessFlow $val The businessFlows
    *
    * @return ApprovalWorkflowProvider
    */
    public function setBusinessFlows($val)
    {
		$this->_propDict["businessFlows"] = $val;
        return $this;
    }
    

     /** 
     * Gets the businessFlowsWithRequestsAwaitingMyDecision
     *
     * @return array The businessFlowsWithRequestsAwaitingMyDecision
     */
    public function getBusinessFlowsWithRequestsAwaitingMyDecision()
    {
        if (array_key_exists("businessFlowsWithRequestsAwaitingMyDecision", $this->_propDict)) {
           return $this->_propDict["businessFlowsWithRequestsAwaitingMyDecision"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the businessFlowsWithRequestsAwaitingMyDecision
    *
    * @param BusinessFlow $val The businessFlowsWithRequestsAwaitingMyDecision
    *
    * @return ApprovalWorkflowProvider
    */
    public function setBusinessFlowsWithRequestsAwaitingMyDecision($val)
    {
		$this->_propDict["businessFlowsWithRequestsAwaitingMyDecision"] = $val;
        return $this;
    }
    

     /** 
     * Gets the policyTemplates
     *
     * @return array The policyTemplates
     */
    public function getPolicyTemplates()
    {
        if (array_key_exists("policyTemplates", $this->_propDict)) {
           return $this->_propDict["policyTemplates"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the policyTemplates
    *
    * @param GovernancePolicyTemplate $val The policyTemplates
    *
    * @return ApprovalWorkflowProvider
    */
    public function setPolicyTemplates($val)
    {
		$this->_propDict["policyTemplates"] = $val;
        return $this;
    }
    
}
