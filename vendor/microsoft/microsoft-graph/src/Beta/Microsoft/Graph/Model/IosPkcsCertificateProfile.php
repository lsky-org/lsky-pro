<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IosPkcsCertificateProfile File
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
* IosPkcsCertificateProfile class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IosPkcsCertificateProfile extends IosCertificateProfileBase
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
    * @return IosPkcsCertificateProfile
    */
    public function setCertificateStore($val)
    {
        $this->_propDict["certificateStore"] = $val;
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
    * @param string $val The certificateTemplateName
    *
    * @return IosPkcsCertificateProfile
    */
    public function setCertificateTemplateName($val)
    {
        $this->_propDict["certificateTemplateName"] = $val;
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
    * @param string $val The certificationAuthority
    *
    * @return IosPkcsCertificateProfile
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
    * @param string $val The certificationAuthorityName
    *
    * @return IosPkcsCertificateProfile
    */
    public function setCertificationAuthorityName($val)
    {
        $this->_propDict["certificationAuthorityName"] = $val;
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
    * @return IosPkcsCertificateProfile
    */
    public function setCustomSubjectAlternativeNames($val)
    {
		$this->_propDict["customSubjectAlternativeNames"] = $val;
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
    * @return IosPkcsCertificateProfile
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
    * @return IosPkcsCertificateProfile
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
    * @return IosPkcsCertificateProfile
    */
    public function setManagedDeviceCertificateStates($val)
    {
		$this->_propDict["managedDeviceCertificateStates"] = $val;
        return $this;
    }
    
}
