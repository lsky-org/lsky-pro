<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CalendarSharingMessage File
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
* CalendarSharingMessage class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CalendarSharingMessage extends Message
{
    /**
    * Gets the canAccept
    *
    * @return bool The canAccept
    */
    public function getCanAccept()
    {
        if (array_key_exists("canAccept", $this->_propDict)) {
            return $this->_propDict["canAccept"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the canAccept
    *
    * @param bool $val The canAccept
    *
    * @return CalendarSharingMessage
    */
    public function setCanAccept($val)
    {
        $this->_propDict["canAccept"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the sharingMessageAction
    *
    * @return CalendarSharingMessageAction The sharingMessageAction
    */
    public function getSharingMessageAction()
    {
        if (array_key_exists("sharingMessageAction", $this->_propDict)) {
            if (is_a($this->_propDict["sharingMessageAction"], "\Beta\Microsoft\Graph\Model\CalendarSharingMessageAction")) {
                return $this->_propDict["sharingMessageAction"];
            } else {
                $this->_propDict["sharingMessageAction"] = new CalendarSharingMessageAction($this->_propDict["sharingMessageAction"]);
                return $this->_propDict["sharingMessageAction"];
            }
        }
        return null;
    }
    
    /**
    * Sets the sharingMessageAction
    *
    * @param CalendarSharingMessageAction $val The sharingMessageAction
    *
    * @return CalendarSharingMessage
    */
    public function setSharingMessageAction($val)
    {
        $this->_propDict["sharingMessageAction"] = $val;
        return $this;
    }
    

     /** 
     * Gets the sharingMessageActions
     *
     * @return array The sharingMessageActions
     */
    public function getSharingMessageActions()
    {
        if (array_key_exists("sharingMessageActions", $this->_propDict)) {
           return $this->_propDict["sharingMessageActions"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the sharingMessageActions
    *
    * @param CalendarSharingMessageAction $val The sharingMessageActions
    *
    * @return CalendarSharingMessage
    */
    public function setSharingMessageActions($val)
    {
		$this->_propDict["sharingMessageActions"] = $val;
        return $this;
    }
    
    /**
    * Gets the suggestedCalendarName
    *
    * @return string The suggestedCalendarName
    */
    public function getSuggestedCalendarName()
    {
        if (array_key_exists("suggestedCalendarName", $this->_propDict)) {
            return $this->_propDict["suggestedCalendarName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the suggestedCalendarName
    *
    * @param string $val The suggestedCalendarName
    *
    * @return CalendarSharingMessage
    */
    public function setSuggestedCalendarName($val)
    {
        $this->_propDict["suggestedCalendarName"] = $val;
        return $this;
    }
    
}
