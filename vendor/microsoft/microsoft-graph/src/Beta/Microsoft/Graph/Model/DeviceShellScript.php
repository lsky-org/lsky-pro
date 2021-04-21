<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceShellScript File
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
* DeviceShellScript class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceShellScript extends Entity
{
    /**
    * Gets the blockExecutionNotifications
    * Does not notify the user a script is being executed
    *
    * @return bool The blockExecutionNotifications
    */
    public function getBlockExecutionNotifications()
    {
        if (array_key_exists("blockExecutionNotifications", $this->_propDict)) {
            return $this->_propDict["blockExecutionNotifications"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the blockExecutionNotifications
    * Does not notify the user a script is being executed
    *
    * @param bool $val The blockExecutionNotifications
    *
    * @return DeviceShellScript
    */
    public function setBlockExecutionNotifications($val)
    {
        $this->_propDict["blockExecutionNotifications"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the createdDateTime
    * The date and time the device management script was created. This property is read-only.
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
    * The date and time the device management script was created. This property is read-only.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return DeviceShellScript
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the description
    * Optional description for the device management script.
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
    * Optional description for the device management script.
    *
    * @param string $val The description
    *
    * @return DeviceShellScript
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * Name of the device management script.
    *
    * @return string The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the displayName
    * Name of the device management script.
    *
    * @param string $val The displayName
    *
    * @return DeviceShellScript
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the executionFrequency
    * The interval for script to run. If not defined the script will run once
    *
    * @return Duration The executionFrequency
    */
    public function getExecutionFrequency()
    {
        if (array_key_exists("executionFrequency", $this->_propDict)) {
            if (is_a($this->_propDict["executionFrequency"], "\Beta\Microsoft\Graph\Model\Duration")) {
                return $this->_propDict["executionFrequency"];
            } else {
                $this->_propDict["executionFrequency"] = new Duration($this->_propDict["executionFrequency"]);
                return $this->_propDict["executionFrequency"];
            }
        }
        return null;
    }
    
    /**
    * Sets the executionFrequency
    * The interval for script to run. If not defined the script will run once
    *
    * @param Duration $val The executionFrequency
    *
    * @return DeviceShellScript
    */
    public function setExecutionFrequency($val)
    {
        $this->_propDict["executionFrequency"] = $val;
        return $this;
    }
    
    /**
    * Gets the fileName
    * Script file name.
    *
    * @return string The fileName
    */
    public function getFileName()
    {
        if (array_key_exists("fileName", $this->_propDict)) {
            return $this->_propDict["fileName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the fileName
    * Script file name.
    *
    * @param string $val The fileName
    *
    * @return DeviceShellScript
    */
    public function setFileName($val)
    {
        $this->_propDict["fileName"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastModifiedDateTime
    * The date and time the device management script was last modified. This property is read-only.
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
    * The date and time the device management script was last modified. This property is read-only.
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return DeviceShellScript
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the retryCount
    * Number of times for the script to be retried if it fails
    *
    * @return int The retryCount
    */
    public function getRetryCount()
    {
        if (array_key_exists("retryCount", $this->_propDict)) {
            return $this->_propDict["retryCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the retryCount
    * Number of times for the script to be retried if it fails
    *
    * @param int $val The retryCount
    *
    * @return DeviceShellScript
    */
    public function setRetryCount($val)
    {
        $this->_propDict["retryCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the roleScopeTagIds
    * List of Scope Tag IDs for this PowerShellScript instance.
    *
    * @return string The roleScopeTagIds
    */
    public function getRoleScopeTagIds()
    {
        if (array_key_exists("roleScopeTagIds", $this->_propDict)) {
            return $this->_propDict["roleScopeTagIds"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the roleScopeTagIds
    * List of Scope Tag IDs for this PowerShellScript instance.
    *
    * @param string $val The roleScopeTagIds
    *
    * @return DeviceShellScript
    */
    public function setRoleScopeTagIds($val)
    {
        $this->_propDict["roleScopeTagIds"] = $val;
        return $this;
    }
    
    /**
    * Gets the runAsAccount
    * Indicates the type of execution context. Possible values are: system, user.
    *
    * @return RunAsAccountType The runAsAccount
    */
    public function getRunAsAccount()
    {
        if (array_key_exists("runAsAccount", $this->_propDict)) {
            if (is_a($this->_propDict["runAsAccount"], "\Beta\Microsoft\Graph\Model\RunAsAccountType")) {
                return $this->_propDict["runAsAccount"];
            } else {
                $this->_propDict["runAsAccount"] = new RunAsAccountType($this->_propDict["runAsAccount"]);
                return $this->_propDict["runAsAccount"];
            }
        }
        return null;
    }
    
    /**
    * Sets the runAsAccount
    * Indicates the type of execution context. Possible values are: system, user.
    *
    * @param RunAsAccountType $val The runAsAccount
    *
    * @return DeviceShellScript
    */
    public function setRunAsAccount($val)
    {
        $this->_propDict["runAsAccount"] = $val;
        return $this;
    }
    
    /**
    * Gets the scriptContent
    * The script content.
    *
    * @return \GuzzleHttp\Psr7\Stream The scriptContent
    */
    public function getScriptContent()
    {
        if (array_key_exists("scriptContent", $this->_propDict)) {
            if (is_a($this->_propDict["scriptContent"], "\GuzzleHttp\Psr7\Stream")) {
                return $this->_propDict["scriptContent"];
            } else {
                $this->_propDict["scriptContent"] = \GuzzleHttp\Psr7\stream_for($this->_propDict["scriptContent"]);
                return $this->_propDict["scriptContent"];
            }
        }
        return null;
    }
    
    /**
    * Sets the scriptContent
    * The script content.
    *
    * @param \GuzzleHttp\Psr7\Stream $val The scriptContent
    *
    * @return DeviceShellScript
    */
    public function setScriptContent($val)
    {
        $this->_propDict["scriptContent"] = $val;
        return $this;
    }
    

     /** 
     * Gets the assignments
    * The list of group assignments for the device management script.
     *
     * @return array The assignments
     */
    public function getAssignments()
    {
        if (array_key_exists("assignments", $this->_propDict)) {
           return $this->_propDict["assignments"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the assignments
    * The list of group assignments for the device management script.
    *
    * @param DeviceManagementScriptAssignment $val The assignments
    *
    * @return DeviceShellScript
    */
    public function setAssignments($val)
    {
		$this->_propDict["assignments"] = $val;
        return $this;
    }
    

     /** 
     * Gets the deviceRunStates
    * List of run states for this script across all devices.
     *
     * @return array The deviceRunStates
     */
    public function getDeviceRunStates()
    {
        if (array_key_exists("deviceRunStates", $this->_propDict)) {
           return $this->_propDict["deviceRunStates"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the deviceRunStates
    * List of run states for this script across all devices.
    *
    * @param DeviceManagementScriptDeviceState $val The deviceRunStates
    *
    * @return DeviceShellScript
    */
    public function setDeviceRunStates($val)
    {
		$this->_propDict["deviceRunStates"] = $val;
        return $this;
    }
    

     /** 
     * Gets the groupAssignments
    * The list of group assignments for the device management script.
     *
     * @return array The groupAssignments
     */
    public function getGroupAssignments()
    {
        if (array_key_exists("groupAssignments", $this->_propDict)) {
           return $this->_propDict["groupAssignments"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the groupAssignments
    * The list of group assignments for the device management script.
    *
    * @param DeviceManagementScriptGroupAssignment $val The groupAssignments
    *
    * @return DeviceShellScript
    */
    public function setGroupAssignments($val)
    {
		$this->_propDict["groupAssignments"] = $val;
        return $this;
    }
    
    /**
    * Gets the runSummary
    * Run summary for device management script.
    *
    * @return DeviceManagementScriptRunSummary The runSummary
    */
    public function getRunSummary()
    {
        if (array_key_exists("runSummary", $this->_propDict)) {
            if (is_a($this->_propDict["runSummary"], "\Beta\Microsoft\Graph\Model\DeviceManagementScriptRunSummary")) {
                return $this->_propDict["runSummary"];
            } else {
                $this->_propDict["runSummary"] = new DeviceManagementScriptRunSummary($this->_propDict["runSummary"]);
                return $this->_propDict["runSummary"];
            }
        }
        return null;
    }
    
    /**
    * Sets the runSummary
    * Run summary for device management script.
    *
    * @param DeviceManagementScriptRunSummary $val The runSummary
    *
    * @return DeviceShellScript
    */
    public function setRunSummary($val)
    {
        $this->_propDict["runSummary"] = $val;
        return $this;
    }
    

     /** 
     * Gets the userRunStates
    * List of run states for this script across all users.
     *
     * @return array The userRunStates
     */
    public function getUserRunStates()
    {
        if (array_key_exists("userRunStates", $this->_propDict)) {
           return $this->_propDict["userRunStates"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the userRunStates
    * List of run states for this script across all users.
    *
    * @param DeviceManagementScriptUserState $val The userRunStates
    *
    * @return DeviceShellScript
    */
    public function setUserRunStates($val)
    {
		$this->_propDict["userRunStates"] = $val;
        return $this;
    }
    
}
