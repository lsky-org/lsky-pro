<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ConfigurationManagerCollectionAssignmentTarget File
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
* ConfigurationManagerCollectionAssignmentTarget class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ConfigurationManagerCollectionAssignmentTarget extends DeviceAndAppManagementAssignmentTarget
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.configurationManagerCollectionAssignmentTarget");
    }

    /**
    * Gets the collectionId
    * The collection Id that is the target of the assignment.
    *
    * @return string The collectionId
    */
    public function getCollectionId()
    {
        if (array_key_exists("collectionId", $this->_propDict)) {
            return $this->_propDict["collectionId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the collectionId
    * The collection Id that is the target of the assignment.
    *
    * @param string $val The value of the collectionId
    *
    * @return ConfigurationManagerCollectionAssignmentTarget
    */
    public function setCollectionId($val)
    {
        $this->_propDict["collectionId"] = $val;
        return $this;
    }
}
