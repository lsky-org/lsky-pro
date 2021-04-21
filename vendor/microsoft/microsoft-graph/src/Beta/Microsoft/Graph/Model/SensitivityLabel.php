<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SensitivityLabel File
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
* SensitivityLabel class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SensitivityLabel extends Entity
{
    /**
    * Gets the applicableTo
    *
    * @return SensitivityLabelTarget The applicableTo
    */
    public function getApplicableTo()
    {
        if (array_key_exists("applicableTo", $this->_propDict)) {
            if (is_a($this->_propDict["applicableTo"], "\Beta\Microsoft\Graph\Model\SensitivityLabelTarget")) {
                return $this->_propDict["applicableTo"];
            } else {
                $this->_propDict["applicableTo"] = new SensitivityLabelTarget($this->_propDict["applicableTo"]);
                return $this->_propDict["applicableTo"];
            }
        }
        return null;
    }
    
    /**
    * Sets the applicableTo
    *
    * @param SensitivityLabelTarget $val The applicableTo
    *
    * @return SensitivityLabel
    */
    public function setApplicableTo($val)
    {
        $this->_propDict["applicableTo"] = $val;
        return $this;
    }
    
    /**
    * Gets the applicationMode
    *
    * @return ApplicationMode The applicationMode
    */
    public function getApplicationMode()
    {
        if (array_key_exists("applicationMode", $this->_propDict)) {
            if (is_a($this->_propDict["applicationMode"], "\Beta\Microsoft\Graph\Model\ApplicationMode")) {
                return $this->_propDict["applicationMode"];
            } else {
                $this->_propDict["applicationMode"] = new ApplicationMode($this->_propDict["applicationMode"]);
                return $this->_propDict["applicationMode"];
            }
        }
        return null;
    }
    
    /**
    * Sets the applicationMode
    *
    * @param ApplicationMode $val The applicationMode
    *
    * @return SensitivityLabel
    */
    public function setApplicationMode($val)
    {
        $this->_propDict["applicationMode"] = $val;
        return $this;
    }
    

     /** 
     * Gets the assignedPolicies
     *
     * @return array The assignedPolicies
     */
    public function getAssignedPolicies()
    {
        if (array_key_exists("assignedPolicies", $this->_propDict)) {
           return $this->_propDict["assignedPolicies"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the assignedPolicies
    *
    * @param LabelPolicy $val The assignedPolicies
    *
    * @return SensitivityLabel
    */
    public function setAssignedPolicies($val)
    {
		$this->_propDict["assignedPolicies"] = $val;
        return $this;
    }
    
    /**
    * Gets the autoLabeling
    *
    * @return AutoLabeling The autoLabeling
    */
    public function getAutoLabeling()
    {
        if (array_key_exists("autoLabeling", $this->_propDict)) {
            if (is_a($this->_propDict["autoLabeling"], "\Beta\Microsoft\Graph\Model\AutoLabeling")) {
                return $this->_propDict["autoLabeling"];
            } else {
                $this->_propDict["autoLabeling"] = new AutoLabeling($this->_propDict["autoLabeling"]);
                return $this->_propDict["autoLabeling"];
            }
        }
        return null;
    }
    
    /**
    * Sets the autoLabeling
    *
    * @param AutoLabeling $val The autoLabeling
    *
    * @return SensitivityLabel
    */
    public function setAutoLabeling($val)
    {
        $this->_propDict["autoLabeling"] = $val;
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
    * @return SensitivityLabel
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
    * @return SensitivityLabel
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the isDefault
    *
    * @return bool The isDefault
    */
    public function getIsDefault()
    {
        if (array_key_exists("isDefault", $this->_propDict)) {
            return $this->_propDict["isDefault"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isDefault
    *
    * @param bool $val The isDefault
    *
    * @return SensitivityLabel
    */
    public function setIsDefault($val)
    {
        $this->_propDict["isDefault"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the isEndpointProtectionEnabled
    *
    * @return bool The isEndpointProtectionEnabled
    */
    public function getIsEndpointProtectionEnabled()
    {
        if (array_key_exists("isEndpointProtectionEnabled", $this->_propDict)) {
            return $this->_propDict["isEndpointProtectionEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isEndpointProtectionEnabled
    *
    * @param bool $val The isEndpointProtectionEnabled
    *
    * @return SensitivityLabel
    */
    public function setIsEndpointProtectionEnabled($val)
    {
        $this->_propDict["isEndpointProtectionEnabled"] = boolval($val);
        return $this;
    }
    

     /** 
     * Gets the labelActions
     *
     * @return array The labelActions
     */
    public function getLabelActions()
    {
        if (array_key_exists("labelActions", $this->_propDict)) {
           return $this->_propDict["labelActions"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the labelActions
    *
    * @param LabelActionBase $val The labelActions
    *
    * @return SensitivityLabel
    */
    public function setLabelActions($val)
    {
		$this->_propDict["labelActions"] = $val;
        return $this;
    }
    
    /**
    * Gets the name
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
    *
    * @param string $val The name
    *
    * @return SensitivityLabel
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    
    /**
    * Gets the priority
    *
    * @return int The priority
    */
    public function getPriority()
    {
        if (array_key_exists("priority", $this->_propDict)) {
            return $this->_propDict["priority"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the priority
    *
    * @param int $val The priority
    *
    * @return SensitivityLabel
    */
    public function setPriority($val)
    {
        $this->_propDict["priority"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the toolTip
    *
    * @return string The toolTip
    */
    public function getToolTip()
    {
        if (array_key_exists("toolTip", $this->_propDict)) {
            return $this->_propDict["toolTip"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the toolTip
    *
    * @param string $val The toolTip
    *
    * @return SensitivityLabel
    */
    public function setToolTip($val)
    {
        $this->_propDict["toolTip"] = $val;
        return $this;
    }
    

     /** 
     * Gets the sublabels
     *
     * @return array The sublabels
     */
    public function getSublabels()
    {
        if (array_key_exists("sublabels", $this->_propDict)) {
           return $this->_propDict["sublabels"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the sublabels
    *
    * @param SensitivityLabel $val The sublabels
    *
    * @return SensitivityLabel
    */
    public function setSublabels($val)
    {
		$this->_propDict["sublabels"] = $val;
        return $this;
    }
    
}
