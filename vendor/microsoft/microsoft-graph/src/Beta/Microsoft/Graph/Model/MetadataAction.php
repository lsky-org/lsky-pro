<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MetadataAction File
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
* MetadataAction class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MetadataAction extends InformationProtectionAction
{

    /**
    * Gets the metadataToAdd
    * A collection of key value pairs that should be added to the file.
    *
    * @return KeyValuePair The metadataToAdd
    */
    public function getMetadataToAdd()
    {
        if (array_key_exists("metadataToAdd", $this->_propDict)) {
            if (is_a($this->_propDict["metadataToAdd"], "\Beta\Microsoft\Graph\Model\KeyValuePair")) {
                return $this->_propDict["metadataToAdd"];
            } else {
                $this->_propDict["metadataToAdd"] = new KeyValuePair($this->_propDict["metadataToAdd"]);
                return $this->_propDict["metadataToAdd"];
            }
        }
        return null;
    }

    /**
    * Sets the metadataToAdd
    * A collection of key value pairs that should be added to the file.
    *
    * @param KeyValuePair $val The value to assign to the metadataToAdd
    *
    * @return MetadataAction The MetadataAction
    */
    public function setMetadataToAdd($val)
    {
        $this->_propDict["metadataToAdd"] = $val;
         return $this;
    }
    /**
    * Gets the metadataToRemove
    * A collection of strings that indicate which keys to remove from the file metadata.
    *
    * @return string The metadataToRemove
    */
    public function getMetadataToRemove()
    {
        if (array_key_exists("metadataToRemove", $this->_propDict)) {
            return $this->_propDict["metadataToRemove"];
        } else {
            return null;
        }
    }

    /**
    * Sets the metadataToRemove
    * A collection of strings that indicate which keys to remove from the file metadata.
    *
    * @param string $val The value of the metadataToRemove
    *
    * @return MetadataAction
    */
    public function setMetadataToRemove($val)
    {
        $this->_propDict["metadataToRemove"] = $val;
        return $this;
    }
}
