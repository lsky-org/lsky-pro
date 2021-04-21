<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SitePage File
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
* SitePage class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SitePage extends BaseItem
{
    /**
    * Gets the contentType
    * The content type of the page.
    *
    * @return ContentTypeInfo The contentType
    */
    public function getContentType()
    {
        if (array_key_exists("contentType", $this->_propDict)) {
            if (is_a($this->_propDict["contentType"], "\Beta\Microsoft\Graph\Model\ContentTypeInfo")) {
                return $this->_propDict["contentType"];
            } else {
                $this->_propDict["contentType"] = new ContentTypeInfo($this->_propDict["contentType"]);
                return $this->_propDict["contentType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the contentType
    * The content type of the page.
    *
    * @param ContentTypeInfo $val The contentType
    *
    * @return SitePage
    */
    public function setContentType($val)
    {
        $this->_propDict["contentType"] = $val;
        return $this;
    }
    
    /**
    * Gets the pageLayoutType
    *
    * @return string The pageLayoutType
    */
    public function getPageLayoutType()
    {
        if (array_key_exists("pageLayoutType", $this->_propDict)) {
            return $this->_propDict["pageLayoutType"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the pageLayoutType
    *
    * @param string $val The pageLayoutType
    *
    * @return SitePage
    */
    public function setPageLayoutType($val)
    {
        $this->_propDict["pageLayoutType"] = $val;
        return $this;
    }
    
    /**
    * Gets the publishingState
    *
    * @return PublicationFacet The publishingState
    */
    public function getPublishingState()
    {
        if (array_key_exists("publishingState", $this->_propDict)) {
            if (is_a($this->_propDict["publishingState"], "\Beta\Microsoft\Graph\Model\PublicationFacet")) {
                return $this->_propDict["publishingState"];
            } else {
                $this->_propDict["publishingState"] = new PublicationFacet($this->_propDict["publishingState"]);
                return $this->_propDict["publishingState"];
            }
        }
        return null;
    }
    
    /**
    * Sets the publishingState
    *
    * @param PublicationFacet $val The publishingState
    *
    * @return SitePage
    */
    public function setPublishingState($val)
    {
        $this->_propDict["publishingState"] = $val;
        return $this;
    }
    
    /**
    * Gets the title
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
    *
    * @param string $val The title
    *
    * @return SitePage
    */
    public function setTitle($val)
    {
        $this->_propDict["title"] = $val;
        return $this;
    }
    

     /** 
     * Gets the webParts
     *
     * @return array The webParts
     */
    public function getWebParts()
    {
        if (array_key_exists("webParts", $this->_propDict)) {
           return $this->_propDict["webParts"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the webParts
    *
    * @param WebPart $val The webParts
    *
    * @return SitePage
    */
    public function setWebParts($val)
    {
		$this->_propDict["webParts"] = $val;
        return $this;
    }
    
}
