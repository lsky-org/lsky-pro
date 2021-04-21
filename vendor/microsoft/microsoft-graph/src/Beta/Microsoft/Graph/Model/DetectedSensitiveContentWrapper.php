<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DetectedSensitiveContentWrapper File
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
* DetectedSensitiveContentWrapper class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DetectedSensitiveContentWrapper extends Entity
{

    /**
    * Gets the classification
    *
    * @return DetectedSensitiveContent The classification
    */
    public function getClassification()
    {
        if (array_key_exists("classification", $this->_propDict)) {
            if (is_a($this->_propDict["classification"], "\Beta\Microsoft\Graph\Model\DetectedSensitiveContent")) {
                return $this->_propDict["classification"];
            } else {
                $this->_propDict["classification"] = new DetectedSensitiveContent($this->_propDict["classification"]);
                return $this->_propDict["classification"];
            }
        }
        return null;
    }

    /**
    * Sets the classification
    *
    * @param DetectedSensitiveContent $val The value to assign to the classification
    *
    * @return DetectedSensitiveContentWrapper The DetectedSensitiveContentWrapper
    */
    public function setClassification($val)
    {
        $this->_propDict["classification"] = $val;
         return $this;
    }
}
