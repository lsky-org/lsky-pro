<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidDeviceOwnerEnrollmentMode File
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
* AndroidDeviceOwnerEnrollmentMode class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AndroidDeviceOwnerEnrollmentMode extends Enum
{
    /**
    * The Enum AndroidDeviceOwnerEnrollmentMode
    */
    const CORPORATE_OWNED_DEDICATED_DEVICE = "corporateOwnedDedicatedDevice";
    const CORPORATE_OWNED_FULLY_MANAGED = "corporateOwnedFullyManaged";
    const CORPORATE_OWNED_WORK_PROFILE = "corporateOwnedWorkProfile";
}