<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ListInfo File
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
* ListInfo class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ListInfo extends Entity
{
    /**
    * Gets the contentTypesEnabled
    * If true, indicates that content types are enabled for this list.
    *
    * @return bool The contentTypesEnabled
    */
    public function getContentTypesEnabled()
    {
        if (array_key_exists("contentTypesEnabled", $this->_propDict)) {
            return $this->_propDict["contentTypesEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the contentTypesEnabled
    * If true, indicates that content types are enabled for this list.
    *
    * @param bool $val The value of the contentTypesEnabled
    *
    * @return ListInfo
    */
    public function setContentTypesEnabled($val)
    {
        $this->_propDict["contentTypesEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the hidden
    * If true, indicates that the list is not normally visible in the SharePoint user experience.
    *
    * @return bool The hidden
    */
    public function getHidden()
    {
        if (array_key_exists("hidden", $this->_propDict)) {
            return $this->_propDict["hidden"];
        } else {
            return null;
        }
    }

    /**
    * Sets the hidden
    * If true, indicates that the list is not normally visible in the SharePoint user experience.
    *
    * @param bool $val The value of the hidden
    *
    * @return ListInfo
    */
    public function setHidden($val)
    {
        $this->_propDict["hidden"] = $val;
        return $this;
    }
    /**
    * Gets the template
    * An enumerated value that represents the base list template used in creating the list. Possible values include documentLibrary, genericList, task, survey, announcements, contacts, and more.
    *
    * @return string The template
    */
    public function getTemplate()
    {
        if (array_key_exists("template", $this->_propDict)) {
            return $this->_propDict["template"];
        } else {
            return null;
        }
    }

    /**
    * Sets the template
    * An enumerated value that represents the base list template used in creating the list. Possible values include documentLibrary, genericList, task, survey, announcements, contacts, and more.
    *
    * @param string $val The value of the template
    *
    * @return ListInfo
    */
    public function setTemplate($val)
    {
        $this->_propDict["template"] = $val;
        return $this;
    }
}
