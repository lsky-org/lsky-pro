<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* LanManagerAuthenticationLevel File
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
* LanManagerAuthenticationLevel class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class LanManagerAuthenticationLevel extends Enum
{
    /**
    * The Enum LanManagerAuthenticationLevel
    */
    const LM_AND_NLTM = "lmAndNltm";
    const LM_NTLM_AND_NTLM_V2 = "lmNtlmAndNtlmV2";
    const LM_AND_NTLM_ONLY = "lmAndNtlmOnly";
    const LM_AND_NTLM_V2 = "lmAndNtlmV2";
    const LM_NTLM_V2_AND_NOT_LM = "lmNtlmV2AndNotLm";
    const LM_NTLM_V2_AND_NOT_LM_OR_NTM = "lmNtlmV2AndNotLmOrNtm";
}