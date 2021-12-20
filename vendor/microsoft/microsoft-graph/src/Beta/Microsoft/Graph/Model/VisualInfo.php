<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* VisualInfo File
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
* VisualInfo class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class VisualInfo extends Entity
{

    /**
    * Gets the attribution
    * Optional. JSON object used to represent an icon which represents the application used to generate the activity
    *
    * @return ImageInfo The attribution
    */
    public function getAttribution()
    {
        if (array_key_exists("attribution", $this->_propDict)) {
            if (is_a($this->_propDict["attribution"], "\Beta\Microsoft\Graph\Model\ImageInfo")) {
                return $this->_propDict["attribution"];
            } else {
                $this->_propDict["attribution"] = new ImageInfo($this->_propDict["attribution"]);
                return $this->_propDict["attribution"];
            }
        }
        return null;
    }

    /**
    * Sets the attribution
    * Optional. JSON object used to represent an icon which represents the application used to generate the activity
    *
    * @param ImageInfo $val The value to assign to the attribution
    *
    * @return VisualInfo The VisualInfo
    */
    public function setAttribution($val)
    {
        $this->_propDict["attribution"] = $val;
         return $this;
    }
    /**
    * Gets the backgroundColor
    * Optional. Background color used to render the activity in the UI - brand color for the application source of the activity. Must be a valid hex color
    *
    * @return string The backgroundColor
    */
    public function getBackgroundColor()
    {
        if (array_key_exists("backgroundColor", $this->_propDict)) {
            return $this->_propDict["backgroundColor"];
        } else {
            return null;
        }
    }

    /**
    * Sets the backgroundColor
    * Optional. Background color used to render the activity in the UI - brand color for the application source of the activity. Must be a valid hex color
    *
    * @param string $val The value of the backgroundColor
    *
    * @return VisualInfo
    */
    public function setBackgroundColor($val)
    {
        $this->_propDict["backgroundColor"] = $val;
        return $this;
    }
    /**
    * Gets the content
    * Optional. Custom piece of data - JSON object used to provide custom content to render the activity in the Windows Shell UI
    *
    * @return string The content
    */
    public function getContent()
    {
        if (array_key_exists("content", $this->_propDict)) {
            return $this->_propDict["content"];
        } else {
            return null;
        }
    }

    /**
    * Sets the content
    * Optional. Custom piece of data - JSON object used to provide custom content to render the activity in the Windows Shell UI
    *
    * @param string $val The value of the content
    *
    * @return VisualInfo
    */
    public function setContent($val)
    {
        $this->_propDict["content"] = $val;
        return $this;
    }
    /**
    * Gets the description
    * Optional. Longer text description of the user's unique activity (example: document name, first sentence, and/or metadata)
    *
    * @return string The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }

    /**
    * Sets the description
    * Optional. Longer text description of the user's unique activity (example: document name, first sentence, and/or metadata)
    *
    * @param string $val The value of the description
    *
    * @return VisualInfo
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    /**
    * Gets the displayText
    * Required. Short text description of the user's unique activity (for example, document name in cases where an activity refers to document creation)
    *
    * @return string The displayText
    */
    public function getDisplayText()
    {
        if (array_key_exists("displayText", $this->_propDict)) {
            return $this->_propDict["displayText"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayText
    * Required. Short text description of the user's unique activity (for example, document name in cases where an activity refers to document creation)
    *
    * @param string $val The value of the displayText
    *
    * @return VisualInfo
    */
    public function setDisplayText($val)
    {
        $this->_propDict["displayText"] = $val;
        return $this;
    }
}
