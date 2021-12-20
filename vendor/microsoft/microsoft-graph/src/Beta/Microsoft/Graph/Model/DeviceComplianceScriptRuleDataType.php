<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceComplianceScriptRuleDataType File
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
* DeviceComplianceScriptRuleDataType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceComplianceScriptRuleDataType extends Enum
{
    /**
    * The Enum DeviceComplianceScriptRuleDataType
    */
    const NONE = "none";
    const BOOLEAN = "boolean";
    const INT64 = "int64";
    const DOUBLE = "double";
    const GRAPHSTRING = "string";
    const DATE_TIME = "dateTime";
    const VERSION = "version";
    const BASE64 = "base64";
    const XML = "xml";
    const BOOLEAN_ARRAY = "booleanArray";
    const INT64_ARRAY = "int64Array";
    const DOUBLE_ARRAY = "doubleArray";
    const STRING_ARRAY = "stringArray";
    const DATE_TIME_ARRAY = "dateTimeArray";
    const VERSION_ARRAY = "versionArray";
}