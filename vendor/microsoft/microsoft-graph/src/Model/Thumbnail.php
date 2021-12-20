<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Thumbnail File
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
* Thumbnail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Thumbnail extends Entity
{

    /**
    * Gets the content
    * The content stream for the thumbnail.
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
    * The content stream for the thumbnail.
    *
    * @param \GuzzleHttp\Psr7\Stream $val The value to assign to the content
    *
    * @return Thumbnail The Thumbnail
    */
    public function setContent($val)
    {
        $this->_propDict["content"] = $val;
         return $this;
    }
    /**
    * Gets the height
    * The height of the thumbnail, in pixels.
    *
    * @return int The height
    */
    public function getHeight()
    {
        if (array_key_exists("height", $this->_propDict)) {
            return $this->_propDict["height"];
        } else {
            return null;
        }
    }

    /**
    * Sets the height
    * The height of the thumbnail, in pixels.
    *
    * @param int $val The value of the height
    *
    * @return Thumbnail
    */
    public function setHeight($val)
    {
        $this->_propDict["height"] = $val;
        return $this;
    }
    /**
    * Gets the sourceItemId
    * The unique identifier of the item that provided the thumbnail. This is only available when a folder thumbnail is requested.
    *
    * @return string The sourceItemId
    */
    public function getSourceItemId()
    {
        if (array_key_exists("sourceItemId", $this->_propDict)) {
            return $this->_propDict["sourceItemId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sourceItemId
    * The unique identifier of the item that provided the thumbnail. This is only available when a folder thumbnail is requested.
    *
    * @param string $val The value of the sourceItemId
    *
    * @return Thumbnail
    */
    public function setSourceItemId($val)
    {
        $this->_propDict["sourceItemId"] = $val;
        return $this;
    }
    /**
    * Gets the url
    * The URL used to fetch the thumbnail content.
    *
    * @return string The url
    */
    public function getUrl()
    {
        if (array_key_exists("url", $this->_propDict)) {
            return $this->_propDict["url"];
        } else {
            return null;
        }
    }

    /**
    * Sets the url
    * The URL used to fetch the thumbnail content.
    *
    * @param string $val The value of the url
    *
    * @return Thumbnail
    */
    public function setUrl($val)
    {
        $this->_propDict["url"] = $val;
        return $this;
    }
    /**
    * Gets the width
    * The width of the thumbnail, in pixels.
    *
    * @return int The width
    */
    public function getWidth()
    {
        if (array_key_exists("width", $this->_propDict)) {
            return $this->_propDict["width"];
        } else {
            return null;
        }
    }

    /**
    * Sets the width
    * The width of the thumbnail, in pixels.
    *
    * @param int $val The value of the width
    *
    * @return Thumbnail
    */
    public function setWidth($val)
    {
        $this->_propDict["width"] = $val;
        return $this;
    }
}
