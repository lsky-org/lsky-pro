<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ProgramControlType File
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
* ProgramControlType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ProgramControlType extends Entity
{
    /**
    * Gets the controlTypeGroupId
    *
    * @return string The controlTypeGroupId
    */
    public function getControlTypeGroupId()
    {
        if (array_key_exists("controlTypeGroupId", $this->_propDict)) {
            return $this->_propDict["controlTypeGroupId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the controlTypeGroupId
    *
    * @param string $val The controlTypeGroupId
    *
    * @return ProgramControlType
    */
    public function setControlTypeGroupId($val)
    {
        $this->_propDict["controlTypeGroupId"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * The name of the program control type
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
    * The name of the program control type
    *
    * @param string $val The displayName
    *
    * @return ProgramControlType
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
}
