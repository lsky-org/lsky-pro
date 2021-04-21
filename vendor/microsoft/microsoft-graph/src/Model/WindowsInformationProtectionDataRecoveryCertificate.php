<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsInformationProtectionDataRecoveryCertificate File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;
/**
* WindowsInformationProtectionDataRecoveryCertificate class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsInformationProtectionDataRecoveryCertificate extends Entity
{

    /**
    * Gets the certificate
    * Data recovery Certificate
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
    * Data recovery Certificate
    *
    * @param \GuzzleHttp\Psr7\Stream $val The value to assign to the certificate
    *
    * @return WindowsInformationProtectionDataRecoveryCertificate The WindowsInformationProtectionDataRecoveryCertificate
    */
    public function setCertificate($val)
    {
        $this->_propDict["certificate"] = $val;
         return $this;
    }
    /**
    * Gets the description
    * Data recovery Certificate description
    *
    * @return string The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }

    /**
    * Sets the description
    * Data recovery Certificate description
    *
    * @param string $val The value of the description
    *
    * @return WindowsInformationProtectionDataRecoveryCertificate
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the expirationDateTime
    * Data recovery Certificate expiration datetime
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
    * Data recovery Certificate expiration datetime
    *
    * @param \DateTime $val The value to assign to the expirationDateTime
    *
    * @return WindowsInformationProtectionDataRecoveryCertificate The WindowsInformationProtectionDataRecoveryCertificate
    */
    public function setExpirationDateTime($val)
    {
        $this->_propDict["expirationDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the subjectName
    * Data recovery Certificate subject name
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
    * Data recovery Certificate subject name
    *
    * @param string $val The value of the subjectName
    *
    * @return WindowsInformationProtectionDataRecoveryCertificate
    */
    public function setSubjectName($val)
    {
        $this->_propDict["subjectName"] = $val;
        return $this;
    }
}
