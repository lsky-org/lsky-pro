<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PlannerTaskDetails File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

/**
* PlannerTaskDetails class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PlannerTaskDetails extends Entity
{
    /**
    * Gets the checklist
    * The collection of checklist items on the task.
    *
    * @return PlannerChecklistItems The checklist
    */
    public function getChecklist()
    {
        if (array_key_exists("checklist", $this->_propDict)) {
            if (is_a($this->_propDict["checklist"], "\Microsoft\Graph\Model\PlannerChecklistItems")) {
                return $this->_propDict["checklist"];
            } else {
                $this->_propDict["checklist"] = new PlannerChecklistItems($this->_propDict["checklist"]);
                return $this->_propDict["checklist"];
            }
        }
        return null;
    }
    
    /**
    * Sets the checklist
    * The collection of checklist items on the task.
    *
    * @param PlannerChecklistItems $val The checklist
    *
    * @return PlannerTaskDetails
    */
    public function setChecklist($val)
    {
        $this->_propDict["checklist"] = $val;
        return $this;
    }
    
    /**
    * Gets the description
    * Description of the task
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
    * Description of the task
    *
    * @param string $val The description
    *
    * @return PlannerTaskDetails
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the previewType
    * This sets the type of preview that shows up on the task. Possible values are: automatic, noPreview, checklist, description, reference. When set to automatic the displayed preview is chosen by the app viewing the task.
    *
    * @return PlannerPreviewType The previewType
    */
    public function getPreviewType()
    {
        if (array_key_exists("previewType", $this->_propDict)) {
            if (is_a($this->_propDict["previewType"], "\Microsoft\Graph\Model\PlannerPreviewType")) {
                return $this->_propDict["previewType"];
            } else {
                $this->_propDict["previewType"] = new PlannerPreviewType($this->_propDict["previewType"]);
                return $this->_propDict["previewType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the previewType
    * This sets the type of preview that shows up on the task. Possible values are: automatic, noPreview, checklist, description, reference. When set to automatic the displayed preview is chosen by the app viewing the task.
    *
    * @param PlannerPreviewType $val The previewType
    *
    * @return PlannerTaskDetails
    */
    public function setPreviewType($val)
    {
        $this->_propDict["previewType"] = $val;
        return $this;
    }
    
    /**
    * Gets the references
    * The collection of references on the task.
    *
    * @return PlannerExternalReferences The references
    */
    public function getReferences()
    {
        if (array_key_exists("references", $this->_propDict)) {
            if (is_a($this->_propDict["references"], "\Microsoft\Graph\Model\PlannerExternalReferences")) {
                return $this->_propDict["references"];
            } else {
                $this->_propDict["references"] = new PlannerExternalReferences($this->_propDict["references"]);
                return $this->_propDict["references"];
            }
        }
        return null;
    }
    
    /**
    * Sets the references
    * The collection of references on the task.
    *
    * @param PlannerExternalReferences $val The references
    *
    * @return PlannerTaskDetails
    */
    public function setReferences($val)
    {
        $this->_propDict["references"] = $val;
        return $this;
    }
    
}
