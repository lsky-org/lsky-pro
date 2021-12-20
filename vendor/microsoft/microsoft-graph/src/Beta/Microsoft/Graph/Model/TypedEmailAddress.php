<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TypedEmailAddress File
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
* TypedEmailAddress class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TypedEmailAddress extends EmailAddress
{
    /**
    * Gets the otherLabel
    * To specify a custom type of email address, set type to other, and assign otherLabel to a custom string. For example, you may use a specific email address for your volunteer activities. Set type to other, and set otherLabel to a custom string such as Volunteer work.
    *
    * @return string The otherLabel
    */
    public function getOtherLabel()
    {
        if (array_key_exists("otherLabel", $this->_propDict)) {
            return $this->_propDict["otherLabel"];
        } else {
            return null;
        }
    }

    /**
    * Sets the otherLabel
    * To specify a custom type of email address, set type to other, and assign otherLabel to a custom string. For example, you may use a specific email address for your volunteer activities. Set type to other, and set otherLabel to a custom string such as Volunteer work.
    *
    * @param string $val The value of the otherLabel
    *
    * @return TypedEmailAddress
    */
    public function setOtherLabel($val)
    {
        $this->_propDict["otherLabel"] = $val;
        return $this;
    }

    /**
    * Gets the type
    * The type of email address. Possible values are: unknown, work, personal, main, other. The default value is unknown, which means address has not been set as a specific type.
    *
    * @return EmailType The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            if (is_a($this->_propDict["type"], "\Beta\Microsoft\Graph\Model\EmailType")) {
                return $this->_propDict["type"];
            } else {
                $this->_propDict["type"] = new EmailType($this->_propDict["type"]);
                return $this->_propDict["type"];
            }
        }
        return null;
    }

    /**
    * Sets the type
    * The type of email address. Possible values are: unknown, work, personal, main, other. The default value is unknown, which means address has not been set as a specific type.
    *
    * @param EmailType $val The value to assign to the type
    *
    * @return TypedEmailAddress The TypedEmailAddress
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
         return $this;
    }
}
