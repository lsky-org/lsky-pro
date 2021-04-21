<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* VolumeType File
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
* VolumeType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class VolumeType extends Enum
{
    /**
    * The Enum VolumeType
    */
    const OPERATING_SYSTEM_VOLUME = "operatingSystemVolume";
    const FIXED_DATA_VOLUME = "fixedDataVolume";
    const REMOVABLE_DATA_VOLUME = "removableDataVolume";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}