<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessLevel File
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
* AccessLevel class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessLevel extends Enum
{
    /**
    * The Enum AccessLevel
    */
    const EVERYONE = "everyone";
    const INVITED = "invited";
    const LOCKED = "locked";
    const SAME_ENTERPRISE = "sameEnterprise";
    const SAME_ENTERPRISE_AND_FEDERATED = "sameEnterpriseAndFederated";
}