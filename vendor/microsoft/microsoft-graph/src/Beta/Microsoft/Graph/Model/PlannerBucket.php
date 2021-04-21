<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PlannerBucket File
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
* PlannerBucket class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PlannerBucket extends PlannerDelta
{
    /**
    * Gets the name
    * Name of the bucket.
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
    * Name of the bucket.
    *
    * @param string $val The name
    *
    * @return PlannerBucket
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    
    /**
    * Gets the orderHint
    * Hint used to order items of this type in a list view. The format is defined as outlined here.
    *
    * @return string The orderHint
    */
    public function getOrderHint()
    {
        if (array_key_exists("orderHint", $this->_propDict)) {
            return $this->_propDict["orderHint"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the orderHint
    * Hint used to order items of this type in a list view. The format is defined as outlined here.
    *
    * @param string $val The orderHint
    *
    * @return PlannerBucket
    */
    public function setOrderHint($val)
    {
        $this->_propDict["orderHint"] = $val;
        return $this;
    }
    
    /**
    * Gets the planId
    * Plan ID to which the bucket belongs.
    *
    * @return string The planId
    */
    public function getPlanId()
    {
        if (array_key_exists("planId", $this->_propDict)) {
            return $this->_propDict["planId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the planId
    * Plan ID to which the bucket belongs.
    *
    * @param string $val The planId
    *
    * @return PlannerBucket
    */
    public function setPlanId($val)
    {
        $this->_propDict["planId"] = $val;
        return $this;
    }
    

     /** 
     * Gets the tasks
    * Read-only. Nullable. The collection of tasks in the bucket.
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
    * Read-only. Nullable. The collection of tasks in the bucket.
    *
    * @param PlannerTask $val The tasks
    *
    * @return PlannerBucket
    */
    public function setTasks($val)
    {
		$this->_propDict["tasks"] = $val;
        return $this;
    }
    
}
