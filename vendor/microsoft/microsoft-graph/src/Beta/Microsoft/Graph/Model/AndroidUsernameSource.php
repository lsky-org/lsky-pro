<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidUsernameSource File
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
* AndroidUsernameSource class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AndroidUsernameSource extends Enum
{
    /**
    * The Enum AndroidUsernameSource
    */
    const USERNAME = "username";
    const USER_PRINCIPAL_NAME = "userPrincipalName";
    const SAM_ACCOUNT_NAME = "samAccountName";
    const PRIMARY_SMTP_ADDRESS = "primarySmtpAddress";
}