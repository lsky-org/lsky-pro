<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ContactFolder File
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
* ContactFolder class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ContactFolder extends Entity
{
    /**
    * Gets the displayName
    * The folder's display name.
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
    * The folder's display name.
    *
    * @param string $val The displayName
    *
    * @return ContactFolder
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the parentFolderId
    * The ID of the folder's parent folder.
    *
    * @return string The parentFolderId
    */
    public function getParentFolderId()
    {
        if (array_key_exists("parentFolderId", $this->_propDict)) {
            return $this->_propDict["parentFolderId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the parentFolderId
    * The ID of the folder's parent folder.
    *
    * @param string $val The parentFolderId
    *
    * @return ContactFolder
    */
    public function setParentFolderId($val)
    {
        $this->_propDict["parentFolderId"] = $val;
        return $this;
    }
    

     /** 
     * Gets the childFolders
    * The collection of child folders in the folder. Navigation property. Read-only. Nullable.
     *
     * @return array The childFolders
     */
    public function getChildFolders()
    {
        if (array_key_exists("childFolders", $this->_propDict)) {
           return $this->_propDict["childFolders"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the childFolders
    * The collection of child folders in the folder. Navigation property. Read-only. Nullable.
    *
    * @param ContactFolder $val The childFolders
    *
    * @return ContactFolder
    */
    public function setChildFolders($val)
    {
		$this->_propDict["childFolders"] = $val;
        return $this;
    }
    

     /** 
     * Gets the contacts
    * The contacts in the folder. Navigation property. Read-only. Nullable.
     *
     * @return array The contacts
     */
    public function getContacts()
    {
        if (array_key_exists("contacts", $this->_propDict)) {
           return $this->_propDict["contacts"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the contacts
    * The contacts in the folder. Navigation property. Read-only. Nullable.
    *
    * @param Contact $val The contacts
    *
    * @return ContactFolder
    */
    public function setContacts($val)
    {
		$this->_propDict["contacts"] = $val;
        return $this;
    }
    

     /** 
     * Gets the multiValueExtendedProperties
    * The collection of multi-value extended properties defined for the contactFolder. Read-only. Nullable.
     *
     * @return array The multiValueExtendedProperties
     */
    public function getMultiValueExtendedProperties()
    {
        if (array_key_exists("multiValueExtendedProperties", $this->_propDict)) {
           return $this->_propDict["multiValueExtendedProperties"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the multiValueExtendedProperties
    * The collection of multi-value extended properties defined for the contactFolder. Read-only. Nullable.
    *
    * @param MultiValueLegacyExtendedProperty $val The multiValueExtendedProperties
    *
    * @return ContactFolder
    */
    public function setMultiValueExtendedProperties($val)
    {
		$this->_propDict["multiValueExtendedProperties"] = $val;
        return $this;
    }
    

     /** 
     * Gets the singleValueExtendedProperties
    * The collection of single-value extended properties defined for the contactFolder. Read-only. Nullable.
     *
     * @return array The singleValueExtendedProperties
     */
    public function getSingleValueExtendedProperties()
    {
        if (array_key_exists("singleValueExtendedProperties", $this->_propDict)) {
           return $this->_propDict["singleValueExtendedProperties"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the singleValueExtendedProperties
    * The collection of single-value extended properties defined for the contactFolder. Read-only. Nullable.
    *
    * @param SingleValueLegacyExtendedProperty $val The singleValueExtendedProperties
    *
    * @return ContactFolder
    */
    public function setSingleValueExtendedProperties($val)
    {
		$this->_propDict["singleValueExtendedProperties"] = $val;
        return $this;
    }
    
}
