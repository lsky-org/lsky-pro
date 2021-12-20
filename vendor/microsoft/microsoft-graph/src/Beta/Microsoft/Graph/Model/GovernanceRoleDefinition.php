<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* GovernanceRoleDefinition File
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
* GovernanceRoleDefinition class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class GovernanceRoleDefinition extends Entity
{
    /**
    * Gets the displayName
    * The display name of the role definition.
    *
    * @return string The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the displayName
    * The display name of the role definition.
    *
    * @param string $val The displayName
    *
    * @return GovernanceRoleDefinition
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the externalId
    * The external id of the role definition.
    *
    * @return string The externalId
    */
    public function getExternalId()
    {
        if (array_key_exists("externalId", $this->_propDict)) {
            return $this->_propDict["externalId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the externalId
    * The external id of the role definition.
    *
    * @param string $val The externalId
    *
    * @return GovernanceRoleDefinition
    */
    public function setExternalId($val)
    {
        $this->_propDict["externalId"] = $val;
        return $this;
    }
    
    /**
    * Gets the resourceId
    * Required. The id of the resource associated with the role definition.
    *
    * @return string The resourceId
    */
    public function getResourceId()
    {
        if (array_key_exists("resourceId", $this->_propDict)) {
            return $this->_propDict["resourceId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the resourceId
    * Required. The id of the resource associated with the role definition.
    *
    * @param string $val The resourceId
    *
    * @return GovernanceRoleDefinition
    */
    public function setResourceId($val)
    {
        $this->_propDict["resourceId"] = $val;
        return $this;
    }
    
    /**
    * Gets the templateId
    *
    * @return string The templateId
    */
    public function getTemplateId()
    {
        if (array_key_exists("templateId", $this->_propDict)) {
            return $this->_propDict["templateId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the templateId
    *
    * @param string $val The templateId
    *
    * @return GovernanceRoleDefinition
    */
    public function setTemplateId($val)
    {
        $this->_propDict["templateId"] = $val;
        return $this;
    }
    
    /**
    * Gets the resource
    * Read-only. The associated resource for the role definition.
    *
    * @return GovernanceResource The resource
    */
    public function getResource()
    {
        if (array_key_exists("resource", $this->_propDict)) {
            if (is_a($this->_propDict["resource"], "\Beta\Microsoft\Graph\Model\GovernanceResource")) {
                return $this->_propDict["resource"];
            } else {
                $this->_propDict["resource"] = new GovernanceResource($this->_propDict["resource"]);
                return $this->_propDict["resource"];
            }
        }
        return null;
    }
    
    /**
    * Sets the resource
    * Read-only. The associated resource for the role definition.
    *
    * @param GovernanceResource $val The resource
    *
    * @return GovernanceRoleDefinition
    */
    public function setResource($val)
    {
        $this->_propDict["resource"] = $val;
        return $this;
    }
    
    /**
    * Gets the roleSetting
    * The associated role setting for the role definition.
    *
    * @return GovernanceRoleSetting The roleSetting
    */
    public function getRoleSetting()
    {
        if (array_key_exists("roleSetting", $this->_propDict)) {
            if (is_a($this->_propDict["roleSetting"], "\Beta\Microsoft\Graph\Model\GovernanceRoleSetting")) {
                return $this->_propDict["roleSetting"];
            } else {
                $this->_propDict["roleSetting"] = new GovernanceRoleSetting($this->_propDict["roleSetting"]);
                return $this->_propDict["roleSetting"];
            }
        }
        return null;
    }
    
    /**
    * Sets the roleSetting
    * The associated role setting for the role definition.
    *
    * @param GovernanceRoleSetting $val The roleSetting
    *
    * @return GovernanceRoleDefinition
    */
    public function setRoleSetting($val)
    {
        $this->_propDict["roleSetting"] = $val;
        return $this;
    }
    
}
