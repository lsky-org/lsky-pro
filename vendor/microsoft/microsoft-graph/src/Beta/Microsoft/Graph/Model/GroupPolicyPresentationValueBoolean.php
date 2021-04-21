<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* GroupPolicyPresentationValueBoolean File
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
* GroupPolicyPresentationValueBoolean class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class GroupPolicyPresentationValueBoolean extends GroupPolicyPresentationValue
{
    /**
    * Gets the value
    * An boolean value for the associated presentation.
    *
    * @return bool The value
    */
    public function getValue()
    {
        if (array_key_exists("value", $this->_propDict)) {
            return $this->_propDict["value"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the value
    * An boolean value for the associated presentation.
    *
    * @param bool $val The value
    *
    * @return GroupPolicyPresentationValueBoolean
    */
    public function setValue($val)
    {
        $this->_propDict["value"] = boolval($val);
        return $this;
    }
    
}
