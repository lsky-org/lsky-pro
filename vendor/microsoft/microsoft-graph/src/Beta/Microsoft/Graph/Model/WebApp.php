<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WebApp File
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
* WebApp class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WebApp extends MobileApp
{
    /**
    * Gets the appUrl
    * The web app URL. This property cannot be PATCHed.
    *
    * @return string The appUrl
    */
    public function getAppUrl()
    {
        if (array_key_exists("appUrl", $this->_propDict)) {
            return $this->_propDict["appUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appUrl
    * The web app URL. This property cannot be PATCHed.
    *
    * @param string $val The appUrl
    *
    * @return WebApp
    */
    public function setAppUrl($val)
    {
        $this->_propDict["appUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the useManagedBrowser
    * Whether or not to use managed browser. This property is only applicable for Android and IOS.
    *
    * @return bool The useManagedBrowser
    */
    public function getUseManagedBrowser()
    {
        if (array_key_exists("useManagedBrowser", $this->_propDict)) {
            return $this->_propDict["useManagedBrowser"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the useManagedBrowser
    * Whether or not to use managed browser. This property is only applicable for Android and IOS.
    *
    * @param bool $val The useManagedBrowser
    *
    * @return WebApp
    */
    public function setUseManagedBrowser($val)
    {
        $this->_propDict["useManagedBrowser"] = boolval($val);
        return $this;
    }
    
}
