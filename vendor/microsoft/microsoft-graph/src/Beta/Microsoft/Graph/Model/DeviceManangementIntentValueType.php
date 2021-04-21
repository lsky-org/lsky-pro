<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManangementIntentValueType File
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
* DeviceManangementIntentValueType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManangementIntentValueType extends Enum
{
    /**
    * The Enum DeviceManangementIntentValueType
    */
    const INTEGER = "integer";
    const BOOLEAN = "boolean";
    const GRAPHSTRING = "string";
    const COMPLEX = "complex";
    const COLLECTION = "collection";
    const ABSTRACT_COMPLEX = "abstractComplex";
}