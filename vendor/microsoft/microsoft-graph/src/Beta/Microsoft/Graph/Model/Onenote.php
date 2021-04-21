<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Onenote File
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
* Onenote class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Onenote extends Entity
{

     /** 
     * Gets the notebooks
    * The collection of OneNote notebooks that are owned by the user or group. Read-only. Nullable.
     *
     * @return array The notebooks
     */
    public function getNotebooks()
    {
        if (array_key_exists("notebooks", $this->_propDict)) {
           return $this->_propDict["notebooks"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the notebooks
    * The collection of OneNote notebooks that are owned by the user or group. Read-only. Nullable.
    *
    * @param Notebook $val The notebooks
    *
    * @return Onenote
    */
    public function setNotebooks($val)
    {
		$this->_propDict["notebooks"] = $val;
        return $this;
    }
    

     /** 
     * Gets the operations
    * The status of OneNote operations. Getting an operations collection is not supported, but you can get the status of long-running operations if the Operation-Location header is returned in the response. Read-only. Nullable.
     *
     * @return array The operations
     */
    public function getOperations()
    {
        if (array_key_exists("operations", $this->_propDict)) {
           return $this->_propDict["operations"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the operations
    * The status of OneNote operations. Getting an operations collection is not supported, but you can get the status of long-running operations if the Operation-Location header is returned in the response. Read-only. Nullable.
    *
    * @param OnenoteOperation $val The operations
    *
    * @return Onenote
    */
    public function setOperations($val)
    {
		$this->_propDict["operations"] = $val;
        return $this;
    }
    

     /** 
     * Gets the pages
    * The pages in all OneNote notebooks that are owned by the user or group.  Read-only. Nullable.
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
    * The pages in all OneNote notebooks that are owned by the user or group.  Read-only. Nullable.
    *
    * @param OnenotePage $val The pages
    *
    * @return Onenote
    */
    public function setPages($val)
    {
		$this->_propDict["pages"] = $val;
        return $this;
    }
    

     /** 
     * Gets the resources
    * The image and other file resources in OneNote pages. Getting a resources collection is not supported, but you can get the binary content of a specific resource. Read-only. Nullable.
     *
     * @return array The resources
     */
    public function getResources()
    {
        if (array_key_exists("resources", $this->_propDict)) {
           return $this->_propDict["resources"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the resources
    * The image and other file resources in OneNote pages. Getting a resources collection is not supported, but you can get the binary content of a specific resource. Read-only. Nullable.
    *
    * @param OnenoteResource $val The resources
    *
    * @return Onenote
    */
    public function setResources($val)
    {
		$this->_propDict["resources"] = $val;
        return $this;
    }
    

     /** 
     * Gets the sectionGroups
    * The section groups in all OneNote notebooks that are owned by the user or group.  Read-only. Nullable.
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
    * The section groups in all OneNote notebooks that are owned by the user or group.  Read-only. Nullable.
    *
    * @param SectionGroup $val The sectionGroups
    *
    * @return Onenote
    */
    public function setSectionGroups($val)
    {
		$this->_propDict["sectionGroups"] = $val;
        return $this;
    }
    

     /** 
     * Gets the sections
    * The sections in all OneNote notebooks that are owned by the user or group.  Read-only. Nullable.
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
    * The sections in all OneNote notebooks that are owned by the user or group.  Read-only. Nullable.
    *
    * @param OnenoteSection $val The sections
    *
    * @return Onenote
    */
    public function setSections($val)
    {
		$this->_propDict["sections"] = $val;
        return $this;
    }
    
}
