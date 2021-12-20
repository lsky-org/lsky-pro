<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Label File
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
* Label class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Label extends Enum
{
    /**
    * The Enum Label
    */
    const TITLE = "title";
    const URL = "url";
    const CREATED_BY = "createdBy";
    const LAST_MODIFIED_BY = "lastModifiedBy";
    const AUTHORS = "authors";
    const CREATED_DATE_TIME = "createdDateTime";
    const LAST_MODIFIED_DATE_TIME = "lastModifiedDateTime";
    const FILE_NAME = "fileName";
    const FILE_EXTENSION = "fileExtension";
}