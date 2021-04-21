<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MobileAppIntent File
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
* MobileAppIntent class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MobileAppIntent extends Enum
{
    /**
    * The Enum MobileAppIntent
    */
    const AVAILABLE = "available";
    const NOT_AVAILABLE = "notAvailable";
    const REQUIRED_INSTALL = "requiredInstall";
    const REQUIRED_UNINSTALL = "requiredUninstall";
    const REQUIRED_AND_AVAILABLE_INSTALL = "requiredAndAvailableInstall";
    const AVAILABLE_INSTALL_WITHOUT_ENROLLMENT = "availableInstallWithoutEnrollment";
    const EXCLUDE = "exclude";
}