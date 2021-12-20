<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MacOSFileVaultRecoveryKeyTypes File
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
* MacOSFileVaultRecoveryKeyTypes class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MacOSFileVaultRecoveryKeyTypes extends Enum
{
    /**
    * The Enum MacOSFileVaultRecoveryKeyTypes
    */
    const NOT_CONFIGURED = "notConfigured";
    const INSTITUTIONAL_RECOVERY_KEY = "institutionalRecoveryKey";
    const PERSONAL_RECOVERY_KEY = "personalRecoveryKey";
}