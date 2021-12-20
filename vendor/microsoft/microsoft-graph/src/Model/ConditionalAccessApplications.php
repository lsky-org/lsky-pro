<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ConditionalAccessApplications File
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
* ConditionalAccessApplications class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ConditionalAccessApplications extends Entity
{
    /**
    * Gets the excludeApplications
    * The list of application IDs explicitly excluded from the policy.
    *
    * @return string The excludeApplications
    */
    public function getExcludeApplications()
    {
        if (array_key_exists("excludeApplications", $this->_propDict)) {
            return $this->_propDict["excludeApplications"];
        } else {
            return null;
        }
    }

    /**
    * Sets the excludeApplications
    * The list of application IDs explicitly excluded from the policy.
    *
    * @param string $val The value of the excludeApplications
    *
    * @return ConditionalAccessApplications
    */
    public function setExcludeApplications($val)
    {
        $this->_propDict["excludeApplications"] = $val;
        return $this;
    }
    /**
    * Gets the includeApplications
    * The list of application IDs the policy applies to, unless explicitly excluded (in excludeApplications). Can also be set to All.
    *
    * @return string The includeApplications
    */
    public function getIncludeApplications()
    {
        if (array_key_exists("includeApplications", $this->_propDict)) {
            return $this->_propDict["includeApplications"];
        } else {
            return null;
        }
    }

    /**
    * Sets the includeApplications
    * The list of application IDs the policy applies to, unless explicitly excluded (in excludeApplications). Can also be set to All.
    *
    * @param string $val The value of the includeApplications
    *
    * @return ConditionalAccessApplications
    */
    public function setIncludeApplications($val)
    {
        $this->_propDict["includeApplications"] = $val;
        return $this;
    }
    /**
    * Gets the includeUserActions
    * User actions to include. Supported values are urn:user:registersecurityinfo and urn:user:registerdevice
    *
    * @return string The includeUserActions
    */
    public function getIncludeUserActions()
    {
        if (array_key_exists("includeUserActions", $this->_propDict)) {
            return $this->_propDict["includeUserActions"];
        } else {
            return null;
        }
    }

    /**
    * Sets the includeUserActions
    * User actions to include. Supported values are urn:user:registersecurityinfo and urn:user:registerdevice
    *
    * @param string $val The value of the includeUserActions
    *
    * @return ConditionalAccessApplications
    */
    public function setIncludeUserActions($val)
    {
        $this->_propDict["includeUserActions"] = $val;
        return $this;
    }
}
