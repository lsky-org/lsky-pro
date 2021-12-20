<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidForWorkSyncStatus File
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
* AndroidForWorkSyncStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AndroidForWorkSyncStatus extends Enum
{
    /**
    * The Enum AndroidForWorkSyncStatus
    */
    const SUCCESS = "success";
    const CREDENTIALS_NOT_VALID = "credentialsNotValid";
    const ANDROID_FOR_WORK_API_ERROR = "androidForWorkApiError";
    const MANAGEMENT_SERVICE_ERROR = "managementServiceError";
    const UNKNOWN_ERROR = "unknownError";
    const NONE = "none";
}