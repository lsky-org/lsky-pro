<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* FolderView File
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
* FolderView class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class FolderView extends Entity
{
    /**
    * Gets the sortBy
    * The method by which the folder should be sorted.
    *
    * @return string The sortBy
    */
    public function getSortBy()
    {
        if (array_key_exists("sortBy", $this->_propDict)) {
            return $this->_propDict["sortBy"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sortBy
    * The method by which the folder should be sorted.
    *
    * @param string $val The value of the sortBy
    *
    * @return FolderView
    */
    public function setSortBy($val)
    {
        $this->_propDict["sortBy"] = $val;
        return $this;
    }
    /**
    * Gets the sortOrder
    * If true, indicates that items should be sorted in descending order. Otherwise, items should be sorted ascending.
    *
    * @return string The sortOrder
    */
    public function getSortOrder()
    {
        if (array_key_exists("sortOrder", $this->_propDict)) {
            return $this->_propDict["sortOrder"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sortOrder
    * If true, indicates that items should be sorted in descending order. Otherwise, items should be sorted ascending.
    *
    * @param string $val The value of the sortOrder
    *
    * @return FolderView
    */
    public function setSortOrder($val)
    {
        $this->_propDict["sortOrder"] = $val;
        return $this;
    }
    /**
    * Gets the viewType
    * The type of view that should be used to represent the folder.
    *
    * @return string The viewType
    */
    public function getViewType()
    {
        if (array_key_exists("viewType", $this->_propDict)) {
            return $this->_propDict["viewType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the viewType
    * The type of view that should be used to represent the folder.
    *
    * @param string $val The value of the viewType
    *
    * @return FolderView
    */
    public function setViewType($val)
    {
        $this->_propDict["viewType"] = $val;
        return $this;
    }
}
