<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ContentProperties File
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
* ContentProperties class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ContentProperties extends Entity
{
    /**
    * Gets the extensions
    *
    * @return string The extensions
    */
    public function getExtensions()
    {
        if (array_key_exists("extensions", $this->_propDict)) {
            return $this->_propDict["extensions"];
        } else {
            return null;
        }
    }

    /**
    * Sets the extensions
    *
    * @param string $val The value of the extensions
    *
    * @return ContentProperties
    */
    public function setExtensions($val)
    {
        $this->_propDict["extensions"] = $val;
        return $this;
    }
    /**
    * Gets the lastModifiedBy
    *
    * @return string The lastModifiedBy
    */
    public function getLastModifiedBy()
    {
        if (array_key_exists("lastModifiedBy", $this->_propDict)) {
            return $this->_propDict["lastModifiedBy"];
        } else {
            return null;
        }
    }

    /**
    * Sets the lastModifiedBy
    *
    * @param string $val The value of the lastModifiedBy
    *
    * @return ContentProperties
    */
    public function setLastModifiedBy($val)
    {
        $this->_propDict["lastModifiedBy"] = $val;
        return $this;
    }

    /**
    * Gets the lastModifiedDateTime
    *
    * @return \DateTime The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedDateTime"], "\DateTime")) {
                return $this->_propDict["lastModifiedDateTime"];
            } else {
                $this->_propDict["lastModifiedDateTime"] = new \DateTime($this->_propDict["lastModifiedDateTime"]);
                return $this->_propDict["lastModifiedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastModifiedDateTime
    *
    * @param \DateTime $val The value to assign to the lastModifiedDateTime
    *
    * @return ContentProperties The ContentProperties
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the metadata
    *
    * @return ContentMetadata The metadata
    */
    public function getMetadata()
    {
        if (array_key_exists("metadata", $this->_propDict)) {
            if (is_a($this->_propDict["metadata"], "\Beta\Microsoft\Graph\Model\ContentMetadata")) {
                return $this->_propDict["metadata"];
            } else {
                $this->_propDict["metadata"] = new ContentMetadata($this->_propDict["metadata"]);
                return $this->_propDict["metadata"];
            }
        }
        return null;
    }

    /**
    * Sets the metadata
    *
    * @param ContentMetadata $val The value to assign to the metadata
    *
    * @return ContentProperties The ContentProperties
    */
    public function setMetadata($val)
    {
        $this->_propDict["metadata"] = $val;
         return $this;
    }
}
