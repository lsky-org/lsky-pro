<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessReviewRecurrenceSettings File
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
* AccessReviewRecurrenceSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessReviewRecurrenceSettings extends Entity
{
    /**
    * Gets the durationInDays
    * The duration in days for recurrence.
    *
    * @return int The durationInDays
    */
    public function getDurationInDays()
    {
        if (array_key_exists("durationInDays", $this->_propDict)) {
            return $this->_propDict["durationInDays"];
        } else {
            return null;
        }
    }

    /**
    * Sets the durationInDays
    * The duration in days for recurrence.
    *
    * @param int $val The value of the durationInDays
    *
    * @return AccessReviewRecurrenceSettings
    */
    public function setDurationInDays($val)
    {
        $this->_propDict["durationInDays"] = $val;
        return $this;
    }
    /**
    * Gets the recurrenceCount
    * The count of recurrences, if the value of recurrenceEndType is occurrences, or 0 otherwise.
    *
    * @return int The recurrenceCount
    */
    public function getRecurrenceCount()
    {
        if (array_key_exists("recurrenceCount", $this->_propDict)) {
            return $this->_propDict["recurrenceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the recurrenceCount
    * The count of recurrences, if the value of recurrenceEndType is occurrences, or 0 otherwise.
    *
    * @param int $val The value of the recurrenceCount
    *
    * @return AccessReviewRecurrenceSettings
    */
    public function setRecurrenceCount($val)
    {
        $this->_propDict["recurrenceCount"] = $val;
        return $this;
    }
    /**
    * Gets the recurrenceEndType
    * How the recurrence ends. Possible values: never, endBy, occurrences, or recurrenceCount. If it is never, then there is no explicit end of the recurrence series. If it is endBy, then the recurrence ends at a certain date. If it is occurrences, then the series ends after recurrenceCount instances of the review have completed.
    *
    * @return string The recurrenceEndType
    */
    public function getRecurrenceEndType()
    {
        if (array_key_exists("recurrenceEndType", $this->_propDict)) {
            return $this->_propDict["recurrenceEndType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the recurrenceEndType
    * How the recurrence ends. Possible values: never, endBy, occurrences, or recurrenceCount. If it is never, then there is no explicit end of the recurrence series. If it is endBy, then the recurrence ends at a certain date. If it is occurrences, then the series ends after recurrenceCount instances of the review have completed.
    *
    * @param string $val The value of the recurrenceEndType
    *
    * @return AccessReviewRecurrenceSettings
    */
    public function setRecurrenceEndType($val)
    {
        $this->_propDict["recurrenceEndType"] = $val;
        return $this;
    }
    /**
    * Gets the recurrenceType
    * The recurrence interval. Possible vaules: onetime, weekly, monthly, quarterly, halfyearly or annual.
    *
    * @return string The recurrenceType
    */
    public function getRecurrenceType()
    {
        if (array_key_exists("recurrenceType", $this->_propDict)) {
            return $this->_propDict["recurrenceType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the recurrenceType
    * The recurrence interval. Possible vaules: onetime, weekly, monthly, quarterly, halfyearly or annual.
    *
    * @param string $val The value of the recurrenceType
    *
    * @return AccessReviewRecurrenceSettings
    */
    public function setRecurrenceType($val)
    {
        $this->_propDict["recurrenceType"] = $val;
        return $this;
    }
}
