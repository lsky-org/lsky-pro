<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* VpnEncryptionAlgorithmType File
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
* VpnEncryptionAlgorithmType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class VpnEncryptionAlgorithmType extends Enum
{
    /**
    * The Enum VpnEncryptionAlgorithmType
    */
    const AES256 = "aes256";
    const DES = "des";
    const TRIPLE_DES = "tripleDes";
    const AES128 = "aes128";
    const AES128_GCM = "aes128Gcm";
    const AES256_GCM = "aes256Gcm";
    const AES192 = "aes192";
    const AES192_GCM = "aes192Gcm";
}