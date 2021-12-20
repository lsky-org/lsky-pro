<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DlpNotification File
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
* DlpNotification class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DlpNotification extends Entity
{
    /**
    * Gets the author
    *
    * @return string The author
    */
    public function getAuthor()
    {
        if (array_key_exists("author", $this->_propDict)) {
            return $this->_propDict["author"];
        } else {
            return null;
        }
    }

    /**
    * Sets the author
    *
    * @param string $val The value of the author
    *
    * @return DlpNotification
    */
    public function setAuthor($val)
    {
        $this->_propDict["author"] = $val;
        return $this;
    }
}
