<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SecureAssessmentAccountType File
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
* SecureAssessmentAccountType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SecureAssessmentAccountType extends Enum
{
    /**
    * The Enum SecureAssessmentAccountType
    */
    const AZURE_AD_ACCOUNT = "azureADAccount";
    const DOMAIN_ACCOUNT = "domainAccount";
    const LOCAL_ACCOUNT = "localAccount";
    const LOCAL_GUEST_ACCOUNT = "localGuestAccount";
}