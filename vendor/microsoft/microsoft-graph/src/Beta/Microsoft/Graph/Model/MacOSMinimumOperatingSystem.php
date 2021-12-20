<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MacOSMinimumOperatingSystem File
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
* MacOSMinimumOperatingSystem class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MacOSMinimumOperatingSystem extends Entity
{
    /**
    * Gets the v10_10
    * Mac OS 10.10 or later.
    *
    * @return bool The v10_10
    */
    public function getV10_10()
    {
        if (array_key_exists("v1010", $this->_propDict)) {
            return $this->_propDict["v1010"];
        } else {
            return null;
        }
    }

    /**
    * Sets the v10_10
    * Mac OS 10.10 or later.
    *
    * @param bool $val The value of the v10_10
    *
    * @return MacOSMinimumOperatingSystem
    */
    public function setV10_10($val)
    {
        $this->_propDict["v1010"] = $val;
        return $this;
    }
    /**
    * Gets the v10_11
    * Mac OS 10.11 or later.
    *
    * @return bool The v10_11
    */
    public function getV10_11()
    {
        if (array_key_exists("v1011", $this->_propDict)) {
            return $this->_propDict["v1011"];
        } else {
            return null;
        }
    }

    /**
    * Sets the v10_11
    * Mac OS 10.11 or later.
    *
    * @param bool $val The value of the v10_11
    *
    * @return MacOSMinimumOperatingSystem
    */
    public function setV10_11($val)
    {
        $this->_propDict["v1011"] = $val;
        return $this;
    }
    /**
    * Gets the v10_12
    * Mac OS 10.12 or later.
    *
    * @return bool The v10_12
    */
    public function getV10_12()
    {
        if (array_key_exists("v1012", $this->_propDict)) {
            return $this->_propDict["v1012"];
        } else {
            return null;
        }
    }

    /**
    * Sets the v10_12
    * Mac OS 10.12 or later.
    *
    * @param bool $val The value of the v10_12
    *
    * @return MacOSMinimumOperatingSystem
    */
    public function setV10_12($val)
    {
        $this->_propDict["v1012"] = $val;
        return $this;
    }
    /**
    * Gets the v10_13
    * Mac OS 10.13 or later.
    *
    * @return bool The v10_13
    */
    public function getV10_13()
    {
        if (array_key_exists("v1013", $this->_propDict)) {
            return $this->_propDict["v1013"];
        } else {
            return null;
        }
    }

    /**
    * Sets the v10_13
    * Mac OS 10.13 or later.
    *
    * @param bool $val The value of the v10_13
    *
    * @return MacOSMinimumOperatingSystem
    */
    public function setV10_13($val)
    {
        $this->_propDict["v1013"] = $val;
        return $this;
    }
    /**
    * Gets the v10_14
    * Mac OS 10.14 or later.
    *
    * @return bool The v10_14
    */
    public function getV10_14()
    {
        if (array_key_exists("v1014", $this->_propDict)) {
            return $this->_propDict["v1014"];
        } else {
            return null;
        }
    }

    /**
    * Sets the v10_14
    * Mac OS 10.14 or later.
    *
    * @param bool $val The value of the v10_14
    *
    * @return MacOSMinimumOperatingSystem
    */
    public function setV10_14($val)
    {
        $this->_propDict["v1014"] = $val;
        return $this;
    }
    /**
    * Gets the v10_15
    * Mac OS 10.15 or later.
    *
    * @return bool The v10_15
    */
    public function getV10_15()
    {
        if (array_key_exists("v1015", $this->_propDict)) {
            return $this->_propDict["v1015"];
        } else {
            return null;
        }
    }

    /**
    * Sets the v10_15
    * Mac OS 10.15 or later.
    *
    * @param bool $val The value of the v10_15
    *
    * @return MacOSMinimumOperatingSystem
    */
    public function setV10_15($val)
    {
        $this->_propDict["v1015"] = $val;
        return $this;
    }
    /**
    * Gets the v10_7
    * Mac OS 10.7 or later.
    *
    * @return bool The v10_7
    */
    public function getV10_7()
    {
        if (array_key_exists("v107", $this->_propDict)) {
            return $this->_propDict["v107"];
        } else {
            return null;
        }
    }

    /**
    * Sets the v10_7
    * Mac OS 10.7 or later.
    *
    * @param bool $val The value of the v10_7
    *
    * @return MacOSMinimumOperatingSystem
    */
    public function setV10_7($val)
    {
        $this->_propDict["v107"] = $val;
        return $this;
    }
    /**
    * Gets the v10_8
    * Mac OS 10.8 or later.
    *
    * @return bool The v10_8
    */
    public function getV10_8()
    {
        if (array_key_exists("v108", $this->_propDict)) {
            return $this->_propDict["v108"];
        } else {
            return null;
        }
    }

    /**
    * Sets the v10_8
    * Mac OS 10.8 or later.
    *
    * @param bool $val The value of the v10_8
    *
    * @return MacOSMinimumOperatingSystem
    */
    public function setV10_8($val)
    {
        $this->_propDict["v108"] = $val;
        return $this;
    }
    /**
    * Gets the v10_9
    * Mac OS 10.9 or later.
    *
    * @return bool The v10_9
    */
    public function getV10_9()
    {
        if (array_key_exists("v109", $this->_propDict)) {
            return $this->_propDict["v109"];
        } else {
            return null;
        }
    }

    /**
    * Sets the v10_9
    * Mac OS 10.9 or later.
    *
    * @param bool $val The value of the v10_9
    *
    * @return MacOSMinimumOperatingSystem
    */
    public function setV10_9($val)
    {
        $this->_propDict["v109"] = $val;
        return $this;
    }
}
