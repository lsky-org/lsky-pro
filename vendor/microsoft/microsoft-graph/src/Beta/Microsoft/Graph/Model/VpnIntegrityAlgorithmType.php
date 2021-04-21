<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* VpnIntegrityAlgorithmType File
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
* VpnIntegrityAlgorithmType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class VpnIntegrityAlgorithmType extends Enum
{
    /**
    * The Enum VpnIntegrityAlgorithmType
    */
    const SHA2_256 = "sha2256";
    const SHA1_96 = "sha196";
    const SHA1_160 = "sha1160";
    const SHA2_384 = "sha2384";
    const SHA2_512 = "sha2512";
    const MD5 = "md5";
}