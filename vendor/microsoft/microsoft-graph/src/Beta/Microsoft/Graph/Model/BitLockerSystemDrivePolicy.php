<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* BitLockerSystemDrivePolicy File
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
* BitLockerSystemDrivePolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class BitLockerSystemDrivePolicy extends Entity
{

    /**
    * Gets the encryptionMethod
    * Select the encryption method for operating system drives. Possible values are: aesCbc128, aesCbc256, xtsAes128, xtsAes256.
    *
    * @return BitLockerEncryptionMethod The encryptionMethod
    */
    public function getEncryptionMethod()
    {
        if (array_key_exists("encryptionMethod", $this->_propDict)) {
            if (is_a($this->_propDict["encryptionMethod"], "\Beta\Microsoft\Graph\Model\BitLockerEncryptionMethod")) {
                return $this->_propDict["encryptionMethod"];
            } else {
                $this->_propDict["encryptionMethod"] = new BitLockerEncryptionMethod($this->_propDict["encryptionMethod"]);
                return $this->_propDict["encryptionMethod"];
            }
        }
        return null;
    }

    /**
    * Sets the encryptionMethod
    * Select the encryption method for operating system drives. Possible values are: aesCbc128, aesCbc256, xtsAes128, xtsAes256.
    *
    * @param BitLockerEncryptionMethod $val The value to assign to the encryptionMethod
    *
    * @return BitLockerSystemDrivePolicy The BitLockerSystemDrivePolicy
    */
    public function setEncryptionMethod($val)
    {
        $this->_propDict["encryptionMethod"] = $val;
         return $this;
    }
    /**
    * Gets the minimumPinLength
    * Indicates the minimum length of startup pin. Valid values 4 to 20
    *
    * @return int The minimumPinLength
    */
    public function getMinimumPinLength()
    {
        if (array_key_exists("minimumPinLength", $this->_propDict)) {
            return $this->_propDict["minimumPinLength"];
        } else {
            return null;
        }
    }

    /**
    * Sets the minimumPinLength
    * Indicates the minimum length of startup pin. Valid values 4 to 20
    *
    * @param int $val The value of the minimumPinLength
    *
    * @return BitLockerSystemDrivePolicy
    */
    public function setMinimumPinLength($val)
    {
        $this->_propDict["minimumPinLength"] = $val;
        return $this;
    }
    /**
    * Gets the prebootRecoveryEnableMessageAndUrl
    * Enable pre-boot recovery message and Url. If requireStartupAuthentication is false, this value does not affect.
    *
    * @return bool The prebootRecoveryEnableMessageAndUrl
    */
    public function getPrebootRecoveryEnableMessageAndUrl()
    {
        if (array_key_exists("prebootRecoveryEnableMessageAndUrl", $this->_propDict)) {
            return $this->_propDict["prebootRecoveryEnableMessageAndUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the prebootRecoveryEnableMessageAndUrl
    * Enable pre-boot recovery message and Url. If requireStartupAuthentication is false, this value does not affect.
    *
    * @param bool $val The value of the prebootRecoveryEnableMessageAndUrl
    *
    * @return BitLockerSystemDrivePolicy
    */
    public function setPrebootRecoveryEnableMessageAndUrl($val)
    {
        $this->_propDict["prebootRecoveryEnableMessageAndUrl"] = $val;
        return $this;
    }
    /**
    * Gets the prebootRecoveryMessage
    * Defines a custom recovery message.
    *
    * @return string The prebootRecoveryMessage
    */
    public function getPrebootRecoveryMessage()
    {
        if (array_key_exists("prebootRecoveryMessage", $this->_propDict)) {
            return $this->_propDict["prebootRecoveryMessage"];
        } else {
            return null;
        }
    }

    /**
    * Sets the prebootRecoveryMessage
    * Defines a custom recovery message.
    *
    * @param string $val The value of the prebootRecoveryMessage
    *
    * @return BitLockerSystemDrivePolicy
    */
    public function setPrebootRecoveryMessage($val)
    {
        $this->_propDict["prebootRecoveryMessage"] = $val;
        return $this;
    }
    /**
    * Gets the prebootRecoveryUrl
    * Defines a custom recovery URL.
    *
    * @return string The prebootRecoveryUrl
    */
    public function getPrebootRecoveryUrl()
    {
        if (array_key_exists("prebootRecoveryUrl", $this->_propDict)) {
            return $this->_propDict["prebootRecoveryUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the prebootRecoveryUrl
    * Defines a custom recovery URL.
    *
    * @param string $val The value of the prebootRecoveryUrl
    *
    * @return BitLockerSystemDrivePolicy
    */
    public function setPrebootRecoveryUrl($val)
    {
        $this->_propDict["prebootRecoveryUrl"] = $val;
        return $this;
    }

    /**
    * Gets the recoveryOptions
    * Allows to recover BitLocker encrypted operating system drives in the absence of the required startup key information. This policy setting is applied when you turn on BitLocker.
    *
    * @return BitLockerRecoveryOptions The recoveryOptions
    */
    public function getRecoveryOptions()
    {
        if (array_key_exists("recoveryOptions", $this->_propDict)) {
            if (is_a($this->_propDict["recoveryOptions"], "\Beta\Microsoft\Graph\Model\BitLockerRecoveryOptions")) {
                return $this->_propDict["recoveryOptions"];
            } else {
                $this->_propDict["recoveryOptions"] = new BitLockerRecoveryOptions($this->_propDict["recoveryOptions"]);
                return $this->_propDict["recoveryOptions"];
            }
        }
        return null;
    }

    /**
    * Sets the recoveryOptions
    * Allows to recover BitLocker encrypted operating system drives in the absence of the required startup key information. This policy setting is applied when you turn on BitLocker.
    *
    * @param BitLockerRecoveryOptions $val The value to assign to the recoveryOptions
    *
    * @return BitLockerSystemDrivePolicy The BitLockerSystemDrivePolicy
    */
    public function setRecoveryOptions($val)
    {
        $this->_propDict["recoveryOptions"] = $val;
         return $this;
    }
    /**
    * Gets the startupAuthenticationBlockWithoutTpmChip
    * Indicates whether to allow BitLocker without a compatible TPM (requires a password or a startup key on a USB flash drive).
    *
    * @return bool The startupAuthenticationBlockWithoutTpmChip
    */
    public function getStartupAuthenticationBlockWithoutTpmChip()
    {
        if (array_key_exists("startupAuthenticationBlockWithoutTpmChip", $this->_propDict)) {
            return $this->_propDict["startupAuthenticationBlockWithoutTpmChip"];
        } else {
            return null;
        }
    }

    /**
    * Sets the startupAuthenticationBlockWithoutTpmChip
    * Indicates whether to allow BitLocker without a compatible TPM (requires a password or a startup key on a USB flash drive).
    *
    * @param bool $val The value of the startupAuthenticationBlockWithoutTpmChip
    *
    * @return BitLockerSystemDrivePolicy
    */
    public function setStartupAuthenticationBlockWithoutTpmChip($val)
    {
        $this->_propDict["startupAuthenticationBlockWithoutTpmChip"] = $val;
        return $this;
    }
    /**
    * Gets the startupAuthenticationRequired
    * Require additional authentication at startup.
    *
    * @return bool The startupAuthenticationRequired
    */
    public function getStartupAuthenticationRequired()
    {
        if (array_key_exists("startupAuthenticationRequired", $this->_propDict)) {
            return $this->_propDict["startupAuthenticationRequired"];
        } else {
            return null;
        }
    }

    /**
    * Sets the startupAuthenticationRequired
    * Require additional authentication at startup.
    *
    * @param bool $val The value of the startupAuthenticationRequired
    *
    * @return BitLockerSystemDrivePolicy
    */
    public function setStartupAuthenticationRequired($val)
    {
        $this->_propDict["startupAuthenticationRequired"] = $val;
        return $this;
    }

    /**
    * Gets the startupAuthenticationTpmKeyUsage
    * Indicates if TPM startup key is allowed/required/disallowed. Possible values are: blocked, required, allowed, notConfigured.
    *
    * @return ConfigurationUsage The startupAuthenticationTpmKeyUsage
    */
    public function getStartupAuthenticationTpmKeyUsage()
    {
        if (array_key_exists("startupAuthenticationTpmKeyUsage", $this->_propDict)) {
            if (is_a($this->_propDict["startupAuthenticationTpmKeyUsage"], "\Beta\Microsoft\Graph\Model\ConfigurationUsage")) {
                return $this->_propDict["startupAuthenticationTpmKeyUsage"];
            } else {
                $this->_propDict["startupAuthenticationTpmKeyUsage"] = new ConfigurationUsage($this->_propDict["startupAuthenticationTpmKeyUsage"]);
                return $this->_propDict["startupAuthenticationTpmKeyUsage"];
            }
        }
        return null;
    }

    /**
    * Sets the startupAuthenticationTpmKeyUsage
    * Indicates if TPM startup key is allowed/required/disallowed. Possible values are: blocked, required, allowed, notConfigured.
    *
    * @param ConfigurationUsage $val The value to assign to the startupAuthenticationTpmKeyUsage
    *
    * @return BitLockerSystemDrivePolicy The BitLockerSystemDrivePolicy
    */
    public function setStartupAuthenticationTpmKeyUsage($val)
    {
        $this->_propDict["startupAuthenticationTpmKeyUsage"] = $val;
         return $this;
    }

    /**
    * Gets the startupAuthenticationTpmPinAndKeyUsage
    * Indicates if TPM startup pin key and key are allowed/required/disallowed. Possible values are: blocked, required, allowed, notConfigured.
    *
    * @return ConfigurationUsage The startupAuthenticationTpmPinAndKeyUsage
    */
    public function getStartupAuthenticationTpmPinAndKeyUsage()
    {
        if (array_key_exists("startupAuthenticationTpmPinAndKeyUsage", $this->_propDict)) {
            if (is_a($this->_propDict["startupAuthenticationTpmPinAndKeyUsage"], "\Beta\Microsoft\Graph\Model\ConfigurationUsage")) {
                return $this->_propDict["startupAuthenticationTpmPinAndKeyUsage"];
            } else {
                $this->_propDict["startupAuthenticationTpmPinAndKeyUsage"] = new ConfigurationUsage($this->_propDict["startupAuthenticationTpmPinAndKeyUsage"]);
                return $this->_propDict["startupAuthenticationTpmPinAndKeyUsage"];
            }
        }
        return null;
    }

    /**
    * Sets the startupAuthenticationTpmPinAndKeyUsage
    * Indicates if TPM startup pin key and key are allowed/required/disallowed. Possible values are: blocked, required, allowed, notConfigured.
    *
    * @param ConfigurationUsage $val The value to assign to the startupAuthenticationTpmPinAndKeyUsage
    *
    * @return BitLockerSystemDrivePolicy The BitLockerSystemDrivePolicy
    */
    public function setStartupAuthenticationTpmPinAndKeyUsage($val)
    {
        $this->_propDict["startupAuthenticationTpmPinAndKeyUsage"] = $val;
         return $this;
    }

    /**
    * Gets the startupAuthenticationTpmPinUsage
    * Indicates if TPM startup pin is allowed/required/disallowed. Possible values are: blocked, required, allowed, notConfigured.
    *
    * @return ConfigurationUsage The startupAuthenticationTpmPinUsage
    */
    public function getStartupAuthenticationTpmPinUsage()
    {
        if (array_key_exists("startupAuthenticationTpmPinUsage", $this->_propDict)) {
            if (is_a($this->_propDict["startupAuthenticationTpmPinUsage"], "\Beta\Microsoft\Graph\Model\ConfigurationUsage")) {
                return $this->_propDict["startupAuthenticationTpmPinUsage"];
            } else {
                $this->_propDict["startupAuthenticationTpmPinUsage"] = new ConfigurationUsage($this->_propDict["startupAuthenticationTpmPinUsage"]);
                return $this->_propDict["startupAuthenticationTpmPinUsage"];
            }
        }
        return null;
    }

    /**
    * Sets the startupAuthenticationTpmPinUsage
    * Indicates if TPM startup pin is allowed/required/disallowed. Possible values are: blocked, required, allowed, notConfigured.
    *
    * @param ConfigurationUsage $val The value to assign to the startupAuthenticationTpmPinUsage
    *
    * @return BitLockerSystemDrivePolicy The BitLockerSystemDrivePolicy
    */
    public function setStartupAuthenticationTpmPinUsage($val)
    {
        $this->_propDict["startupAuthenticationTpmPinUsage"] = $val;
         return $this;
    }

    /**
    * Gets the startupAuthenticationTpmUsage
    * Indicates if TPM startup is allowed/required/disallowed. Possible values are: blocked, required, allowed, notConfigured.
    *
    * @return ConfigurationUsage The startupAuthenticationTpmUsage
    */
    public function getStartupAuthenticationTpmUsage()
    {
        if (array_key_exists("startupAuthenticationTpmUsage", $this->_propDict)) {
            if (is_a($this->_propDict["startupAuthenticationTpmUsage"], "\Beta\Microsoft\Graph\Model\ConfigurationUsage")) {
                return $this->_propDict["startupAuthenticationTpmUsage"];
            } else {
                $this->_propDict["startupAuthenticationTpmUsage"] = new ConfigurationUsage($this->_propDict["startupAuthenticationTpmUsage"]);
                return $this->_propDict["startupAuthenticationTpmUsage"];
            }
        }
        return null;
    }

    /**
    * Sets the startupAuthenticationTpmUsage
    * Indicates if TPM startup is allowed/required/disallowed. Possible values are: blocked, required, allowed, notConfigured.
    *
    * @param ConfigurationUsage $val The value to assign to the startupAuthenticationTpmUsage
    *
    * @return BitLockerSystemDrivePolicy The BitLockerSystemDrivePolicy
    */
    public function setStartupAuthenticationTpmUsage($val)
    {
        $this->_propDict["startupAuthenticationTpmUsage"] = $val;
         return $this;
    }
}
