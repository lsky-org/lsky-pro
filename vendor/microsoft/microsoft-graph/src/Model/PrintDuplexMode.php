<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrintDuplexMode File
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
* PrintDuplexMode class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PrintDuplexMode extends Enum
{
    /**
    * The Enum PrintDuplexMode
    */
    const FLIP_ON_LONG_EDGE = "flipOnLongEdge";
    const FLIP_ON_SHORT_EDGE = "flipOnShortEdge";
    const ONE_SIDED = "oneSided";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}