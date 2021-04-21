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
namespace Microsoft\Graph\Model;
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
