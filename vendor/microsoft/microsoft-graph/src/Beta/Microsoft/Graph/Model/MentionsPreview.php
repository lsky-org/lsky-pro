<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MentionsPreview File
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
* MentionsPreview class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MentionsPreview extends Entity
{
    /**
    * Gets the isMentioned
    * True if the signed-in user is mentioned in the parent resource instance. Read-only. Supports filter.
    *
    * @return bool The isMentioned
    */
    public function getIsMentioned()
    {
        if (array_key_exists("isMentioned", $this->_propDict)) {
            return $this->_propDict["isMentioned"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isMentioned
    * True if the signed-in user is mentioned in the parent resource instance. Read-only. Supports filter.
    *
    * @param bool $val The value of the isMentioned
    *
    * @return MentionsPreview
    */
    public function setIsMentioned($val)
    {
        $this->_propDict["isMentioned"] = $val;
        return $this;
    }
}
