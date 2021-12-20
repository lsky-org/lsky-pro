<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementTroubleshootingErrorResource File
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
* DeviceManagementTroubleshootingErrorResource class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementTroubleshootingErrorResource extends Entity
{
    /**
    * Gets the link
    * The link to the web resource. Can contain any of the following formatters: {{UPN}}, {{DeviceGUID}}, {{UserGUID}}
    *
    * @return string The link
    */
    public function getLink()
    {
        if (array_key_exists("link", $this->_propDict)) {
            return $this->_propDict["link"];
        } else {
            return null;
        }
    }

    /**
    * Sets the link
    * The link to the web resource. Can contain any of the following formatters: {{UPN}}, {{DeviceGUID}}, {{UserGUID}}
    *
    * @param string $val The value of the link
    *
    * @return DeviceManagementTroubleshootingErrorResource
    */
    public function setLink($val)
    {
        $this->_propDict["link"] = $val;
        return $this;
    }
    /**
    * Gets the text
    * Not yet documented
    *
    * @return string The text
    */
    public function getText()
    {
        if (array_key_exists("text", $this->_propDict)) {
            return $this->_propDict["text"];
        } else {
            return null;
        }
    }

    /**
    * Sets the text
    * Not yet documented
    *
    * @param string $val The value of the text
    *
    * @return DeviceManagementTroubleshootingErrorResource
    */
    public function setText($val)
    {
        $this->_propDict["text"] = $val;
        return $this;
    }
}
