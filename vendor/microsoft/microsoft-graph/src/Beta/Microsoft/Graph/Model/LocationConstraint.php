<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* LocationConstraint File
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
* LocationConstraint class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class LocationConstraint extends Entity
{
    /**
    * Gets the isRequired
    * The client requests the service to include in the response a meeting location for the meeting. If this is true and all the resources are busy, findMeetingTimes will not return any meeting time suggestions. If this is false and all the resources are busy, findMeetingTimes would still look for meeting times without locations.
    *
    * @return bool The isRequired
    */
    public function getIsRequired()
    {
        if (array_key_exists("isRequired", $this->_propDict)) {
            return $this->_propDict["isRequired"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isRequired
    * The client requests the service to include in the response a meeting location for the meeting. If this is true and all the resources are busy, findMeetingTimes will not return any meeting time suggestions. If this is false and all the resources are busy, findMeetingTimes would still look for meeting times without locations.
    *
    * @param bool $val The value of the isRequired
    *
    * @return LocationConstraint
    */
    public function setIsRequired($val)
    {
        $this->_propDict["isRequired"] = $val;
        return $this;
    }

    /**
    * Gets the locations
    * Constraint information for one or more locations that the client requests for the meeting.
    *
    * @return LocationConstraintItem The locations
    */
    public function getLocations()
    {
        if (array_key_exists("locations", $this->_propDict)) {
            if (is_a($this->_propDict["locations"], "\Beta\Microsoft\Graph\Model\LocationConstraintItem")) {
                return $this->_propDict["locations"];
            } else {
                $this->_propDict["locations"] = new LocationConstraintItem($this->_propDict["locations"]);
                return $this->_propDict["locations"];
            }
        }
        return null;
    }

    /**
    * Sets the locations
    * Constraint information for one or more locations that the client requests for the meeting.
    *
    * @param LocationConstraintItem $val The value to assign to the locations
    *
    * @return LocationConstraint The LocationConstraint
    */
    public function setLocations($val)
    {
        $this->_propDict["locations"] = $val;
         return $this;
    }
    /**
    * Gets the suggestLocation
    * The client requests the service to suggest one or more meeting locations.
    *
    * @return bool The suggestLocation
    */
    public function getSuggestLocation()
    {
        if (array_key_exists("suggestLocation", $this->_propDict)) {
            return $this->_propDict["suggestLocation"];
        } else {
            return null;
        }
    }

    /**
    * Sets the suggestLocation
    * The client requests the service to suggest one or more meeting locations.
    *
    * @param bool $val The value of the suggestLocation
    *
    * @return LocationConstraint
    */
    public function setSuggestLocation($val)
    {
        $this->_propDict["suggestLocation"] = $val;
        return $this;
    }
}
