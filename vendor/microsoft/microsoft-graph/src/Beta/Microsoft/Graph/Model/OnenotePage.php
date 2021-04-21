<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OnenotePage File
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
* OnenotePage class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OnenotePage extends OnenoteEntitySchemaObjectModel
{
    /**
    * Gets the content
    * The page's HTML content.
    *
    * @return \GuzzleHttp\Psr7\Stream The content
    */
    public function getContent()
    {
        if (array_key_exists("content", $this->_propDict)) {
            if (is_a($this->_propDict["content"], "\GuzzleHttp\Psr7\Stream")) {
                return $this->_propDict["content"];
            } else {
                $this->_propDict["content"] = \GuzzleHttp\Psr7\stream_for($this->_propDict["content"]);
                return $this->_propDict["content"];
            }
        }
        return null;
    }
    
    /**
    * Sets the content
    * The page's HTML content.
    *
    * @param \GuzzleHttp\Psr7\Stream $val The content
    *
    * @return OnenotePage
    */
    public function setContent($val)
    {
        $this->_propDict["content"] = $val;
        return $this;
    }
    
    /**
    * Gets the contentUrl
    * The URL for the page's HTML content.  Read-only.
    *
    * @return string The contentUrl
    */
    public function getContentUrl()
    {
        if (array_key_exists("contentUrl", $this->_propDict)) {
            return $this->_propDict["contentUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the contentUrl
    * The URL for the page's HTML content.  Read-only.
    *
    * @param string $val The contentUrl
    *
    * @return OnenotePage
    */
    public function setContentUrl($val)
    {
        $this->_propDict["contentUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdByAppId
    * The unique identifier of the application that created the page. Read-only.
    *
    * @return string The createdByAppId
    */
    public function getCreatedByAppId()
    {
        if (array_key_exists("createdByAppId", $this->_propDict)) {
            return $this->_propDict["createdByAppId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the createdByAppId
    * The unique identifier of the application that created the page. Read-only.
    *
    * @param string $val The createdByAppId
    *
    * @return OnenotePage
    */
    public function setCreatedByAppId($val)
    {
        $this->_propDict["createdByAppId"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastModifiedDateTime
    * The date and time when the page was last modified. The timestamp represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
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
    * The date and time when the page was last modified. The timestamp represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return OnenotePage
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the level
    * The indentation level of the page. Read-only.
    *
    * @return int The level
    */
    public function getLevel()
    {
        if (array_key_exists("level", $this->_propDict)) {
            return $this->_propDict["level"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the level
    * The indentation level of the page. Read-only.
    *
    * @param int $val The level
    *
    * @return OnenotePage
    */
    public function setLevel($val)
    {
        $this->_propDict["level"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the links
    * Links for opening the page. The oneNoteClientURL link opens the page in the OneNote native client if it 's installed. The oneNoteWebUrl link opens the page in OneNote on the web. Read-only.
    *
    * @return PageLinks The links
    */
    public function getLinks()
    {
        if (array_key_exists("links", $this->_propDict)) {
            if (is_a($this->_propDict["links"], "\Beta\Microsoft\Graph\Model\PageLinks")) {
                return $this->_propDict["links"];
            } else {
                $this->_propDict["links"] = new PageLinks($this->_propDict["links"]);
                return $this->_propDict["links"];
            }
        }
        return null;
    }
    
    /**
    * Sets the links
    * Links for opening the page. The oneNoteClientURL link opens the page in the OneNote native client if it 's installed. The oneNoteWebUrl link opens the page in OneNote on the web. Read-only.
    *
    * @param PageLinks $val The links
    *
    * @return OnenotePage
    */
    public function setLinks($val)
    {
        $this->_propDict["links"] = $val;
        return $this;
    }
    
    /**
    * Gets the order
    * The order of the page within its parent section. Read-only.
    *
    * @return int The order
    */
    public function getOrder()
    {
        if (array_key_exists("order", $this->_propDict)) {
            return $this->_propDict["order"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the order
    * The order of the page within its parent section. Read-only.
    *
    * @param int $val The order
    *
    * @return OnenotePage
    */
    public function setOrder($val)
    {
        $this->_propDict["order"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the title
    * The title of the page.
    *
    * @return string The title
    */
    public function getTitle()
    {
        if (array_key_exists("title", $this->_propDict)) {
            return $this->_propDict["title"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the title
    * The title of the page.
    *
    * @param string $val The title
    *
    * @return OnenotePage
    */
    public function setTitle($val)
    {
        $this->_propDict["title"] = $val;
        return $this;
    }
    
    /**
    * Gets the userTags
    *
    * @return string The userTags
    */
    public function getUserTags()
    {
        if (array_key_exists("userTags", $this->_propDict)) {
            return $this->_propDict["userTags"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userTags
    *
    * @param string $val The userTags
    *
    * @return OnenotePage
    */
    public function setUserTags($val)
    {
        $this->_propDict["userTags"] = $val;
        return $this;
    }
    
    /**
    * Gets the parentNotebook
    * The notebook that contains the page.  Read-only.
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
    * The notebook that contains the page.  Read-only.
    *
    * @param Notebook $val The parentNotebook
    *
    * @return OnenotePage
    */
    public function setParentNotebook($val)
    {
        $this->_propDict["parentNotebook"] = $val;
        return $this;
    }
    
    /**
    * Gets the parentSection
    * The section that contains the page. Read-only.
    *
    * @return OnenoteSection The parentSection
    */
    public function getParentSection()
    {
        if (array_key_exists("parentSection", $this->_propDict)) {
            if (is_a($this->_propDict["parentSection"], "\Beta\Microsoft\Graph\Model\OnenoteSection")) {
                return $this->_propDict["parentSection"];
            } else {
                $this->_propDict["parentSection"] = new OnenoteSection($this->_propDict["parentSection"]);
                return $this->_propDict["parentSection"];
            }
        }
        return null;
    }
    
    /**
    * Sets the parentSection
    * The section that contains the page. Read-only.
    *
    * @param OnenoteSection $val The parentSection
    *
    * @return OnenotePage
    */
    public function setParentSection($val)
    {
        $this->_propDict["parentSection"] = $val;
        return $this;
    }
    
}
