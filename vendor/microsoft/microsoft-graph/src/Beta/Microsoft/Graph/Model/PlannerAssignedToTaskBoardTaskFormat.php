<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PlannerAssignedToTaskBoardTaskFormat File
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
* PlannerAssignedToTaskBoardTaskFormat class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PlannerAssignedToTaskBoardTaskFormat extends PlannerDelta
{
    /**
    * Gets the orderHintsByAssignee
    * Dictionary of hints used to order tasks on the AssignedTo view of the Task Board. The key of each entry is one of the users the task is assigned to and the value is the order hint. The format of each value is defined as outlined here.
    *
    * @return PlannerOrderHintsByAssignee The orderHintsByAssignee
    */
    public function getOrderHintsByAssignee()
    {
        if (array_key_exists("orderHintsByAssignee", $this->_propDict)) {
            if (is_a($this->_propDict["orderHintsByAssignee"], "\Beta\Microsoft\Graph\Model\PlannerOrderHintsByAssignee")) {
                return $this->_propDict["orderHintsByAssignee"];
            } else {
                $this->_propDict["orderHintsByAssignee"] = new PlannerOrderHintsByAssignee($this->_propDict["orderHintsByAssignee"]);
                return $this->_propDict["orderHintsByAssignee"];
            }
        }
        return null;
    }
    
    /**
    * Sets the orderHintsByAssignee
    * Dictionary of hints used to order tasks on the AssignedTo view of the Task Board. The key of each entry is one of the users the task is assigned to and the value is the order hint. The format of each value is defined as outlined here.
    *
    * @param PlannerOrderHintsByAssignee $val The orderHintsByAssignee
    *
    * @return PlannerAssignedToTaskBoardTaskFormat
    */
    public function setOrderHintsByAssignee($val)
    {
        $this->_propDict["orderHintsByAssignee"] = $val;
        return $this;
    }
    
    /**
    * Gets the unassignedOrderHint
    * Hint value used to order the task on the AssignedTo view of the Task Board when the task is not assigned to anyone, or if the orderHintsByAssignee dictionary does not provide an order hint for the user the task is assigned to. The format is defined as outlined here.
    *
    * @return string The unassignedOrderHint
    */
    public function getUnassignedOrderHint()
    {
        if (array_key_exists("unassignedOrderHint", $this->_propDict)) {
            return $this->_propDict["unassignedOrderHint"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the unassignedOrderHint
    * Hint value used to order the task on the AssignedTo view of the Task Board when the task is not assigned to anyone, or if the orderHintsByAssignee dictionary does not provide an order hint for the user the task is assigned to. The format is defined as outlined here.
    *
    * @param string $val The unassignedOrderHint
    *
    * @return PlannerAssignedToTaskBoardTaskFormat
    */
    public function setUnassignedOrderHint($val)
    {
        $this->_propDict["unassignedOrderHint"] = $val;
        return $this;
    }
    
}
