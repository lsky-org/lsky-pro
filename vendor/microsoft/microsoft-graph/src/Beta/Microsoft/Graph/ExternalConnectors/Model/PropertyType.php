<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PropertyType File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\ExternalConnectors\Model;

use Microsoft\Graph\Core\Enum;

/**
* PropertyType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PropertyType extends Enum
{
    /**
    * The Enum PropertyType
    */
    const GRAPHSTRING = "string";
    const INT64 = "int64";
    const DOUBLE = "double";
    const DATE_TIME = "dateTime";
    const BOOLEAN = "boolean";
    const STRING_COLLECTION = "stringCollection";
    const INT64_COLLECTION = "int64Collection";
    const DOUBLE_COLLECTION = "doubleCollection";
    const DATE_TIME_COLLECTION = "dateTimeCollection";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}