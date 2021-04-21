<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ExternalGroupMember File
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
* ExternalGroupMember class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ExternalGroupMember extends Entity
{
    /**
    * Gets the identitySource
    * The identity source that the member belongs to. Possible values are: azureActiveDirectory, external.
    *
    * @return IdentitySourceType The identitySource
    */
    public function getIdentitySource()
    {
        if (array_key_exists("identitySource", $this->_propDict)) {
            if (is_a($this->_propDict["identitySource"], "\Beta\Microsoft\Graph\Model\IdentitySourceType")) {
                return $this->_propDict["identitySource"];
            } else {
                $this->_propDict["identitySource"] = new IdentitySourceType($this->_propDict["identitySource"]);
                return $this->_propDict["identitySource"];
            }
        }
        return null;
    }
    
    /**
    * Sets the identitySource
    * The identity source that the member belongs to. Possible values are: azureActiveDirectory, external.
    *
    * @param IdentitySourceType $val The identitySource
    *
    * @return ExternalGroupMember
    */
    public function setIdentitySource($val)
    {
        $this->_propDict["identitySource"] = $val;
        return $this;
    }
    
    /**
    * Gets the type
    * The type of member added to the external group. Possible values are: user or group when the identitySource is azureActiveDirectory and just group when the identitySource is external.
    *
    * @return ExternalGroupMemberType The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            if (is_a($this->_propDict["type"], "\Beta\Microsoft\Graph\Model\ExternalGroupMemberType")) {
                return $this->_propDict["type"];
            } else {
                $this->_propDict["type"] = new ExternalGroupMemberType($this->_propDict["type"]);
                return $this->_propDict["type"];
            }
        }
        return null;
    }
    
    /**
    * Sets the type
    * The type of member added to the external group. Possible values are: user or group when the identitySource is azureActiveDirectory and just group when the identitySource is external.
    *
    * @param ExternalGroupMemberType $val The type
    *
    * @return ExternalGroupMember
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
        return $this;
    }
    
}
