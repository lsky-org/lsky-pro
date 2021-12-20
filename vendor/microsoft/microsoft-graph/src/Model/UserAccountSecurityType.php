<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserAccountSecurityType File
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
* UserAccountSecurityType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserAccountSecurityType extends Enum
{
    /**
    * The Enum UserAccountSecurityType
    */
    const UNKNOWN = "unknown";
    const STANDARD = "standard";
    const POWER = "power";
    const ADMINISTRATOR = "administrator";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}