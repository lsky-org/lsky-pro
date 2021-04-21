<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MacOSSoftwareUpdateCategory File
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
* MacOSSoftwareUpdateCategory class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MacOSSoftwareUpdateCategory extends Enum
{
    /**
    * The Enum MacOSSoftwareUpdateCategory
    */
    const CRITICAL = "critical";
    const CONFIGURATION_DATA_FILE = "configurationDataFile";
    const FIRMWARE = "firmware";
    const OTHER = "other";
}