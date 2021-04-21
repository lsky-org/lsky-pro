<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OfficeUpdateChannel File
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
* OfficeUpdateChannel class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OfficeUpdateChannel extends Enum
{
    /**
    * The Enum OfficeUpdateChannel
    */
    const NONE = "none";
    const CURRENT = "current";
    const DEFERRED = "deferred";
    const FIRST_RELEASE_CURRENT = "firstReleaseCurrent";
    const FIRST_RELEASE_DEFERRED = "firstReleaseDeferred";
    const MONTHLY_ENTERPRISE = "monthlyEnterprise";
}