<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RecipientScopeType File
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
* RecipientScopeType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RecipientScopeType extends Enum
{
    /**
    * The Enum RecipientScopeType
    */
    const NONE = "none";
    const INTERNAL = "internal";
    const EXTERNAL = "external";
    const EXTERNAL_PARTNER = "externalPartner";
    const EXTERNAL_NON_PARTNER = "externalNonPartner";
}