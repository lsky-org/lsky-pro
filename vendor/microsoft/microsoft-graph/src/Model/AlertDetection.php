<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AlertDetection File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;
/**
* AlertDetection class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AlertDetection extends Entity
{
    /**
    * Gets the detectionType
    *
    * @return string The detectionType
    */
    public function getDetectionType()
    {
        if (array_key_exists("detectionType", $this->_propDict)) {
            return $this->_propDict["detectionType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the detectionType
    *
    * @param string $val The value of the detectionType
    *
    * @return AlertDetection
    */
    public function setDetectionType($val)
    {
        $this->_propDict["detectionType"] = $val;
        return $this;
    }
    /**
    * Gets the method
    *
    * @return string The method
    */
    public function getMethod()
    {
        if (array_key_exists("method", $this->_propDict)) {
            return $this->_propDict["method"];
        } else {
            return null;
        }
    }

    /**
    * Sets the method
    *
    * @param string $val The value of the method
    *
    * @return AlertDetection
    */
    public function setMethod($val)
    {
        $this->_propDict["method"] = $val;
        return $this;
    }
    /**
    * Gets the name
    *
    * @return string The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }

    /**
    * Sets the name
    *
    * @param string $val The value of the name
    *
    * @return AlertDetection
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
}
