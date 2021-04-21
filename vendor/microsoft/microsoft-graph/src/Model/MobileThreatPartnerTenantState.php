<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MobileThreatPartnerTenantState File
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
* MobileThreatPartnerTenantState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MobileThreatPartnerTenantState extends Enum
{
    /**
    * The Enum MobileThreatPartnerTenantState
    */
    const UNAVAILABLE = "unavailable";
    const AVAILABLE = "available";
    const ENABLED = "enabled";
    const UNRESPONSIVE = "unresponsive";
}