<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ExpirationPatternType File
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
* ExpirationPatternType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ExpirationPatternType extends Enum
{
    /**
    * The Enum ExpirationPatternType
    */
    const NOT_SPECIFIED = "notSpecified";
    const NO_EXPIRATION = "noExpiration";
    const AFTER_DATE_TIME = "afterDateTime";
    const AFTER_DURATION = "afterDuration";
}