<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OfficeProductId File
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
* OfficeProductId class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OfficeProductId extends Enum
{
    /**
    * The Enum OfficeProductId
    */
    const O365_PRO_PLUS_RETAIL = "o365ProPlusRetail";
    const O365_BUSINESS_RETAIL = "o365BusinessRetail";
    const VISIO_PRO_RETAIL = "visioProRetail";
    const PROJECT_PRO_RETAIL = "projectProRetail";
}