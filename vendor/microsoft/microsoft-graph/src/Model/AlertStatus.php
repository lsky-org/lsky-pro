<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AlertStatus File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

use Microsoft\Graph\Core\Enum;

/**
* AlertStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AlertStatus extends Enum
{
    /**
    * The Enum AlertStatus
    */
    const UNKNOWN = "unknown";
    const NEW_ALERT = "newAlert";
    const IN_PROGRESS = "inProgress";
    const RESOLVED = "resolved";
    const DISMISSED = "dismissed";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}