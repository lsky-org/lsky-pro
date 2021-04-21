<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* BusinessFlow File
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
* BusinessFlow class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class BusinessFlow extends Entity
{
    /**
    * Gets the customData
    *
    * @return string The customData
    */
    public function getCustomData()
    {
        if (array_key_exists("customData", $this->_propDict)) {
            return $this->_propDict["customData"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the customData
    *
    * @param string $val The customData
    *
    * @return BusinessFlow
    */
    public function setCustomData($val)
    {
        $this->_propDict["customData"] = $val;
        return $this;
    }
    
    /**
    * Gets the deDuplicationId
    *
    * @return string The deDuplicationId
    */
    public function getDeDuplicationId()
    {
        if (array_key_exists("deDuplicationId", $this->_propDict)) {
            return $this->_propDict["deDuplicationId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deDuplicationId
    *
    * @param string $val The deDuplicationId
    *
    * @return BusinessFlow
    */
    public function setDeDuplicationId($val)
    {
        $this->_propDict["deDuplicationId"] = $val;
        return $this;
    }
    
    /**
    * Gets the description
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
    *
    * @param string $val The description
    *
    * @return BusinessFlow
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
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
    *
    * @param string $val The displayName
    *
    * @return BusinessFlow
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the policy
    *
    * @return GovernancePolicy The policy
    */
    public function getPolicy()
    {
        if (array_key_exists("policy", $this->_propDict)) {
            if (is_a($this->_propDict["policy"], "\Beta\Microsoft\Graph\Model\GovernancePolicy")) {
                return $this->_propDict["policy"];
            } else {
                $this->_propDict["policy"] = new GovernancePolicy($this->_propDict["policy"]);
                return $this->_propDict["policy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the policy
    *
    * @param GovernancePolicy $val The policy
    *
    * @return BusinessFlow
    */
    public function setPolicy($val)
    {
        $this->_propDict["policy"] = $val;
        return $this;
    }
    
    /**
    * Gets the policyTemplateId
    *
    * @return string The policyTemplateId
    */
    public function getPolicyTemplateId()
    {
        if (array_key_exists("policyTemplateId", $this->_propDict)) {
            return $this->_propDict["policyTemplateId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the policyTemplateId
    *
    * @param string $val The policyTemplateId
    *
    * @return BusinessFlow
    */
    public function setPolicyTemplateId($val)
    {
        $this->_propDict["policyTemplateId"] = $val;
        return $this;
    }
    
    /**
    * Gets the recordVersion
    *
    * @return string The recordVersion
    */
    public function getRecordVersion()
    {
        if (array_key_exists("recordVersion", $this->_propDict)) {
            return $this->_propDict["recordVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the recordVersion
    *
    * @param string $val The recordVersion
    *
    * @return BusinessFlow
    */
    public function setRecordVersion($val)
    {
        $this->_propDict["recordVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the schemaId
    *
    * @return string The schemaId
    */
    public function getSchemaId()
    {
        if (array_key_exists("schemaId", $this->_propDict)) {
            return $this->_propDict["schemaId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the schemaId
    *
    * @param string $val The schemaId
    *
    * @return BusinessFlow
    */
    public function setSchemaId($val)
    {
        $this->_propDict["schemaId"] = $val;
        return $this;
    }
    
    /**
    * Gets the settings
    *
    * @return BusinessFlowSettings The settings
    */
    public function getSettings()
    {
        if (array_key_exists("settings", $this->_propDict)) {
            if (is_a($this->_propDict["settings"], "\Beta\Microsoft\Graph\Model\BusinessFlowSettings")) {
                return $this->_propDict["settings"];
            } else {
                $this->_propDict["settings"] = new BusinessFlowSettings($this->_propDict["settings"]);
                return $this->_propDict["settings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the settings
    *
    * @param BusinessFlowSettings $val The settings
    *
    * @return BusinessFlow
    */
    public function setSettings($val)
    {
        $this->_propDict["settings"] = $val;
        return $this;
    }
    
}
