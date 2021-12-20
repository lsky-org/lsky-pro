<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OnlineMeetingInfo File
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
* OnlineMeetingInfo class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OnlineMeetingInfo extends Entity
{
    /**
    * Gets the conferenceId
    * The ID of the conference.
    *
    * @return string The conferenceId
    */
    public function getConferenceId()
    {
        if (array_key_exists("conferenceId", $this->_propDict)) {
            return $this->_propDict["conferenceId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the conferenceId
    * The ID of the conference.
    *
    * @param string $val The value of the conferenceId
    *
    * @return OnlineMeetingInfo
    */
    public function setConferenceId($val)
    {
        $this->_propDict["conferenceId"] = $val;
        return $this;
    }
    /**
    * Gets the joinUrl
    * The external link that launches the online meeting. This is a URL that clients will launch into a browser and will redirect the user to join the meeting.
    *
    * @return string The joinUrl
    */
    public function getJoinUrl()
    {
        if (array_key_exists("joinUrl", $this->_propDict)) {
            return $this->_propDict["joinUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the joinUrl
    * The external link that launches the online meeting. This is a URL that clients will launch into a browser and will redirect the user to join the meeting.
    *
    * @param string $val The value of the joinUrl
    *
    * @return OnlineMeetingInfo
    */
    public function setJoinUrl($val)
    {
        $this->_propDict["joinUrl"] = $val;
        return $this;
    }

    /**
    * Gets the phones
    * All of the phone numbers associated with this conference.
    *
    * @return Phone The phones
    */
    public function getPhones()
    {
        if (array_key_exists("phones", $this->_propDict)) {
            if (is_a($this->_propDict["phones"], "\Beta\Microsoft\Graph\Model\Phone")) {
                return $this->_propDict["phones"];
            } else {
                $this->_propDict["phones"] = new Phone($this->_propDict["phones"]);
                return $this->_propDict["phones"];
            }
        }
        return null;
    }

    /**
    * Sets the phones
    * All of the phone numbers associated with this conference.
    *
    * @param Phone $val The value to assign to the phones
    *
    * @return OnlineMeetingInfo The OnlineMeetingInfo
    */
    public function setPhones($val)
    {
        $this->_propDict["phones"] = $val;
         return $this;
    }
    /**
    * Gets the quickDial
    * The pre-formatted quickdial for this call.
    *
    * @return string The quickDial
    */
    public function getQuickDial()
    {
        if (array_key_exists("quickDial", $this->_propDict)) {
            return $this->_propDict["quickDial"];
        } else {
            return null;
        }
    }

    /**
    * Sets the quickDial
    * The pre-formatted quickdial for this call.
    *
    * @param string $val The value of the quickDial
    *
    * @return OnlineMeetingInfo
    */
    public function setQuickDial($val)
    {
        $this->_propDict["quickDial"] = $val;
        return $this;
    }
    /**
    * Gets the tollFreeNumbers
    * The toll free numbers that can be used to join the conference.
    *
    * @return string The tollFreeNumbers
    */
    public function getTollFreeNumbers()
    {
        if (array_key_exists("tollFreeNumbers", $this->_propDict)) {
            return $this->_propDict["tollFreeNumbers"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tollFreeNumbers
    * The toll free numbers that can be used to join the conference.
    *
    * @param string $val The value of the tollFreeNumbers
    *
    * @return OnlineMeetingInfo
    */
    public function setTollFreeNumbers($val)
    {
        $this->_propDict["tollFreeNumbers"] = $val;
        return $this;
    }
    /**
    * Gets the tollNumber
    * The toll number that can be used to join the conference.
    *
    * @return string The tollNumber
    */
    public function getTollNumber()
    {
        if (array_key_exists("tollNumber", $this->_propDict)) {
            return $this->_propDict["tollNumber"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tollNumber
    * The toll number that can be used to join the conference.
    *
    * @param string $val The value of the tollNumber
    *
    * @return OnlineMeetingInfo
    */
    public function setTollNumber($val)
    {
        $this->_propDict["tollNumber"] = $val;
        return $this;
    }
}
