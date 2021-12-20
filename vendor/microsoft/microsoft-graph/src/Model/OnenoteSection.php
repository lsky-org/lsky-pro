<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OnenoteSection File
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
* OnenoteSection class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OnenoteSection extends OnenoteEntityHierarchyModel
{
    /**
    * Gets the isDefault
    * Indicates whether this is the user's default section. Read-only.
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
    * Indicates whether this is the user's default section. Read-only.
    *
    * @param bool $val The isDefault
    *
    * @return OnenoteSection
    */
    public function setIsDefault($val)
    {
        $this->_propDict["isDefault"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the links
    * Links for opening the section. The oneNoteClientURL link opens the section in the OneNote native client if it's installed. The oneNoteWebURL link opens the section in OneNote on the web.
    *
    * @return SectionLinks The links
    */
    public function getLinks()
    {
        if (array_key_exists("links", $this->_propDict)) {
            if (is_a($this->_propDict["links"], "\Microsoft\Graph\Model\SectionLinks")) {
                return $this->_propDict["links"];
            } else {
                $this->_propDict["links"] = new SectionLinks($this->_propDict["links"]);
                return $this->_propDict["links"];
            }
        }
        return null;
    }
    
    /**
    * Sets the links
    * Links for opening the section. The oneNoteClientURL link opens the section in the OneNote native client if it's installed. The oneNoteWebURL link opens the section in OneNote on the web.
    *
    * @param SectionLinks $val The links
    *
    * @return OnenoteSection
    */
    public function setLinks($val)
    {
        $this->_propDict["links"] = $val;
        return $this;
    }
    
    /**
    * Gets the pagesUrl
    * The pages endpoint where you can get details for all the pages in the section. Read-only.
    *
    * @return string The pagesUrl
    */
    public function getPagesUrl()
    {
        if (array_key_exists("pagesUrl", $this->_propDict)) {
            return $this->_propDict["pagesUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the pagesUrl
    * The pages endpoint where you can get details for all the pages in the section. Read-only.
    *
    * @param string $val The pagesUrl
    *
    * @return OnenoteSection
    */
    public function setPagesUrl($val)
    {
        $this->_propDict["pagesUrl"] = $val;
        return $this;
    }
    

     /** 
     * Gets the pages
    * The collection of pages in the section.  Read-only. Nullable.
     *
     * @return array The pages
     */
    public function getPages()
    {
        if (array_key_exists("pages", $this->_propDict)) {
           return $this->_propDict["pages"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the pages
    * The collection of pages in the section.  Read-only. Nullable.
    *
    * @param OnenotePage $val The pages
    *
    * @return OnenoteSection
    */
    public function setPages($val)
    {
		$this->_propDict["pages"] = $val;
        return $this;
    }
    
    /**
    * Gets the parentNotebook
    * The notebook that contains the section.  Read-only.
    *
    * @return Notebook The parentNotebook
    */
    public function getParentNotebook()
    {
        if (array_key_exists("parentNotebook", $this->_propDict)) {
            if (is_a($this->_propDict["parentNotebook"], "\Microsoft\Graph\Model\Notebook")) {
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
    * The notebook that contains the section.  Read-only.
    *
    * @param Notebook $val The parentNotebook
    *
    * @return OnenoteSection
    */
    public function setParentNotebook($val)
    {
        $this->_propDict["parentNotebook"] = $val;
        return $this;
    }
    
    /**
    * Gets the parentSectionGroup
    * The section group that contains the section.  Read-only.
    *
    * @return SectionGroup The parentSectionGroup
    */
    public function getParentSectionGroup()
    {
        if (array_key_exists("parentSectionGroup", $this->_propDict)) {
            if (is_a($this->_propDict["parentSectionGroup"], "\Microsoft\Graph\Model\SectionGroup")) {
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
    * The section group that contains the section.  Read-only.
    *
    * @param SectionGroup $val The parentSectionGroup
    *
    * @return OnenoteSection
    */
    public function setParentSectionGroup($val)
    {
        $this->_propDict["parentSectionGroup"] = $val;
        return $this;
    }
    
}
