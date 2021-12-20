<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidDeviceOwnerKioskModeFolderIcon File
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
* AndroidDeviceOwnerKioskModeFolderIcon class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AndroidDeviceOwnerKioskModeFolderIcon extends Enum
{
    /**
    * The Enum AndroidDeviceOwnerKioskModeFolderIcon
    */
    const NOT_CONFIGURED = "notConfigured";
    const DARK_SQUARE = "darkSquare";
    const DARK_CIRCLE = "darkCircle";
    const LIGHT_SQUARE = "lightSquare";
    const LIGHT_CIRCLE = "lightCircle";
}