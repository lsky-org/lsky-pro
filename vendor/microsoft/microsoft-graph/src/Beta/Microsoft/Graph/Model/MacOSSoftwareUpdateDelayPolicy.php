<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MacOSSoftwareUpdateDelayPolicy File
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
* MacOSSoftwareUpdateDelayPolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MacOSSoftwareUpdateDelayPolicy extends Enum
{
    /**
    * The Enum MacOSSoftwareUpdateDelayPolicy
    */
    const NONE = "none";
    const DELAY_OS_UPDATE_VISIBILITY = "delayOSUpdateVisibility";
    const DELAY_APP_UPDATE_VISIBILITY = "delayAppUpdateVisibility";
}