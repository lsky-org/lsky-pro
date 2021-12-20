<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ChatMessagePolicyViolation File
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
* ChatMessagePolicyViolation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ChatMessagePolicyViolation extends Entity
{

    /**
    * Gets the dlpAction
    * The action taken by the DLP provider on the message with sensitive content. Supported values are: NoneNotifySender -- Inform the sender of the violation but allow readers to read the message.BlockAccess -- Block readers from reading the message.BlockAccessExternal -- Block users outside the organization from reading the message, while allowing users within the organization to read the message.
    *
    * @return ChatMessagePolicyViolationDlpActionTypes The dlpAction
    */
    public function getDlpAction()
    {
        if (array_key_exists("dlpAction", $this->_propDict)) {
            if (is_a($this->_propDict["dlpAction"], "\Microsoft\Graph\Model\ChatMessagePolicyViolationDlpActionTypes")) {
                return $this->_propDict["dlpAction"];
            } else {
                $this->_propDict["dlpAction"] = new ChatMessagePolicyViolationDlpActionTypes($this->_propDict["dlpAction"]);
                return $this->_propDict["dlpAction"];
            }
        }
        return null;
    }

    /**
    * Sets the dlpAction
    * The action taken by the DLP provider on the message with sensitive content. Supported values are: NoneNotifySender -- Inform the sender of the violation but allow readers to read the message.BlockAccess -- Block readers from reading the message.BlockAccessExternal -- Block users outside the organization from reading the message, while allowing users within the organization to read the message.
    *
    * @param ChatMessagePolicyViolationDlpActionTypes $val The value to assign to the dlpAction
    *
    * @return ChatMessagePolicyViolation The ChatMessagePolicyViolation
    */
    public function setDlpAction($val)
    {
        $this->_propDict["dlpAction"] = $val;
         return $this;
    }
    /**
    * Gets the justificationText
    * Justification text provided by the sender of the message when overriding a policy violation.
    *
    * @return string The justificationText
    */
    public function getJustificationText()
    {
        if (array_key_exists("justificationText", $this->_propDict)) {
            return $this->_propDict["justificationText"];
        } else {
            return null;
        }
    }

    /**
    * Sets the justificationText
    * Justification text provided by the sender of the message when overriding a policy violation.
    *
    * @param string $val The value of the justificationText
    *
    * @return ChatMessagePolicyViolation
    */
    public function setJustificationText($val)
    {
        $this->_propDict["justificationText"] = $val;
        return $this;
    }

    /**
    * Gets the policyTip
    * Information to display to the message sender about why the message was flagged as a violation.
    *
    * @return ChatMessagePolicyViolationPolicyTip The policyTip
    */
    public function getPolicyTip()
    {
        if (array_key_exists("policyTip", $this->_propDict)) {
            if (is_a($this->_propDict["policyTip"], "\Microsoft\Graph\Model\ChatMessagePolicyViolationPolicyTip")) {
                return $this->_propDict["policyTip"];
            } else {
                $this->_propDict["policyTip"] = new ChatMessagePolicyViolationPolicyTip($this->_propDict["policyTip"]);
                return $this->_propDict["policyTip"];
            }
        }
        return null;
    }

    /**
    * Sets the policyTip
    * Information to display to the message sender about why the message was flagged as a violation.
    *
    * @param ChatMessagePolicyViolationPolicyTip $val The value to assign to the policyTip
    *
    * @return ChatMessagePolicyViolation The ChatMessagePolicyViolation
    */
    public function setPolicyTip($val)
    {
        $this->_propDict["policyTip"] = $val;
         return $this;
    }

    /**
    * Gets the userAction
    * Indicates the action taken by the user on a message blocked by the DLP provider. Supported values are: NoneOverrideReportFalsePositiveWhen the DLP provider is updating the message for blocking sensitive content, userAction is not required.
    *
    * @return ChatMessagePolicyViolationUserActionTypes The userAction
    */
    public function getUserAction()
    {
        if (array_key_exists("userAction", $this->_propDict)) {
            if (is_a($this->_propDict["userAction"], "\Microsoft\Graph\Model\ChatMessagePolicyViolationUserActionTypes")) {
                return $this->_propDict["userAction"];
            } else {
                $this->_propDict["userAction"] = new ChatMessagePolicyViolationUserActionTypes($this->_propDict["userAction"]);
                return $this->_propDict["userAction"];
            }
        }
        return null;
    }

    /**
    * Sets the userAction
    * Indicates the action taken by the user on a message blocked by the DLP provider. Supported values are: NoneOverrideReportFalsePositiveWhen the DLP provider is updating the message for blocking sensitive content, userAction is not required.
    *
    * @param ChatMessagePolicyViolationUserActionTypes $val The value to assign to the userAction
    *
    * @return ChatMessagePolicyViolation The ChatMessagePolicyViolation
    */
    public function setUserAction($val)
    {
        $this->_propDict["userAction"] = $val;
         return $this;
    }

    /**
    * Gets the verdictDetails
    * Indicates what actions the sender may take in response to the policy violation. Supported values are: NoneAllowFalsePositiveOverride -- Allows the sender to declare the policyViolation to be an error in the DLP app and its rules, and allow readers to see the message again if the dlpAction had hidden it.AllowOverrideWithoutJustification -- Allows the sender to overriide the DLP violation and allow readers to see the message again if the dlpAction had hidden it, without needing to provide an explanation for doing so. AllowOverrideWithJustification -- Allows the sender to overriide the DLP violation and allow readers to see the message again if the dlpAction had hidden it, after providing an explanation for doing so.AllowOverrideWithoutJustification and AllowOverrideWithJustification are mutually exclusive.
    *
    * @return ChatMessagePolicyViolationVerdictDetailsTypes The verdictDetails
    */
    public function getVerdictDetails()
    {
        if (array_key_exists("verdictDetails", $this->_propDict)) {
            if (is_a($this->_propDict["verdictDetails"], "\Microsoft\Graph\Model\ChatMessagePolicyViolationVerdictDetailsTypes")) {
                return $this->_propDict["verdictDetails"];
            } else {
                $this->_propDict["verdictDetails"] = new ChatMessagePolicyViolationVerdictDetailsTypes($this->_propDict["verdictDetails"]);
                return $this->_propDict["verdictDetails"];
            }
        }
        return null;
    }

    /**
    * Sets the verdictDetails
    * Indicates what actions the sender may take in response to the policy violation. Supported values are: NoneAllowFalsePositiveOverride -- Allows the sender to declare the policyViolation to be an error in the DLP app and its rules, and allow readers to see the message again if the dlpAction had hidden it.AllowOverrideWithoutJustification -- Allows the sender to overriide the DLP violation and allow readers to see the message again if the dlpAction had hidden it, without needing to provide an explanation for doing so. AllowOverrideWithJustification -- Allows the sender to overriide the DLP violation and allow readers to see the message again if the dlpAction had hidden it, after providing an explanation for doing so.AllowOverrideWithoutJustification and AllowOverrideWithJustification are mutually exclusive.
    *
    * @param ChatMessagePolicyViolationVerdictDetailsTypes $val The value to assign to the verdictDetails
    *
    * @return ChatMessagePolicyViolation The ChatMessagePolicyViolation
    */
    public function setVerdictDetails($val)
    {
        $this->_propDict["verdictDetails"] = $val;
         return $this;
    }
}
