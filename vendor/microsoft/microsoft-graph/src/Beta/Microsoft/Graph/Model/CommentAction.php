<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CommentAction File
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
* CommentAction class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CommentAction extends Entity
{
    /**
    * Gets the isReply
    * If true, this activity was a reply to an existing comment thread.
    *
    * @return bool The isReply
    */
    public function getIsReply()
    {
        if (array_key_exists("isReply", $this->_propDict)) {
            return $this->_propDict["isReply"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isReply
    * If true, this activity was a reply to an existing comment thread.
    *
    * @param bool $val The value of the isReply
    *
    * @return CommentAction
    */
    public function setIsReply($val)
    {
        $this->_propDict["isReply"] = $val;
        return $this;
    }

    /**
    * Gets the parentAuthor
    * The identity of the user who started the comment thread.
    *
    * @return IdentitySet The parentAuthor
    */
    public function getParentAuthor()
    {
        if (array_key_exists("parentAuthor", $this->_propDict)) {
            if (is_a($this->_propDict["parentAuthor"], "\Beta\Microsoft\Graph\Model\IdentitySet")) {
                return $this->_propDict["parentAuthor"];
            } else {
                $this->_propDict["parentAuthor"] = new IdentitySet($this->_propDict["parentAuthor"]);
                return $this->_propDict["parentAuthor"];
            }
        }
        return null;
    }

    /**
    * Sets the parentAuthor
    * The identity of the user who started the comment thread.
    *
    * @param IdentitySet $val The value to assign to the parentAuthor
    *
    * @return CommentAction The CommentAction
    */
    public function setParentAuthor($val)
    {
        $this->_propDict["parentAuthor"] = $val;
         return $this;
    }

    /**
    * Gets the participants
    * The identities of the users participating in this comment thread.
    *
    * @return IdentitySet The participants
    */
    public function getParticipants()
    {
        if (array_key_exists("participants", $this->_propDict)) {
            if (is_a($this->_propDict["participants"], "\Beta\Microsoft\Graph\Model\IdentitySet")) {
                return $this->_propDict["participants"];
            } else {
                $this->_propDict["participants"] = new IdentitySet($this->_propDict["participants"]);
                return $this->_propDict["participants"];
            }
        }
        return null;
    }

    /**
    * Sets the participants
    * The identities of the users participating in this comment thread.
    *
    * @param IdentitySet $val The value to assign to the participants
    *
    * @return CommentAction The CommentAction
    */
    public function setParticipants($val)
    {
        $this->_propDict["participants"] = $val;
         return $this;
    }
}
