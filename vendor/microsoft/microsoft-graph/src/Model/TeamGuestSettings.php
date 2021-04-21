<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamGuestSettings File
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
* TeamGuestSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TeamGuestSettings extends Entity
{
    /**
    * Gets the allowCreateUpdateChannels
    * If set to true, guests can add and update channels.
    *
    * @return bool The allowCreateUpdateChannels
    */
    public function getAllowCreateUpdateChannels()
    {
        if (array_key_exists("allowCreateUpdateChannels", $this->_propDict)) {
            return $this->_propDict["allowCreateUpdateChannels"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowCreateUpdateChannels
    * If set to true, guests can add and update channels.
    *
    * @param bool $val The value of the allowCreateUpdateChannels
    *
    * @return TeamGuestSettings
    */
    public function setAllowCreateUpdateChannels($val)
    {
        $this->_propDict["allowCreateUpdateChannels"] = $val;
        return $this;
    }
    /**
    * Gets the allowDeleteChannels
    * If set to true, guests can delete channels.
    *
    * @return bool The allowDeleteChannels
    */
    public function getAllowDeleteChannels()
    {
        if (array_key_exists("allowDeleteChannels", $this->_propDict)) {
            return $this->_propDict["allowDeleteChannels"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowDeleteChannels
    * If set to true, guests can delete channels.
    *
    * @param bool $val The value of the allowDeleteChannels
    *
    * @return TeamGuestSettings
    */
    public function setAllowDeleteChannels($val)
    {
        $this->_propDict["allowDeleteChannels"] = $val;
        return $this;
    }
}
