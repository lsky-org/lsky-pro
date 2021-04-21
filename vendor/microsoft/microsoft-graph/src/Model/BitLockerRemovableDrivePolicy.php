<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* BitLockerRemovableDrivePolicy File
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
* BitLockerRemovableDrivePolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class BitLockerRemovableDrivePolicy extends Entity
{
    /**
    * Gets the blockCrossOrganizationWriteAccess
    * This policy setting determines whether BitLocker protection is required for removable data drives to be writable on a computer.
    *
    * @return bool The blockCrossOrganizationWriteAccess
    */
    public function getBlockCrossOrganizationWriteAccess()
    {
        if (array_key_exists("blockCrossOrganizationWriteAccess", $this->_propDict)) {
            return $this->_propDict["blockCrossOrganizationWriteAccess"];
        } else {
            return null;
        }
    }

    /**
    * Sets the blockCrossOrganizationWriteAccess
    * This policy setting determines whether BitLocker protection is required for removable data drives to be writable on a computer.
    *
    * @param bool $val The value of the blockCrossOrganizationWriteAccess
    *
    * @return BitLockerRemovableDrivePolicy
    */
    public function setBlockCrossOrganizationWriteAccess($val)
    {
        $this->_propDict["blockCrossOrganizationWriteAccess"] = $val;
        return $this;
    }

    /**
    * Gets the encryptionMethod
    * Select the encryption method for removable  drives. Possible values are: aesCbc128, aesCbc256, xtsAes128, xtsAes256.
    *
    * @return BitLockerEncryptionMethod The encryptionMethod
    */
    public function getEncryptionMethod()
    {
        if (array_key_exists("encryptionMethod", $this->_propDict)) {
            if (is_a($this->_propDict["encryptionMethod"], "\Microsoft\Graph\Model\BitLockerEncryptionMethod")) {
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
    * Select the encryption method for removable  drives. Possible values are: aesCbc128, aesCbc256, xtsAes128, xtsAes256.
    *
    * @param BitLockerEncryptionMethod $val The value to assign to the encryptionMethod
    *
    * @return BitLockerRemovableDrivePolicy The BitLockerRemovableDrivePolicy
    */
    public function setEncryptionMethod($val)
    {
        $this->_propDict["encryptionMethod"] = $val;
         return $this;
    }
    /**
    * Gets the requireEncryptionForWriteAccess
    * Indicates whether to block write access to devices configured in another organization.  If requireEncryptionForWriteAccess is false, this value does not affect.
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
    * Indicates whether to block write access to devices configured in another organization.  If requireEncryptionForWriteAccess is false, this value does not affect.
    *
    * @param bool $val The value of the requireEncryptionForWriteAccess
    *
    * @return BitLockerRemovableDrivePolicy
    */
    public function setRequireEncryptionForWriteAccess($val)
    {
        $this->_propDict["requireEncryptionForWriteAccess"] = $val;
        return $this;
    }
}
