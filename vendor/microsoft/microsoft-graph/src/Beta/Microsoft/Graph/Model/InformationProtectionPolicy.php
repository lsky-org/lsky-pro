<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* InformationProtectionPolicy File
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
* InformationProtectionPolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class InformationProtectionPolicy extends Entity
{

     /** 
     * Gets the labels
     *
     * @return array The labels
     */
    public function getLabels()
    {
        if (array_key_exists("labels", $this->_propDict)) {
           return $this->_propDict["labels"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the labels
    *
    * @param InformationProtectionLabel $val The labels
    *
    * @return InformationProtectionPolicy
    */
    public function setLabels($val)
    {
		$this->_propDict["labels"] = $val;
        return $this;
    }
    
}
