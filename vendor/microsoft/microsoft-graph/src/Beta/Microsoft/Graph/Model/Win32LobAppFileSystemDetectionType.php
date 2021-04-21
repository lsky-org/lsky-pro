<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Win32LobAppFileSystemDetectionType File
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
* Win32LobAppFileSystemDetectionType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Win32LobAppFileSystemDetectionType extends Enum
{
    /**
    * The Enum Win32LobAppFileSystemDetectionType
    */
    const NOT_CONFIGURED = "notConfigured";
    const EXISTS = "exists";
    const MODIFIED_DATE = "modifiedDate";
    const CREATED_DATE = "createdDate";
    const VERSION = "version";
    const SIZE_IN_MB = "sizeInMB";
    const DOES_NOT_EXIST = "doesNotExist";
}