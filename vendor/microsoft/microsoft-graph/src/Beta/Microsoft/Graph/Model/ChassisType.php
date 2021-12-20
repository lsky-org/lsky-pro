<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ChassisType File
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
* ChassisType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ChassisType extends Enum
{
    /**
    * The Enum ChassisType
    */
    const UNKNOWN = "unknown";
    const DESKTOP = "desktop";
    const LAPTOP = "laptop";
    const WORKS_WORKSTATION = "worksWorkstation";
    const ENTERPRISE_SERVER = "enterpriseServer";
    const PHONE = "phone";
    const TABLET = "tablet";
    const MOBILE_OTHER = "mobileOther";
    const MOBILE_UNKNOWN = "mobileUnknown";
}