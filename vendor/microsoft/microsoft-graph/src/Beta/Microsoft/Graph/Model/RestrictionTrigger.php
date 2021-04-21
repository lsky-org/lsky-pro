<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RestrictionTrigger File
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
* RestrictionTrigger class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RestrictionTrigger extends Enum
{
    /**
    * The Enum RestrictionTrigger
    */
    const COPY_PASTE = "copyPaste";
    const COPY_TO_NETWORK_SHARE = "copyToNetworkShare";
    const COPY_TO_REMOVABLE_MEDIA = "copyToRemovableMedia";
    const SCREEN_CAPTURE = "screenCapture";
    const GRAPHPRINT = "print";
    const CLOUD_EGRESS = "cloudEgress";
    const UNALLOWED_APPS = "unallowedApps";
}