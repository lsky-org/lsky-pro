<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ConditionalAccessClientApp File
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
* ConditionalAccessClientApp class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ConditionalAccessClientApp extends Enum
{
    /**
    * The Enum ConditionalAccessClientApp
    */
    const ALL = "all";
    const BROWSER = "browser";
    const MOBILE_APPS_AND_DESKTOP_CLIENTS = "mobileAppsAndDesktopClients";
    const EXCHANGE_ACTIVE_SYNC = "exchangeActiveSync";
    const EAS_SUPPORTED = "easSupported";
    const OTHER = "other";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}