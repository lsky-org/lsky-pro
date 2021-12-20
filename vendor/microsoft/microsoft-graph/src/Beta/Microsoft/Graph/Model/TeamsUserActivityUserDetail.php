<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamsUserActivityUserDetail File
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
* TeamsUserActivityUserDetail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TeamsUserActivityUserDetail extends Entity
{
    /**
    * Gets the adHocMeetingsAttendedCount
    *
    * @return int The adHocMeetingsAttendedCount
    */
    public function getAdHocMeetingsAttendedCount()
    {
        if (array_key_exists("adHocMeetingsAttendedCount", $this->_propDict)) {
            return $this->_propDict["adHocMeetingsAttendedCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the adHocMeetingsAttendedCount
    *
    * @param int $val The adHocMeetingsAttendedCount
    *
    * @return TeamsUserActivityUserDetail
    */
    public function setAdHocMeetingsAttendedCount($val)
    {
        $this->_propDict["adHocMeetingsAttendedCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the adHocMeetingsOrganizedCount
    *
    * @return int The adHocMeetingsOrganizedCount
    */
    public function getAdHocMeetingsOrganizedCount()
    {
        if (array_key_exists("adHocMeetingsOrganizedCount", $this->_propDict)) {
            return $this->_propDict["adHocMeetingsOrganizedCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the adHocMeetingsOrganizedCount
    *
    * @param int $val The adHocMeetingsOrganizedCount
    *
    * @return TeamsUserActivityUserDetail
    */
    public function setAdHocMeetingsOrganizedCount($val)
    {
        $this->_propDict["adHocMeetingsOrganizedCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the assignedProducts
    *
    * @return string The assignedProducts
    */
    public function getAssignedProducts()
    {
        if (array_key_exists("assignedProducts", $this->_propDict)) {
            return $this->_propDict["assignedProducts"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the assignedProducts
    *
    * @param string $val The assignedProducts
    *
    * @return TeamsUserActivityUserDetail
    */
    public function setAssignedProducts($val)
    {
        $this->_propDict["assignedProducts"] = $val;
        return $this;
    }
    
    /**
    * Gets the audioDuration
    *
    * @return Duration The audioDuration
    */
    public function getAudioDuration()
    {
        if (array_key_exists("audioDuration", $this->_propDict)) {
            if (is_a($this->_propDict["audioDuration"], "\Beta\Microsoft\Graph\Model\Duration")) {
                return $this->_propDict["audioDuration"];
            } else {
                $this->_propDict["audioDuration"] = new Duration($this->_propDict["audioDuration"]);
                return $this->_propDict["audioDuration"];
            }
        }
        return null;
    }
    
    /**
    * Sets the audioDuration
    *
    * @param Duration $val The audioDuration
    *
    * @return TeamsUserActivityUserDetail
    */
    public function setAudioDuration($val)
    {
        $this->_propDict["audioDuration"] = $val;
        return $this;
    }
    
    /**
    * Gets the callCount
    *
    * @return int The callCount
    */
    public function getCallCount()
    {
        if (array_key_exists("callCount", $this->_propDict)) {
            return $this->_propDict["callCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the callCount
    *
    * @param int $val The callCount
    *
    * @return TeamsUserActivityUserDetail
    */
    public function setCallCount($val)
    {
        $this->_propDict["callCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the deletedDate
    *
    * @return \DateTime The deletedDate
    */
    public function getDeletedDate()
    {
        if (array_key_exists("deletedDate", $this->_propDict)) {
            if (is_a($this->_propDict["deletedDate"], "\DateTime")) {
                return $this->_propDict["deletedDate"];
            } else {
                $this->_propDict["deletedDate"] = new \DateTime($this->_propDict["deletedDate"]);
                return $this->_propDict["deletedDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the deletedDate
    *
    * @param \DateTime $val The deletedDate
    *
    * @return TeamsUserActivityUserDetail
    */
    public function setDeletedDate($val)
    {
        $this->_propDict["deletedDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the hasOtherAction
    *
    * @return bool The hasOtherAction
    */
    public function getHasOtherAction()
    {
        if (array_key_exists("hasOtherAction", $this->_propDict)) {
            return $this->_propDict["hasOtherAction"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the hasOtherAction
    *
    * @param bool $val The hasOtherAction
    *
    * @return TeamsUserActivityUserDetail
    */
    public function setHasOtherAction($val)
    {
        $this->_propDict["hasOtherAction"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the isDeleted
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
    *
    * @param bool $val The isDeleted
    *
    * @return TeamsUserActivityUserDetail
    */
    public function setIsDeleted($val)
    {
        $this->_propDict["isDeleted"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the isLicensed
    *
    * @return bool The isLicensed
    */
    public function getIsLicensed()
    {
        if (array_key_exists("isLicensed", $this->_propDict)) {
            return $this->_propDict["isLicensed"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isLicensed
    *
    * @param bool $val The isLicensed
    *
    * @return TeamsUserActivityUserDetail
    */
    public function setIsLicensed($val)
    {
        $this->_propDict["isLicensed"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the lastActivityDate
    *
    * @return \DateTime The lastActivityDate
    */
    public function getLastActivityDate()
    {
        if (array_key_exists("lastActivityDate", $this->_propDict)) {
            if (is_a($this->_propDict["lastActivityDate"], "\DateTime")) {
                return $this->_propDict["lastActivityDate"];
            } else {
                $this->_propDict["lastActivityDate"] = new \DateTime($this->_propDict["lastActivityDate"]);
                return $this->_propDict["lastActivityDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastActivityDate
    *
    * @param \DateTime $val The lastActivityDate
    *
    * @return TeamsUserActivityUserDetail
    */
    public function setLastActivityDate($val)
    {
        $this->_propDict["lastActivityDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the meetingCount
    *
    * @return int The meetingCount
    */
    public function getMeetingCount()
    {
        if (array_key_exists("meetingCount", $this->_propDict)) {
            return $this->_propDict["meetingCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the meetingCount
    *
    * @param int $val The meetingCount
    *
    * @return TeamsUserActivityUserDetail
    */
    public function setMeetingCount($val)
    {
        $this->_propDict["meetingCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the meetingsAttendedCount
    *
    * @return int The meetingsAttendedCount
    */
    public function getMeetingsAttendedCount()
    {
        if (array_key_exists("meetingsAttendedCount", $this->_propDict)) {
            return $this->_propDict["meetingsAttendedCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the meetingsAttendedCount
    *
    * @param int $val The meetingsAttendedCount
    *
    * @return TeamsUserActivityUserDetail
    */
    public function setMeetingsAttendedCount($val)
    {
        $this->_propDict["meetingsAttendedCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the meetingsOrganizedCount
    *
    * @return int The meetingsOrganizedCount
    */
    public function getMeetingsOrganizedCount()
    {
        if (array_key_exists("meetingsOrganizedCount", $this->_propDict)) {
            return $this->_propDict["meetingsOrganizedCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the meetingsOrganizedCount
    *
    * @param int $val The meetingsOrganizedCount
    *
    * @return TeamsUserActivityUserDetail
    */
    public function setMeetingsOrganizedCount($val)
    {
        $this->_propDict["meetingsOrganizedCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the privateChatMessageCount
    *
    * @return int The privateChatMessageCount
    */
    public function getPrivateChatMessageCount()
    {
        if (array_key_exists("privateChatMessageCount", $this->_propDict)) {
            return $this->_propDict["privateChatMessageCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the privateChatMessageCount
    *
    * @param int $val The privateChatMessageCount
    *
    * @return TeamsUserActivityUserDetail
    */
    public function setPrivateChatMessageCount($val)
    {
        $this->_propDict["privateChatMessageCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the reportPeriod
    *
    * @return string The reportPeriod
    */
    public function getReportPeriod()
    {
        if (array_key_exists("reportPeriod", $this->_propDict)) {
            return $this->_propDict["reportPeriod"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the reportPeriod
    *
    * @param string $val The reportPeriod
    *
    * @return TeamsUserActivityUserDetail
    */
    public function setReportPeriod($val)
    {
        $this->_propDict["reportPeriod"] = $val;
        return $this;
    }
    
    /**
    * Gets the reportRefreshDate
    *
    * @return \DateTime The reportRefreshDate
    */
    public function getReportRefreshDate()
    {
        if (array_key_exists("reportRefreshDate", $this->_propDict)) {
            if (is_a($this->_propDict["reportRefreshDate"], "\DateTime")) {
                return $this->_propDict["reportRefreshDate"];
            } else {
                $this->_propDict["reportRefreshDate"] = new \DateTime($this->_propDict["reportRefreshDate"]);
                return $this->_propDict["reportRefreshDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the reportRefreshDate
    *
    * @param \DateTime $val The reportRefreshDate
    *
    * @return TeamsUserActivityUserDetail
    */
    public function setReportRefreshDate($val)
    {
        $this->_propDict["reportRefreshDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the scheduledOneTimeMeetingsAttendedCount
    *
    * @return int The scheduledOneTimeMeetingsAttendedCount
    */
    public function getScheduledOneTimeMeetingsAttendedCount()
    {
        if (array_key_exists("scheduledOneTimeMeetingsAttendedCount", $this->_propDict)) {
            return $this->_propDict["scheduledOneTimeMeetingsAttendedCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the scheduledOneTimeMeetingsAttendedCount
    *
    * @param int $val The scheduledOneTimeMeetingsAttendedCount
    *
    * @return TeamsUserActivityUserDetail
    */
    public function setScheduledOneTimeMeetingsAttendedCount($val)
    {
        $this->_propDict["scheduledOneTimeMeetingsAttendedCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the scheduledOneTimeMeetingsOrganizedCount
    *
    * @return int The scheduledOneTimeMeetingsOrganizedCount
    */
    public function getScheduledOneTimeMeetingsOrganizedCount()
    {
        if (array_key_exists("scheduledOneTimeMeetingsOrganizedCount", $this->_propDict)) {
            return $this->_propDict["scheduledOneTimeMeetingsOrganizedCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the scheduledOneTimeMeetingsOrganizedCount
    *
    * @param int $val The scheduledOneTimeMeetingsOrganizedCount
    *
    * @return TeamsUserActivityUserDetail
    */
    public function setScheduledOneTimeMeetingsOrganizedCount($val)
    {
        $this->_propDict["scheduledOneTimeMeetingsOrganizedCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the scheduledRecurringMeetingsAttendedCount
    *
    * @return int The scheduledRecurringMeetingsAttendedCount
    */
    public function getScheduledRecurringMeetingsAttendedCount()
    {
        if (array_key_exists("scheduledRecurringMeetingsAttendedCount", $this->_propDict)) {
            return $this->_propDict["scheduledRecurringMeetingsAttendedCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the scheduledRecurringMeetingsAttendedCount
    *
    * @param int $val The scheduledRecurringMeetingsAttendedCount
    *
    * @return TeamsUserActivityUserDetail
    */
    public function setScheduledRecurringMeetingsAttendedCount($val)
    {
        $this->_propDict["scheduledRecurringMeetingsAttendedCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the scheduledRecurringMeetingsOrganizedCount
    *
    * @return int The scheduledRecurringMeetingsOrganizedCount
    */
    public function getScheduledRecurringMeetingsOrganizedCount()
    {
        if (array_key_exists("scheduledRecurringMeetingsOrganizedCount", $this->_propDict)) {
            return $this->_propDict["scheduledRecurringMeetingsOrganizedCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the scheduledRecurringMeetingsOrganizedCount
    *
    * @param int $val The scheduledRecurringMeetingsOrganizedCount
    *
    * @return TeamsUserActivityUserDetail
    */
    public function setScheduledRecurringMeetingsOrganizedCount($val)
    {
        $this->_propDict["scheduledRecurringMeetingsOrganizedCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the screenShareDuration
    *
    * @return Duration The screenShareDuration
    */
    public function getScreenShareDuration()
    {
        if (array_key_exists("screenShareDuration", $this->_propDict)) {
            if (is_a($this->_propDict["screenShareDuration"], "\Beta\Microsoft\Graph\Model\Duration")) {
                return $this->_propDict["screenShareDuration"];
            } else {
                $this->_propDict["screenShareDuration"] = new Duration($this->_propDict["screenShareDuration"]);
                return $this->_propDict["screenShareDuration"];
            }
        }
        return null;
    }
    
    /**
    * Sets the screenShareDuration
    *
    * @param Duration $val The screenShareDuration
    *
    * @return TeamsUserActivityUserDetail
    */
    public function setScreenShareDuration($val)
    {
        $this->_propDict["screenShareDuration"] = $val;
        return $this;
    }
    
    /**
    * Gets the teamChatMessageCount
    *
    * @return int The teamChatMessageCount
    */
    public function getTeamChatMessageCount()
    {
        if (array_key_exists("teamChatMessageCount", $this->_propDict)) {
            return $this->_propDict["teamChatMessageCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the teamChatMessageCount
    *
    * @param int $val The teamChatMessageCount
    *
    * @return TeamsUserActivityUserDetail
    */
    public function setTeamChatMessageCount($val)
    {
        $this->_propDict["teamChatMessageCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the userPrincipalName
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
    *
    * @param string $val The userPrincipalName
    *
    * @return TeamsUserActivityUserDetail
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }
    
    /**
    * Gets the videoDuration
    *
    * @return Duration The videoDuration
    */
    public function getVideoDuration()
    {
        if (array_key_exists("videoDuration", $this->_propDict)) {
            if (is_a($this->_propDict["videoDuration"], "\Beta\Microsoft\Graph\Model\Duration")) {
                return $this->_propDict["videoDuration"];
            } else {
                $this->_propDict["videoDuration"] = new Duration($this->_propDict["videoDuration"]);
                return $this->_propDict["videoDuration"];
            }
        }
        return null;
    }
    
    /**
    * Sets the videoDuration
    *
    * @param Duration $val The videoDuration
    *
    * @return TeamsUserActivityUserDetail
    */
    public function setVideoDuration($val)
    {
        $this->_propDict["videoDuration"] = $val;
        return $this;
    }
    
}
