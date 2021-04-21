<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IosWallpaperDisplayLocation File
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
* IosWallpaperDisplayLocation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IosWallpaperDisplayLocation extends Enum
{
    /**
    * The Enum IosWallpaperDisplayLocation
    */
    const NOT_CONFIGURED = "notConfigured";
    const LOCK_SCREEN = "lockScreen";
    const HOME_SCREEN = "homeScreen";
    const LOCK_AND_HOME_SCREENS = "lockAndHomeScreens";
}