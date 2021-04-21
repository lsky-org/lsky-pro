<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrintColorMode File
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
* PrintColorMode class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PrintColorMode extends Enum
{
    /**
    * The Enum PrintColorMode
    */
    const BLACK_AND_WHITE = "blackAndWhite";
    const GRAYSCALE = "grayscale";
    const COLOR = "color";
    const AUTO = "auto";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}