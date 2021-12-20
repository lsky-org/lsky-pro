<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ProfilePhoto File
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
* ProfilePhoto class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ProfilePhoto extends Entity
{
    /**
    * Gets the height
    * The height of the photo. Read-only.
    *
    * @return int The height
    */
    public function getHeight()
    {
        if (array_key_exists("height", $this->_propDict)) {
            return $this->_propDict["height"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the height
    * The height of the photo. Read-only.
    *
    * @param int $val The height
    *
    * @return ProfilePhoto
    */
    public function setHeight($val)
    {
        $this->_propDict["height"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the width
    * The width of the photo. Read-only.
    *
    * @return int The width
    */
    public function getWidth()
    {
        if (array_key_exists("width", $this->_propDict)) {
            return $this->_propDict["width"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the width
    * The width of the photo. Read-only.
    *
    * @param int $val The width
    *
    * @return ProfilePhoto
    */
    public function setWidth($val)
    {
        $this->_propDict["width"] = intval($val);
        return $this;
    }
    
}
