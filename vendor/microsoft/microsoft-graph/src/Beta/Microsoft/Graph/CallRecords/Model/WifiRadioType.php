<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WifiRadioType File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\CallRecords\Model;

use Microsoft\Graph\Core\Enum;

/**
* WifiRadioType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WifiRadioType extends Enum
{
    /**
    * The Enum WifiRadioType
    */
    const UNKNOWN = "unknown";
    const WIFI80211A = "wifi80211a";
    const WIFI80211B = "wifi80211b";
    const WIFI80211G = "wifi80211g";
    const WIFI80211N = "wifi80211n";
    const WIFI80211AC = "wifi80211ac";
    const WIFI80211AX = "wifi80211ax";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}