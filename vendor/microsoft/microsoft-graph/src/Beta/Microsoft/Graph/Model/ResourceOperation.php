<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ResourceOperation File
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
* ResourceOperation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ResourceOperation extends Entity
{
    /**
    * Gets the actionName
    * Type of action this operation is going to perform. The actionName should be concise and limited to as few words as possible.
    *
    * @return string The actionName
    */
    public function getActionName()
    {
        if (array_key_exists("actionName", $this->_propDict)) {
            return $this->_propDict["actionName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the actionName
    * Type of action this operation is going to perform. The actionName should be concise and limited to as few words as possible.
    *
    * @param string $val The actionName
    *
    * @return ResourceOperation
    */
    public function setActionName($val)
    {
        $this->_propDict["actionName"] = $val;
        return $this;
    }
    
    /**
    * Gets the description
    * Description of the resource operation. The description is used in mouse-over text for the operation when shown in the Azure Portal.
    *
    * @return string The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the description
    * Description of the resource operation. The description is used in mouse-over text for the operation when shown in the Azure Portal.
    *
    * @param string $val The description
    *
    * @return ResourceOperation
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the enabledForScopeValidation
    * Determines whether the Permission is validated for Scopes defined per Role Assignment.
    *
    * @return bool The enabledForScopeValidation
    */
    public function getEnabledForScopeValidation()
    {
        if (array_key_exists("enabledForScopeValidation", $this->_propDict)) {
            return $this->_propDict["enabledForScopeValidation"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the enabledForScopeValidation
    * Determines whether the Permission is validated for Scopes defined per Role Assignment.
    *
    * @param bool $val The enabledForScopeValidation
    *
    * @return ResourceOperation
    */
    public function setEnabledForScopeValidation($val)
    {
        $this->_propDict["enabledForScopeValidation"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the resource
    * Resource category to which this Operation belongs.
    *
    * @return string The resource
    */
    public function getResource()
    {
        if (array_key_exists("resource", $this->_propDict)) {
            return $this->_propDict["resource"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the resource
    * Resource category to which this Operation belongs.
    *
    * @param string $val The resource
    *
    * @return ResourceOperation
    */
    public function setResource($val)
    {
        $this->_propDict["resource"] = $val;
        return $this;
    }
    
    /**
    * Gets the resourceName
    * Name of the Resource this operation is performed on.
    *
    * @return string The resourceName
    */
    public function getResourceName()
    {
        if (array_key_exists("resourceName", $this->_propDict)) {
            return $this->_propDict["resourceName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the resourceName
    * Name of the Resource this operation is performed on.
    *
    * @param string $val The resourceName
    *
    * @return ResourceOperation
    */
    public function setResourceName($val)
    {
        $this->_propDict["resourceName"] = $val;
        return $this;
    }
    
}
