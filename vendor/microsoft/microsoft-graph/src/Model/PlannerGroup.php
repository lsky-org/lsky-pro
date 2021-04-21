<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PlannerGroup File
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
* PlannerGroup class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PlannerGroup extends Entity
{

     /** 
     * Gets the plans
    * Read-only. Nullable. Returns the plannerPlans owned by the group.
     *
     * @return array The plans
     */
    public function getPlans()
    {
        if (array_key_exists("plans", $this->_propDict)) {
           return $this->_propDict["plans"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the plans
    * Read-only. Nullable. Returns the plannerPlans owned by the group.
    *
    * @param PlannerPlan $val The plans
    *
    * @return PlannerGroup
    */
    public function setPlans($val)
    {
		$this->_propDict["plans"] = $val;
        return $this;
    }
    
}
