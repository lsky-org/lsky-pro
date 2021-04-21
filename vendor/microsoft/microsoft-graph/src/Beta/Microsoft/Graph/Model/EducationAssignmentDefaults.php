<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EducationAssignmentDefaults File
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
* EducationAssignmentDefaults class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EducationAssignmentDefaults extends Entity
{
    /**
    * Gets the addedStudentAction
    * Class-level default behavior for handling students who are added after the assignment is published. Possible values are: none, assignIfOpen.
    *
    * @return EducationAddedStudentAction The addedStudentAction
    */
    public function getAddedStudentAction()
    {
        if (array_key_exists("addedStudentAction", $this->_propDict)) {
            if (is_a($this->_propDict["addedStudentAction"], "\Beta\Microsoft\Graph\Model\EducationAddedStudentAction")) {
                return $this->_propDict["addedStudentAction"];
            } else {
                $this->_propDict["addedStudentAction"] = new EducationAddedStudentAction($this->_propDict["addedStudentAction"]);
                return $this->_propDict["addedStudentAction"];
            }
        }
        return null;
    }
    
    /**
    * Sets the addedStudentAction
    * Class-level default behavior for handling students who are added after the assignment is published. Possible values are: none, assignIfOpen.
    *
    * @param EducationAddedStudentAction $val The addedStudentAction
    *
    * @return EducationAssignmentDefaults
    */
    public function setAddedStudentAction($val)
    {
        $this->_propDict["addedStudentAction"] = $val;
        return $this;
    }
    
    /**
    * Gets the dueTime
    * Class-level default value for due time field. Default value is 23:59:00.
    *
    * @return TimeOfDay The dueTime
    */
    public function getDueTime()
    {
        if (array_key_exists("dueTime", $this->_propDict)) {
            if (is_a($this->_propDict["dueTime"], "\Beta\Microsoft\Graph\Model\TimeOfDay")) {
                return $this->_propDict["dueTime"];
            } else {
                $this->_propDict["dueTime"] = new TimeOfDay($this->_propDict["dueTime"]);
                return $this->_propDict["dueTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the dueTime
    * Class-level default value for due time field. Default value is 23:59:00.
    *
    * @param TimeOfDay $val The dueTime
    *
    * @return EducationAssignmentDefaults
    */
    public function setDueTime($val)
    {
        $this->_propDict["dueTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the notificationChannelUrl
    * Default Teams channel to which notifications will be sent. Default value is null.
    *
    * @return string The notificationChannelUrl
    */
    public function getNotificationChannelUrl()
    {
        if (array_key_exists("notificationChannelUrl", $this->_propDict)) {
            return $this->_propDict["notificationChannelUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the notificationChannelUrl
    * Default Teams channel to which notifications will be sent. Default value is null.
    *
    * @param string $val The notificationChannelUrl
    *
    * @return EducationAssignmentDefaults
    */
    public function setNotificationChannelUrl($val)
    {
        $this->_propDict["notificationChannelUrl"] = $val;
        return $this;
    }
    
}
