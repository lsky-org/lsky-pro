<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RiskyUser File
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
* RiskyUser class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RiskyUser extends Entity
{
    /**
    * Gets the isDeleted
    * Indicates whether the user is deleted. Possible values are: true, false.
    *
    * @return bool The isDeleted
    */
    public function getIsDeleted()
    {
        if (array_key_exists("isDeleted", $this->_propDict)) {
            return $this->_propDict["isDeleted"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isDeleted
    * Indicates whether the user is deleted. Possible values are: true, false.
    *
    * @param bool $val The isDeleted
    *
    * @return RiskyUser
    */
    public function setIsDeleted($val)
    {
        $this->_propDict["isDeleted"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the isProcessing
    * Indicates whether a user's risky state is being processed by the backend.
    *
    * @return bool The isProcessing
    */
    public function getIsProcessing()
    {
        if (array_key_exists("isProcessing", $this->_propDict)) {
            return $this->_propDict["isProcessing"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isProcessing
    * Indicates whether a user's risky state is being processed by the backend.
    *
    * @param bool $val The isProcessing
    *
    * @return RiskyUser
    */
    public function setIsProcessing($val)
    {
        $this->_propDict["isProcessing"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the riskDetail
    * The possible values are none, adminGeneratedTemporaryPassword, userPerformedSecuredPasswordChange, userPerformedSecuredPasswordReset, adminConfirmedSigninSafe, aiConfirmedSigninSafe, userPassedMFADrivenByRiskBasedPolicy, adminDismissedAllRiskForUser, adminConfirmedSigninCompromised, hidden, adminConfirmedUserCompromised, unknownFutureValue.
    *
    * @return RiskDetail The riskDetail
    */
    public function getRiskDetail()
    {
        if (array_key_exists("riskDetail", $this->_propDict)) {
            if (is_a($this->_propDict["riskDetail"], "\Beta\Microsoft\Graph\Model\RiskDetail")) {
                return $this->_propDict["riskDetail"];
            } else {
                $this->_propDict["riskDetail"] = new RiskDetail($this->_propDict["riskDetail"]);
                return $this->_propDict["riskDetail"];
            }
        }
        return null;
    }
    
    /**
    * Sets the riskDetail
    * The possible values are none, adminGeneratedTemporaryPassword, userPerformedSecuredPasswordChange, userPerformedSecuredPasswordReset, adminConfirmedSigninSafe, aiConfirmedSigninSafe, userPassedMFADrivenByRiskBasedPolicy, adminDismissedAllRiskForUser, adminConfirmedSigninCompromised, hidden, adminConfirmedUserCompromised, unknownFutureValue.
    *
    * @param RiskDetail $val The riskDetail
    *
    * @return RiskyUser
    */
    public function setRiskDetail($val)
    {
        $this->_propDict["riskDetail"] = $val;
        return $this;
    }
    
    /**
    * Gets the riskLastUpdatedDateTime
    * The date and time that the risky user was last updated.  The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: 2014-01-01T00:00:00Z
    *
    * @return \DateTime The riskLastUpdatedDateTime
    */
    public function getRiskLastUpdatedDateTime()
    {
        if (array_key_exists("riskLastUpdatedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["riskLastUpdatedDateTime"], "\DateTime")) {
                return $this->_propDict["riskLastUpdatedDateTime"];
            } else {
                $this->_propDict["riskLastUpdatedDateTime"] = new \DateTime($this->_propDict["riskLastUpdatedDateTime"]);
                return $this->_propDict["riskLastUpdatedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the riskLastUpdatedDateTime
    * The date and time that the risky user was last updated.  The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: 2014-01-01T00:00:00Z
    *
    * @param \DateTime $val The riskLastUpdatedDateTime
    *
    * @return RiskyUser
    */
    public function setRiskLastUpdatedDateTime($val)
    {
        $this->_propDict["riskLastUpdatedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the riskLevel
    * Level of the detected risky user. The possible values are low, medium, high, hidden, none, unknownFutureValue.
    *
    * @return RiskLevel The riskLevel
    */
    public function getRiskLevel()
    {
        if (array_key_exists("riskLevel", $this->_propDict)) {
            if (is_a($this->_propDict["riskLevel"], "\Beta\Microsoft\Graph\Model\RiskLevel")) {
                return $this->_propDict["riskLevel"];
            } else {
                $this->_propDict["riskLevel"] = new RiskLevel($this->_propDict["riskLevel"]);
                return $this->_propDict["riskLevel"];
            }
        }
        return null;
    }
    
    /**
    * Sets the riskLevel
    * Level of the detected risky user. The possible values are low, medium, high, hidden, none, unknownFutureValue.
    *
    * @param RiskLevel $val The riskLevel
    *
    * @return RiskyUser
    */
    public function setRiskLevel($val)
    {
        $this->_propDict["riskLevel"] = $val;
        return $this;
    }
    
    /**
    * Gets the riskState
    * State of the user's risk. Possible values are: none, confirmedSafe, remediated, dismissed, atRisk, confirmedCompromised, unknownFutureValue.
    *
    * @return RiskState The riskState
    */
    public function getRiskState()
    {
        if (array_key_exists("riskState", $this->_propDict)) {
            if (is_a($this->_propDict["riskState"], "\Beta\Microsoft\Graph\Model\RiskState")) {
                return $this->_propDict["riskState"];
            } else {
                $this->_propDict["riskState"] = new RiskState($this->_propDict["riskState"]);
                return $this->_propDict["riskState"];
            }
        }
        return null;
    }
    
    /**
    * Sets the riskState
    * State of the user's risk. Possible values are: none, confirmedSafe, remediated, dismissed, atRisk, confirmedCompromised, unknownFutureValue.
    *
    * @param RiskState $val The riskState
    *
    * @return RiskyUser
    */
    public function setRiskState($val)
    {
        $this->_propDict["riskState"] = $val;
        return $this;
    }
    
    /**
    * Gets the userDisplayName
    * Risky user display name.
    *
    * @return string The userDisplayName
    */
    public function getUserDisplayName()
    {
        if (array_key_exists("userDisplayName", $this->_propDict)) {
            return $this->_propDict["userDisplayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userDisplayName
    * Risky user display name.
    *
    * @param string $val The userDisplayName
    *
    * @return RiskyUser
    */
    public function setUserDisplayName($val)
    {
        $this->_propDict["userDisplayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the userPrincipalName
    * Risky user principal name.
    *
    * @return string The userPrincipalName
    */
    public function getUserPrincipalName()
    {
        if (array_key_exists("userPrincipalName", $this->_propDict)) {
            return $this->_propDict["userPrincipalName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userPrincipalName
    * Risky user principal name.
    *
    * @param string $val The userPrincipalName
    *
    * @return RiskyUser
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }
    

     /** 
     * Gets the history
    * The activity related to user risk level change
     *
     * @return array The history
     */
    public function getHistory()
    {
        if (array_key_exists("history", $this->_propDict)) {
           return $this->_propDict["history"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the history
    * The activity related to user risk level change
    *
    * @param RiskyUserHistoryItem $val The history
    *
    * @return RiskyUser
    */
    public function setHistory($val)
    {
		$this->_propDict["history"] = $val;
        return $this;
    }
    
}
