<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EvaluateLabelJobResultGroup File
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
* EvaluateLabelJobResultGroup class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EvaluateLabelJobResultGroup extends Entity
{

    /**
    * Gets the automatic
    *
    * @return EvaluateLabelJobResult The automatic
    */
    public function getAutomatic()
    {
        if (array_key_exists("automatic", $this->_propDict)) {
            if (is_a($this->_propDict["automatic"], "\Beta\Microsoft\Graph\Model\EvaluateLabelJobResult")) {
                return $this->_propDict["automatic"];
            } else {
                $this->_propDict["automatic"] = new EvaluateLabelJobResult($this->_propDict["automatic"]);
                return $this->_propDict["automatic"];
            }
        }
        return null;
    }

    /**
    * Sets the automatic
    *
    * @param EvaluateLabelJobResult $val The value to assign to the automatic
    *
    * @return EvaluateLabelJobResultGroup The EvaluateLabelJobResultGroup
    */
    public function setAutomatic($val)
    {
        $this->_propDict["automatic"] = $val;
         return $this;
    }

    /**
    * Gets the recommended
    *
    * @return EvaluateLabelJobResult The recommended
    */
    public function getRecommended()
    {
        if (array_key_exists("recommended", $this->_propDict)) {
            if (is_a($this->_propDict["recommended"], "\Beta\Microsoft\Graph\Model\EvaluateLabelJobResult")) {
                return $this->_propDict["recommended"];
            } else {
                $this->_propDict["recommended"] = new EvaluateLabelJobResult($this->_propDict["recommended"]);
                return $this->_propDict["recommended"];
            }
        }
        return null;
    }

    /**
    * Sets the recommended
    *
    * @param EvaluateLabelJobResult $val The value to assign to the recommended
    *
    * @return EvaluateLabelJobResultGroup The EvaluateLabelJobResultGroup
    */
    public function setRecommended($val)
    {
        $this->_propDict["recommended"] = $val;
         return $this;
    }
}
