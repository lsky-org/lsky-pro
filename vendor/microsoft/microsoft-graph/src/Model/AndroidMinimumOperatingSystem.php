<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidMinimumOperatingSystem File
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
* AndroidMinimumOperatingSystem class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AndroidMinimumOperatingSystem extends Entity
{
    /**
    * Gets the v4_0
    * Version 4.0 or later.
    *
    * @return bool The v4_0
    */
    public function getV4_0()
    {
        if (array_key_exists("v40", $this->_propDict)) {
            return $this->_propDict["v40"];
        } else {
            return null;
        }
    }

    /**
    * Sets the v4_0
    * Version 4.0 or later.
    *
    * @param bool $val The value of the v4_0
    *
    * @return AndroidMinimumOperatingSystem
    */
    public function setV4_0($val)
    {
        $this->_propDict["v40"] = $val;
        return $this;
    }
    /**
    * Gets the v4_0_3
    * Version 4.0.3 or later.
    *
    * @return bool The v4_0_3
    */
    public function getV4_0_3()
    {
        if (array_key_exists("v403", $this->_propDict)) {
            return $this->_propDict["v403"];
        } else {
            return null;
        }
    }

    /**
    * Sets the v4_0_3
    * Version 4.0.3 or later.
    *
    * @param bool $val The value of the v4_0_3
    *
    * @return AndroidMinimumOperatingSystem
    */
    public function setV4_0_3($val)
    {
        $this->_propDict["v403"] = $val;
        return $this;
    }
    /**
    * Gets the v4_1
    * Version 4.1 or later.
    *
    * @return bool The v4_1
    */
    public function getV4_1()
    {
        if (array_key_exists("v41", $this->_propDict)) {
            return $this->_propDict["v41"];
        } else {
            return null;
        }
    }

    /**
    * Sets the v4_1
    * Version 4.1 or later.
    *
    * @param bool $val The value of the v4_1
    *
    * @return AndroidMinimumOperatingSystem
    */
    public function setV4_1($val)
    {
        $this->_propDict["v41"] = $val;
        return $this;
    }
    /**
    * Gets the v4_2
    * Version 4.2 or later.
    *
    * @return bool The v4_2
    */
    public function getV4_2()
    {
        if (array_key_exists("v42", $this->_propDict)) {
            return $this->_propDict["v42"];
        } else {
            return null;
        }
    }

    /**
    * Sets the v4_2
    * Version 4.2 or later.
    *
    * @param bool $val The value of the v4_2
    *
    * @return AndroidMinimumOperatingSystem
    */
    public function setV4_2($val)
    {
        $this->_propDict["v42"] = $val;
        return $this;
    }
    /**
    * Gets the v4_3
    * Version 4.3 or later.
    *
    * @return bool The v4_3
    */
    public function getV4_3()
    {
        if (array_key_exists("v43", $this->_propDict)) {
            return $this->_propDict["v43"];
        } else {
            return null;
        }
    }

    /**
    * Sets the v4_3
    * Version 4.3 or later.
    *
    * @param bool $val The value of the v4_3
    *
    * @return AndroidMinimumOperatingSystem
    */
    public function setV4_3($val)
    {
        $this->_propDict["v43"] = $val;
        return $this;
    }
    /**
    * Gets the v4_4
    * Version 4.4 or later.
    *
    * @return bool The v4_4
    */
    public function getV4_4()
    {
        if (array_key_exists("v44", $this->_propDict)) {
            return $this->_propDict["v44"];
        } else {
            return null;
        }
    }

    /**
    * Sets the v4_4
    * Version 4.4 or later.
    *
    * @param bool $val The value of the v4_4
    *
    * @return AndroidMinimumOperatingSystem
    */
    public function setV4_4($val)
    {
        $this->_propDict["v44"] = $val;
        return $this;
    }
    /**
    * Gets the v5_0
    * Version 5.0 or later.
    *
    * @return bool The v5_0
    */
    public function getV5_0()
    {
        if (array_key_exists("v50", $this->_propDict)) {
            return $this->_propDict["v50"];
        } else {
            return null;
        }
    }

    /**
    * Sets the v5_0
    * Version 5.0 or later.
    *
    * @param bool $val The value of the v5_0
    *
    * @return AndroidMinimumOperatingSystem
    */
    public function setV5_0($val)
    {
        $this->_propDict["v50"] = $val;
        return $this;
    }
    /**
    * Gets the v5_1
    * Version 5.1 or later.
    *
    * @return bool The v5_1
    */
    public function getV5_1()
    {
        if (array_key_exists("v51", $this->_propDict)) {
            return $this->_propDict["v51"];
        } else {
            return null;
        }
    }

    /**
    * Sets the v5_1
    * Version 5.1 or later.
    *
    * @param bool $val The value of the v5_1
    *
    * @return AndroidMinimumOperatingSystem
    */
    public function setV5_1($val)
    {
        $this->_propDict["v51"] = $val;
        return $this;
    }
}
