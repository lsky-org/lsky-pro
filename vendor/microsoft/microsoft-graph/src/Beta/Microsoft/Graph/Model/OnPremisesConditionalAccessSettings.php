<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OnPremisesConditionalAccessSettings File
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
* OnPremisesConditionalAccessSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OnPremisesConditionalAccessSettings extends Entity
{
    /**
    * Gets the enabled
    * Indicates if on premises conditional access is enabled for this organization
    *
    * @return bool The enabled
    */
    public function getEnabled()
    {
        if (array_key_exists("enabled", $this->_propDict)) {
            return $this->_propDict["enabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the enabled
    * Indicates if on premises conditional access is enabled for this organization
    *
    * @param bool $val The enabled
    *
    * @return OnPremisesConditionalAccessSettings
    */
    public function setEnabled($val)
    {
        $this->_propDict["enabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the excludedGroups
    * User groups that will be exempt by on premises conditional access. All users in these groups will be exempt from the conditional access policy.
    *
    * @return string The excludedGroups
    */
    public function getExcludedGroups()
    {
        if (array_key_exists("excludedGroups", $this->_propDict)) {
            return $this->_propDict["excludedGroups"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the excludedGroups
    * User groups that will be exempt by on premises conditional access. All users in these groups will be exempt from the conditional access policy.
    *
    * @param string $val The excludedGroups
    *
    * @return OnPremisesConditionalAccessSettings
    */
    public function setExcludedGroups($val)
    {
        $this->_propDict["excludedGroups"] = $val;
        return $this;
    }
    
    /**
    * Gets the includedGroups
    * User groups that will be targeted by on premises conditional access. All users in these groups will be required to have mobile device managed and compliant for mail access.
    *
    * @return string The includedGroups
    */
    public function getIncludedGroups()
    {
        if (array_key_exists("includedGroups", $this->_propDict)) {
            return $this->_propDict["includedGroups"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the includedGroups
    * User groups that will be targeted by on premises conditional access. All users in these groups will be required to have mobile device managed and compliant for mail access.
    *
    * @param string $val The includedGroups
    *
    * @return OnPremisesConditionalAccessSettings
    */
    public function setIncludedGroups($val)
    {
        $this->_propDict["includedGroups"] = $val;
        return $this;
    }
    
    /**
    * Gets the overrideDefaultRule
    * Override the default access rule when allowing a device to ensure access is granted.
    *
    * @return bool The overrideDefaultRule
    */
    public function getOverrideDefaultRule()
    {
        if (array_key_exists("overrideDefaultRule", $this->_propDict)) {
            return $this->_propDict["overrideDefaultRule"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the overrideDefaultRule
    * Override the default access rule when allowing a device to ensure access is granted.
    *
    * @param bool $val The overrideDefaultRule
    *
    * @return OnPremisesConditionalAccessSettings
    */
    public function setOverrideDefaultRule($val)
    {
        $this->_propDict["overrideDefaultRule"] = boolval($val);
        return $this;
    }
    
}
