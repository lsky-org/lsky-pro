<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrintMediaType File
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
* PrintMediaType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PrintMediaType extends Enum
{
    /**
    * The Enum PrintMediaType
    */
    const STATIONERY = "stationery";
    const TRANSPARENCY = "transparency";
    const ENVELOPE = "envelope";
    const ENVELOPE_PLAIN = "envelopePlain";
    const CONTINUOUS = "continuous";
    const SCREEN = "screen";
    const SCREEN_PAGED = "screenPaged";
    const CONTINUOUS_LONG = "continuousLong";
    const CONTINUOUS_SHORT = "continuousShort";
    const ENVELOPE_WINDOW = "envelopeWindow";
    const MULTI_PART_FORM = "multiPartForm";
    const MULTI_LAYER = "multiLayer";
    const LABELS = "labels";
}