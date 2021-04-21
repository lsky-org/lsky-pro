<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* FileVaultState File
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
* FileVaultState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class FileVaultState extends Enum
{
    /**
    * The Enum FileVaultState
    */
    const SUCCESS = "success";
    const DRIVE_ENCRYPTED_BY_USER = "driveEncryptedByUser";
    const USER_DEFERRED_ENCRYPTION = "userDeferredEncryption";
    const ESCROW_NOT_ENABLED = "escrowNotEnabled";
}