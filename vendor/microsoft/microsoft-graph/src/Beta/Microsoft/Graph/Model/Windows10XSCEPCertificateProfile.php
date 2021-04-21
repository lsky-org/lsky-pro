<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Windows10XSCEPCertificateProfile File
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
* Windows10XSCEPCertificateProfile class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Windows10XSCEPCertificateProfile extends Windows10XCertificateProfile
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
    * @return Windows10XSCEPCertificateProfile
    */
    public function setCertificateStore($val)
    {
        $this->_propDict["certificateStore"] = $val;
        return $this;
    }
    
    /**
    * Gets the certificateValidityPeriodScale
    * Scale for the Certificate Validity Period. Possible values are: days, months, years.
    *
    * @return CertificateValidityPeriodScale The certificateValidityPeriodScale
    */
    public function getCertificateValidityPeriodScale()
    {
        if (array_key_exists("certificateValidityPeriodScale", $this->_propDict)) {
            if (is_a($this->_propDict["certificateValidityPeriodScale"], "\Beta\Microsoft\Graph\Model\CertificateValidityPeriodScale")) {
                return $this->_propDict["certificateValidityPeriodScale"];
            } else {
                $this->_propDict["certificateValidityPeriodScale"] = new CertificateValidityPeriodScale($this->_propDict["certificateValidityPeriodScale"]);
                return $this->_propDict["certificateValidityPeriodScale"];
            }
        }
        return null;
    }
    
    /**
    * Sets the certificateValidityPeriodScale
    * Scale for the Certificate Validity Period. Possible values are: days, months, years.
    *
    * @param CertificateValidityPeriodScale $val The certificateValidityPeriodScale
    *
    * @return Windows10XSCEPCertificateProfile
    */
    public function setCertificateValidityPeriodScale($val)
    {
        $this->_propDict["certificateValidityPeriodScale"] = $val;
        return $this;
    }
    
    /**
    * Gets the certificateValidityPeriodValue
    * Value for the Certificate Validity Period
    *
    * @return int The certificateValidityPeriodValue
    */
    public function getCertificateValidityPeriodValue()
    {
        if (array_key_exists("certificateValidityPeriodValue", $this->_propDict)) {
            return $this->_propDict["certificateValidityPeriodValue"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the certificateValidityPeriodValue
    * Value for the Certificate Validity Period
    *
    * @param int $val The certificateValidityPeriodValue
    *
    * @return Windows10XSCEPCertificateProfile
    */
    public function setCertificateValidityPeriodValue($val)
    {
        $this->_propDict["certificateValidityPeriodValue"] = intval($val);
        return $this;
    }
    

     /** 
     * Gets the extendedKeyUsages
    * Extended Key Usage (EKU) settings.
     *
     * @return array The extendedKeyUsages
     */
    public function getExtendedKeyUsages()
    {
        if (array_key_exists("extendedKeyUsages", $this->_propDict)) {
           return $this->_propDict["extendedKeyUsages"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the extendedKeyUsages
    * Extended Key Usage (EKU) settings.
    *
    * @param ExtendedKeyUsage $val The extendedKeyUsages
    *
    * @return Windows10XSCEPCertificateProfile
    */
    public function setExtendedKeyUsages($val)
    {
		$this->_propDict["extendedKeyUsages"] = $val;
        return $this;
    }
    

     /** 
     * Gets the hashAlgorithm
    * SCEP Hash Algorithm.
     *
     * @return array The hashAlgorithm
     */
    public function getHashAlgorithm()
    {
        if (array_key_exists("hashAlgorithm", $this->_propDict)) {
           return $this->_propDict["hashAlgorithm"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the hashAlgorithm
    * SCEP Hash Algorithm.
    *
    * @param HashAlgorithms $val The hashAlgorithm
    *
    * @return Windows10XSCEPCertificateProfile
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
    * @return Windows10XSCEPCertificateProfile
    */
    public function setKeySize($val)
    {
        $this->_propDict["keySize"] = $val;
        return $this;
    }
    
    /**
    * Gets the keyStorageProvider
    * Key Storage Provider (KSP). Possible values are: useTpmKspOtherwiseUseSoftwareKsp, useTpmKspOtherwiseFail, usePassportForWorkKspOtherwiseFail, useSoftwareKsp.
    *
    * @return KeyStorageProviderOption The keyStorageProvider
    */
    public function getKeyStorageProvider()
    {
        if (array_key_exists("keyStorageProvider", $this->_propDict)) {
            if (is_a($this->_propDict["keyStorageProvider"], "\Beta\Microsoft\Graph\Model\KeyStorageProviderOption")) {
                return $this->_propDict["keyStorageProvider"];
            } else {
                $this->_propDict["keyStorageProvider"] = new KeyStorageProviderOption($this->_propDict["keyStorageProvider"]);
                return $this->_propDict["keyStorageProvider"];
            }
        }
        return null;
    }
    
    /**
    * Sets the keyStorageProvider
    * Key Storage Provider (KSP). Possible values are: useTpmKspOtherwiseUseSoftwareKsp, useTpmKspOtherwiseFail, usePassportForWorkKspOtherwiseFail, useSoftwareKsp.
    *
    * @param KeyStorageProviderOption $val The keyStorageProvider
    *
    * @return Windows10XSCEPCertificateProfile
    */
    public function setKeyStorageProvider($val)
    {
        $this->_propDict["keyStorageProvider"] = $val;
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
    * @return Windows10XSCEPCertificateProfile
    */
    public function setKeyUsage($val)
    {
        $this->_propDict["keyUsage"] = $val;
        return $this;
    }
    
    /**
    * Gets the renewalThresholdPercentage
    * Certificate renewal threshold percentage
    *
    * @return int The renewalThresholdPercentage
    */
    public function getRenewalThresholdPercentage()
    {
        if (array_key_exists("renewalThresholdPercentage", $this->_propDict)) {
            return $this->_propDict["renewalThresholdPercentage"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the renewalThresholdPercentage
    * Certificate renewal threshold percentage
    *
    * @param int $val The renewalThresholdPercentage
    *
    * @return Windows10XSCEPCertificateProfile
    */
    public function setRenewalThresholdPercentage($val)
    {
        $this->_propDict["renewalThresholdPercentage"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the rootCertificateId
    * Trusted Root Certificate ID
    *
    * @return string The rootCertificateId
    */
    public function getRootCertificateId()
    {
        if (array_key_exists("rootCertificateId", $this->_propDict)) {
            return $this->_propDict["rootCertificateId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the rootCertificateId
    * Trusted Root Certificate ID
    *
    * @param string $val The rootCertificateId
    *
    * @return Windows10XSCEPCertificateProfile
    */
    public function setRootCertificateId($val)
    {
        $this->_propDict["rootCertificateId"] = $val;
        return $this;
    }
    
    /**
    * Gets the scepServerUrls
    * SCEP Server Url(s).
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
    * SCEP Server Url(s).
    *
    * @param string $val The scepServerUrls
    *
    * @return Windows10XSCEPCertificateProfile
    */
    public function setScepServerUrls($val)
    {
        $this->_propDict["scepServerUrls"] = $val;
        return $this;
    }
    

     /** 
     * Gets the subjectAlternativeNameFormats
    * Custom AAD Attributes.
     *
     * @return array The subjectAlternativeNameFormats
     */
    public function getSubjectAlternativeNameFormats()
    {
        if (array_key_exists("subjectAlternativeNameFormats", $this->_propDict)) {
           return $this->_propDict["subjectAlternativeNameFormats"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the subjectAlternativeNameFormats
    * Custom AAD Attributes.
    *
    * @param Windows10XCustomSubjectAlternativeName $val The subjectAlternativeNameFormats
    *
    * @return Windows10XSCEPCertificateProfile
    */
    public function setSubjectAlternativeNameFormats($val)
    {
		$this->_propDict["subjectAlternativeNameFormats"] = $val;
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
    * @return Windows10XSCEPCertificateProfile
    */
    public function setSubjectNameFormatString($val)
    {
        $this->_propDict["subjectNameFormatString"] = $val;
        return $this;
    }
    
}
