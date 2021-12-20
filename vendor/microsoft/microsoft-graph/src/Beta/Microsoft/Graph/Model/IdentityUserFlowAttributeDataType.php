<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IdentityUserFlowAttributeDataType File
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
* IdentityUserFlowAttributeDataType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IdentityUserFlowAttributeDataType extends Enum
{
    /**
    * The Enum IdentityUserFlowAttributeDataType
    */
    const GRAPHSTRING = "string";
    const BOOLEAN = "boolean";
    const INT64 = "int64";
    const STRING_COLLECTION = "stringCollection";
    const DATE_TIME = "dateTime";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}