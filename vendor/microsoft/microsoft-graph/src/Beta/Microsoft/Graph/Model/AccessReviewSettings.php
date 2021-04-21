<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessReviewSettings File
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
* AccessReviewSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessReviewSettings extends Entity
{
    /**
    * Gets the accessRecommendationsEnabled
    * Indicates whether showing recommendations to reviewers is enabled.
    *
    * @return bool The accessRecommendationsEnabled
    */
    public function getAccessRecommendationsEnabled()
    {
        if (array_key_exists("accessRecommendationsEnabled", $this->_propDict)) {
            return $this->_propDict["accessRecommendationsEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the accessRecommendationsEnabled
    * Indicates whether showing recommendations to reviewers is enabled.
    *
    * @param bool $val The value of the accessRecommendationsEnabled
    *
    * @return AccessReviewSettings
    */
    public function setAccessRecommendationsEnabled($val)
    {
        $this->_propDict["accessRecommendationsEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the activityDurationInDays
    * The number of days of user activities to show to reviewers.
    *
    * @return int The activityDurationInDays
    */
    public function getActivityDurationInDays()
    {
        if (array_key_exists("activityDurationInDays", $this->_propDict)) {
            return $this->_propDict["activityDurationInDays"];
        } else {
            return null;
        }
    }

    /**
    * Sets the activityDurationInDays
    * The number of days of user activities to show to reviewers.
    *
    * @param int $val The value of the activityDurationInDays
    *
    * @return AccessReviewSettings
    */
    public function setActivityDurationInDays($val)
    {
        $this->_propDict["activityDurationInDays"] = $val;
        return $this;
    }
    /**
    * Gets the autoApplyReviewResultsEnabled
    * Indicates whether the auto-apply capability, to automatically change the target object access resource, is enabled.  If not enabled, a user must, after the review completes, apply the access review.
    *
    * @return bool The autoApplyReviewResultsEnabled
    */
    public function getAutoApplyReviewResultsEnabled()
    {
        if (array_key_exists("autoApplyReviewResultsEnabled", $this->_propDict)) {
            return $this->_propDict["autoApplyReviewResultsEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the autoApplyReviewResultsEnabled
    * Indicates whether the auto-apply capability, to automatically change the target object access resource, is enabled.  If not enabled, a user must, after the review completes, apply the access review.
    *
    * @param bool $val The value of the autoApplyReviewResultsEnabled
    *
    * @return AccessReviewSettings
    */
    public function setAutoApplyReviewResultsEnabled($val)
    {
        $this->_propDict["autoApplyReviewResultsEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the autoReviewEnabled
    * Indicates whether a decision should be set if the reviewer did not supply one. For use when auto-apply is enabled. If you don't want to have a review decision recorded unless the reviewer makes an explicit choice, set it to false.
    *
    * @return bool The autoReviewEnabled
    */
    public function getAutoReviewEnabled()
    {
        if (array_key_exists("autoReviewEnabled", $this->_propDict)) {
            return $this->_propDict["autoReviewEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the autoReviewEnabled
    * Indicates whether a decision should be set if the reviewer did not supply one. For use when auto-apply is enabled. If you don't want to have a review decision recorded unless the reviewer makes an explicit choice, set it to false.
    *
    * @param bool $val The value of the autoReviewEnabled
    *
    * @return AccessReviewSettings
    */
    public function setAutoReviewEnabled($val)
    {
        $this->_propDict["autoReviewEnabled"] = $val;
        return $this;
    }

    /**
    * Gets the autoReviewSettings
    * Detailed settings for how the feature should set the review decision. For use when auto-apply is enabled.
    *
    * @return AutoReviewSettings The autoReviewSettings
    */
    public function getAutoReviewSettings()
    {
        if (array_key_exists("autoReviewSettings", $this->_propDict)) {
            if (is_a($this->_propDict["autoReviewSettings"], "\Beta\Microsoft\Graph\Model\AutoReviewSettings")) {
                return $this->_propDict["autoReviewSettings"];
            } else {
                $this->_propDict["autoReviewSettings"] = new AutoReviewSettings($this->_propDict["autoReviewSettings"]);
                return $this->_propDict["autoReviewSettings"];
            }
        }
        return null;
    }

    /**
    * Sets the autoReviewSettings
    * Detailed settings for how the feature should set the review decision. For use when auto-apply is enabled.
    *
    * @param AutoReviewSettings $val The value to assign to the autoReviewSettings
    *
    * @return AccessReviewSettings The AccessReviewSettings
    */
    public function setAutoReviewSettings($val)
    {
        $this->_propDict["autoReviewSettings"] = $val;
         return $this;
    }
    /**
    * Gets the justificationRequiredOnApproval
    * Indicates whether reviewers are required to provide a justification when reviewing access.
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
    * Indicates whether reviewers are required to provide a justification when reviewing access.
    *
    * @param bool $val The value of the justificationRequiredOnApproval
    *
    * @return AccessReviewSettings
    */
    public function setJustificationRequiredOnApproval($val)
    {
        $this->_propDict["justificationRequiredOnApproval"] = $val;
        return $this;
    }
    /**
    * Gets the mailNotificationsEnabled
    * Indicates whether sending mails to reviewers and the review creator is enabled.
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
    * Indicates whether sending mails to reviewers and the review creator is enabled.
    *
    * @param bool $val The value of the mailNotificationsEnabled
    *
    * @return AccessReviewSettings
    */
    public function setMailNotificationsEnabled($val)
    {
        $this->_propDict["mailNotificationsEnabled"] = $val;
        return $this;
    }

    /**
    * Gets the recurrenceSettings
    * Detailed settings for recurrence.
    *
    * @return AccessReviewRecurrenceSettings The recurrenceSettings
    */
    public function getRecurrenceSettings()
    {
        if (array_key_exists("recurrenceSettings", $this->_propDict)) {
            if (is_a($this->_propDict["recurrenceSettings"], "\Beta\Microsoft\Graph\Model\AccessReviewRecurrenceSettings")) {
                return $this->_propDict["recurrenceSettings"];
            } else {
                $this->_propDict["recurrenceSettings"] = new AccessReviewRecurrenceSettings($this->_propDict["recurrenceSettings"]);
                return $this->_propDict["recurrenceSettings"];
            }
        }
        return null;
    }

    /**
    * Sets the recurrenceSettings
    * Detailed settings for recurrence.
    *
    * @param AccessReviewRecurrenceSettings $val The value to assign to the recurrenceSettings
    *
    * @return AccessReviewSettings The AccessReviewSettings
    */
    public function setRecurrenceSettings($val)
    {
        $this->_propDict["recurrenceSettings"] = $val;
         return $this;
    }
    /**
    * Gets the remindersEnabled
    * Indicates whether sending reminder emails to reviewers is enabled.
    *
    * @return bool The remindersEnabled
    */
    public function getRemindersEnabled()
    {
        if (array_key_exists("remindersEnabled", $this->_propDict)) {
            return $this->_propDict["remindersEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the remindersEnabled
    * Indicates whether sending reminder emails to reviewers is enabled.
    *
    * @param bool $val The value of the remindersEnabled
    *
    * @return AccessReviewSettings
    */
    public function setRemindersEnabled($val)
    {
        $this->_propDict["remindersEnabled"] = $val;
        return $this;
    }
}
