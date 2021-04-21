<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RiskDetectionTimingType File
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
* RiskDetectionTimingType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RiskDetectionTimingType extends Enum
{
    /**
    * The Enum RiskDetectionTimingType
    */
    const NOT_DEFINED = "notDefined";
    const REALTIME = "realtime";
    const NEAR_REALTIME = "nearRealtime";
    const OFFLINE = "offline";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}