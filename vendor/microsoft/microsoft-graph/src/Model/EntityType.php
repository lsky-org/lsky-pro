<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EntityType File
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
* EntityType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EntityType extends Enum
{
    /**
    * The Enum EntityType
    */
    const EVENT = "event";
    const MESSAGE = "message";
    const DRIVE_ITEM = "driveItem";
    const EXTERNAL_ITEM = "externalItem";
    const SITE = "site";
    const GRAPHLIST = "list";
    const LIST_ITEM = "listItem";
    const DRIVE = "drive";
    const UNKNOWNFUTUREVALUE = "unknownfuturevalue";
}