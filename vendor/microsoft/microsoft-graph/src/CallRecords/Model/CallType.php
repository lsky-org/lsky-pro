<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CallType File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\CallRecords\Model;

use Microsoft\Graph\Core\Enum;

/**
* CallType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CallType extends Enum
{
    /**
    * The Enum CallType
    */
    const UNKNOWN = "unknown";
    const GROUP_CALL = "groupCall";
    const PEER_TO_PEER = "peerToPeer";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}