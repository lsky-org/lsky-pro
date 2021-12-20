<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ConnectorGroupRegion File
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
* ConnectorGroupRegion class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ConnectorGroupRegion extends Enum
{
    /**
    * The Enum ConnectorGroupRegion
    */
    const NAM = "nam";
    const EUR = "eur";
    const AUS = "aus";
    const ASIA = "asia";
    const IND = "ind";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}