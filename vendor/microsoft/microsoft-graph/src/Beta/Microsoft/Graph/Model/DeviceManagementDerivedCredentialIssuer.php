<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementDerivedCredentialIssuer File
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
* DeviceManagementDerivedCredentialIssuer class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementDerivedCredentialIssuer extends Enum
{
    /**
    * The Enum DeviceManagementDerivedCredentialIssuer
    */
    const INTERCEDE = "intercede";
    const ENTRUST_DATACARD = "entrustDatacard";
    const PUREBRED = "purebred";
    const X_TEC = "xTec";
}