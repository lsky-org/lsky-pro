<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsInformationProtectionApp File
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
* WindowsInformationProtectionApp class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsInformationProtectionApp extends Entity
{
    /**
    * Gets the denied
    * If true, app is denied protection or exemption.
    *
    * @return bool The denied
    */
    public function getDenied()
    {
        if (array_key_exists("denied", $this->_propDict)) {
            return $this->_propDict["denied"];
        } else {
            return null;
        }
    }

    /**
    * Sets the denied
    * If true, app is denied protection or exemption.
    *
    * @param bool $val The value of the denied
    *
    * @return WindowsInformationProtectionApp
    */
    public function setDenied($val)
    {
        $this->_propDict["denied"] = $val;
        return $this;
    }
    /**
    * Gets the description
    * The app's description.
    *
    * @return string The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }

    /**
    * Sets the description
    * The app's description.
    *
    * @param string $val The value of the description
    *
    * @return WindowsInformationProtectionApp
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    /**
    * Gets the displayName
    * App display name.
    *
    * @return string The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayName
    * App display name.
    *
    * @param string $val The value of the displayName
    *
    * @return WindowsInformationProtectionApp
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    /**
    * Gets the productName
    * The product name.
    *
    * @return string The productName
    */
    public function getProductName()
    {
        if (array_key_exists("productName", $this->_propDict)) {
            return $this->_propDict["productName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the productName
    * The product name.
    *
    * @param string $val The value of the productName
    *
    * @return WindowsInformationProtectionApp
    */
    public function setProductName($val)
    {
        $this->_propDict["productName"] = $val;
        return $this;
    }
    /**
    * Gets the publisherName
    * The publisher name
    *
    * @return string The publisherName
    */
    public function getPublisherName()
    {
        if (array_key_exists("publisherName", $this->_propDict)) {
            return $this->_propDict["publisherName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the publisherName
    * The publisher name
    *
    * @param string $val The value of the publisherName
    *
    * @return WindowsInformationProtectionApp
    */
    public function setPublisherName($val)
    {
        $this->_propDict["publisherName"] = $val;
        return $this;
    }
}
