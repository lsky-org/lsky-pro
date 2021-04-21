<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IntendedPurpose File
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
* IntendedPurpose class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IntendedPurpose extends Enum
{
    /**
    * The Enum IntendedPurpose
    */
    const UNASSIGNED = "unassigned";
    const SMIME_ENCRYPTION = "smimeEncryption";
    const SMIME_SIGNING = "smimeSigning";
    const VPN = "vpn";
    const WIFI = "wifi";
}