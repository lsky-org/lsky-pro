<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* BitLockerFixedDrivePolicy File
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
* BitLockerFixedDrivePolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class BitLockerFixedDrivePolicy extends Entity
{

    /**
    * Gets the encryptionMethod
    * Select the encryption method for fixed drives. Possible values are: aesCbc128, aesCbc256, xtsAes128, xtsAes256.
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
    * Select the encryption method for fixed drives. Possible values are: aesCbc128, aesCbc256, xtsAes128, xtsAes256.
    *
    * @param BitLockerEncryptionMethod $val The value to assign to the encryptionMethod
    *
    * @return BitLockerFixedDrivePolicy The BitLockerFixedDrivePolicy
    */
    public function setEncryptionMethod($val)
    {
        $this->_propDict["encryptionMethod"] = $val;
         return $this;
    }

    /**
    * Gets the recoveryOptions
    * This policy setting allows you to control how BitLocker-protected fixed data drives are recovered in the absence of the required credentials. This policy setting is applied when you turn on BitLocker.
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
    * This policy setting allows you to control how BitLocker-protected fixed data drives are recovered in the absence of the required credentials. This policy setting is applied when you turn on BitLocker.
    *
    * @param BitLockerRecoveryOptions $val The value to assign to the recoveryOptions
    *
    * @return BitLockerFixedDrivePolicy The BitLockerFixedDrivePolicy
    */
    public function setRecoveryOptions($val)
    {
        $this->_propDict["recoveryOptions"] = $val;
         return $this;
    }
    /**
    * Gets the requireEncryptionForWriteAccess
    * This policy setting determines whether BitLocker protection is required for fixed data drives to be writable on a computer.
    *
    * @return bool The requireEncryptionForWriteAccess
    */
    public function getRequireEncryptionForWriteAccess()
    {
        if (array_key_exists("requireEncryptionForWriteAccess", $this->_propDict)) {
            return $this->_propDict["requireEncryptionForWriteAccess"];
        } else {
            return null;
        }
    }

    /**
    * Sets the requireEncryptionForWriteAccess
    * This policy setting determines whether BitLocker protection is required for fixed data drives to be writable on a computer.
    *
    * @param bool $val The value of the requireEncryptionForWriteAccess
    *
    * @return BitLockerFixedDrivePolicy
    */
    public function setRequireEncryptionForWriteAccess($val)
    {
        $this->_propDict["requireEncryptionForWriteAccess"] = $val;
        return $this;
    }
}
