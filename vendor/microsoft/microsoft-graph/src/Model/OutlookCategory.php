<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OutlookCategory File
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
* OutlookCategory class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OutlookCategory extends Entity
{
    /**
    * Gets the color
    * A pre-set color constant that characterizes a category, and that is mapped to one of 25 predefined colors. See the note below.
    *
    * @return CategoryColor The color
    */
    public function getColor()
    {
        if (array_key_exists("color", $this->_propDict)) {
            if (is_a($this->_propDict["color"], "\Microsoft\Graph\Model\CategoryColor")) {
                return $this->_propDict["color"];
            } else {
                $this->_propDict["color"] = new CategoryColor($this->_propDict["color"]);
                return $this->_propDict["color"];
            }
        }
        return null;
    }
    
    /**
    * Sets the color
    * A pre-set color constant that characterizes a category, and that is mapped to one of 25 predefined colors. See the note below.
    *
    * @param CategoryColor $val The color
    *
    * @return OutlookCategory
    */
    public function setColor($val)
    {
        $this->_propDict["color"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * A unique name that identifies a category in the user's mailbox. After a category is created, the name cannot be changed. Read-only.
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
    * A unique name that identifies a category in the user's mailbox. After a category is created, the name cannot be changed. Read-only.
    *
    * @param string $val The displayName
    *
    * @return OutlookCategory
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
}
