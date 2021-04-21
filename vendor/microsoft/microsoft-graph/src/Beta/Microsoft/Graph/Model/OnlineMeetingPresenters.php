<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OnlineMeetingPresenters File
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
* OnlineMeetingPresenters class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OnlineMeetingPresenters extends Enum
{
    /**
    * The Enum OnlineMeetingPresenters
    */
    const EVERYONE = "everyone";
    const ORGANIZATION = "organization";
    const ROLE_IS_PRESENTER = "roleIsPresenter";
    const ORGANIZER = "organizer";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}