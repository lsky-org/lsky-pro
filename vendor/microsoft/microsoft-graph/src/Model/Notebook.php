<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Notebook File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

/**
* Notebook class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Notebook extends OnenoteEntityHierarchyModel
{
    /**
    * Gets the isDefault
    * Indicates whether this is the user's default notebook. Read-only.
    *
    * @return bool The isDefault
    */
    public function getIsDefault()
    {
        if (array_key_exists("isDefault", $this->_propDict)) {
            return $this->_propDict["isDefault"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isDefault
    * Indicates whether this is the user's default notebook. Read-only.
    *
    * @param bool $val The isDefault
    *
    * @return Notebook
    */
    public function setIsDefault($val)
    {
        $this->_propDict["isDefault"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the isShared
    * Indicates whether the notebook is shared. If true, the contents of the notebook can be seen by people other than the owner. Read-only.
    *
    * @return bool The isShared
    */
    public function getIsShared()
    {
        if (array_key_exists("isShared", $this->_propDict)) {
            return $this->_propDict["isShared"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isShared
    * Indicates whether the notebook is shared. If true, the contents of the notebook can be seen by people other than the owner. Read-only.
    *
    * @param bool $val The isShared
    *
    * @return Notebook
    */
    public function setIsShared($val)
    {
        $this->_propDict["isShared"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the links
    * Links for opening the notebook. The oneNoteClientURL link opens the notebook in the OneNote native client if it's installed. The oneNoteWebURL link opens the notebook in OneNote on the web.
    *
    * @return NotebookLinks The links
    */
    public function getLinks()
    {
        if (array_key_exists("links", $this->_propDict)) {
            if (is_a($this->_propDict["links"], "\Microsoft\Graph\Model\NotebookLinks")) {
                return $this->_propDict["links"];
            } else {
                $this->_propDict["links"] = new NotebookLinks($this->_propDict["links"]);
                return $this->_propDict["links"];
            }
        }
        return null;
    }
    
    /**
    * Sets the links
    * Links for opening the notebook. The oneNoteClientURL link opens the notebook in the OneNote native client if it's installed. The oneNoteWebURL link opens the notebook in OneNote on the web.
    *
    * @param NotebookLinks $val The links
    *
    * @return Notebook
    */
    public function setLinks($val)
    {
        $this->_propDict["links"] = $val;
        return $this;
    }
    
    /**
    * Gets the sectionGroupsUrl
    * The URL for the sectionGroups navigation property, which returns all the section groups in the notebook. Read-only.
    *
    * @return string The sectionGroupsUrl
    */
    public function getSectionGroupsUrl()
    {
        if (array_key_exists("sectionGroupsUrl", $this->_propDict)) {
            return $this->_propDict["sectionGroupsUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the sectionGroupsUrl
    * The URL for the sectionGroups navigation property, which returns all the section groups in the notebook. Read-only.
    *
    * @param string $val The sectionGroupsUrl
    *
    * @return Notebook
    */
    public function setSectionGroupsUrl($val)
    {
        $this->_propDict["sectionGroupsUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the sectionsUrl
    * The URL for the sections navigation property, which returns all the sections in the notebook. Read-only.
    *
    * @return string The sectionsUrl
    */
    public function getSectionsUrl()
    {
        if (array_key_exists("sectionsUrl", $this->_propDict)) {
            return $this->_propDict["sectionsUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the sectionsUrl
    * The URL for the sections navigation property, which returns all the sections in the notebook. Read-only.
    *
    * @param string $val The sectionsUrl
    *
    * @return Notebook
    */
    public function setSectionsUrl($val)
    {
        $this->_propDict["sectionsUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the userRole
    * Possible values are: Owner, Contributor, Reader, None. Owner represents owner-level access to the notebook. Contributor represents read/write access to the notebook. Reader represents read-only access to the notebook. Read-only.
    *
    * @return OnenoteUserRole The userRole
    */
    public function getUserRole()
    {
        if (array_key_exists("userRole", $this->_propDict)) {
            if (is_a($this->_propDict["userRole"], "\Microsoft\Graph\Model\OnenoteUserRole")) {
                return $this->_propDict["userRole"];
            } else {
                $this->_propDict["userRole"] = new OnenoteUserRole($this->_propDict["userRole"]);
                return $this->_propDict["userRole"];
            }
        }
        return null;
    }
    
    /**
    * Sets the userRole
    * Possible values are: Owner, Contributor, Reader, None. Owner represents owner-level access to the notebook. Contributor represents read/write access to the notebook. Reader represents read-only access to the notebook. Read-only.
    *
    * @param OnenoteUserRole $val The userRole
    *
    * @return Notebook
    */
    public function setUserRole($val)
    {
        $this->_propDict["userRole"] = $val;
        return $this;
    }
    

     /** 
     * Gets the sectionGroups
    * The section groups in the notebook. Read-only. Nullable.
     *
     * @return array The sectionGroups
     */
    public function getSectionGroups()
    {
        if (array_key_exists("sectionGroups", $this->_propDict)) {
           return $this->_propDict["sectionGroups"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the sectionGroups
    * The section groups in the notebook. Read-only. Nullable.
    *
    * @param SectionGroup $val The sectionGroups
    *
    * @return Notebook
    */
    public function setSectionGroups($val)
    {
		$this->_propDict["sectionGroups"] = $val;
        return $this;
    }
    

     /** 
     * Gets the sections
    * The sections in the notebook. Read-only. Nullable.
     *
     * @return array The sections
     */
    public function getSections()
    {
        if (array_key_exists("sections", $this->_propDict)) {
           return $this->_propDict["sections"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the sections
    * The sections in the notebook. Read-only. Nullable.
    *
    * @param OnenoteSection $val The sections
    *
    * @return Notebook
    */
    public function setSections($val)
    {
		$this->_propDict["sections"] = $val;
        return $this;
    }
    
}
