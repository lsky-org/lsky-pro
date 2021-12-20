<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DefenderThreatAction File
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
* DefenderThreatAction class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DefenderThreatAction extends Enum
{
    /**
    * The Enum DefenderThreatAction
    */
    const DEVICE_DEFAULT = "deviceDefault";
    const CLEAN = "clean";
    const QUARANTINE = "quarantine";
    const REMOVE = "remove";
    const ALLOW = "allow";
    const USER_DEFINED = "userDefined";
    const BLOCK = "block";
}