<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Planner File
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
* Planner class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Planner extends Entity
{

     /** 
     * Gets the buckets
    * Read-only. Nullable. Returns a collection of the specified buckets
     *
     * @return array The buckets
     */
    public function getBuckets()
    {
        if (array_key_exists("buckets", $this->_propDict)) {
           return $this->_propDict["buckets"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the buckets
    * Read-only. Nullable. Returns a collection of the specified buckets
    *
    * @param PlannerBucket $val The buckets
    *
    * @return Planner
    */
    public function setBuckets($val)
    {
		$this->_propDict["buckets"] = $val;
        return $this;
    }
    

     /** 
     * Gets the plans
    * Read-only. Nullable. Returns a collection of the specified plans
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
    * Read-only. Nullable. Returns a collection of the specified plans
    *
    * @param PlannerPlan $val The plans
    *
    * @return Planner
    */
    public function setPlans($val)
    {
		$this->_propDict["plans"] = $val;
        return $this;
    }
    

     /** 
     * Gets the rosters
    * Read-only. Nullable. Returns a collection of the specified rosters
     *
     * @return array The rosters
     */
    public function getRosters()
    {
        if (array_key_exists("rosters", $this->_propDict)) {
           return $this->_propDict["rosters"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the rosters
    * Read-only. Nullable. Returns a collection of the specified rosters
    *
    * @param PlannerRoster $val The rosters
    *
    * @return Planner
    */
    public function setRosters($val)
    {
		$this->_propDict["rosters"] = $val;
        return $this;
    }
    

     /** 
     * Gets the tasks
    * Read-only. Nullable. Returns a collection of the specified tasks
     *
     * @return array The tasks
     */
    public function getTasks()
    {
        if (array_key_exists("tasks", $this->_propDict)) {
           return $this->_propDict["tasks"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the tasks
    * Read-only. Nullable. Returns a collection of the specified tasks
    *
    * @param PlannerTask $val The tasks
    *
    * @return Planner
    */
    public function setTasks($val)
    {
		$this->_propDict["tasks"] = $val;
        return $this;
    }
    
}
