<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* External File
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
* External class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class External extends Entity
{

     /** 
     * Gets the connections
     *
     * @return array The connections
     */
    public function getConnections()
    {
        if (array_key_exists("connections", $this->_propDict)) {
           return $this->_propDict["connections"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the connections
    *
    * @param ExternalConnection $val The connections
    *
    * @return External
    */
    public function setConnections($val)
    {
		$this->_propDict["connections"] = $val;
        return $this;
    }
    
}
