<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MatchingLabel File
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
* MatchingLabel class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MatchingLabel extends Entity
{

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
    * @param ApplicationMode $val The value to assign to the applicationMode
    *
    * @return MatchingLabel The MatchingLabel
    */
    public function setApplicationMode($val)
    {
        $this->_propDict["applicationMode"] = $val;
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
    * @param string $val The value of the description
    *
    * @return MatchingLabel
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
    * @param string $val The value of the displayName
    *
    * @return MatchingLabel
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    /**
    * Gets the id
    *
    * @return string The id
    */
    public function getId()
    {
        if (array_key_exists("id", $this->_propDict)) {
            return $this->_propDict["id"];
        } else {
            return null;
        }
    }

    /**
    * Sets the id
    *
    * @param string $val The value of the id
    *
    * @return MatchingLabel
    */
    public function setId($val)
    {
        $this->_propDict["id"] = $val;
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
    * @param bool $val The value of the isEndpointProtectionEnabled
    *
    * @return MatchingLabel
    */
    public function setIsEndpointProtectionEnabled($val)
    {
        $this->_propDict["isEndpointProtectionEnabled"] = $val;
        return $this;
    }

    /**
    * Gets the labelActions
    *
    * @return LabelActionBase The labelActions
    */
    public function getLabelActions()
    {
        if (array_key_exists("labelActions", $this->_propDict)) {
            if (is_a($this->_propDict["labelActions"], "\Beta\Microsoft\Graph\Model\LabelActionBase")) {
                return $this->_propDict["labelActions"];
            } else {
                $this->_propDict["labelActions"] = new LabelActionBase($this->_propDict["labelActions"]);
                return $this->_propDict["labelActions"];
            }
        }
        return null;
    }

    /**
    * Sets the labelActions
    *
    * @param LabelActionBase $val The value to assign to the labelActions
    *
    * @return MatchingLabel The MatchingLabel
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
    * @param string $val The value of the name
    *
    * @return MatchingLabel
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    /**
    * Gets the policyTip
    *
    * @return string The policyTip
    */
    public function getPolicyTip()
    {
        if (array_key_exists("policyTip", $this->_propDict)) {
            return $this->_propDict["policyTip"];
        } else {
            return null;
        }
    }

    /**
    * Sets the policyTip
    *
    * @param string $val The value of the policyTip
    *
    * @return MatchingLabel
    */
    public function setPolicyTip($val)
    {
        $this->_propDict["policyTip"] = $val;
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
    * @param int $val The value of the priority
    *
    * @return MatchingLabel
    */
    public function setPriority($val)
    {
        $this->_propDict["priority"] = $val;
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
    * @param string $val The value of the toolTip
    *
    * @return MatchingLabel
    */
    public function setToolTip($val)
    {
        $this->_propDict["toolTip"] = $val;
        return $this;
    }
}
