<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrintService File
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
* PrintService class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PrintService extends Entity
{

     /** 
     * Gets the endpoints
    * Endpoints that can be used to access the service. Read-only. Nullable.
     *
     * @return array The endpoints
     */
    public function getEndpoints()
    {
        if (array_key_exists("endpoints", $this->_propDict)) {
           return $this->_propDict["endpoints"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the endpoints
    * Endpoints that can be used to access the service. Read-only. Nullable.
    *
    * @param PrintServiceEndpoint $val The endpoints
    *
    * @return PrintService
    */
    public function setEndpoints($val)
    {
		$this->_propDict["endpoints"] = $val;
        return $this;
    }
    
}
