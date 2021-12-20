<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Win32LobAppMsiInformation File
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
* Win32LobAppMsiInformation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Win32LobAppMsiInformation extends Entity
{

    /**
    * Gets the packageType
    * The MSI package type. Possible values are: perMachine, perUser, dualPurpose.
    *
    * @return Win32LobAppMsiPackageType The packageType
    */
    public function getPackageType()
    {
        if (array_key_exists("packageType", $this->_propDict)) {
            if (is_a($this->_propDict["packageType"], "\Microsoft\Graph\Model\Win32LobAppMsiPackageType")) {
                return $this->_propDict["packageType"];
            } else {
                $this->_propDict["packageType"] = new Win32LobAppMsiPackageType($this->_propDict["packageType"]);
                return $this->_propDict["packageType"];
            }
        }
        return null;
    }

    /**
    * Sets the packageType
    * The MSI package type. Possible values are: perMachine, perUser, dualPurpose.
    *
    * @param Win32LobAppMsiPackageType $val The value to assign to the packageType
    *
    * @return Win32LobAppMsiInformation The Win32LobAppMsiInformation
    */
    public function setPackageType($val)
    {
        $this->_propDict["packageType"] = $val;
         return $this;
    }
    /**
    * Gets the productCode
    * The MSI product code.
    *
    * @return string The productCode
    */
    public function getProductCode()
    {
        if (array_key_exists("productCode", $this->_propDict)) {
            return $this->_propDict["productCode"];
        } else {
            return null;
        }
    }

    /**
    * Sets the productCode
    * The MSI product code.
    *
    * @param string $val The value of the productCode
    *
    * @return Win32LobAppMsiInformation
    */
    public function setProductCode($val)
    {
        $this->_propDict["productCode"] = $val;
        return $this;
    }
    /**
    * Gets the productName
    * The MSI product name.
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
    * The MSI product name.
    *
    * @param string $val The value of the productName
    *
    * @return Win32LobAppMsiInformation
    */
    public function setProductName($val)
    {
        $this->_propDict["productName"] = $val;
        return $this;
    }
    /**
    * Gets the productVersion
    * The MSI product version.
    *
    * @return string The productVersion
    */
    public function getProductVersion()
    {
        if (array_key_exists("productVersion", $this->_propDict)) {
            return $this->_propDict["productVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the productVersion
    * The MSI product version.
    *
    * @param string $val The value of the productVersion
    *
    * @return Win32LobAppMsiInformation
    */
    public function setProductVersion($val)
    {
        $this->_propDict["productVersion"] = $val;
        return $this;
    }
    /**
    * Gets the publisher
    * The MSI publisher.
    *
    * @return string The publisher
    */
    public function getPublisher()
    {
        if (array_key_exists("publisher", $this->_propDict)) {
            return $this->_propDict["publisher"];
        } else {
            return null;
        }
    }

    /**
    * Sets the publisher
    * The MSI publisher.
    *
    * @param string $val The value of the publisher
    *
    * @return Win32LobAppMsiInformation
    */
    public function setPublisher($val)
    {
        $this->_propDict["publisher"] = $val;
        return $this;
    }
    /**
    * Gets the requiresReboot
    * Whether the MSI app requires the machine to reboot to complete installation.
    *
    * @return bool The requiresReboot
    */
    public function getRequiresReboot()
    {
        if (array_key_exists("requiresReboot", $this->_propDict)) {
            return $this->_propDict["requiresReboot"];
        } else {
            return null;
        }
    }

    /**
    * Sets the requiresReboot
    * Whether the MSI app requires the machine to reboot to complete installation.
    *
    * @param bool $val The value of the requiresReboot
    *
    * @return Win32LobAppMsiInformation
    */
    public function setRequiresReboot($val)
    {
        $this->_propDict["requiresReboot"] = $val;
        return $this;
    }
    /**
    * Gets the upgradeCode
    * The MSI upgrade code.
    *
    * @return string The upgradeCode
    */
    public function getUpgradeCode()
    {
        if (array_key_exists("upgradeCode", $this->_propDict)) {
            return $this->_propDict["upgradeCode"];
        } else {
            return null;
        }
    }

    /**
    * Sets the upgradeCode
    * The MSI upgrade code.
    *
    * @param string $val The value of the upgradeCode
    *
    * @return Win32LobAppMsiInformation
    */
    public function setUpgradeCode($val)
    {
        $this->_propDict["upgradeCode"] = $val;
        return $this;
    }
}
