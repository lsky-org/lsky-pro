<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SectionGroup File
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
* SectionGroup class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SectionGroup extends OnenoteEntityHierarchyModel
{
    /**
    * Gets the sectionGroupsUrl
    * The URL for the sectionGroups navigation property, which returns all the section groups in the section group. Read-only.
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
    * The URL for the sectionGroups navigation property, which returns all the section groups in the section group. Read-only.
    *
    * @param string $val The sectionGroupsUrl
    *
    * @return SectionGroup
    */
    public function setSectionGroupsUrl($val)
    {
        $this->_propDict["sectionGroupsUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the sectionsUrl
    * The URL for the sections navigation property, which returns all the sections in the section group. Read-only.
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
    * The URL for the sections navigation property, which returns all the sections in the section group. Read-only.
    *
    * @param string $val The sectionsUrl
    *
    * @return SectionGroup
    */
    public function setSectionsUrl($val)
    {
        $this->_propDict["sectionsUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the parentNotebook
    * The notebook that contains the section group. Read-only.
    *
    * @return Notebook The parentNotebook
    */
    public function getParentNotebook()
    {
        if (array_key_exists("parentNotebook", $this->_propDict)) {
            if (is_a($this->_propDict["parentNotebook"], "\Beta\Microsoft\Graph\Model\Notebook")) {
                return $this->_propDict["parentNotebook"];
            } else {
                $this->_propDict["parentNotebook"] = new Notebook($this->_propDict["parentNotebook"]);
                return $this->_propDict["parentNotebook"];
            }
        }
        return null;
    }
    
    /**
    * Sets the parentNotebook
    * The notebook that contains the section group. Read-only.
    *
    * @param Notebook $val The parentNotebook
    *
    * @return SectionGroup
    */
    public function setParentNotebook($val)
    {
        $this->_propDict["parentNotebook"] = $val;
        return $this;
    }
    
    /**
    * Gets the parentSectionGroup
    * The section group that contains the section group. Read-only.
    *
    * @return SectionGroup The parentSectionGroup
    */
    public function getParentSectionGroup()
    {
        if (array_key_exists("parentSectionGroup", $this->_propDict)) {
            if (is_a($this->_propDict["parentSectionGroup"], "\Beta\Microsoft\Graph\Model\SectionGroup")) {
                return $this->_propDict["parentSectionGroup"];
            } else {
                $this->_propDict["parentSectionGroup"] = new SectionGroup($this->_propDict["parentSectionGroup"]);
                return $this->_propDict["parentSectionGroup"];
            }
        }
        return null;
    }
    
    /**
    * Sets the parentSectionGroup
    * The section group that contains the section group. Read-only.
    *
    * @param SectionGroup $val The parentSectionGroup
    *
    * @return SectionGroup
    */
    public function setParentSectionGroup($val)
    {
        $this->_propDict["parentSectionGroup"] = $val;
        return $this;
    }
    

     /** 
     * Gets the sectionGroups
    * The section groups in the section. Read-only. Nullable.
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
    * The section groups in the section. Read-only. Nullable.
    *
    * @param SectionGroup $val The sectionGroups
    *
    * @return SectionGroup
    */
    public function setSectionGroups($val)
    {
		$this->_propDict["sectionGroups"] = $val;
        return $this;
    }
    

     /** 
     * Gets the sections
    * The sections in the section group. Read-only. Nullable.
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
    * The sections in the section group. Read-only. Nullable.
    *
    * @param OnenoteSection $val The sections
    *
    * @return SectionGroup
    */
    public function setSections($val)
    {
		$this->_propDict["sections"] = $val;
        return $this;
    }
    
}
