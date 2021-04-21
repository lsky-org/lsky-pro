<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DomainDnsRecord File
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
* DomainDnsRecord class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DomainDnsRecord extends Entity
{
    /**
    * Gets the isOptional
    * If false, this record must be configured by the customer at the DNS host for Microsoft Online Services to operate correctly with the domain.
    *
    * @return bool The isOptional
    */
    public function getIsOptional()
    {
        if (array_key_exists("isOptional", $this->_propDict)) {
            return $this->_propDict["isOptional"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isOptional
    * If false, this record must be configured by the customer at the DNS host for Microsoft Online Services to operate correctly with the domain.
    *
    * @param bool $val The isOptional
    *
    * @return DomainDnsRecord
    */
    public function setIsOptional($val)
    {
        $this->_propDict["isOptional"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the label
    * Value used when configuring the name of the DNS record at the DNS host.
    *
    * @return string The label
    */
    public function getLabel()
    {
        if (array_key_exists("label", $this->_propDict)) {
            return $this->_propDict["label"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the label
    * Value used when configuring the name of the DNS record at the DNS host.
    *
    * @param string $val The label
    *
    * @return DomainDnsRecord
    */
    public function setLabel($val)
    {
        $this->_propDict["label"] = $val;
        return $this;
    }
    
    /**
    * Gets the recordType
    * Indicates what type of DNS record this entity represents.The value can be one of the following: CName, Mx, Srv, TxtKey
    *
    * @return string The recordType
    */
    public function getRecordType()
    {
        if (array_key_exists("recordType", $this->_propDict)) {
            return $this->_propDict["recordType"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the recordType
    * Indicates what type of DNS record this entity represents.The value can be one of the following: CName, Mx, Srv, TxtKey
    *
    * @param string $val The recordType
    *
    * @return DomainDnsRecord
    */
    public function setRecordType($val)
    {
        $this->_propDict["recordType"] = $val;
        return $this;
    }
    
    /**
    * Gets the supportedService
    * Microsoft Online Service or feature that has a dependency on this DNS record.Can be one of the following values: null, Email, Sharepoint, EmailInternalRelayOnly, OfficeCommunicationsOnline, SharePointDefaultDomain, FullRedelegation, SharePointPublic, OrgIdAuthentication, Yammer, Intune
    *
    * @return string The supportedService
    */
    public function getSupportedService()
    {
        if (array_key_exists("supportedService", $this->_propDict)) {
            return $this->_propDict["supportedService"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the supportedService
    * Microsoft Online Service or feature that has a dependency on this DNS record.Can be one of the following values: null, Email, Sharepoint, EmailInternalRelayOnly, OfficeCommunicationsOnline, SharePointDefaultDomain, FullRedelegation, SharePointPublic, OrgIdAuthentication, Yammer, Intune
    *
    * @param string $val The supportedService
    *
    * @return DomainDnsRecord
    */
    public function setSupportedService($val)
    {
        $this->_propDict["supportedService"] = $val;
        return $this;
    }
    
    /**
    * Gets the ttl
    * Value to use when configuring the time-to-live (ttl) property of the DNS record at the DNS host. Not nullable
    *
    * @return int The ttl
    */
    public function getTtl()
    {
        if (array_key_exists("ttl", $this->_propDict)) {
            return $this->_propDict["ttl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the ttl
    * Value to use when configuring the time-to-live (ttl) property of the DNS record at the DNS host. Not nullable
    *
    * @param int $val The ttl
    *
    * @return DomainDnsRecord
    */
    public function setTtl($val)
    {
        $this->_propDict["ttl"] = intval($val);
        return $this;
    }
    
}
