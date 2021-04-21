<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EvaluateLabelJobResult File
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
* EvaluateLabelJobResult class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EvaluateLabelJobResult extends Entity
{

    /**
    * Gets the responsiblePolicy
    *
    * @return ResponsiblePolicy The responsiblePolicy
    */
    public function getResponsiblePolicy()
    {
        if (array_key_exists("responsiblePolicy", $this->_propDict)) {
            if (is_a($this->_propDict["responsiblePolicy"], "\Beta\Microsoft\Graph\Model\ResponsiblePolicy")) {
                return $this->_propDict["responsiblePolicy"];
            } else {
                $this->_propDict["responsiblePolicy"] = new ResponsiblePolicy($this->_propDict["responsiblePolicy"]);
                return $this->_propDict["responsiblePolicy"];
            }
        }
        return null;
    }

    /**
    * Sets the responsiblePolicy
    *
    * @param ResponsiblePolicy $val The value to assign to the responsiblePolicy
    *
    * @return EvaluateLabelJobResult The EvaluateLabelJobResult
    */
    public function setResponsiblePolicy($val)
    {
        $this->_propDict["responsiblePolicy"] = $val;
         return $this;
    }

    /**
    * Gets the responsibleSensitiveTypes
    *
    * @return ResponsibleSensitiveType The responsibleSensitiveTypes
    */
    public function getResponsibleSensitiveTypes()
    {
        if (array_key_exists("responsibleSensitiveTypes", $this->_propDict)) {
            if (is_a($this->_propDict["responsibleSensitiveTypes"], "\Beta\Microsoft\Graph\Model\ResponsibleSensitiveType")) {
                return $this->_propDict["responsibleSensitiveTypes"];
            } else {
                $this->_propDict["responsibleSensitiveTypes"] = new ResponsibleSensitiveType($this->_propDict["responsibleSensitiveTypes"]);
                return $this->_propDict["responsibleSensitiveTypes"];
            }
        }
        return null;
    }

    /**
    * Sets the responsibleSensitiveTypes
    *
    * @param ResponsibleSensitiveType $val The value to assign to the responsibleSensitiveTypes
    *
    * @return EvaluateLabelJobResult The EvaluateLabelJobResult
    */
    public function setResponsibleSensitiveTypes($val)
    {
        $this->_propDict["responsibleSensitiveTypes"] = $val;
         return $this;
    }

    /**
    * Gets the sensitivityLabel
    *
    * @return MatchingLabel The sensitivityLabel
    */
    public function getSensitivityLabel()
    {
        if (array_key_exists("sensitivityLabel", $this->_propDict)) {
            if (is_a($this->_propDict["sensitivityLabel"], "\Beta\Microsoft\Graph\Model\MatchingLabel")) {
                return $this->_propDict["sensitivityLabel"];
            } else {
                $this->_propDict["sensitivityLabel"] = new MatchingLabel($this->_propDict["sensitivityLabel"]);
                return $this->_propDict["sensitivityLabel"];
            }
        }
        return null;
    }

    /**
    * Sets the sensitivityLabel
    *
    * @param MatchingLabel $val The value to assign to the sensitivityLabel
    *
    * @return EvaluateLabelJobResult The EvaluateLabelJobResult
    */
    public function setSensitivityLabel($val)
    {
        $this->_propDict["sensitivityLabel"] = $val;
         return $this;
    }
}
