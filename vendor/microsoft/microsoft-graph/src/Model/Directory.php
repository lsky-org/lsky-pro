<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Directory File
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
* Directory class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Directory extends Entity
{

     /** 
     * Gets the administrativeUnits
     *
     * @return array The administrativeUnits
     */
    public function getAdministrativeUnits()
    {
        if (array_key_exists("administrativeUnits", $this->_propDict)) {
           return $this->_propDict["administrativeUnits"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the administrativeUnits
    *
    * @param AdministrativeUnit $val The administrativeUnits
    *
    * @return Directory
    */
    public function setAdministrativeUnits($val)
    {
		$this->_propDict["administrativeUnits"] = $val;
        return $this;
    }
    

     /** 
     * Gets the deletedItems
    * Recently deleted items. Read-only. Nullable.
     *
     * @return array The deletedItems
     */
    public function getDeletedItems()
    {
        if (array_key_exists("deletedItems", $this->_propDict)) {
           return $this->_propDict["deletedItems"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the deletedItems
    * Recently deleted items. Read-only. Nullable.
    *
    * @param DirectoryObject $val The deletedItems
    *
    * @return Directory
    */
    public function setDeletedItems($val)
    {
		$this->_propDict["deletedItems"] = $val;
        return $this;
    }
    
}
