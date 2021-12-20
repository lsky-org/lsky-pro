<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* FileHashType File
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
* FileHashType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class FileHashType extends Enum
{
    /**
    * The Enum FileHashType
    */
    const UNKNOWN = "unknown";
    const SHA1 = "sha1";
    const SHA256 = "sha256";
    const MD5 = "md5";
    const AUTHENTICODE_HASH256 = "authenticodeHash256";
    const LS_HASH = "lsHash";
    const CTPH = "ctph";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}