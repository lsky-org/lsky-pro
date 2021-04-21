<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessReviewScheduleSettings File
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
* AccessReviewScheduleSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessReviewScheduleSettings extends Entity
{

    /**
    * Gets the applyActions
    * Optional field. Describes the  actions to take once a review is complete. There are two types that are currently supported: removeAccessApplyAction (default) and disableAndDeleteUserApplyAction. Field only needs to be specified in the case of disableAndDeleteUserApplyAction. See accessReviewApplyAction.
    *
    * @return AccessReviewApplyAction The applyActions
    */
    public function getApplyActions()
    {
        if (array_key_exists("applyActions", $this->_propDict)) {
            if (is_a($this->_propDict["applyActions"], "\Beta\Microsoft\Graph\Model\AccessReviewApplyAction")) {
                return $this->_propDict["applyActions"];
            } else {
                $this->_propDict["applyActions"] = new AccessReviewApplyAction($this->_propDict["applyActions"]);
                return $this->_propDict["applyActions"];
            }
        }
        return null;
    }

    /**
    * Sets the applyActions
    * Optional field. Describes the  actions to take once a review is complete. There are two types that are currently supported: removeAccessApplyAction (default) and disableAndDeleteUserApplyAction. Field only needs to be specified in the case of disableAndDeleteUserApplyAction. See accessReviewApplyAction.
    *
    * @param AccessReviewApplyAction $val The value to assign to the applyActions
    *
    * @return AccessReviewScheduleSettings The AccessReviewScheduleSettings
    */
    public function setApplyActions($val)
    {
        $this->_propDict["applyActions"] = $val;
         return $this;
    }
    /**
    * Gets the autoApplyDecisionsEnabled
    * Flag to indicate whether auto-apply feature is enabled.
    *
    * @return bool The autoApplyDecisionsEnabled
    */
    public function getAutoApplyDecisionsEnabled()
    {
        if (array_key_exists("autoApplyDecisionsEnabled", $this->_propDict)) {
            return $this->_propDict["autoApplyDecisionsEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the autoApplyDecisionsEnabled
    * Flag to indicate whether auto-apply feature is enabled.
    *
    * @param bool $val The value of the autoApplyDecisionsEnabled
    *
    * @return AccessReviewScheduleSettings
    */
    public function setAutoApplyDecisionsEnabled($val)
    {
        $this->_propDict["autoApplyDecisionsEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the defaultDecision
    * Decision chosen if defaultDecisionEnabled is enabled. Can be one of 'Approve', 'Deny', or 'Recommendation'.
    *
    * @return string The defaultDecision
    */
    public function getDefaultDecision()
    {
        if (array_key_exists("defaultDecision", $this->_propDict)) {
            return $this->_propDict["defaultDecision"];
        } else {
            return null;
        }
    }

    /**
    * Sets the defaultDecision
    * Decision chosen if defaultDecisionEnabled is enabled. Can be one of 'Approve', 'Deny', or 'Recommendation'.
    *
    * @param string $val The value of the defaultDecision
    *
    * @return AccessReviewScheduleSettings
    */
    public function setDefaultDecision($val)
    {
        $this->_propDict["defaultDecision"] = $val;
        return $this;
    }
    /**
    * Gets the defaultDecisionEnabled
    * Flag to indicate whether default decision is enabled/disabled when reviewers do not respond.
    *
    * @return bool The defaultDecisionEnabled
    */
    public function getDefaultDecisionEnabled()
    {
        if (array_key_exists("defaultDecisionEnabled", $this->_propDict)) {
            return $this->_propDict["defaultDecisionEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the defaultDecisionEnabled
    * Flag to indicate whether default decision is enabled/disabled when reviewers do not respond.
    *
    * @param bool $val The value of the defaultDecisionEnabled
    *
    * @return AccessReviewScheduleSettings
    */
    public function setDefaultDecisionEnabled($val)
    {
        $this->_propDict["defaultDecisionEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the instanceDurationInDays
    * Duration of each recurrence of review (accessReviewInstance) in number of days.
    *
    * @return int The instanceDurationInDays
    */
    public function getInstanceDurationInDays()
    {
        if (array_key_exists("instanceDurationInDays", $this->_propDict)) {
            return $this->_propDict["instanceDurationInDays"];
        } else {
            return null;
        }
    }

    /**
    * Sets the instanceDurationInDays
    * Duration of each recurrence of review (accessReviewInstance) in number of days.
    *
    * @param int $val The value of the instanceDurationInDays
    *
    * @return AccessReviewScheduleSettings
    */
    public function setInstanceDurationInDays($val)
    {
        $this->_propDict["instanceDurationInDays"] = $val;
        return $this;
    }
    /**
    * Gets the justificationRequiredOnApproval
    * Flag to indicate whether reviewers are required to provide justification with their decision.
    *
    * @return bool The justificationRequiredOnApproval
    */
    public function getJustificationRequiredOnApproval()
    {
        if (array_key_exists("justificationRequiredOnApproval", $this->_propDict)) {
            return $this->_propDict["justificationRequiredOnApproval"];
        } else {
            return null;
        }
    }

    /**
    * Sets the justificationRequiredOnApproval
    * Flag to indicate whether reviewers are required to provide justification with their decision.
    *
    * @param bool $val The value of the justificationRequiredOnApproval
    *
    * @return AccessReviewScheduleSettings
    */
    public function setJustificationRequiredOnApproval($val)
    {
        $this->_propDict["justificationRequiredOnApproval"] = $val;
        return $this;
    }
    /**
    * Gets the mailNotificationsEnabled
    * Flag to indicate whether emails are enabled/disabled.
    *
    * @return bool The mailNotificationsEnabled
    */
    public function getMailNotificationsEnabled()
    {
        if (array_key_exists("mailNotificationsEnabled", $this->_propDict)) {
            return $this->_propDict["mailNotificationsEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the mailNotificationsEnabled
    * Flag to indicate whether emails are enabled/disabled.
    *
    * @param bool $val The value of the mailNotificationsEnabled
    *
    * @return AccessReviewScheduleSettings
    */
    public function setMailNotificationsEnabled($val)
    {
        $this->_propDict["mailNotificationsEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the recommendationsEnabled
    * Flag to indicate whether decision recommendations are enabled/disabled.
    *
    * @return bool The recommendationsEnabled
    */
    public function getRecommendationsEnabled()
    {
        if (array_key_exists("recommendationsEnabled", $this->_propDict)) {
            return $this->_propDict["recommendationsEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the recommendationsEnabled
    * Flag to indicate whether decision recommendations are enabled/disabled.
    *
    * @param bool $val The value of the recommendationsEnabled
    *
    * @return AccessReviewScheduleSettings
    */
    public function setRecommendationsEnabled($val)
    {
        $this->_propDict["recommendationsEnabled"] = $val;
        return $this;
    }

    /**
    * Gets the recurrence
    * Detailed settings for recurrence. Using standard Outlook recurrence object. Note that dayOfMonth is not supported - use property startDate on recurrenceRange to determine the day the review will start on.
    *
    * @return PatternedRecurrence The recurrence
    */
    public function getRecurrence()
    {
        if (array_key_exists("recurrence", $this->_propDict)) {
            if (is_a($this->_propDict["recurrence"], "\Beta\Microsoft\Graph\Model\PatternedRecurrence")) {
                return $this->_propDict["recurrence"];
            } else {
                $this->_propDict["recurrence"] = new PatternedRecurrence($this->_propDict["recurrence"]);
                return $this->_propDict["recurrence"];
            }
        }
        return null;
    }

    /**
    * Sets the recurrence
    * Detailed settings for recurrence. Using standard Outlook recurrence object. Note that dayOfMonth is not supported - use property startDate on recurrenceRange to determine the day the review will start on.
    *
    * @param PatternedRecurrence $val The value to assign to the recurrence
    *
    * @return AccessReviewScheduleSettings The AccessReviewScheduleSettings
    */
    public function setRecurrence($val)
    {
        $this->_propDict["recurrence"] = $val;
         return $this;
    }
    /**
    * Gets the reminderNotificationsEnabled
    * Flag to indicate whether reminders are enabled/disabled.
    *
    * @return bool The reminderNotificationsEnabled
    */
    public function getReminderNotificationsEnabled()
    {
        if (array_key_exists("reminderNotificationsEnabled", $this->_propDict)) {
            return $this->_propDict["reminderNotificationsEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the reminderNotificationsEnabled
    * Flag to indicate whether reminders are enabled/disabled.
    *
    * @param bool $val The value of the reminderNotificationsEnabled
    *
    * @return AccessReviewScheduleSettings
    */
    public function setReminderNotificationsEnabled($val)
    {
        $this->_propDict["reminderNotificationsEnabled"] = $val;
        return $this;
    }
}
