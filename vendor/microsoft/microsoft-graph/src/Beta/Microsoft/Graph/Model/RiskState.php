<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RiskState File
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
* RiskState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RiskState extends Enum
{
    /**
    * The Enum RiskState
    */
    const NONE = "none";
    const CONFIRMED_SAFE = "confirmedSafe";
    const REMEDIATED = "remediated";
    const DISMISSED = "dismissed";
    const AT_RISK = "atRisk";
    const CONFIRMED_COMPROMISED = "confirmedCompromised";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}