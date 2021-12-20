<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ParticipantJoiningNotification File
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
* ParticipantJoiningNotification class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ParticipantJoiningNotification extends Entity
{
    /**
    * Gets the call
    *
    * @return Call The call
    */
    public function getCall()
    {
        if (array_key_exists("call", $this->_propDict)) {
            if (is_a($this->_propDict["call"], "\Beta\Microsoft\Graph\Model\Call")) {
                return $this->_propDict["call"];
            } else {
                $this->_propDict["call"] = new Call($this->_propDict["call"]);
                return $this->_propDict["call"];
            }
        }
        return null;
    }
    
    /**
    * Sets the call
    *
    * @param Call $val The call
    *
    * @return ParticipantJoiningNotification
    */
    public function setCall($val)
    {
        $this->_propDict["call"] = $val;
        return $this;
    }
    
}
