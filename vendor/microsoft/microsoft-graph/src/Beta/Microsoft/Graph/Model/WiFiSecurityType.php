<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WiFiSecurityType File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

use Microsoft\Graph\Core\Enum;

/**
* WiFiSecurityType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WiFiSecurityType extends Enum
{
    /**
    * The Enum WiFiSecurityType
    */
    const OPEN = "open";
    const WPA_PERSONAL = "wpaPersonal";
    const WPA_ENTERPRISE = "wpaEnterprise";
    const WEP = "wep";
    const WPA2_PERSONAL = "wpa2Personal";
    const WPA2_ENTERPRISE = "wpa2Enterprise";
}