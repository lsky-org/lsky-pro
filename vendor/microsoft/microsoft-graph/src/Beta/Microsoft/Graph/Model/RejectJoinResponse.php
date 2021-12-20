<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RejectJoinResponse File
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
* RejectJoinResponse class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RejectJoinResponse extends ParticipantJoiningResponse
{

    /**
    * Gets the reason
    * The rejection reason. Possible values are None, Busy, and Forbidden.
    *
    * @return RejectReason The reason
    */
    public function getReason()
    {
        if (array_key_exists("reason", $this->_propDict)) {
            if (is_a($this->_propDict["reason"], "\Beta\Microsoft\Graph\Model\RejectReason")) {
                return $this->_propDict["reason"];
            } else {
                $this->_propDict["reason"] = new RejectReason($this->_propDict["reason"]);
                return $this->_propDict["reason"];
            }
        }
        return null;
    }

    /**
    * Sets the reason
    * The rejection reason. Possible values are None, Busy, and Forbidden.
    *
    * @param RejectReason $val The value to assign to the reason
    *
    * @return RejectJoinResponse The RejectJoinResponse
    */
    public function setReason($val)
    {
        $this->_propDict["reason"] = $val;
         return $this;
    }
}
