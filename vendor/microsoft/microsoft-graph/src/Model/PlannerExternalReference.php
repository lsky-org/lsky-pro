<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PlannerExternalReference File
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
* PlannerExternalReference class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PlannerExternalReference extends Entity
{
    /**
    * Gets the alias
    * A name alias to describe the reference.
    *
    * @return string The alias
    */
    public function getAlias()
    {
        if (array_key_exists("alias", $this->_propDict)) {
            return $this->_propDict["alias"];
        } else {
            return null;
        }
    }

    /**
    * Sets the alias
    * A name alias to describe the reference.
    *
    * @param string $val The value of the alias
    *
    * @return PlannerExternalReference
    */
    public function setAlias($val)
    {
        $this->_propDict["alias"] = $val;
        return $this;
    }

    /**
    * Gets the lastModifiedBy
    * Read-only. User ID by which this is last modified.
    *
    * @return IdentitySet The lastModifiedBy
    */
    public function getLastModifiedBy()
    {
        if (array_key_exists("lastModifiedBy", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedBy"], "\Microsoft\Graph\Model\IdentitySet")) {
                return $this->_propDict["lastModifiedBy"];
            } else {
                $this->_propDict["lastModifiedBy"] = new IdentitySet($this->_propDict["lastModifiedBy"]);
                return $this->_propDict["lastModifiedBy"];
            }
        }
        return null;
    }

    /**
    * Sets the lastModifiedBy
    * Read-only. User ID by which this is last modified.
    *
    * @param IdentitySet $val The value to assign to the lastModifiedBy
    *
    * @return PlannerExternalReference The PlannerExternalReference
    */
    public function setLastModifiedBy($val)
    {
        $this->_propDict["lastModifiedBy"] = $val;
         return $this;
    }

    /**
    * Gets the lastModifiedDateTime
    * Read-only. Date and time at which this is last modified. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
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
    * Read-only. Date and time at which this is last modified. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @param \DateTime $val The value to assign to the lastModifiedDateTime
    *
    * @return PlannerExternalReference The PlannerExternalReference
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the previewPriority
    * Used to set the relative priority order in which the reference will be shown as a preview on the task.
    *
    * @return string The previewPriority
    */
    public function getPreviewPriority()
    {
        if (array_key_exists("previewPriority", $this->_propDict)) {
            return $this->_propDict["previewPriority"];
        } else {
            return null;
        }
    }

    /**
    * Sets the previewPriority
    * Used to set the relative priority order in which the reference will be shown as a preview on the task.
    *
    * @param string $val The value of the previewPriority
    *
    * @return PlannerExternalReference
    */
    public function setPreviewPriority($val)
    {
        $this->_propDict["previewPriority"] = $val;
        return $this;
    }
    /**
    * Gets the type
    * Used to describe the type of the reference. Types include: PowerPoint, Word, Excel, Other.
    *
    * @return string The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            return $this->_propDict["type"];
        } else {
            return null;
        }
    }

    /**
    * Sets the type
    * Used to describe the type of the reference. Types include: PowerPoint, Word, Excel, Other.
    *
    * @param string $val The value of the type
    *
    * @return PlannerExternalReference
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
        return $this;
    }
}
