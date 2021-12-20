<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ImageInfo File
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
* ImageInfo class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ImageInfo extends Entity
{
    /**
    * Gets the addImageQuery
    * Optional; parameter used to indicate the server is able to render image dynamically in response to parameterization. For example – a high contrast image
    *
    * @return bool The addImageQuery
    */
    public function getAddImageQuery()
    {
        if (array_key_exists("addImageQuery", $this->_propDict)) {
            return $this->_propDict["addImageQuery"];
        } else {
            return null;
        }
    }

    /**
    * Sets the addImageQuery
    * Optional; parameter used to indicate the server is able to render image dynamically in response to parameterization. For example – a high contrast image
    *
    * @param bool $val The value of the addImageQuery
    *
    * @return ImageInfo
    */
    public function setAddImageQuery($val)
    {
        $this->_propDict["addImageQuery"] = $val;
        return $this;
    }
    /**
    * Gets the alternateText
    * Optional; alt-text accessible content for the image
    *
    * @return string The alternateText
    */
    public function getAlternateText()
    {
        if (array_key_exists("alternateText", $this->_propDict)) {
            return $this->_propDict["alternateText"];
        } else {
            return null;
        }
    }

    /**
    * Sets the alternateText
    * Optional; alt-text accessible content for the image
    *
    * @param string $val The value of the alternateText
    *
    * @return ImageInfo
    */
    public function setAlternateText($val)
    {
        $this->_propDict["alternateText"] = $val;
        return $this;
    }
    /**
    * Gets the alternativeText
    *
    * @return string The alternativeText
    */
    public function getAlternativeText()
    {
        if (array_key_exists("alternativeText", $this->_propDict)) {
            return $this->_propDict["alternativeText"];
        } else {
            return null;
        }
    }

    /**
    * Sets the alternativeText
    *
    * @param string $val The value of the alternativeText
    *
    * @return ImageInfo
    */
    public function setAlternativeText($val)
    {
        $this->_propDict["alternativeText"] = $val;
        return $this;
    }
    /**
    * Gets the iconUrl
    * Optional; URI that points to an icon which represents the application used to generate the activity
    *
    * @return string The iconUrl
    */
    public function getIconUrl()
    {
        if (array_key_exists("iconUrl", $this->_propDict)) {
            return $this->_propDict["iconUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the iconUrl
    * Optional; URI that points to an icon which represents the application used to generate the activity
    *
    * @param string $val The value of the iconUrl
    *
    * @return ImageInfo
    */
    public function setIconUrl($val)
    {
        $this->_propDict["iconUrl"] = $val;
        return $this;
    }
}
