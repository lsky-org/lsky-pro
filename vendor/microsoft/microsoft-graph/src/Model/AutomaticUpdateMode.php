<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AutomaticUpdateMode File
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
* AutomaticUpdateMode class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AutomaticUpdateMode extends Enum
{
    /**
    * The Enum AutomaticUpdateMode
    */
    const USER_DEFINED = "userDefined";
    const NOTIFY_DOWNLOAD = "notifyDownload";
    const AUTO_INSTALL_AT_MAINTENANCE_TIME = "autoInstallAtMaintenanceTime";
    const AUTO_INSTALL_AND_REBOOT_AT_MAINTENANCE_TIME = "autoInstallAndRebootAtMaintenanceTime";
    const AUTO_INSTALL_AND_REBOOT_AT_SCHEDULED_TIME = "autoInstallAndRebootAtScheduledTime";
    const AUTO_INSTALL_AND_REBOOT_WITHOUT_END_USER_CONTROL = "autoInstallAndRebootWithoutEndUserControl";
}