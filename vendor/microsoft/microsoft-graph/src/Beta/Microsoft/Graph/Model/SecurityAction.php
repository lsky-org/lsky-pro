<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SecurityAction File
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
* SecurityAction class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SecurityAction extends Entity
{
    /**
    * Gets the actionReason
    * Reason for invoking this action.
    *
    * @return string The actionReason
    */
    public function getActionReason()
    {
        if (array_key_exists("actionReason", $this->_propDict)) {
            return $this->_propDict["actionReason"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the actionReason
    * Reason for invoking this action.
    *
    * @param string $val The actionReason
    *
    * @return SecurityAction
    */
    public function setActionReason($val)
    {
        $this->_propDict["actionReason"] = $val;
        return $this;
    }
    
    /**
    * Gets the appId
    * The Application ID of the calling application that submitted (POST) the action. The appId should be extracted from the auth token and not entered manually by the calling application.
    *
    * @return string The appId
    */
    public function getAppId()
    {
        if (array_key_exists("appId", $this->_propDict)) {
            return $this->_propDict["appId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appId
    * The Application ID of the calling application that submitted (POST) the action. The appId should be extracted from the auth token and not entered manually by the calling application.
    *
    * @param string $val The appId
    *
    * @return SecurityAction
    */
    public function setAppId($val)
    {
        $this->_propDict["appId"] = $val;
        return $this;
    }
    
    /**
    * Gets the azureTenantId
    * Azure tenant ID of the entity to determine which tenant the entity belongs to (multi-tenancy support). The azureTenantId should be extracted from the auth token and not entered manually by the calling application.
    *
    * @return string The azureTenantId
    */
    public function getAzureTenantId()
    {
        if (array_key_exists("azureTenantId", $this->_propDict)) {
            return $this->_propDict["azureTenantId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the azureTenantId
    * Azure tenant ID of the entity to determine which tenant the entity belongs to (multi-tenancy support). The azureTenantId should be extracted from the auth token and not entered manually by the calling application.
    *
    * @param string $val The azureTenantId
    *
    * @return SecurityAction
    */
    public function setAzureTenantId($val)
    {
        $this->_propDict["azureTenantId"] = $val;
        return $this;
    }
    
    /**
    * Gets the clientContext
    *
    * @return string The clientContext
    */
    public function getClientContext()
    {
        if (array_key_exists("clientContext", $this->_propDict)) {
            return $this->_propDict["clientContext"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the clientContext
    *
    * @param string $val The clientContext
    *
    * @return SecurityAction
    */
    public function setClientContext($val)
    {
        $this->_propDict["clientContext"] = $val;
        return $this;
    }
    
    /**
    * Gets the completedDateTime
    * Timestamp when the action was completed. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @return \DateTime The completedDateTime
    */
    public function getCompletedDateTime()
    {
        if (array_key_exists("completedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["completedDateTime"], "\DateTime")) {
                return $this->_propDict["completedDateTime"];
            } else {
                $this->_propDict["completedDateTime"] = new \DateTime($this->_propDict["completedDateTime"]);
                return $this->_propDict["completedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the completedDateTime
    * Timestamp when the action was completed. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @param \DateTime $val The completedDateTime
    *
    * @return SecurityAction
    */
    public function setCompletedDateTime($val)
    {
        $this->_propDict["completedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdDateTime
    * Timestamp when the action is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
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
    * Timestamp when the action is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return SecurityAction
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the errorInfo
    * Error info when the action fails.
    *
    * @return ResultInfo The errorInfo
    */
    public function getErrorInfo()
    {
        if (array_key_exists("errorInfo", $this->_propDict)) {
            if (is_a($this->_propDict["errorInfo"], "\Beta\Microsoft\Graph\Model\ResultInfo")) {
                return $this->_propDict["errorInfo"];
            } else {
                $this->_propDict["errorInfo"] = new ResultInfo($this->_propDict["errorInfo"]);
                return $this->_propDict["errorInfo"];
            }
        }
        return null;
    }
    
    /**
    * Sets the errorInfo
    * Error info when the action fails.
    *
    * @param ResultInfo $val The errorInfo
    *
    * @return SecurityAction
    */
    public function setErrorInfo($val)
    {
        $this->_propDict["errorInfo"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastActionDateTime
    * Timestamp when this action was last updated. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @return \DateTime The lastActionDateTime
    */
    public function getLastActionDateTime()
    {
        if (array_key_exists("lastActionDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastActionDateTime"], "\DateTime")) {
                return $this->_propDict["lastActionDateTime"];
            } else {
                $this->_propDict["lastActionDateTime"] = new \DateTime($this->_propDict["lastActionDateTime"]);
                return $this->_propDict["lastActionDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastActionDateTime
    * Timestamp when this action was last updated. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @param \DateTime $val The lastActionDateTime
    *
    * @return SecurityAction
    */
    public function setLastActionDateTime($val)
    {
        $this->_propDict["lastActionDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the name
    * Action name.
    *
    * @return string The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the name
    * Action name.
    *
    * @param string $val The name
    *
    * @return SecurityAction
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    

     /** 
     * Gets the parameters
    * Collection of parameters (key-value pairs) necessary to invoke the action, e.g. URL or fileHash to block, etc.). Required
     *
     * @return array The parameters
     */
    public function getParameters()
    {
        if (array_key_exists("parameters", $this->_propDict)) {
           return $this->_propDict["parameters"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the parameters
    * Collection of parameters (key-value pairs) necessary to invoke the action, e.g. URL or fileHash to block, etc.). Required
    *
    * @param KeyValuePair $val The parameters
    *
    * @return SecurityAction
    */
    public function setParameters($val)
    {
		$this->_propDict["parameters"] = $val;
        return $this;
    }
    

     /** 
     * Gets the states
    * Collection of securityActionState to keep the history of an action.
     *
     * @return array The states
     */
    public function getStates()
    {
        if (array_key_exists("states", $this->_propDict)) {
           return $this->_propDict["states"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the states
    * Collection of securityActionState to keep the history of an action.
    *
    * @param SecurityActionState $val The states
    *
    * @return SecurityAction
    */
    public function setStates($val)
    {
		$this->_propDict["states"] = $val;
        return $this;
    }
    
    /**
    * Gets the status
    * Status of the action. Possible values are: NotStarted, Running, Completed, Failed.
    *
    * @return OperationStatus The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\Model\OperationStatus")) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new OperationStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }
    
    /**
    * Sets the status
    * Status of the action. Possible values are: NotStarted, Running, Completed, Failed.
    *
    * @param OperationStatus $val The status
    *
    * @return SecurityAction
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }
    
    /**
    * Gets the user
    * The user principal name of the signed-in user that submitted  (POST) the action. The user should be extracted from the auth token and not entered manually by the calling application.
    *
    * @return string The user
    */
    public function getUser()
    {
        if (array_key_exists("user", $this->_propDict)) {
            return $this->_propDict["user"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the user
    * The user principal name of the signed-in user that submitted  (POST) the action. The user should be extracted from the auth token and not entered manually by the calling application.
    *
    * @param string $val The user
    *
    * @return SecurityAction
    */
    public function setUser($val)
    {
        $this->_propDict["user"] = $val;
        return $this;
    }
    
    /**
    * Gets the vendorInformation
    * Complex Type containing details about the Security product/service vendor, provider, and sub-provider (e.g. vendor=Microsoft; provider=Windows Defender ATP; sub-provider=AppLocker).
    *
    * @return SecurityVendorInformation The vendorInformation
    */
    public function getVendorInformation()
    {
        if (array_key_exists("vendorInformation", $this->_propDict)) {
            if (is_a($this->_propDict["vendorInformation"], "\Beta\Microsoft\Graph\Model\SecurityVendorInformation")) {
                return $this->_propDict["vendorInformation"];
            } else {
                $this->_propDict["vendorInformation"] = new SecurityVendorInformation($this->_propDict["vendorInformation"]);
                return $this->_propDict["vendorInformation"];
            }
        }
        return null;
    }
    
    /**
    * Sets the vendorInformation
    * Complex Type containing details about the Security product/service vendor, provider, and sub-provider (e.g. vendor=Microsoft; provider=Windows Defender ATP; sub-provider=AppLocker).
    *
    * @param SecurityVendorInformation $val The vendorInformation
    *
    * @return SecurityAction
    */
    public function setVendorInformation($val)
    {
        $this->_propDict["vendorInformation"] = $val;
        return $this;
    }
    
}
