<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PasswordSingleSignOnCredentialSet File
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
* PasswordSingleSignOnCredentialSet class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PasswordSingleSignOnCredentialSet extends Entity
{

    /**
    * Gets the credentials
    * A list of credential objects that define the complete sign in flow.
    *
    * @return Credential The credentials
    */
    public function getCredentials()
    {
        if (array_key_exists("credentials", $this->_propDict)) {
            if (is_a($this->_propDict["credentials"], "\Beta\Microsoft\Graph\Model\Credential")) {
                return $this->_propDict["credentials"];
            } else {
                $this->_propDict["credentials"] = new Credential($this->_propDict["credentials"]);
                return $this->_propDict["credentials"];
            }
        }
        return null;
    }

    /**
    * Sets the credentials
    * A list of credential objects that define the complete sign in flow.
    *
    * @param Credential $val The value to assign to the credentials
    *
    * @return PasswordSingleSignOnCredentialSet The PasswordSingleSignOnCredentialSet
    */
    public function setCredentials($val)
    {
        $this->_propDict["credentials"] = $val;
         return $this;
    }
    /**
    * Gets the id
    * The ID of the user or group this credential set belongs to.
    *
    * @return string The id
    */
    public function getId()
    {
        if (array_key_exists("id", $this->_propDict)) {
            return $this->_propDict["id"];
        } else {
            return null;
        }
    }

    /**
    * Sets the id
    * The ID of the user or group this credential set belongs to.
    *
    * @param string $val The value of the id
    *
    * @return PasswordSingleSignOnCredentialSet
    */
    public function setId($val)
    {
        $this->_propDict["id"] = $val;
        return $this;
    }
}
