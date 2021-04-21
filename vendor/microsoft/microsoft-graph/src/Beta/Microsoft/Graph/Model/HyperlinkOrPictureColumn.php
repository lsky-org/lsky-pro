<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* HyperlinkOrPictureColumn File
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
* HyperlinkOrPictureColumn class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class HyperlinkOrPictureColumn extends Entity
{
    /**
    * Gets the isPicture
    * Specifies whether the display format used for URL columns is an image or a hyperlink.
    *
    * @return bool The isPicture
    */
    public function getIsPicture()
    {
        if (array_key_exists("isPicture", $this->_propDict)) {
            return $this->_propDict["isPicture"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isPicture
    * Specifies whether the display format used for URL columns is an image or a hyperlink.
    *
    * @param bool $val The value of the isPicture
    *
    * @return HyperlinkOrPictureColumn
    */
    public function setIsPicture($val)
    {
        $this->_propDict["isPicture"] = $val;
        return $this;
    }
}
