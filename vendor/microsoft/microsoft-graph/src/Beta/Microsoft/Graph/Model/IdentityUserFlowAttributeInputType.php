<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IdentityUserFlowAttributeInputType File
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
* IdentityUserFlowAttributeInputType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IdentityUserFlowAttributeInputType extends Enum
{
    /**
    * The Enum IdentityUserFlowAttributeInputType
    */
    const TEXT_BOX = "textBox";
    const DATE_TIME_DROPDOWN = "dateTimeDropdown";
    const RADIO_SINGLE_SELECT = "radioSingleSelect";
    const DROPDOWN_SINGLE_SELECT = "dropdownSingleSelect";
    const EMAIL_BOX = "emailBox";
    const CHECKBOX_MULTI_SELECT = "checkboxMultiSelect";
}