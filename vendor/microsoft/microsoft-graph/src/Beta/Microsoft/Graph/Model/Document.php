<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Document File
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
* Document class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Document extends Entity
{

     /** 
     * Gets the comments
     *
     * @return array The comments
     */
    public function getComments()
    {
        if (array_key_exists("comments", $this->_propDict)) {
           return $this->_propDict["comments"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the comments
    *
    * @param DocumentComment $val The comments
    *
    * @return Document
    */
    public function setComments($val)
    {
		$this->_propDict["comments"] = $val;
        return $this;
    }
    
}
