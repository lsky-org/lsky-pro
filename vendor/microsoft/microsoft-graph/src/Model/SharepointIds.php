<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SharepointIds File
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
* SharepointIds class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SharepointIds extends Entity
{
    /**
    * Gets the listId
    * The unique identifier (guid) for the item's list in SharePoint.
    *
    * @return string The listId
    */
    public function getListId()
    {
        if (array_key_exists("listId", $this->_propDict)) {
            return $this->_propDict["listId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the listId
    * The unique identifier (guid) for the item's list in SharePoint.
    *
    * @param string $val The value of the listId
    *
    * @return SharepointIds
    */
    public function setListId($val)
    {
        $this->_propDict["listId"] = $val;
        return $this;
    }
    /**
    * Gets the listItemId
    * An integer identifier for the item within the containing list.
    *
    * @return string The listItemId
    */
    public function getListItemId()
    {
        if (array_key_exists("listItemId", $this->_propDict)) {
            return $this->_propDict["listItemId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the listItemId
    * An integer identifier for the item within the containing list.
    *
    * @param string $val The value of the listItemId
    *
    * @return SharepointIds
    */
    public function setListItemId($val)
    {
        $this->_propDict["listItemId"] = $val;
        return $this;
    }
    /**
    * Gets the listItemUniqueId
    * The unique identifier (guid) for the item within OneDrive for Business or a SharePoint site.
    *
    * @return string The listItemUniqueId
    */
    public function getListItemUniqueId()
    {
        if (array_key_exists("listItemUniqueId", $this->_propDict)) {
            return $this->_propDict["listItemUniqueId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the listItemUniqueId
    * The unique identifier (guid) for the item within OneDrive for Business or a SharePoint site.
    *
    * @param string $val The value of the listItemUniqueId
    *
    * @return SharepointIds
    */
    public function setListItemUniqueId($val)
    {
        $this->_propDict["listItemUniqueId"] = $val;
        return $this;
    }
    /**
    * Gets the siteId
    * The unique identifier (guid) for the item's site collection (SPSite).
    *
    * @return string The siteId
    */
    public function getSiteId()
    {
        if (array_key_exists("siteId", $this->_propDict)) {
            return $this->_propDict["siteId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the siteId
    * The unique identifier (guid) for the item's site collection (SPSite).
    *
    * @param string $val The value of the siteId
    *
    * @return SharepointIds
    */
    public function setSiteId($val)
    {
        $this->_propDict["siteId"] = $val;
        return $this;
    }
    /**
    * Gets the siteUrl
    * The SharePoint URL for the site that contains the item.
    *
    * @return string The siteUrl
    */
    public function getSiteUrl()
    {
        if (array_key_exists("siteUrl", $this->_propDict)) {
            return $this->_propDict["siteUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the siteUrl
    * The SharePoint URL for the site that contains the item.
    *
    * @param string $val The value of the siteUrl
    *
    * @return SharepointIds
    */
    public function setSiteUrl($val)
    {
        $this->_propDict["siteUrl"] = $val;
        return $this;
    }
    /**
    * Gets the tenantId
    * The unique identifier (guid) for the tenancy.
    *
    * @return string The tenantId
    */
    public function getTenantId()
    {
        if (array_key_exists("tenantId", $this->_propDict)) {
            return $this->_propDict["tenantId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tenantId
    * The unique identifier (guid) for the tenancy.
    *
    * @param string $val The value of the tenantId
    *
    * @return SharepointIds
    */
    public function setTenantId($val)
    {
        $this->_propDict["tenantId"] = $val;
        return $this;
    }
    /**
    * Gets the webId
    * The unique identifier (guid) for the item's site (SPWeb).
    *
    * @return string The webId
    */
    public function getWebId()
    {
        if (array_key_exists("webId", $this->_propDict)) {
            return $this->_propDict["webId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the webId
    * The unique identifier (guid) for the item's site (SPWeb).
    *
    * @param string $val The value of the webId
    *
    * @return SharepointIds
    */
    public function setWebId($val)
    {
        $this->_propDict["webId"] = $val;
        return $this;
    }
}
