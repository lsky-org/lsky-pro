<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RegistryValueType File
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
* RegistryValueType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RegistryValueType extends Enum
{
    /**
    * The Enum RegistryValueType
    */
    const UNKNOWN = "unknown";
    const BINARY = "binary";
    const DWORD = "dword";
    const DWORD_LITTLE_ENDIAN = "dwordLittleEndian";
    const DWORD_BIG_ENDIAN = "dwordBigEndian";
    const EXPAND_SZ = "expandSz";
    const LINK = "link";
    const MULTI_SZ = "multiSz";
    const NONE = "none";
    const QWORD = "qword";
    const QWORDLITTLE_ENDIAN = "qwordlittleEndian";
    const SZ = "sz";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}