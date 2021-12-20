<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RgbColor File
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
* RgbColor class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RgbColor extends Entity
{

    /**
    * Gets the b
    * Blue value
    *
    * @return Byte The b
    */
    public function getB()
    {
        if (array_key_exists("b", $this->_propDict)) {
            if (is_a($this->_propDict["b"], "\Beta\Microsoft\Graph\Model\Byte")) {
                return $this->_propDict["b"];
            } else {
                $this->_propDict["b"] = new Byte($this->_propDict["b"]);
                return $this->_propDict["b"];
            }
        }
        return null;
    }

    /**
    * Sets the b
    * Blue value
    *
    * @param Byte $val The value to assign to the b
    *
    * @return RgbColor The RgbColor
    */
    public function setB($val)
    {
        $this->_propDict["b"] = $val;
         return $this;
    }

    /**
    * Gets the g
    * Green value
    *
    * @return Byte The g
    */
    public function getG()
    {
        if (array_key_exists("g", $this->_propDict)) {
            if (is_a($this->_propDict["g"], "\Beta\Microsoft\Graph\Model\Byte")) {
                return $this->_propDict["g"];
            } else {
                $this->_propDict["g"] = new Byte($this->_propDict["g"]);
                return $this->_propDict["g"];
            }
        }
        return null;
    }

    /**
    * Sets the g
    * Green value
    *
    * @param Byte $val The value to assign to the g
    *
    * @return RgbColor The RgbColor
    */
    public function setG($val)
    {
        $this->_propDict["g"] = $val;
         return $this;
    }

    /**
    * Gets the r
    * Red value
    *
    * @return Byte The r
    */
    public function getR()
    {
        if (array_key_exists("r", $this->_propDict)) {
            if (is_a($this->_propDict["r"], "\Beta\Microsoft\Graph\Model\Byte")) {
                return $this->_propDict["r"];
            } else {
                $this->_propDict["r"] = new Byte($this->_propDict["r"]);
                return $this->_propDict["r"];
            }
        }
        return null;
    }

    /**
    * Sets the r
    * Red value
    *
    * @param Byte $val The value to assign to the r
    *
    * @return RgbColor The RgbColor
    */
    public function setR($val)
    {
        $this->_propDict["r"] = $val;
         return $this;
    }
}
