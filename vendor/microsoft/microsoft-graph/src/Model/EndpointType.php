<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EndpointType File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

use Microsoft\Graph\Core\Enum;

/**
* EndpointType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EndpointType extends Enum
{
    /**
    * The Enum EndpointType
    */
    const GRAPHDEFAULT = "default";
    const VOICEMAIL = "voicemail";
    const SKYPE_FOR_BUSINESS = "skypeForBusiness";
    const SKYPE_FOR_BUSINESS_VOIP_PHONE = "skypeForBusinessVoipPhone";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}