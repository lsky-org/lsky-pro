<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* LanguageProficiencyLevel File
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
* LanguageProficiencyLevel class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class LanguageProficiencyLevel extends Enum
{
    /**
    * The Enum LanguageProficiencyLevel
    */
    const ELEMENTARY = "elementary";
    const CONVERSATIONAL = "conversational";
    const LIMITED_WORKING = "limitedWorking";
    const PROFESSIONAL_WORKING = "professionalWorking";
    const FULL_PROFESSIONAL = "fullProfessional";
    const NATIVE_OR_BILINGUAL = "nativeOrBilingual";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}