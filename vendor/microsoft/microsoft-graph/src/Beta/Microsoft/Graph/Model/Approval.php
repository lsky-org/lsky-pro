<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Approval File
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
* Approval class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Approval extends Entity
{

     /** 
     * Gets the steps
     *
     * @return array The steps
     */
    public function getSteps()
    {
        if (array_key_exists("steps", $this->_propDict)) {
           return $this->_propDict["steps"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the steps
    *
    * @param ApprovalStep $val The steps
    *
    * @return Approval
    */
    public function setSteps($val)
    {
		$this->_propDict["steps"] = $val;
        return $this;
    }
    
}
