<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsMicrosoftEdgeApp File
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
* WindowsMicrosoftEdgeApp class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsMicrosoftEdgeApp extends MobileApp
{
    /**
    * Gets the channel
    * The channel to install on target devices. Possible values are: dev, beta, stable.
    *
    * @return MicrosoftEdgeChannel The channel
    */
    public function getChannel()
    {
        if (array_key_exists("channel", $this->_propDict)) {
            if (is_a($this->_propDict["channel"], "\Beta\Microsoft\Graph\Model\MicrosoftEdgeChannel")) {
                return $this->_propDict["channel"];
            } else {
                $this->_propDict["channel"] = new MicrosoftEdgeChannel($this->_propDict["channel"]);
                return $this->_propDict["channel"];
            }
        }
        return null;
    }
    
    /**
    * Sets the channel
    * The channel to install on target devices. Possible values are: dev, beta, stable.
    *
    * @param MicrosoftEdgeChannel $val The channel
    *
    * @return WindowsMicrosoftEdgeApp
    */
    public function setChannel($val)
    {
        $this->_propDict["channel"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayLanguageLocale
    * The language locale to use when the Edge app displays text to the user.
    *
    * @return string The displayLanguageLocale
    */
    public function getDisplayLanguageLocale()
    {
        if (array_key_exists("displayLanguageLocale", $this->_propDict)) {
            return $this->_propDict["displayLanguageLocale"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the displayLanguageLocale
    * The language locale to use when the Edge app displays text to the user.
    *
    * @param string $val The displayLanguageLocale
    *
    * @return WindowsMicrosoftEdgeApp
    */
    public function setDisplayLanguageLocale($val)
    {
        $this->_propDict["displayLanguageLocale"] = $val;
        return $this;
    }
    
}
