<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CallMediaState File
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
* CallMediaState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CallMediaState extends Entity
{

    /**
    * Gets the audio
    * The audio media state. Possible values are: active, inactive, unknownFutureValue.
    *
    * @return MediaState The audio
    */
    public function getAudio()
    {
        if (array_key_exists("audio", $this->_propDict)) {
            if (is_a($this->_propDict["audio"], "\Beta\Microsoft\Graph\Model\MediaState")) {
                return $this->_propDict["audio"];
            } else {
                $this->_propDict["audio"] = new MediaState($this->_propDict["audio"]);
                return $this->_propDict["audio"];
            }
        }
        return null;
    }

    /**
    * Sets the audio
    * The audio media state. Possible values are: active, inactive, unknownFutureValue.
    *
    * @param MediaState $val The value to assign to the audio
    *
    * @return CallMediaState The CallMediaState
    */
    public function setAudio($val)
    {
        $this->_propDict["audio"] = $val;
         return $this;
    }
}
