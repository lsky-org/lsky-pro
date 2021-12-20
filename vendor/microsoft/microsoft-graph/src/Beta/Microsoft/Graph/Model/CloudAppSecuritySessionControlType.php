<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CloudAppSecuritySessionControlType File
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
* CloudAppSecuritySessionControlType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CloudAppSecuritySessionControlType extends Enum
{
    /**
    * The Enum CloudAppSecuritySessionControlType
    */
    const MCAS_CONFIGURED = "mcasConfigured";
    const MONITOR_ONLY = "monitorOnly";
    const BLOCK_DOWNLOADS = "blockDownloads";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}