<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AddFooter File
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
* AddFooter class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AddFooter extends MarkContent
{

    /**
    * Gets the alignment
    *
    * @return Alignment The alignment
    */
    public function getAlignment()
    {
        if (array_key_exists("alignment", $this->_propDict)) {
            if (is_a($this->_propDict["alignment"], "\Beta\Microsoft\Graph\Model\Alignment")) {
                return $this->_propDict["alignment"];
            } else {
                $this->_propDict["alignment"] = new Alignment($this->_propDict["alignment"]);
                return $this->_propDict["alignment"];
            }
        }
        return null;
    }

    /**
    * Sets the alignment
    *
    * @param Alignment $val The value to assign to the alignment
    *
    * @return AddFooter The AddFooter
    */
    public function setAlignment($val)
    {
        $this->_propDict["alignment"] = $val;
         return $this;
    }
    /**
    * Gets the margin
    *
    * @return int The margin
    */
    public function getMargin()
    {
        if (array_key_exists("margin", $this->_propDict)) {
            return $this->_propDict["margin"];
        } else {
            return null;
        }
    }

    /**
    * Sets the margin
    *
    * @param int $val The value of the margin
    *
    * @return AddFooter
    */
    public function setMargin($val)
    {
        $this->_propDict["margin"] = $val;
        return $this;
    }
}
