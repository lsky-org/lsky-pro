<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OnenoteEntityBaseModel File
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
* OnenoteEntityBaseModel class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OnenoteEntityBaseModel extends Entity
{
    /**
    * Gets the self
    * The endpoint where you can get details about the page. Read-only.
    *
    * @return string The self
    */
    public function getSelf()
    {
        if (array_key_exists("self", $this->_propDict)) {
            return $this->_propDict["self"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the self
    * The endpoint where you can get details about the page. Read-only.
    *
    * @param string $val The self
    *
    * @return OnenoteEntityBaseModel
    */
    public function setSelf($val)
    {
        $this->_propDict["self"] = $val;
        return $this;
    }
    
}
