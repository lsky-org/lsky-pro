<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IosHomeScreenApp File
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
* IosHomeScreenApp class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IosHomeScreenApp extends IosHomeScreenItem
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.iosHomeScreenApp");
    }

    /**
    * Gets the bundleID
    * BundleID of the app if isWebClip is false or the URL of a web clip if isWebClip is true.
    *
    * @return string The bundleID
    */
    public function getBundleID()
    {
        if (array_key_exists("bundleID", $this->_propDict)) {
            return $this->_propDict["bundleID"];
        } else {
            return null;
        }
    }

    /**
    * Sets the bundleID
    * BundleID of the app if isWebClip is false or the URL of a web clip if isWebClip is true.
    *
    * @param string $val The value of the bundleID
    *
    * @return IosHomeScreenApp
    */
    public function setBundleID($val)
    {
        $this->_propDict["bundleID"] = $val;
        return $this;
    }
    /**
    * Gets the isWebClip
    * When true, the bundle ID will be handled as a URL for a web clip.
    *
    * @return bool The isWebClip
    */
    public function getIsWebClip()
    {
        if (array_key_exists("isWebClip", $this->_propDict)) {
            return $this->_propDict["isWebClip"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isWebClip
    * When true, the bundle ID will be handled as a URL for a web clip.
    *
    * @param bool $val The value of the isWebClip
    *
    * @return IosHomeScreenApp
    */
    public function setIsWebClip($val)
    {
        $this->_propDict["isWebClip"] = $val;
        return $this;
    }
}
