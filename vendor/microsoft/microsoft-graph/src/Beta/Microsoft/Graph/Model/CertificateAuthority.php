<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CertificateAuthority File
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
* CertificateAuthority class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CertificateAuthority extends Entity
{

    /**
    * Gets the certificate
    * Required. The base64 encoded string representing the public certificate.
    *
    * @return \GuzzleHttp\Psr7\Stream The certificate
    */
    public function getCertificate()
    {
        if (array_key_exists("certificate", $this->_propDict)) {
            if (is_a($this->_propDict["certificate"], "\GuzzleHttp\Psr7\Stream")) {
                return $this->_propDict["certificate"];
            } else {
                $this->_propDict["certificate"] = \GuzzleHttp\Psr7\stream_for($this->_propDict["certificate"]);
                return $this->_propDict["certificate"];
            }
        }
        return null;
    }

    /**
    * Sets the certificate
    * Required. The base64 encoded string representing the public certificate.
    *
    * @param \GuzzleHttp\Psr7\Stream $val The value to assign to the certificate
    *
    * @return CertificateAuthority The CertificateAuthority
    */
    public function setCertificate($val)
    {
        $this->_propDict["certificate"] = $val;
         return $this;
    }
    /**
    * Gets the certificateRevocationListUrl
    * The URL of the certificate revocation list.
    *
    * @return string The certificateRevocationListUrl
    */
    public function getCertificateRevocationListUrl()
    {
        if (array_key_exists("certificateRevocationListUrl", $this->_propDict)) {
            return $this->_propDict["certificateRevocationListUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the certificateRevocationListUrl
    * The URL of the certificate revocation list.
    *
    * @param string $val The value of the certificateRevocationListUrl
    *
    * @return CertificateAuthority
    */
    public function setCertificateRevocationListUrl($val)
    {
        $this->_propDict["certificateRevocationListUrl"] = $val;
        return $this;
    }
    /**
    * Gets the deltaCertificateRevocationListUrl
    * The URL contains the list of all revoked certificates since the last time a full certificate revocaton list was created.
    *
    * @return string The deltaCertificateRevocationListUrl
    */
    public function getDeltaCertificateRevocationListUrl()
    {
        if (array_key_exists("deltaCertificateRevocationListUrl", $this->_propDict)) {
            return $this->_propDict["deltaCertificateRevocationListUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deltaCertificateRevocationListUrl
    * The URL contains the list of all revoked certificates since the last time a full certificate revocaton list was created.
    *
    * @param string $val The value of the deltaCertificateRevocationListUrl
    *
    * @return CertificateAuthority
    */
    public function setDeltaCertificateRevocationListUrl($val)
    {
        $this->_propDict["deltaCertificateRevocationListUrl"] = $val;
        return $this;
    }
    /**
    * Gets the isRootAuthority
    * Required. true if the trusted certificate is a root authority, false if the trusted certificate is an intermediate authority.
    *
    * @return bool The isRootAuthority
    */
    public function getIsRootAuthority()
    {
        if (array_key_exists("isRootAuthority", $this->_propDict)) {
            return $this->_propDict["isRootAuthority"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isRootAuthority
    * Required. true if the trusted certificate is a root authority, false if the trusted certificate is an intermediate authority.
    *
    * @param bool $val The value of the isRootAuthority
    *
    * @return CertificateAuthority
    */
    public function setIsRootAuthority($val)
    {
        $this->_propDict["isRootAuthority"] = $val;
        return $this;
    }
    /**
    * Gets the issuer
    * The issuer of the certificate, calculated from the certificate value. Read-only.
    *
    * @return string The issuer
    */
    public function getIssuer()
    {
        if (array_key_exists("issuer", $this->_propDict)) {
            return $this->_propDict["issuer"];
        } else {
            return null;
        }
    }

    /**
    * Sets the issuer
    * The issuer of the certificate, calculated from the certificate value. Read-only.
    *
    * @param string $val The value of the issuer
    *
    * @return CertificateAuthority
    */
    public function setIssuer($val)
    {
        $this->_propDict["issuer"] = $val;
        return $this;
    }
    /**
    * Gets the issuerSki
    * The subject key identifier of the certificate, calculated from the certificate value. Read-only.
    *
    * @return string The issuerSki
    */
    public function getIssuerSki()
    {
        if (array_key_exists("issuerSki", $this->_propDict)) {
            return $this->_propDict["issuerSki"];
        } else {
            return null;
        }
    }

    /**
    * Sets the issuerSki
    * The subject key identifier of the certificate, calculated from the certificate value. Read-only.
    *
    * @param string $val The value of the issuerSki
    *
    * @return CertificateAuthority
    */
    public function setIssuerSki($val)
    {
        $this->_propDict["issuerSki"] = $val;
        return $this;
    }
}
