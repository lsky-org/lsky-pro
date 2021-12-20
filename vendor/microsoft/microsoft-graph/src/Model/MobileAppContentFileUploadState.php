<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MobileAppContentFileUploadState File
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
* MobileAppContentFileUploadState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MobileAppContentFileUploadState extends Enum
{
    /**
    * The Enum MobileAppContentFileUploadState
    */
    const SUCCESS = "success";
    const TRANSIENT_ERROR = "transientError";
    const ERROR = "error";
    const UNKNOWN = "unknown";
    const AZURE_STORAGE_URI_REQUEST_SUCCESS = "azureStorageUriRequestSuccess";
    const AZURE_STORAGE_URI_REQUEST_PENDING = "azureStorageUriRequestPending";
    const AZURE_STORAGE_URI_REQUEST_FAILED = "azureStorageUriRequestFailed";
    const AZURE_STORAGE_URI_REQUEST_TIMED_OUT = "azureStorageUriRequestTimedOut";
    const AZURE_STORAGE_URI_RENEWAL_SUCCESS = "azureStorageUriRenewalSuccess";
    const AZURE_STORAGE_URI_RENEWAL_PENDING = "azureStorageUriRenewalPending";
    const AZURE_STORAGE_URI_RENEWAL_FAILED = "azureStorageUriRenewalFailed";
    const AZURE_STORAGE_URI_RENEWAL_TIMED_OUT = "azureStorageUriRenewalTimedOut";
    const COMMIT_FILE_SUCCESS = "commitFileSuccess";
    const COMMIT_FILE_PENDING = "commitFilePending";
    const COMMIT_FILE_FAILED = "commitFileFailed";
    const COMMIT_FILE_TIMED_OUT = "commitFileTimedOut";
}