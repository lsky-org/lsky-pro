<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ProvisioningStepType File
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
* ProvisioningStepType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ProvisioningStepType extends Enum
{
    /**
    * The Enum ProvisioningStepType
    */
    const IMPORT = "import";
    const SCOPING = "scoping";
    const MATCHING = "matching";
    const PROCESSING = "processing";
    const REFERENCE_RESOLUTION = "referenceResolution";
    const EXPORT = "export";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}