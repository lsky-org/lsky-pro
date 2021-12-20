<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ExportOptions File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Ediscovery\Model;

use Microsoft\Graph\Core\Enum;

/**
* ExportOptions class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ExportOptions extends Enum
{
    /**
    * The Enum ExportOptions
    */
    const ORIGINAL_FILES = "originalFiles";
    const TEXT = "text";
    const PDF_REPLACEMENT = "pdfReplacement";
    const FILE_INFO = "fileInfo";
    const TAGS = "tags";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}