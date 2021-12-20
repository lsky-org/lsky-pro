<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ReferenceAttachmentProvider File
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
* ReferenceAttachmentProvider class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ReferenceAttachmentProvider extends Enum
{
    /**
    * The Enum ReferenceAttachmentProvider
    */
    const OTHER = "other";
    const ONE_DRIVE_BUSINESS = "oneDriveBusiness";
    const ONE_DRIVE_CONSUMER = "oneDriveConsumer";
    const DROPBOX = "dropbox";
}