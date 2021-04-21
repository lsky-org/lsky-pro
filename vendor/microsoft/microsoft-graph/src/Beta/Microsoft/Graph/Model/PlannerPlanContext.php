<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PlannerPlanContext File
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
* PlannerPlanContext class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PlannerPlanContext extends Entity
{
    /**
    * Gets the associationType
    * Nullable. An app-defined type of association between the plannerPlan and the app. The app can use this information to track different kinds of relationships to the same plannerPlan.
    *
    * @return string The associationType
    */
    public function getAssociationType()
    {
        if (array_key_exists("associationType", $this->_propDict)) {
            return $this->_propDict["associationType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the associationType
    * Nullable. An app-defined type of association between the plannerPlan and the app. The app can use this information to track different kinds of relationships to the same plannerPlan.
    *
    * @param string $val The value of the associationType
    *
    * @return PlannerPlanContext
    */
    public function setAssociationType($val)
    {
        $this->_propDict["associationType"] = $val;
        return $this;
    }

    /**
    * Gets the createdDateTime
    * Read-only. The date and time when the plannerPlanContext was created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @return \DateTime The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime")) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the createdDateTime
    * Read-only. The date and time when the plannerPlanContext was created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The value to assign to the createdDateTime
    *
    * @return PlannerPlanContext The PlannerPlanContext
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the displayNameSegments
    * The segments of the name of the external experience. Segments represent a hierarchical structure that allows other apps to display the relationship.
    *
    * @return string The displayNameSegments
    */
    public function getDisplayNameSegments()
    {
        if (array_key_exists("displayNameSegments", $this->_propDict)) {
            return $this->_propDict["displayNameSegments"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayNameSegments
    * The segments of the name of the external experience. Segments represent a hierarchical structure that allows other apps to display the relationship.
    *
    * @param string $val The value of the displayNameSegments
    *
    * @return PlannerPlanContext
    */
    public function setDisplayNameSegments($val)
    {
        $this->_propDict["displayNameSegments"] = $val;
        return $this;
    }
    /**
    * Gets the isCreationContext
    * Read-only. Indicates whether the plan is created from the specified context. Auto-generated based on whether the context is specified as part of plan creation.
    *
    * @return bool The isCreationContext
    */
    public function getIsCreationContext()
    {
        if (array_key_exists("isCreationContext", $this->_propDict)) {
            return $this->_propDict["isCreationContext"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isCreationContext
    * Read-only. Indicates whether the plan is created from the specified context. Auto-generated based on whether the context is specified as part of plan creation.
    *
    * @param bool $val The value of the isCreationContext
    *
    * @return PlannerPlanContext
    */
    public function setIsCreationContext($val)
    {
        $this->_propDict["isCreationContext"] = $val;
        return $this;
    }
    /**
    * Gets the ownerAppId
    * Read-only. ID of the app that created the plannerPlanContext.
    *
    * @return string The ownerAppId
    */
    public function getOwnerAppId()
    {
        if (array_key_exists("ownerAppId", $this->_propDict)) {
            return $this->_propDict["ownerAppId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ownerAppId
    * Read-only. ID of the app that created the plannerPlanContext.
    *
    * @param string $val The value of the ownerAppId
    *
    * @return PlannerPlanContext
    */
    public function setOwnerAppId($val)
    {
        $this->_propDict["ownerAppId"] = $val;
        return $this;
    }
}
