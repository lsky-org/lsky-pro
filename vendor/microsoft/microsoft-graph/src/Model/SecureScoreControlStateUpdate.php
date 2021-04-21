<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SecureScoreControlStateUpdate File
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
* SecureScoreControlStateUpdate class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SecureScoreControlStateUpdate extends Entity
{
    /**
    * Gets the assignedTo
    *
    * @return string The assignedTo
    */
    public function getAssignedTo()
    {
        if (array_key_exists("assignedTo", $this->_propDict)) {
            return $this->_propDict["assignedTo"];
        } else {
            return null;
        }
    }

    /**
    * Sets the assignedTo
    *
    * @param string $val The value of the assignedTo
    *
    * @return SecureScoreControlStateUpdate
    */
    public function setAssignedTo($val)
    {
        $this->_propDict["assignedTo"] = $val;
        return $this;
    }
    /**
    * Gets the comment
    *
    * @return string The comment
    */
    public function getComment()
    {
        if (array_key_exists("comment", $this->_propDict)) {
            return $this->_propDict["comment"];
        } else {
            return null;
        }
    }

    /**
    * Sets the comment
    *
    * @param string $val The value of the comment
    *
    * @return SecureScoreControlStateUpdate
    */
    public function setComment($val)
    {
        $this->_propDict["comment"] = $val;
        return $this;
    }
    /**
    * Gets the state
    *
    * @return string The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            return $this->_propDict["state"];
        } else {
            return null;
        }
    }

    /**
    * Sets the state
    *
    * @param string $val The value of the state
    *
    * @return SecureScoreControlStateUpdate
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
        return $this;
    }
    /**
    * Gets the updatedBy
    *
    * @return string The updatedBy
    */
    public function getUpdatedBy()
    {
        if (array_key_exists("updatedBy", $this->_propDict)) {
            return $this->_propDict["updatedBy"];
        } else {
            return null;
        }
    }

    /**
    * Sets the updatedBy
    *
    * @param string $val The value of the updatedBy
    *
    * @return SecureScoreControlStateUpdate
    */
    public function setUpdatedBy($val)
    {
        $this->_propDict["updatedBy"] = $val;
        return $this;
    }

    /**
    * Gets the updatedDateTime
    *
    * @return \DateTime The updatedDateTime
    */
    public function getUpdatedDateTime()
    {
        if (array_key_exists("updatedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["updatedDateTime"], "\DateTime")) {
                return $this->_propDict["updatedDateTime"];
            } else {
                $this->_propDict["updatedDateTime"] = new \DateTime($this->_propDict["updatedDateTime"]);
                return $this->_propDict["updatedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the updatedDateTime
    *
    * @param \DateTime $val The value to assign to the updatedDateTime
    *
    * @return SecureScoreControlStateUpdate The SecureScoreControlStateUpdate
    */
    public function setUpdatedDateTime($val)
    {
        $this->_propDict["updatedDateTime"] = $val;
         return $this;
    }
}
