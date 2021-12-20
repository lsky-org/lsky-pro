<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DirectoryDefinitionDiscoverabilities File
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
* DirectoryDefinitionDiscoverabilities class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DirectoryDefinitionDiscoverabilities extends Enum
{
    /**
    * The Enum DirectoryDefinitionDiscoverabilities
    */
    const NONE = "none";
    const ATTRIBUTE_NAMES = "attributeNames";
    const ATTRIBUTE_DATA_TYPES = "attributeDataTypes";
    const ATTRIBUTE_READ_ONLY = "attributeReadOnly";
    const REFERENCE_ATTRIBUTES = "referenceAttributes";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}