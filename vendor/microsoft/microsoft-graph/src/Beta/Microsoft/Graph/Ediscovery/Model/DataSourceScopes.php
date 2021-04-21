<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DataSourceScopes File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Ediscovery\Model;

use Microsoft\Graph\Core\Enum;

/**
* DataSourceScopes class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DataSourceScopes extends Enum
{
    /**
    * The Enum DataSourceScopes
    */
    const NONE = "none";
    const ALL_TENANT_MAILBOXES = "allTenantMailboxes";
    const ALL_TENANT_SITES = "allTenantSites";
    const ALL_CASE_CUSTODIANS = "allCaseCustodians";
    const ALL_CASE_NONCUSTODIAL_DATA_SOURCES = "allCaseNoncustodialDataSources";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}