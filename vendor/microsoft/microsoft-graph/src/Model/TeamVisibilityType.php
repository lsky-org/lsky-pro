<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamVisibilityType File
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
* TeamVisibilityType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TeamVisibilityType extends Enum
{
    /**
    * The Enum TeamVisibilityType
    */
    const GRAPHPRIVATE = "private";
    const GRAPHPUBLIC = "public";
    const HIDDEN_MEMBERSHIP = "hiddenMembership";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}