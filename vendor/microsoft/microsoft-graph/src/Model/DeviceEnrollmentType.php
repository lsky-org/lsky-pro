<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceEnrollmentType File
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
* DeviceEnrollmentType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceEnrollmentType extends Enum
{
    /**
    * The Enum DeviceEnrollmentType
    */
    const UNKNOWN = "unknown";
    const USER_ENROLLMENT = "userEnrollment";
    const DEVICE_ENROLLMENT_MANAGER = "deviceEnrollmentManager";
    const APPLE_BULK_WITH_USER = "appleBulkWithUser";
    const APPLE_BULK_WITHOUT_USER = "appleBulkWithoutUser";
    const WINDOWS_AZURE_AD_JOIN = "windowsAzureADJoin";
    const WINDOWS_BULK_USERLESS = "windowsBulkUserless";
    const WINDOWS_AUTO_ENROLLMENT = "windowsAutoEnrollment";
    const WINDOWS_BULK_AZURE_DOMAIN_JOIN = "windowsBulkAzureDomainJoin";
    const WINDOWS_CO_MANAGEMENT = "windowsCoManagement";
}