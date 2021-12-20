<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RecordingInfo File
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
* RecordingInfo class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RecordingInfo extends Entity
{

    /**
    * Gets the initiator
    * The identities of recording initiator.
    *
    * @return IdentitySet The initiator
    */
    public function getInitiator()
    {
        if (array_key_exists("initiator", $this->_propDict)) {
            if (is_a($this->_propDict["initiator"], "\Microsoft\Graph\Model\IdentitySet")) {
                return $this->_propDict["initiator"];
            } else {
                $this->_propDict["initiator"] = new IdentitySet($this->_propDict["initiator"]);
                return $this->_propDict["initiator"];
            }
        }
        return null;
    }

    /**
    * Sets the initiator
    * The identities of recording initiator.
    *
    * @param IdentitySet $val The value to assign to the initiator
    *
    * @return RecordingInfo The RecordingInfo
    */
    public function setInitiator($val)
    {
        $this->_propDict["initiator"] = $val;
         return $this;
    }

    /**
    * Gets the recordingStatus
    * Possible values are: unknown, notRecording, recording, or failed.
    *
    * @return RecordingStatus The recordingStatus
    */
    public function getRecordingStatus()
    {
        if (array_key_exists("recordingStatus", $this->_propDict)) {
            if (is_a($this->_propDict["recordingStatus"], "\Microsoft\Graph\Model\RecordingStatus")) {
                return $this->_propDict["recordingStatus"];
            } else {
                $this->_propDict["recordingStatus"] = new RecordingStatus($this->_propDict["recordingStatus"]);
                return $this->_propDict["recordingStatus"];
            }
        }
        return null;
    }

    /**
    * Sets the recordingStatus
    * Possible values are: unknown, notRecording, recording, or failed.
    *
    * @param RecordingStatus $val The value to assign to the recordingStatus
    *
    * @return RecordingInfo The RecordingInfo
    */
    public function setRecordingStatus($val)
    {
        $this->_propDict["recordingStatus"] = $val;
         return $this;
    }
}
