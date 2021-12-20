<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ApplePushNotificationCertificate File
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
* ApplePushNotificationCertificate class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ApplePushNotificationCertificate extends Entity
{
    /**
    * Gets the appleIdentifier
    * Apple Id of the account used to create the MDM push certificate.
    *
    * @return string The appleIdentifier
    */
    public function getAppleIdentifier()
    {
        if (array_key_exists("appleIdentifier", $this->_propDict)) {
            return $this->_propDict["appleIdentifier"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appleIdentifier
    * Apple Id of the account used to create the MDM push certificate.
    *
    * @param string $val The appleIdentifier
    *
    * @return ApplePushNotificationCertificate
    */
    public function setAppleIdentifier($val)
    {
        $this->_propDict["appleIdentifier"] = $val;
        return $this;
    }
    
    /**
    * Gets the certificate
    * Not yet documented
    *
    * @return string The certificate
    */
    public function getCertificate()
    {
        if (array_key_exists("certificate", $this->_propDict)) {
            return $this->_propDict["certificate"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the certificate
    * Not yet documented
    *
    * @param string $val The certificate
    *
    * @return ApplePushNotificationCertificate
    */
    public function setCertificate($val)
    {
        $this->_propDict["certificate"] = $val;
        return $this;
    }
    
    /**
    * Gets the expirationDateTime
    * The expiration date and time for Apple push notification certificate.
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
    * The expiration date and time for Apple push notification certificate.
    *
    * @param \DateTime $val The expirationDateTime
    *
    * @return ApplePushNotificationCertificate
    */
    public function setExpirationDateTime($val)
    {
        $this->_propDict["expirationDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastModifiedDateTime
    * Last modified date and time for Apple push notification certificate.
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
    * Last modified date and time for Apple push notification certificate.
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return ApplePushNotificationCertificate
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the topicIdentifier
    * Topic Id.
    *
    * @return string The topicIdentifier
    */
    public function getTopicIdentifier()
    {
        if (array_key_exists("topicIdentifier", $this->_propDict)) {
            return $this->_propDict["topicIdentifier"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the topicIdentifier
    * Topic Id.
    *
    * @param string $val The topicIdentifier
    *
    * @return ApplePushNotificationCertificate
    */
    public function setTopicIdentifier($val)
    {
        $this->_propDict["topicIdentifier"] = $val;
        return $this;
    }
    
}
