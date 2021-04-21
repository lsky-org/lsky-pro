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
namespace Beta\Microsoft\Graph\Model;
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
    * @return AndroidMinimumOperatingSystem
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
    * @return AndroidMinimumOperatingSystem
    */
    public function setV11_0($val)
    {
        $this->_propDict["v110"] = $val;
        return $this;
    }
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
    /**
    * Gets the v6_0
    * Version 6.0 or later.
    *
    * @return bool The v6_0
    */
    public function getV6_0()
    {
        if (array_key_exists("v60", $this->_propDict)) {
            return $this->_propDict["v60"];
        } else {
            return null;
        }
    }

    /**
    * Sets the v6_0
    * Version 6.0 or later.
    *
    * @param bool $val The value of the v6_0
    *
    * @return AndroidMinimumOperatingSystem
    */
    public function setV6_0($val)
    {
        $this->_propDict["v60"] = $val;
        return $this;
    }
    /**
    * Gets the v7_0
    * Version 7.0 or later.
    *
    * @return bool The v7_0
    */
    public function getV7_0()
    {
        if (array_key_exists("v70", $this->_propDict)) {
            return $this->_propDict["v70"];
        } else {
            return null;
        }
    }

    /**
    * Sets the v7_0
    * Version 7.0 or later.
    *
    * @param bool $val The value of the v7_0
    *
    * @return AndroidMinimumOperatingSystem
    */
    public function setV7_0($val)
    {
        $this->_propDict["v70"] = $val;
        return $this;
    }
    /**
    * Gets the v7_1
    * Version 7.1 or later.
    *
    * @return bool The v7_1
    */
    public function getV7_1()
    {
        if (array_key_exists("v71", $this->_propDict)) {
            return $this->_propDict["v71"];
        } else {
            return null;
        }
    }

    /**
    * Sets the v7_1
    * Version 7.1 or later.
    *
    * @param bool $val The value of the v7_1
    *
    * @return AndroidMinimumOperatingSystem
    */
    public function setV7_1($val)
    {
        $this->_propDict["v71"] = $val;
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
    * @return AndroidMinimumOperatingSystem
    */
    public function setV8_0($val)
    {
        $this->_propDict["v80"] = $val;
        return $this;
    }
    /**
    * Gets the v8_1
    * Version 8.1 or later.
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
    * Version 8.1 or later.
    *
    * @param bool $val The value of the v8_1
    *
    * @return AndroidMinimumOperatingSystem
    */
    public function setV8_1($val)
    {
        $this->_propDict["v81"] = $val;
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
    * @return AndroidMinimumOperatingSystem
    */
    public function setV9_0($val)
    {
        $this->_propDict["v90"] = $val;
        return $this;
    }
}
