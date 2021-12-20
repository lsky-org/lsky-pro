<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* BookingService File
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
* BookingService class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class BookingService extends BookingNamedEntity
{
    /**
    * Gets the additionalInformation
    *
    * @return string The additionalInformation
    */
    public function getAdditionalInformation()
    {
        if (array_key_exists("additionalInformation", $this->_propDict)) {
            return $this->_propDict["additionalInformation"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the additionalInformation
    *
    * @param string $val The additionalInformation
    *
    * @return BookingService
    */
    public function setAdditionalInformation($val)
    {
        $this->_propDict["additionalInformation"] = $val;
        return $this;
    }
    
    /**
    * Gets the defaultDuration
    * The default length of the service, represented in numbers of days, hours, minutes, and seconds. For example, P11D23H59M59.999999999999S.
    *
    * @return Duration The defaultDuration
    */
    public function getDefaultDuration()
    {
        if (array_key_exists("defaultDuration", $this->_propDict)) {
            if (is_a($this->_propDict["defaultDuration"], "\Beta\Microsoft\Graph\Model\Duration")) {
                return $this->_propDict["defaultDuration"];
            } else {
                $this->_propDict["defaultDuration"] = new Duration($this->_propDict["defaultDuration"]);
                return $this->_propDict["defaultDuration"];
            }
        }
        return null;
    }
    
    /**
    * Sets the defaultDuration
    * The default length of the service, represented in numbers of days, hours, minutes, and seconds. For example, P11D23H59M59.999999999999S.
    *
    * @param Duration $val The defaultDuration
    *
    * @return BookingService
    */
    public function setDefaultDuration($val)
    {
        $this->_propDict["defaultDuration"] = $val;
        return $this;
    }
    
    /**
    * Gets the defaultLocation
    * The default physical location for the service.
    *
    * @return Location The defaultLocation
    */
    public function getDefaultLocation()
    {
        if (array_key_exists("defaultLocation", $this->_propDict)) {
            if (is_a($this->_propDict["defaultLocation"], "\Beta\Microsoft\Graph\Model\Location")) {
                return $this->_propDict["defaultLocation"];
            } else {
                $this->_propDict["defaultLocation"] = new Location($this->_propDict["defaultLocation"]);
                return $this->_propDict["defaultLocation"];
            }
        }
        return null;
    }
    
    /**
    * Sets the defaultLocation
    * The default physical location for the service.
    *
    * @param Location $val The defaultLocation
    *
    * @return BookingService
    */
    public function setDefaultLocation($val)
    {
        $this->_propDict["defaultLocation"] = $val;
        return $this;
    }
    
    /**
    * Gets the defaultPrice
    * The default monetary price for the service.
    *
    * @return float The defaultPrice
    */
    public function getDefaultPrice()
    {
        if (array_key_exists("defaultPrice", $this->_propDict)) {
            return $this->_propDict["defaultPrice"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the defaultPrice
    * The default monetary price for the service.
    *
    * @param float $val The defaultPrice
    *
    * @return BookingService
    */
    public function setDefaultPrice($val)
    {
        $this->_propDict["defaultPrice"] = $val;
        return $this;
    }
    
    /**
    * Gets the defaultPriceType
    * The default way the service is charged. Possible values are: undefined, fixedPrice, startingAt, hourly, free, priceVaries, callUs, notSet.
    *
    * @return BookingPriceType The defaultPriceType
    */
    public function getDefaultPriceType()
    {
        if (array_key_exists("defaultPriceType", $this->_propDict)) {
            if (is_a($this->_propDict["defaultPriceType"], "\Beta\Microsoft\Graph\Model\BookingPriceType")) {
                return $this->_propDict["defaultPriceType"];
            } else {
                $this->_propDict["defaultPriceType"] = new BookingPriceType($this->_propDict["defaultPriceType"]);
                return $this->_propDict["defaultPriceType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the defaultPriceType
    * The default way the service is charged. Possible values are: undefined, fixedPrice, startingAt, hourly, free, priceVaries, callUs, notSet.
    *
    * @param BookingPriceType $val The defaultPriceType
    *
    * @return BookingService
    */
    public function setDefaultPriceType($val)
    {
        $this->_propDict["defaultPriceType"] = $val;
        return $this;
    }
    

     /** 
     * Gets the defaultReminders
    * The value of this property is only available when reading an individual booking service by id.
     *
     * @return array The defaultReminders
     */
    public function getDefaultReminders()
    {
        if (array_key_exists("defaultReminders", $this->_propDict)) {
           return $this->_propDict["defaultReminders"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the defaultReminders
    * The value of this property is only available when reading an individual booking service by id.
    *
    * @param BookingReminder $val The defaultReminders
    *
    * @return BookingService
    */
    public function setDefaultReminders($val)
    {
		$this->_propDict["defaultReminders"] = $val;
        return $this;
    }
    
    /**
    * Gets the description
    * A text description for the service.
    *
    * @return string The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the description
    * A text description for the service.
    *
    * @param string $val The description
    *
    * @return BookingService
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the isHiddenFromCustomers
    * True means this service is not available to customers for booking.
    *
    * @return bool The isHiddenFromCustomers
    */
    public function getIsHiddenFromCustomers()
    {
        if (array_key_exists("isHiddenFromCustomers", $this->_propDict)) {
            return $this->_propDict["isHiddenFromCustomers"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isHiddenFromCustomers
    * True means this service is not available to customers for booking.
    *
    * @param bool $val The isHiddenFromCustomers
    *
    * @return BookingService
    */
    public function setIsHiddenFromCustomers($val)
    {
        $this->_propDict["isHiddenFromCustomers"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the isLocationOnline
    *
    * @return bool The isLocationOnline
    */
    public function getIsLocationOnline()
    {
        if (array_key_exists("isLocationOnline", $this->_propDict)) {
            return $this->_propDict["isLocationOnline"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isLocationOnline
    *
    * @param bool $val The isLocationOnline
    *
    * @return BookingService
    */
    public function setIsLocationOnline($val)
    {
        $this->_propDict["isLocationOnline"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the notes
    * Additional information about this service.
    *
    * @return string The notes
    */
    public function getNotes()
    {
        if (array_key_exists("notes", $this->_propDict)) {
            return $this->_propDict["notes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the notes
    * Additional information about this service.
    *
    * @param string $val The notes
    *
    * @return BookingService
    */
    public function setNotes($val)
    {
        $this->_propDict["notes"] = $val;
        return $this;
    }
    
    /**
    * Gets the postBuffer
    * The time to buffer after an appointment for this service ends, and before the next customer appointment can be booked.
    *
    * @return Duration The postBuffer
    */
    public function getPostBuffer()
    {
        if (array_key_exists("postBuffer", $this->_propDict)) {
            if (is_a($this->_propDict["postBuffer"], "\Beta\Microsoft\Graph\Model\Duration")) {
                return $this->_propDict["postBuffer"];
            } else {
                $this->_propDict["postBuffer"] = new Duration($this->_propDict["postBuffer"]);
                return $this->_propDict["postBuffer"];
            }
        }
        return null;
    }
    
    /**
    * Sets the postBuffer
    * The time to buffer after an appointment for this service ends, and before the next customer appointment can be booked.
    *
    * @param Duration $val The postBuffer
    *
    * @return BookingService
    */
    public function setPostBuffer($val)
    {
        $this->_propDict["postBuffer"] = $val;
        return $this;
    }
    
    /**
    * Gets the preBuffer
    * The time to buffer before an appointment for this service can start.
    *
    * @return Duration The preBuffer
    */
    public function getPreBuffer()
    {
        if (array_key_exists("preBuffer", $this->_propDict)) {
            if (is_a($this->_propDict["preBuffer"], "\Beta\Microsoft\Graph\Model\Duration")) {
                return $this->_propDict["preBuffer"];
            } else {
                $this->_propDict["preBuffer"] = new Duration($this->_propDict["preBuffer"]);
                return $this->_propDict["preBuffer"];
            }
        }
        return null;
    }
    
    /**
    * Sets the preBuffer
    * The time to buffer before an appointment for this service can start.
    *
    * @param Duration $val The preBuffer
    *
    * @return BookingService
    */
    public function setPreBuffer($val)
    {
        $this->_propDict["preBuffer"] = $val;
        return $this;
    }
    
    /**
    * Gets the schedulingPolicy
    * The set of policies that determine how appointments for this type of service should be created and managed.
    *
    * @return BookingSchedulingPolicy The schedulingPolicy
    */
    public function getSchedulingPolicy()
    {
        if (array_key_exists("schedulingPolicy", $this->_propDict)) {
            if (is_a($this->_propDict["schedulingPolicy"], "\Beta\Microsoft\Graph\Model\BookingSchedulingPolicy")) {
                return $this->_propDict["schedulingPolicy"];
            } else {
                $this->_propDict["schedulingPolicy"] = new BookingSchedulingPolicy($this->_propDict["schedulingPolicy"]);
                return $this->_propDict["schedulingPolicy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the schedulingPolicy
    * The set of policies that determine how appointments for this type of service should be created and managed.
    *
    * @param BookingSchedulingPolicy $val The schedulingPolicy
    *
    * @return BookingService
    */
    public function setSchedulingPolicy($val)
    {
        $this->_propDict["schedulingPolicy"] = $val;
        return $this;
    }
    
    /**
    * Gets the staffMemberIds
    * Represents those staff members who provide this service.
    *
    * @return string The staffMemberIds
    */
    public function getStaffMemberIds()
    {
        if (array_key_exists("staffMemberIds", $this->_propDict)) {
            return $this->_propDict["staffMemberIds"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the staffMemberIds
    * Represents those staff members who provide this service.
    *
    * @param string $val The staffMemberIds
    *
    * @return BookingService
    */
    public function setStaffMemberIds($val)
    {
        $this->_propDict["staffMemberIds"] = $val;
        return $this;
    }
    
}
