<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ItemActivityTimeSet File
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
* ItemActivityTimeSet class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ItemActivityTimeSet extends Entity
{

    /**
    * Gets the lastRecordedDateTime
    *
    * @return \DateTime The lastRecordedDateTime
    */
    public function getLastRecordedDateTime()
    {
        if (array_key_exists("lastRecordedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastRecordedDateTime"], "\DateTime")) {
                return $this->_propDict["lastRecordedDateTime"];
            } else {
                $this->_propDict["lastRecordedDateTime"] = new \DateTime($this->_propDict["lastRecordedDateTime"]);
                return $this->_propDict["lastRecordedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastRecordedDateTime
    *
    * @param \DateTime $val The value to assign to the lastRecordedDateTime
    *
    * @return ItemActivityTimeSet The ItemActivityTimeSet
    */
    public function setLastRecordedDateTime($val)
    {
        $this->_propDict["lastRecordedDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the observedDateTime
    * When the activity was observed to take place.
    *
    * @return \DateTime The observedDateTime
    */
    public function getObservedDateTime()
    {
        if (array_key_exists("observedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["observedDateTime"], "\DateTime")) {
                return $this->_propDict["observedDateTime"];
            } else {
                $this->_propDict["observedDateTime"] = new \DateTime($this->_propDict["observedDateTime"]);
                return $this->_propDict["observedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the observedDateTime
    * When the activity was observed to take place.
    *
    * @param \DateTime $val The value to assign to the observedDateTime
    *
    * @return ItemActivityTimeSet The ItemActivityTimeSet
    */
    public function setObservedDateTime($val)
    {
        $this->_propDict["observedDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the recordedDateTime
    * When the observation was recorded on the service.
    *
    * @return \DateTime The recordedDateTime
    */
    public function getRecordedDateTime()
    {
        if (array_key_exists("recordedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["recordedDateTime"], "\DateTime")) {
                return $this->_propDict["recordedDateTime"];
            } else {
                $this->_propDict["recordedDateTime"] = new \DateTime($this->_propDict["recordedDateTime"]);
                return $this->_propDict["recordedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the recordedDateTime
    * When the observation was recorded on the service.
    *
    * @param \DateTime $val The value to assign to the recordedDateTime
    *
    * @return ItemActivityTimeSet The ItemActivityTimeSet
    */
    public function setRecordedDateTime($val)
    {
        $this->_propDict["recordedDateTime"] = $val;
         return $this;
    }
}
