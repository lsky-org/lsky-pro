<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Windows81WifiImportConfiguration File
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
* Windows81WifiImportConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Windows81WifiImportConfiguration extends DeviceConfiguration
{
    /**
    * Gets the payload
    * Payload. (UTF8 encoded byte array). This is the XML file saved on the device you used to connect to the Wi-Fi endpoint.
    *
    * @return \GuzzleHttp\Psr7\Stream The payload
    */
    public function getPayload()
    {
        if (array_key_exists("payload", $this->_propDict)) {
            if (is_a($this->_propDict["payload"], "\GuzzleHttp\Psr7\Stream")) {
                return $this->_propDict["payload"];
            } else {
                $this->_propDict["payload"] = \GuzzleHttp\Psr7\stream_for($this->_propDict["payload"]);
                return $this->_propDict["payload"];
            }
        }
        return null;
    }
    
    /**
    * Sets the payload
    * Payload. (UTF8 encoded byte array). This is the XML file saved on the device you used to connect to the Wi-Fi endpoint.
    *
    * @param \GuzzleHttp\Psr7\Stream $val The payload
    *
    * @return Windows81WifiImportConfiguration
    */
    public function setPayload($val)
    {
        $this->_propDict["payload"] = $val;
        return $this;
    }
    
    /**
    * Gets the payloadFileName
    * Payload file name (.xml).
    *
    * @return string The payloadFileName
    */
    public function getPayloadFileName()
    {
        if (array_key_exists("payloadFileName", $this->_propDict)) {
            return $this->_propDict["payloadFileName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the payloadFileName
    * Payload file name (.xml).
    *
    * @param string $val The payloadFileName
    *
    * @return Windows81WifiImportConfiguration
    */
    public function setPayloadFileName($val)
    {
        $this->_propDict["payloadFileName"] = $val;
        return $this;
    }
    
    /**
    * Gets the profileName
    * Profile name displayed in the UI.
    *
    * @return string The profileName
    */
    public function getProfileName()
    {
        if (array_key_exists("profileName", $this->_propDict)) {
            return $this->_propDict["profileName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the profileName
    * Profile name displayed in the UI.
    *
    * @param string $val The profileName
    *
    * @return Windows81WifiImportConfiguration
    */
    public function setProfileName($val)
    {
        $this->_propDict["profileName"] = $val;
        return $this;
    }
    
}
