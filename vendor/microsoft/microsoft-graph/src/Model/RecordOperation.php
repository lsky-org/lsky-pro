<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RecordOperation File
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
* RecordOperation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RecordOperation extends CommsOperation
{
    /**
    * Gets the recordingAccessToken
    * The access token required to retrieve the recording.
    *
    * @return string The recordingAccessToken
    */
    public function getRecordingAccessToken()
    {
        if (array_key_exists("recordingAccessToken", $this->_propDict)) {
            return $this->_propDict["recordingAccessToken"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the recordingAccessToken
    * The access token required to retrieve the recording.
    *
    * @param string $val The recordingAccessToken
    *
    * @return RecordOperation
    */
    public function setRecordingAccessToken($val)
    {
        $this->_propDict["recordingAccessToken"] = $val;
        return $this;
    }
    
    /**
    * Gets the recordingLocation
    * The location where the recording is located.
    *
    * @return string The recordingLocation
    */
    public function getRecordingLocation()
    {
        if (array_key_exists("recordingLocation", $this->_propDict)) {
            return $this->_propDict["recordingLocation"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the recordingLocation
    * The location where the recording is located.
    *
    * @param string $val The recordingLocation
    *
    * @return RecordOperation
    */
    public function setRecordingLocation($val)
    {
        $this->_propDict["recordingLocation"] = $val;
        return $this;
    }
    
}
