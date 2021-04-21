<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RequiredResourceAccess File
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
* RequiredResourceAccess class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RequiredResourceAccess extends Entity
{

    /**
    * Gets the resourceAccess
    * The list of OAuth2.0 permission scopes and app roles that the application requires from the specified resource.
    *
    * @return ResourceAccess The resourceAccess
    */
    public function getResourceAccess()
    {
        if (array_key_exists("resourceAccess", $this->_propDict)) {
            if (is_a($this->_propDict["resourceAccess"], "\Microsoft\Graph\Model\ResourceAccess")) {
                return $this->_propDict["resourceAccess"];
            } else {
                $this->_propDict["resourceAccess"] = new ResourceAccess($this->_propDict["resourceAccess"]);
                return $this->_propDict["resourceAccess"];
            }
        }
        return null;
    }

    /**
    * Sets the resourceAccess
    * The list of OAuth2.0 permission scopes and app roles that the application requires from the specified resource.
    *
    * @param ResourceAccess $val The value to assign to the resourceAccess
    *
    * @return RequiredResourceAccess The RequiredResourceAccess
    */
    public function setResourceAccess($val)
    {
        $this->_propDict["resourceAccess"] = $val;
         return $this;
    }
    /**
    * Gets the resourceAppId
    * The unique identifier for the resource that the application requires access to.  This should be equal to the appId declared on the target resource application.
    *
    * @return string The resourceAppId
    */
    public function getResourceAppId()
    {
        if (array_key_exists("resourceAppId", $this->_propDict)) {
            return $this->_propDict["resourceAppId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the resourceAppId
    * The unique identifier for the resource that the application requires access to.  This should be equal to the appId declared on the target resource application.
    *
    * @param string $val The value of the resourceAppId
    *
    * @return RequiredResourceAccess
    */
    public function setResourceAppId($val)
    {
        $this->_propDict["resourceAppId"] = $val;
        return $this;
    }
}
