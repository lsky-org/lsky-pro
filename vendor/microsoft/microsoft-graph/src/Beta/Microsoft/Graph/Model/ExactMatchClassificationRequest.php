<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ExactMatchClassificationRequest File
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
* ExactMatchClassificationRequest class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ExactMatchClassificationRequest extends Entity
{

    /**
    * Gets the contentClassifications
    *
    * @return ContentClassification The contentClassifications
    */
    public function getContentClassifications()
    {
        if (array_key_exists("contentClassifications", $this->_propDict)) {
            if (is_a($this->_propDict["contentClassifications"], "\Beta\Microsoft\Graph\Model\ContentClassification")) {
                return $this->_propDict["contentClassifications"];
            } else {
                $this->_propDict["contentClassifications"] = new ContentClassification($this->_propDict["contentClassifications"]);
                return $this->_propDict["contentClassifications"];
            }
        }
        return null;
    }

    /**
    * Sets the contentClassifications
    *
    * @param ContentClassification $val The value to assign to the contentClassifications
    *
    * @return ExactMatchClassificationRequest The ExactMatchClassificationRequest
    */
    public function setContentClassifications($val)
    {
        $this->_propDict["contentClassifications"] = $val;
         return $this;
    }
    /**
    * Gets the sensitiveTypeIds
    *
    * @return string The sensitiveTypeIds
    */
    public function getSensitiveTypeIds()
    {
        if (array_key_exists("sensitiveTypeIds", $this->_propDict)) {
            return $this->_propDict["sensitiveTypeIds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sensitiveTypeIds
    *
    * @param string $val The value of the sensitiveTypeIds
    *
    * @return ExactMatchClassificationRequest
    */
    public function setSensitiveTypeIds($val)
    {
        $this->_propDict["sensitiveTypeIds"] = $val;
        return $this;
    }
    /**
    * Gets the text
    *
    * @return string The text
    */
    public function getText()
    {
        if (array_key_exists("text", $this->_propDict)) {
            return $this->_propDict["text"];
        } else {
            return null;
        }
    }

    /**
    * Sets the text
    *
    * @param string $val The value of the text
    *
    * @return ExactMatchClassificationRequest
    */
    public function setText($val)
    {
        $this->_propDict["text"] = $val;
        return $this;
    }
    /**
    * Gets the timeoutInMs
    *
    * @return int The timeoutInMs
    */
    public function getTimeoutInMs()
    {
        if (array_key_exists("timeoutInMs", $this->_propDict)) {
            return $this->_propDict["timeoutInMs"];
        } else {
            return null;
        }
    }

    /**
    * Sets the timeoutInMs
    *
    * @param int $val The value of the timeoutInMs
    *
    * @return ExactMatchClassificationRequest
    */
    public function setTimeoutInMs($val)
    {
        $this->_propDict["timeoutInMs"] = $val;
        return $this;
    }
}
