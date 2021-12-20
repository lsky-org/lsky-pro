<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DiagnosticDataSubmissionMode File
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
* DiagnosticDataSubmissionMode class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DiagnosticDataSubmissionMode extends Enum
{
    /**
    * The Enum DiagnosticDataSubmissionMode
    */
    const USER_DEFINED = "userDefined";
    const NONE = "none";
    const BASIC = "basic";
    const ENHANCED = "enhanced";
    const FULL = "full";
}