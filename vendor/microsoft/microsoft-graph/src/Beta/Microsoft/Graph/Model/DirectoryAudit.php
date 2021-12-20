<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DirectoryAudit File
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
* DirectoryAudit class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DirectoryAudit extends Entity
{
    /**
    * Gets the activityDateTime
    * Indicates the date and time the activity was performed. The Timestamp type is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @return \DateTime The activityDateTime
    */
    public function getActivityDateTime()
    {
        if (array_key_exists("activityDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["activityDateTime"], "\DateTime")) {
                return $this->_propDict["activityDateTime"];
            } else {
                $this->_propDict["activityDateTime"] = new \DateTime($this->_propDict["activityDateTime"]);
                return $this->_propDict["activityDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the activityDateTime
    * Indicates the date and time the activity was performed. The Timestamp type is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The activityDateTime
    *
    * @return DirectoryAudit
    */
    public function setActivityDateTime($val)
    {
        $this->_propDict["activityDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the activityDisplayName
    * Indicates the activity name or the operation name (E.g. 'Create User', 'Add member to group'). For a list of activities logged, refer to Azure Ad activity list.
    *
    * @return string The activityDisplayName
    */
    public function getActivityDisplayName()
    {
        if (array_key_exists("activityDisplayName", $this->_propDict)) {
            return $this->_propDict["activityDisplayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the activityDisplayName
    * Indicates the activity name or the operation name (E.g. 'Create User', 'Add member to group'). For a list of activities logged, refer to Azure Ad activity list.
    *
    * @param string $val The activityDisplayName
    *
    * @return DirectoryAudit
    */
    public function setActivityDisplayName($val)
    {
        $this->_propDict["activityDisplayName"] = $val;
        return $this;
    }
    

     /** 
     * Gets the additionalDetails
    * Indicates additional details on the activity.
     *
     * @return array The additionalDetails
     */
    public function getAdditionalDetails()
    {
        if (array_key_exists("additionalDetails", $this->_propDict)) {
           return $this->_propDict["additionalDetails"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the additionalDetails
    * Indicates additional details on the activity.
    *
    * @param KeyValue $val The additionalDetails
    *
    * @return DirectoryAudit
    */
    public function setAdditionalDetails($val)
    {
		$this->_propDict["additionalDetails"] = $val;
        return $this;
    }
    
    /**
    * Gets the category
    * Indicates which resource category that's targeted by the activity. (For example: User Management, Group Management etc..)
    *
    * @return string The category
    */
    public function getCategory()
    {
        if (array_key_exists("category", $this->_propDict)) {
            return $this->_propDict["category"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the category
    * Indicates which resource category that's targeted by the activity. (For example: User Management, Group Management etc..)
    *
    * @param string $val The category
    *
    * @return DirectoryAudit
    */
    public function setCategory($val)
    {
        $this->_propDict["category"] = $val;
        return $this;
    }
    
    /**
    * Gets the correlationId
    * Indicates a unique ID that helps correlate activities that span across various services. Can be used to trace logs across services.
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
    * Indicates a unique ID that helps correlate activities that span across various services. Can be used to trace logs across services.
    *
    * @param string $val The correlationId
    *
    * @return DirectoryAudit
    */
    public function setCorrelationId($val)
    {
        $this->_propDict["correlationId"] = $val;
        return $this;
    }
    
    /**
    * Gets the initiatedBy
    * Indicates information about the user or app initiated the activity.
    *
    * @return AuditActivityInitiator The initiatedBy
    */
    public function getInitiatedBy()
    {
        if (array_key_exists("initiatedBy", $this->_propDict)) {
            if (is_a($this->_propDict["initiatedBy"], "\Beta\Microsoft\Graph\Model\AuditActivityInitiator")) {
                return $this->_propDict["initiatedBy"];
            } else {
                $this->_propDict["initiatedBy"] = new AuditActivityInitiator($this->_propDict["initiatedBy"]);
                return $this->_propDict["initiatedBy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the initiatedBy
    * Indicates information about the user or app initiated the activity.
    *
    * @param AuditActivityInitiator $val The initiatedBy
    *
    * @return DirectoryAudit
    */
    public function setInitiatedBy($val)
    {
        $this->_propDict["initiatedBy"] = $val;
        return $this;
    }
    
    /**
    * Gets the loggedByService
    * Indicates information on which service initiated the activity (For example: Self-service Password Management, Core Directory, B2C, Invited Users, Microsoft Identity Manager, Privileged Identity Management.
    *
    * @return string The loggedByService
    */
    public function getLoggedByService()
    {
        if (array_key_exists("loggedByService", $this->_propDict)) {
            return $this->_propDict["loggedByService"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the loggedByService
    * Indicates information on which service initiated the activity (For example: Self-service Password Management, Core Directory, B2C, Invited Users, Microsoft Identity Manager, Privileged Identity Management.
    *
    * @param string $val The loggedByService
    *
    * @return DirectoryAudit
    */
    public function setLoggedByService($val)
    {
        $this->_propDict["loggedByService"] = $val;
        return $this;
    }
    
    /**
    * Gets the operationType
    *
    * @return string The operationType
    */
    public function getOperationType()
    {
        if (array_key_exists("operationType", $this->_propDict)) {
            return $this->_propDict["operationType"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the operationType
    *
    * @param string $val The operationType
    *
    * @return DirectoryAudit
    */
    public function setOperationType($val)
    {
        $this->_propDict["operationType"] = $val;
        return $this;
    }
    
    /**
    * Gets the result
    * Indicates the result of the activity. Possible values are: success, failure, timeout, unknownFutureValue.
    *
    * @return OperationResult The result
    */
    public function getResult()
    {
        if (array_key_exists("result", $this->_propDict)) {
            if (is_a($this->_propDict["result"], "\Beta\Microsoft\Graph\Model\OperationResult")) {
                return $this->_propDict["result"];
            } else {
                $this->_propDict["result"] = new OperationResult($this->_propDict["result"]);
                return $this->_propDict["result"];
            }
        }
        return null;
    }
    
    /**
    * Sets the result
    * Indicates the result of the activity. Possible values are: success, failure, timeout, unknownFutureValue.
    *
    * @param OperationResult $val The result
    *
    * @return DirectoryAudit
    */
    public function setResult($val)
    {
        $this->_propDict["result"] = $val;
        return $this;
    }
    
    /**
    * Gets the resultReason
    * Indicates the reason for failure if the result is failure or timeout.
    *
    * @return string The resultReason
    */
    public function getResultReason()
    {
        if (array_key_exists("resultReason", $this->_propDict)) {
            return $this->_propDict["resultReason"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the resultReason
    * Indicates the reason for failure if the result is failure or timeout.
    *
    * @param string $val The resultReason
    *
    * @return DirectoryAudit
    */
    public function setResultReason($val)
    {
        $this->_propDict["resultReason"] = $val;
        return $this;
    }
    

     /** 
     * Gets the targetResources
    * Indicates information on which resource was changed due to the activity. Target Resource Type can be User, Device, Directory, App, Role, Group, Policy or Other.
     *
     * @return array The targetResources
     */
    public function getTargetResources()
    {
        if (array_key_exists("targetResources", $this->_propDict)) {
           return $this->_propDict["targetResources"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the targetResources
    * Indicates information on which resource was changed due to the activity. Target Resource Type can be User, Device, Directory, App, Role, Group, Policy or Other.
    *
    * @param TargetResource $val The targetResources
    *
    * @return DirectoryAudit
    */
    public function setTargetResources($val)
    {
		$this->_propDict["targetResources"] = $val;
        return $this;
    }
    
}
