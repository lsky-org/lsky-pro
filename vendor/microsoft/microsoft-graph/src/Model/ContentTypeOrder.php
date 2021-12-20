<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ContentTypeOrder File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;
/**
* ContentTypeOrder class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ContentTypeOrder extends Entity
{
    /**
    * Gets the default
    * Whether this is the default Content Type
    *
    * @return bool The default
    */
    public function getDefault()
    {
        if (array_key_exists("default", $this->_propDict)) {
            return $this->_propDict["default"];
        } else {
            return null;
        }
    }

    /**
    * Sets the default
    * Whether this is the default Content Type
    *
    * @param bool $val The value of the default
    *
    * @return ContentTypeOrder
    */
    public function setDefault($val)
    {
        $this->_propDict["default"] = $val;
        return $this;
    }
    /**
    * Gets the position
    * Specifies the position in which the Content Type appears in the selection UI.
    *
    * @return int The position
    */
    public function getPosition()
    {
        if (array_key_exists("position", $this->_propDict)) {
            return $this->_propDict["position"];
        } else {
            return null;
        }
    }

    /**
    * Sets the position
    * Specifies the position in which the Content Type appears in the selection UI.
    *
    * @param int $val The value of the position
    *
    * @return ContentTypeOrder
    */
    public function setPosition($val)
    {
        $this->_propDict["position"] = $val;
        return $this;
    }
}
