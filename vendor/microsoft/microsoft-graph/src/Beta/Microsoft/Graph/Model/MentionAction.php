<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MentionAction File
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
* MentionAction class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MentionAction extends Entity
{

    /**
    * Gets the mentionees
    * The identities of the users mentioned in this action.
    *
    * @return IdentitySet The mentionees
    */
    public function getMentionees()
    {
        if (array_key_exists("mentionees", $this->_propDict)) {
            if (is_a($this->_propDict["mentionees"], "\Beta\Microsoft\Graph\Model\IdentitySet")) {
                return $this->_propDict["mentionees"];
            } else {
                $this->_propDict["mentionees"] = new IdentitySet($this->_propDict["mentionees"]);
                return $this->_propDict["mentionees"];
            }
        }
        return null;
    }

    /**
    * Sets the mentionees
    * The identities of the users mentioned in this action.
    *
    * @param IdentitySet $val The value to assign to the mentionees
    *
    * @return MentionAction The MentionAction
    */
    public function setMentionees($val)
    {
        $this->_propDict["mentionees"] = $val;
         return $this;
    }
}
