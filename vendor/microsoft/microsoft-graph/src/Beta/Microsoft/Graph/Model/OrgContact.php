<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OrgContact File
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
* OrgContact class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OrgContact extends DirectoryObject
{

     /** 
     * Gets the addresses
    * Postal addresses for this organizational contact. For now a contact can only have one physical address.
     *
     * @return array The addresses
     */
    public function getAddresses()
    {
        if (array_key_exists("addresses", $this->_propDict)) {
           return $this->_propDict["addresses"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the addresses
    * Postal addresses for this organizational contact. For now a contact can only have one physical address.
    *
    * @param PhysicalOfficeAddress $val The addresses
    *
    * @return OrgContact
    */
    public function setAddresses($val)
    {
		$this->_propDict["addresses"] = $val;
        return $this;
    }
    
    /**
    * Gets the companyName
    * Name of the company that this organizational contact belong to.
    *
    * @return string The companyName
    */
    public function getCompanyName()
    {
        if (array_key_exists("companyName", $this->_propDict)) {
            return $this->_propDict["companyName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the companyName
    * Name of the company that this organizational contact belong to.
    *
    * @param string $val The companyName
    *
    * @return OrgContact
    */
    public function setCompanyName($val)
    {
        $this->_propDict["companyName"] = $val;
        return $this;
    }
    
    /**
    * Gets the department
    * The name for the department in which the contact works.
    *
    * @return string The department
    */
    public function getDepartment()
    {
        if (array_key_exists("department", $this->_propDict)) {
            return $this->_propDict["department"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the department
    * The name for the department in which the contact works.
    *
    * @param string $val The department
    *
    * @return OrgContact
    */
    public function setDepartment($val)
    {
        $this->_propDict["department"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * Display name for this organizational contact.
    *
    * @return string The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the displayName
    * Display name for this organizational contact.
    *
    * @param string $val The displayName
    *
    * @return OrgContact
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the givenName
    * First name for this organizational contact.
    *
    * @return string The givenName
    */
    public function getGivenName()
    {
        if (array_key_exists("givenName", $this->_propDict)) {
            return $this->_propDict["givenName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the givenName
    * First name for this organizational contact.
    *
    * @param string $val The givenName
    *
    * @return OrgContact
    */
    public function setGivenName($val)
    {
        $this->_propDict["givenName"] = $val;
        return $this;
    }
    
    /**
    * Gets the jobTitle
    * Job title for this organizational contact.
    *
    * @return string The jobTitle
    */
    public function getJobTitle()
    {
        if (array_key_exists("jobTitle", $this->_propDict)) {
            return $this->_propDict["jobTitle"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the jobTitle
    * Job title for this organizational contact.
    *
    * @param string $val The jobTitle
    *
    * @return OrgContact
    */
    public function setJobTitle($val)
    {
        $this->_propDict["jobTitle"] = $val;
        return $this;
    }
    
    /**
    * Gets the mail
    * The SMTP address for the contact, for example, 'jeff@contoso.onmicrosoft.com'.
    *
    * @return string The mail
    */
    public function getMail()
    {
        if (array_key_exists("mail", $this->_propDict)) {
            return $this->_propDict["mail"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the mail
    * The SMTP address for the contact, for example, 'jeff@contoso.onmicrosoft.com'.
    *
    * @param string $val The mail
    *
    * @return OrgContact
    */
    public function setMail($val)
    {
        $this->_propDict["mail"] = $val;
        return $this;
    }
    
    /**
    * Gets the mailNickname
    * Email alias (portion of email address pre-pending the @ symbol) for this organizational contact.
    *
    * @return string The mailNickname
    */
    public function getMailNickname()
    {
        if (array_key_exists("mailNickname", $this->_propDict)) {
            return $this->_propDict["mailNickname"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the mailNickname
    * Email alias (portion of email address pre-pending the @ symbol) for this organizational contact.
    *
    * @param string $val The mailNickname
    *
    * @return OrgContact
    */
    public function setMailNickname($val)
    {
        $this->_propDict["mailNickname"] = $val;
        return $this;
    }
    
    /**
    * Gets the onPremisesLastSyncDateTime
    * Date and time when this organizational contact was last synchronized from on-premises AD. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @return \DateTime The onPremisesLastSyncDateTime
    */
    public function getOnPremisesLastSyncDateTime()
    {
        if (array_key_exists("onPremisesLastSyncDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["onPremisesLastSyncDateTime"], "\DateTime")) {
                return $this->_propDict["onPremisesLastSyncDateTime"];
            } else {
                $this->_propDict["onPremisesLastSyncDateTime"] = new \DateTime($this->_propDict["onPremisesLastSyncDateTime"]);
                return $this->_propDict["onPremisesLastSyncDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the onPremisesLastSyncDateTime
    * Date and time when this organizational contact was last synchronized from on-premises AD. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The onPremisesLastSyncDateTime
    *
    * @return OrgContact
    */
    public function setOnPremisesLastSyncDateTime($val)
    {
        $this->_propDict["onPremisesLastSyncDateTime"] = $val;
        return $this;
    }
    

     /** 
     * Gets the onPremisesProvisioningErrors
    * List of any synchronization provisioning errors for this organizational contact.
     *
     * @return array The onPremisesProvisioningErrors
     */
    public function getOnPremisesProvisioningErrors()
    {
        if (array_key_exists("onPremisesProvisioningErrors", $this->_propDict)) {
           return $this->_propDict["onPremisesProvisioningErrors"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the onPremisesProvisioningErrors
    * List of any synchronization provisioning errors for this organizational contact.
    *
    * @param OnPremisesProvisioningError $val The onPremisesProvisioningErrors
    *
    * @return OrgContact
    */
    public function setOnPremisesProvisioningErrors($val)
    {
		$this->_propDict["onPremisesProvisioningErrors"] = $val;
        return $this;
    }
    
    /**
    * Gets the onPremisesSyncEnabled
    * true if this object is synced from an on-premises directory; false if this object was originally synced from an on-premises directory but is no longer synced and now mastered in Exchange; null if this object has never been synced from an on-premises directory (default).
    *
    * @return bool The onPremisesSyncEnabled
    */
    public function getOnPremisesSyncEnabled()
    {
        if (array_key_exists("onPremisesSyncEnabled", $this->_propDict)) {
            return $this->_propDict["onPremisesSyncEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the onPremisesSyncEnabled
    * true if this object is synced from an on-premises directory; false if this object was originally synced from an on-premises directory but is no longer synced and now mastered in Exchange; null if this object has never been synced from an on-premises directory (default).
    *
    * @param bool $val The onPremisesSyncEnabled
    *
    * @return OrgContact
    */
    public function setOnPremisesSyncEnabled($val)
    {
        $this->_propDict["onPremisesSyncEnabled"] = boolval($val);
        return $this;
    }
    

     /** 
     * Gets the phones
    * List of phones for this organizational contact. Phone types can be mobile, business, and businessFax. Only one of each type can ever be present in the collection.
     *
     * @return array The phones
     */
    public function getPhones()
    {
        if (array_key_exists("phones", $this->_propDict)) {
           return $this->_propDict["phones"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the phones
    * List of phones for this organizational contact. Phone types can be mobile, business, and businessFax. Only one of each type can ever be present in the collection.
    *
    * @param Phone $val The phones
    *
    * @return OrgContact
    */
    public function setPhones($val)
    {
		$this->_propDict["phones"] = $val;
        return $this;
    }
    
    /**
    * Gets the proxyAddresses
    * For example: 'SMTP: bob@contoso.com', 'smtp: bob@sales.contoso.com'. The any operator is required for filter expressions on multi-valued properties. Supports $filter.
    *
    * @return string The proxyAddresses
    */
    public function getProxyAddresses()
    {
        if (array_key_exists("proxyAddresses", $this->_propDict)) {
            return $this->_propDict["proxyAddresses"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the proxyAddresses
    * For example: 'SMTP: bob@contoso.com', 'smtp: bob@sales.contoso.com'. The any operator is required for filter expressions on multi-valued properties. Supports $filter.
    *
    * @param string $val The proxyAddresses
    *
    * @return OrgContact
    */
    public function setProxyAddresses($val)
    {
        $this->_propDict["proxyAddresses"] = $val;
        return $this;
    }
    
    /**
    * Gets the surname
    * Last name for this organizational contact.
    *
    * @return string The surname
    */
    public function getSurname()
    {
        if (array_key_exists("surname", $this->_propDict)) {
            return $this->_propDict["surname"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the surname
    * Last name for this organizational contact.
    *
    * @param string $val The surname
    *
    * @return OrgContact
    */
    public function setSurname($val)
    {
        $this->_propDict["surname"] = $val;
        return $this;
    }
    

     /** 
     * Gets the directReports
    * The contact's direct reports. (The users and contacts that have their manager property set to this contact.) Read-only. Nullable.
     *
     * @return array The directReports
     */
    public function getDirectReports()
    {
        if (array_key_exists("directReports", $this->_propDict)) {
           return $this->_propDict["directReports"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the directReports
    * The contact's direct reports. (The users and contacts that have their manager property set to this contact.) Read-only. Nullable.
    *
    * @param DirectoryObject $val The directReports
    *
    * @return OrgContact
    */
    public function setDirectReports($val)
    {
		$this->_propDict["directReports"] = $val;
        return $this;
    }
    
    /**
    * Gets the manager
    * The user or contact that is this contact's manager. Read-only.
    *
    * @return DirectoryObject The manager
    */
    public function getManager()
    {
        if (array_key_exists("manager", $this->_propDict)) {
            if (is_a($this->_propDict["manager"], "\Beta\Microsoft\Graph\Model\DirectoryObject")) {
                return $this->_propDict["manager"];
            } else {
                $this->_propDict["manager"] = new DirectoryObject($this->_propDict["manager"]);
                return $this->_propDict["manager"];
            }
        }
        return null;
    }
    
    /**
    * Sets the manager
    * The user or contact that is this contact's manager. Read-only.
    *
    * @param DirectoryObject $val The manager
    *
    * @return OrgContact
    */
    public function setManager($val)
    {
        $this->_propDict["manager"] = $val;
        return $this;
    }
    

     /** 
     * Gets the memberOf
    * Groups that this contact is a member of. Read-only. Nullable.
     *
     * @return array The memberOf
     */
    public function getMemberOf()
    {
        if (array_key_exists("memberOf", $this->_propDict)) {
           return $this->_propDict["memberOf"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the memberOf
    * Groups that this contact is a member of. Read-only. Nullable.
    *
    * @param DirectoryObject $val The memberOf
    *
    * @return OrgContact
    */
    public function setMemberOf($val)
    {
		$this->_propDict["memberOf"] = $val;
        return $this;
    }
    

     /** 
     * Gets the transitiveMemberOf
     *
     * @return array The transitiveMemberOf
     */
    public function getTransitiveMemberOf()
    {
        if (array_key_exists("transitiveMemberOf", $this->_propDict)) {
           return $this->_propDict["transitiveMemberOf"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the transitiveMemberOf
    *
    * @param DirectoryObject $val The transitiveMemberOf
    *
    * @return OrgContact
    */
    public function setTransitiveMemberOf($val)
    {
		$this->_propDict["transitiveMemberOf"] = $val;
        return $this;
    }
    
}
