<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* StagedFeatureName File
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
* StagedFeatureName class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class StagedFeatureName extends Enum
{
    /**
    * The Enum StagedFeatureName
    */
    const PASSTHROUGH_AUTHENTICATION = "passthroughAuthentication";
    const SEAMLESS_SSO = "seamlessSso";
    const PASSWORD_HASH_SYNC = "passwordHashSync";
    const EMAIL_AS_ALTERNATE_ID = "emailAsAlternateId";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}