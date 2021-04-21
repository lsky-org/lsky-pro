<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* VisualProperties File
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
* VisualProperties class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class VisualProperties extends Entity
{
    /**
    * Gets the body
    * The body of a visual user notification. Body is optional.
    *
    * @return string The body
    */
    public function getBody()
    {
        if (array_key_exists("body", $this->_propDict)) {
            return $this->_propDict["body"];
        } else {
            return null;
        }
    }

    /**
    * Sets the body
    * The body of a visual user notification. Body is optional.
    *
    * @param string $val The value of the body
    *
    * @return VisualProperties
    */
    public function setBody($val)
    {
        $this->_propDict["body"] = $val;
        return $this;
    }
    /**
    * Gets the title
    * The title of a visual user notification. This field is required for visual notification payloads.
    *
    * @return string The title
    */
    public function getTitle()
    {
        if (array_key_exists("title", $this->_propDict)) {
            return $this->_propDict["title"];
        } else {
            return null;
        }
    }

    /**
    * Sets the title
    * The title of a visual user notification. This field is required for visual notification payloads.
    *
    * @param string $val The value of the title
    *
    * @return VisualProperties
    */
    public function setTitle($val)
    {
        $this->_propDict["title"] = $val;
        return $this;
    }
}
