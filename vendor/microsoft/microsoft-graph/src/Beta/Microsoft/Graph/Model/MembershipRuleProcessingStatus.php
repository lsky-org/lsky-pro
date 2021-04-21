<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MembershipRuleProcessingStatus File
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
* MembershipRuleProcessingStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MembershipRuleProcessingStatus extends Entity
{
    /**
    * Gets the errorMessage
    * Detailed error message if dynamic group processing ran into an error.  Optional. Read-only.
    *
    * @return string The errorMessage
    */
    public function getErrorMessage()
    {
        if (array_key_exists("errorMessage", $this->_propDict)) {
            return $this->_propDict["errorMessage"];
        } else {
            return null;
        }
    }

    /**
    * Sets the errorMessage
    * Detailed error message if dynamic group processing ran into an error.  Optional. Read-only.
    *
    * @param string $val The value of the errorMessage
    *
    * @return MembershipRuleProcessingStatus
    */
    public function setErrorMessage($val)
    {
        $this->_propDict["errorMessage"] = $val;
        return $this;
    }

    /**
    * Gets the lastMembershipUpdated
    * Most recent date and time when membership of a dynamic group was updated.  Optional. Read-only.
    *
    * @return \DateTime The lastMembershipUpdated
    */
    public function getLastMembershipUpdated()
    {
        if (array_key_exists("lastMembershipUpdated", $this->_propDict)) {
            if (is_a($this->_propDict["lastMembershipUpdated"], "\DateTime")) {
                return $this->_propDict["lastMembershipUpdated"];
            } else {
                $this->_propDict["lastMembershipUpdated"] = new \DateTime($this->_propDict["lastMembershipUpdated"]);
                return $this->_propDict["lastMembershipUpdated"];
            }
        }
        return null;
    }

    /**
    * Sets the lastMembershipUpdated
    * Most recent date and time when membership of a dynamic group was updated.  Optional. Read-only.
    *
    * @param \DateTime $val The value to assign to the lastMembershipUpdated
    *
    * @return MembershipRuleProcessingStatus The MembershipRuleProcessingStatus
    */
    public function setLastMembershipUpdated($val)
    {
        $this->_propDict["lastMembershipUpdated"] = $val;
         return $this;
    }

    /**
    * Gets the status
    * Current status of a dynamic group processing. Possible values are: NotStarted, Running, Succeeded, Failed, and UnknownFutureValue.   Required. Read-only.
    *
    * @return MembershipRuleProcessingStatusDetails The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\Model\MembershipRuleProcessingStatusDetails")) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new MembershipRuleProcessingStatusDetails($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    * Current status of a dynamic group processing. Possible values are: NotStarted, Running, Succeeded, Failed, and UnknownFutureValue.   Required. Read-only.
    *
    * @param MembershipRuleProcessingStatusDetails $val The value to assign to the status
    *
    * @return MembershipRuleProcessingStatus The MembershipRuleProcessingStatus
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
         return $this;
    }
}
