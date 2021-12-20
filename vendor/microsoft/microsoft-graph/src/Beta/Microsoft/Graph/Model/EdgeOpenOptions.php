<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EdgeOpenOptions File
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
* EdgeOpenOptions class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EdgeOpenOptions extends Enum
{
    /**
    * The Enum EdgeOpenOptions
    */
    const NOT_CONFIGURED = "notConfigured";
    const START_PAGE = "startPage";
    const NEW_TAB_PAGE = "newTabPage";
    const PREVIOUS_PAGES = "previousPages";
    const SPECIFIC_PAGES = "specificPages";
}