<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserPurpose File
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
* UserPurpose class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserPurpose extends Entity
{

    /**
    * Gets the value
    * Represents the user's recipient or mailbox type in Exchange Online. Possible values are: unknown, user, linked, shared, room, equipment, and others. See the next section for more information.
    *
    * @return MailboxRecipientType The value
    */
    public function getValue()
    {
        if (array_key_exists("value", $this->_propDict)) {
            if (is_a($this->_propDict["value"], "\Beta\Microsoft\Graph\Model\MailboxRecipientType")) {
                return $this->_propDict["value"];
            } else {
                $this->_propDict["value"] = new MailboxRecipientType($this->_propDict["value"]);
                return $this->_propDict["value"];
            }
        }
        return null;
    }

    /**
    * Sets the value
    * Represents the user's recipient or mailbox type in Exchange Online. Possible values are: unknown, user, linked, shared, room, equipment, and others. See the next section for more information.
    *
    * @param MailboxRecipientType $val The value to assign to the value
    *
    * @return UserPurpose The UserPurpose
    */
    public function setValue($val)
    {
        $this->_propDict["value"] = $val;
         return $this;
    }
}
