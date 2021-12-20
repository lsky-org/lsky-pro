<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ExactMatchClassificationResult File
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
* ExactMatchClassificationResult class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ExactMatchClassificationResult extends Entity
{

    /**
    * Gets the classification
    *
    * @return ExactMatchDetectedSensitiveContent The classification
    */
    public function getClassification()
    {
        if (array_key_exists("classification", $this->_propDict)) {
            if (is_a($this->_propDict["classification"], "\Beta\Microsoft\Graph\Model\ExactMatchDetectedSensitiveContent")) {
                return $this->_propDict["classification"];
            } else {
                $this->_propDict["classification"] = new ExactMatchDetectedSensitiveContent($this->_propDict["classification"]);
                return $this->_propDict["classification"];
            }
        }
        return null;
    }

    /**
    * Sets the classification
    *
    * @param ExactMatchDetectedSensitiveContent $val The value to assign to the classification
    *
    * @return ExactMatchClassificationResult The ExactMatchClassificationResult
    */
    public function setClassification($val)
    {
        $this->_propDict["classification"] = $val;
         return $this;
    }

    /**
    * Gets the errors
    *
    * @return ClassificationError The errors
    */
    public function getErrors()
    {
        if (array_key_exists("errors", $this->_propDict)) {
            if (is_a($this->_propDict["errors"], "\Beta\Microsoft\Graph\Model\ClassificationError")) {
                return $this->_propDict["errors"];
            } else {
                $this->_propDict["errors"] = new ClassificationError($this->_propDict["errors"]);
                return $this->_propDict["errors"];
            }
        }
        return null;
    }

    /**
    * Sets the errors
    *
    * @param ClassificationError $val The value to assign to the errors
    *
    * @return ExactMatchClassificationResult The ExactMatchClassificationResult
    */
    public function setErrors($val)
    {
        $this->_propDict["errors"] = $val;
         return $this;
    }
}
