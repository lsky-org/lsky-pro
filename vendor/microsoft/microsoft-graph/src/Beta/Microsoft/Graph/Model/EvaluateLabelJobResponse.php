<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EvaluateLabelJobResponse File
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
* EvaluateLabelJobResponse class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EvaluateLabelJobResponse extends JobResponseBase
{
    /**
    * Gets the result
    *
    * @return EvaluateLabelJobResultGroup The result
    */
    public function getResult()
    {
        if (array_key_exists("result", $this->_propDict)) {
            if (is_a($this->_propDict["result"], "\Beta\Microsoft\Graph\Model\EvaluateLabelJobResultGroup")) {
                return $this->_propDict["result"];
            } else {
                $this->_propDict["result"] = new EvaluateLabelJobResultGroup($this->_propDict["result"]);
                return $this->_propDict["result"];
            }
        }
        return null;
    }
    
    /**
    * Sets the result
    *
    * @param EvaluateLabelJobResultGroup $val The result
    *
    * @return EvaluateLabelJobResponse
    */
    public function setResult($val)
    {
        $this->_propDict["result"] = $val;
        return $this;
    }
    
}
