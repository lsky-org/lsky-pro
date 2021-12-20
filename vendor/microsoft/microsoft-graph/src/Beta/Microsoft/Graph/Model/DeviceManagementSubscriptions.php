<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementSubscriptions File
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
* DeviceManagementSubscriptions class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementSubscriptions extends Enum
{
    /**
    * The Enum DeviceManagementSubscriptions
    */
    const NONE = "none";
    const INTUNE = "intune";
    const OFFICE365 = "office365";
    const INTUNE_PREMIUM = "intunePremium";
    const INTUNE__EDU = "intuneEDU";
    const INTUNE__SMB = "intuneSMB";
}