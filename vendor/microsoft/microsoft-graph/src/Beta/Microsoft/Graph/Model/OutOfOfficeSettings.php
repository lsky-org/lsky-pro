<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OutOfOfficeSettings File
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
* OutOfOfficeSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OutOfOfficeSettings extends Entity
{
    /**
    * Gets the isOutOfOffice
    * True if either:It is currently in the out of office time window configured on the Outlook or Teams client.There is currently an event on the user's calendar that's marked as Show as Out of OfficeOtherwise, false.
    *
    * @return bool The isOutOfOffice
    */
    public function getIsOutOfOffice()
    {
        if (array_key_exists("isOutOfOffice", $this->_propDict)) {
            return $this->_propDict["isOutOfOffice"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isOutOfOffice
    * True if either:It is currently in the out of office time window configured on the Outlook or Teams client.There is currently an event on the user's calendar that's marked as Show as Out of OfficeOtherwise, false.
    *
    * @param bool $val The value of the isOutOfOffice
    *
    * @return OutOfOfficeSettings
    */
    public function setIsOutOfOffice($val)
    {
        $this->_propDict["isOutOfOffice"] = $val;
        return $this;
    }
    /**
    * Gets the message
    * The out of office message that the user configured on Outlook client (Automatic Replies (Out of Office)) or the Teams client (Schedule out of office).
    *
    * @return string The message
    */
    public function getMessage()
    {
        if (array_key_exists("message", $this->_propDict)) {
            return $this->_propDict["message"];
        } else {
            return null;
        }
    }

    /**
    * Sets the message
    * The out of office message that the user configured on Outlook client (Automatic Replies (Out of Office)) or the Teams client (Schedule out of office).
    *
    * @param string $val The value of the message
    *
    * @return OutOfOfficeSettings
    */
    public function setMessage($val)
    {
        $this->_propDict["message"] = $val;
        return $this;
    }
}
