<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* BookingBusiness File
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
* BookingBusiness class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class BookingBusiness extends BookingNamedEntity
{
    /**
    * Gets the address
    * The street address of the business. The address property, together with phone and webSiteUrl, appear in the footer of a business scheduling page.
    *
    * @return PhysicalAddress The address
    */
    public function getAddress()
    {
        if (array_key_exists("address", $this->_propDict)) {
            if (is_a($this->_propDict["address"], "\Beta\Microsoft\Graph\Model\PhysicalAddress")) {
                return $this->_propDict["address"];
            } else {
                $this->_propDict["address"] = new PhysicalAddress($this->_propDict["address"]);
                return $this->_propDict["address"];
            }
        }
        return null;
    }
    
    /**
    * Sets the address
    * The street address of the business. The address property, together with phone and webSiteUrl, appear in the footer of a business scheduling page.
    *
    * @param PhysicalAddress $val The address
    *
    * @return BookingBusiness
    */
    public function setAddress($val)
    {
        $this->_propDict["address"] = $val;
        return $this;
    }
    

     /** 
     * Gets the businessHours
    * The hours of operation for the business.
     *
     * @return array The businessHours
     */
    public function getBusinessHours()
    {
        if (array_key_exists("businessHours", $this->_propDict)) {
           return $this->_propDict["businessHours"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the businessHours
    * The hours of operation for the business.
    *
    * @param BookingWorkHours $val The businessHours
    *
    * @return BookingBusiness
    */
    public function setBusinessHours($val)
    {
		$this->_propDict["businessHours"] = $val;
        return $this;
    }
    
    /**
    * Gets the businessType
    * The type of business.
    *
    * @return string The businessType
    */
    public function getBusinessType()
    {
        if (array_key_exists("businessType", $this->_propDict)) {
            return $this->_propDict["businessType"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the businessType
    * The type of business.
    *
    * @param string $val The businessType
    *
    * @return BookingBusiness
    */
    public function setBusinessType($val)
    {
        $this->_propDict["businessType"] = $val;
        return $this;
    }
    
    /**
    * Gets the defaultCurrencyIso
    * The code for the currency that the business operates in on Microsoft Bookings.
    *
    * @return string The defaultCurrencyIso
    */
    public function getDefaultCurrencyIso()
    {
        if (array_key_exists("defaultCurrencyIso", $this->_propDict)) {
            return $this->_propDict["defaultCurrencyIso"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the defaultCurrencyIso
    * The code for the currency that the business operates in on Microsoft Bookings.
    *
    * @param string $val The defaultCurrencyIso
    *
    * @return BookingBusiness
    */
    public function setDefaultCurrencyIso($val)
    {
        $this->_propDict["defaultCurrencyIso"] = $val;
        return $this;
    }
    
    /**
    * Gets the email
    * The email address for the business.
    *
    * @return string The email
    */
    public function getEmail()
    {
        if (array_key_exists("email", $this->_propDict)) {
            return $this->_propDict["email"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the email
    * The email address for the business.
    *
    * @param string $val The email
    *
    * @return BookingBusiness
    */
    public function setEmail($val)
    {
        $this->_propDict["email"] = $val;
        return $this;
    }
    
    /**
    * Gets the isPublished
    * The scheduling page has been made available to external customers. Use the publish and unpublish actions to set this property. Read-only.
    *
    * @return bool The isPublished
    */
    public function getIsPublished()
    {
        if (array_key_exists("isPublished", $this->_propDict)) {
            return $this->_propDict["isPublished"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isPublished
    * The scheduling page has been made available to external customers. Use the publish and unpublish actions to set this property. Read-only.
    *
    * @param bool $val The isPublished
    *
    * @return BookingBusiness
    */
    public function setIsPublished($val)
    {
        $this->_propDict["isPublished"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the phone
    * The telephone number for the business. The phone property, together with address and webSiteUrl, appear in the footer of a business scheduling page.
    *
    * @return string The phone
    */
    public function getPhone()
    {
        if (array_key_exists("phone", $this->_propDict)) {
            return $this->_propDict["phone"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the phone
    * The telephone number for the business. The phone property, together with address and webSiteUrl, appear in the footer of a business scheduling page.
    *
    * @param string $val The phone
    *
    * @return BookingBusiness
    */
    public function setPhone($val)
    {
        $this->_propDict["phone"] = $val;
        return $this;
    }
    
    /**
    * Gets the publicUrl
    * The URL for the scheduling page, which is set after you publish or unpublish the page. Read-only.
    *
    * @return string The publicUrl
    */
    public function getPublicUrl()
    {
        if (array_key_exists("publicUrl", $this->_propDict)) {
            return $this->_propDict["publicUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the publicUrl
    * The URL for the scheduling page, which is set after you publish or unpublish the page. Read-only.
    *
    * @param string $val The publicUrl
    *
    * @return BookingBusiness
    */
    public function setPublicUrl($val)
    {
        $this->_propDict["publicUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the schedulingPolicy
    * Specifies how bookings can be created for this business.
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
    * Specifies how bookings can be created for this business.
    *
    * @param BookingSchedulingPolicy $val The schedulingPolicy
    *
    * @return BookingBusiness
    */
    public function setSchedulingPolicy($val)
    {
        $this->_propDict["schedulingPolicy"] = $val;
        return $this;
    }
    
    /**
    * Gets the webSiteUrl
    * Example: https://www.contoso.com
    *
    * @return string The webSiteUrl
    */
    public function getWebSiteUrl()
    {
        if (array_key_exists("webSiteUrl", $this->_propDict)) {
            return $this->_propDict["webSiteUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the webSiteUrl
    * Example: https://www.contoso.com
    *
    * @param string $val The webSiteUrl
    *
    * @return BookingBusiness
    */
    public function setWebSiteUrl($val)
    {
        $this->_propDict["webSiteUrl"] = $val;
        return $this;
    }
    

     /** 
     * Gets the appointments
    * All the appointments of this business. Read-only. Nullable.
     *
     * @return array The appointments
     */
    public function getAppointments()
    {
        if (array_key_exists("appointments", $this->_propDict)) {
           return $this->_propDict["appointments"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the appointments
    * All the appointments of this business. Read-only. Nullable.
    *
    * @param BookingAppointment $val The appointments
    *
    * @return BookingBusiness
    */
    public function setAppointments($val)
    {
		$this->_propDict["appointments"] = $val;
        return $this;
    }
    

     /** 
     * Gets the calendarView
    * The set of appointments of this business in a specified date range. Read-only. Nullable.
     *
     * @return array The calendarView
     */
    public function getCalendarView()
    {
        if (array_key_exists("calendarView", $this->_propDict)) {
           return $this->_propDict["calendarView"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the calendarView
    * The set of appointments of this business in a specified date range. Read-only. Nullable.
    *
    * @param BookingAppointment $val The calendarView
    *
    * @return BookingBusiness
    */
    public function setCalendarView($val)
    {
		$this->_propDict["calendarView"] = $val;
        return $this;
    }
    

     /** 
     * Gets the customers
    * All the customers of this business. Read-only. Nullable.
     *
     * @return array The customers
     */
    public function getCustomers()
    {
        if (array_key_exists("customers", $this->_propDict)) {
           return $this->_propDict["customers"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the customers
    * All the customers of this business. Read-only. Nullable.
    *
    * @param BookingCustomer $val The customers
    *
    * @return BookingBusiness
    */
    public function setCustomers($val)
    {
		$this->_propDict["customers"] = $val;
        return $this;
    }
    

     /** 
     * Gets the services
    * All the services offered by this business. Read-only. Nullable.
     *
     * @return array The services
     */
    public function getServices()
    {
        if (array_key_exists("services", $this->_propDict)) {
           return $this->_propDict["services"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the services
    * All the services offered by this business. Read-only. Nullable.
    *
    * @param BookingService $val The services
    *
    * @return BookingBusiness
    */
    public function setServices($val)
    {
		$this->_propDict["services"] = $val;
        return $this;
    }
    

     /** 
     * Gets the staffMembers
    * All the staff members that provide services in this business. Read-only. Nullable.
     *
     * @return array The staffMembers
     */
    public function getStaffMembers()
    {
        if (array_key_exists("staffMembers", $this->_propDict)) {
           return $this->_propDict["staffMembers"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the staffMembers
    * All the staff members that provide services in this business. Read-only. Nullable.
    *
    * @param BookingStaffMember $val The staffMembers
    *
    * @return BookingBusiness
    */
    public function setStaffMembers($val)
    {
		$this->_propDict["staffMembers"] = $val;
        return $this;
    }
    
}
