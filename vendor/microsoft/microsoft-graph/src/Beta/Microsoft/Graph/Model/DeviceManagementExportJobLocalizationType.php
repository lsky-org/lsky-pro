<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementExportJobLocalizationType File
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
* DeviceManagementExportJobLocalizationType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementExportJobLocalizationType extends Enum
{
    /**
    * The Enum DeviceManagementExportJobLocalizationType
    */
    const LOCALIZED_VALUES_AS_ADDITIONAL_COLUMN = "localizedValuesAsAdditionalColumn";
    const REPLACE_LOCALIZABLE_VALUES = "replaceLocalizableValues";
}