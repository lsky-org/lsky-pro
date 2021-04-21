<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AppListItem File
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
* AppListItem class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AppListItem extends Entity
{
    /**
    * Gets the appId
    * The application or bundle identifier of the application
    *
    * @return string The appId
    */
    public function getAppId()
    {
        if (array_key_exists("appId", $this->_propDict)) {
            return $this->_propDict["appId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the appId
    * The application or bundle identifier of the application
    *
    * @param string $val The value of the appId
    *
    * @return AppListItem
    */
    public function setAppId($val)
    {
        $this->_propDict["appId"] = $val;
        return $this;
    }
    /**
    * Gets the appStoreUrl
    * The Store URL of the application
    *
    * @return string The appStoreUrl
    */
    public function getAppStoreUrl()
    {
        if (array_key_exists("appStoreUrl", $this->_propDict)) {
            return $this->_propDict["appStoreUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the appStoreUrl
    * The Store URL of the application
    *
    * @param string $val The value of the appStoreUrl
    *
    * @return AppListItem
    */
    public function setAppStoreUrl($val)
    {
        $this->_propDict["appStoreUrl"] = $val;
        return $this;
    }
    /**
    * Gets the name
    * The application name
    *
    * @return string The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }

    /**
    * Sets the name
    * The application name
    *
    * @param string $val The value of the name
    *
    * @return AppListItem
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    /**
    * Gets the publisher
    * The publisher of the application
    *
    * @return string The publisher
    */
    public function getPublisher()
    {
        if (array_key_exists("publisher", $this->_propDict)) {
            return $this->_propDict["publisher"];
        } else {
            return null;
        }
    }

    /**
    * Sets the publisher
    * The publisher of the application
    *
    * @param string $val The value of the publisher
    *
    * @return AppListItem
    */
    public function setPublisher($val)
    {
        $this->_propDict["publisher"] = $val;
        return $this;
    }
}
