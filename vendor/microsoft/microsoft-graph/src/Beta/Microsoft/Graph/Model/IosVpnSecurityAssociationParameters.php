<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IosVpnSecurityAssociationParameters File
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
* IosVpnSecurityAssociationParameters class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IosVpnSecurityAssociationParameters extends Entity
{
    /**
    * Gets the lifetimeInMinutes
    * Lifetime (minutes)
    *
    * @return int The lifetimeInMinutes
    */
    public function getLifetimeInMinutes()
    {
        if (array_key_exists("lifetimeInMinutes", $this->_propDict)) {
            return $this->_propDict["lifetimeInMinutes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the lifetimeInMinutes
    * Lifetime (minutes)
    *
    * @param int $val The value of the lifetimeInMinutes
    *
    * @return IosVpnSecurityAssociationParameters
    */
    public function setLifetimeInMinutes($val)
    {
        $this->_propDict["lifetimeInMinutes"] = $val;
        return $this;
    }
    /**
    * Gets the securityDiffieHellmanGroup
    * Diffie-Hellman Group
    *
    * @return int The securityDiffieHellmanGroup
    */
    public function getSecurityDiffieHellmanGroup()
    {
        if (array_key_exists("securityDiffieHellmanGroup", $this->_propDict)) {
            return $this->_propDict["securityDiffieHellmanGroup"];
        } else {
            return null;
        }
    }

    /**
    * Sets the securityDiffieHellmanGroup
    * Diffie-Hellman Group
    *
    * @param int $val The value of the securityDiffieHellmanGroup
    *
    * @return IosVpnSecurityAssociationParameters
    */
    public function setSecurityDiffieHellmanGroup($val)
    {
        $this->_propDict["securityDiffieHellmanGroup"] = $val;
        return $this;
    }

    /**
    * Gets the securityEncryptionAlgorithm
    * Encryption algorithm. Possible values are: aes256, des, tripleDes, aes128, aes128Gcm, aes256Gcm, aes192, aes192Gcm.
    *
    * @return VpnEncryptionAlgorithmType The securityEncryptionAlgorithm
    */
    public function getSecurityEncryptionAlgorithm()
    {
        if (array_key_exists("securityEncryptionAlgorithm", $this->_propDict)) {
            if (is_a($this->_propDict["securityEncryptionAlgorithm"], "\Beta\Microsoft\Graph\Model\VpnEncryptionAlgorithmType")) {
                return $this->_propDict["securityEncryptionAlgorithm"];
            } else {
                $this->_propDict["securityEncryptionAlgorithm"] = new VpnEncryptionAlgorithmType($this->_propDict["securityEncryptionAlgorithm"]);
                return $this->_propDict["securityEncryptionAlgorithm"];
            }
        }
        return null;
    }

    /**
    * Sets the securityEncryptionAlgorithm
    * Encryption algorithm. Possible values are: aes256, des, tripleDes, aes128, aes128Gcm, aes256Gcm, aes192, aes192Gcm.
    *
    * @param VpnEncryptionAlgorithmType $val The value to assign to the securityEncryptionAlgorithm
    *
    * @return IosVpnSecurityAssociationParameters The IosVpnSecurityAssociationParameters
    */
    public function setSecurityEncryptionAlgorithm($val)
    {
        $this->_propDict["securityEncryptionAlgorithm"] = $val;
         return $this;
    }

    /**
    * Gets the securityIntegrityAlgorithm
    * Integrity algorithm. Possible values are: sha2_256, sha1_96, sha1_160, sha2_384, sha2_512, md5.
    *
    * @return VpnIntegrityAlgorithmType The securityIntegrityAlgorithm
    */
    public function getSecurityIntegrityAlgorithm()
    {
        if (array_key_exists("securityIntegrityAlgorithm", $this->_propDict)) {
            if (is_a($this->_propDict["securityIntegrityAlgorithm"], "\Beta\Microsoft\Graph\Model\VpnIntegrityAlgorithmType")) {
                return $this->_propDict["securityIntegrityAlgorithm"];
            } else {
                $this->_propDict["securityIntegrityAlgorithm"] = new VpnIntegrityAlgorithmType($this->_propDict["securityIntegrityAlgorithm"]);
                return $this->_propDict["securityIntegrityAlgorithm"];
            }
        }
        return null;
    }

    /**
    * Sets the securityIntegrityAlgorithm
    * Integrity algorithm. Possible values are: sha2_256, sha1_96, sha1_160, sha2_384, sha2_512, md5.
    *
    * @param VpnIntegrityAlgorithmType $val The value to assign to the securityIntegrityAlgorithm
    *
    * @return IosVpnSecurityAssociationParameters The IosVpnSecurityAssociationParameters
    */
    public function setSecurityIntegrityAlgorithm($val)
    {
        $this->_propDict["securityIntegrityAlgorithm"] = $val;
         return $this;
    }
}
