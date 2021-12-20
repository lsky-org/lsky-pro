<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TargetPolicyEndpoints File
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
* TargetPolicyEndpoints class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TargetPolicyEndpoints extends Entity
{
    /**
    * Gets the platformTypes
    * Use to filter the notification distribution to a specific platform or platforms. Valid values are Windows, iOS, Android and WebPush. By default, all push endpoint types (Windows, iOS, Android and WebPush) are enabled.
    *
    * @return string The platformTypes
    */
    public function getPlatformTypes()
    {
        if (array_key_exists("platformTypes", $this->_propDict)) {
            return $this->_propDict["platformTypes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the platformTypes
    * Use to filter the notification distribution to a specific platform or platforms. Valid values are Windows, iOS, Android and WebPush. By default, all push endpoint types (Windows, iOS, Android and WebPush) are enabled.
    *
    * @param string $val The value of the platformTypes
    *
    * @return TargetPolicyEndpoints
    */
    public function setPlatformTypes($val)
    {
        $this->_propDict["platformTypes"] = $val;
        return $this;
    }
}
