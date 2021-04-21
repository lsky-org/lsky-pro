<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AutoReviewSettings File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;
/**
* AutoReviewSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AutoReviewSettings extends Entity
{
    /**
    * Gets the notReviewedResult
    * Possible values: Approve, Deny, or Recommendation.  If Recommendation, then accessRecommendationsEnabled in the accessReviewSettings resource should also be set to true. If you want to have the system provide a decision even if the reviewer does not make a choice, set the autoReviewEnabled property in the accessReviewSettings resource to true and include an autoReviewSettings object with the notReviewedResult property. Then, when a review completes, based on the notReviewedResult property, the decision is recorded as either Approve or Deny.
    *
    * @return string The notReviewedResult
    */
    public function getNotReviewedResult()
    {
        if (array_key_exists("notReviewedResult", $this->_propDict)) {
            return $this->_propDict["notReviewedResult"];
        } else {
            return null;
        }
    }

    /**
    * Sets the notReviewedResult
    * Possible values: Approve, Deny, or Recommendation.  If Recommendation, then accessRecommendationsEnabled in the accessReviewSettings resource should also be set to true. If you want to have the system provide a decision even if the reviewer does not make a choice, set the autoReviewEnabled property in the accessReviewSettings resource to true and include an autoReviewSettings object with the notReviewedResult property. Then, when a review completes, based on the notReviewedResult property, the decision is recorded as either Approve or Deny.
    *
    * @param string $val The value of the notReviewedResult
    *
    * @return AutoReviewSettings
    */
    public function setNotReviewedResult($val)
    {
        $this->_propDict["notReviewedResult"] = $val;
        return $this;
    }
}
