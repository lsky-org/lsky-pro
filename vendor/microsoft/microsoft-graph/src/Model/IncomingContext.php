<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IncomingContext File
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
* IncomingContext class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IncomingContext extends Entity
{
    /**
    * Gets the observedParticipantId
    * The id of the participant that is under observation. Read-only.
    *
    * @return string The observedParticipantId
    */
    public function getObservedParticipantId()
    {
        if (array_key_exists("observedParticipantId", $this->_propDict)) {
            return $this->_propDict["observedParticipantId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the observedParticipantId
    * The id of the participant that is under observation. Read-only.
    *
    * @param string $val The value of the observedParticipantId
    *
    * @return IncomingContext
    */
    public function setObservedParticipantId($val)
    {
        $this->_propDict["observedParticipantId"] = $val;
        return $this;
    }

    /**
    * Gets the onBehalfOf
    * The identity that the call is happening on behalf of.
    *
    * @return IdentitySet The onBehalfOf
    */
    public function getOnBehalfOf()
    {
        if (array_key_exists("onBehalfOf", $this->_propDict)) {
            if (is_a($this->_propDict["onBehalfOf"], "\Microsoft\Graph\Model\IdentitySet")) {
                return $this->_propDict["onBehalfOf"];
            } else {
                $this->_propDict["onBehalfOf"] = new IdentitySet($this->_propDict["onBehalfOf"]);
                return $this->_propDict["onBehalfOf"];
            }
        }
        return null;
    }

    /**
    * Sets the onBehalfOf
    * The identity that the call is happening on behalf of.
    *
    * @param IdentitySet $val The value to assign to the onBehalfOf
    *
    * @return IncomingContext The IncomingContext
    */
    public function setOnBehalfOf($val)
    {
        $this->_propDict["onBehalfOf"] = $val;
         return $this;
    }
    /**
    * Gets the sourceParticipantId
    * The id of the participant that triggered the incoming call. Read-only.
    *
    * @return string The sourceParticipantId
    */
    public function getSourceParticipantId()
    {
        if (array_key_exists("sourceParticipantId", $this->_propDict)) {
            return $this->_propDict["sourceParticipantId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sourceParticipantId
    * The id of the participant that triggered the incoming call. Read-only.
    *
    * @param string $val The value of the sourceParticipantId
    *
    * @return IncomingContext
    */
    public function setSourceParticipantId($val)
    {
        $this->_propDict["sourceParticipantId"] = $val;
        return $this;
    }

    /**
    * Gets the transferor
    * The identity that transferred the call.
    *
    * @return IdentitySet The transferor
    */
    public function getTransferor()
    {
        if (array_key_exists("transferor", $this->_propDict)) {
            if (is_a($this->_propDict["transferor"], "\Microsoft\Graph\Model\IdentitySet")) {
                return $this->_propDict["transferor"];
            } else {
                $this->_propDict["transferor"] = new IdentitySet($this->_propDict["transferor"]);
                return $this->_propDict["transferor"];
            }
        }
        return null;
    }

    /**
    * Sets the transferor
    * The identity that transferred the call.
    *
    * @param IdentitySet $val The value to assign to the transferor
    *
    * @return IncomingContext The IncomingContext
    */
    public function setTransferor($val)
    {
        $this->_propDict["transferor"] = $val;
         return $this;
    }
}
