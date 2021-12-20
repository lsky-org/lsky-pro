<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PlannerPlanContainer File
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
* PlannerPlanContainer class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PlannerPlanContainer extends Entity
{
    /**
    * Gets the containerId
    * The identifier of the resource that contains the plan.
    *
    * @return string The containerId
    */
    public function getContainerId()
    {
        if (array_key_exists("containerId", $this->_propDict)) {
            return $this->_propDict["containerId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the containerId
    * The identifier of the resource that contains the plan.
    *
    * @param string $val The value of the containerId
    *
    * @return PlannerPlanContainer
    */
    public function setContainerId($val)
    {
        $this->_propDict["containerId"] = $val;
        return $this;
    }

    /**
    * Gets the type
    * The type of the resource that contains the plan. See the previous table for supported types. Possible values are: group, roster, unknownFutureValue.
    *
    * @return PlannerContainerType The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            if (is_a($this->_propDict["type"], "\Beta\Microsoft\Graph\Model\PlannerContainerType")) {
                return $this->_propDict["type"];
            } else {
                $this->_propDict["type"] = new PlannerContainerType($this->_propDict["type"]);
                return $this->_propDict["type"];
            }
        }
        return null;
    }

    /**
    * Sets the type
    * The type of the resource that contains the plan. See the previous table for supported types. Possible values are: group, roster, unknownFutureValue.
    *
    * @param PlannerContainerType $val The value to assign to the type
    *
    * @return PlannerPlanContainer The PlannerPlanContainer
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
         return $this;
    }
    /**
    * Gets the url
    * The full canonical URL of the container.
    *
    * @return string The url
    */
    public function getUrl()
    {
        if (array_key_exists("url", $this->_propDict)) {
            return $this->_propDict["url"];
        } else {
            return null;
        }
    }

    /**
    * Sets the url
    * The full canonical URL of the container.
    *
    * @param string $val The value of the url
    *
    * @return PlannerPlanContainer
    */
    public function setUrl($val)
    {
        $this->_propDict["url"] = $val;
        return $this;
    }
}
