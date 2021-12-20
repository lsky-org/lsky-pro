<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PlannerUser File
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
* PlannerUser class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PlannerUser extends PlannerDelta
{
    /**
    * Gets the favoritePlanReferences
    * A collection containing the references to the plans that the user has marked as favorites.
    *
    * @return PlannerFavoritePlanReferenceCollection The favoritePlanReferences
    */
    public function getFavoritePlanReferences()
    {
        if (array_key_exists("favoritePlanReferences", $this->_propDict)) {
            if (is_a($this->_propDict["favoritePlanReferences"], "\Beta\Microsoft\Graph\Model\PlannerFavoritePlanReferenceCollection")) {
                return $this->_propDict["favoritePlanReferences"];
            } else {
                $this->_propDict["favoritePlanReferences"] = new PlannerFavoritePlanReferenceCollection($this->_propDict["favoritePlanReferences"]);
                return $this->_propDict["favoritePlanReferences"];
            }
        }
        return null;
    }
    
    /**
    * Sets the favoritePlanReferences
    * A collection containing the references to the plans that the user has marked as favorites.
    *
    * @param PlannerFavoritePlanReferenceCollection $val The favoritePlanReferences
    *
    * @return PlannerUser
    */
    public function setFavoritePlanReferences($val)
    {
        $this->_propDict["favoritePlanReferences"] = $val;
        return $this;
    }
    
    /**
    * Gets the recentPlanReferences
    * A collection containing references to the plans that were viewed recently by the user in apps that support recent plans.
    *
    * @return PlannerRecentPlanReferenceCollection The recentPlanReferences
    */
    public function getRecentPlanReferences()
    {
        if (array_key_exists("recentPlanReferences", $this->_propDict)) {
            if (is_a($this->_propDict["recentPlanReferences"], "\Beta\Microsoft\Graph\Model\PlannerRecentPlanReferenceCollection")) {
                return $this->_propDict["recentPlanReferences"];
            } else {
                $this->_propDict["recentPlanReferences"] = new PlannerRecentPlanReferenceCollection($this->_propDict["recentPlanReferences"]);
                return $this->_propDict["recentPlanReferences"];
            }
        }
        return null;
    }
    
    /**
    * Sets the recentPlanReferences
    * A collection containing references to the plans that were viewed recently by the user in apps that support recent plans.
    *
    * @param PlannerRecentPlanReferenceCollection $val The recentPlanReferences
    *
    * @return PlannerUser
    */
    public function setRecentPlanReferences($val)
    {
        $this->_propDict["recentPlanReferences"] = $val;
        return $this;
    }
    

     /** 
     * Gets the all
     *
     * @return array The all
     */
    public function getAll()
    {
        if (array_key_exists("all", $this->_propDict)) {
           return $this->_propDict["all"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the all
    *
    * @param PlannerDelta $val The all
    *
    * @return PlannerUser
    */
    public function setAll($val)
    {
		$this->_propDict["all"] = $val;
        return $this;
    }
    

     /** 
     * Gets the favoritePlans
    * Read-only. Nullable. Returns the plannerPlans that the user marked as favorites.
     *
     * @return array The favoritePlans
     */
    public function getFavoritePlans()
    {
        if (array_key_exists("favoritePlans", $this->_propDict)) {
           return $this->_propDict["favoritePlans"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the favoritePlans
    * Read-only. Nullable. Returns the plannerPlans that the user marked as favorites.
    *
    * @param PlannerPlan $val The favoritePlans
    *
    * @return PlannerUser
    */
    public function setFavoritePlans($val)
    {
		$this->_propDict["favoritePlans"] = $val;
        return $this;
    }
    

     /** 
     * Gets the plans
    * Read-only. Nullable. Returns the plannerTasks assigned to the user.
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
    * Read-only. Nullable. Returns the plannerTasks assigned to the user.
    *
    * @param PlannerPlan $val The plans
    *
    * @return PlannerUser
    */
    public function setPlans($val)
    {
		$this->_propDict["plans"] = $val;
        return $this;
    }
    

     /** 
     * Gets the recentPlans
    * Read-only. Nullable. Returns the plannerPlans that have been recently viewed by the user in apps that support recent plans.
     *
     * @return array The recentPlans
     */
    public function getRecentPlans()
    {
        if (array_key_exists("recentPlans", $this->_propDict)) {
           return $this->_propDict["recentPlans"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the recentPlans
    * Read-only. Nullable. Returns the plannerPlans that have been recently viewed by the user in apps that support recent plans.
    *
    * @param PlannerPlan $val The recentPlans
    *
    * @return PlannerUser
    */
    public function setRecentPlans($val)
    {
		$this->_propDict["recentPlans"] = $val;
        return $this;
    }
    

     /** 
     * Gets the rosterPlans
    * Read-only. Nullable. Returns the plannerPlans contained by the plannerRosters the user is a member.
     *
     * @return array The rosterPlans
     */
    public function getRosterPlans()
    {
        if (array_key_exists("rosterPlans", $this->_propDict)) {
           return $this->_propDict["rosterPlans"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the rosterPlans
    * Read-only. Nullable. Returns the plannerPlans contained by the plannerRosters the user is a member.
    *
    * @param PlannerPlan $val The rosterPlans
    *
    * @return PlannerUser
    */
    public function setRosterPlans($val)
    {
		$this->_propDict["rosterPlans"] = $val;
        return $this;
    }
    

     /** 
     * Gets the tasks
    * Read-only. Nullable. Returns the plannerTasks assigned to the user.
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
    * Read-only. Nullable. Returns the plannerTasks assigned to the user.
    *
    * @param PlannerTask $val The tasks
    *
    * @return PlannerUser
    */
    public function setTasks($val)
    {
		$this->_propDict["tasks"] = $val;
        return $this;
    }
    
}
