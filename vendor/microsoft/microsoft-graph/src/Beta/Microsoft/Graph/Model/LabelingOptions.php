<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* LabelingOptions File
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
* LabelingOptions class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class LabelingOptions extends Entity
{

    /**
    * Gets the assignmentMethod
    * Possible values are: standard, privileged, auto.
    *
    * @return AssignmentMethod The assignmentMethod
    */
    public function getAssignmentMethod()
    {
        if (array_key_exists("assignmentMethod", $this->_propDict)) {
            if (is_a($this->_propDict["assignmentMethod"], "\Beta\Microsoft\Graph\Model\AssignmentMethod")) {
                return $this->_propDict["assignmentMethod"];
            } else {
                $this->_propDict["assignmentMethod"] = new AssignmentMethod($this->_propDict["assignmentMethod"]);
                return $this->_propDict["assignmentMethod"];
            }
        }
        return null;
    }

    /**
    * Sets the assignmentMethod
    * Possible values are: standard, privileged, auto.
    *
    * @param AssignmentMethod $val The value to assign to the assignmentMethod
    *
    * @return LabelingOptions The LabelingOptions
    */
    public function setAssignmentMethod($val)
    {
        $this->_propDict["assignmentMethod"] = $val;
         return $this;
    }

    /**
    * Gets the downgradeJustification
    * The downgrade justification object that indicates if downgrade was justified and, if so, the reason.
    *
    * @return DowngradeJustification The downgradeJustification
    */
    public function getDowngradeJustification()
    {
        if (array_key_exists("downgradeJustification", $this->_propDict)) {
            if (is_a($this->_propDict["downgradeJustification"], "\Beta\Microsoft\Graph\Model\DowngradeJustification")) {
                return $this->_propDict["downgradeJustification"];
            } else {
                $this->_propDict["downgradeJustification"] = new DowngradeJustification($this->_propDict["downgradeJustification"]);
                return $this->_propDict["downgradeJustification"];
            }
        }
        return null;
    }

    /**
    * Sets the downgradeJustification
    * The downgrade justification object that indicates if downgrade was justified and, if so, the reason.
    *
    * @param DowngradeJustification $val The value to assign to the downgradeJustification
    *
    * @return LabelingOptions The LabelingOptions
    */
    public function setDowngradeJustification($val)
    {
        $this->_propDict["downgradeJustification"] = $val;
         return $this;
    }

    /**
    * Gets the extendedProperties
    * Extended properties will be parsed and returned in the standard MIP labeled metadata format as part of the label information.
    *
    * @return KeyValuePair The extendedProperties
    */
    public function getExtendedProperties()
    {
        if (array_key_exists("extendedProperties", $this->_propDict)) {
            if (is_a($this->_propDict["extendedProperties"], "\Beta\Microsoft\Graph\Model\KeyValuePair")) {
                return $this->_propDict["extendedProperties"];
            } else {
                $this->_propDict["extendedProperties"] = new KeyValuePair($this->_propDict["extendedProperties"]);
                return $this->_propDict["extendedProperties"];
            }
        }
        return null;
    }

    /**
    * Sets the extendedProperties
    * Extended properties will be parsed and returned in the standard MIP labeled metadata format as part of the label information.
    *
    * @param KeyValuePair $val The value to assign to the extendedProperties
    *
    * @return LabelingOptions The LabelingOptions
    */
    public function setExtendedProperties($val)
    {
        $this->_propDict["extendedProperties"] = $val;
         return $this;
    }
    /**
    * Gets the labelId
    * The GUID of the label that should be applied to the information.
    *
    * @return string The labelId
    */
    public function getLabelId()
    {
        if (array_key_exists("labelId", $this->_propDict)) {
            return $this->_propDict["labelId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the labelId
    * The GUID of the label that should be applied to the information.
    *
    * @param string $val The value of the labelId
    *
    * @return LabelingOptions
    */
    public function setLabelId($val)
    {
        $this->_propDict["labelId"] = $val;
        return $this;
    }
}
