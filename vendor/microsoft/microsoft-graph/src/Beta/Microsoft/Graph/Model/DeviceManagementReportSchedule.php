<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementReportSchedule File
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
* DeviceManagementReportSchedule class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementReportSchedule extends Entity
{
    /**
    * Gets the emails
    * Emails to which the scheduled reports are delivered
    *
    * @return string The emails
    */
    public function getEmails()
    {
        if (array_key_exists("emails", $this->_propDict)) {
            return $this->_propDict["emails"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the emails
    * Emails to which the scheduled reports are delivered
    *
    * @param string $val The emails
    *
    * @return DeviceManagementReportSchedule
    */
    public function setEmails($val)
    {
        $this->_propDict["emails"] = $val;
        return $this;
    }
    
    /**
    * Gets the endDateTime
    * Time that the delivery of the scheduled reports ends
    *
    * @return \DateTime The endDateTime
    */
    public function getEndDateTime()
    {
        if (array_key_exists("endDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["endDateTime"], "\DateTime")) {
                return $this->_propDict["endDateTime"];
            } else {
                $this->_propDict["endDateTime"] = new \DateTime($this->_propDict["endDateTime"]);
                return $this->_propDict["endDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the endDateTime
    * Time that the delivery of the scheduled reports ends
    *
    * @param \DateTime $val The endDateTime
    *
    * @return DeviceManagementReportSchedule
    */
    public function setEndDateTime($val)
    {
        $this->_propDict["endDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the filter
    * Filters applied on the report
    *
    * @return string The filter
    */
    public function getFilter()
    {
        if (array_key_exists("filter", $this->_propDict)) {
            return $this->_propDict["filter"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the filter
    * Filters applied on the report
    *
    * @param string $val The filter
    *
    * @return DeviceManagementReportSchedule
    */
    public function setFilter($val)
    {
        $this->_propDict["filter"] = $val;
        return $this;
    }
    
    /**
    * Gets the format
    * Format of the scheduled report. Possible values are: csv, pdf.
    *
    * @return DeviceManagementReportFileFormat The format
    */
    public function getFormat()
    {
        if (array_key_exists("format", $this->_propDict)) {
            if (is_a($this->_propDict["format"], "\Beta\Microsoft\Graph\Model\DeviceManagementReportFileFormat")) {
                return $this->_propDict["format"];
            } else {
                $this->_propDict["format"] = new DeviceManagementReportFileFormat($this->_propDict["format"]);
                return $this->_propDict["format"];
            }
        }
        return null;
    }
    
    /**
    * Sets the format
    * Format of the scheduled report. Possible values are: csv, pdf.
    *
    * @param DeviceManagementReportFileFormat $val The format
    *
    * @return DeviceManagementReportSchedule
    */
    public function setFormat($val)
    {
        $this->_propDict["format"] = $val;
        return $this;
    }
    
    /**
    * Gets the orderBy
    * Ordering of columns in the report
    *
    * @return string The orderBy
    */
    public function getOrderBy()
    {
        if (array_key_exists("orderBy", $this->_propDict)) {
            return $this->_propDict["orderBy"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the orderBy
    * Ordering of columns in the report
    *
    * @param string $val The orderBy
    *
    * @return DeviceManagementReportSchedule
    */
    public function setOrderBy($val)
    {
        $this->_propDict["orderBy"] = $val;
        return $this;
    }
    
    /**
    * Gets the recurrence
    * Frequency of scheduled report delivery. Possible values are: none, daily, weekly, monthly.
    *
    * @return DeviceManagementScheduledReportRecurrence The recurrence
    */
    public function getRecurrence()
    {
        if (array_key_exists("recurrence", $this->_propDict)) {
            if (is_a($this->_propDict["recurrence"], "\Beta\Microsoft\Graph\Model\DeviceManagementScheduledReportRecurrence")) {
                return $this->_propDict["recurrence"];
            } else {
                $this->_propDict["recurrence"] = new DeviceManagementScheduledReportRecurrence($this->_propDict["recurrence"]);
                return $this->_propDict["recurrence"];
            }
        }
        return null;
    }
    
    /**
    * Sets the recurrence
    * Frequency of scheduled report delivery. Possible values are: none, daily, weekly, monthly.
    *
    * @param DeviceManagementScheduledReportRecurrence $val The recurrence
    *
    * @return DeviceManagementReportSchedule
    */
    public function setRecurrence($val)
    {
        $this->_propDict["recurrence"] = $val;
        return $this;
    }
    
    /**
    * Gets the reportName
    * Name of the report
    *
    * @return string The reportName
    */
    public function getReportName()
    {
        if (array_key_exists("reportName", $this->_propDict)) {
            return $this->_propDict["reportName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the reportName
    * Name of the report
    *
    * @param string $val The reportName
    *
    * @return DeviceManagementReportSchedule
    */
    public function setReportName($val)
    {
        $this->_propDict["reportName"] = $val;
        return $this;
    }
    
    /**
    * Gets the reportScheduleName
    * Name of the schedule
    *
    * @return string The reportScheduleName
    */
    public function getReportScheduleName()
    {
        if (array_key_exists("reportScheduleName", $this->_propDict)) {
            return $this->_propDict["reportScheduleName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the reportScheduleName
    * Name of the schedule
    *
    * @param string $val The reportScheduleName
    *
    * @return DeviceManagementReportSchedule
    */
    public function setReportScheduleName($val)
    {
        $this->_propDict["reportScheduleName"] = $val;
        return $this;
    }
    
    /**
    * Gets the select
    * Columns selected from the report
    *
    * @return string The select
    */
    public function getSelect()
    {
        if (array_key_exists("select", $this->_propDict)) {
            return $this->_propDict["select"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the select
    * Columns selected from the report
    *
    * @param string $val The select
    *
    * @return DeviceManagementReportSchedule
    */
    public function setSelect($val)
    {
        $this->_propDict["select"] = $val;
        return $this;
    }
    
    /**
    * Gets the startDateTime
    * Time that the delivery of the scheduled reports starts
    *
    * @return \DateTime The startDateTime
    */
    public function getStartDateTime()
    {
        if (array_key_exists("startDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["startDateTime"], "\DateTime")) {
                return $this->_propDict["startDateTime"];
            } else {
                $this->_propDict["startDateTime"] = new \DateTime($this->_propDict["startDateTime"]);
                return $this->_propDict["startDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the startDateTime
    * Time that the delivery of the scheduled reports starts
    *
    * @param \DateTime $val The startDateTime
    *
    * @return DeviceManagementReportSchedule
    */
    public function setStartDateTime($val)
    {
        $this->_propDict["startDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the subject
    * Subject of the scheduled reports that are delivered
    *
    * @return string The subject
    */
    public function getSubject()
    {
        if (array_key_exists("subject", $this->_propDict)) {
            return $this->_propDict["subject"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the subject
    * Subject of the scheduled reports that are delivered
    *
    * @param string $val The subject
    *
    * @return DeviceManagementReportSchedule
    */
    public function setSubject($val)
    {
        $this->_propDict["subject"] = $val;
        return $this;
    }
    
    /**
    * Gets the userId
    * The Id of the User who created the report
    *
    * @return string The userId
    */
    public function getUserId()
    {
        if (array_key_exists("userId", $this->_propDict)) {
            return $this->_propDict["userId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userId
    * The Id of the User who created the report
    *
    * @param string $val The userId
    *
    * @return DeviceManagementReportSchedule
    */
    public function setUserId($val)
    {
        $this->_propDict["userId"] = $val;
        return $this;
    }
    
}
