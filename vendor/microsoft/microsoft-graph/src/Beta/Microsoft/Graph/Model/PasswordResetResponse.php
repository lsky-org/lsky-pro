<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PasswordResetResponse File
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
* PasswordResetResponse class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PasswordResetResponse extends Entity
{
    /**
    * Gets the newPassword
    *
    * @return string The newPassword
    */
    public function getNewPassword()
    {
        if (array_key_exists("newPassword", $this->_propDict)) {
            return $this->_propDict["newPassword"];
        } else {
            return null;
        }
    }

    /**
    * Sets the newPassword
    *
    * @param string $val The value of the newPassword
    *
    * @return PasswordResetResponse
    */
    public function setNewPassword($val)
    {
        $this->_propDict["newPassword"] = $val;
        return $this;
    }
}
