<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* FirewallPreSharedKeyEncodingMethodType File
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
* FirewallPreSharedKeyEncodingMethodType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class FirewallPreSharedKeyEncodingMethodType extends Enum
{
    /**
    * The Enum FirewallPreSharedKeyEncodingMethodType
    */
    const DEVICE_DEFAULT = "deviceDefault";
    const NONE = "none";
    const UT_F8 = "utF8";
}