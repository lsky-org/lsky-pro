<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MachineLearningDetectedSensitiveContent File
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
* MachineLearningDetectedSensitiveContent class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MachineLearningDetectedSensitiveContent extends DetectedSensitiveContent
{

    /**
    * Gets the matchTolerance
    *
    * @return MlClassificationMatchTolerance The matchTolerance
    */
    public function getMatchTolerance()
    {
        if (array_key_exists("matchTolerance", $this->_propDict)) {
            if (is_a($this->_propDict["matchTolerance"], "\Beta\Microsoft\Graph\Model\MlClassificationMatchTolerance")) {
                return $this->_propDict["matchTolerance"];
            } else {
                $this->_propDict["matchTolerance"] = new MlClassificationMatchTolerance($this->_propDict["matchTolerance"]);
                return $this->_propDict["matchTolerance"];
            }
        }
        return null;
    }

    /**
    * Sets the matchTolerance
    *
    * @param MlClassificationMatchTolerance $val The value to assign to the matchTolerance
    *
    * @return MachineLearningDetectedSensitiveContent The MachineLearningDetectedSensitiveContent
    */
    public function setMatchTolerance($val)
    {
        $this->_propDict["matchTolerance"] = $val;
         return $this;
    }
    /**
    * Gets the modelVersion
    *
    * @return string The modelVersion
    */
    public function getModelVersion()
    {
        if (array_key_exists("modelVersion", $this->_propDict)) {
            return $this->_propDict["modelVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the modelVersion
    *
    * @param string $val The value of the modelVersion
    *
    * @return MachineLearningDetectedSensitiveContent
    */
    public function setModelVersion($val)
    {
        $this->_propDict["modelVersion"] = $val;
        return $this;
    }
}
