<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SecurityResource File
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
* SecurityResource class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SecurityResource extends Entity
{
    /**
    * Gets the resource
    * Name of the resource that is related to current alert. Required.
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
    * Name of the resource that is related to current alert. Required.
    *
    * @param string $val The value of the resource
    *
    * @return SecurityResource
    */
    public function setResource($val)
    {
        $this->_propDict["resource"] = $val;
        return $this;
    }

    /**
    * Gets the resourceType
    * Represents type of security resources related to an alert. Possible values are: attacked, related.
    *
    * @return SecurityResourceType The resourceType
    */
    public function getResourceType()
    {
        if (array_key_exists("resourceType", $this->_propDict)) {
            if (is_a($this->_propDict["resourceType"], "\Beta\Microsoft\Graph\Model\SecurityResourceType")) {
                return $this->_propDict["resourceType"];
            } else {
                $this->_propDict["resourceType"] = new SecurityResourceType($this->_propDict["resourceType"]);
                return $this->_propDict["resourceType"];
            }
        }
        return null;
    }

    /**
    * Sets the resourceType
    * Represents type of security resources related to an alert. Possible values are: attacked, related.
    *
    * @param SecurityResourceType $val The value to assign to the resourceType
    *
    * @return SecurityResource The SecurityResource
    */
    public function setResourceType($val)
    {
        $this->_propDict["resourceType"] = $val;
         return $this;
    }
}
