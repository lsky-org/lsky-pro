<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* InferenceData File
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
* InferenceData class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class InferenceData extends Entity
{
    /**
    * Gets the confidenceScore
    * Confidence score reflecting the accuracy of the data inferred about the user.
    *
    * @return float The confidenceScore
    */
    public function getConfidenceScore()
    {
        if (array_key_exists("confidenceScore", $this->_propDict)) {
            return $this->_propDict["confidenceScore"];
        } else {
            return null;
        }
    }

    /**
    * Sets the confidenceScore
    * Confidence score reflecting the accuracy of the data inferred about the user.
    *
    * @param float $val The value of the confidenceScore
    *
    * @return InferenceData
    */
    public function setConfidenceScore($val)
    {
        $this->_propDict["confidenceScore"] = $val;
        return $this;
    }
    /**
    * Gets the userHasVerifiedAccuracy
    * Records if the user has confirmed this inference as being True or False.
    *
    * @return bool The userHasVerifiedAccuracy
    */
    public function getUserHasVerifiedAccuracy()
    {
        if (array_key_exists("userHasVerifiedAccuracy", $this->_propDict)) {
            return $this->_propDict["userHasVerifiedAccuracy"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userHasVerifiedAccuracy
    * Records if the user has confirmed this inference as being True or False.
    *
    * @param bool $val The value of the userHasVerifiedAccuracy
    *
    * @return InferenceData
    */
    public function setUserHasVerifiedAccuracy($val)
    {
        $this->_propDict["userHasVerifiedAccuracy"] = $val;
        return $this;
    }
}
