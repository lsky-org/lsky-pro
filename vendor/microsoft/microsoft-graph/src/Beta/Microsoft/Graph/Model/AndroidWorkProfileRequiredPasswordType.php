<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidWorkProfileRequiredPasswordType File
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
* AndroidWorkProfileRequiredPasswordType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AndroidWorkProfileRequiredPasswordType extends Enum
{
    /**
    * The Enum AndroidWorkProfileRequiredPasswordType
    */
    const DEVICE_DEFAULT = "deviceDefault";
    const LOW_SECURITY_BIOMETRIC = "lowSecurityBiometric";
    const REQUIRED = "required";
    const AT_LEAST_NUMERIC = "atLeastNumeric";
    const NUMERIC_COMPLEX = "numericComplex";
    const AT_LEAST_ALPHABETIC = "atLeastAlphabetic";
    const AT_LEAST_ALPHANUMERIC = "atLeastAlphanumeric";
    const ALPHANUMERIC_WITH_SYMBOLS = "alphanumericWithSymbols";
}