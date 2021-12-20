<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ContentType File
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
* ContentType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ContentType extends Entity
{
    /**
    * Gets the associatedHubsUrls
    * List of canonical URLs for hub sites with which this content type is associated to. This will contain all hubsites where this content type is queued to be enforced or is already enforced. Enforcing a content type means that the content type will be applied to the lists in the enforced sites.
    *
    * @return string The associatedHubsUrls
    */
    public function getAssociatedHubsUrls()
    {
        if (array_key_exists("associatedHubsUrls", $this->_propDict)) {
            return $this->_propDict["associatedHubsUrls"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the associatedHubsUrls
    * List of canonical URLs for hub sites with which this content type is associated to. This will contain all hubsites where this content type is queued to be enforced or is already enforced. Enforcing a content type means that the content type will be applied to the lists in the enforced sites.
    *
    * @param string $val The associatedHubsUrls
    *
    * @return ContentType
    */
    public function setAssociatedHubsUrls($val)
    {
        $this->_propDict["associatedHubsUrls"] = $val;
        return $this;
    }
    
    /**
    * Gets the description
    * The descriptive text for the item.
    *
    * @return string The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the description
    * The descriptive text for the item.
    *
    * @param string $val The description
    *
    * @return ContentType
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the documentSet
    * Document Set metadata.
    *
    * @return DocumentSet The documentSet
    */
    public function getDocumentSet()
    {
        if (array_key_exists("documentSet", $this->_propDict)) {
            if (is_a($this->_propDict["documentSet"], "\Beta\Microsoft\Graph\Model\DocumentSet")) {
                return $this->_propDict["documentSet"];
            } else {
                $this->_propDict["documentSet"] = new DocumentSet($this->_propDict["documentSet"]);
                return $this->_propDict["documentSet"];
            }
        }
        return null;
    }
    
    /**
    * Sets the documentSet
    * Document Set metadata.
    *
    * @param DocumentSet $val The documentSet
    *
    * @return ContentType
    */
    public function setDocumentSet($val)
    {
        $this->_propDict["documentSet"] = $val;
        return $this;
    }
    
    /**
    * Gets the documentTemplate
    * Document template metadata. To make sure that documents have consistent content across a site and its subsites, you can associate a Word, Excel, or PowerPoint template with a site content type.
    *
    * @return DocumentSetContent The documentTemplate
    */
    public function getDocumentTemplate()
    {
        if (array_key_exists("documentTemplate", $this->_propDict)) {
            if (is_a($this->_propDict["documentTemplate"], "\Beta\Microsoft\Graph\Model\DocumentSetContent")) {
                return $this->_propDict["documentTemplate"];
            } else {
                $this->_propDict["documentTemplate"] = new DocumentSetContent($this->_propDict["documentTemplate"]);
                return $this->_propDict["documentTemplate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the documentTemplate
    * Document template metadata. To make sure that documents have consistent content across a site and its subsites, you can associate a Word, Excel, or PowerPoint template with a site content type.
    *
    * @param DocumentSetContent $val The documentTemplate
    *
    * @return ContentType
    */
    public function setDocumentTemplate($val)
    {
        $this->_propDict["documentTemplate"] = $val;
        return $this;
    }
    
    /**
    * Gets the group
    * The name of the group this content type belongs to. Helps organize related content types.
    *
    * @return string The group
    */
    public function getGroup()
    {
        if (array_key_exists("group", $this->_propDict)) {
            return $this->_propDict["group"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the group
    * The name of the group this content type belongs to. Helps organize related content types.
    *
    * @param string $val The group
    *
    * @return ContentType
    */
    public function setGroup($val)
    {
        $this->_propDict["group"] = $val;
        return $this;
    }
    
    /**
    * Gets the hidden
    * Indicates whether the content type is hidden in the list's 'New' menu.
    *
    * @return bool The hidden
    */
    public function getHidden()
    {
        if (array_key_exists("hidden", $this->_propDict)) {
            return $this->_propDict["hidden"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the hidden
    * Indicates whether the content type is hidden in the list's 'New' menu.
    *
    * @param bool $val The hidden
    *
    * @return ContentType
    */
    public function setHidden($val)
    {
        $this->_propDict["hidden"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the inheritedFrom
    * If this content type is inherited from another scope (like a site), provides a reference to the item where the content type is defined.
    *
    * @return ItemReference The inheritedFrom
    */
    public function getInheritedFrom()
    {
        if (array_key_exists("inheritedFrom", $this->_propDict)) {
            if (is_a($this->_propDict["inheritedFrom"], "\Beta\Microsoft\Graph\Model\ItemReference")) {
                return $this->_propDict["inheritedFrom"];
            } else {
                $this->_propDict["inheritedFrom"] = new ItemReference($this->_propDict["inheritedFrom"]);
                return $this->_propDict["inheritedFrom"];
            }
        }
        return null;
    }
    
    /**
    * Sets the inheritedFrom
    * If this content type is inherited from another scope (like a site), provides a reference to the item where the content type is defined.
    *
    * @param ItemReference $val The inheritedFrom
    *
    * @return ContentType
    */
    public function setInheritedFrom($val)
    {
        $this->_propDict["inheritedFrom"] = $val;
        return $this;
    }
    
    /**
    * Gets the isBuiltIn
    * Specifies if a content type is a built-in content type.
    *
    * @return bool The isBuiltIn
    */
    public function getIsBuiltIn()
    {
        if (array_key_exists("isBuiltIn", $this->_propDict)) {
            return $this->_propDict["isBuiltIn"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isBuiltIn
    * Specifies if a content type is a built-in content type.
    *
    * @param bool $val The isBuiltIn
    *
    * @return ContentType
    */
    public function setIsBuiltIn($val)
    {
        $this->_propDict["isBuiltIn"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the name
    * The name of the content type.
    *
    * @return string The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the name
    * The name of the content type.
    *
    * @param string $val The name
    *
    * @return ContentType
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    
    /**
    * Gets the order
    * Specifies the order in which the content type appears in the selection UI.
    *
    * @return ContentTypeOrder The order
    */
    public function getOrder()
    {
        if (array_key_exists("order", $this->_propDict)) {
            if (is_a($this->_propDict["order"], "\Beta\Microsoft\Graph\Model\ContentTypeOrder")) {
                return $this->_propDict["order"];
            } else {
                $this->_propDict["order"] = new ContentTypeOrder($this->_propDict["order"]);
                return $this->_propDict["order"];
            }
        }
        return null;
    }
    
    /**
    * Sets the order
    * Specifies the order in which the content type appears in the selection UI.
    *
    * @param ContentTypeOrder $val The order
    *
    * @return ContentType
    */
    public function setOrder($val)
    {
        $this->_propDict["order"] = $val;
        return $this;
    }
    
    /**
    * Gets the parentId
    * The unique identifier of the content type.
    *
    * @return string The parentId
    */
    public function getParentId()
    {
        if (array_key_exists("parentId", $this->_propDict)) {
            return $this->_propDict["parentId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the parentId
    * The unique identifier of the content type.
    *
    * @param string $val The parentId
    *
    * @return ContentType
    */
    public function setParentId($val)
    {
        $this->_propDict["parentId"] = $val;
        return $this;
    }
    
    /**
    * Gets the propagateChanges
    * If true, any changes made to the content type will be pushed to inherited content types and lists that implement the content type.
    *
    * @return bool The propagateChanges
    */
    public function getPropagateChanges()
    {
        if (array_key_exists("propagateChanges", $this->_propDict)) {
            return $this->_propDict["propagateChanges"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the propagateChanges
    * If true, any changes made to the content type will be pushed to inherited content types and lists that implement the content type.
    *
    * @param bool $val The propagateChanges
    *
    * @return ContentType
    */
    public function setPropagateChanges($val)
    {
        $this->_propDict["propagateChanges"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the readOnly
    * If true, the content type cannot be modified unless this value is first set to false.
    *
    * @return bool The readOnly
    */
    public function getReadOnly()
    {
        if (array_key_exists("readOnly", $this->_propDict)) {
            return $this->_propDict["readOnly"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the readOnly
    * If true, the content type cannot be modified unless this value is first set to false.
    *
    * @param bool $val The readOnly
    *
    * @return ContentType
    */
    public function setReadOnly($val)
    {
        $this->_propDict["readOnly"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the sealed
    * If true, the content type cannot be modified by users or through push-down operations. Only site collection administrators can seal or unseal content types.
    *
    * @return bool The sealed
    */
    public function getSealed()
    {
        if (array_key_exists("sealed", $this->_propDict)) {
            return $this->_propDict["sealed"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the sealed
    * If true, the content type cannot be modified by users or through push-down operations. Only site collection administrators can seal or unseal content types.
    *
    * @param bool $val The sealed
    *
    * @return ContentType
    */
    public function setSealed($val)
    {
        $this->_propDict["sealed"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the base
    * Parent contentType from which this content type is derived.
    *
    * @return ContentType The base
    */
    public function getBase()
    {
        if (array_key_exists("base", $this->_propDict)) {
            if (is_a($this->_propDict["base"], "\Beta\Microsoft\Graph\Model\ContentType")) {
                return $this->_propDict["base"];
            } else {
                $this->_propDict["base"] = new ContentType($this->_propDict["base"]);
                return $this->_propDict["base"];
            }
        }
        return null;
    }
    
    /**
    * Sets the base
    * Parent contentType from which this content type is derived.
    *
    * @param ContentType $val The base
    *
    * @return ContentType
    */
    public function setBase($val)
    {
        $this->_propDict["base"] = $val;
        return $this;
    }
    

     /** 
     * Gets the baseTypes
    * The collection of content types that are ancestors of this content type.
     *
     * @return array The baseTypes
     */
    public function getBaseTypes()
    {
        if (array_key_exists("baseTypes", $this->_propDict)) {
           return $this->_propDict["baseTypes"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the baseTypes
    * The collection of content types that are ancestors of this content type.
    *
    * @param ContentType $val The baseTypes
    *
    * @return ContentType
    */
    public function setBaseTypes($val)
    {
		$this->_propDict["baseTypes"] = $val;
        return $this;
    }
    

     /** 
     * Gets the columnLinks
    * The collection of columns that are required by this content type
     *
     * @return array The columnLinks
     */
    public function getColumnLinks()
    {
        if (array_key_exists("columnLinks", $this->_propDict)) {
           return $this->_propDict["columnLinks"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the columnLinks
    * The collection of columns that are required by this content type
    *
    * @param ColumnLink $val The columnLinks
    *
    * @return ContentType
    */
    public function setColumnLinks($val)
    {
		$this->_propDict["columnLinks"] = $val;
        return $this;
    }
    

     /** 
     * Gets the columnPositions
    * Column order information in a content type.
     *
     * @return array The columnPositions
     */
    public function getColumnPositions()
    {
        if (array_key_exists("columnPositions", $this->_propDict)) {
           return $this->_propDict["columnPositions"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the columnPositions
    * Column order information in a content type.
    *
    * @param ColumnDefinition $val The columnPositions
    *
    * @return ContentType
    */
    public function setColumnPositions($val)
    {
		$this->_propDict["columnPositions"] = $val;
        return $this;
    }
    

     /** 
     * Gets the columns
    * The collection of column definitions for this contentType.
     *
     * @return array The columns
     */
    public function getColumns()
    {
        if (array_key_exists("columns", $this->_propDict)) {
           return $this->_propDict["columns"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the columns
    * The collection of column definitions for this contentType.
    *
    * @param ColumnDefinition $val The columns
    *
    * @return ContentType
    */
    public function setColumns($val)
    {
		$this->_propDict["columns"] = $val;
        return $this;
    }
    
}
