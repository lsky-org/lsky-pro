<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ApplicationGuardBlockFileTransferType File
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
* ApplicationGuardBlockFileTransferType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ApplicationGuardBlockFileTransferType extends Enum
{
    /**
    * The Enum ApplicationGuardBlockFileTransferType
    */
    const NOT_CONFIGURED = "notConfigured";
    const BLOCK_IMAGE_AND_TEXT_FILE = "blockImageAndTextFile";
    const BLOCK_IMAGE_FILE = "blockImageFile";
    const BLOCK_NONE = "blockNone";
    const BLOCK_TEXT_FILE = "blockTextFile";
}