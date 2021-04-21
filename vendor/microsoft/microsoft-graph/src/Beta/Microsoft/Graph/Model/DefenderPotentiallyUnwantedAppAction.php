<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DefenderPotentiallyUnwantedAppAction File
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
* DefenderPotentiallyUnwantedAppAction class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DefenderPotentiallyUnwantedAppAction extends Enum
{
    /**
    * The Enum DefenderPotentiallyUnwantedAppAction
    */
    const DEVICE_DEFAULT = "deviceDefault";
    const BLOCK = "block";
    const AUDIT = "audit";
}