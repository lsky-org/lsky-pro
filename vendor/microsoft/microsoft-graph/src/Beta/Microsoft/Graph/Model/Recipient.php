<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Recipient File
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
* Recipient class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Recipient extends Entity
{

    /**
    * Gets the emailAddress
    * The recipient's email address.
    *
    * @return EmailAddress The emailAddress
    */
    public function getEmailAddress()
    {
        if (array_key_exists("emailAddress", $this->_propDict)) {
            if (is_a($this->_propDict["emailAddress"], "\Beta\Microsoft\Graph\Model\EmailAddress")) {
                return $this->_propDict["emailAddress"];
            } else {
                $this->_propDict["emailAddress"] = new EmailAddress($this->_propDict["emailAddress"]);
                return $this->_propDict["emailAddress"];
            }
        }
        return null;
    }

    /**
    * Sets the emailAddress
    * The recipient's email address.
    *
    * @param EmailAddress $val The value to assign to the emailAddress
    *
    * @return Recipient The Recipient
    */
    public function setEmailAddress($val)
    {
        $this->_propDict["emailAddress"] = $val;
         return $this;
    }
}
