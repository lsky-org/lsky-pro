<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* NetworkConnectionType File
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
* NetworkConnectionType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class NetworkConnectionType extends Enum
{
    /**
    * The Enum NetworkConnectionType
    */
    const UNKNOWN = "unknown";
    const WIRED = "wired";
    const WIFI = "wifi";
    const MOBILE = "mobile";
    const TUNNEL = "tunnel";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}