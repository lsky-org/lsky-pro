<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Media File
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
* Media class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Media extends Entity
{
    /**
    * Gets the isTranscriptionShown
    *
    * @return bool The isTranscriptionShown
    */
    public function getIsTranscriptionShown()
    {
        if (array_key_exists("isTranscriptionShown", $this->_propDict)) {
            return $this->_propDict["isTranscriptionShown"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isTranscriptionShown
    *
    * @param bool $val The value of the isTranscriptionShown
    *
    * @return Media
    */
    public function setIsTranscriptionShown($val)
    {
        $this->_propDict["isTranscriptionShown"] = $val;
        return $this;
    }

    /**
    * Gets the mediaSource
    *
    * @return MediaSource The mediaSource
    */
    public function getMediaSource()
    {
        if (array_key_exists("mediaSource", $this->_propDict)) {
            if (is_a($this->_propDict["mediaSource"], "\Beta\Microsoft\Graph\Model\MediaSource")) {
                return $this->_propDict["mediaSource"];
            } else {
                $this->_propDict["mediaSource"] = new MediaSource($this->_propDict["mediaSource"]);
                return $this->_propDict["mediaSource"];
            }
        }
        return null;
    }

    /**
    * Sets the mediaSource
    *
    * @param MediaSource $val The value to assign to the mediaSource
    *
    * @return Media The Media
    */
    public function setMediaSource($val)
    {
        $this->_propDict["mediaSource"] = $val;
         return $this;
    }
}
