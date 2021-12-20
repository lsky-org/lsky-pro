<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Ediscoveryroot File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Ediscovery\Model;

/**
* Ediscoveryroot class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Ediscoveryroot extends \Beta\Microsoft\Graph\Model\Entity
{

     /** 
     * Gets the cases
     *
     * @return array The cases
     */
    public function getCases()
    {
        if (array_key_exists("cases", $this->_propDict)) {
           return $this->_propDict["cases"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the cases
    *
    * @param GraphCase $val The cases
    *
    * @return Ediscoveryroot
    */
    public function setCases($val)
    {
		$this->_propDict["cases"] = $val;
        return $this;
    }
    
}
