<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MacOsVppAppAssignmentSettings File
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
* MacOsVppAppAssignmentSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MacOsVppAppAssignmentSettings extends MobileAppAssignmentSettings
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.macOsVppAppAssignmentSettings");
    }

    /**
    * Gets the uninstallOnDeviceRemoval
    * Whether or not to uninstall the app when device is removed from Intune.
    *
    * @return bool The uninstallOnDeviceRemoval
    */
    public function getUninstallOnDeviceRemoval()
    {
        if (array_key_exists("uninstallOnDeviceRemoval", $this->_propDict)) {
            return $this->_propDict["uninstallOnDeviceRemoval"];
        } else {
            return null;
        }
    }

    /**
    * Sets the uninstallOnDeviceRemoval
    * Whether or not to uninstall the app when device is removed from Intune.
    *
    * @param bool $val The value of the uninstallOnDeviceRemoval
    *
    * @return MacOsVppAppAssignmentSettings
    */
    public function setUninstallOnDeviceRemoval($val)
    {
        $this->_propDict["uninstallOnDeviceRemoval"] = $val;
        return $this;
    }
    /**
    * Gets the useDeviceLicensing
    * Whether or not to use device licensing.
    *
    * @return bool The useDeviceLicensing
    */
    public function getUseDeviceLicensing()
    {
        if (array_key_exists("useDeviceLicensing", $this->_propDict)) {
            return $this->_propDict["useDeviceLicensing"];
        } else {
            return null;
        }
    }

    /**
    * Sets the useDeviceLicensing
    * Whether or not to use device licensing.
    *
    * @param bool $val The value of the useDeviceLicensing
    *
    * @return MacOsVppAppAssignmentSettings
    */
    public function setUseDeviceLicensing($val)
    {
        $this->_propDict["useDeviceLicensing"] = $val;
        return $this;
    }
}
