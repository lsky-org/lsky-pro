<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PersonRelationship File
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
* PersonRelationship class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PersonRelationship extends Enum
{
    /**
    * The Enum PersonRelationship
    */
    const MANAGER = "manager";
    const COLLEAGUE = "colleague";
    const DIRECT_REPORT = "directReport";
    const DOT_LINE_REPORT = "dotLineReport";
    const ASSISTANT = "assistant";
    const DOT_LINE_MANAGER = "dotLineManager";
    const ALTERNATE_CONTACT = "alternateContact";
    const FRIEND = "friend";
    const SPOUSE = "spouse";
    const SIBLING = "sibling";
    const CHILD = "child";
    const PARENT = "parent";
    const SPONSOR = "sponsor";
    const EMERGENCY_CONTACT = "emergencyContact";
    const OTHER = "other";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}