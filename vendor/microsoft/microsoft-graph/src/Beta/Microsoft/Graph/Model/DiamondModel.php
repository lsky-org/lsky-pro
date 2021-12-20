<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DiamondModel File
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
* DiamondModel class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DiamondModel extends Enum
{
    /**
    * The Enum DiamondModel
    */
    const UNKNOWN = "unknown";
    const ADVERSARY = "adversary";
    const CAPABILITY = "capability";
    const INFRASTRUCTURE = "infrastructure";
    const VICTIM = "victim";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}