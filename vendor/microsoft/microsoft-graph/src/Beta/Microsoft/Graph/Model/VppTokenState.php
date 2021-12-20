<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* VppTokenState File
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
* VppTokenState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class VppTokenState extends Enum
{
    /**
    * The Enum VppTokenState
    */
    const UNKNOWN = "unknown";
    const VALID = "valid";
    const EXPIRED = "expired";
    const INVALID = "invalid";
    const ASSIGNED_TO_EXTERNAL_MDM = "assignedToExternalMDM";
    const DUPLICATE_LOCATION_ID = "duplicateLocationId";
}