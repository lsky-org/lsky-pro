<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DocumentSet File
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
* DocumentSet class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DocumentSet extends Entity
{

    /**
    * Gets the allowedContentTypes
    * Content types allowed in document set.
    *
    * @return ContentTypeInfo The allowedContentTypes
    */
    public function getAllowedContentTypes()
    {
        if (array_key_exists("allowedContentTypes", $this->_propDict)) {
            if (is_a($this->_propDict["allowedContentTypes"], "\Beta\Microsoft\Graph\Model\ContentTypeInfo")) {
                return $this->_propDict["allowedContentTypes"];
            } else {
                $this->_propDict["allowedContentTypes"] = new ContentTypeInfo($this->_propDict["allowedContentTypes"]);
                return $this->_propDict["allowedContentTypes"];
            }
        }
        return null;
    }

    /**
    * Sets the allowedContentTypes
    * Content types allowed in document set.
    *
    * @param ContentTypeInfo $val The value to assign to the allowedContentTypes
    *
    * @return DocumentSet The DocumentSet
    */
    public function setAllowedContentTypes($val)
    {
        $this->_propDict["allowedContentTypes"] = $val;
         return $this;
    }

    /**
    * Gets the defaultContents
    * Default contents of document set.
    *
    * @return DocumentSetContent The defaultContents
    */
    public function getDefaultContents()
    {
        if (array_key_exists("defaultContents", $this->_propDict)) {
            if (is_a($this->_propDict["defaultContents"], "\Beta\Microsoft\Graph\Model\DocumentSetContent")) {
                return $this->_propDict["defaultContents"];
            } else {
                $this->_propDict["defaultContents"] = new DocumentSetContent($this->_propDict["defaultContents"]);
                return $this->_propDict["defaultContents"];
            }
        }
        return null;
    }

    /**
    * Sets the defaultContents
    * Default contents of document set.
    *
    * @param DocumentSetContent $val The value to assign to the defaultContents
    *
    * @return DocumentSet The DocumentSet
    */
    public function setDefaultContents($val)
    {
        $this->_propDict["defaultContents"] = $val;
         return $this;
    }
    /**
    * Gets the propagateWelcomePageChanges
    * Specifies whether to push welcome page changes to inherited content types.
    *
    * @return bool The propagateWelcomePageChanges
    */
    public function getPropagateWelcomePageChanges()
    {
        if (array_key_exists("propagateWelcomePageChanges", $this->_propDict)) {
            return $this->_propDict["propagateWelcomePageChanges"];
        } else {
            return null;
        }
    }

    /**
    * Sets the propagateWelcomePageChanges
    * Specifies whether to push welcome page changes to inherited content types.
    *
    * @param bool $val The value of the propagateWelcomePageChanges
    *
    * @return DocumentSet
    */
    public function setPropagateWelcomePageChanges($val)
    {
        $this->_propDict["propagateWelcomePageChanges"] = $val;
        return $this;
    }
    /**
    * Gets the shouldPrefixNameToFile
    * Add the name of the Document Set to each file name.
    *
    * @return bool The shouldPrefixNameToFile
    */
    public function getShouldPrefixNameToFile()
    {
        if (array_key_exists("shouldPrefixNameToFile", $this->_propDict)) {
            return $this->_propDict["shouldPrefixNameToFile"];
        } else {
            return null;
        }
    }

    /**
    * Sets the shouldPrefixNameToFile
    * Add the name of the Document Set to each file name.
    *
    * @param bool $val The value of the shouldPrefixNameToFile
    *
    * @return DocumentSet
    */
    public function setShouldPrefixNameToFile($val)
    {
        $this->_propDict["shouldPrefixNameToFile"] = $val;
        return $this;
    }
    /**
    * Gets the welcomePageUrl
    * Welcome page absolute URL.
    *
    * @return string The welcomePageUrl
    */
    public function getWelcomePageUrl()
    {
        if (array_key_exists("welcomePageUrl", $this->_propDict)) {
            return $this->_propDict["welcomePageUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the welcomePageUrl
    * Welcome page absolute URL.
    *
    * @param string $val The value of the welcomePageUrl
    *
    * @return DocumentSet
    */
    public function setWelcomePageUrl($val)
    {
        $this->_propDict["welcomePageUrl"] = $val;
        return $this;
    }

    /**
    * Gets the sharedColumns
    *
    * @return ColumnDefinition The sharedColumns
    */
    public function getSharedColumns()
    {
        if (array_key_exists("sharedColumns", $this->_propDict)) {
            if (is_a($this->_propDict["sharedColumns"], "\Beta\Microsoft\Graph\Model\ColumnDefinition")) {
                return $this->_propDict["sharedColumns"];
            } else {
                $this->_propDict["sharedColumns"] = new ColumnDefinition($this->_propDict["sharedColumns"]);
                return $this->_propDict["sharedColumns"];
            }
        }
        return null;
    }

    /**
    * Sets the sharedColumns
    *
    * @param ColumnDefinition $val The value to assign to the sharedColumns
    *
    * @return DocumentSet The DocumentSet
    */
    public function setSharedColumns($val)
    {
        $this->_propDict["sharedColumns"] = $val;
         return $this;
    }

    /**
    * Gets the welcomePageColumns
    *
    * @return ColumnDefinition The welcomePageColumns
    */
    public function getWelcomePageColumns()
    {
        if (array_key_exists("welcomePageColumns", $this->_propDict)) {
            if (is_a($this->_propDict["welcomePageColumns"], "\Beta\Microsoft\Graph\Model\ColumnDefinition")) {
                return $this->_propDict["welcomePageColumns"];
            } else {
                $this->_propDict["welcomePageColumns"] = new ColumnDefinition($this->_propDict["welcomePageColumns"]);
                return $this->_propDict["welcomePageColumns"];
            }
        }
        return null;
    }

    /**
    * Sets the welcomePageColumns
    *
    * @param ColumnDefinition $val The value to assign to the welcomePageColumns
    *
    * @return DocumentSet The DocumentSet
    */
    public function setWelcomePageColumns($val)
    {
        $this->_propDict["welcomePageColumns"] = $val;
         return $this;
    }
}
