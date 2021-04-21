<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IosMinimumOperatingSystem File
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
* IosMinimumOperatingSystem class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IosMinimumOperatingSystem extends Entity
{
    /**
    * Gets the v10_0
    * Version 10.0 or later.
    *
    * @return bool The v10_0
    */
    public function getV10_0()
    {
        if (array_key_exists("v100", $this->_propDict)) {
            return $this->_propDict["v100"];
        } else {
            return null;
        }
    }

    /**
    * Sets the v10_0
    * Version 10.0 or later.
    *
    * @param bool $val The value of the v10_0
    *
    * @return IosMinimumOperatingSystem
    */
    public function setV10_0($val)
    {
        $this->_propDict["v100"] = $val;
        return $this;
    }
    /**
    * Gets the v11_0
    * Version 11.0 or later.
    *
    * @return bool The v11_0
    */
    public function getV11_0()
    {
        if (array_key_exists("v110", $this->_propDict)) {
            return $this->_propDict["v110"];
        } else {
            return null;
        }
    }

    /**
    * Sets the v11_0
    * Version 11.0 or later.
    *
    * @param bool $val The value of the v11_0
    *
    * @return IosMinimumOperatingSystem
    */
    public function setV11_0($val)
    {
        $this->_propDict["v110"] = $val;
        return $this;
    }
    /**
    * Gets the v12_0
    * Version 12.0 or later.
    *
    * @return bool The v12_0
    */
    public function getV12_0()
    {
        if (array_key_exists("v120", $this->_propDict)) {
            return $this->_propDict["v120"];
        } else {
            return null;
        }
    }

    /**
    * Sets the v12_0
    * Version 12.0 or later.
    *
    * @param bool $val The value of the v12_0
    *
    * @return IosMinimumOperatingSystem
    */
    public function setV12_0($val)
    {
        $this->_propDict["v120"] = $val;
        return $this;
    }
    /**
    * Gets the v13_0
    * Version 13.0 or later.
    *
    * @return bool The v13_0
    */
    public function getV13_0()
    {
        if (array_key_exists("v130", $this->_propDict)) {
            return $this->_propDict["v130"];
        } else {
            return null;
        }
    }

    /**
    * Sets the v13_0
    * Version 13.0 or later.
    *
    * @param bool $val The value of the v13_0
    *
    * @return IosMinimumOperatingSystem
    */
    public function setV13_0($val)
    {
        $this->_propDict["v130"] = $val;
        return $this;
    }
    /**
    * Gets the v14_0
    * Version 14.0 or later.
    *
    * @return bool The v14_0
    */
    public function getV14_0()
    {
        if (array_key_exists("v140", $this->_propDict)) {
            return $this->_propDict["v140"];
        } else {
            return null;
        }
    }

    /**
    * Sets the v14_0
    * Version 14.0 or later.
    *
    * @param bool $val The value of the v14_0
    *
    * @return IosMinimumOperatingSystem
    */
    public function setV14_0($val)
    {
        $this->_propDict["v140"] = $val;
        return $this;
    }
    /**
    * Gets the v8_0
    * Version 8.0 or later.
    *
    * @return bool The v8_0
    */
    public function getV8_0()
    {
        if (array_key_exists("v80", $this->_propDict)) {
            return $this->_propDict["v80"];
        } else {
            return null;
        }
    }

    /**
    * Sets the v8_0
    * Version 8.0 or later.
    *
    * @param bool $val The value of the v8_0
    *
    * @return IosMinimumOperatingSystem
    */
    public function setV8_0($val)
    {
        $this->_propDict["v80"] = $val;
        return $this;
    }
    /**
    * Gets the v9_0
    * Version 9.0 or later.
    *
    * @return bool The v9_0
    */
    public function getV9_0()
    {
        if (array_key_exists("v90", $this->_propDict)) {
            return $this->_propDict["v90"];
        } else {
            return null;
        }
    }

    /**
    * Sets the v9_0
    * Version 9.0 or later.
    *
    * @param bool $val The value of the v9_0
    *
    * @return IosMinimumOperatingSystem
    */
    public function setV9_0($val)
    {
        $this->_propDict["v90"] = $val;
        return $this;
    }
}
