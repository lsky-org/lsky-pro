<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserPFXCertificate File
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
* UserPFXCertificate class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserPFXCertificate extends Entity
{
    /**
    * Gets the createdDateTime
    * Date/time when this PFX certificate was imported.
    *
    * @return \DateTime The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime")) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the createdDateTime
    * Date/time when this PFX certificate was imported.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return UserPFXCertificate
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the encryptedPfxBlob
    * Encrypted PFX blob.
    *
    * @return \GuzzleHttp\Psr7\Stream The encryptedPfxBlob
    */
    public function getEncryptedPfxBlob()
    {
        if (array_key_exists("encryptedPfxBlob", $this->_propDict)) {
            if (is_a($this->_propDict["encryptedPfxBlob"], "\GuzzleHttp\Psr7\Stream")) {
                return $this->_propDict["encryptedPfxBlob"];
            } else {
                $this->_propDict["encryptedPfxBlob"] = \GuzzleHttp\Psr7\stream_for($this->_propDict["encryptedPfxBlob"]);
                return $this->_propDict["encryptedPfxBlob"];
            }
        }
        return null;
    }
    
    /**
    * Sets the encryptedPfxBlob
    * Encrypted PFX blob.
    *
    * @param \GuzzleHttp\Psr7\Stream $val The encryptedPfxBlob
    *
    * @return UserPFXCertificate
    */
    public function setEncryptedPfxBlob($val)
    {
        $this->_propDict["encryptedPfxBlob"] = $val;
        return $this;
    }
    
    /**
    * Gets the encryptedPfxPassword
    * Encrypted PFX password.
    *
    * @return string The encryptedPfxPassword
    */
    public function getEncryptedPfxPassword()
    {
        if (array_key_exists("encryptedPfxPassword", $this->_propDict)) {
            return $this->_propDict["encryptedPfxPassword"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the encryptedPfxPassword
    * Encrypted PFX password.
    *
    * @param string $val The encryptedPfxPassword
    *
    * @return UserPFXCertificate
    */
    public function setEncryptedPfxPassword($val)
    {
        $this->_propDict["encryptedPfxPassword"] = $val;
        return $this;
    }
    
    /**
    * Gets the expirationDateTime
    * Certificate's validity expiration date/time.
    *
    * @return \DateTime The expirationDateTime
    */
    public function getExpirationDateTime()
    {
        if (array_key_exists("expirationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["expirationDateTime"], "\DateTime")) {
                return $this->_propDict["expirationDateTime"];
            } else {
                $this->_propDict["expirationDateTime"] = new \DateTime($this->_propDict["expirationDateTime"]);
                return $this->_propDict["expirationDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the expirationDateTime
    * Certificate's validity expiration date/time.
    *
    * @param \DateTime $val The expirationDateTime
    *
    * @return UserPFXCertificate
    */
    public function setExpirationDateTime($val)
    {
        $this->_propDict["expirationDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the intendedPurpose
    * Certificate's intended purpose from the point-of-view of deployment. Possible values are: unassigned, smimeEncryption, smimeSigning, vpn, wifi.
    *
    * @return UserPfxIntendedPurpose The intendedPurpose
    */
    public function getIntendedPurpose()
    {
        if (array_key_exists("intendedPurpose", $this->_propDict)) {
            if (is_a($this->_propDict["intendedPurpose"], "\Beta\Microsoft\Graph\Model\UserPfxIntendedPurpose")) {
                return $this->_propDict["intendedPurpose"];
            } else {
                $this->_propDict["intendedPurpose"] = new UserPfxIntendedPurpose($this->_propDict["intendedPurpose"]);
                return $this->_propDict["intendedPurpose"];
            }
        }
        return null;
    }
    
    /**
    * Sets the intendedPurpose
    * Certificate's intended purpose from the point-of-view of deployment. Possible values are: unassigned, smimeEncryption, smimeSigning, vpn, wifi.
    *
    * @param UserPfxIntendedPurpose $val The intendedPurpose
    *
    * @return UserPFXCertificate
    */
    public function setIntendedPurpose($val)
    {
        $this->_propDict["intendedPurpose"] = $val;
        return $this;
    }
    
    /**
    * Gets the keyName
    * Name of the key (within the provider) used to encrypt the blob.
    *
    * @return string The keyName
    */
    public function getKeyName()
    {
        if (array_key_exists("keyName", $this->_propDict)) {
            return $this->_propDict["keyName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the keyName
    * Name of the key (within the provider) used to encrypt the blob.
    *
    * @param string $val The keyName
    *
    * @return UserPFXCertificate
    */
    public function setKeyName($val)
    {
        $this->_propDict["keyName"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastModifiedDateTime
    * Date/time when this PFX certificate was last modified.
    *
    * @return \DateTime The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedDateTime"], "\DateTime")) {
                return $this->_propDict["lastModifiedDateTime"];
            } else {
                $this->_propDict["lastModifiedDateTime"] = new \DateTime($this->_propDict["lastModifiedDateTime"]);
                return $this->_propDict["lastModifiedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastModifiedDateTime
    * Date/time when this PFX certificate was last modified.
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return UserPFXCertificate
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the paddingScheme
    * Padding scheme used by the provider during encryption/decryption. Possible values are: none, pkcs1, oaepSha1, oaepSha256, oaepSha384, oaepSha512.
    *
    * @return UserPfxPaddingScheme The paddingScheme
    */
    public function getPaddingScheme()
    {
        if (array_key_exists("paddingScheme", $this->_propDict)) {
            if (is_a($this->_propDict["paddingScheme"], "\Beta\Microsoft\Graph\Model\UserPfxPaddingScheme")) {
                return $this->_propDict["paddingScheme"];
            } else {
                $this->_propDict["paddingScheme"] = new UserPfxPaddingScheme($this->_propDict["paddingScheme"]);
                return $this->_propDict["paddingScheme"];
            }
        }
        return null;
    }
    
    /**
    * Sets the paddingScheme
    * Padding scheme used by the provider during encryption/decryption. Possible values are: none, pkcs1, oaepSha1, oaepSha256, oaepSha384, oaepSha512.
    *
    * @param UserPfxPaddingScheme $val The paddingScheme
    *
    * @return UserPFXCertificate
    */
    public function setPaddingScheme($val)
    {
        $this->_propDict["paddingScheme"] = $val;
        return $this;
    }
    
    /**
    * Gets the providerName
    * Crypto provider used to encrypt this blob.
    *
    * @return string The providerName
    */
    public function getProviderName()
    {
        if (array_key_exists("providerName", $this->_propDict)) {
            return $this->_propDict["providerName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the providerName
    * Crypto provider used to encrypt this blob.
    *
    * @param string $val The providerName
    *
    * @return UserPFXCertificate
    */
    public function setProviderName($val)
    {
        $this->_propDict["providerName"] = $val;
        return $this;
    }
    
    /**
    * Gets the startDateTime
    * Certificate's validity start date/time.
    *
    * @return \DateTime The startDateTime
    */
    public function getStartDateTime()
    {
        if (array_key_exists("startDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["startDateTime"], "\DateTime")) {
                return $this->_propDict["startDateTime"];
            } else {
                $this->_propDict["startDateTime"] = new \DateTime($this->_propDict["startDateTime"]);
                return $this->_propDict["startDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the startDateTime
    * Certificate's validity start date/time.
    *
    * @param \DateTime $val The startDateTime
    *
    * @return UserPFXCertificate
    */
    public function setStartDateTime($val)
    {
        $this->_propDict["startDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the thumbprint
    * SHA-1 thumbprint of the PFX certificate.
    *
    * @return string The thumbprint
    */
    public function getThumbprint()
    {
        if (array_key_exists("thumbprint", $this->_propDict)) {
            return $this->_propDict["thumbprint"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the thumbprint
    * SHA-1 thumbprint of the PFX certificate.
    *
    * @param string $val The thumbprint
    *
    * @return UserPFXCertificate
    */
    public function setThumbprint($val)
    {
        $this->_propDict["thumbprint"] = $val;
        return $this;
    }
    
    /**
    * Gets the userPrincipalName
    * User Principal Name of the PFX certificate.
    *
    * @return string The userPrincipalName
    */
    public function getUserPrincipalName()
    {
        if (array_key_exists("userPrincipalName", $this->_propDict)) {
            return $this->_propDict["userPrincipalName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userPrincipalName
    * User Principal Name of the PFX certificate.
    *
    * @param string $val The userPrincipalName
    *
    * @return UserPFXCertificate
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }
    
}
