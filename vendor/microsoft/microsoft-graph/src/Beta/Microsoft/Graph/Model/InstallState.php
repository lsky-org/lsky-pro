<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* InstallState File
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
* InstallState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class InstallState extends Enum
{
    /**
    * The Enum InstallState
    */
    const NOT_APPLICABLE = "notApplicable";
    const INSTALLED = "installed";
    const FAILED = "failed";
    const NOT_INSTALLED = "notInstalled";
    const UNINSTALL_FAILED = "uninstallFailed";
    const UNKNOWN = "unknown";
}