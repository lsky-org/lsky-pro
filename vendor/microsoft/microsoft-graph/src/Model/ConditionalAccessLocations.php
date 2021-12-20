<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ConditionalAccessLocations File
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
* ConditionalAccessLocations class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ConditionalAccessLocations extends Entity
{
    /**
    * Gets the excludeLocations
    * Location IDs excluded from scope of policy.
    *
    * @return string The excludeLocations
    */
    public function getExcludeLocations()
    {
        if (array_key_exists("excludeLocations", $this->_propDict)) {
            return $this->_propDict["excludeLocations"];
        } else {
            return null;
        }
    }

    /**
    * Sets the excludeLocations
    * Location IDs excluded from scope of policy.
    *
    * @param string $val The value of the excludeLocations
    *
    * @return ConditionalAccessLocations
    */
    public function setExcludeLocations($val)
    {
        $this->_propDict["excludeLocations"] = $val;
        return $this;
    }
    /**
    * Gets the includeLocations
    * Location IDs in scope of policy unless explicitly excluded, All, or AllTrusted.
    *
    * @return string The includeLocations
    */
    public function getIncludeLocations()
    {
        if (array_key_exists("includeLocations", $this->_propDict)) {
            return $this->_propDict["includeLocations"];
        } else {
            return null;
        }
    }

    /**
    * Sets the includeLocations
    * Location IDs in scope of policy unless explicitly excluded, All, or AllTrusted.
    *
    * @param string $val The value of the includeLocations
    *
    * @return ConditionalAccessLocations
    */
    public function setIncludeLocations($val)
    {
        $this->_propDict["includeLocations"] = $val;
        return $this;
    }
}
