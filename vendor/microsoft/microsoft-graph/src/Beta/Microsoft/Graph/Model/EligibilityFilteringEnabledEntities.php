<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EligibilityFilteringEnabledEntities File
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
* EligibilityFilteringEnabledEntities class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EligibilityFilteringEnabledEntities extends Enum
{
    /**
    * The Enum EligibilityFilteringEnabledEntities
    */
    const NONE = "none";
    const SWAP_REQUEST = "swapRequest";
    const OFFER_SHIFT_REQUEST = "offerShiftRequest";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}