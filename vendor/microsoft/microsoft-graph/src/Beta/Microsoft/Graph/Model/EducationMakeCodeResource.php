<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EducationMakeCodeResource File
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
* EducationMakeCodeResource class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EducationMakeCodeResource extends EducationResource
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.educationMakeCodeResource");
    }

    /**
    * Gets the hostWebUrl
    * Host for the type of MakeCode resource (for example, arcade, microbit)
    *
    * @return string The hostWebUrl
    */
    public function getHostWebUrl()
    {
        if (array_key_exists("hostWebUrl", $this->_propDict)) {
            return $this->_propDict["hostWebUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the hostWebUrl
    * Host for the type of MakeCode resource (for example, arcade, microbit)
    *
    * @param string $val The value of the hostWebUrl
    *
    * @return EducationMakeCodeResource
    */
    public function setHostWebUrl($val)
    {
        $this->_propDict["hostWebUrl"] = $val;
        return $this;
    }
    /**
    * Gets the projectId
    * ID of the MakeCode project
    *
    * @return string The projectId
    */
    public function getProjectId()
    {
        if (array_key_exists("projectId", $this->_propDict)) {
            return $this->_propDict["projectId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the projectId
    * ID of the MakeCode project
    *
    * @param string $val The value of the projectId
    *
    * @return EducationMakeCodeResource
    */
    public function setProjectId($val)
    {
        $this->_propDict["projectId"] = $val;
        return $this;
    }
}
