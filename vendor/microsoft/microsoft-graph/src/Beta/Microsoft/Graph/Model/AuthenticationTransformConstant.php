<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AuthenticationTransformConstant File
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
* AuthenticationTransformConstant class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AuthenticationTransformConstant extends Enum
{
    /**
    * The Enum AuthenticationTransformConstant
    */
    const MD5_96 = "md596";
    const SHA1_96 = "sha196";
    const SHA_256_128 = "sha256128";
    const AES128_GCM = "aes128Gcm";
    const AES192_GCM = "aes192Gcm";
    const AES256_GCM = "aes256Gcm";
}