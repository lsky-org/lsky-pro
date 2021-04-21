<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Album File
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
* Album class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Album extends Entity
{
    /**
    * Gets the coverImageItemId
    * Unique identifier of the [driveItem][] that is the cover of the album.
    *
    * @return string The coverImageItemId
    */
    public function getCoverImageItemId()
    {
        if (array_key_exists("coverImageItemId", $this->_propDict)) {
            return $this->_propDict["coverImageItemId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the coverImageItemId
    * Unique identifier of the [driveItem][] that is the cover of the album.
    *
    * @param string $val The value of the coverImageItemId
    *
    * @return Album
    */
    public function setCoverImageItemId($val)
    {
        $this->_propDict["coverImageItemId"] = $val;
        return $this;
    }
}
