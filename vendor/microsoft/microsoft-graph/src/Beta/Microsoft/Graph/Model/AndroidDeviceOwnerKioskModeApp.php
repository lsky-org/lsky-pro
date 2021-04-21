<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidDeviceOwnerKioskModeApp File
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
* AndroidDeviceOwnerKioskModeApp class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AndroidDeviceOwnerKioskModeApp extends AndroidDeviceOwnerKioskModeFolderItem
{
    /**
    * Gets the className
    * Class name of application
    *
    * @return string The className
    */
    public function getClassName()
    {
        if (array_key_exists("className", $this->_propDict)) {
            return $this->_propDict["className"];
        } else {
            return null;
        }
    }

    /**
    * Sets the className
    * Class name of application
    *
    * @param string $val The value of the className
    *
    * @return AndroidDeviceOwnerKioskModeApp
    */
    public function setClassName($val)
    {
        $this->_propDict["className"] = $val;
        return $this;
    }
    /**
    * Gets the package
    * Package name of application
    *
    * @return string The package
    */
    public function getPackage()
    {
        if (array_key_exists("package", $this->_propDict)) {
            return $this->_propDict["package"];
        } else {
            return null;
        }
    }

    /**
    * Sets the package
    * Package name of application
    *
    * @param string $val The value of the package
    *
    * @return AndroidDeviceOwnerKioskModeApp
    */
    public function setPackage($val)
    {
        $this->_propDict["package"] = $val;
        return $this;
    }
}
