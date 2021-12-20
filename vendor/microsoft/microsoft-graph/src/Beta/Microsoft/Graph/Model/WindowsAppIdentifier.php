<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsAppIdentifier File
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
* WindowsAppIdentifier class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsAppIdentifier extends MobileAppIdentifier
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.windowsAppIdentifier");
    }

    /**
    * Gets the windowsAppId
    * The identifier for an app, as specified in the app store.
    *
    * @return string The windowsAppId
    */
    public function getWindowsAppId()
    {
        if (array_key_exists("windowsAppId", $this->_propDict)) {
            return $this->_propDict["windowsAppId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the windowsAppId
    * The identifier for an app, as specified in the app store.
    *
    * @param string $val The value of the windowsAppId
    *
    * @return WindowsAppIdentifier
    */
    public function setWindowsAppId($val)
    {
        $this->_propDict["windowsAppId"] = $val;
        return $this;
    }
}
