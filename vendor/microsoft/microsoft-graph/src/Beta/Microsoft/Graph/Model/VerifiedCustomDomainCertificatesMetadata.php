<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* VerifiedCustomDomainCertificatesMetadata File
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
* VerifiedCustomDomainCertificatesMetadata class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class VerifiedCustomDomainCertificatesMetadata extends Entity
{

    /**
    * Gets the expiryDate
    * The expiry date of the custom domain certificate. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @return \DateTime The expiryDate
    */
    public function getExpiryDate()
    {
        if (array_key_exists("expiryDate", $this->_propDict)) {
            if (is_a($this->_propDict["expiryDate"], "\DateTime")) {
                return $this->_propDict["expiryDate"];
            } else {
                $this->_propDict["expiryDate"] = new \DateTime($this->_propDict["expiryDate"]);
                return $this->_propDict["expiryDate"];
            }
        }
        return null;
    }

    /**
    * Sets the expiryDate
    * The expiry date of the custom domain certificate. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The value to assign to the expiryDate
    *
    * @return VerifiedCustomDomainCertificatesMetadata The VerifiedCustomDomainCertificatesMetadata
    */
    public function setExpiryDate($val)
    {
        $this->_propDict["expiryDate"] = $val;
         return $this;
    }

    /**
    * Gets the issueDate
    * The issue date of the custom domain. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @return \DateTime The issueDate
    */
    public function getIssueDate()
    {
        if (array_key_exists("issueDate", $this->_propDict)) {
            if (is_a($this->_propDict["issueDate"], "\DateTime")) {
                return $this->_propDict["issueDate"];
            } else {
                $this->_propDict["issueDate"] = new \DateTime($this->_propDict["issueDate"]);
                return $this->_propDict["issueDate"];
            }
        }
        return null;
    }

    /**
    * Sets the issueDate
    * The issue date of the custom domain. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The value to assign to the issueDate
    *
    * @return VerifiedCustomDomainCertificatesMetadata The VerifiedCustomDomainCertificatesMetadata
    */
    public function setIssueDate($val)
    {
        $this->_propDict["issueDate"] = $val;
         return $this;
    }
    /**
    * Gets the issuerName
    * The issuer name of the custom domain certificate.
    *
    * @return string The issuerName
    */
    public function getIssuerName()
    {
        if (array_key_exists("issuerName", $this->_propDict)) {
            return $this->_propDict["issuerName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the issuerName
    * The issuer name of the custom domain certificate.
    *
    * @param string $val The value of the issuerName
    *
    * @return VerifiedCustomDomainCertificatesMetadata
    */
    public function setIssuerName($val)
    {
        $this->_propDict["issuerName"] = $val;
        return $this;
    }
    /**
    * Gets the subjectName
    * The subject name of the custom domain certificate.
    *
    * @return string The subjectName
    */
    public function getSubjectName()
    {
        if (array_key_exists("subjectName", $this->_propDict)) {
            return $this->_propDict["subjectName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the subjectName
    * The subject name of the custom domain certificate.
    *
    * @param string $val The value of the subjectName
    *
    * @return VerifiedCustomDomainCertificatesMetadata
    */
    public function setSubjectName($val)
    {
        $this->_propDict["subjectName"] = $val;
        return $this;
    }
    /**
    * Gets the thumbprint
    * The thumbprint associated with the custom domain certificate.
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
    * The thumbprint associated with the custom domain certificate.
    *
    * @param string $val The value of the thumbprint
    *
    * @return VerifiedCustomDomainCertificatesMetadata
    */
    public function setThumbprint($val)
    {
        $this->_propDict["thumbprint"] = $val;
        return $this;
    }
}
