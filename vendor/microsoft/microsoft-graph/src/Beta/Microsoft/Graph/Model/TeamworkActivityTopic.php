<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamworkActivityTopic File
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
* TeamworkActivityTopic class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TeamworkActivityTopic extends Entity
{

    /**
    * Gets the source
    * Type of source. Possible values are: entityUrl, text. For supported Microsoft Graph URLs, use entityUrl. For custom text, use text.
    *
    * @return TeamworkActivityTopicSource The source
    */
    public function getSource()
    {
        if (array_key_exists("source", $this->_propDict)) {
            if (is_a($this->_propDict["source"], "\Beta\Microsoft\Graph\Model\TeamworkActivityTopicSource")) {
                return $this->_propDict["source"];
            } else {
                $this->_propDict["source"] = new TeamworkActivityTopicSource($this->_propDict["source"]);
                return $this->_propDict["source"];
            }
        }
        return null;
    }

    /**
    * Sets the source
    * Type of source. Possible values are: entityUrl, text. For supported Microsoft Graph URLs, use entityUrl. For custom text, use text.
    *
    * @param TeamworkActivityTopicSource $val The value to assign to the source
    *
    * @return TeamworkActivityTopic The TeamworkActivityTopic
    */
    public function setSource($val)
    {
        $this->_propDict["source"] = $val;
         return $this;
    }
    /**
    * Gets the value
    * The topic value. If the value of the source property is entityUrl, this must be a Microsoft Graph URL. If the vaule is text, this must be a plain text value.
    *
    * @return string The value
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
    * The topic value. If the value of the source property is entityUrl, this must be a Microsoft Graph URL. If the vaule is text, this must be a plain text value.
    *
    * @param string $val The value of the value
    *
    * @return TeamworkActivityTopic
    */
    public function setValue($val)
    {
        $this->_propDict["value"] = $val;
        return $this;
    }
    /**
    * Gets the webUrl
    * The link the user clicks when they select the notification. Optional when source is entityUrl; required when source is text.
    *
    * @return string The webUrl
    */
    public function getWebUrl()
    {
        if (array_key_exists("webUrl", $this->_propDict)) {
            return $this->_propDict["webUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the webUrl
    * The link the user clicks when they select the notification. Optional when source is entityUrl; required when source is text.
    *
    * @param string $val The value of the webUrl
    *
    * @return TeamworkActivityTopic
    */
    public function setWebUrl($val)
    {
        $this->_propDict["webUrl"] = $val;
        return $this;
    }
}
