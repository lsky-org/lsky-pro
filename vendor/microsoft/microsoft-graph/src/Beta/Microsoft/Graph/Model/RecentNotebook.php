<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RecentNotebook File
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
* RecentNotebook class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RecentNotebook extends Entity
{
    /**
    * Gets the displayName
    * The name of the notebook.
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
    * The name of the notebook.
    *
    * @param string $val The value of the displayName
    *
    * @return RecentNotebook
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the lastAccessedTime
    * The date and time when the notebook was last modified. The timestamp represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
    *
    * @return \DateTime The lastAccessedTime
    */
    public function getLastAccessedTime()
    {
        if (array_key_exists("lastAccessedTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastAccessedTime"], "\DateTime")) {
                return $this->_propDict["lastAccessedTime"];
            } else {
                $this->_propDict["lastAccessedTime"] = new \DateTime($this->_propDict["lastAccessedTime"]);
                return $this->_propDict["lastAccessedTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastAccessedTime
    * The date and time when the notebook was last modified. The timestamp represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
    *
    * @param \DateTime $val The value to assign to the lastAccessedTime
    *
    * @return RecentNotebook The RecentNotebook
    */
    public function setLastAccessedTime($val)
    {
        $this->_propDict["lastAccessedTime"] = $val;
         return $this;
    }

    /**
    * Gets the links
    * Links for opening the notebook. The oneNoteClientURL link opens the notebook in the OneNote client, if it's installed. The oneNoteWebURL link opens the notebook in OneNote on the web.
    *
    * @return RecentNotebookLinks The links
    */
    public function getLinks()
    {
        if (array_key_exists("links", $this->_propDict)) {
            if (is_a($this->_propDict["links"], "\Beta\Microsoft\Graph\Model\RecentNotebookLinks")) {
                return $this->_propDict["links"];
            } else {
                $this->_propDict["links"] = new RecentNotebookLinks($this->_propDict["links"]);
                return $this->_propDict["links"];
            }
        }
        return null;
    }

    /**
    * Sets the links
    * Links for opening the notebook. The oneNoteClientURL link opens the notebook in the OneNote client, if it's installed. The oneNoteWebURL link opens the notebook in OneNote on the web.
    *
    * @param RecentNotebookLinks $val The value to assign to the links
    *
    * @return RecentNotebook The RecentNotebook
    */
    public function setLinks($val)
    {
        $this->_propDict["links"] = $val;
         return $this;
    }

    /**
    * Gets the sourceService
    * The backend store where the Notebook resides, either OneDriveForBusiness or OneDrive.
    *
    * @return OnenoteSourceService The sourceService
    */
    public function getSourceService()
    {
        if (array_key_exists("sourceService", $this->_propDict)) {
            if (is_a($this->_propDict["sourceService"], "\Beta\Microsoft\Graph\Model\OnenoteSourceService")) {
                return $this->_propDict["sourceService"];
            } else {
                $this->_propDict["sourceService"] = new OnenoteSourceService($this->_propDict["sourceService"]);
                return $this->_propDict["sourceService"];
            }
        }
        return null;
    }

    /**
    * Sets the sourceService
    * The backend store where the Notebook resides, either OneDriveForBusiness or OneDrive.
    *
    * @param OnenoteSourceService $val The value to assign to the sourceService
    *
    * @return RecentNotebook The RecentNotebook
    */
    public function setSourceService($val)
    {
        $this->_propDict["sourceService"] = $val;
         return $this;
    }
}
