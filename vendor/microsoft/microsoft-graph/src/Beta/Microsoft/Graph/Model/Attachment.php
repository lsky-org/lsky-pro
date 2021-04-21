<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Attachment File
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
* Attachment class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Attachment extends Entity
{
    /**
    * Gets the contentType
    * The MIME type.
    *
    * @return string The contentType
    */
    public function getContentType()
    {
        if (array_key_exists("contentType", $this->_propDict)) {
            return $this->_propDict["contentType"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the contentType
    * The MIME type.
    *
    * @param string $val The contentType
    *
    * @return Attachment
    */
    public function setContentType($val)
    {
        $this->_propDict["contentType"] = $val;
        return $this;
    }
    
    /**
    * Gets the isInline
    * true if the attachment is an inline attachment; otherwise, false.
    *
    * @return bool The isInline
    */
    public function getIsInline()
    {
        if (array_key_exists("isInline", $this->_propDict)) {
            return $this->_propDict["isInline"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isInline
    * true if the attachment is an inline attachment; otherwise, false.
    *
    * @param bool $val The isInline
    *
    * @return Attachment
    */
    public function setIsInline($val)
    {
        $this->_propDict["isInline"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the lastModifiedDateTime
    * The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
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
    * The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return Attachment
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the name
    * The display name of the attachment. This does not need to be the actual file name.
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
    * The display name of the attachment. This does not need to be the actual file name.
    *
    * @param string $val The name
    *
    * @return Attachment
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    
    /**
    * Gets the size
    * The length of the attachment in bytes.
    *
    * @return int The size
    */
    public function getSize()
    {
        if (array_key_exists("size", $this->_propDict)) {
            return $this->_propDict["size"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the size
    * The length of the attachment in bytes.
    *
    * @param int $val The size
    *
    * @return Attachment
    */
    public function setSize($val)
    {
        $this->_propDict["size"] = intval($val);
        return $this;
    }
    
}
