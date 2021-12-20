<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SharingDetail File
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
* SharingDetail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SharingDetail extends Entity
{

    /**
    * Gets the sharedBy
    * The user who shared the document.
    *
    * @return InsightIdentity The sharedBy
    */
    public function getSharedBy()
    {
        if (array_key_exists("sharedBy", $this->_propDict)) {
            if (is_a($this->_propDict["sharedBy"], "\Microsoft\Graph\Model\InsightIdentity")) {
                return $this->_propDict["sharedBy"];
            } else {
                $this->_propDict["sharedBy"] = new InsightIdentity($this->_propDict["sharedBy"]);
                return $this->_propDict["sharedBy"];
            }
        }
        return null;
    }

    /**
    * Sets the sharedBy
    * The user who shared the document.
    *
    * @param InsightIdentity $val The value to assign to the sharedBy
    *
    * @return SharingDetail The SharingDetail
    */
    public function setSharedBy($val)
    {
        $this->_propDict["sharedBy"] = $val;
         return $this;
    }

    /**
    * Gets the sharedDateTime
    * The date and time the file was last shared. The timestamp represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: 2014-01-01T00:00:00Z. Read-only.
    *
    * @return \DateTime The sharedDateTime
    */
    public function getSharedDateTime()
    {
        if (array_key_exists("sharedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["sharedDateTime"], "\DateTime")) {
                return $this->_propDict["sharedDateTime"];
            } else {
                $this->_propDict["sharedDateTime"] = new \DateTime($this->_propDict["sharedDateTime"]);
                return $this->_propDict["sharedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the sharedDateTime
    * The date and time the file was last shared. The timestamp represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: 2014-01-01T00:00:00Z. Read-only.
    *
    * @param \DateTime $val The value to assign to the sharedDateTime
    *
    * @return SharingDetail The SharingDetail
    */
    public function setSharedDateTime($val)
    {
        $this->_propDict["sharedDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the sharingReference
    *
    * @return ResourceReference The sharingReference
    */
    public function getSharingReference()
    {
        if (array_key_exists("sharingReference", $this->_propDict)) {
            if (is_a($this->_propDict["sharingReference"], "\Microsoft\Graph\Model\ResourceReference")) {
                return $this->_propDict["sharingReference"];
            } else {
                $this->_propDict["sharingReference"] = new ResourceReference($this->_propDict["sharingReference"]);
                return $this->_propDict["sharingReference"];
            }
        }
        return null;
    }

    /**
    * Sets the sharingReference
    *
    * @param ResourceReference $val The value to assign to the sharingReference
    *
    * @return SharingDetail The SharingDetail
    */
    public function setSharingReference($val)
    {
        $this->_propDict["sharingReference"] = $val;
         return $this;
    }
    /**
    * Gets the sharingSubject
    * The subject with which the document was shared.
    *
    * @return string The sharingSubject
    */
    public function getSharingSubject()
    {
        if (array_key_exists("sharingSubject", $this->_propDict)) {
            return $this->_propDict["sharingSubject"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sharingSubject
    * The subject with which the document was shared.
    *
    * @param string $val The value of the sharingSubject
    *
    * @return SharingDetail
    */
    public function setSharingSubject($val)
    {
        $this->_propDict["sharingSubject"] = $val;
        return $this;
    }
    /**
    * Gets the sharingType
    * Determines the way the document was shared, can be by a 'Link', 'Attachment', 'Group', 'Site'.
    *
    * @return string The sharingType
    */
    public function getSharingType()
    {
        if (array_key_exists("sharingType", $this->_propDict)) {
            return $this->_propDict["sharingType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sharingType
    * Determines the way the document was shared, can be by a 'Link', 'Attachment', 'Group', 'Site'.
    *
    * @param string $val The value of the sharingType
    *
    * @return SharingDetail
    */
    public function setSharingType($val)
    {
        $this->_propDict["sharingType"] = $val;
        return $this;
    }
}
