<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsPhone81CertificateProfileBase File
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
* WindowsPhone81CertificateProfileBase class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsPhone81CertificateProfileBase extends DeviceConfiguration
{
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
    * @return WindowsPhone81CertificateProfileBase
    */
    public function setCertificateValidityPeriodScale($val)
    {
        $this->_propDict["certificateValidityPeriodScale"] = $val;
        return $this;
    }
    
    /**
    * Gets the certificateValidityPeriodValue
    * Value for the Certificate Validtiy Period.
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
    * Value for the Certificate Validtiy Period.
    *
    * @param int $val The certificateValidityPeriodValue
    *
    * @return WindowsPhone81CertificateProfileBase
    */
    public function setCertificateValidityPeriodValue($val)
    {
        $this->_propDict["certificateValidityPeriodValue"] = intval($val);
        return $this;
    }
    

     /** 
     * Gets the extendedKeyUsages
    * Extended Key Usage (EKU) settings. This collection can contain a maximum of 500 elements.
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
    * Extended Key Usage (EKU) settings. This collection can contain a maximum of 500 elements.
    *
    * @param ExtendedKeyUsage $val The extendedKeyUsages
    *
    * @return WindowsPhone81CertificateProfileBase
    */
    public function setExtendedKeyUsages($val)
    {
		$this->_propDict["extendedKeyUsages"] = $val;
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
    * @return WindowsPhone81CertificateProfileBase
    */
    public function setKeyStorageProvider($val)
    {
        $this->_propDict["keyStorageProvider"] = $val;
        return $this;
    }
    
    /**
    * Gets the renewalThresholdPercentage
    * Certificate renewal threshold percentage.
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
    * Certificate renewal threshold percentage.
    *
    * @param int $val The renewalThresholdPercentage
    *
    * @return WindowsPhone81CertificateProfileBase
    */
    public function setRenewalThresholdPercentage($val)
    {
        $this->_propDict["renewalThresholdPercentage"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the subjectAlternativeNameType
    * Certificate Subject Alternative Name Type. Possible values are: none, emailAddress, userPrincipalName, customAzureADAttribute, domainNameService, universalResourceIdentifier.
    *
    * @return SubjectAlternativeNameType The subjectAlternativeNameType
    */
    public function getSubjectAlternativeNameType()
    {
        if (array_key_exists("subjectAlternativeNameType", $this->_propDict)) {
            if (is_a($this->_propDict["subjectAlternativeNameType"], "\Beta\Microsoft\Graph\Model\SubjectAlternativeNameType")) {
                return $this->_propDict["subjectAlternativeNameType"];
            } else {
                $this->_propDict["subjectAlternativeNameType"] = new SubjectAlternativeNameType($this->_propDict["subjectAlternativeNameType"]);
                return $this->_propDict["subjectAlternativeNameType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the subjectAlternativeNameType
    * Certificate Subject Alternative Name Type. Possible values are: none, emailAddress, userPrincipalName, customAzureADAttribute, domainNameService, universalResourceIdentifier.
    *
    * @param SubjectAlternativeNameType $val The subjectAlternativeNameType
    *
    * @return WindowsPhone81CertificateProfileBase
    */
    public function setSubjectAlternativeNameType($val)
    {
        $this->_propDict["subjectAlternativeNameType"] = $val;
        return $this;
    }
    
    /**
    * Gets the subjectNameFormat
    * Certificate Subject Name Format. Possible values are: commonName, commonNameIncludingEmail, commonNameAsEmail, custom, commonNameAsIMEI, commonNameAsSerialNumber, commonNameAsAadDeviceId, commonNameAsIntuneDeviceId, commonNameAsDurableDeviceId.
    *
    * @return SubjectNameFormat The subjectNameFormat
    */
    public function getSubjectNameFormat()
    {
        if (array_key_exists("subjectNameFormat", $this->_propDict)) {
            if (is_a($this->_propDict["subjectNameFormat"], "\Beta\Microsoft\Graph\Model\SubjectNameFormat")) {
                return $this->_propDict["subjectNameFormat"];
            } else {
                $this->_propDict["subjectNameFormat"] = new SubjectNameFormat($this->_propDict["subjectNameFormat"]);
                return $this->_propDict["subjectNameFormat"];
            }
        }
        return null;
    }
    
    /**
    * Sets the subjectNameFormat
    * Certificate Subject Name Format. Possible values are: commonName, commonNameIncludingEmail, commonNameAsEmail, custom, commonNameAsIMEI, commonNameAsSerialNumber, commonNameAsAadDeviceId, commonNameAsIntuneDeviceId, commonNameAsDurableDeviceId.
    *
    * @param SubjectNameFormat $val The subjectNameFormat
    *
    * @return WindowsPhone81CertificateProfileBase
    */
    public function setSubjectNameFormat($val)
    {
        $this->_propDict["subjectNameFormat"] = $val;
        return $this;
    }
    
}
