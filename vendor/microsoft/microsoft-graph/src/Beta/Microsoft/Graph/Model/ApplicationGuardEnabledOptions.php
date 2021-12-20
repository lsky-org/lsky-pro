<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ApplicationGuardEnabledOptions File
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
* ApplicationGuardEnabledOptions class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ApplicationGuardEnabledOptions extends Enum
{
    /**
    * The Enum ApplicationGuardEnabledOptions
    */
    const NOT_CONFIGURED = "notConfigured";
    const ENABLED_FOR_EDGE = "enabledForEdge";
    const ENABLED_FOR_OFFICE = "enabledForOffice";
    const ENABLED_FOR_EDGE_AND_OFFICE = "enabledForEdgeAndOffice";
}