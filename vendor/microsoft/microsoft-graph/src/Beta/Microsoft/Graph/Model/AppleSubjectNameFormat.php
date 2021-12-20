<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AppleSubjectNameFormat File
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
* AppleSubjectNameFormat class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AppleSubjectNameFormat extends Enum
{
    /**
    * The Enum AppleSubjectNameFormat
    */
    const COMMON_NAME = "commonName";
    const COMMON_NAME_AS_EMAIL = "commonNameAsEmail";
    const CUSTOM = "custom";
    const COMMON_NAME_INCLUDING_EMAIL = "commonNameIncludingEmail";
    const COMMON_NAME_AS_IMEI = "commonNameAsIMEI";
    const COMMON_NAME_AS_SERIAL_NUMBER = "commonNameAsSerialNumber";
}