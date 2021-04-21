<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PlannerFavoritePlanReference File
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
* PlannerFavoritePlanReference class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PlannerFavoritePlanReference extends Entity
{
    /**
    * Gets the orderHint
    * Hint used to order items of this type in a list view. The format is defined in Using order hints in Planner.
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
    * Hint used to order items of this type in a list view. The format is defined in Using order hints in Planner.
    *
    * @param string $val The value of the orderHint
    *
    * @return PlannerFavoritePlanReference
    */
    public function setOrderHint($val)
    {
        $this->_propDict["orderHint"] = $val;
        return $this;
    }
    /**
    * Gets the planTitle
    * Title of the plan at the time the user marked it as a favorite.
    *
    * @return string The planTitle
    */
    public function getPlanTitle()
    {
        if (array_key_exists("planTitle", $this->_propDict)) {
            return $this->_propDict["planTitle"];
        } else {
            return null;
        }
    }

    /**
    * Sets the planTitle
    * Title of the plan at the time the user marked it as a favorite.
    *
    * @param string $val The value of the planTitle
    *
    * @return PlannerFavoritePlanReference
    */
    public function setPlanTitle($val)
    {
        $this->_propDict["planTitle"] = $val;
        return $this;
    }
}
