<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* GroupPrintUsageSummary File
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
* GroupPrintUsageSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class GroupPrintUsageSummary extends Entity
{
    /**
    * Gets the completedJobCount
    *
    * @return int The completedJobCount
    */
    public function getCompletedJobCount()
    {
        if (array_key_exists("completedJobCount", $this->_propDict)) {
            return $this->_propDict["completedJobCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the completedJobCount
    *
    * @param int $val The value of the completedJobCount
    *
    * @return GroupPrintUsageSummary
    */
    public function setCompletedJobCount($val)
    {
        $this->_propDict["completedJobCount"] = $val;
        return $this;
    }

    /**
    * Gets the group
    *
    * @return Identity The group
    */
    public function getGroup()
    {
        if (array_key_exists("group", $this->_propDict)) {
            if (is_a($this->_propDict["group"], "\Beta\Microsoft\Graph\Model\Identity")) {
                return $this->_propDict["group"];
            } else {
                $this->_propDict["group"] = new Identity($this->_propDict["group"]);
                return $this->_propDict["group"];
            }
        }
        return null;
    }

    /**
    * Sets the group
    *
    * @param Identity $val The value to assign to the group
    *
    * @return GroupPrintUsageSummary The GroupPrintUsageSummary
    */
    public function setGroup($val)
    {
        $this->_propDict["group"] = $val;
         return $this;
    }
    /**
    * Gets the groupDisplayName
    *
    * @return string The groupDisplayName
    */
    public function getGroupDisplayName()
    {
        if (array_key_exists("groupDisplayName", $this->_propDict)) {
            return $this->_propDict["groupDisplayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the groupDisplayName
    *
    * @param string $val The value of the groupDisplayName
    *
    * @return GroupPrintUsageSummary
    */
    public function setGroupDisplayName($val)
    {
        $this->_propDict["groupDisplayName"] = $val;
        return $this;
    }
    /**
    * Gets the groupMail
    *
    * @return string The groupMail
    */
    public function getGroupMail()
    {
        if (array_key_exists("groupMail", $this->_propDict)) {
            return $this->_propDict["groupMail"];
        } else {
            return null;
        }
    }

    /**
    * Sets the groupMail
    *
    * @param string $val The value of the groupMail
    *
    * @return GroupPrintUsageSummary
    */
    public function setGroupMail($val)
    {
        $this->_propDict["groupMail"] = $val;
        return $this;
    }
    /**
    * Gets the incompleteJobCount
    *
    * @return int The incompleteJobCount
    */
    public function getIncompleteJobCount()
    {
        if (array_key_exists("incompleteJobCount", $this->_propDict)) {
            return $this->_propDict["incompleteJobCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the incompleteJobCount
    *
    * @param int $val The value of the incompleteJobCount
    *
    * @return GroupPrintUsageSummary
    */
    public function setIncompleteJobCount($val)
    {
        $this->_propDict["incompleteJobCount"] = $val;
        return $this;
    }
}
