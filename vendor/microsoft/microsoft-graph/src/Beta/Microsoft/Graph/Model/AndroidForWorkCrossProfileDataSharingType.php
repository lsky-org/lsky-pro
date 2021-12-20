<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidForWorkCrossProfileDataSharingType File
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
* AndroidForWorkCrossProfileDataSharingType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AndroidForWorkCrossProfileDataSharingType extends Enum
{
    /**
    * The Enum AndroidForWorkCrossProfileDataSharingType
    */
    const DEVICE_DEFAULT = "deviceDefault";
    const PREVENT_ANY = "preventAny";
    const ALLOW_PERSONAL_TO_WORK = "allowPersonalToWork";
    const NO_RESTRICTIONS = "noRestrictions";
}