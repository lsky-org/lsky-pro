<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamsTabConfiguration File
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
* TeamsTabConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TeamsTabConfiguration extends Entity
{
    /**
    * Gets the contentUrl
    * Url used for rendering tab contents in Teams. Required.
    *
    * @return string The contentUrl
    */
    public function getContentUrl()
    {
        if (array_key_exists("contentUrl", $this->_propDict)) {
            return $this->_propDict["contentUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the contentUrl
    * Url used for rendering tab contents in Teams. Required.
    *
    * @param string $val The value of the contentUrl
    *
    * @return TeamsTabConfiguration
    */
    public function setContentUrl($val)
    {
        $this->_propDict["contentUrl"] = $val;
        return $this;
    }
    /**
    * Gets the entityId
    * Identifier for the entity hosted by the tab provider.
    *
    * @return string The entityId
    */
    public function getEntityId()
    {
        if (array_key_exists("entityId", $this->_propDict)) {
            return $this->_propDict["entityId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the entityId
    * Identifier for the entity hosted by the tab provider.
    *
    * @param string $val The value of the entityId
    *
    * @return TeamsTabConfiguration
    */
    public function setEntityId($val)
    {
        $this->_propDict["entityId"] = $val;
        return $this;
    }
    /**
    * Gets the removeUrl
    * Url called by Teams client when a Tab is removed using the Teams Client.
    *
    * @return string The removeUrl
    */
    public function getRemoveUrl()
    {
        if (array_key_exists("removeUrl", $this->_propDict)) {
            return $this->_propDict["removeUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the removeUrl
    * Url called by Teams client when a Tab is removed using the Teams Client.
    *
    * @param string $val The value of the removeUrl
    *
    * @return TeamsTabConfiguration
    */
    public function setRemoveUrl($val)
    {
        $this->_propDict["removeUrl"] = $val;
        return $this;
    }
    /**
    * Gets the websiteUrl
    * Url for showing tab contents outside of Teams.
    *
    * @return string The websiteUrl
    */
    public function getWebsiteUrl()
    {
        if (array_key_exists("websiteUrl", $this->_propDict)) {
            return $this->_propDict["websiteUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the websiteUrl
    * Url for showing tab contents outside of Teams.
    *
    * @param string $val The value of the websiteUrl
    *
    * @return TeamsTabConfiguration
    */
    public function setWebsiteUrl($val)
    {
        $this->_propDict["websiteUrl"] = $val;
        return $this;
    }
}
