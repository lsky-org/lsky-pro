<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* StsPolicy File
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
* StsPolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class StsPolicy extends PolicyBase
{
    /**
    * Gets the definition
    * A string collection containing a JSON string that defines the rules and settings for a policy. The syntax for the definition differs for each derived policy type. Required.
    *
    * @return string The definition
    */
    public function getDefinition()
    {
        if (array_key_exists("definition", $this->_propDict)) {
            return $this->_propDict["definition"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the definition
    * A string collection containing a JSON string that defines the rules and settings for a policy. The syntax for the definition differs for each derived policy type. Required.
    *
    * @param string $val The definition
    *
    * @return StsPolicy
    */
    public function setDefinition($val)
    {
        $this->_propDict["definition"] = $val;
        return $this;
    }
    
    /**
    * Gets the isOrganizationDefault
    * If set to true, activates this policy. There can be many policies for the same policy type, but only one can be activated as the organization default. Optional, default value is false.
    *
    * @return bool The isOrganizationDefault
    */
    public function getIsOrganizationDefault()
    {
        if (array_key_exists("isOrganizationDefault", $this->_propDict)) {
            return $this->_propDict["isOrganizationDefault"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isOrganizationDefault
    * If set to true, activates this policy. There can be many policies for the same policy type, but only one can be activated as the organization default. Optional, default value is false.
    *
    * @param bool $val The isOrganizationDefault
    *
    * @return StsPolicy
    */
    public function setIsOrganizationDefault($val)
    {
        $this->_propDict["isOrganizationDefault"] = boolval($val);
        return $this;
    }
    

     /** 
     * Gets the appliesTo
     *
     * @return array The appliesTo
     */
    public function getAppliesTo()
    {
        if (array_key_exists("appliesTo", $this->_propDict)) {
           return $this->_propDict["appliesTo"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the appliesTo
    *
    * @param DirectoryObject $val The appliesTo
    *
    * @return StsPolicy
    */
    public function setAppliesTo($val)
    {
		$this->_propDict["appliesTo"] = $val;
        return $this;
    }
    
}
