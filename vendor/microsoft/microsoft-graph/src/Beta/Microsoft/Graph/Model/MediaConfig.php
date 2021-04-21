<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MediaConfig File
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
* MediaConfig class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MediaConfig extends Entity
{
    /**
    * Gets the removeFromDefaultAudioGroup
    *
    * @return bool The removeFromDefaultAudioGroup
    */
    public function getRemoveFromDefaultAudioGroup()
    {
        if (array_key_exists("removeFromDefaultAudioGroup", $this->_propDict)) {
            return $this->_propDict["removeFromDefaultAudioGroup"];
        } else {
            return null;
        }
    }

    /**
    * Sets the removeFromDefaultAudioGroup
    *
    * @param bool $val The value of the removeFromDefaultAudioGroup
    *
    * @return MediaConfig
    */
    public function setRemoveFromDefaultAudioGroup($val)
    {
        $this->_propDict["removeFromDefaultAudioGroup"] = $val;
        return $this;
    }
}
