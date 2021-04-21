<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AppInstallControlType File
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
* AppInstallControlType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AppInstallControlType extends Enum
{
    /**
    * The Enum AppInstallControlType
    */
    const NOT_CONFIGURED = "notConfigured";
    const ANYWHERE = "anywhere";
    const STORE_ONLY = "storeOnly";
    const RECOMMENDATIONS = "recommendations";
    const PREFER_STORE = "preferStore";
}