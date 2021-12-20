<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ImportedWindowsAutopilotDeviceIdentityUpload File
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
* ImportedWindowsAutopilotDeviceIdentityUpload class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ImportedWindowsAutopilotDeviceIdentityUpload extends Entity
{
    /**
    * Gets the createdDateTimeUtc
    * DateTime when the entity is created.
    *
    * @return \DateTime The createdDateTimeUtc
    */
    public function getCreatedDateTimeUtc()
    {
        if (array_key_exists("createdDateTimeUtc", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTimeUtc"], "\DateTime")) {
                return $this->_propDict["createdDateTimeUtc"];
            } else {
                $this->_propDict["createdDateTimeUtc"] = new \DateTime($this->_propDict["createdDateTimeUtc"]);
                return $this->_propDict["createdDateTimeUtc"];
            }
        }
        return null;
    }
    
    /**
    * Sets the createdDateTimeUtc
    * DateTime when the entity is created.
    *
    * @param \DateTime $val The createdDateTimeUtc
    *
    * @return ImportedWindowsAutopilotDeviceIdentityUpload
    */
    public function setCreatedDateTimeUtc($val)
    {
        $this->_propDict["createdDateTimeUtc"] = $val;
        return $this;
    }
    
    /**
    * Gets the status
    * Upload status.
    *
    * @return ImportedWindowsAutopilotDeviceIdentityUploadStatus The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\Model\ImportedWindowsAutopilotDeviceIdentityUploadStatus")) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new ImportedWindowsAutopilotDeviceIdentityUploadStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }
    
    /**
    * Sets the status
    * Upload status.
    *
    * @param ImportedWindowsAutopilotDeviceIdentityUploadStatus $val The status
    *
    * @return ImportedWindowsAutopilotDeviceIdentityUpload
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }
    

     /** 
     * Gets the deviceIdentities
    * Collection of all Autopilot devices as a part of this upload.
     *
     * @return array The deviceIdentities
     */
    public function getDeviceIdentities()
    {
        if (array_key_exists("deviceIdentities", $this->_propDict)) {
           return $this->_propDict["deviceIdentities"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the deviceIdentities
    * Collection of all Autopilot devices as a part of this upload.
    *
    * @param ImportedWindowsAutopilotDeviceIdentity $val The deviceIdentities
    *
    * @return ImportedWindowsAutopilotDeviceIdentityUpload
    */
    public function setDeviceIdentities($val)
    {
		$this->_propDict["deviceIdentities"] = $val;
        return $this;
    }
    
}
