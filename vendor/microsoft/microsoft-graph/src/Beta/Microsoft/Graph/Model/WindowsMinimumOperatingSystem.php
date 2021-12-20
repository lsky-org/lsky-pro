<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsMinimumOperatingSystem File
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
* WindowsMinimumOperatingSystem class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsMinimumOperatingSystem extends Entity
{
    /**
    * Gets the v10_0
    * Windows version 10.0 or later.
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
    * Windows version 10.0 or later.
    *
    * @param bool $val The value of the v10_0
    *
    * @return WindowsMinimumOperatingSystem
    */
    public function setV10_0($val)
    {
        $this->_propDict["v100"] = $val;
        return $this;
    }
    /**
    * Gets the v10_1607
    * Windows 10 1607 or later.
    *
    * @return bool The v10_1607
    */
    public function getV10_1607()
    {
        if (array_key_exists("v101607", $this->_propDict)) {
            return $this->_propDict["v101607"];
        } else {
            return null;
        }
    }

    /**
    * Sets the v10_1607
    * Windows 10 1607 or later.
    *
    * @param bool $val The value of the v10_1607
    *
    * @return WindowsMinimumOperatingSystem
    */
    public function setV10_1607($val)
    {
        $this->_propDict["v101607"] = $val;
        return $this;
    }
    /**
    * Gets the v10_1703
    * Windows 10 1703 or later.
    *
    * @return bool The v10_1703
    */
    public function getV10_1703()
    {
        if (array_key_exists("v101703", $this->_propDict)) {
            return $this->_propDict["v101703"];
        } else {
            return null;
        }
    }

    /**
    * Sets the v10_1703
    * Windows 10 1703 or later.
    *
    * @param bool $val The value of the v10_1703
    *
    * @return WindowsMinimumOperatingSystem
    */
    public function setV10_1703($val)
    {
        $this->_propDict["v101703"] = $val;
        return $this;
    }
    /**
    * Gets the v10_1709
    * Windows 10 1709 or later.
    *
    * @return bool The v10_1709
    */
    public function getV10_1709()
    {
        if (array_key_exists("v101709", $this->_propDict)) {
            return $this->_propDict["v101709"];
        } else {
            return null;
        }
    }

    /**
    * Sets the v10_1709
    * Windows 10 1709 or later.
    *
    * @param bool $val The value of the v10_1709
    *
    * @return WindowsMinimumOperatingSystem
    */
    public function setV10_1709($val)
    {
        $this->_propDict["v101709"] = $val;
        return $this;
    }
    /**
    * Gets the v10_1803
    * Windows 10 1803 or later.
    *
    * @return bool The v10_1803
    */
    public function getV10_1803()
    {
        if (array_key_exists("v101803", $this->_propDict)) {
            return $this->_propDict["v101803"];
        } else {
            return null;
        }
    }

    /**
    * Sets the v10_1803
    * Windows 10 1803 or later.
    *
    * @param bool $val The value of the v10_1803
    *
    * @return WindowsMinimumOperatingSystem
    */
    public function setV10_1803($val)
    {
        $this->_propDict["v101803"] = $val;
        return $this;
    }
    /**
    * Gets the v10_1809
    * Windows 10 1809 or later.
    *
    * @return bool The v10_1809
    */
    public function getV10_1809()
    {
        if (array_key_exists("v101809", $this->_propDict)) {
            return $this->_propDict["v101809"];
        } else {
            return null;
        }
    }

    /**
    * Sets the v10_1809
    * Windows 10 1809 or later.
    *
    * @param bool $val The value of the v10_1809
    *
    * @return WindowsMinimumOperatingSystem
    */
    public function setV10_1809($val)
    {
        $this->_propDict["v101809"] = $val;
        return $this;
    }
    /**
    * Gets the v10_1903
    * Windows 10 1903 or later.
    *
    * @return bool The v10_1903
    */
    public function getV10_1903()
    {
        if (array_key_exists("v101903", $this->_propDict)) {
            return $this->_propDict["v101903"];
        } else {
            return null;
        }
    }

    /**
    * Sets the v10_1903
    * Windows 10 1903 or later.
    *
    * @param bool $val The value of the v10_1903
    *
    * @return WindowsMinimumOperatingSystem
    */
    public function setV10_1903($val)
    {
        $this->_propDict["v101903"] = $val;
        return $this;
    }
    /**
    * Gets the v10_1909
    * Windows 10 1909 or later.
    *
    * @return bool The v10_1909
    */
    public function getV10_1909()
    {
        if (array_key_exists("v101909", $this->_propDict)) {
            return $this->_propDict["v101909"];
        } else {
            return null;
        }
    }

    /**
    * Sets the v10_1909
    * Windows 10 1909 or later.
    *
    * @param bool $val The value of the v10_1909
    *
    * @return WindowsMinimumOperatingSystem
    */
    public function setV10_1909($val)
    {
        $this->_propDict["v101909"] = $val;
        return $this;
    }
    /**
    * Gets the v10_2004
    * Windows 10 2004 or later.
    *
    * @return bool The v10_2004
    */
    public function getV10_2004()
    {
        if (array_key_exists("v102004", $this->_propDict)) {
            return $this->_propDict["v102004"];
        } else {
            return null;
        }
    }

    /**
    * Sets the v10_2004
    * Windows 10 2004 or later.
    *
    * @param bool $val The value of the v10_2004
    *
    * @return WindowsMinimumOperatingSystem
    */
    public function setV10_2004($val)
    {
        $this->_propDict["v102004"] = $val;
        return $this;
    }
    /**
    * Gets the v8_0
    * Windows version 8.0 or later.
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
    * Windows version 8.0 or later.
    *
    * @param bool $val The value of the v8_0
    *
    * @return WindowsMinimumOperatingSystem
    */
    public function setV8_0($val)
    {
        $this->_propDict["v80"] = $val;
        return $this;
    }
    /**
    * Gets the v8_1
    * Windows version 8.1 or later.
    *
    * @return bool The v8_1
    */
    public function getV8_1()
    {
        if (array_key_exists("v81", $this->_propDict)) {
            return $this->_propDict["v81"];
        } else {
            return null;
        }
    }

    /**
    * Sets the v8_1
    * Windows version 8.1 or later.
    *
    * @param bool $val The value of the v8_1
    *
    * @return WindowsMinimumOperatingSystem
    */
    public function setV8_1($val)
    {
        $this->_propDict["v81"] = $val;
        return $this;
    }
}
