<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidDeviceOwnerRequiredPasswordType File
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
* AndroidDeviceOwnerRequiredPasswordType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AndroidDeviceOwnerRequiredPasswordType extends Enum
{
    /**
    * The Enum AndroidDeviceOwnerRequiredPasswordType
    */
    const DEVICE_DEFAULT = "deviceDefault";
    const REQUIRED = "required";
    const NUMERIC = "numeric";
    const NUMERIC_COMPLEX = "numericComplex";
    const ALPHABETIC = "alphabetic";
    const ALPHANUMERIC = "alphanumeric";
    const ALPHANUMERIC_WITH_SYMBOLS = "alphanumericWithSymbols";
    const LOW_SECURITY_BIOMETRIC = "lowSecurityBiometric";
    const CUSTOM_PASSWORD = "customPassword";
}