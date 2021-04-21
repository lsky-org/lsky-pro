<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AppleVppTokenTroubleshootingEvent File
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
* AppleVppTokenTroubleshootingEvent class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AppleVppTokenTroubleshootingEvent extends DeviceManagementTroubleshootingEvent
{
    /**
    * Gets the tokenId
    * Apple Volume Purchase Program Token Identifier.
    *
    * @return string The tokenId
    */
    public function getTokenId()
    {
        if (array_key_exists("tokenId", $this->_propDict)) {
            return $this->_propDict["tokenId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the tokenId
    * Apple Volume Purchase Program Token Identifier.
    *
    * @param string $val The tokenId
    *
    * @return AppleVppTokenTroubleshootingEvent
    */
    public function setTokenId($val)
    {
        $this->_propDict["tokenId"] = $val;
        return $this;
    }
    
}
