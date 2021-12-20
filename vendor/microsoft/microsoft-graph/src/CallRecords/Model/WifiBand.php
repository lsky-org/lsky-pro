<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WifiBand File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\CallRecords\Model;

use Microsoft\Graph\Core\Enum;

/**
* WifiBand class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WifiBand extends Enum
{
    /**
    * The Enum WifiBand
    */
    const UNKNOWN = "unknown";
    const FREQUENCY24_G_HZ = "frequency24GHz";
    const FREQUENCY50_G_HZ = "frequency50GHz";
    const FREQUENCY60_G_HZ = "frequency60GHz";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}