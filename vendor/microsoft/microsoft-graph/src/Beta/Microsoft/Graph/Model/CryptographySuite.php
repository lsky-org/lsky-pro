<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CryptographySuite File
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
* CryptographySuite class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CryptographySuite extends Entity
{

    /**
    * Gets the authenticationTransformConstants
    * Authentication Transform Constants. Possible values are: md5_96, sha1_96, sha_256_128, aes128Gcm, aes192Gcm, aes256Gcm.
    *
    * @return AuthenticationTransformConstant The authenticationTransformConstants
    */
    public function getAuthenticationTransformConstants()
    {
        if (array_key_exists("authenticationTransformConstants", $this->_propDict)) {
            if (is_a($this->_propDict["authenticationTransformConstants"], "\Beta\Microsoft\Graph\Model\AuthenticationTransformConstant")) {
                return $this->_propDict["authenticationTransformConstants"];
            } else {
                $this->_propDict["authenticationTransformConstants"] = new AuthenticationTransformConstant($this->_propDict["authenticationTransformConstants"]);
                return $this->_propDict["authenticationTransformConstants"];
            }
        }
        return null;
    }

    /**
    * Sets the authenticationTransformConstants
    * Authentication Transform Constants. Possible values are: md5_96, sha1_96, sha_256_128, aes128Gcm, aes192Gcm, aes256Gcm.
    *
    * @param AuthenticationTransformConstant $val The value to assign to the authenticationTransformConstants
    *
    * @return CryptographySuite The CryptographySuite
    */
    public function setAuthenticationTransformConstants($val)
    {
        $this->_propDict["authenticationTransformConstants"] = $val;
         return $this;
    }

    /**
    * Gets the cipherTransformConstants
    * Cipher Transform Constants. Possible values are: aes256, des, tripleDes, aes128, aes128Gcm, aes256Gcm, aes192, aes192Gcm.
    *
    * @return VpnEncryptionAlgorithmType The cipherTransformConstants
    */
    public function getCipherTransformConstants()
    {
        if (array_key_exists("cipherTransformConstants", $this->_propDict)) {
            if (is_a($this->_propDict["cipherTransformConstants"], "\Beta\Microsoft\Graph\Model\VpnEncryptionAlgorithmType")) {
                return $this->_propDict["cipherTransformConstants"];
            } else {
                $this->_propDict["cipherTransformConstants"] = new VpnEncryptionAlgorithmType($this->_propDict["cipherTransformConstants"]);
                return $this->_propDict["cipherTransformConstants"];
            }
        }
        return null;
    }

    /**
    * Sets the cipherTransformConstants
    * Cipher Transform Constants. Possible values are: aes256, des, tripleDes, aes128, aes128Gcm, aes256Gcm, aes192, aes192Gcm.
    *
    * @param VpnEncryptionAlgorithmType $val The value to assign to the cipherTransformConstants
    *
    * @return CryptographySuite The CryptographySuite
    */
    public function setCipherTransformConstants($val)
    {
        $this->_propDict["cipherTransformConstants"] = $val;
         return $this;
    }

    /**
    * Gets the dhGroup
    * Diffie Hellman Group. Possible values are: group1, group2, group14, ecp256, ecp384, group24.
    *
    * @return DiffieHellmanGroup The dhGroup
    */
    public function getDhGroup()
    {
        if (array_key_exists("dhGroup", $this->_propDict)) {
            if (is_a($this->_propDict["dhGroup"], "\Beta\Microsoft\Graph\Model\DiffieHellmanGroup")) {
                return $this->_propDict["dhGroup"];
            } else {
                $this->_propDict["dhGroup"] = new DiffieHellmanGroup($this->_propDict["dhGroup"]);
                return $this->_propDict["dhGroup"];
            }
        }
        return null;
    }

    /**
    * Sets the dhGroup
    * Diffie Hellman Group. Possible values are: group1, group2, group14, ecp256, ecp384, group24.
    *
    * @param DiffieHellmanGroup $val The value to assign to the dhGroup
    *
    * @return CryptographySuite The CryptographySuite
    */
    public function setDhGroup($val)
    {
        $this->_propDict["dhGroup"] = $val;
         return $this;
    }

    /**
    * Gets the encryptionMethod
    * Encryption Method. Possible values are: aes256, des, tripleDes, aes128, aes128Gcm, aes256Gcm, aes192, aes192Gcm.
    *
    * @return VpnEncryptionAlgorithmType The encryptionMethod
    */
    public function getEncryptionMethod()
    {
        if (array_key_exists("encryptionMethod", $this->_propDict)) {
            if (is_a($this->_propDict["encryptionMethod"], "\Beta\Microsoft\Graph\Model\VpnEncryptionAlgorithmType")) {
                return $this->_propDict["encryptionMethod"];
            } else {
                $this->_propDict["encryptionMethod"] = new VpnEncryptionAlgorithmType($this->_propDict["encryptionMethod"]);
                return $this->_propDict["encryptionMethod"];
            }
        }
        return null;
    }

    /**
    * Sets the encryptionMethod
    * Encryption Method. Possible values are: aes256, des, tripleDes, aes128, aes128Gcm, aes256Gcm, aes192, aes192Gcm.
    *
    * @param VpnEncryptionAlgorithmType $val The value to assign to the encryptionMethod
    *
    * @return CryptographySuite The CryptographySuite
    */
    public function setEncryptionMethod($val)
    {
        $this->_propDict["encryptionMethod"] = $val;
         return $this;
    }

    /**
    * Gets the integrityCheckMethod
    * Integrity Check Method. Possible values are: sha2_256, sha1_96, sha1_160, sha2_384, sha2_512, md5.
    *
    * @return VpnIntegrityAlgorithmType The integrityCheckMethod
    */
    public function getIntegrityCheckMethod()
    {
        if (array_key_exists("integrityCheckMethod", $this->_propDict)) {
            if (is_a($this->_propDict["integrityCheckMethod"], "\Beta\Microsoft\Graph\Model\VpnIntegrityAlgorithmType")) {
                return $this->_propDict["integrityCheckMethod"];
            } else {
                $this->_propDict["integrityCheckMethod"] = new VpnIntegrityAlgorithmType($this->_propDict["integrityCheckMethod"]);
                return $this->_propDict["integrityCheckMethod"];
            }
        }
        return null;
    }

    /**
    * Sets the integrityCheckMethod
    * Integrity Check Method. Possible values are: sha2_256, sha1_96, sha1_160, sha2_384, sha2_512, md5.
    *
    * @param VpnIntegrityAlgorithmType $val The value to assign to the integrityCheckMethod
    *
    * @return CryptographySuite The CryptographySuite
    */
    public function setIntegrityCheckMethod($val)
    {
        $this->_propDict["integrityCheckMethod"] = $val;
         return $this;
    }

    /**
    * Gets the pfsGroup
    * Perfect Forward Secrecy Group. Possible values are: pfs1, pfs2, pfs2048, ecp256, ecp384, pfsMM, pfs24.
    *
    * @return PerfectForwardSecrecyGroup The pfsGroup
    */
    public function getPfsGroup()
    {
        if (array_key_exists("pfsGroup", $this->_propDict)) {
            if (is_a($this->_propDict["pfsGroup"], "\Beta\Microsoft\Graph\Model\PerfectForwardSecrecyGroup")) {
                return $this->_propDict["pfsGroup"];
            } else {
                $this->_propDict["pfsGroup"] = new PerfectForwardSecrecyGroup($this->_propDict["pfsGroup"]);
                return $this->_propDict["pfsGroup"];
            }
        }
        return null;
    }

    /**
    * Sets the pfsGroup
    * Perfect Forward Secrecy Group. Possible values are: pfs1, pfs2, pfs2048, ecp256, ecp384, pfsMM, pfs24.
    *
    * @param PerfectForwardSecrecyGroup $val The value to assign to the pfsGroup
    *
    * @return CryptographySuite The CryptographySuite
    */
    public function setPfsGroup($val)
    {
        $this->_propDict["pfsGroup"] = $val;
         return $this;
    }
}
