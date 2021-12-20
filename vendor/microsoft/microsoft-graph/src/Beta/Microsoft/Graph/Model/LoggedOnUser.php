<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* LoggedOnUser File
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
* LoggedOnUser class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class LoggedOnUser extends Entity
{

    /**
    * Gets the lastLogOnDateTime
    * Date time when user logs on
    *
    * @return \DateTime The lastLogOnDateTime
    */
    public function getLastLogOnDateTime()
    {
        if (array_key_exists("lastLogOnDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastLogOnDateTime"], "\DateTime")) {
                return $this->_propDict["lastLogOnDateTime"];
            } else {
                $this->_propDict["lastLogOnDateTime"] = new \DateTime($this->_propDict["lastLogOnDateTime"]);
                return $this->_propDict["lastLogOnDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastLogOnDateTime
    * Date time when user logs on
    *
    * @param \DateTime $val The value to assign to the lastLogOnDateTime
    *
    * @return LoggedOnUser The LoggedOnUser
    */
    public function setLastLogOnDateTime($val)
    {
        $this->_propDict["lastLogOnDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the userId
    * User id
    *
    * @return string The userId
    */
    public function getUserId()
    {
        if (array_key_exists("userId", $this->_propDict)) {
            return $this->_propDict["userId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userId
    * User id
    *
    * @param string $val The value of the userId
    *
    * @return LoggedOnUser
    */
    public function setUserId($val)
    {
        $this->_propDict["userId"] = $val;
        return $this;
    }
}
