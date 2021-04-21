<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* HasPayloadLinkResultItem File
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
* HasPayloadLinkResultItem class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class HasPayloadLinkResultItem extends Entity
{
    /**
    * Gets the error
    * Exception information indicates if check for this item was successful or not.Empty string for no error.
    *
    * @return string The error
    */
    public function getError()
    {
        if (array_key_exists("error", $this->_propDict)) {
            return $this->_propDict["error"];
        } else {
            return null;
        }
    }

    /**
    * Sets the error
    * Exception information indicates if check for this item was successful or not.Empty string for no error.
    *
    * @param string $val The value of the error
    *
    * @return HasPayloadLinkResultItem
    */
    public function setError($val)
    {
        $this->_propDict["error"] = $val;
        return $this;
    }
    /**
    * Gets the hasLink
    * Indicate whether a payload has any link or not.
    *
    * @return bool The hasLink
    */
    public function getHasLink()
    {
        if (array_key_exists("hasLink", $this->_propDict)) {
            return $this->_propDict["hasLink"];
        } else {
            return null;
        }
    }

    /**
    * Sets the hasLink
    * Indicate whether a payload has any link or not.
    *
    * @param bool $val The value of the hasLink
    *
    * @return HasPayloadLinkResultItem
    */
    public function setHasLink($val)
    {
        $this->_propDict["hasLink"] = $val;
        return $this;
    }
    /**
    * Gets the payloadId
    * Key of the Payload, In the format of Guid.
    *
    * @return string The payloadId
    */
    public function getPayloadId()
    {
        if (array_key_exists("payloadId", $this->_propDict)) {
            return $this->_propDict["payloadId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the payloadId
    * Key of the Payload, In the format of Guid.
    *
    * @param string $val The value of the payloadId
    *
    * @return HasPayloadLinkResultItem
    */
    public function setPayloadId($val)
    {
        $this->_propDict["payloadId"] = $val;
        return $this;
    }

    /**
    * Gets the sources
    * The reason where the link comes from.
    *
    * @return DeviceAndAppManagementAssignmentSource The sources
    */
    public function getSources()
    {
        if (array_key_exists("sources", $this->_propDict)) {
            if (is_a($this->_propDict["sources"], "\Beta\Microsoft\Graph\Model\DeviceAndAppManagementAssignmentSource")) {
                return $this->_propDict["sources"];
            } else {
                $this->_propDict["sources"] = new DeviceAndAppManagementAssignmentSource($this->_propDict["sources"]);
                return $this->_propDict["sources"];
            }
        }
        return null;
    }

    /**
    * Sets the sources
    * The reason where the link comes from.
    *
    * @param DeviceAndAppManagementAssignmentSource $val The value to assign to the sources
    *
    * @return HasPayloadLinkResultItem The HasPayloadLinkResultItem
    */
    public function setSources($val)
    {
        $this->_propDict["sources"] = $val;
         return $this;
    }
}
