<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ApprovalSettings File
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
* ApprovalSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ApprovalSettings extends Entity
{
    /**
    * Gets the approvalMode
    * One of NoApproval, SingleStage or Serial. The NoApproval is used when isApprovalRequired is false.
    *
    * @return string The approvalMode
    */
    public function getApprovalMode()
    {
        if (array_key_exists("approvalMode", $this->_propDict)) {
            return $this->_propDict["approvalMode"];
        } else {
            return null;
        }
    }

    /**
    * Sets the approvalMode
    * One of NoApproval, SingleStage or Serial. The NoApproval is used when isApprovalRequired is false.
    *
    * @param string $val The value of the approvalMode
    *
    * @return ApprovalSettings
    */
    public function setApprovalMode($val)
    {
        $this->_propDict["approvalMode"] = $val;
        return $this;
    }

    /**
    * Gets the approvalStages
    * If approval is required, the one or two elements of this collection define each of the stages of approval. An empty array if no approval is required.
    *
    * @return ApprovalStage The approvalStages
    */
    public function getApprovalStages()
    {
        if (array_key_exists("approvalStages", $this->_propDict)) {
            if (is_a($this->_propDict["approvalStages"], "\Beta\Microsoft\Graph\Model\ApprovalStage")) {
                return $this->_propDict["approvalStages"];
            } else {
                $this->_propDict["approvalStages"] = new ApprovalStage($this->_propDict["approvalStages"]);
                return $this->_propDict["approvalStages"];
            }
        }
        return null;
    }

    /**
    * Sets the approvalStages
    * If approval is required, the one or two elements of this collection define each of the stages of approval. An empty array if no approval is required.
    *
    * @param ApprovalStage $val The value to assign to the approvalStages
    *
    * @return ApprovalSettings The ApprovalSettings
    */
    public function setApprovalStages($val)
    {
        $this->_propDict["approvalStages"] = $val;
         return $this;
    }
    /**
    * Gets the isApprovalRequired
    * If false, then approval is not required for requests in this policy.
    *
    * @return bool The isApprovalRequired
    */
    public function getIsApprovalRequired()
    {
        if (array_key_exists("isApprovalRequired", $this->_propDict)) {
            return $this->_propDict["isApprovalRequired"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isApprovalRequired
    * If false, then approval is not required for requests in this policy.
    *
    * @param bool $val The value of the isApprovalRequired
    *
    * @return ApprovalSettings
    */
    public function setIsApprovalRequired($val)
    {
        $this->_propDict["isApprovalRequired"] = $val;
        return $this;
    }
    /**
    * Gets the isApprovalRequiredForExtension
    * If false, then approval is not required for a user who already has an assignment to extend their assignment.
    *
    * @return bool The isApprovalRequiredForExtension
    */
    public function getIsApprovalRequiredForExtension()
    {
        if (array_key_exists("isApprovalRequiredForExtension", $this->_propDict)) {
            return $this->_propDict["isApprovalRequiredForExtension"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isApprovalRequiredForExtension
    * If false, then approval is not required for a user who already has an assignment to extend their assignment.
    *
    * @param bool $val The value of the isApprovalRequiredForExtension
    *
    * @return ApprovalSettings
    */
    public function setIsApprovalRequiredForExtension($val)
    {
        $this->_propDict["isApprovalRequiredForExtension"] = $val;
        return $this;
    }
    /**
    * Gets the isRequestorJustificationRequired
    * Indicates whether the requestor is required to supply a justification in their request.
    *
    * @return bool The isRequestorJustificationRequired
    */
    public function getIsRequestorJustificationRequired()
    {
        if (array_key_exists("isRequestorJustificationRequired", $this->_propDict)) {
            return $this->_propDict["isRequestorJustificationRequired"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isRequestorJustificationRequired
    * Indicates whether the requestor is required to supply a justification in their request.
    *
    * @param bool $val The value of the isRequestorJustificationRequired
    *
    * @return ApprovalSettings
    */
    public function setIsRequestorJustificationRequired($val)
    {
        $this->_propDict["isRequestorJustificationRequired"] = $val;
        return $this;
    }
}
