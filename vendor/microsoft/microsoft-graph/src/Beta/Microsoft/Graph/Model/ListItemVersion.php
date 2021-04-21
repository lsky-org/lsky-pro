<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ListItemVersion File
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
* ListItemVersion class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ListItemVersion extends BaseItemVersion
{
    /**
    * Gets the fields
    * A collection of the fields and values for this version of the list item.
    *
    * @return FieldValueSet The fields
    */
    public function getFields()
    {
        if (array_key_exists("fields", $this->_propDict)) {
            if (is_a($this->_propDict["fields"], "\Beta\Microsoft\Graph\Model\FieldValueSet")) {
                return $this->_propDict["fields"];
            } else {
                $this->_propDict["fields"] = new FieldValueSet($this->_propDict["fields"]);
                return $this->_propDict["fields"];
            }
        }
        return null;
    }
    
    /**
    * Sets the fields
    * A collection of the fields and values for this version of the list item.
    *
    * @param FieldValueSet $val The fields
    *
    * @return ListItemVersion
    */
    public function setFields($val)
    {
        $this->_propDict["fields"] = $val;
        return $this;
    }
    
}
