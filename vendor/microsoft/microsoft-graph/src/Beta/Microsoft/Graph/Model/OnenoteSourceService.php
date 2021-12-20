<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OnenoteSourceService File
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
* OnenoteSourceService class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OnenoteSourceService extends Enum
{
    /**
    * The Enum OnenoteSourceService
    */
    const UNKNOWN = "unknown";
    const ONE_DRIVE = "oneDrive";
    const ONE_DRIVE_FOR_BUSINESS = "oneDriveForBusiness";
    const ON_PREM_ONE_DRIVE_FOR_BUSINESS = "onPremOneDriveForBusiness";
}