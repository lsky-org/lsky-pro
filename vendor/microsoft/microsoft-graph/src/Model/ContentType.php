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
namespace Microsoft\Graph\Model;

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
            if (is_a($this->_propDict["inheritedFrom"], "\Microsoft\Graph\Model\ItemReference")) {
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
            if (is_a($this->_propDict["order"], "\Microsoft\Graph\Model\ContentTypeOrder")) {
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
    
}
