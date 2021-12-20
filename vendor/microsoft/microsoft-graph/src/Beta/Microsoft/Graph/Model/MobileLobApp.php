<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MobileLobApp File
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
* MobileLobApp class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MobileLobApp extends MobileApp
{
    /**
    * Gets the committedContentVersion
    * The internal committed content version.
    *
    * @return string The committedContentVersion
    */
    public function getCommittedContentVersion()
    {
        if (array_key_exists("committedContentVersion", $this->_propDict)) {
            return $this->_propDict["committedContentVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the committedContentVersion
    * The internal committed content version.
    *
    * @param string $val The committedContentVersion
    *
    * @return MobileLobApp
    */
    public function setCommittedContentVersion($val)
    {
        $this->_propDict["committedContentVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the fileName
    * The name of the main Lob application file.
    *
    * @return string The fileName
    */
    public function getFileName()
    {
        if (array_key_exists("fileName", $this->_propDict)) {
            return $this->_propDict["fileName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the fileName
    * The name of the main Lob application file.
    *
    * @param string $val The fileName
    *
    * @return MobileLobApp
    */
    public function setFileName($val)
    {
        $this->_propDict["fileName"] = $val;
        return $this;
    }
    
    /**
    * Gets the size
    * The total size, including all uploaded files.
    *
    * @return int The size
    */
    public function getSize()
    {
        if (array_key_exists("size", $this->_propDict)) {
            return $this->_propDict["size"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the size
    * The total size, including all uploaded files.
    *
    * @param int $val The size
    *
    * @return MobileLobApp
    */
    public function setSize($val)
    {
        $this->_propDict["size"] = intval($val);
        return $this;
    }
    

     /** 
     * Gets the contentVersions
    * The list of content versions for this app.
     *
     * @return array The contentVersions
     */
    public function getContentVersions()
    {
        if (array_key_exists("contentVersions", $this->_propDict)) {
           return $this->_propDict["contentVersions"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the contentVersions
    * The list of content versions for this app.
    *
    * @param MobileAppContent $val The contentVersions
    *
    * @return MobileLobApp
    */
    public function setContentVersions($val)
    {
		$this->_propDict["contentVersions"] = $val;
        return $this;
    }
    
}
