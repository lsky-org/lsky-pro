<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Subscription File
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
* Subscription class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Subscription extends Entity
{
    /**
    * Gets the applicationId
    * Identifier of the application used to create the subscription. Read-only.
    *
    * @return string The applicationId
    */
    public function getApplicationId()
    {
        if (array_key_exists("applicationId", $this->_propDict)) {
            return $this->_propDict["applicationId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the applicationId
    * Identifier of the application used to create the subscription. Read-only.
    *
    * @param string $val The applicationId
    *
    * @return Subscription
    */
    public function setApplicationId($val)
    {
        $this->_propDict["applicationId"] = $val;
        return $this;
    }
    
    /**
    * Gets the changeType
    * Indicates the type of change in the subscribed resource that will raise a change notification. The supported values are: created, updated, deleted. Multiple values can be combined using a comma-separated list. Required. Note: Drive root item and list change notifications support only the updated changeType. User and group change notifications support updated and deleted changeType.
    *
    * @return string The changeType
    */
    public function getChangeType()
    {
        if (array_key_exists("changeType", $this->_propDict)) {
            return $this->_propDict["changeType"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the changeType
    * Indicates the type of change in the subscribed resource that will raise a change notification. The supported values are: created, updated, deleted. Multiple values can be combined using a comma-separated list. Required. Note: Drive root item and list change notifications support only the updated changeType. User and group change notifications support updated and deleted changeType.
    *
    * @param string $val The changeType
    *
    * @return Subscription
    */
    public function setChangeType($val)
    {
        $this->_propDict["changeType"] = $val;
        return $this;
    }
    
    /**
    * Gets the clientState
    * Specifies the value of the clientState property sent by the service in each change notification. The maximum length is 255 characters. The client can check that the change notification came from the service by comparing the value of the clientState property sent with the subscription with the value of the clientState property received with each change notification. Optional.
    *
    * @return string The clientState
    */
    public function getClientState()
    {
        if (array_key_exists("clientState", $this->_propDict)) {
            return $this->_propDict["clientState"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the clientState
    * Specifies the value of the clientState property sent by the service in each change notification. The maximum length is 255 characters. The client can check that the change notification came from the service by comparing the value of the clientState property sent with the subscription with the value of the clientState property received with each change notification. Optional.
    *
    * @param string $val The clientState
    *
    * @return Subscription
    */
    public function setClientState($val)
    {
        $this->_propDict["clientState"] = $val;
        return $this;
    }
    
    /**
    * Gets the creatorId
    * Identifier of the user or service principal that created the subscription. If the app used delegated permissions to create the subscription, this field contains the ID of the signed-in user the app called on behalf of. If the app used application permissions, this field contains the ID of the service principal corresponding to the app. Read-only.
    *
    * @return string The creatorId
    */
    public function getCreatorId()
    {
        if (array_key_exists("creatorId", $this->_propDict)) {
            return $this->_propDict["creatorId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the creatorId
    * Identifier of the user or service principal that created the subscription. If the app used delegated permissions to create the subscription, this field contains the ID of the signed-in user the app called on behalf of. If the app used application permissions, this field contains the ID of the service principal corresponding to the app. Read-only.
    *
    * @param string $val The creatorId
    *
    * @return Subscription
    */
    public function setCreatorId($val)
    {
        $this->_propDict["creatorId"] = $val;
        return $this;
    }
    
    /**
    * Gets the encryptionCertificate
    * A base64-encoded representation of a certificate with a public key used to encrypt resource data in change notifications. Optional. Required when includeResourceData is true.
    *
    * @return string The encryptionCertificate
    */
    public function getEncryptionCertificate()
    {
        if (array_key_exists("encryptionCertificate", $this->_propDict)) {
            return $this->_propDict["encryptionCertificate"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the encryptionCertificate
    * A base64-encoded representation of a certificate with a public key used to encrypt resource data in change notifications. Optional. Required when includeResourceData is true.
    *
    * @param string $val The encryptionCertificate
    *
    * @return Subscription
    */
    public function setEncryptionCertificate($val)
    {
        $this->_propDict["encryptionCertificate"] = $val;
        return $this;
    }
    
    /**
    * Gets the encryptionCertificateId
    * A custom app-provided identifier to help identify the certificate needed to decrypt resource data. Optional. Required when includeResourceData is true.
    *
    * @return string The encryptionCertificateId
    */
    public function getEncryptionCertificateId()
    {
        if (array_key_exists("encryptionCertificateId", $this->_propDict)) {
            return $this->_propDict["encryptionCertificateId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the encryptionCertificateId
    * A custom app-provided identifier to help identify the certificate needed to decrypt resource data. Optional. Required when includeResourceData is true.
    *
    * @param string $val The encryptionCertificateId
    *
    * @return Subscription
    */
    public function setEncryptionCertificateId($val)
    {
        $this->_propDict["encryptionCertificateId"] = $val;
        return $this;
    }
    
    /**
    * Gets the expirationDateTime
    * Specifies the date and time when the webhook subscription expires. The time is in UTC, and can be an amount of time from subscription creation that varies for the resource subscribed to.  See the table below for maximum supported subscription length of time. Required.
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
    * Specifies the date and time when the webhook subscription expires. The time is in UTC, and can be an amount of time from subscription creation that varies for the resource subscribed to.  See the table below for maximum supported subscription length of time. Required.
    *
    * @param \DateTime $val The expirationDateTime
    *
    * @return Subscription
    */
    public function setExpirationDateTime($val)
    {
        $this->_propDict["expirationDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the includeResourceData
    * When set to true, change notifications include resource data (such as content of a chat message). Optional.
    *
    * @return bool The includeResourceData
    */
    public function getIncludeResourceData()
    {
        if (array_key_exists("includeResourceData", $this->_propDict)) {
            return $this->_propDict["includeResourceData"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the includeResourceData
    * When set to true, change notifications include resource data (such as content of a chat message). Optional.
    *
    * @param bool $val The includeResourceData
    *
    * @return Subscription
    */
    public function setIncludeResourceData($val)
    {
        $this->_propDict["includeResourceData"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the latestSupportedTlsVersion
    * Specifies the latest version of Transport Layer Security (TLS) that the notification endpoint, specified by notificationUrl, supports. The possible values are: v1_0, v1_1, v1_2, v1_3. For subscribers whose notification endpoint supports a version lower than the currently recommended version (TLS 1.2), specifying this property by a set timeline allows them to temporarily use their deprecated version of TLS before completing their upgrade to TLS 1.2. For these subscribers, not setting this property per the timeline would result in subscription operations failing. For subscribers whose notification endpoint already supports TLS 1.2, setting this property is optional. In such cases, Microsoft Graph defaults the property to v1_2.
    *
    * @return string The latestSupportedTlsVersion
    */
    public function getLatestSupportedTlsVersion()
    {
        if (array_key_exists("latestSupportedTlsVersion", $this->_propDict)) {
            return $this->_propDict["latestSupportedTlsVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the latestSupportedTlsVersion
    * Specifies the latest version of Transport Layer Security (TLS) that the notification endpoint, specified by notificationUrl, supports. The possible values are: v1_0, v1_1, v1_2, v1_3. For subscribers whose notification endpoint supports a version lower than the currently recommended version (TLS 1.2), specifying this property by a set timeline allows them to temporarily use their deprecated version of TLS before completing their upgrade to TLS 1.2. For these subscribers, not setting this property per the timeline would result in subscription operations failing. For subscribers whose notification endpoint already supports TLS 1.2, setting this property is optional. In such cases, Microsoft Graph defaults the property to v1_2.
    *
    * @param string $val The latestSupportedTlsVersion
    *
    * @return Subscription
    */
    public function setLatestSupportedTlsVersion($val)
    {
        $this->_propDict["latestSupportedTlsVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the lifecycleNotificationUrl
    * The URL of the endpoint that receives lifecycle notifications, including subscriptionRemoved and missed notifications. This URL must make use of the HTTPS protocol. Optional. Read more about how Outlook resources use lifecycle notifications.
    *
    * @return string The lifecycleNotificationUrl
    */
    public function getLifecycleNotificationUrl()
    {
        if (array_key_exists("lifecycleNotificationUrl", $this->_propDict)) {
            return $this->_propDict["lifecycleNotificationUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the lifecycleNotificationUrl
    * The URL of the endpoint that receives lifecycle notifications, including subscriptionRemoved and missed notifications. This URL must make use of the HTTPS protocol. Optional. Read more about how Outlook resources use lifecycle notifications.
    *
    * @param string $val The lifecycleNotificationUrl
    *
    * @return Subscription
    */
    public function setLifecycleNotificationUrl($val)
    {
        $this->_propDict["lifecycleNotificationUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the notificationQueryOptions
    * OData Query Options for specifying value for the targeting resource. Clients receive notifications when resource reaches the state matching the query options provided here. With this new property in the subscription creation payload along with all existing properties, Webhooks will deliver notifications whenever a resource reaches the desired state mentioned in the notificationQueryOptions property eg  when the print job is completed, when a print job resource isFetchable property value becomes true etc.
    *
    * @return string The notificationQueryOptions
    */
    public function getNotificationQueryOptions()
    {
        if (array_key_exists("notificationQueryOptions", $this->_propDict)) {
            return $this->_propDict["notificationQueryOptions"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the notificationQueryOptions
    * OData Query Options for specifying value for the targeting resource. Clients receive notifications when resource reaches the state matching the query options provided here. With this new property in the subscription creation payload along with all existing properties, Webhooks will deliver notifications whenever a resource reaches the desired state mentioned in the notificationQueryOptions property eg  when the print job is completed, when a print job resource isFetchable property value becomes true etc.
    *
    * @param string $val The notificationQueryOptions
    *
    * @return Subscription
    */
    public function setNotificationQueryOptions($val)
    {
        $this->_propDict["notificationQueryOptions"] = $val;
        return $this;
    }
    
    /**
    * Gets the notificationUrl
    * The URL of the endpoint that receives the change notifications. This URL must make use of the HTTPS protocol. Required.
    *
    * @return string The notificationUrl
    */
    public function getNotificationUrl()
    {
        if (array_key_exists("notificationUrl", $this->_propDict)) {
            return $this->_propDict["notificationUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the notificationUrl
    * The URL of the endpoint that receives the change notifications. This URL must make use of the HTTPS protocol. Required.
    *
    * @param string $val The notificationUrl
    *
    * @return Subscription
    */
    public function setNotificationUrl($val)
    {
        $this->_propDict["notificationUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the resource
    * Specifies the resource that will be monitored for changes. Do not include the base URL (https://graph.microsoft.com/beta/). See the possible resource path values for each supported resource. Required.
    *
    * @return string The resource
    */
    public function getResource()
    {
        if (array_key_exists("resource", $this->_propDict)) {
            return $this->_propDict["resource"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the resource
    * Specifies the resource that will be monitored for changes. Do not include the base URL (https://graph.microsoft.com/beta/). See the possible resource path values for each supported resource. Required.
    *
    * @param string $val The resource
    *
    * @return Subscription
    */
    public function setResource($val)
    {
        $this->_propDict["resource"] = $val;
        return $this;
    }
    
}
