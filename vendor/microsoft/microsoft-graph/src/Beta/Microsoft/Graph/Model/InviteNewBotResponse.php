<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* InviteNewBotResponse File
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
* InviteNewBotResponse class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class InviteNewBotResponse extends ParticipantJoiningResponse
{
    /**
    * Gets the inviteUri
    * URI to receive new incoming call notification.
    *
    * @return string The inviteUri
    */
    public function getInviteUri()
    {
        if (array_key_exists("inviteUri", $this->_propDict)) {
            return $this->_propDict["inviteUri"];
        } else {
            return null;
        }
    }

    /**
    * Sets the inviteUri
    * URI to receive new incoming call notification.
    *
    * @param string $val The value of the inviteUri
    *
    * @return InviteNewBotResponse
    */
    public function setInviteUri($val)
    {
        $this->_propDict["inviteUri"] = $val;
        return $this;
    }
}
