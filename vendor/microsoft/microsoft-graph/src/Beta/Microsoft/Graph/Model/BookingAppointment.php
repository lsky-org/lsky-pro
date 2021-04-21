<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* BookingAppointment File
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
* BookingAppointment class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class BookingAppointment extends Entity
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
    * @return BookingAppointment
    */
    public function setAdditionalInformation($val)
    {
        $this->_propDict["additionalInformation"] = $val;
        return $this;
    }
    
    /**
    * Gets the customerEmailAddress
    * The SMTP address of the bookingCustomer who is booking the appointment.
    *
    * @return string The customerEmailAddress
    */
    public function getCustomerEmailAddress()
    {
        if (array_key_exists("customerEmailAddress", $this->_propDict)) {
            return $this->_propDict["customerEmailAddress"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the customerEmailAddress
    * The SMTP address of the bookingCustomer who is booking the appointment.
    *
    * @param string $val The customerEmailAddress
    *
    * @return BookingAppointment
    */
    public function setCustomerEmailAddress($val)
    {
        $this->_propDict["customerEmailAddress"] = $val;
        return $this;
    }
    
    /**
    * Gets the customerId
    * If CustomerId is not specified when an appointment is created then a new customer is created based on the appointment customer information. Once set, the customerId should be considered immutable.
    *
    * @return string The customerId
    */
    public function getCustomerId()
    {
        if (array_key_exists("customerId", $this->_propDict)) {
            return $this->_propDict["customerId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the customerId
    * If CustomerId is not specified when an appointment is created then a new customer is created based on the appointment customer information. Once set, the customerId should be considered immutable.
    *
    * @param string $val The customerId
    *
    * @return BookingAppointment
    */
    public function setCustomerId($val)
    {
        $this->_propDict["customerId"] = $val;
        return $this;
    }
    
    /**
    * Gets the customerLocation
    * Represents location information for the bookingCustomer who is booking the appointment.
    *
    * @return Location The customerLocation
    */
    public function getCustomerLocation()
    {
        if (array_key_exists("customerLocation", $this->_propDict)) {
            if (is_a($this->_propDict["customerLocation"], "\Beta\Microsoft\Graph\Model\Location")) {
                return $this->_propDict["customerLocation"];
            } else {
                $this->_propDict["customerLocation"] = new Location($this->_propDict["customerLocation"]);
                return $this->_propDict["customerLocation"];
            }
        }
        return null;
    }
    
    /**
    * Sets the customerLocation
    * Represents location information for the bookingCustomer who is booking the appointment.
    *
    * @param Location $val The customerLocation
    *
    * @return BookingAppointment
    */
    public function setCustomerLocation($val)
    {
        $this->_propDict["customerLocation"] = $val;
        return $this;
    }
    
    /**
    * Gets the customerName
    * The customer's name.
    *
    * @return string The customerName
    */
    public function getCustomerName()
    {
        if (array_key_exists("customerName", $this->_propDict)) {
            return $this->_propDict["customerName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the customerName
    * The customer's name.
    *
    * @param string $val The customerName
    *
    * @return BookingAppointment
    */
    public function setCustomerName($val)
    {
        $this->_propDict["customerName"] = $val;
        return $this;
    }
    
    /**
    * Gets the customerNotes
    * The value of this property is only available when reading an individual booking appointment by id. Its value can only be set when creating a new appointment with a new customer, ie, without specifying a CustomerId. After that, the property is computed from the customer represented by CustomerId.
    *
    * @return string The customerNotes
    */
    public function getCustomerNotes()
    {
        if (array_key_exists("customerNotes", $this->_propDict)) {
            return $this->_propDict["customerNotes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the customerNotes
    * The value of this property is only available when reading an individual booking appointment by id. Its value can only be set when creating a new appointment with a new customer, ie, without specifying a CustomerId. After that, the property is computed from the customer represented by CustomerId.
    *
    * @param string $val The customerNotes
    *
    * @return BookingAppointment
    */
    public function setCustomerNotes($val)
    {
        $this->_propDict["customerNotes"] = $val;
        return $this;
    }
    
    /**
    * Gets the customerPhone
    * The customer's phone number.
    *
    * @return string The customerPhone
    */
    public function getCustomerPhone()
    {
        if (array_key_exists("customerPhone", $this->_propDict)) {
            return $this->_propDict["customerPhone"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the customerPhone
    * The customer's phone number.
    *
    * @param string $val The customerPhone
    *
    * @return BookingAppointment
    */
    public function setCustomerPhone($val)
    {
        $this->_propDict["customerPhone"] = $val;
        return $this;
    }
    
    /**
    * Gets the duration
    * The length of the appointment, denoted in ISO8601 format.
    *
    * @return Duration The duration
    */
    public function getDuration()
    {
        if (array_key_exists("duration", $this->_propDict)) {
            if (is_a($this->_propDict["duration"], "\Beta\Microsoft\Graph\Model\Duration")) {
                return $this->_propDict["duration"];
            } else {
                $this->_propDict["duration"] = new Duration($this->_propDict["duration"]);
                return $this->_propDict["duration"];
            }
        }
        return null;
    }
    
    /**
    * Sets the duration
    * The length of the appointment, denoted in ISO8601 format.
    *
    * @param Duration $val The duration
    *
    * @return BookingAppointment
    */
    public function setDuration($val)
    {
        $this->_propDict["duration"] = $val;
        return $this;
    }
    
    /**
    * Gets the end
    * The date, time, and time zone that the appointment ends.
    *
    * @return DateTimeTimeZone The end
    */
    public function getEnd()
    {
        if (array_key_exists("end", $this->_propDict)) {
            if (is_a($this->_propDict["end"], "\Beta\Microsoft\Graph\Model\DateTimeTimeZone")) {
                return $this->_propDict["end"];
            } else {
                $this->_propDict["end"] = new DateTimeTimeZone($this->_propDict["end"]);
                return $this->_propDict["end"];
            }
        }
        return null;
    }
    
    /**
    * Sets the end
    * The date, time, and time zone that the appointment ends.
    *
    * @param DateTimeTimeZone $val The end
    *
    * @return BookingAppointment
    */
    public function setEnd($val)
    {
        $this->_propDict["end"] = $val;
        return $this;
    }
    
    /**
    * Gets the invoiceAmount
    * The billed amount on the invoice.
    *
    * @return float The invoiceAmount
    */
    public function getInvoiceAmount()
    {
        if (array_key_exists("invoiceAmount", $this->_propDict)) {
            return $this->_propDict["invoiceAmount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the invoiceAmount
    * The billed amount on the invoice.
    *
    * @param float $val The invoiceAmount
    *
    * @return BookingAppointment
    */
    public function setInvoiceAmount($val)
    {
        $this->_propDict["invoiceAmount"] = $val;
        return $this;
    }
    
    /**
    * Gets the invoiceDate
    * The date, time, and time zone of the invoice for this appointment.
    *
    * @return DateTimeTimeZone The invoiceDate
    */
    public function getInvoiceDate()
    {
        if (array_key_exists("invoiceDate", $this->_propDict)) {
            if (is_a($this->_propDict["invoiceDate"], "\Beta\Microsoft\Graph\Model\DateTimeTimeZone")) {
                return $this->_propDict["invoiceDate"];
            } else {
                $this->_propDict["invoiceDate"] = new DateTimeTimeZone($this->_propDict["invoiceDate"]);
                return $this->_propDict["invoiceDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the invoiceDate
    * The date, time, and time zone of the invoice for this appointment.
    *
    * @param DateTimeTimeZone $val The invoiceDate
    *
    * @return BookingAppointment
    */
    public function setInvoiceDate($val)
    {
        $this->_propDict["invoiceDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the invoiceId
    * The ID of the invoice.
    *
    * @return string The invoiceId
    */
    public function getInvoiceId()
    {
        if (array_key_exists("invoiceId", $this->_propDict)) {
            return $this->_propDict["invoiceId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the invoiceId
    * The ID of the invoice.
    *
    * @param string $val The invoiceId
    *
    * @return BookingAppointment
    */
    public function setInvoiceId($val)
    {
        $this->_propDict["invoiceId"] = $val;
        return $this;
    }
    
    /**
    * Gets the invoiceStatus
    * The status of the invoice. Possible values are: draft, reviewing, open, canceled, paid, corrective.
    *
    * @return BookingInvoiceStatus The invoiceStatus
    */
    public function getInvoiceStatus()
    {
        if (array_key_exists("invoiceStatus", $this->_propDict)) {
            if (is_a($this->_propDict["invoiceStatus"], "\Beta\Microsoft\Graph\Model\BookingInvoiceStatus")) {
                return $this->_propDict["invoiceStatus"];
            } else {
                $this->_propDict["invoiceStatus"] = new BookingInvoiceStatus($this->_propDict["invoiceStatus"]);
                return $this->_propDict["invoiceStatus"];
            }
        }
        return null;
    }
    
    /**
    * Sets the invoiceStatus
    * The status of the invoice. Possible values are: draft, reviewing, open, canceled, paid, corrective.
    *
    * @param BookingInvoiceStatus $val The invoiceStatus
    *
    * @return BookingAppointment
    */
    public function setInvoiceStatus($val)
    {
        $this->_propDict["invoiceStatus"] = $val;
        return $this;
    }
    
    /**
    * Gets the invoiceUrl
    * The URL of the invoice in Microsoft Bookings.
    *
    * @return string The invoiceUrl
    */
    public function getInvoiceUrl()
    {
        if (array_key_exists("invoiceUrl", $this->_propDict)) {
            return $this->_propDict["invoiceUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the invoiceUrl
    * The URL of the invoice in Microsoft Bookings.
    *
    * @param string $val The invoiceUrl
    *
    * @return BookingAppointment
    */
    public function setInvoiceUrl($val)
    {
        $this->_propDict["invoiceUrl"] = $val;
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
    * @return BookingAppointment
    */
    public function setIsLocationOnline($val)
    {
        $this->_propDict["isLocationOnline"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the onlineMeetingUrl
    *
    * @return string The onlineMeetingUrl
    */
    public function getOnlineMeetingUrl()
    {
        if (array_key_exists("onlineMeetingUrl", $this->_propDict)) {
            return $this->_propDict["onlineMeetingUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the onlineMeetingUrl
    *
    * @param string $val The onlineMeetingUrl
    *
    * @return BookingAppointment
    */
    public function setOnlineMeetingUrl($val)
    {
        $this->_propDict["onlineMeetingUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the optOutOfCustomerEmail
    * True indicates that the bookingCustomer for this appointment does not wish to receive a confirmation for this appointment.
    *
    * @return bool The optOutOfCustomerEmail
    */
    public function getOptOutOfCustomerEmail()
    {
        if (array_key_exists("optOutOfCustomerEmail", $this->_propDict)) {
            return $this->_propDict["optOutOfCustomerEmail"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the optOutOfCustomerEmail
    * True indicates that the bookingCustomer for this appointment does not wish to receive a confirmation for this appointment.
    *
    * @param bool $val The optOutOfCustomerEmail
    *
    * @return BookingAppointment
    */
    public function setOptOutOfCustomerEmail($val)
    {
        $this->_propDict["optOutOfCustomerEmail"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the postBuffer
    * The amount of time to reserve after the appointment ends, for cleaning up, as an example. The value is expressed in ISO8601 format.
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
    * The amount of time to reserve after the appointment ends, for cleaning up, as an example. The value is expressed in ISO8601 format.
    *
    * @param Duration $val The postBuffer
    *
    * @return BookingAppointment
    */
    public function setPostBuffer($val)
    {
        $this->_propDict["postBuffer"] = $val;
        return $this;
    }
    
    /**
    * Gets the preBuffer
    * The amount of time to reserve before the appointment begins, for preparation, as an example. The value is expressed in ISO8601 format.
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
    * The amount of time to reserve before the appointment begins, for preparation, as an example. The value is expressed in ISO8601 format.
    *
    * @param Duration $val The preBuffer
    *
    * @return BookingAppointment
    */
    public function setPreBuffer($val)
    {
        $this->_propDict["preBuffer"] = $val;
        return $this;
    }
    
    /**
    * Gets the price
    * The regular price for an appointment for the specified bookingService.
    *
    * @return float The price
    */
    public function getPrice()
    {
        if (array_key_exists("price", $this->_propDict)) {
            return $this->_propDict["price"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the price
    * The regular price for an appointment for the specified bookingService.
    *
    * @param float $val The price
    *
    * @return BookingAppointment
    */
    public function setPrice($val)
    {
        $this->_propDict["price"] = $val;
        return $this;
    }
    
    /**
    * Gets the priceType
    * A setting to provide flexibility for the pricing structure of services. Possible values are: undefined, fixedPrice, startingAt, hourly, free, priceVaries, callUs, notSet.
    *
    * @return BookingPriceType The priceType
    */
    public function getPriceType()
    {
        if (array_key_exists("priceType", $this->_propDict)) {
            if (is_a($this->_propDict["priceType"], "\Beta\Microsoft\Graph\Model\BookingPriceType")) {
                return $this->_propDict["priceType"];
            } else {
                $this->_propDict["priceType"] = new BookingPriceType($this->_propDict["priceType"]);
                return $this->_propDict["priceType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the priceType
    * A setting to provide flexibility for the pricing structure of services. Possible values are: undefined, fixedPrice, startingAt, hourly, free, priceVaries, callUs, notSet.
    *
    * @param BookingPriceType $val The priceType
    *
    * @return BookingAppointment
    */
    public function setPriceType($val)
    {
        $this->_propDict["priceType"] = $val;
        return $this;
    }
    

     /** 
     * Gets the reminders
    * The value of this property is only available when reading an individual booking appointment by id.
     *
     * @return array The reminders
     */
    public function getReminders()
    {
        if (array_key_exists("reminders", $this->_propDict)) {
           return $this->_propDict["reminders"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the reminders
    * The value of this property is only available when reading an individual booking appointment by id.
    *
    * @param BookingReminder $val The reminders
    *
    * @return BookingAppointment
    */
    public function setReminders($val)
    {
		$this->_propDict["reminders"] = $val;
        return $this;
    }
    
    /**
    * Gets the selfServiceAppointmentId
    * An additional tracking ID for the appointment, if the appointment has been created directly by the customer on the scheduling page, as opposed to by a staff member on the behalf of the customer.
    *
    * @return string The selfServiceAppointmentId
    */
    public function getSelfServiceAppointmentId()
    {
        if (array_key_exists("selfServiceAppointmentId", $this->_propDict)) {
            return $this->_propDict["selfServiceAppointmentId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the selfServiceAppointmentId
    * An additional tracking ID for the appointment, if the appointment has been created directly by the customer on the scheduling page, as opposed to by a staff member on the behalf of the customer.
    *
    * @param string $val The selfServiceAppointmentId
    *
    * @return BookingAppointment
    */
    public function setSelfServiceAppointmentId($val)
    {
        $this->_propDict["selfServiceAppointmentId"] = $val;
        return $this;
    }
    
    /**
    * Gets the serviceId
    * The ID of the bookingService associated with this appointment.
    *
    * @return string The serviceId
    */
    public function getServiceId()
    {
        if (array_key_exists("serviceId", $this->_propDict)) {
            return $this->_propDict["serviceId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the serviceId
    * The ID of the bookingService associated with this appointment.
    *
    * @param string $val The serviceId
    *
    * @return BookingAppointment
    */
    public function setServiceId($val)
    {
        $this->_propDict["serviceId"] = $val;
        return $this;
    }
    
    /**
    * Gets the serviceLocation
    * The location where the service is delivered.
    *
    * @return Location The serviceLocation
    */
    public function getServiceLocation()
    {
        if (array_key_exists("serviceLocation", $this->_propDict)) {
            if (is_a($this->_propDict["serviceLocation"], "\Beta\Microsoft\Graph\Model\Location")) {
                return $this->_propDict["serviceLocation"];
            } else {
                $this->_propDict["serviceLocation"] = new Location($this->_propDict["serviceLocation"]);
                return $this->_propDict["serviceLocation"];
            }
        }
        return null;
    }
    
    /**
    * Sets the serviceLocation
    * The location where the service is delivered.
    *
    * @param Location $val The serviceLocation
    *
    * @return BookingAppointment
    */
    public function setServiceLocation($val)
    {
        $this->_propDict["serviceLocation"] = $val;
        return $this;
    }
    
    /**
    * Gets the serviceName
    * This property is optional when creating a new appointment. If not specified, it is computed from the service associated with the appointment by the service id.
    *
    * @return string The serviceName
    */
    public function getServiceName()
    {
        if (array_key_exists("serviceName", $this->_propDict)) {
            return $this->_propDict["serviceName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the serviceName
    * This property is optional when creating a new appointment. If not specified, it is computed from the service associated with the appointment by the service id.
    *
    * @param string $val The serviceName
    *
    * @return BookingAppointment
    */
    public function setServiceName($val)
    {
        $this->_propDict["serviceName"] = $val;
        return $this;
    }
    
    /**
    * Gets the serviceNotes
    * The value of this property is only available when reading an individual booking appointment by id.
    *
    * @return string The serviceNotes
    */
    public function getServiceNotes()
    {
        if (array_key_exists("serviceNotes", $this->_propDict)) {
            return $this->_propDict["serviceNotes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the serviceNotes
    * The value of this property is only available when reading an individual booking appointment by id.
    *
    * @param string $val The serviceNotes
    *
    * @return BookingAppointment
    */
    public function setServiceNotes($val)
    {
        $this->_propDict["serviceNotes"] = $val;
        return $this;
    }
    
    /**
    * Gets the staffMemberIds
    * The ID of each bookingStaffMember who is scheduled in this appointment.
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
    * The ID of each bookingStaffMember who is scheduled in this appointment.
    *
    * @param string $val The staffMemberIds
    *
    * @return BookingAppointment
    */
    public function setStaffMemberIds($val)
    {
        $this->_propDict["staffMemberIds"] = $val;
        return $this;
    }
    
    /**
    * Gets the start
    * The date, time, and time zone that the appointment begins.
    *
    * @return DateTimeTimeZone The start
    */
    public function getStart()
    {
        if (array_key_exists("start", $this->_propDict)) {
            if (is_a($this->_propDict["start"], "\Beta\Microsoft\Graph\Model\DateTimeTimeZone")) {
                return $this->_propDict["start"];
            } else {
                $this->_propDict["start"] = new DateTimeTimeZone($this->_propDict["start"]);
                return $this->_propDict["start"];
            }
        }
        return null;
    }
    
    /**
    * Sets the start
    * The date, time, and time zone that the appointment begins.
    *
    * @param DateTimeTimeZone $val The start
    *
    * @return BookingAppointment
    */
    public function setStart($val)
    {
        $this->_propDict["start"] = $val;
        return $this;
    }
    
}
