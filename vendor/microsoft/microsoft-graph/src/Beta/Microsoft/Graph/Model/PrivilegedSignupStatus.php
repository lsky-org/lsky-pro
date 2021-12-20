<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrivilegedSignupStatus File
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
* PrivilegedSignupStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PrivilegedSignupStatus extends Entity
{
    /**
    * Gets the isRegistered
    *
    * @return bool The isRegistered
    */
    public function getIsRegistered()
    {
        if (array_key_exists("isRegistered", $this->_propDict)) {
            return $this->_propDict["isRegistered"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isRegistered
    *
    * @param bool $val The isRegistered
    *
    * @return PrivilegedSignupStatus
    */
    public function setIsRegistered($val)
    {
        $this->_propDict["isRegistered"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the status
    *
    * @return SetupStatus The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\Model\SetupStatus")) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new SetupStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }
    
    /**
    * Sets the status
    *
    * @param SetupStatus $val The status
    *
    * @return PrivilegedSignupStatus
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }
    
}
