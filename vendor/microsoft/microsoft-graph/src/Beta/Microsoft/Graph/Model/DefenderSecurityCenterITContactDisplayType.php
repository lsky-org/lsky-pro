<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DefenderSecurityCenterITContactDisplayType File
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
* DefenderSecurityCenterITContactDisplayType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DefenderSecurityCenterITContactDisplayType extends Enum
{
    /**
    * The Enum DefenderSecurityCenterITContactDisplayType
    */
    const NOT_CONFIGURED = "notConfigured";
    const DISPLAY_IN_APP_AND_IN_NOTIFICATIONS = "displayInAppAndInNotifications";
    const DISPLAY_ONLY_IN_APP = "displayOnlyInApp";
    const DISPLAY_ONLY_IN_NOTIFICATIONS = "displayOnlyInNotifications";
}