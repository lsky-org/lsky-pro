<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MediaPrompt File
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
* MediaPrompt class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MediaPrompt extends Prompt
{
    /**
    * Gets the loop
    *
    * @return int The loop
    */
    public function getLoop()
    {
        if (array_key_exists("loop", $this->_propDict)) {
            return $this->_propDict["loop"];
        } else {
            return null;
        }
    }

    /**
    * Sets the loop
    *
    * @param int $val The value of the loop
    *
    * @return MediaPrompt
    */
    public function setLoop($val)
    {
        $this->_propDict["loop"] = $val;
        return $this;
    }

    /**
    * Gets the mediaInfo
    * The media information.
    *
    * @return MediaInfo The mediaInfo
    */
    public function getMediaInfo()
    {
        if (array_key_exists("mediaInfo", $this->_propDict)) {
            if (is_a($this->_propDict["mediaInfo"], "\Beta\Microsoft\Graph\Model\MediaInfo")) {
                return $this->_propDict["mediaInfo"];
            } else {
                $this->_propDict["mediaInfo"] = new MediaInfo($this->_propDict["mediaInfo"]);
                return $this->_propDict["mediaInfo"];
            }
        }
        return null;
    }

    /**
    * Sets the mediaInfo
    * The media information.
    *
    * @param MediaInfo $val The value to assign to the mediaInfo
    *
    * @return MediaPrompt The MediaPrompt
    */
    public function setMediaInfo($val)
    {
        $this->_propDict["mediaInfo"] = $val;
         return $this;
    }
}
