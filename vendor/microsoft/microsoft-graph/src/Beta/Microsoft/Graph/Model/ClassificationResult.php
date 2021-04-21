<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ClassificationResult File
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
* ClassificationResult class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ClassificationResult extends Entity
{
    /**
    * Gets the confidenceLevel
    * The confidence level, 0 to 100, of the result.
    *
    * @return int The confidenceLevel
    */
    public function getConfidenceLevel()
    {
        if (array_key_exists("confidenceLevel", $this->_propDict)) {
            return $this->_propDict["confidenceLevel"];
        } else {
            return null;
        }
    }

    /**
    * Sets the confidenceLevel
    * The confidence level, 0 to 100, of the result.
    *
    * @param int $val The value of the confidenceLevel
    *
    * @return ClassificationResult
    */
    public function setConfidenceLevel($val)
    {
        $this->_propDict["confidenceLevel"] = $val;
        return $this;
    }
    /**
    * Gets the count
    * The number of instances of the specific information type in the input.
    *
    * @return int The count
    */
    public function getCount()
    {
        if (array_key_exists("count", $this->_propDict)) {
            return $this->_propDict["count"];
        } else {
            return null;
        }
    }

    /**
    * Sets the count
    * The number of instances of the specific information type in the input.
    *
    * @param int $val The value of the count
    *
    * @return ClassificationResult
    */
    public function setCount($val)
    {
        $this->_propDict["count"] = $val;
        return $this;
    }
    /**
    * Gets the sensitiveTypeId
    * The GUID of the discovered sensitive information type.
    *
    * @return string The sensitiveTypeId
    */
    public function getSensitiveTypeId()
    {
        if (array_key_exists("sensitiveTypeId", $this->_propDict)) {
            return $this->_propDict["sensitiveTypeId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sensitiveTypeId
    * The GUID of the discovered sensitive information type.
    *
    * @param string $val The value of the sensitiveTypeId
    *
    * @return ClassificationResult
    */
    public function setSensitiveTypeId($val)
    {
        $this->_propDict["sensitiveTypeId"] = $val;
        return $this;
    }
}
