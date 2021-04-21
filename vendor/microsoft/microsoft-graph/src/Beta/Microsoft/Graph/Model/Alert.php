<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Alert File
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
* Alert class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Alert extends Entity
{
    /**
    * Gets the activityGroupName
    * Name or alias of the activity group (attacker) this alert is attributed to.
    *
    * @return string The activityGroupName
    */
    public function getActivityGroupName()
    {
        if (array_key_exists("activityGroupName", $this->_propDict)) {
            return $this->_propDict["activityGroupName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the activityGroupName
    * Name or alias of the activity group (attacker) this alert is attributed to.
    *
    * @param string $val The activityGroupName
    *
    * @return Alert
    */
    public function setActivityGroupName($val)
    {
        $this->_propDict["activityGroupName"] = $val;
        return $this;
    }
    

     /** 
     * Gets the alertDetections
     *
     * @return array The alertDetections
     */
    public function getAlertDetections()
    {
        if (array_key_exists("alertDetections", $this->_propDict)) {
           return $this->_propDict["alertDetections"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the alertDetections
    *
    * @param AlertDetection $val The alertDetections
    *
    * @return Alert
    */
    public function setAlertDetections($val)
    {
		$this->_propDict["alertDetections"] = $val;
        return $this;
    }
    
    /**
    * Gets the assignedTo
    * Name of the analyst the alert is assigned to for triage, investigation, or remediation (supports update).
    *
    * @return string The assignedTo
    */
    public function getAssignedTo()
    {
        if (array_key_exists("assignedTo", $this->_propDict)) {
            return $this->_propDict["assignedTo"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the assignedTo
    * Name of the analyst the alert is assigned to for triage, investigation, or remediation (supports update).
    *
    * @param string $val The assignedTo
    *
    * @return Alert
    */
    public function setAssignedTo($val)
    {
        $this->_propDict["assignedTo"] = $val;
        return $this;
    }
    
    /**
    * Gets the azureSubscriptionId
    * Azure subscription ID, present if this alert is related to an Azure resource.
    *
    * @return string The azureSubscriptionId
    */
    public function getAzureSubscriptionId()
    {
        if (array_key_exists("azureSubscriptionId", $this->_propDict)) {
            return $this->_propDict["azureSubscriptionId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the azureSubscriptionId
    * Azure subscription ID, present if this alert is related to an Azure resource.
    *
    * @param string $val The azureSubscriptionId
    *
    * @return Alert
    */
    public function setAzureSubscriptionId($val)
    {
        $this->_propDict["azureSubscriptionId"] = $val;
        return $this;
    }
    
    /**
    * Gets the azureTenantId
    * Azure Active Directory tenant ID. Required.
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
    * Azure Active Directory tenant ID. Required.
    *
    * @param string $val The azureTenantId
    *
    * @return Alert
    */
    public function setAzureTenantId($val)
    {
        $this->_propDict["azureTenantId"] = $val;
        return $this;
    }
    
    /**
    * Gets the category
    * Category of the alert (for example, credentialTheft, ransomware, etc.).
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
    * Category of the alert (for example, credentialTheft, ransomware, etc.).
    *
    * @param string $val The category
    *
    * @return Alert
    */
    public function setCategory($val)
    {
        $this->_propDict["category"] = $val;
        return $this;
    }
    
    /**
    * Gets the closedDateTime
    * Time at which the alert was closed. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z (supports update).
    *
    * @return \DateTime The closedDateTime
    */
    public function getClosedDateTime()
    {
        if (array_key_exists("closedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["closedDateTime"], "\DateTime")) {
                return $this->_propDict["closedDateTime"];
            } else {
                $this->_propDict["closedDateTime"] = new \DateTime($this->_propDict["closedDateTime"]);
                return $this->_propDict["closedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the closedDateTime
    * Time at which the alert was closed. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z (supports update).
    *
    * @param \DateTime $val The closedDateTime
    *
    * @return Alert
    */
    public function setClosedDateTime($val)
    {
        $this->_propDict["closedDateTime"] = $val;
        return $this;
    }
    

     /** 
     * Gets the cloudAppStates
    * Security-related stateful information generated by the provider about the cloud application/s related to this alert.
     *
     * @return array The cloudAppStates
     */
    public function getCloudAppStates()
    {
        if (array_key_exists("cloudAppStates", $this->_propDict)) {
           return $this->_propDict["cloudAppStates"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the cloudAppStates
    * Security-related stateful information generated by the provider about the cloud application/s related to this alert.
    *
    * @param CloudAppSecurityState $val The cloudAppStates
    *
    * @return Alert
    */
    public function setCloudAppStates($val)
    {
		$this->_propDict["cloudAppStates"] = $val;
        return $this;
    }
    
    /**
    * Gets the comments
    * Customer-provided comments on alert (for customer alert management) (supports update).
    *
    * @return string The comments
    */
    public function getComments()
    {
        if (array_key_exists("comments", $this->_propDict)) {
            return $this->_propDict["comments"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the comments
    * Customer-provided comments on alert (for customer alert management) (supports update).
    *
    * @param string $val The comments
    *
    * @return Alert
    */
    public function setComments($val)
    {
        $this->_propDict["comments"] = $val;
        return $this;
    }
    
    /**
    * Gets the confidence
    * Confidence of the detection logic (percentage between 1-100).
    *
    * @return int The confidence
    */
    public function getConfidence()
    {
        if (array_key_exists("confidence", $this->_propDict)) {
            return $this->_propDict["confidence"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the confidence
    * Confidence of the detection logic (percentage between 1-100).
    *
    * @param int $val The confidence
    *
    * @return Alert
    */
    public function setConfidence($val)
    {
        $this->_propDict["confidence"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the createdDateTime
    * Time at which the alert was created by the alert provider. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Required.
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
    * Time at which the alert was created by the alert provider. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Required.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return Alert
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the description
    * Alert description.
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
    * Alert description.
    *
    * @param string $val The description
    *
    * @return Alert
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the detectionIds
    * Set of alerts related to this alert entity (each alert is pushed to the SIEM as a separate record).
    *
    * @return string The detectionIds
    */
    public function getDetectionIds()
    {
        if (array_key_exists("detectionIds", $this->_propDict)) {
            return $this->_propDict["detectionIds"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the detectionIds
    * Set of alerts related to this alert entity (each alert is pushed to the SIEM as a separate record).
    *
    * @param string $val The detectionIds
    *
    * @return Alert
    */
    public function setDetectionIds($val)
    {
        $this->_propDict["detectionIds"] = $val;
        return $this;
    }
    
    /**
    * Gets the eventDateTime
    * Time at which the event(s) that served as the trigger(s) to generate the alert occurred. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Required.
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
    * Time at which the event(s) that served as the trigger(s) to generate the alert occurred. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Required.
    *
    * @param \DateTime $val The eventDateTime
    *
    * @return Alert
    */
    public function setEventDateTime($val)
    {
        $this->_propDict["eventDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the feedback
    * Analyst feedback on the alert. Possible values are: unknown, truePositive, falsePositive, benignPositive. (supports update)
    *
    * @return AlertFeedback The feedback
    */
    public function getFeedback()
    {
        if (array_key_exists("feedback", $this->_propDict)) {
            if (is_a($this->_propDict["feedback"], "\Beta\Microsoft\Graph\Model\AlertFeedback")) {
                return $this->_propDict["feedback"];
            } else {
                $this->_propDict["feedback"] = new AlertFeedback($this->_propDict["feedback"]);
                return $this->_propDict["feedback"];
            }
        }
        return null;
    }
    
    /**
    * Sets the feedback
    * Analyst feedback on the alert. Possible values are: unknown, truePositive, falsePositive, benignPositive. (supports update)
    *
    * @param AlertFeedback $val The feedback
    *
    * @return Alert
    */
    public function setFeedback($val)
    {
        $this->_propDict["feedback"] = $val;
        return $this;
    }
    

     /** 
     * Gets the fileStates
    * Security-related stateful information generated by the provider about the file(s) related to this alert.
     *
     * @return array The fileStates
     */
    public function getFileStates()
    {
        if (array_key_exists("fileStates", $this->_propDict)) {
           return $this->_propDict["fileStates"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the fileStates
    * Security-related stateful information generated by the provider about the file(s) related to this alert.
    *
    * @param FileSecurityState $val The fileStates
    *
    * @return Alert
    */
    public function setFileStates($val)
    {
		$this->_propDict["fileStates"] = $val;
        return $this;
    }
    

     /** 
     * Gets the historyStates
    * A collection of alertHistoryStates comprising an audit log of all updates made to an alert.
     *
     * @return array The historyStates
     */
    public function getHistoryStates()
    {
        if (array_key_exists("historyStates", $this->_propDict)) {
           return $this->_propDict["historyStates"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the historyStates
    * A collection of alertHistoryStates comprising an audit log of all updates made to an alert.
    *
    * @param AlertHistoryState $val The historyStates
    *
    * @return Alert
    */
    public function setHistoryStates($val)
    {
		$this->_propDict["historyStates"] = $val;
        return $this;
    }
    

     /** 
     * Gets the hostStates
    * Security-related stateful information generated by the provider about the host(s) related to this alert.
     *
     * @return array The hostStates
     */
    public function getHostStates()
    {
        if (array_key_exists("hostStates", $this->_propDict)) {
           return $this->_propDict["hostStates"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the hostStates
    * Security-related stateful information generated by the provider about the host(s) related to this alert.
    *
    * @param HostSecurityState $val The hostStates
    *
    * @return Alert
    */
    public function setHostStates($val)
    {
		$this->_propDict["hostStates"] = $val;
        return $this;
    }
    
    /**
    * Gets the incidentIds
    * IDs of incidents related to current alert.
    *
    * @return string The incidentIds
    */
    public function getIncidentIds()
    {
        if (array_key_exists("incidentIds", $this->_propDict)) {
            return $this->_propDict["incidentIds"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the incidentIds
    * IDs of incidents related to current alert.
    *
    * @param string $val The incidentIds
    *
    * @return Alert
    */
    public function setIncidentIds($val)
    {
        $this->_propDict["incidentIds"] = $val;
        return $this;
    }
    

     /** 
     * Gets the investigationSecurityStates
     *
     * @return array The investigationSecurityStates
     */
    public function getInvestigationSecurityStates()
    {
        if (array_key_exists("investigationSecurityStates", $this->_propDict)) {
           return $this->_propDict["investigationSecurityStates"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the investigationSecurityStates
    *
    * @param InvestigationSecurityState $val The investigationSecurityStates
    *
    * @return Alert
    */
    public function setInvestigationSecurityStates($val)
    {
		$this->_propDict["investigationSecurityStates"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastEventDateTime
    *
    * @return \DateTime The lastEventDateTime
    */
    public function getLastEventDateTime()
    {
        if (array_key_exists("lastEventDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastEventDateTime"], "\DateTime")) {
                return $this->_propDict["lastEventDateTime"];
            } else {
                $this->_propDict["lastEventDateTime"] = new \DateTime($this->_propDict["lastEventDateTime"]);
                return $this->_propDict["lastEventDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastEventDateTime
    *
    * @param \DateTime $val The lastEventDateTime
    *
    * @return Alert
    */
    public function setLastEventDateTime($val)
    {
        $this->_propDict["lastEventDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastModifiedDateTime
    * Time at which the alert entity was last modified. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @return \DateTime The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedDateTime"], "\DateTime")) {
                return $this->_propDict["lastModifiedDateTime"];
            } else {
                $this->_propDict["lastModifiedDateTime"] = new \DateTime($this->_propDict["lastModifiedDateTime"]);
                return $this->_propDict["lastModifiedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastModifiedDateTime
    * Time at which the alert entity was last modified. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return Alert
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    

     /** 
     * Gets the malwareStates
    * Threat Intelligence pertaining to malware related to this alert.
     *
     * @return array The malwareStates
     */
    public function getMalwareStates()
    {
        if (array_key_exists("malwareStates", $this->_propDict)) {
           return $this->_propDict["malwareStates"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the malwareStates
    * Threat Intelligence pertaining to malware related to this alert.
    *
    * @param MalwareState $val The malwareStates
    *
    * @return Alert
    */
    public function setMalwareStates($val)
    {
		$this->_propDict["malwareStates"] = $val;
        return $this;
    }
    

     /** 
     * Gets the messageSecurityStates
     *
     * @return array The messageSecurityStates
     */
    public function getMessageSecurityStates()
    {
        if (array_key_exists("messageSecurityStates", $this->_propDict)) {
           return $this->_propDict["messageSecurityStates"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the messageSecurityStates
    *
    * @param MessageSecurityState $val The messageSecurityStates
    *
    * @return Alert
    */
    public function setMessageSecurityStates($val)
    {
		$this->_propDict["messageSecurityStates"] = $val;
        return $this;
    }
    

     /** 
     * Gets the networkConnections
    * Security-related stateful information generated by the provider about the network connection(s) related to this alert.
     *
     * @return array The networkConnections
     */
    public function getNetworkConnections()
    {
        if (array_key_exists("networkConnections", $this->_propDict)) {
           return $this->_propDict["networkConnections"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the networkConnections
    * Security-related stateful information generated by the provider about the network connection(s) related to this alert.
    *
    * @param NetworkConnection $val The networkConnections
    *
    * @return Alert
    */
    public function setNetworkConnections($val)
    {
		$this->_propDict["networkConnections"] = $val;
        return $this;
    }
    

     /** 
     * Gets the processes
    * Security-related stateful information generated by the provider about the process or processes related to this alert.
     *
     * @return array The processes
     */
    public function getProcesses()
    {
        if (array_key_exists("processes", $this->_propDict)) {
           return $this->_propDict["processes"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the processes
    * Security-related stateful information generated by the provider about the process or processes related to this alert.
    *
    * @param Process $val The processes
    *
    * @return Alert
    */
    public function setProcesses($val)
    {
		$this->_propDict["processes"] = $val;
        return $this;
    }
    
    /**
    * Gets the recommendedActions
    * Vendor/provider recommended action(s) to take as a result of the alert (for example, isolate machine, enforce2FA, reimage host).
    *
    * @return string The recommendedActions
    */
    public function getRecommendedActions()
    {
        if (array_key_exists("recommendedActions", $this->_propDict)) {
            return $this->_propDict["recommendedActions"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the recommendedActions
    * Vendor/provider recommended action(s) to take as a result of the alert (for example, isolate machine, enforce2FA, reimage host).
    *
    * @param string $val The recommendedActions
    *
    * @return Alert
    */
    public function setRecommendedActions($val)
    {
        $this->_propDict["recommendedActions"] = $val;
        return $this;
    }
    

     /** 
     * Gets the registryKeyStates
    * Security-related stateful information generated by the provider about the registry keys related to this alert.
     *
     * @return array The registryKeyStates
     */
    public function getRegistryKeyStates()
    {
        if (array_key_exists("registryKeyStates", $this->_propDict)) {
           return $this->_propDict["registryKeyStates"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the registryKeyStates
    * Security-related stateful information generated by the provider about the registry keys related to this alert.
    *
    * @param RegistryKeyState $val The registryKeyStates
    *
    * @return Alert
    */
    public function setRegistryKeyStates($val)
    {
		$this->_propDict["registryKeyStates"] = $val;
        return $this;
    }
    

     /** 
     * Gets the securityResources
    * Resources related to current alert. For example, for some alerts this can have the Azure Resource value.
     *
     * @return array The securityResources
     */
    public function getSecurityResources()
    {
        if (array_key_exists("securityResources", $this->_propDict)) {
           return $this->_propDict["securityResources"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the securityResources
    * Resources related to current alert. For example, for some alerts this can have the Azure Resource value.
    *
    * @param SecurityResource $val The securityResources
    *
    * @return Alert
    */
    public function setSecurityResources($val)
    {
		$this->_propDict["securityResources"] = $val;
        return $this;
    }
    
    /**
    * Gets the severity
    * Alert severity - set by vendor/provider. Possible values are: unknown, informational, low, medium, high. Required.
    *
    * @return AlertSeverity The severity
    */
    public function getSeverity()
    {
        if (array_key_exists("severity", $this->_propDict)) {
            if (is_a($this->_propDict["severity"], "\Beta\Microsoft\Graph\Model\AlertSeverity")) {
                return $this->_propDict["severity"];
            } else {
                $this->_propDict["severity"] = new AlertSeverity($this->_propDict["severity"]);
                return $this->_propDict["severity"];
            }
        }
        return null;
    }
    
    /**
    * Sets the severity
    * Alert severity - set by vendor/provider. Possible values are: unknown, informational, low, medium, high. Required.
    *
    * @param AlertSeverity $val The severity
    *
    * @return Alert
    */
    public function setSeverity($val)
    {
        $this->_propDict["severity"] = $val;
        return $this;
    }
    
    /**
    * Gets the sourceMaterials
    * Hyperlinks (URIs) to the source material related to the alert, for example, provider's user interface for alerts or log search, etc.
    *
    * @return string The sourceMaterials
    */
    public function getSourceMaterials()
    {
        if (array_key_exists("sourceMaterials", $this->_propDict)) {
            return $this->_propDict["sourceMaterials"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the sourceMaterials
    * Hyperlinks (URIs) to the source material related to the alert, for example, provider's user interface for alerts or log search, etc.
    *
    * @param string $val The sourceMaterials
    *
    * @return Alert
    */
    public function setSourceMaterials($val)
    {
        $this->_propDict["sourceMaterials"] = $val;
        return $this;
    }
    
    /**
    * Gets the status
    * Alert lifecycle status (stage). Possible values are: unknown, newAlert, inProgress, resolved. (supports update). Required.
    *
    * @return AlertStatus The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\Model\AlertStatus")) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new AlertStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }
    
    /**
    * Sets the status
    * Alert lifecycle status (stage). Possible values are: unknown, newAlert, inProgress, resolved. (supports update). Required.
    *
    * @param AlertStatus $val The status
    *
    * @return Alert
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }
    
    /**
    * Gets the tags
    * User-definable labels that can be applied to an alert and can serve as filter conditions (for example 'HVA', 'SAW', etc.) (supports update).
    *
    * @return string The tags
    */
    public function getTags()
    {
        if (array_key_exists("tags", $this->_propDict)) {
            return $this->_propDict["tags"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the tags
    * User-definable labels that can be applied to an alert and can serve as filter conditions (for example 'HVA', 'SAW', etc.) (supports update).
    *
    * @param string $val The tags
    *
    * @return Alert
    */
    public function setTags($val)
    {
        $this->_propDict["tags"] = $val;
        return $this;
    }
    
    /**
    * Gets the title
    * Alert title. Required.
    *
    * @return string The title
    */
    public function getTitle()
    {
        if (array_key_exists("title", $this->_propDict)) {
            return $this->_propDict["title"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the title
    * Alert title. Required.
    *
    * @param string $val The title
    *
    * @return Alert
    */
    public function setTitle($val)
    {
        $this->_propDict["title"] = $val;
        return $this;
    }
    

     /** 
     * Gets the triggers
    * Security-related information about the specific properties that triggered the alert (properties appearing in the alert). Alerts might contain information about multiple users, hosts, files, ip addresses. This field indicates which properties triggered the alert generation.
     *
     * @return array The triggers
     */
    public function getTriggers()
    {
        if (array_key_exists("triggers", $this->_propDict)) {
           return $this->_propDict["triggers"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the triggers
    * Security-related information about the specific properties that triggered the alert (properties appearing in the alert). Alerts might contain information about multiple users, hosts, files, ip addresses. This field indicates which properties triggered the alert generation.
    *
    * @param AlertTrigger $val The triggers
    *
    * @return Alert
    */
    public function setTriggers($val)
    {
		$this->_propDict["triggers"] = $val;
        return $this;
    }
    

     /** 
     * Gets the uriClickSecurityStates
     *
     * @return array The uriClickSecurityStates
     */
    public function getUriClickSecurityStates()
    {
        if (array_key_exists("uriClickSecurityStates", $this->_propDict)) {
           return $this->_propDict["uriClickSecurityStates"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the uriClickSecurityStates
    *
    * @param UriClickSecurityState $val The uriClickSecurityStates
    *
    * @return Alert
    */
    public function setUriClickSecurityStates($val)
    {
		$this->_propDict["uriClickSecurityStates"] = $val;
        return $this;
    }
    

     /** 
     * Gets the userStates
    * Security-related stateful information generated by the provider about the user accounts related to this alert.
     *
     * @return array The userStates
     */
    public function getUserStates()
    {
        if (array_key_exists("userStates", $this->_propDict)) {
           return $this->_propDict["userStates"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the userStates
    * Security-related stateful information generated by the provider about the user accounts related to this alert.
    *
    * @param UserSecurityState $val The userStates
    *
    * @return Alert
    */
    public function setUserStates($val)
    {
		$this->_propDict["userStates"] = $val;
        return $this;
    }
    
    /**
    * Gets the vendorInformation
    * Complex type containing details about the security product/service vendor, provider, and subprovider (for example, vendor=Microsoft; provider=Windows Defender ATP; subProvider=AppLocker). Required.
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
    * Complex type containing details about the security product/service vendor, provider, and subprovider (for example, vendor=Microsoft; provider=Windows Defender ATP; subProvider=AppLocker). Required.
    *
    * @param SecurityVendorInformation $val The vendorInformation
    *
    * @return Alert
    */
    public function setVendorInformation($val)
    {
        $this->_propDict["vendorInformation"] = $val;
        return $this;
    }
    

     /** 
     * Gets the vulnerabilityStates
    * Threat intelligence pertaining to one or more vulnerabilities related to this alert.
     *
     * @return array The vulnerabilityStates
     */
    public function getVulnerabilityStates()
    {
        if (array_key_exists("vulnerabilityStates", $this->_propDict)) {
           return $this->_propDict["vulnerabilityStates"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the vulnerabilityStates
    * Threat intelligence pertaining to one or more vulnerabilities related to this alert.
    *
    * @param VulnerabilityState $val The vulnerabilityStates
    *
    * @return Alert
    */
    public function setVulnerabilityStates($val)
    {
		$this->_propDict["vulnerabilityStates"] = $val;
        return $this;
    }
    
}
