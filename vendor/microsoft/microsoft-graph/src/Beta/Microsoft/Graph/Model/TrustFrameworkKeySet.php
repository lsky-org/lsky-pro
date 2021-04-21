<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TrustFrameworkKeySet File
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
* TrustFrameworkKeySet class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TrustFrameworkKeySet extends Entity
{

     /** 
     * Gets the keys
    * A collection of the keys.
     *
     * @return array The keys
     */
    public function getKeys()
    {
        if (array_key_exists("keys", $this->_propDict)) {
           return $this->_propDict["keys"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the keys
    * A collection of the keys.
    *
    * @param TrustFrameworkKey $val The keys
    *
    * @return TrustFrameworkKeySet
    */
    public function setKeys($val)
    {
		$this->_propDict["keys"] = $val;
        return $this;
    }
    
}
