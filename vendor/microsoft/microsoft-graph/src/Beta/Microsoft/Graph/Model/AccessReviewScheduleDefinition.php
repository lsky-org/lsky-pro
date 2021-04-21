<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessReviewScheduleDefinition File
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
* AccessReviewScheduleDefinition class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessReviewScheduleDefinition extends Entity
{

     /** 
     * Gets the backupReviewers
    * This collection of reviewer scopes is used to define the list of fallback reviewers. These fallback reviewers will be notified to take action if no users are found from the list of reviewers specified. This could occur when either the group owner is specified as the reviewer but the group owner does not exist, or manager is specified as reviewer but a user's manager does not exist. See accessReviewReviewerScope.
     *
     * @return array The backupReviewers
     */
    public function getBackupReviewers()
    {
        if (array_key_exists("backupReviewers", $this->_propDict)) {
           return $this->_propDict["backupReviewers"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the backupReviewers
    * This collection of reviewer scopes is used to define the list of fallback reviewers. These fallback reviewers will be notified to take action if no users are found from the list of reviewers specified. This could occur when either the group owner is specified as the reviewer but the group owner does not exist, or manager is specified as reviewer but a user's manager does not exist. See accessReviewReviewerScope.
    *
    * @param AccessReviewReviewerScope $val The backupReviewers
    *
    * @return AccessReviewScheduleDefinition
    */
    public function setBackupReviewers($val)
    {
		$this->_propDict["backupReviewers"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdBy
    * User who created this review.
    *
    * @return UserIdentity The createdBy
    */
    public function getCreatedBy()
    {
        if (array_key_exists("createdBy", $this->_propDict)) {
            if (is_a($this->_propDict["createdBy"], "\Beta\Microsoft\Graph\Model\UserIdentity")) {
                return $this->_propDict["createdBy"];
            } else {
                $this->_propDict["createdBy"] = new UserIdentity($this->_propDict["createdBy"]);
                return $this->_propDict["createdBy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the createdBy
    * User who created this review.
    *
    * @param UserIdentity $val The createdBy
    *
    * @return AccessReviewScheduleDefinition
    */
    public function setCreatedBy($val)
    {
        $this->_propDict["createdBy"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdDateTime
    * Timestamp when review series was created.
    *
    * @return \DateTime The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime")) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the createdDateTime
    * Timestamp when review series was created.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return AccessReviewScheduleDefinition
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the descriptionForAdmins
    * Description provided by review creators to provide more context of the review to admins.
    *
    * @return string The descriptionForAdmins
    */
    public function getDescriptionForAdmins()
    {
        if (array_key_exists("descriptionForAdmins", $this->_propDict)) {
            return $this->_propDict["descriptionForAdmins"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the descriptionForAdmins
    * Description provided by review creators to provide more context of the review to admins.
    *
    * @param string $val The descriptionForAdmins
    *
    * @return AccessReviewScheduleDefinition
    */
    public function setDescriptionForAdmins($val)
    {
        $this->_propDict["descriptionForAdmins"] = $val;
        return $this;
    }
    
    /**
    * Gets the descriptionForReviewers
    * Description provided  by review creators to provide more context of the review to reviewers. Reviewers will see this description in the email sent to them requesting their review.
    *
    * @return string The descriptionForReviewers
    */
    public function getDescriptionForReviewers()
    {
        if (array_key_exists("descriptionForReviewers", $this->_propDict)) {
            return $this->_propDict["descriptionForReviewers"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the descriptionForReviewers
    * Description provided  by review creators to provide more context of the review to reviewers. Reviewers will see this description in the email sent to them requesting their review.
    *
    * @param string $val The descriptionForReviewers
    *
    * @return AccessReviewScheduleDefinition
    */
    public function setDescriptionForReviewers($val)
    {
        $this->_propDict["descriptionForReviewers"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * Name of access review series. Required on create.
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
    * Name of access review series. Required on create.
    *
    * @param string $val The displayName
    *
    * @return AccessReviewScheduleDefinition
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the instanceEnumerationScope
    * In the case of a review of guest users across all Microsoft 365 groups, this determines the scope of which groups will be reviewed. Each group will become a unique accessReviewInstance of the access review series.  For supported scopes, see accessReviewScope.
    *
    * @return AccessReviewScope The instanceEnumerationScope
    */
    public function getInstanceEnumerationScope()
    {
        if (array_key_exists("instanceEnumerationScope", $this->_propDict)) {
            if (is_a($this->_propDict["instanceEnumerationScope"], "\Beta\Microsoft\Graph\Model\AccessReviewScope")) {
                return $this->_propDict["instanceEnumerationScope"];
            } else {
                $this->_propDict["instanceEnumerationScope"] = new AccessReviewScope($this->_propDict["instanceEnumerationScope"]);
                return $this->_propDict["instanceEnumerationScope"];
            }
        }
        return null;
    }
    
    /**
    * Sets the instanceEnumerationScope
    * In the case of a review of guest users across all Microsoft 365 groups, this determines the scope of which groups will be reviewed. Each group will become a unique accessReviewInstance of the access review series.  For supported scopes, see accessReviewScope.
    *
    * @param AccessReviewScope $val The instanceEnumerationScope
    *
    * @return AccessReviewScheduleDefinition
    */
    public function setInstanceEnumerationScope($val)
    {
        $this->_propDict["instanceEnumerationScope"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastModifiedDateTime
    * Timestamp when review series was last modified.
    *
    * @return \DateTime The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedDateTime"], "\DateTime")) {
                return $this->_propDict["lastModifiedDateTime"];
            } else {
                $this->_propDict["lastModifiedDateTime"] = new \DateTime($this->_propDict["lastModifiedDateTime"]);
                return $this->_propDict["lastModifiedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastModifiedDateTime
    * Timestamp when review series was last modified.
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return AccessReviewScheduleDefinition
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    

     /** 
     * Gets the reviewers
    * This collection of access review scopes is used to define who are the reviewers. See accessReviewReviewerScope. Required on create.
     *
     * @return array The reviewers
     */
    public function getReviewers()
    {
        if (array_key_exists("reviewers", $this->_propDict)) {
           return $this->_propDict["reviewers"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the reviewers
    * This collection of access review scopes is used to define who are the reviewers. See accessReviewReviewerScope. Required on create.
    *
    * @param AccessReviewReviewerScope $val The reviewers
    *
    * @return AccessReviewScheduleDefinition
    */
    public function setReviewers($val)
    {
		$this->_propDict["reviewers"] = $val;
        return $this;
    }
    
    /**
    * Gets the scope
    * Defines scope of users reviewed. For supported scopes, see accessReviewScope. Required on create.
    *
    * @return AccessReviewScope The scope
    */
    public function getScope()
    {
        if (array_key_exists("scope", $this->_propDict)) {
            if (is_a($this->_propDict["scope"], "\Beta\Microsoft\Graph\Model\AccessReviewScope")) {
                return $this->_propDict["scope"];
            } else {
                $this->_propDict["scope"] = new AccessReviewScope($this->_propDict["scope"]);
                return $this->_propDict["scope"];
            }
        }
        return null;
    }
    
    /**
    * Sets the scope
    * Defines scope of users reviewed. For supported scopes, see accessReviewScope. Required on create.
    *
    * @param AccessReviewScope $val The scope
    *
    * @return AccessReviewScheduleDefinition
    */
    public function setScope($val)
    {
        $this->_propDict["scope"] = $val;
        return $this;
    }
    
    /**
    * Gets the settings
    * The settings for an access review series, see type definition below.
    *
    * @return AccessReviewScheduleSettings The settings
    */
    public function getSettings()
    {
        if (array_key_exists("settings", $this->_propDict)) {
            if (is_a($this->_propDict["settings"], "\Beta\Microsoft\Graph\Model\AccessReviewScheduleSettings")) {
                return $this->_propDict["settings"];
            } else {
                $this->_propDict["settings"] = new AccessReviewScheduleSettings($this->_propDict["settings"]);
                return $this->_propDict["settings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the settings
    * The settings for an access review series, see type definition below.
    *
    * @param AccessReviewScheduleSettings $val The settings
    *
    * @return AccessReviewScheduleDefinition
    */
    public function setSettings($val)
    {
        $this->_propDict["settings"] = $val;
        return $this;
    }
    
    /**
    * Gets the status
    * This read-only field specifies the status of an accessReview. The typical states include Initializing, NotStarted, Starting, InProgress, Completing, Completed, AutoReviewing, and AutoReviewed.
    *
    * @return string The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            return $this->_propDict["status"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the status
    * This read-only field specifies the status of an accessReview. The typical states include Initializing, NotStarted, Starting, InProgress, Completing, Completed, AutoReviewing, and AutoReviewed.
    *
    * @param string $val The status
    *
    * @return AccessReviewScheduleDefinition
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }
    

     /** 
     * Gets the instances
    * Set of access reviews instances for this access review series. Access reviews that do not recur will only have one instance; otherwise, there will be an instance for each recurrence.
     *
     * @return array The instances
     */
    public function getInstances()
    {
        if (array_key_exists("instances", $this->_propDict)) {
           return $this->_propDict["instances"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the instances
    * Set of access reviews instances for this access review series. Access reviews that do not recur will only have one instance; otherwise, there will be an instance for each recurrence.
    *
    * @param AccessReviewInstance $val The instances
    *
    * @return AccessReviewScheduleDefinition
    */
    public function setInstances($val)
    {
		$this->_propDict["instances"] = $val;
        return $this;
    }
    
}
