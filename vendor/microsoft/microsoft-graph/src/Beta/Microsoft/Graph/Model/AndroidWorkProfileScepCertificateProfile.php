<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidWorkProfileScepCertificateProfile File
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
* AndroidWorkProfileScepCertificateProfile class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AndroidWorkProfileScepCertificateProfile extends AndroidWorkProfileCertificateProfileBase
{
    /**
    * Gets the certificateStore
    * Target store certificate. Possible values are: user, machine.
    *
    * @return CertificateStore The certificateStore
    */
    public function getCertificateStore()
    {
        if (array_key_exists("certificateStore", $this->_propDict)) {
            if (is_a($this->_propDict["certificateStore"], "\Beta\Microsoft\Graph\Model\CertificateStore")) {
                return $this->_propDict["certificateStore"];
            } else {
                $this->_propDict["certificateStore"] = new CertificateStore($this->_propDict["certificateStore"]);
                return $this->_propDict["certificateStore"];
            }
        }
        return null;
    }
    
    /**
    * Sets the certificateStore
    * Target store certificate. Possible values are: user, machine.
    *
    * @param CertificateStore $val The certificateStore
    *
    * @return AndroidWorkProfileScepCertificateProfile
    */
    public function setCertificateStore($val)
    {
        $this->_propDict["certificateStore"] = $val;
        return $this;
    }
    

     /** 
     * Gets the customSubjectAlternativeNames
    * Custom Subject Alternative Name Settings. This collection can contain a maximum of 500 elements.
     *
     * @return array The customSubjectAlternativeNames
     */
    public function getCustomSubjectAlternativeNames()
    {
        if (array_key_exists("customSubjectAlternativeNames", $this->_propDict)) {
           return $this->_propDict["customSubjectAlternativeNames"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the customSubjectAlternativeNames
    * Custom Subject Alternative Name Settings. This collection can contain a maximum of 500 elements.
    *
    * @param CustomSubjectAlternativeName $val The customSubjectAlternativeNames
    *
    * @return AndroidWorkProfileScepCertificateProfile
    */
    public function setCustomSubjectAlternativeNames($val)
    {
		$this->_propDict["customSubjectAlternativeNames"] = $val;
        return $this;
    }
    
    /**
    * Gets the hashAlgorithm
    * SCEP Hash Algorithm. Possible values are: sha1, sha2.
    *
    * @return HashAlgorithms The hashAlgorithm
    */
    public function getHashAlgorithm()
    {
        if (array_key_exists("hashAlgorithm", $this->_propDict)) {
            if (is_a($this->_propDict["hashAlgorithm"], "\Beta\Microsoft\Graph\Model\HashAlgorithms")) {
                return $this->_propDict["hashAlgorithm"];
            } else {
                $this->_propDict["hashAlgorithm"] = new HashAlgorithms($this->_propDict["hashAlgorithm"]);
                return $this->_propDict["hashAlgorithm"];
            }
        }
        return null;
    }
    
    /**
    * Sets the hashAlgorithm
    * SCEP Hash Algorithm. Possible values are: sha1, sha2.
    *
    * @param HashAlgorithms $val The hashAlgorithm
    *
    * @return AndroidWorkProfileScepCertificateProfile
    */
    public function setHashAlgorithm($val)
    {
        $this->_propDict["hashAlgorithm"] = $val;
        return $this;
    }
    
    /**
    * Gets the keySize
    * SCEP Key Size. Possible values are: size1024, size2048, size4096.
    *
    * @return KeySize The keySize
    */
    public function getKeySize()
    {
        if (array_key_exists("keySize", $this->_propDict)) {
            if (is_a($this->_propDict["keySize"], "\Beta\Microsoft\Graph\Model\KeySize")) {
                return $this->_propDict["keySize"];
            } else {
                $this->_propDict["keySize"] = new KeySize($this->_propDict["keySize"]);
                return $this->_propDict["keySize"];
            }
        }
        return null;
    }
    
    /**
    * Sets the keySize
    * SCEP Key Size. Possible values are: size1024, size2048, size4096.
    *
    * @param KeySize $val The keySize
    *
    * @return AndroidWorkProfileScepCertificateProfile
    */
    public function setKeySize($val)
    {
        $this->_propDict["keySize"] = $val;
        return $this;
    }
    
    /**
    * Gets the keyUsage
    * SCEP Key Usage. Possible values are: keyEncipherment, digitalSignature.
    *
    * @return KeyUsages The keyUsage
    */
    public function getKeyUsage()
    {
        if (array_key_exists("keyUsage", $this->_propDict)) {
            if (is_a($this->_propDict["keyUsage"], "\Beta\Microsoft\Graph\Model\KeyUsages")) {
                return $this->_propDict["keyUsage"];
            } else {
                $this->_propDict["keyUsage"] = new KeyUsages($this->_propDict["keyUsage"]);
                return $this->_propDict["keyUsage"];
            }
        }
        return null;
    }
    
    /**
    * Sets the keyUsage
    * SCEP Key Usage. Possible values are: keyEncipherment, digitalSignature.
    *
    * @param KeyUsages $val The keyUsage
    *
    * @return AndroidWorkProfileScepCertificateProfile
    */
    public function setKeyUsage($val)
    {
        $this->_propDict["keyUsage"] = $val;
        return $this;
    }
    
    /**
    * Gets the scepServerUrls
    * SCEP Server Url(s)
    *
    * @return string The scepServerUrls
    */
    public function getScepServerUrls()
    {
        if (array_key_exists("scepServerUrls", $this->_propDict)) {
            return $this->_propDict["scepServerUrls"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the scepServerUrls
    * SCEP Server Url(s)
    *
    * @param string $val The scepServerUrls
    *
    * @return AndroidWorkProfileScepCertificateProfile
    */
    public function setScepServerUrls($val)
    {
        $this->_propDict["scepServerUrls"] = $val;
        return $this;
    }
    
    /**
    * Gets the subjectAlternativeNameFormatString
    * Custom String that defines the AAD Attribute.
    *
    * @return string The subjectAlternativeNameFormatString
    */
    public function getSubjectAlternativeNameFormatString()
    {
        if (array_key_exists("subjectAlternativeNameFormatString", $this->_propDict)) {
            return $this->_propDict["subjectAlternativeNameFormatString"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the subjectAlternativeNameFormatString
    * Custom String that defines the AAD Attribute.
    *
    * @param string $val The subjectAlternativeNameFormatString
    *
    * @return AndroidWorkProfileScepCertificateProfile
    */
    public function setSubjectAlternativeNameFormatString($val)
    {
        $this->_propDict["subjectAlternativeNameFormatString"] = $val;
        return $this;
    }
    
    /**
    * Gets the subjectNameFormatString
    * Custom format to use with SubjectNameFormat = Custom. Example: CN={{EmailAddress}},E={{EmailAddress}},OU=Enterprise Users,O=Contoso Corporation,L=Redmond,ST=WA,C=US
    *
    * @return string The subjectNameFormatString
    */
    public function getSubjectNameFormatString()
    {
        if (array_key_exists("subjectNameFormatString", $this->_propDict)) {
            return $this->_propDict["subjectNameFormatString"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the subjectNameFormatString
    * Custom format to use with SubjectNameFormat = Custom. Example: CN={{EmailAddress}},E={{EmailAddress}},OU=Enterprise Users,O=Contoso Corporation,L=Redmond,ST=WA,C=US
    *
    * @param string $val The subjectNameFormatString
    *
    * @return AndroidWorkProfileScepCertificateProfile
    */
    public function setSubjectNameFormatString($val)
    {
        $this->_propDict["subjectNameFormatString"] = $val;
        return $this;
    }
    

     /** 
     * Gets the managedDeviceCertificateStates
    * Certificate state for devices
     *
     * @return array The managedDeviceCertificateStates
     */
    public function getManagedDeviceCertificateStates()
    {
        if (array_key_exists("managedDeviceCertificateStates", $this->_propDict)) {
           return $this->_propDict["managedDeviceCertificateStates"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the managedDeviceCertificateStates
    * Certificate state for devices
    *
    * @param ManagedDeviceCertificateState $val The managedDeviceCertificateStates
    *
    * @return AndroidWorkProfileScepCertificateProfile
    */
    public function setManagedDeviceCertificateStates($val)
    {
		$this->_propDict["managedDeviceCertificateStates"] = $val;
        return $this;
    }
    
}
