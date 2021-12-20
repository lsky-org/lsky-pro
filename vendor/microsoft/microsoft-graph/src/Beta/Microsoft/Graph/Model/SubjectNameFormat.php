<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SubjectNameFormat File
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
* SubjectNameFormat class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SubjectNameFormat extends Enum
{
    /**
    * The Enum SubjectNameFormat
    */
    const COMMON_NAME = "commonName";
    const COMMON_NAME_INCLUDING_EMAIL = "commonNameIncludingEmail";
    const COMMON_NAME_AS_EMAIL = "commonNameAsEmail";
    const CUSTOM = "custom";
    const COMMON_NAME_AS_IMEI = "commonNameAsIMEI";
    const COMMON_NAME_AS_SERIAL_NUMBER = "commonNameAsSerialNumber";
    const COMMON_NAME_AS_AAD_DEVICE_ID = "commonNameAsAadDeviceId";
    const COMMON_NAME_AS_INTUNE_DEVICE_ID = "commonNameAsIntuneDeviceId";
    const COMMON_NAME_AS_DURABLE_DEVICE_ID = "commonNameAsDurableDeviceId";
}