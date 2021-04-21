<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* InformationProtectionLabel File
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
* InformationProtectionLabel class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class InformationProtectionLabel extends Entity
{
    /**
    * Gets the color
    * The color that the UI should display for the label, if configured.
    *
    * @return string The color
    */
    public function getColor()
    {
        if (array_key_exists("color", $this->_propDict)) {
            return $this->_propDict["color"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the color
    * The color that the UI should display for the label, if configured.
    *
    * @param string $val The color
    *
    * @return InformationProtectionLabel
    */
    public function setColor($val)
    {
        $this->_propDict["color"] = $val;
        return $this;
    }
    
    /**
    * Gets the description
    * The admin-defined description for the label.
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
    * The admin-defined description for the label.
    *
    * @param string $val The description
    *
    * @return InformationProtectionLabel
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the isActive
    * Indicates whether the label is active or not. Active labels should be hidden or disabled in UI.
    *
    * @return bool The isActive
    */
    public function getIsActive()
    {
        if (array_key_exists("isActive", $this->_propDict)) {
            return $this->_propDict["isActive"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isActive
    * Indicates whether the label is active or not. Active labels should be hidden or disabled in UI.
    *
    * @param bool $val The isActive
    *
    * @return InformationProtectionLabel
    */
    public function setIsActive($val)
    {
        $this->_propDict["isActive"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the name
    * The plaintext name of the label.
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
    * The plaintext name of the label.
    *
    * @param string $val The name
    *
    * @return InformationProtectionLabel
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    
    /**
    * Gets the parent
    *
    * @return ParentLabelDetails The parent
    */
    public function getParent()
    {
        if (array_key_exists("parent", $this->_propDict)) {
            if (is_a($this->_propDict["parent"], "\Beta\Microsoft\Graph\Model\ParentLabelDetails")) {
                return $this->_propDict["parent"];
            } else {
                $this->_propDict["parent"] = new ParentLabelDetails($this->_propDict["parent"]);
                return $this->_propDict["parent"];
            }
        }
        return null;
    }
    
    /**
    * Sets the parent
    *
    * @param ParentLabelDetails $val The parent
    *
    * @return InformationProtectionLabel
    */
    public function setParent($val)
    {
        $this->_propDict["parent"] = $val;
        return $this;
    }
    
    /**
    * Gets the sensitivity
    * The sensitivity value of the label, where lower is less sensitive.
    *
    * @return int The sensitivity
    */
    public function getSensitivity()
    {
        if (array_key_exists("sensitivity", $this->_propDict)) {
            return $this->_propDict["sensitivity"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the sensitivity
    * The sensitivity value of the label, where lower is less sensitive.
    *
    * @param int $val The sensitivity
    *
    * @return InformationProtectionLabel
    */
    public function setSensitivity($val)
    {
        $this->_propDict["sensitivity"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the tooltip
    * The tooltip that should be displayed for the label in a UI.
    *
    * @return string The tooltip
    */
    public function getTooltip()
    {
        if (array_key_exists("tooltip", $this->_propDict)) {
            return $this->_propDict["tooltip"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the tooltip
    * The tooltip that should be displayed for the label in a UI.
    *
    * @param string $val The tooltip
    *
    * @return InformationProtectionLabel
    */
    public function setTooltip($val)
    {
        $this->_propDict["tooltip"] = $val;
        return $this;
    }
    
}
