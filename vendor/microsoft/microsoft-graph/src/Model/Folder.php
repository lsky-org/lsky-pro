<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Folder File
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
* Folder class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Folder extends Entity
{
    /**
    * Gets the childCount
    * Number of children contained immediately within this container.
    *
    * @return int The childCount
    */
    public function getChildCount()
    {
        if (array_key_exists("childCount", $this->_propDict)) {
            return $this->_propDict["childCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the childCount
    * Number of children contained immediately within this container.
    *
    * @param int $val The value of the childCount
    *
    * @return Folder
    */
    public function setChildCount($val)
    {
        $this->_propDict["childCount"] = $val;
        return $this;
    }

    /**
    * Gets the view
    * A collection of properties defining the recommended view for the folder.
    *
    * @return FolderView The view
    */
    public function getView()
    {
        if (array_key_exists("view", $this->_propDict)) {
            if (is_a($this->_propDict["view"], "\Microsoft\Graph\Model\FolderView")) {
                return $this->_propDict["view"];
            } else {
                $this->_propDict["view"] = new FolderView($this->_propDict["view"]);
                return $this->_propDict["view"];
            }
        }
        return null;
    }

    /**
    * Sets the view
    * A collection of properties defining the recommended view for the folder.
    *
    * @param FolderView $val The value to assign to the view
    *
    * @return Folder The Folder
    */
    public function setView($val)
    {
        $this->_propDict["view"] = $val;
         return $this;
    }
}
