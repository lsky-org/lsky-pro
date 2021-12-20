<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ResourceAction File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;
/**
* ResourceAction class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ResourceAction extends Entity
{
    /**
    * Gets the allowedResourceActions
    * Allowed Actions
    *
    * @return string The allowedResourceActions
    */
    public function getAllowedResourceActions()
    {
        if (array_key_exists("allowedResourceActions", $this->_propDict)) {
            return $this->_propDict["allowedResourceActions"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowedResourceActions
    * Allowed Actions
    *
    * @param string $val The value of the allowedResourceActions
    *
    * @return ResourceAction
    */
    public function setAllowedResourceActions($val)
    {
        $this->_propDict["allowedResourceActions"] = $val;
        return $this;
    }
    /**
    * Gets the notAllowedResourceActions
    * Not Allowed Actions.
    *
    * @return string The notAllowedResourceActions
    */
    public function getNotAllowedResourceActions()
    {
        if (array_key_exists("notAllowedResourceActions", $this->_propDict)) {
            return $this->_propDict["notAllowedResourceActions"];
        } else {
            return null;
        }
    }

    /**
    * Sets the notAllowedResourceActions
    * Not Allowed Actions.
    *
    * @param string $val The value of the notAllowedResourceActions
    *
    * @return ResourceAction
    */
    public function setNotAllowedResourceActions($val)
    {
        $this->_propDict["notAllowedResourceActions"] = $val;
        return $this;
    }
}
