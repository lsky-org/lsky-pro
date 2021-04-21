<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OnPremisesPublishingType File
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
* OnPremisesPublishingType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OnPremisesPublishingType extends Enum
{
    /**
    * The Enum OnPremisesPublishingType
    */
    const APPLICATION_PROXY = "applicationProxy";
    const EXCHANGE_ONLINE = "exchangeOnline";
    const AUTHENTICATION = "authentication";
    const PROVISIONING = "provisioning";
    const INTUNE_PFX = "intunePfx";
    const OFLINE_DOMAIN_JOIN = "oflineDomainJoin";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}