<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PhoneType File
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
* PhoneType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PhoneType extends Enum
{
    /**
    * The Enum PhoneType
    */
    const HOME = "home";
    const BUSINESS = "business";
    const MOBILE = "mobile";
    const OTHER = "other";
    const ASSISTANT = "assistant";
    const HOME_FAX = "homeFax";
    const BUSINESS_FAX = "businessFax";
    const OTHER_FAX = "otherFax";
    const PAGER = "pager";
    const RADIO = "radio";
}