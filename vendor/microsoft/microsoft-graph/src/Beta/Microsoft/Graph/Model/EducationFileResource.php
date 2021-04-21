<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EducationFileResource File
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
* EducationFileResource class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EducationFileResource extends EducationResource
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.educationFileResource");
    }

    /**
    * Gets the fileUrl
    * Location on disk of the file resource.
    *
    * @return string The fileUrl
    */
    public function getFileUrl()
    {
        if (array_key_exists("fileUrl", $this->_propDict)) {
            return $this->_propDict["fileUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the fileUrl
    * Location on disk of the file resource.
    *
    * @param string $val The value of the fileUrl
    *
    * @return EducationFileResource
    */
    public function setFileUrl($val)
    {
        $this->_propDict["fileUrl"] = $val;
        return $this;
    }
}
