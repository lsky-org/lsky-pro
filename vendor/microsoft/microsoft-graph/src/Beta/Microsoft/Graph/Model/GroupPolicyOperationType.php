<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* GroupPolicyOperationType File
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
* GroupPolicyOperationType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class GroupPolicyOperationType extends Enum
{
    /**
    * The Enum GroupPolicyOperationType
    */
    const NONE = "none";
    const UPLOAD = "upload";
    const UPLOAD_NEW_VERSION = "uploadNewVersion";
    const ADD_LANGUAGE_FILES = "addLanguageFiles";
    const REMOVE_LANGUAGE_FILES = "removeLanguageFiles";
    const UPDATE_LANGUAGE_FILES = "updateLanguageFiles";
    const REMOVE = "remove";
}