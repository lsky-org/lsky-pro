<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EducationOneNoteResource File
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
* EducationOneNoteResource class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EducationOneNoteResource extends EducationResource
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.educationOneNoteResource");
    }

    /**
    * Gets the pageUrl
    * The Microsoft Graph URL to the page in OneNote.
    *
    * @return string The pageUrl
    */
    public function getPageUrl()
    {
        if (array_key_exists("pageUrl", $this->_propDict)) {
            return $this->_propDict["pageUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the pageUrl
    * The Microsoft Graph URL to the page in OneNote.
    *
    * @param string $val The value of the pageUrl
    *
    * @return EducationOneNoteResource
    */
    public function setPageUrl($val)
    {
        $this->_propDict["pageUrl"] = $val;
        return $this;
    }
    /**
    * Gets the sectionName
    * Section name that distributions should be copied into or were copied into.
    *
    * @return string The sectionName
    */
    public function getSectionName()
    {
        if (array_key_exists("sectionName", $this->_propDict)) {
            return $this->_propDict["sectionName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sectionName
    * Section name that distributions should be copied into or were copied into.
    *
    * @param string $val The value of the sectionName
    *
    * @return EducationOneNoteResource
    */
    public function setSectionName($val)
    {
        $this->_propDict["sectionName"] = $val;
        return $this;
    }
}
