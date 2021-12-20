<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* InvitationParticipantInfo File
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
* InvitationParticipantInfo class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class InvitationParticipantInfo extends Entity
{

    /**
    * Gets the identity
    * The identitySet associated with this invitation.
    *
    * @return IdentitySet The identity
    */
    public function getIdentity()
    {
        if (array_key_exists("identity", $this->_propDict)) {
            if (is_a($this->_propDict["identity"], "\Microsoft\Graph\Model\IdentitySet")) {
                return $this->_propDict["identity"];
            } else {
                $this->_propDict["identity"] = new IdentitySet($this->_propDict["identity"]);
                return $this->_propDict["identity"];
            }
        }
        return null;
    }

    /**
    * Sets the identity
    * The identitySet associated with this invitation.
    *
    * @param IdentitySet $val The value to assign to the identity
    *
    * @return InvitationParticipantInfo The InvitationParticipantInfo
    */
    public function setIdentity($val)
    {
        $this->_propDict["identity"] = $val;
         return $this;
    }
    /**
    * Gets the replacesCallId
    * Optional. The call which the target idenity is currently a part of. This call will be dropped once the participant is added.
    *
    * @return string The replacesCallId
    */
    public function getReplacesCallId()
    {
        if (array_key_exists("replacesCallId", $this->_propDict)) {
            return $this->_propDict["replacesCallId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the replacesCallId
    * Optional. The call which the target idenity is currently a part of. This call will be dropped once the participant is added.
    *
    * @param string $val The value of the replacesCallId
    *
    * @return InvitationParticipantInfo
    */
    public function setReplacesCallId($val)
    {
        $this->_propDict["replacesCallId"] = $val;
        return $this;
    }
}
