<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidForWorkAppConfigurationSchemaItemDataType File
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
* AndroidForWorkAppConfigurationSchemaItemDataType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AndroidForWorkAppConfigurationSchemaItemDataType extends Enum
{
    /**
    * The Enum AndroidForWorkAppConfigurationSchemaItemDataType
    */
    const GRAPHBOOL = "bool";
    const INTEGER = "integer";
    const GRAPHSTRING = "string";
    const CHOICE = "choice";
    const MULTISELECT = "multiselect";
    const BUNDLE = "bundle";
    const BUNDLE_ARRAY = "bundleArray";
    const HIDDEN = "hidden";
}