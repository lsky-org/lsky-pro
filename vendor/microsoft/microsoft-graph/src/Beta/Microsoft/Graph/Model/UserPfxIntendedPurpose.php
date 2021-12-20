<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserPfxIntendedPurpose File
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
* UserPfxIntendedPurpose class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserPfxIntendedPurpose extends Enum
{
    /**
    * The Enum UserPfxIntendedPurpose
    */
    const UNASSIGNED = "unassigned";
    const SMIME_ENCRYPTION = "smimeEncryption";
    const SMIME_SIGNING = "smimeSigning";
    const VPN = "vpn";
    const WIFI = "wifi";
}