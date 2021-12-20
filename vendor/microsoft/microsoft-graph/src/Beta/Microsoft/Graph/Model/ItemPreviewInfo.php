<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ItemPreviewInfo File
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
* ItemPreviewInfo class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ItemPreviewInfo extends Entity
{
    /**
    * Gets the getUrl
    *
    * @return string The getUrl
    */
    public function getGetUrl()
    {
        if (array_key_exists("getUrl", $this->_propDict)) {
            return $this->_propDict["getUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the getUrl
    *
    * @param string $val The value of the getUrl
    *
    * @return ItemPreviewInfo
    */
    public function setGetUrl($val)
    {
        $this->_propDict["getUrl"] = $val;
        return $this;
    }
    /**
    * Gets the postParameters
    *
    * @return string The postParameters
    */
    public function getPostParameters()
    {
        if (array_key_exists("postParameters", $this->_propDict)) {
            return $this->_propDict["postParameters"];
        } else {
            return null;
        }
    }

    /**
    * Sets the postParameters
    *
    * @param string $val The value of the postParameters
    *
    * @return ItemPreviewInfo
    */
    public function setPostParameters($val)
    {
        $this->_propDict["postParameters"] = $val;
        return $this;
    }
    /**
    * Gets the postUrl
    *
    * @return string The postUrl
    */
    public function getPostUrl()
    {
        if (array_key_exists("postUrl", $this->_propDict)) {
            return $this->_propDict["postUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the postUrl
    *
    * @param string $val The value of the postUrl
    *
    * @return ItemPreviewInfo
    */
    public function setPostUrl($val)
    {
        $this->_propDict["postUrl"] = $val;
        return $this;
    }
}
