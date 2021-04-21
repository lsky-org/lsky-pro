<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Code File
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
* Code class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Code extends Enum
{
    /**
    * The Enum Code
    */
    const NONE = "none";
    const JSON_FILE_INVALID = "jsonFileInvalid";
    const JSON_FILE_MISSING = "jsonFileMissing";
    const JSON_FILE_TOO_LARGE = "jsonFileTooLarge";
    const RULES_MISSING = "rulesMissing";
    const DUPLICATE_RULES = "duplicateRules";
    const TOO_MANY_RULES_SPECIFIED = "tooManyRulesSpecified";
    const OPERATOR_MISSING = "operatorMissing";
    const OPERATOR_NOT_SUPPORTED = "operatorNotSupported";
    const DATATYPE_MISSING = "datatypeMissing";
    const DATATYPE_NOT_SUPPORTED = "datatypeNotSupported";
    const OPERATOR_DATA_TYPE_COMBINATION_NOT_SUPPORTED = "operatorDataTypeCombinationNotSupported";
    const MORE_INFO_URI_MISSING = "moreInfoUriMissing";
    const MORE_INFO_URI_INVALID = "moreInfoUriInvalid";
    const MORE_INFO_URI_TOO_LARGE = "moreInfoUriTooLarge";
    const DESCRIPTION_MISSING = "descriptionMissing";
    const DESCRIPTION_INVALID = "descriptionInvalid";
    const DESCRIPTION_TOO_LARGE = "descriptionTooLarge";
    const TITLE_MISSING = "titleMissing";
    const TITLE_INVALID = "titleInvalid";
    const TITLE_TOO_LARGE = "titleTooLarge";
    const OPERAND_MISSING = "operandMissing";
    const OPERAND_INVALID = "operandInvalid";
    const OPERAND_TOO_LARGE = "operandTooLarge";
    const SETTING_NAME_MISSING = "settingNameMissing";
    const SETTING_NAME_INVALID = "settingNameInvalid";
    const SETTING_NAME_TOO_LARGE = "settingNameTooLarge";
    const ENGLISH_LOCALE_MISSING = "englishLocaleMissing";
    const DUPLICATE_LOCALES = "duplicateLocales";
    const UNRECOGNIZED_LOCALE = "unrecognizedLocale";
    const UNKNOWN = "unknown";
    const REMEDIATION_STRINGS_MISSING = "remediationStringsMissing";
}