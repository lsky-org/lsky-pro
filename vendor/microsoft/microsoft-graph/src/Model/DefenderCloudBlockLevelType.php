<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DefenderCloudBlockLevelType File
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
* DefenderCloudBlockLevelType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DefenderCloudBlockLevelType extends Enum
{
    /**
    * The Enum DefenderCloudBlockLevelType
    */
    const NOT_CONFIGURED = "notConfigured";
    const HIGH = "high";
    const HIGH_PLUS = "highPlus";
    const ZERO_TOLERANCE = "zeroTolerance";
}