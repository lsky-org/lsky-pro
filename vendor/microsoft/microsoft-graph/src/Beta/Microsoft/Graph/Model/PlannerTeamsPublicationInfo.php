<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PlannerTeamsPublicationInfo File
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
* PlannerTeamsPublicationInfo class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PlannerTeamsPublicationInfo extends Entity
{

    /**
    * Gets the lastModifiedDateTime
    * The date and time when this task was last modified by the publication process. Read-only.
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
    * The date and time when this task was last modified by the publication process. Read-only.
    *
    * @param \DateTime $val The value to assign to the lastModifiedDateTime
    *
    * @return PlannerTeamsPublicationInfo The PlannerTeamsPublicationInfo
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the publicationId
    * The identifier of the publication. Read-only.
    *
    * @return string The publicationId
    */
    public function getPublicationId()
    {
        if (array_key_exists("publicationId", $this->_propDict)) {
            return $this->_propDict["publicationId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the publicationId
    * The identifier of the publication. Read-only.
    *
    * @param string $val The value of the publicationId
    *
    * @return PlannerTeamsPublicationInfo
    */
    public function setPublicationId($val)
    {
        $this->_propDict["publicationId"] = $val;
        return $this;
    }
    /**
    * Gets the publishedToPlanId
    * The identifier of the plannerPlan this task was originally placed in. Read-only.
    *
    * @return string The publishedToPlanId
    */
    public function getPublishedToPlanId()
    {
        if (array_key_exists("publishedToPlanId", $this->_propDict)) {
            return $this->_propDict["publishedToPlanId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the publishedToPlanId
    * The identifier of the plannerPlan this task was originally placed in. Read-only.
    *
    * @param string $val The value of the publishedToPlanId
    *
    * @return PlannerTeamsPublicationInfo
    */
    public function setPublishedToPlanId($val)
    {
        $this->_propDict["publishedToPlanId"] = $val;
        return $this;
    }
    /**
    * Gets the publishingTeamId
    * The identifier of the team that initiated the publication process. Read-only.
    *
    * @return string The publishingTeamId
    */
    public function getPublishingTeamId()
    {
        if (array_key_exists("publishingTeamId", $this->_propDict)) {
            return $this->_propDict["publishingTeamId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the publishingTeamId
    * The identifier of the team that initiated the publication process. Read-only.
    *
    * @param string $val The value of the publishingTeamId
    *
    * @return PlannerTeamsPublicationInfo
    */
    public function setPublishingTeamId($val)
    {
        $this->_propDict["publishingTeamId"] = $val;
        return $this;
    }
    /**
    * Gets the publishingTeamName
    * The display name of the team that initiated the publication process. This display name is for reference only, and might not represent the most up-to-date name of the team. Read-only.
    *
    * @return string The publishingTeamName
    */
    public function getPublishingTeamName()
    {
        if (array_key_exists("publishingTeamName", $this->_propDict)) {
            return $this->_propDict["publishingTeamName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the publishingTeamName
    * The display name of the team that initiated the publication process. This display name is for reference only, and might not represent the most up-to-date name of the team. Read-only.
    *
    * @param string $val The value of the publishingTeamName
    *
    * @return PlannerTeamsPublicationInfo
    */
    public function setPublishingTeamName($val)
    {
        $this->_propDict["publishingTeamName"] = $val;
        return $this;
    }
}
