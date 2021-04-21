<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EdgeKioskModeRestrictionType File
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
* EdgeKioskModeRestrictionType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EdgeKioskModeRestrictionType extends Enum
{
    /**
    * The Enum EdgeKioskModeRestrictionType
    */
    const NOT_CONFIGURED = "notConfigured";
    const DIGITAL_SIGNAGE = "digitalSignage";
    const NORMAL_MODE = "normalMode";
    const PUBLIC_BROWSING_SINGLE_APP = "publicBrowsingSingleApp";
    const PUBLIC_BROWSING_MULTI_APP = "publicBrowsingMultiApp";
}