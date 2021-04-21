<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OutlookUser File
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
* OutlookUser class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OutlookUser extends Entity
{

     /** 
     * Gets the masterCategories
    * A list of categories defined for the user.
     *
     * @return array The masterCategories
     */
    public function getMasterCategories()
    {
        if (array_key_exists("masterCategories", $this->_propDict)) {
           return $this->_propDict["masterCategories"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the masterCategories
    * A list of categories defined for the user.
    *
    * @param OutlookCategory $val The masterCategories
    *
    * @return OutlookUser
    */
    public function setMasterCategories($val)
    {
		$this->_propDict["masterCategories"] = $val;
        return $this;
    }
    
}
