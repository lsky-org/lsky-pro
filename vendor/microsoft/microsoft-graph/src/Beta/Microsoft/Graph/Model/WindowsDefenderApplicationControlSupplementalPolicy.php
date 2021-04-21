<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsDefenderApplicationControlSupplementalPolicy File
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
* WindowsDefenderApplicationControlSupplementalPolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsDefenderApplicationControlSupplementalPolicy extends Entity
{
    /**
    * Gets the content
    * The WindowsDefenderApplicationControl supplemental policy content in byte array format.
    *
    * @return \GuzzleHttp\Psr7\Stream The content
    */
    public function getContent()
    {
        if (array_key_exists("content", $this->_propDict)) {
            if (is_a($this->_propDict["content"], "\GuzzleHttp\Psr7\Stream")) {
                return $this->_propDict["content"];
            } else {
                $this->_propDict["content"] = \GuzzleHttp\Psr7\stream_for($this->_propDict["content"]);
                return $this->_propDict["content"];
            }
        }
        return null;
    }
    
    /**
    * Sets the content
    * The WindowsDefenderApplicationControl supplemental policy content in byte array format.
    *
    * @param \GuzzleHttp\Psr7\Stream $val The content
    *
    * @return WindowsDefenderApplicationControlSupplementalPolicy
    */
    public function setContent($val)
    {
        $this->_propDict["content"] = $val;
        return $this;
    }
    
    /**
    * Gets the contentFileName
    * The WindowsDefenderApplicationControl supplemental policy content's file name.
    *
    * @return string The contentFileName
    */
    public function getContentFileName()
    {
        if (array_key_exists("contentFileName", $this->_propDict)) {
            return $this->_propDict["contentFileName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the contentFileName
    * The WindowsDefenderApplicationControl supplemental policy content's file name.
    *
    * @param string $val The contentFileName
    *
    * @return WindowsDefenderApplicationControlSupplementalPolicy
    */
    public function setContentFileName($val)
    {
        $this->_propDict["contentFileName"] = $val;
        return $this;
    }
    
    /**
    * Gets the creationDateTime
    * The date and time when the WindowsDefenderApplicationControl supplemental policy was uploaded.
    *
    * @return \DateTime The creationDateTime
    */
    public function getCreationDateTime()
    {
        if (array_key_exists("creationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["creationDateTime"], "\DateTime")) {
                return $this->_propDict["creationDateTime"];
            } else {
                $this->_propDict["creationDateTime"] = new \DateTime($this->_propDict["creationDateTime"]);
                return $this->_propDict["creationDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the creationDateTime
    * The date and time when the WindowsDefenderApplicationControl supplemental policy was uploaded.
    *
    * @param \DateTime $val The creationDateTime
    *
    * @return WindowsDefenderApplicationControlSupplementalPolicy
    */
    public function setCreationDateTime($val)
    {
        $this->_propDict["creationDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the description
    * The description of WindowsDefenderApplicationControl supplemental policy.
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
    * The description of WindowsDefenderApplicationControl supplemental policy.
    *
    * @param string $val The description
    *
    * @return WindowsDefenderApplicationControlSupplementalPolicy
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * The display name of WindowsDefenderApplicationControl supplemental policy.
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
    * The display name of WindowsDefenderApplicationControl supplemental policy.
    *
    * @param string $val The displayName
    *
    * @return WindowsDefenderApplicationControlSupplementalPolicy
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastModifiedDateTime
    * The date and time when the WindowsDefenderApplicationControl supplemental policy was last modified.
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
    * The date and time when the WindowsDefenderApplicationControl supplemental policy was last modified.
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return WindowsDefenderApplicationControlSupplementalPolicy
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the roleScopeTagIds
    * List of Scope Tags for this WindowsDefenderApplicationControl supplemental policy entity.
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
    * List of Scope Tags for this WindowsDefenderApplicationControl supplemental policy entity.
    *
    * @param string $val The roleScopeTagIds
    *
    * @return WindowsDefenderApplicationControlSupplementalPolicy
    */
    public function setRoleScopeTagIds($val)
    {
        $this->_propDict["roleScopeTagIds"] = $val;
        return $this;
    }
    
    /**
    * Gets the version
    * The WindowsDefenderApplicationControl supplemental policy's version.
    *
    * @return string The version
    */
    public function getVersion()
    {
        if (array_key_exists("version", $this->_propDict)) {
            return $this->_propDict["version"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the version
    * The WindowsDefenderApplicationControl supplemental policy's version.
    *
    * @param string $val The version
    *
    * @return WindowsDefenderApplicationControlSupplementalPolicy
    */
    public function setVersion($val)
    {
        $this->_propDict["version"] = $val;
        return $this;
    }
    

     /** 
     * Gets the assignments
    * The associated group assignments for this WindowsDefenderApplicationControl supplemental policy.
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
    * The associated group assignments for this WindowsDefenderApplicationControl supplemental policy.
    *
    * @param WindowsDefenderApplicationControlSupplementalPolicyAssignment $val The assignments
    *
    * @return WindowsDefenderApplicationControlSupplementalPolicy
    */
    public function setAssignments($val)
    {
		$this->_propDict["assignments"] = $val;
        return $this;
    }
    
    /**
    * Gets the deploySummary
    * WindowsDefenderApplicationControl supplemental policy deployment summary.
    *
    * @return WindowsDefenderApplicationControlSupplementalPolicyDeploymentSummary The deploySummary
    */
    public function getDeploySummary()
    {
        if (array_key_exists("deploySummary", $this->_propDict)) {
            if (is_a($this->_propDict["deploySummary"], "\Beta\Microsoft\Graph\Model\WindowsDefenderApplicationControlSupplementalPolicyDeploymentSummary")) {
                return $this->_propDict["deploySummary"];
            } else {
                $this->_propDict["deploySummary"] = new WindowsDefenderApplicationControlSupplementalPolicyDeploymentSummary($this->_propDict["deploySummary"]);
                return $this->_propDict["deploySummary"];
            }
        }
        return null;
    }
    
    /**
    * Sets the deploySummary
    * WindowsDefenderApplicationControl supplemental policy deployment summary.
    *
    * @param WindowsDefenderApplicationControlSupplementalPolicyDeploymentSummary $val The deploySummary
    *
    * @return WindowsDefenderApplicationControlSupplementalPolicy
    */
    public function setDeploySummary($val)
    {
        $this->_propDict["deploySummary"] = $val;
        return $this;
    }
    

     /** 
     * Gets the deviceStatuses
    * The list of device deployment states for this WindowsDefenderApplicationControl supplemental policy.
     *
     * @return array The deviceStatuses
     */
    public function getDeviceStatuses()
    {
        if (array_key_exists("deviceStatuses", $this->_propDict)) {
           return $this->_propDict["deviceStatuses"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the deviceStatuses
    * The list of device deployment states for this WindowsDefenderApplicationControl supplemental policy.
    *
    * @param WindowsDefenderApplicationControlSupplementalPolicyDeploymentStatus $val The deviceStatuses
    *
    * @return WindowsDefenderApplicationControlSupplementalPolicy
    */
    public function setDeviceStatuses($val)
    {
		$this->_propDict["deviceStatuses"] = $val;
        return $this;
    }
    
}
