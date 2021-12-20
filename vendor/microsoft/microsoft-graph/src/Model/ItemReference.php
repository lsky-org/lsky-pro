<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ItemReference File
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
* ItemReference class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ItemReference extends Entity
{
    /**
    * Gets the driveId
    * Unique identifier of the drive instance that contains the item. Read-only.
    *
    * @return string The driveId
    */
    public function getDriveId()
    {
        if (array_key_exists("driveId", $this->_propDict)) {
            return $this->_propDict["driveId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the driveId
    * Unique identifier of the drive instance that contains the item. Read-only.
    *
    * @param string $val The value of the driveId
    *
    * @return ItemReference
    */
    public function setDriveId($val)
    {
        $this->_propDict["driveId"] = $val;
        return $this;
    }
    /**
    * Gets the driveType
    * Identifies the type of drive. See [drive][] resource for values.
    *
    * @return string The driveType
    */
    public function getDriveType()
    {
        if (array_key_exists("driveType", $this->_propDict)) {
            return $this->_propDict["driveType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the driveType
    * Identifies the type of drive. See [drive][] resource for values.
    *
    * @param string $val The value of the driveType
    *
    * @return ItemReference
    */
    public function setDriveType($val)
    {
        $this->_propDict["driveType"] = $val;
        return $this;
    }
    /**
    * Gets the id
    * Unique identifier of the item in the drive. Read-only.
    *
    * @return string The id
    */
    public function getId()
    {
        if (array_key_exists("id", $this->_propDict)) {
            return $this->_propDict["id"];
        } else {
            return null;
        }
    }

    /**
    * Sets the id
    * Unique identifier of the item in the drive. Read-only.
    *
    * @param string $val The value of the id
    *
    * @return ItemReference
    */
    public function setId($val)
    {
        $this->_propDict["id"] = $val;
        return $this;
    }
    /**
    * Gets the name
    * The name of the item being referenced. Read-only.
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
    * The name of the item being referenced. Read-only.
    *
    * @param string $val The value of the name
    *
    * @return ItemReference
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    /**
    * Gets the path
    * Path that can be used to navigate to the item. Read-only.
    *
    * @return string The path
    */
    public function getPath()
    {
        if (array_key_exists("path", $this->_propDict)) {
            return $this->_propDict["path"];
        } else {
            return null;
        }
    }

    /**
    * Sets the path
    * Path that can be used to navigate to the item. Read-only.
    *
    * @param string $val The value of the path
    *
    * @return ItemReference
    */
    public function setPath($val)
    {
        $this->_propDict["path"] = $val;
        return $this;
    }
    /**
    * Gets the shareId
    * A unique identifier for a shared resource that can be accessed via the [Shares][] API.
    *
    * @return string The shareId
    */
    public function getShareId()
    {
        if (array_key_exists("shareId", $this->_propDict)) {
            return $this->_propDict["shareId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the shareId
    * A unique identifier for a shared resource that can be accessed via the [Shares][] API.
    *
    * @param string $val The value of the shareId
    *
    * @return ItemReference
    */
    public function setShareId($val)
    {
        $this->_propDict["shareId"] = $val;
        return $this;
    }

    /**
    * Gets the sharepointIds
    * Returns identifiers useful for SharePoint REST compatibility. Read-only.
    *
    * @return SharepointIds The sharepointIds
    */
    public function getSharepointIds()
    {
        if (array_key_exists("sharepointIds", $this->_propDict)) {
            if (is_a($this->_propDict["sharepointIds"], "\Microsoft\Graph\Model\SharepointIds")) {
                return $this->_propDict["sharepointIds"];
            } else {
                $this->_propDict["sharepointIds"] = new SharepointIds($this->_propDict["sharepointIds"]);
                return $this->_propDict["sharepointIds"];
            }
        }
        return null;
    }

    /**
    * Sets the sharepointIds
    * Returns identifiers useful for SharePoint REST compatibility. Read-only.
    *
    * @param SharepointIds $val The value to assign to the sharepointIds
    *
    * @return ItemReference The ItemReference
    */
    public function setSharepointIds($val)
    {
        $this->_propDict["sharepointIds"] = $val;
         return $this;
    }
    /**
    * Gets the siteId
    * For OneDrive for Business and SharePoint, this property represents the ID of the site that contains the parent document library of the driveItem resource. The value is the same as the id property of that [site][] resource. It is an opaque string that consists of three identifiers of the site. For OneDrive, this property is not populated.
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
    * For OneDrive for Business and SharePoint, this property represents the ID of the site that contains the parent document library of the driveItem resource. The value is the same as the id property of that [site][] resource. It is an opaque string that consists of three identifiers of the site. For OneDrive, this property is not populated.
    *
    * @param string $val The value of the siteId
    *
    * @return ItemReference
    */
    public function setSiteId($val)
    {
        $this->_propDict["siteId"] = $val;
        return $this;
    }
}
