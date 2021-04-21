<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkforceIntegrationEncryptionProtocol File
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
* WorkforceIntegrationEncryptionProtocol class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WorkforceIntegrationEncryptionProtocol extends Enum
{
    /**
    * The Enum WorkforceIntegrationEncryptionProtocol
    */
    const SHARED_SECRET = "sharedSecret";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}