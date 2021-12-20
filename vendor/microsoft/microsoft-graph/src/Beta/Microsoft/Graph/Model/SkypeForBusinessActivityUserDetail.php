<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SkypeForBusinessActivityUserDetail File
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
* SkypeForBusinessActivityUserDetail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SkypeForBusinessActivityUserDetail extends Entity
{
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
    * @return SkypeForBusinessActivityUserDetail
    */
    public function setAssignedProducts($val)
    {
        $this->_propDict["assignedProducts"] = $val;
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
    * @return SkypeForBusinessActivityUserDetail
    */
    public function setDeletedDate($val)
    {
        $this->_propDict["deletedDate"] = $val;
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
    * @return SkypeForBusinessActivityUserDetail
    */
    public function setIsDeleted($val)
    {
        $this->_propDict["isDeleted"] = boolval($val);
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
    * @return SkypeForBusinessActivityUserDetail
    */
    public function setLastActivityDate($val)
    {
        $this->_propDict["lastActivityDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the organizedConferenceAppSharingCount
    *
    * @return int The organizedConferenceAppSharingCount
    */
    public function getOrganizedConferenceAppSharingCount()
    {
        if (array_key_exists("organizedConferenceAppSharingCount", $this->_propDict)) {
            return $this->_propDict["organizedConferenceAppSharingCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the organizedConferenceAppSharingCount
    *
    * @param int $val The organizedConferenceAppSharingCount
    *
    * @return SkypeForBusinessActivityUserDetail
    */
    public function setOrganizedConferenceAppSharingCount($val)
    {
        $this->_propDict["organizedConferenceAppSharingCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the organizedConferenceAudioVideoCount
    *
    * @return int The organizedConferenceAudioVideoCount
    */
    public function getOrganizedConferenceAudioVideoCount()
    {
        if (array_key_exists("organizedConferenceAudioVideoCount", $this->_propDict)) {
            return $this->_propDict["organizedConferenceAudioVideoCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the organizedConferenceAudioVideoCount
    *
    * @param int $val The organizedConferenceAudioVideoCount
    *
    * @return SkypeForBusinessActivityUserDetail
    */
    public function setOrganizedConferenceAudioVideoCount($val)
    {
        $this->_propDict["organizedConferenceAudioVideoCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the organizedConferenceAudioVideoMinutes
    *
    * @return int The organizedConferenceAudioVideoMinutes
    */
    public function getOrganizedConferenceAudioVideoMinutes()
    {
        if (array_key_exists("organizedConferenceAudioVideoMinutes", $this->_propDict)) {
            return $this->_propDict["organizedConferenceAudioVideoMinutes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the organizedConferenceAudioVideoMinutes
    *
    * @param int $val The organizedConferenceAudioVideoMinutes
    *
    * @return SkypeForBusinessActivityUserDetail
    */
    public function setOrganizedConferenceAudioVideoMinutes($val)
    {
        $this->_propDict["organizedConferenceAudioVideoMinutes"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the organizedConferenceCloudDialInMicrosoftMinutes
    *
    * @return int The organizedConferenceCloudDialInMicrosoftMinutes
    */
    public function getOrganizedConferenceCloudDialInMicrosoftMinutes()
    {
        if (array_key_exists("organizedConferenceCloudDialInMicrosoftMinutes", $this->_propDict)) {
            return $this->_propDict["organizedConferenceCloudDialInMicrosoftMinutes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the organizedConferenceCloudDialInMicrosoftMinutes
    *
    * @param int $val The organizedConferenceCloudDialInMicrosoftMinutes
    *
    * @return SkypeForBusinessActivityUserDetail
    */
    public function setOrganizedConferenceCloudDialInMicrosoftMinutes($val)
    {
        $this->_propDict["organizedConferenceCloudDialInMicrosoftMinutes"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the organizedConferenceCloudDialInOutMicrosoftCount
    *
    * @return int The organizedConferenceCloudDialInOutMicrosoftCount
    */
    public function getOrganizedConferenceCloudDialInOutMicrosoftCount()
    {
        if (array_key_exists("organizedConferenceCloudDialInOutMicrosoftCount", $this->_propDict)) {
            return $this->_propDict["organizedConferenceCloudDialInOutMicrosoftCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the organizedConferenceCloudDialInOutMicrosoftCount
    *
    * @param int $val The organizedConferenceCloudDialInOutMicrosoftCount
    *
    * @return SkypeForBusinessActivityUserDetail
    */
    public function setOrganizedConferenceCloudDialInOutMicrosoftCount($val)
    {
        $this->_propDict["organizedConferenceCloudDialInOutMicrosoftCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the organizedConferenceCloudDialOutMicrosoftMinutes
    *
    * @return int The organizedConferenceCloudDialOutMicrosoftMinutes
    */
    public function getOrganizedConferenceCloudDialOutMicrosoftMinutes()
    {
        if (array_key_exists("organizedConferenceCloudDialOutMicrosoftMinutes", $this->_propDict)) {
            return $this->_propDict["organizedConferenceCloudDialOutMicrosoftMinutes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the organizedConferenceCloudDialOutMicrosoftMinutes
    *
    * @param int $val The organizedConferenceCloudDialOutMicrosoftMinutes
    *
    * @return SkypeForBusinessActivityUserDetail
    */
    public function setOrganizedConferenceCloudDialOutMicrosoftMinutes($val)
    {
        $this->_propDict["organizedConferenceCloudDialOutMicrosoftMinutes"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the organizedConferenceDialInOut3rdPartyCount
    *
    * @return int The organizedConferenceDialInOut3rdPartyCount
    */
    public function getOrganizedConferenceDialInOut3rdPartyCount()
    {
        if (array_key_exists("organizedConferenceDialInOut3rdPartyCount", $this->_propDict)) {
            return $this->_propDict["organizedConferenceDialInOut3rdPartyCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the organizedConferenceDialInOut3rdPartyCount
    *
    * @param int $val The organizedConferenceDialInOut3rdPartyCount
    *
    * @return SkypeForBusinessActivityUserDetail
    */
    public function setOrganizedConferenceDialInOut3rdPartyCount($val)
    {
        $this->_propDict["organizedConferenceDialInOut3rdPartyCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the organizedConferenceIMCount
    *
    * @return int The organizedConferenceIMCount
    */
    public function getOrganizedConferenceIMCount()
    {
        if (array_key_exists("organizedConferenceIMCount", $this->_propDict)) {
            return $this->_propDict["organizedConferenceIMCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the organizedConferenceIMCount
    *
    * @param int $val The organizedConferenceIMCount
    *
    * @return SkypeForBusinessActivityUserDetail
    */
    public function setOrganizedConferenceIMCount($val)
    {
        $this->_propDict["organizedConferenceIMCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the organizedConferenceLastActivityDate
    *
    * @return \DateTime The organizedConferenceLastActivityDate
    */
    public function getOrganizedConferenceLastActivityDate()
    {
        if (array_key_exists("organizedConferenceLastActivityDate", $this->_propDict)) {
            if (is_a($this->_propDict["organizedConferenceLastActivityDate"], "\DateTime")) {
                return $this->_propDict["organizedConferenceLastActivityDate"];
            } else {
                $this->_propDict["organizedConferenceLastActivityDate"] = new \DateTime($this->_propDict["organizedConferenceLastActivityDate"]);
                return $this->_propDict["organizedConferenceLastActivityDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the organizedConferenceLastActivityDate
    *
    * @param \DateTime $val The organizedConferenceLastActivityDate
    *
    * @return SkypeForBusinessActivityUserDetail
    */
    public function setOrganizedConferenceLastActivityDate($val)
    {
        $this->_propDict["organizedConferenceLastActivityDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the organizedConferenceWebCount
    *
    * @return int The organizedConferenceWebCount
    */
    public function getOrganizedConferenceWebCount()
    {
        if (array_key_exists("organizedConferenceWebCount", $this->_propDict)) {
            return $this->_propDict["organizedConferenceWebCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the organizedConferenceWebCount
    *
    * @param int $val The organizedConferenceWebCount
    *
    * @return SkypeForBusinessActivityUserDetail
    */
    public function setOrganizedConferenceWebCount($val)
    {
        $this->_propDict["organizedConferenceWebCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the participatedConferenceAppSharingCount
    *
    * @return int The participatedConferenceAppSharingCount
    */
    public function getParticipatedConferenceAppSharingCount()
    {
        if (array_key_exists("participatedConferenceAppSharingCount", $this->_propDict)) {
            return $this->_propDict["participatedConferenceAppSharingCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the participatedConferenceAppSharingCount
    *
    * @param int $val The participatedConferenceAppSharingCount
    *
    * @return SkypeForBusinessActivityUserDetail
    */
    public function setParticipatedConferenceAppSharingCount($val)
    {
        $this->_propDict["participatedConferenceAppSharingCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the participatedConferenceAudioVideoCount
    *
    * @return int The participatedConferenceAudioVideoCount
    */
    public function getParticipatedConferenceAudioVideoCount()
    {
        if (array_key_exists("participatedConferenceAudioVideoCount", $this->_propDict)) {
            return $this->_propDict["participatedConferenceAudioVideoCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the participatedConferenceAudioVideoCount
    *
    * @param int $val The participatedConferenceAudioVideoCount
    *
    * @return SkypeForBusinessActivityUserDetail
    */
    public function setParticipatedConferenceAudioVideoCount($val)
    {
        $this->_propDict["participatedConferenceAudioVideoCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the participatedConferenceAudioVideoMinutes
    *
    * @return int The participatedConferenceAudioVideoMinutes
    */
    public function getParticipatedConferenceAudioVideoMinutes()
    {
        if (array_key_exists("participatedConferenceAudioVideoMinutes", $this->_propDict)) {
            return $this->_propDict["participatedConferenceAudioVideoMinutes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the participatedConferenceAudioVideoMinutes
    *
    * @param int $val The participatedConferenceAudioVideoMinutes
    *
    * @return SkypeForBusinessActivityUserDetail
    */
    public function setParticipatedConferenceAudioVideoMinutes($val)
    {
        $this->_propDict["participatedConferenceAudioVideoMinutes"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the participatedConferenceDialInOut3rdPartyCount
    *
    * @return int The participatedConferenceDialInOut3rdPartyCount
    */
    public function getParticipatedConferenceDialInOut3rdPartyCount()
    {
        if (array_key_exists("participatedConferenceDialInOut3rdPartyCount", $this->_propDict)) {
            return $this->_propDict["participatedConferenceDialInOut3rdPartyCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the participatedConferenceDialInOut3rdPartyCount
    *
    * @param int $val The participatedConferenceDialInOut3rdPartyCount
    *
    * @return SkypeForBusinessActivityUserDetail
    */
    public function setParticipatedConferenceDialInOut3rdPartyCount($val)
    {
        $this->_propDict["participatedConferenceDialInOut3rdPartyCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the participatedConferenceIMCount
    *
    * @return int The participatedConferenceIMCount
    */
    public function getParticipatedConferenceIMCount()
    {
        if (array_key_exists("participatedConferenceIMCount", $this->_propDict)) {
            return $this->_propDict["participatedConferenceIMCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the participatedConferenceIMCount
    *
    * @param int $val The participatedConferenceIMCount
    *
    * @return SkypeForBusinessActivityUserDetail
    */
    public function setParticipatedConferenceIMCount($val)
    {
        $this->_propDict["participatedConferenceIMCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the participatedConferenceLastActivityDate
    *
    * @return \DateTime The participatedConferenceLastActivityDate
    */
    public function getParticipatedConferenceLastActivityDate()
    {
        if (array_key_exists("participatedConferenceLastActivityDate", $this->_propDict)) {
            if (is_a($this->_propDict["participatedConferenceLastActivityDate"], "\DateTime")) {
                return $this->_propDict["participatedConferenceLastActivityDate"];
            } else {
                $this->_propDict["participatedConferenceLastActivityDate"] = new \DateTime($this->_propDict["participatedConferenceLastActivityDate"]);
                return $this->_propDict["participatedConferenceLastActivityDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the participatedConferenceLastActivityDate
    *
    * @param \DateTime $val The participatedConferenceLastActivityDate
    *
    * @return SkypeForBusinessActivityUserDetail
    */
    public function setParticipatedConferenceLastActivityDate($val)
    {
        $this->_propDict["participatedConferenceLastActivityDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the participatedConferenceWebCount
    *
    * @return int The participatedConferenceWebCount
    */
    public function getParticipatedConferenceWebCount()
    {
        if (array_key_exists("participatedConferenceWebCount", $this->_propDict)) {
            return $this->_propDict["participatedConferenceWebCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the participatedConferenceWebCount
    *
    * @param int $val The participatedConferenceWebCount
    *
    * @return SkypeForBusinessActivityUserDetail
    */
    public function setParticipatedConferenceWebCount($val)
    {
        $this->_propDict["participatedConferenceWebCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the peerToPeerAppSharingCount
    *
    * @return int The peerToPeerAppSharingCount
    */
    public function getPeerToPeerAppSharingCount()
    {
        if (array_key_exists("peerToPeerAppSharingCount", $this->_propDict)) {
            return $this->_propDict["peerToPeerAppSharingCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the peerToPeerAppSharingCount
    *
    * @param int $val The peerToPeerAppSharingCount
    *
    * @return SkypeForBusinessActivityUserDetail
    */
    public function setPeerToPeerAppSharingCount($val)
    {
        $this->_propDict["peerToPeerAppSharingCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the peerToPeerAudioCount
    *
    * @return int The peerToPeerAudioCount
    */
    public function getPeerToPeerAudioCount()
    {
        if (array_key_exists("peerToPeerAudioCount", $this->_propDict)) {
            return $this->_propDict["peerToPeerAudioCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the peerToPeerAudioCount
    *
    * @param int $val The peerToPeerAudioCount
    *
    * @return SkypeForBusinessActivityUserDetail
    */
    public function setPeerToPeerAudioCount($val)
    {
        $this->_propDict["peerToPeerAudioCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the peerToPeerAudioMinutes
    *
    * @return int The peerToPeerAudioMinutes
    */
    public function getPeerToPeerAudioMinutes()
    {
        if (array_key_exists("peerToPeerAudioMinutes", $this->_propDict)) {
            return $this->_propDict["peerToPeerAudioMinutes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the peerToPeerAudioMinutes
    *
    * @param int $val The peerToPeerAudioMinutes
    *
    * @return SkypeForBusinessActivityUserDetail
    */
    public function setPeerToPeerAudioMinutes($val)
    {
        $this->_propDict["peerToPeerAudioMinutes"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the peerToPeerFileTransferCount
    *
    * @return int The peerToPeerFileTransferCount
    */
    public function getPeerToPeerFileTransferCount()
    {
        if (array_key_exists("peerToPeerFileTransferCount", $this->_propDict)) {
            return $this->_propDict["peerToPeerFileTransferCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the peerToPeerFileTransferCount
    *
    * @param int $val The peerToPeerFileTransferCount
    *
    * @return SkypeForBusinessActivityUserDetail
    */
    public function setPeerToPeerFileTransferCount($val)
    {
        $this->_propDict["peerToPeerFileTransferCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the peerToPeerIMCount
    *
    * @return int The peerToPeerIMCount
    */
    public function getPeerToPeerIMCount()
    {
        if (array_key_exists("peerToPeerIMCount", $this->_propDict)) {
            return $this->_propDict["peerToPeerIMCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the peerToPeerIMCount
    *
    * @param int $val The peerToPeerIMCount
    *
    * @return SkypeForBusinessActivityUserDetail
    */
    public function setPeerToPeerIMCount($val)
    {
        $this->_propDict["peerToPeerIMCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the peerToPeerLastActivityDate
    *
    * @return \DateTime The peerToPeerLastActivityDate
    */
    public function getPeerToPeerLastActivityDate()
    {
        if (array_key_exists("peerToPeerLastActivityDate", $this->_propDict)) {
            if (is_a($this->_propDict["peerToPeerLastActivityDate"], "\DateTime")) {
                return $this->_propDict["peerToPeerLastActivityDate"];
            } else {
                $this->_propDict["peerToPeerLastActivityDate"] = new \DateTime($this->_propDict["peerToPeerLastActivityDate"]);
                return $this->_propDict["peerToPeerLastActivityDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the peerToPeerLastActivityDate
    *
    * @param \DateTime $val The peerToPeerLastActivityDate
    *
    * @return SkypeForBusinessActivityUserDetail
    */
    public function setPeerToPeerLastActivityDate($val)
    {
        $this->_propDict["peerToPeerLastActivityDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the peerToPeerVideoCount
    *
    * @return int The peerToPeerVideoCount
    */
    public function getPeerToPeerVideoCount()
    {
        if (array_key_exists("peerToPeerVideoCount", $this->_propDict)) {
            return $this->_propDict["peerToPeerVideoCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the peerToPeerVideoCount
    *
    * @param int $val The peerToPeerVideoCount
    *
    * @return SkypeForBusinessActivityUserDetail
    */
    public function setPeerToPeerVideoCount($val)
    {
        $this->_propDict["peerToPeerVideoCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the peerToPeerVideoMinutes
    *
    * @return int The peerToPeerVideoMinutes
    */
    public function getPeerToPeerVideoMinutes()
    {
        if (array_key_exists("peerToPeerVideoMinutes", $this->_propDict)) {
            return $this->_propDict["peerToPeerVideoMinutes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the peerToPeerVideoMinutes
    *
    * @param int $val The peerToPeerVideoMinutes
    *
    * @return SkypeForBusinessActivityUserDetail
    */
    public function setPeerToPeerVideoMinutes($val)
    {
        $this->_propDict["peerToPeerVideoMinutes"] = intval($val);
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
    * @return SkypeForBusinessActivityUserDetail
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
    * @return SkypeForBusinessActivityUserDetail
    */
    public function setReportRefreshDate($val)
    {
        $this->_propDict["reportRefreshDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the totalOrganizedConferenceCount
    *
    * @return int The totalOrganizedConferenceCount
    */
    public function getTotalOrganizedConferenceCount()
    {
        if (array_key_exists("totalOrganizedConferenceCount", $this->_propDict)) {
            return $this->_propDict["totalOrganizedConferenceCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the totalOrganizedConferenceCount
    *
    * @param int $val The totalOrganizedConferenceCount
    *
    * @return SkypeForBusinessActivityUserDetail
    */
    public function setTotalOrganizedConferenceCount($val)
    {
        $this->_propDict["totalOrganizedConferenceCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the totalParticipatedConferenceCount
    *
    * @return int The totalParticipatedConferenceCount
    */
    public function getTotalParticipatedConferenceCount()
    {
        if (array_key_exists("totalParticipatedConferenceCount", $this->_propDict)) {
            return $this->_propDict["totalParticipatedConferenceCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the totalParticipatedConferenceCount
    *
    * @param int $val The totalParticipatedConferenceCount
    *
    * @return SkypeForBusinessActivityUserDetail
    */
    public function setTotalParticipatedConferenceCount($val)
    {
        $this->_propDict["totalParticipatedConferenceCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the totalPeerToPeerSessionCount
    *
    * @return int The totalPeerToPeerSessionCount
    */
    public function getTotalPeerToPeerSessionCount()
    {
        if (array_key_exists("totalPeerToPeerSessionCount", $this->_propDict)) {
            return $this->_propDict["totalPeerToPeerSessionCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the totalPeerToPeerSessionCount
    *
    * @param int $val The totalPeerToPeerSessionCount
    *
    * @return SkypeForBusinessActivityUserDetail
    */
    public function setTotalPeerToPeerSessionCount($val)
    {
        $this->_propDict["totalPeerToPeerSessionCount"] = intval($val);
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
    * @return SkypeForBusinessActivityUserDetail
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }
    
}
