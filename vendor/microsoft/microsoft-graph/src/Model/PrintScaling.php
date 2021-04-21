<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrintScaling File
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
* PrintScaling class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PrintScaling extends Enum
{
    /**
    * The Enum PrintScaling
    */
    const AUTO = "auto";
    const SHRINK_TO_FIT = "shrinkToFit";
    const FILL = "fill";
    const FIT = "fit";
    const NONE = "none";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}