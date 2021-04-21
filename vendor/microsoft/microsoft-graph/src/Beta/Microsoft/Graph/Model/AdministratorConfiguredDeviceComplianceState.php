<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AdministratorConfiguredDeviceComplianceState File
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
* AdministratorConfiguredDeviceComplianceState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AdministratorConfiguredDeviceComplianceState extends Enum
{
    /**
    * The Enum AdministratorConfiguredDeviceComplianceState
    */
    const BASED_ON_DEVICE_COMPLIANCE_POLICY = "basedOnDeviceCompliancePolicy";
    const NON_COMPLIANT = "nonCompliant";
}