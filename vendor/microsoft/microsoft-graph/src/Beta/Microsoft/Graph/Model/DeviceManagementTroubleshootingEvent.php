<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementTroubleshootingEvent File
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
* DeviceManagementTroubleshootingEvent class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementTroubleshootingEvent extends Entity
{

     /** 
     * Gets the additionalInformation
    * A set of string key and string value pairs which provides additional information on the Troubleshooting event
     *
     * @return array The additionalInformation
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
    * A set of string key and string value pairs which provides additional information on the Troubleshooting event
    *
    * @param KeyValuePair $val The additionalInformation
    *
    * @return DeviceManagementTroubleshootingEvent
    */
    public function setAdditionalInformation($val)
    {
		$this->_propDict["additionalInformation"] = $val;
        return $this;
    }
    
    /**
    * Gets the correlationId
    * Id used for tracing the failure in the service.
    *
    * @return string The correlationId
    */
    public function getCorrelationId()
    {
        if (array_key_exists("correlationId", $this->_propDict)) {
            return $this->_propDict["correlationId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the correlationId
    * Id used for tracing the failure in the service.
    *
    * @param string $val The correlationId
    *
    * @return DeviceManagementTroubleshootingEvent
    */
    public function setCorrelationId($val)
    {
        $this->_propDict["correlationId"] = $val;
        return $this;
    }
    
    /**
    * Gets the eventDateTime
    * Time when the event occurred .
    *
    * @return \DateTime The eventDateTime
    */
    public function getEventDateTime()
    {
        if (array_key_exists("eventDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["eventDateTime"], "\DateTime")) {
                return $this->_propDict["eventDateTime"];
            } else {
                $this->_propDict["eventDateTime"] = new \DateTime($this->_propDict["eventDateTime"]);
                return $this->_propDict["eventDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the eventDateTime
    * Time when the event occurred .
    *
    * @param \DateTime $val The eventDateTime
    *
    * @return DeviceManagementTroubleshootingEvent
    */
    public function setEventDateTime($val)
    {
        $this->_propDict["eventDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the eventName
    * Event Name corresponding to the Troubleshooting Event. It is an Optional field
    *
    * @return string The eventName
    */
    public function getEventName()
    {
        if (array_key_exists("eventName", $this->_propDict)) {
            return $this->_propDict["eventName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the eventName
    * Event Name corresponding to the Troubleshooting Event. It is an Optional field
    *
    * @param string $val The eventName
    *
    * @return DeviceManagementTroubleshootingEvent
    */
    public function setEventName($val)
    {
        $this->_propDict["eventName"] = $val;
        return $this;
    }
    
    /**
    * Gets the troubleshootingErrorDetails
    * Object containing detailed information about the error and its remediation.
    *
    * @return DeviceManagementTroubleshootingErrorDetails The troubleshootingErrorDetails
    */
    public function getTroubleshootingErrorDetails()
    {
        if (array_key_exists("troubleshootingErrorDetails", $this->_propDict)) {
            if (is_a($this->_propDict["troubleshootingErrorDetails"], "\Beta\Microsoft\Graph\Model\DeviceManagementTroubleshootingErrorDetails")) {
                return $this->_propDict["troubleshootingErrorDetails"];
            } else {
                $this->_propDict["troubleshootingErrorDetails"] = new DeviceManagementTroubleshootingErrorDetails($this->_propDict["troubleshootingErrorDetails"]);
                return $this->_propDict["troubleshootingErrorDetails"];
            }
        }
        return null;
    }
    
    /**
    * Sets the troubleshootingErrorDetails
    * Object containing detailed information about the error and its remediation.
    *
    * @param DeviceManagementTroubleshootingErrorDetails $val The troubleshootingErrorDetails
    *
    * @return DeviceManagementTroubleshootingEvent
    */
    public function setTroubleshootingErrorDetails($val)
    {
        $this->_propDict["troubleshootingErrorDetails"] = $val;
        return $this;
    }
    
}
