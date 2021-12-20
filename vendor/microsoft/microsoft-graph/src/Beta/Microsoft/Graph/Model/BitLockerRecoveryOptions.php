<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* BitLockerRecoveryOptions File
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
* BitLockerRecoveryOptions class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class BitLockerRecoveryOptions extends Entity
{
    /**
    * Gets the blockDataRecoveryAgent
    * Indicates whether to block certificate-based data recovery agent.
    *
    * @return bool The blockDataRecoveryAgent
    */
    public function getBlockDataRecoveryAgent()
    {
        if (array_key_exists("blockDataRecoveryAgent", $this->_propDict)) {
            return $this->_propDict["blockDataRecoveryAgent"];
        } else {
            return null;
        }
    }

    /**
    * Sets the blockDataRecoveryAgent
    * Indicates whether to block certificate-based data recovery agent.
    *
    * @param bool $val The value of the blockDataRecoveryAgent
    *
    * @return BitLockerRecoveryOptions
    */
    public function setBlockDataRecoveryAgent($val)
    {
        $this->_propDict["blockDataRecoveryAgent"] = $val;
        return $this;
    }
    /**
    * Gets the enableBitLockerAfterRecoveryInformationToStore
    * Indicates whether or not to enable BitLocker until recovery information is stored in AD DS.
    *
    * @return bool The enableBitLockerAfterRecoveryInformationToStore
    */
    public function getEnableBitLockerAfterRecoveryInformationToStore()
    {
        if (array_key_exists("enableBitLockerAfterRecoveryInformationToStore", $this->_propDict)) {
            return $this->_propDict["enableBitLockerAfterRecoveryInformationToStore"];
        } else {
            return null;
        }
    }

    /**
    * Sets the enableBitLockerAfterRecoveryInformationToStore
    * Indicates whether or not to enable BitLocker until recovery information is stored in AD DS.
    *
    * @param bool $val The value of the enableBitLockerAfterRecoveryInformationToStore
    *
    * @return BitLockerRecoveryOptions
    */
    public function setEnableBitLockerAfterRecoveryInformationToStore($val)
    {
        $this->_propDict["enableBitLockerAfterRecoveryInformationToStore"] = $val;
        return $this;
    }
    /**
    * Gets the enableRecoveryInformationSaveToStore
    * Indicates whether or not to allow BitLocker recovery information to store in AD DS.
    *
    * @return bool The enableRecoveryInformationSaveToStore
    */
    public function getEnableRecoveryInformationSaveToStore()
    {
        if (array_key_exists("enableRecoveryInformationSaveToStore", $this->_propDict)) {
            return $this->_propDict["enableRecoveryInformationSaveToStore"];
        } else {
            return null;
        }
    }

    /**
    * Sets the enableRecoveryInformationSaveToStore
    * Indicates whether or not to allow BitLocker recovery information to store in AD DS.
    *
    * @param bool $val The value of the enableRecoveryInformationSaveToStore
    *
    * @return BitLockerRecoveryOptions
    */
    public function setEnableRecoveryInformationSaveToStore($val)
    {
        $this->_propDict["enableRecoveryInformationSaveToStore"] = $val;
        return $this;
    }
    /**
    * Gets the hideRecoveryOptions
    * Indicates whether or not to allow showing recovery options in BitLocker Setup Wizard for fixed or system disk.
    *
    * @return bool The hideRecoveryOptions
    */
    public function getHideRecoveryOptions()
    {
        if (array_key_exists("hideRecoveryOptions", $this->_propDict)) {
            return $this->_propDict["hideRecoveryOptions"];
        } else {
            return null;
        }
    }

    /**
    * Sets the hideRecoveryOptions
    * Indicates whether or not to allow showing recovery options in BitLocker Setup Wizard for fixed or system disk.
    *
    * @param bool $val The value of the hideRecoveryOptions
    *
    * @return BitLockerRecoveryOptions
    */
    public function setHideRecoveryOptions($val)
    {
        $this->_propDict["hideRecoveryOptions"] = $val;
        return $this;
    }

    /**
    * Gets the recoveryInformationToStore
    * Configure what pieces of BitLocker recovery information are stored to AD DS. Possible values are: passwordAndKey, passwordOnly.
    *
    * @return BitLockerRecoveryInformationType The recoveryInformationToStore
    */
    public function getRecoveryInformationToStore()
    {
        if (array_key_exists("recoveryInformationToStore", $this->_propDict)) {
            if (is_a($this->_propDict["recoveryInformationToStore"], "\Beta\Microsoft\Graph\Model\BitLockerRecoveryInformationType")) {
                return $this->_propDict["recoveryInformationToStore"];
            } else {
                $this->_propDict["recoveryInformationToStore"] = new BitLockerRecoveryInformationType($this->_propDict["recoveryInformationToStore"]);
                return $this->_propDict["recoveryInformationToStore"];
            }
        }
        return null;
    }

    /**
    * Sets the recoveryInformationToStore
    * Configure what pieces of BitLocker recovery information are stored to AD DS. Possible values are: passwordAndKey, passwordOnly.
    *
    * @param BitLockerRecoveryInformationType $val The value to assign to the recoveryInformationToStore
    *
    * @return BitLockerRecoveryOptions The BitLockerRecoveryOptions
    */
    public function setRecoveryInformationToStore($val)
    {
        $this->_propDict["recoveryInformationToStore"] = $val;
         return $this;
    }

    /**
    * Gets the recoveryKeyUsage
    * Indicates whether users are allowed or required to generate a 256-bit recovery key for fixed or system disk. Possible values are: blocked, required, allowed, notConfigured.
    *
    * @return ConfigurationUsage The recoveryKeyUsage
    */
    public function getRecoveryKeyUsage()
    {
        if (array_key_exists("recoveryKeyUsage", $this->_propDict)) {
            if (is_a($this->_propDict["recoveryKeyUsage"], "\Beta\Microsoft\Graph\Model\ConfigurationUsage")) {
                return $this->_propDict["recoveryKeyUsage"];
            } else {
                $this->_propDict["recoveryKeyUsage"] = new ConfigurationUsage($this->_propDict["recoveryKeyUsage"]);
                return $this->_propDict["recoveryKeyUsage"];
            }
        }
        return null;
    }

    /**
    * Sets the recoveryKeyUsage
    * Indicates whether users are allowed or required to generate a 256-bit recovery key for fixed or system disk. Possible values are: blocked, required, allowed, notConfigured.
    *
    * @param ConfigurationUsage $val The value to assign to the recoveryKeyUsage
    *
    * @return BitLockerRecoveryOptions The BitLockerRecoveryOptions
    */
    public function setRecoveryKeyUsage($val)
    {
        $this->_propDict["recoveryKeyUsage"] = $val;
         return $this;
    }

    /**
    * Gets the recoveryPasswordUsage
    * Indicates whether users are allowed or required to generate a 48-digit recovery password for fixed or system disk. Possible values are: blocked, required, allowed, notConfigured.
    *
    * @return ConfigurationUsage The recoveryPasswordUsage
    */
    public function getRecoveryPasswordUsage()
    {
        if (array_key_exists("recoveryPasswordUsage", $this->_propDict)) {
            if (is_a($this->_propDict["recoveryPasswordUsage"], "\Beta\Microsoft\Graph\Model\ConfigurationUsage")) {
                return $this->_propDict["recoveryPasswordUsage"];
            } else {
                $this->_propDict["recoveryPasswordUsage"] = new ConfigurationUsage($this->_propDict["recoveryPasswordUsage"]);
                return $this->_propDict["recoveryPasswordUsage"];
            }
        }
        return null;
    }

    /**
    * Sets the recoveryPasswordUsage
    * Indicates whether users are allowed or required to generate a 48-digit recovery password for fixed or system disk. Possible values are: blocked, required, allowed, notConfigured.
    *
    * @param ConfigurationUsage $val The value to assign to the recoveryPasswordUsage
    *
    * @return BitLockerRecoveryOptions The BitLockerRecoveryOptions
    */
    public function setRecoveryPasswordUsage($val)
    {
        $this->_propDict["recoveryPasswordUsage"] = $val;
         return $this;
    }
}
