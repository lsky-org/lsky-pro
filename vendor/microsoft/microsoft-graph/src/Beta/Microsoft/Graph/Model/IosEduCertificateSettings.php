<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IosEduCertificateSettings File
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
* IosEduCertificateSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IosEduCertificateSettings extends Entity
{
    /**
    * Gets the certFileName
    * File name to display in UI.
    *
    * @return string The certFileName
    */
    public function getCertFileName()
    {
        if (array_key_exists("certFileName", $this->_propDict)) {
            return $this->_propDict["certFileName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the certFileName
    * File name to display in UI.
    *
    * @param string $val The value of the certFileName
    *
    * @return IosEduCertificateSettings
    */
    public function setCertFileName($val)
    {
        $this->_propDict["certFileName"] = $val;
        return $this;
    }
    /**
    * Gets the certificateTemplateName
    * PKCS Certificate Template Name.
    *
    * @return string The certificateTemplateName
    */
    public function getCertificateTemplateName()
    {
        if (array_key_exists("certificateTemplateName", $this->_propDict)) {
            return $this->_propDict["certificateTemplateName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the certificateTemplateName
    * PKCS Certificate Template Name.
    *
    * @param string $val The value of the certificateTemplateName
    *
    * @return IosEduCertificateSettings
    */
    public function setCertificateTemplateName($val)
    {
        $this->_propDict["certificateTemplateName"] = $val;
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
    * @param CertificateValidityPeriodScale $val The value to assign to the certificateValidityPeriodScale
    *
    * @return IosEduCertificateSettings The IosEduCertificateSettings
    */
    public function setCertificateValidityPeriodScale($val)
    {
        $this->_propDict["certificateValidityPeriodScale"] = $val;
         return $this;
    }
    /**
    * Gets the certificateValidityPeriodValue
    * Value for the Certificate Validity Period.
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
    * Value for the Certificate Validity Period.
    *
    * @param int $val The value of the certificateValidityPeriodValue
    *
    * @return IosEduCertificateSettings
    */
    public function setCertificateValidityPeriodValue($val)
    {
        $this->_propDict["certificateValidityPeriodValue"] = $val;
        return $this;
    }
    /**
    * Gets the certificationAuthority
    * PKCS Certification Authority.
    *
    * @return string The certificationAuthority
    */
    public function getCertificationAuthority()
    {
        if (array_key_exists("certificationAuthority", $this->_propDict)) {
            return $this->_propDict["certificationAuthority"];
        } else {
            return null;
        }
    }

    /**
    * Sets the certificationAuthority
    * PKCS Certification Authority.
    *
    * @param string $val The value of the certificationAuthority
    *
    * @return IosEduCertificateSettings
    */
    public function setCertificationAuthority($val)
    {
        $this->_propDict["certificationAuthority"] = $val;
        return $this;
    }
    /**
    * Gets the certificationAuthorityName
    * PKCS Certification Authority Name.
    *
    * @return string The certificationAuthorityName
    */
    public function getCertificationAuthorityName()
    {
        if (array_key_exists("certificationAuthorityName", $this->_propDict)) {
            return $this->_propDict["certificationAuthorityName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the certificationAuthorityName
    * PKCS Certification Authority Name.
    *
    * @param string $val The value of the certificationAuthorityName
    *
    * @return IosEduCertificateSettings
    */
    public function setCertificationAuthorityName($val)
    {
        $this->_propDict["certificationAuthorityName"] = $val;
        return $this;
    }
    /**
    * Gets the renewalThresholdPercentage
    * Certificate renewal threshold percentage. Valid values 1 to 99
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
    * Certificate renewal threshold percentage. Valid values 1 to 99
    *
    * @param int $val The value of the renewalThresholdPercentage
    *
    * @return IosEduCertificateSettings
    */
    public function setRenewalThresholdPercentage($val)
    {
        $this->_propDict["renewalThresholdPercentage"] = $val;
        return $this;
    }

    /**
    * Gets the trustedRootCertificate
    * Trusted Root Certificate.
    *
    * @return \GuzzleHttp\Psr7\Stream The trustedRootCertificate
    */
    public function getTrustedRootCertificate()
    {
        if (array_key_exists("trustedRootCertificate", $this->_propDict)) {
            if (is_a($this->_propDict["trustedRootCertificate"], "\GuzzleHttp\Psr7\Stream")) {
                return $this->_propDict["trustedRootCertificate"];
            } else {
                $this->_propDict["trustedRootCertificate"] = \GuzzleHttp\Psr7\stream_for($this->_propDict["trustedRootCertificate"]);
                return $this->_propDict["trustedRootCertificate"];
            }
        }
        return null;
    }

    /**
    * Sets the trustedRootCertificate
    * Trusted Root Certificate.
    *
    * @param \GuzzleHttp\Psr7\Stream $val The value to assign to the trustedRootCertificate
    *
    * @return IosEduCertificateSettings The IosEduCertificateSettings
    */
    public function setTrustedRootCertificate($val)
    {
        $this->_propDict["trustedRootCertificate"] = $val;
         return $this;
    }
}
