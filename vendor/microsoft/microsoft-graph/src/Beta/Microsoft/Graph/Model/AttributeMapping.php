<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AttributeMapping File
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
* AttributeMapping class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AttributeMapping extends Entity
{
    /**
    * Gets the defaultValue
    * Default value to be used in case the source property was evaluated to null. Optional.
    *
    * @return string The defaultValue
    */
    public function getDefaultValue()
    {
        if (array_key_exists("defaultValue", $this->_propDict)) {
            return $this->_propDict["defaultValue"];
        } else {
            return null;
        }
    }

    /**
    * Sets the defaultValue
    * Default value to be used in case the source property was evaluated to null. Optional.
    *
    * @param string $val The value of the defaultValue
    *
    * @return AttributeMapping
    */
    public function setDefaultValue($val)
    {
        $this->_propDict["defaultValue"] = $val;
        return $this;
    }
    /**
    * Gets the exportMissingReferences
    * For internal use only.
    *
    * @return bool The exportMissingReferences
    */
    public function getExportMissingReferences()
    {
        if (array_key_exists("exportMissingReferences", $this->_propDict)) {
            return $this->_propDict["exportMissingReferences"];
        } else {
            return null;
        }
    }

    /**
    * Sets the exportMissingReferences
    * For internal use only.
    *
    * @param bool $val The value of the exportMissingReferences
    *
    * @return AttributeMapping
    */
    public function setExportMissingReferences($val)
    {
        $this->_propDict["exportMissingReferences"] = $val;
        return $this;
    }

    /**
    * Gets the flowBehavior
    * Defines when this attribute should be exported to the target directory. Possible values are: FlowWhenChanged and FlowAlways. Default is FlowWhenChanged.
    *
    * @return AttributeFlowBehavior The flowBehavior
    */
    public function getFlowBehavior()
    {
        if (array_key_exists("flowBehavior", $this->_propDict)) {
            if (is_a($this->_propDict["flowBehavior"], "\Beta\Microsoft\Graph\Model\AttributeFlowBehavior")) {
                return $this->_propDict["flowBehavior"];
            } else {
                $this->_propDict["flowBehavior"] = new AttributeFlowBehavior($this->_propDict["flowBehavior"]);
                return $this->_propDict["flowBehavior"];
            }
        }
        return null;
    }

    /**
    * Sets the flowBehavior
    * Defines when this attribute should be exported to the target directory. Possible values are: FlowWhenChanged and FlowAlways. Default is FlowWhenChanged.
    *
    * @param AttributeFlowBehavior $val The value to assign to the flowBehavior
    *
    * @return AttributeMapping The AttributeMapping
    */
    public function setFlowBehavior($val)
    {
        $this->_propDict["flowBehavior"] = $val;
         return $this;
    }

    /**
    * Gets the flowType
    * Defines when this attribute should be updated in the target directory. Possible values are: Always (default), ObjectAddOnly (only when new object is created), MultiValueAddOnly (only when the change is adding new values to a multi-valued attribute).
    *
    * @return AttributeFlowType The flowType
    */
    public function getFlowType()
    {
        if (array_key_exists("flowType", $this->_propDict)) {
            if (is_a($this->_propDict["flowType"], "\Beta\Microsoft\Graph\Model\AttributeFlowType")) {
                return $this->_propDict["flowType"];
            } else {
                $this->_propDict["flowType"] = new AttributeFlowType($this->_propDict["flowType"]);
                return $this->_propDict["flowType"];
            }
        }
        return null;
    }

    /**
    * Sets the flowType
    * Defines when this attribute should be updated in the target directory. Possible values are: Always (default), ObjectAddOnly (only when new object is created), MultiValueAddOnly (only when the change is adding new values to a multi-valued attribute).
    *
    * @param AttributeFlowType $val The value to assign to the flowType
    *
    * @return AttributeMapping The AttributeMapping
    */
    public function setFlowType($val)
    {
        $this->_propDict["flowType"] = $val;
         return $this;
    }
    /**
    * Gets the matchingPriority
    * If higher than 0, this attribute will be used to perform an initial match of the objects between source and target directories. The synchronization engine will try to find the matching object using attribute with lowest value of matching priority first. If not found, the attribute with the next matching priority will be used, and so on a until match is found or no more matching attributes are left. Only attributes that are expected to have unique values, such as email, should be used as matching attributes.
    *
    * @return int The matchingPriority
    */
    public function getMatchingPriority()
    {
        if (array_key_exists("matchingPriority", $this->_propDict)) {
            return $this->_propDict["matchingPriority"];
        } else {
            return null;
        }
    }

    /**
    * Sets the matchingPriority
    * If higher than 0, this attribute will be used to perform an initial match of the objects between source and target directories. The synchronization engine will try to find the matching object using attribute with lowest value of matching priority first. If not found, the attribute with the next matching priority will be used, and so on a until match is found or no more matching attributes are left. Only attributes that are expected to have unique values, such as email, should be used as matching attributes.
    *
    * @param int $val The value of the matchingPriority
    *
    * @return AttributeMapping
    */
    public function setMatchingPriority($val)
    {
        $this->_propDict["matchingPriority"] = $val;
        return $this;
    }

    /**
    * Gets the source
    * Defines how a value should be extracted (or transformed) from the source object.
    *
    * @return AttributeMappingSource The source
    */
    public function getSource()
    {
        if (array_key_exists("source", $this->_propDict)) {
            if (is_a($this->_propDict["source"], "\Beta\Microsoft\Graph\Model\AttributeMappingSource")) {
                return $this->_propDict["source"];
            } else {
                $this->_propDict["source"] = new AttributeMappingSource($this->_propDict["source"]);
                return $this->_propDict["source"];
            }
        }
        return null;
    }

    /**
    * Sets the source
    * Defines how a value should be extracted (or transformed) from the source object.
    *
    * @param AttributeMappingSource $val The value to assign to the source
    *
    * @return AttributeMapping The AttributeMapping
    */
    public function setSource($val)
    {
        $this->_propDict["source"] = $val;
         return $this;
    }
    /**
    * Gets the targetAttributeName
    * Name of the attribute on the target object.
    *
    * @return string The targetAttributeName
    */
    public function getTargetAttributeName()
    {
        if (array_key_exists("targetAttributeName", $this->_propDict)) {
            return $this->_propDict["targetAttributeName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the targetAttributeName
    * Name of the attribute on the target object.
    *
    * @param string $val The value of the targetAttributeName
    *
    * @return AttributeMapping
    */
    public function setTargetAttributeName($val)
    {
        $this->_propDict["targetAttributeName"] = $val;
        return $this;
    }
}
