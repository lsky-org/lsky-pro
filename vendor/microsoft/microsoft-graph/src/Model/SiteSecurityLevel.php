<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SiteSecurityLevel File
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
* SiteSecurityLevel class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SiteSecurityLevel extends Enum
{
    /**
    * The Enum SiteSecurityLevel
    */
    const USER_DEFINED = "userDefined";
    const LOW = "low";
    const MEDIUM_LOW = "mediumLow";
    const MEDIUM = "medium";
    const MEDIUM_HIGH = "mediumHigh";
    const HIGH = "high";
}