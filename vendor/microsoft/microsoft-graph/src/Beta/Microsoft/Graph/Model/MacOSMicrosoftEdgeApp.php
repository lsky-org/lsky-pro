<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MacOSMicrosoftEdgeApp File
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
* MacOSMicrosoftEdgeApp class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MacOSMicrosoftEdgeApp extends MobileApp
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
    * @return MacOSMicrosoftEdgeApp
    */
    public function setChannel($val)
    {
        $this->_propDict["channel"] = $val;
        return $this;
    }
    
}
