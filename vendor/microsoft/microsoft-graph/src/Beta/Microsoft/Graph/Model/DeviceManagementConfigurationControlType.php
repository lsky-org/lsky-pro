<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementConfigurationControlType File
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
* DeviceManagementConfigurationControlType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementConfigurationControlType extends Enum
{
    /**
    * The Enum DeviceManagementConfigurationControlType
    */
    const GRAPHDEFAULT = "default";
    const DROPDOWN = "dropdown";
    const SMALL_TEXT_BOX = "smallTextBox";
    const LARGE_TEXT_BOX = "largeTextBox";
    const TOGGLE = "toggle";
    const MULTIHEADER_GRID = "multiheaderGrid";
    const CONTEXT_PANE = "contextPane";
}