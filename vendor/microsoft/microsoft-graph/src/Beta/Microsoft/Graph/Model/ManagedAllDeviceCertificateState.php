<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ManagedAllDeviceCertificateState File
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
* ManagedAllDeviceCertificateState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ManagedAllDeviceCertificateState extends Entity
{
    /**
    * Gets the certificateExpirationDateTime
    * Certificate expiry date
    *
    * @return \DateTime The certificateExpirationDateTime
    */
    public function getCertificateExpirationDateTime()
    {
        if (array_key_exists("certificateExpirationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["certificateExpirationDateTime"], "\DateTime")) {
                return $this->_propDict["certificateExpirationDateTime"];
            } else {
                $this->_propDict["certificateExpirationDateTime"] = new \DateTime($this->_propDict["certificateExpirationDateTime"]);
                return $this->_propDict["certificateExpirationDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the certificateExpirationDateTime
    * Certificate expiry date
    *
    * @param \DateTime $val The certificateExpirationDateTime
    *
    * @return ManagedAllDeviceCertificateState
    */
    public function setCertificateExpirationDateTime($val)
    {
        $this->_propDict["certificateExpirationDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the certificateExtendedKeyUsages
    * Enhanced Key Usage
    *
    * @return string The certificateExtendedKeyUsages
    */
    public function getCertificateExtendedKeyUsages()
    {
        if (array_key_exists("certificateExtendedKeyUsages", $this->_propDict)) {
            return $this->_propDict["certificateExtendedKeyUsages"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the certificateExtendedKeyUsages
    * Enhanced Key Usage
    *
    * @param string $val The certificateExtendedKeyUsages
    *
    * @return ManagedAllDeviceCertificateState
    */
    public function setCertificateExtendedKeyUsages($val)
    {
        $this->_propDict["certificateExtendedKeyUsages"] = $val;
        return $this;
    }
    
    /**
    * Gets the certificateIssuanceDateTime
    * Issuance date
    *
    * @return \DateTime The certificateIssuanceDateTime
    */
    public function getCertificateIssuanceDateTime()
    {
        if (array_key_exists("certificateIssuanceDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["certificateIssuanceDateTime"], "\DateTime")) {
                return $this->_propDict["certificateIssuanceDateTime"];
            } else {
                $this->_propDict["certificateIssuanceDateTime"] = new \DateTime($this->_propDict["certificateIssuanceDateTime"]);
                return $this->_propDict["certificateIssuanceDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the certificateIssuanceDateTime
    * Issuance date
    *
    * @param \DateTime $val The certificateIssuanceDateTime
    *
    * @return ManagedAllDeviceCertificateState
    */
    public function setCertificateIssuanceDateTime($val)
    {
        $this->_propDict["certificateIssuanceDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the certificateIssuerName
    * Issuer
    *
    * @return string The certificateIssuerName
    */
    public function getCertificateIssuerName()
    {
        if (array_key_exists("certificateIssuerName", $this->_propDict)) {
            return $this->_propDict["certificateIssuerName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the certificateIssuerName
    * Issuer
    *
    * @param string $val The certificateIssuerName
    *
    * @return ManagedAllDeviceCertificateState
    */
    public function setCertificateIssuerName($val)
    {
        $this->_propDict["certificateIssuerName"] = $val;
        return $this;
    }
    
    /**
    * Gets the certificateKeyUsages
    * Key Usage
    *
    * @return int The certificateKeyUsages
    */
    public function getCertificateKeyUsages()
    {
        if (array_key_exists("certificateKeyUsages", $this->_propDict)) {
            return $this->_propDict["certificateKeyUsages"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the certificateKeyUsages
    * Key Usage
    *
    * @param int $val The certificateKeyUsages
    *
    * @return ManagedAllDeviceCertificateState
    */
    public function setCertificateKeyUsages($val)
    {
        $this->_propDict["certificateKeyUsages"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the certificateRevokeStatus
    * Revoke status. Possible values are: none, pending, issued, failed, revoked.
    *
    * @return CertificateRevocationStatus The certificateRevokeStatus
    */
    public function getCertificateRevokeStatus()
    {
        if (array_key_exists("certificateRevokeStatus", $this->_propDict)) {
            if (is_a($this->_propDict["certificateRevokeStatus"], "\Beta\Microsoft\Graph\Model\CertificateRevocationStatus")) {
                return $this->_propDict["certificateRevokeStatus"];
            } else {
                $this->_propDict["certificateRevokeStatus"] = new CertificateRevocationStatus($this->_propDict["certificateRevokeStatus"]);
                return $this->_propDict["certificateRevokeStatus"];
            }
        }
        return null;
    }
    
    /**
    * Sets the certificateRevokeStatus
    * Revoke status. Possible values are: none, pending, issued, failed, revoked.
    *
    * @param CertificateRevocationStatus $val The certificateRevokeStatus
    *
    * @return ManagedAllDeviceCertificateState
    */
    public function setCertificateRevokeStatus($val)
    {
        $this->_propDict["certificateRevokeStatus"] = $val;
        return $this;
    }
    
    /**
    * Gets the certificateRevokeStatusLastChangeDateTime
    * The time the revoke status was last changed
    *
    * @return \DateTime The certificateRevokeStatusLastChangeDateTime
    */
    public function getCertificateRevokeStatusLastChangeDateTime()
    {
        if (array_key_exists("certificateRevokeStatusLastChangeDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["certificateRevokeStatusLastChangeDateTime"], "\DateTime")) {
                return $this->_propDict["certificateRevokeStatusLastChangeDateTime"];
            } else {
                $this->_propDict["certificateRevokeStatusLastChangeDateTime"] = new \DateTime($this->_propDict["certificateRevokeStatusLastChangeDateTime"]);
                return $this->_propDict["certificateRevokeStatusLastChangeDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the certificateRevokeStatusLastChangeDateTime
    * The time the revoke status was last changed
    *
    * @param \DateTime $val The certificateRevokeStatusLastChangeDateTime
    *
    * @return ManagedAllDeviceCertificateState
    */
    public function setCertificateRevokeStatusLastChangeDateTime($val)
    {
        $this->_propDict["certificateRevokeStatusLastChangeDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the certificateSerialNumber
    * Serial number
    *
    * @return string The certificateSerialNumber
    */
    public function getCertificateSerialNumber()
    {
        if (array_key_exists("certificateSerialNumber", $this->_propDict)) {
            return $this->_propDict["certificateSerialNumber"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the certificateSerialNumber
    * Serial number
    *
    * @param string $val The certificateSerialNumber
    *
    * @return ManagedAllDeviceCertificateState
    */
    public function setCertificateSerialNumber($val)
    {
        $this->_propDict["certificateSerialNumber"] = $val;
        return $this;
    }
    
    /**
    * Gets the certificateSubjectName
    * Certificate subject name
    *
    * @return string The certificateSubjectName
    */
    public function getCertificateSubjectName()
    {
        if (array_key_exists("certificateSubjectName", $this->_propDict)) {
            return $this->_propDict["certificateSubjectName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the certificateSubjectName
    * Certificate subject name
    *
    * @param string $val The certificateSubjectName
    *
    * @return ManagedAllDeviceCertificateState
    */
    public function setCertificateSubjectName($val)
    {
        $this->_propDict["certificateSubjectName"] = $val;
        return $this;
    }
    
    /**
    * Gets the certificateThumbprint
    * Thumbprint
    *
    * @return string The certificateThumbprint
    */
    public function getCertificateThumbprint()
    {
        if (array_key_exists("certificateThumbprint", $this->_propDict)) {
            return $this->_propDict["certificateThumbprint"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the certificateThumbprint
    * Thumbprint
    *
    * @param string $val The certificateThumbprint
    *
    * @return ManagedAllDeviceCertificateState
    */
    public function setCertificateThumbprint($val)
    {
        $this->_propDict["certificateThumbprint"] = $val;
        return $this;
    }
    
    /**
    * Gets the managedDeviceDisplayName
    * Device display name
    *
    * @return string The managedDeviceDisplayName
    */
    public function getManagedDeviceDisplayName()
    {
        if (array_key_exists("managedDeviceDisplayName", $this->_propDict)) {
            return $this->_propDict["managedDeviceDisplayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the managedDeviceDisplayName
    * Device display name
    *
    * @param string $val The managedDeviceDisplayName
    *
    * @return ManagedAllDeviceCertificateState
    */
    public function setManagedDeviceDisplayName($val)
    {
        $this->_propDict["managedDeviceDisplayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the userPrincipalName
    * User principal name
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
    * User principal name
    *
    * @param string $val The userPrincipalName
    *
    * @return ManagedAllDeviceCertificateState
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }
    
}
