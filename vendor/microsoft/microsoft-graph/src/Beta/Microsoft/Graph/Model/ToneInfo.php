<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ToneInfo File
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
* ToneInfo class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ToneInfo extends Entity
{
    /**
    * Gets the sequenceId
    * An incremental identifier used for ordering DTMF events.
    *
    * @return int The sequenceId
    */
    public function getSequenceId()
    {
        if (array_key_exists("sequenceId", $this->_propDict)) {
            return $this->_propDict["sequenceId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sequenceId
    * An incremental identifier used for ordering DTMF events.
    *
    * @param int $val The value of the sequenceId
    *
    * @return ToneInfo
    */
    public function setSequenceId($val)
    {
        $this->_propDict["sequenceId"] = $val;
        return $this;
    }

    /**
    * Gets the tone
    * Possible values are: tone0, tone1, tone2, tone3, tone4, tone5, tone6, tone7, tone8, tone9, star, pound, a, b, c, d, flash.
    *
    * @return Tone The tone
    */
    public function getTone()
    {
        if (array_key_exists("tone", $this->_propDict)) {
            if (is_a($this->_propDict["tone"], "\Beta\Microsoft\Graph\Model\Tone")) {
                return $this->_propDict["tone"];
            } else {
                $this->_propDict["tone"] = new Tone($this->_propDict["tone"]);
                return $this->_propDict["tone"];
            }
        }
        return null;
    }

    /**
    * Sets the tone
    * Possible values are: tone0, tone1, tone2, tone3, tone4, tone5, tone6, tone7, tone8, tone9, star, pound, a, b, c, d, flash.
    *
    * @param Tone $val The value to assign to the tone
    *
    * @return ToneInfo The ToneInfo
    */
    public function setTone($val)
    {
        $this->_propDict["tone"] = $val;
         return $this;
    }
}
