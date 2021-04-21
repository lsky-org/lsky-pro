<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserActivationCounts File
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
* UserActivationCounts class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserActivationCounts extends Entity
{
    /**
    * Gets the activatedOnSharedComputer
    * True if the user used the product on a shared computer before.
    *
    * @return bool The activatedOnSharedComputer
    */
    public function getActivatedOnSharedComputer()
    {
        if (array_key_exists("activatedOnSharedComputer", $this->_propDict)) {
            return $this->_propDict["activatedOnSharedComputer"];
        } else {
            return null;
        }
    }

    /**
    * Sets the activatedOnSharedComputer
    * True if the user used the product on a shared computer before.
    *
    * @param bool $val The value of the activatedOnSharedComputer
    *
    * @return UserActivationCounts
    */
    public function setActivatedOnSharedComputer($val)
    {
        $this->_propDict["activatedOnSharedComputer"] = $val;
        return $this;
    }
    /**
    * Gets the android
    * The activation count on an Android device.
    *
    * @return int The android
    */
    public function getAndroid()
    {
        if (array_key_exists("android", $this->_propDict)) {
            return $this->_propDict["android"];
        } else {
            return null;
        }
    }

    /**
    * Sets the android
    * The activation count on an Android device.
    *
    * @param int $val The value of the android
    *
    * @return UserActivationCounts
    */
    public function setAndroid($val)
    {
        $this->_propDict["android"] = $val;
        return $this;
    }
    /**
    * Gets the ios
    * The activation count on iOS.
    *
    * @return int The ios
    */
    public function getIos()
    {
        if (array_key_exists("ios", $this->_propDict)) {
            return $this->_propDict["ios"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ios
    * The activation count on iOS.
    *
    * @param int $val The value of the ios
    *
    * @return UserActivationCounts
    */
    public function setIos($val)
    {
        $this->_propDict["ios"] = $val;
        return $this;
    }

    /**
    * Gets the lastActivatedDate
    * The date of the latest activation.
    *
    * @return \DateTime The lastActivatedDate
    */
    public function getLastActivatedDate()
    {
        if (array_key_exists("lastActivatedDate", $this->_propDict)) {
            if (is_a($this->_propDict["lastActivatedDate"], "\DateTime")) {
                return $this->_propDict["lastActivatedDate"];
            } else {
                $this->_propDict["lastActivatedDate"] = new \DateTime($this->_propDict["lastActivatedDate"]);
                return $this->_propDict["lastActivatedDate"];
            }
        }
        return null;
    }

    /**
    * Sets the lastActivatedDate
    * The date of the latest activation.
    *
    * @param \DateTime $val The value to assign to the lastActivatedDate
    *
    * @return UserActivationCounts The UserActivationCounts
    */
    public function setLastActivatedDate($val)
    {
        $this->_propDict["lastActivatedDate"] = $val;
         return $this;
    }
    /**
    * Gets the mac
    * The activation count on Mac OS.
    *
    * @return int The mac
    */
    public function getMac()
    {
        if (array_key_exists("mac", $this->_propDict)) {
            return $this->_propDict["mac"];
        } else {
            return null;
        }
    }

    /**
    * Sets the mac
    * The activation count on Mac OS.
    *
    * @param int $val The value of the mac
    *
    * @return UserActivationCounts
    */
    public function setMac($val)
    {
        $this->_propDict["mac"] = $val;
        return $this;
    }
    /**
    * Gets the productType
    * The product type, such as 'Microsoft 365 ProPlus'or 'Project Client'.
    *
    * @return string The productType
    */
    public function getProductType()
    {
        if (array_key_exists("productType", $this->_propDict)) {
            return $this->_propDict["productType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the productType
    * The product type, such as 'Microsoft 365 ProPlus'or 'Project Client'.
    *
    * @param string $val The value of the productType
    *
    * @return UserActivationCounts
    */
    public function setProductType($val)
    {
        $this->_propDict["productType"] = $val;
        return $this;
    }
    /**
    * Gets the windows
    * The activation count on Windows. This number includes every activation on any Windows computer.
    *
    * @return int The windows
    */
    public function getWindows()
    {
        if (array_key_exists("windows", $this->_propDict)) {
            return $this->_propDict["windows"];
        } else {
            return null;
        }
    }

    /**
    * Sets the windows
    * The activation count on Windows. This number includes every activation on any Windows computer.
    *
    * @param int $val The value of the windows
    *
    * @return UserActivationCounts
    */
    public function setWindows($val)
    {
        $this->_propDict["windows"] = $val;
        return $this;
    }
    /**
    * Gets the windows10Mobile
    * The activation count on Windows 10 mobile.
    *
    * @return int The windows10Mobile
    */
    public function getWindows10Mobile()
    {
        if (array_key_exists("windows10Mobile", $this->_propDict)) {
            return $this->_propDict["windows10Mobile"];
        } else {
            return null;
        }
    }

    /**
    * Sets the windows10Mobile
    * The activation count on Windows 10 mobile.
    *
    * @param int $val The value of the windows10Mobile
    *
    * @return UserActivationCounts
    */
    public function setWindows10Mobile($val)
    {
        $this->_propDict["windows10Mobile"] = $val;
        return $this;
    }
}
