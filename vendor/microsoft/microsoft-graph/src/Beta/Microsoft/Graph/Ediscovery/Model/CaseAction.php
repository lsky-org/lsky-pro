<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CaseAction File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Ediscovery\Model;

use Microsoft\Graph\Core\Enum;

/**
* CaseAction class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CaseAction extends Enum
{
    /**
    * The Enum CaseAction
    */
    const CONTENT_EXPORT = "contentExport";
    const APPLY_TAGS = "applyTags";
    const CONVERT_TO_PDF = "convertToPdf";
    const INDEX = "index";
    const ESTIMATE_STATISTICS = "estimateStatistics";
    const ADD_TO_REVIEW_SET = "addToReviewSet";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}