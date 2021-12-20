<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AttributeFlowType File
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
* AttributeFlowType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AttributeFlowType extends Enum
{
    /**
    * The Enum AttributeFlowType
    */
    const ALWAYS = "always";
    const OBJECT_ADD_ONLY = "objectAddOnly";
    const MULTI_VALUE_ADD_ONLY = "multiValueAddOnly";
    const VALUE_ADD_ONLY = "valueAddOnly";
    const ATTRIBUTE_ADD_ONLY = "attributeAddOnly";
}