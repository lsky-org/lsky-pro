<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PlannerBucketTaskBoardTaskFormat File
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
* PlannerBucketTaskBoardTaskFormat class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PlannerBucketTaskBoardTaskFormat extends PlannerDelta
{
    /**
    * Gets the orderHint
    * Hint used to order tasks in the Bucket view of the Task Board. The format is defined as outlined here.
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
    * Hint used to order tasks in the Bucket view of the Task Board. The format is defined as outlined here.
    *
    * @param string $val The orderHint
    *
    * @return PlannerBucketTaskBoardTaskFormat
    */
    public function setOrderHint($val)
    {
        $this->_propDict["orderHint"] = $val;
        return $this;
    }
    
}
