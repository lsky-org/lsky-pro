<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* User File
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
* User class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class User extends DirectoryObject
{
    /**
    * Gets the signInActivity
    * Get the last signed-in date and request ID of the sign-in for a given user.Supports $filter, but not with any other filterable properties. Returned only on $select. Read-only. Note: Details for this property require an Azure AD Premium P1/P2 license.
    *
    * @return SignInActivity The signInActivity
    */
    public function getSignInActivity()
    {
        if (array_key_exists("signInActivity", $this->_propDict)) {
            if (is_a($this->_propDict["signInActivity"], "\Beta\Microsoft\Graph\Model\SignInActivity")) {
                return $this->_propDict["signInActivity"];
            } else {
                $this->_propDict["signInActivity"] = new SignInActivity($this->_propDict["signInActivity"]);
                return $this->_propDict["signInActivity"];
            }
        }
        return null;
    }
    
    /**
    * Sets the signInActivity
    * Get the last signed-in date and request ID of the sign-in for a given user.Supports $filter, but not with any other filterable properties. Returned only on $select. Read-only. Note: Details for this property require an Azure AD Premium P1/P2 license.
    *
    * @param SignInActivity $val The signInActivity
    *
    * @return User
    */
    public function setSignInActivity($val)
    {
        $this->_propDict["signInActivity"] = $val;
        return $this;
    }
    
    /**
    * Gets the accountEnabled
    * true if the account is enabled; otherwise, false. This property is required when a user is created. Returned only on $select. Supports $filter.
    *
    * @return bool The accountEnabled
    */
    public function getAccountEnabled()
    {
        if (array_key_exists("accountEnabled", $this->_propDict)) {
            return $this->_propDict["accountEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the accountEnabled
    * true if the account is enabled; otherwise, false. This property is required when a user is created. Returned only on $select. Supports $filter.
    *
    * @param bool $val The accountEnabled
    *
    * @return User
    */
    public function setAccountEnabled($val)
    {
        $this->_propDict["accountEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the ageGroup
    * Sets the age group of the user. Allowed values: null, minor, notAdult and adult. Refer to the legal age group property definitions for further information. Returned only on $select.
    *
    * @return string The ageGroup
    */
    public function getAgeGroup()
    {
        if (array_key_exists("ageGroup", $this->_propDict)) {
            return $this->_propDict["ageGroup"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the ageGroup
    * Sets the age group of the user. Allowed values: null, minor, notAdult and adult. Refer to the legal age group property definitions for further information. Returned only on $select.
    *
    * @param string $val The ageGroup
    *
    * @return User
    */
    public function setAgeGroup($val)
    {
        $this->_propDict["ageGroup"] = $val;
        return $this;
    }
    

     /** 
     * Gets the assignedLicenses
    * The licenses that are assigned to the user. Not nullable. Supports $filter.
     *
     * @return array The assignedLicenses
     */
    public function getAssignedLicenses()
    {
        if (array_key_exists("assignedLicenses", $this->_propDict)) {
           return $this->_propDict["assignedLicenses"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the assignedLicenses
    * The licenses that are assigned to the user. Not nullable. Supports $filter.
    *
    * @param AssignedLicense $val The assignedLicenses
    *
    * @return User
    */
    public function setAssignedLicenses($val)
    {
		$this->_propDict["assignedLicenses"] = $val;
        return $this;
    }
    

     /** 
     * Gets the assignedPlans
    * The plans that are assigned to the user. Returned only on $select. Read-only. Not nullable.
     *
     * @return array The assignedPlans
     */
    public function getAssignedPlans()
    {
        if (array_key_exists("assignedPlans", $this->_propDict)) {
           return $this->_propDict["assignedPlans"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the assignedPlans
    * The plans that are assigned to the user. Returned only on $select. Read-only. Not nullable.
    *
    * @param AssignedPlan $val The assignedPlans
    *
    * @return User
    */
    public function setAssignedPlans($val)
    {
		$this->_propDict["assignedPlans"] = $val;
        return $this;
    }
    
    /**
    * Gets the businessPhones
    * The telephone numbers for the user. Only one number can be set for this property. Returned by default. Read-only for users synced from on-premises directory.
    *
    * @return string The businessPhones
    */
    public function getBusinessPhones()
    {
        if (array_key_exists("businessPhones", $this->_propDict)) {
            return $this->_propDict["businessPhones"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the businessPhones
    * The telephone numbers for the user. Only one number can be set for this property. Returned by default. Read-only for users synced from on-premises directory.
    *
    * @param string $val The businessPhones
    *
    * @return User
    */
    public function setBusinessPhones($val)
    {
        $this->_propDict["businessPhones"] = $val;
        return $this;
    }
    
    /**
    * Gets the city
    * The city in which the user is located. Returned only on $select. Supports $filter.
    *
    * @return string The city
    */
    public function getCity()
    {
        if (array_key_exists("city", $this->_propDict)) {
            return $this->_propDict["city"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the city
    * The city in which the user is located. Returned only on $select. Supports $filter.
    *
    * @param string $val The city
    *
    * @return User
    */
    public function setCity($val)
    {
        $this->_propDict["city"] = $val;
        return $this;
    }
    
    /**
    * Gets the companyName
    * The company name which the user is associated. This property can be useful for describing the company that an external user comes from. The maximum length of the company name is 64 characters.Returned only on $select.
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
    * The company name which the user is associated. This property can be useful for describing the company that an external user comes from. The maximum length of the company name is 64 characters.Returned only on $select.
    *
    * @param string $val The companyName
    *
    * @return User
    */
    public function setCompanyName($val)
    {
        $this->_propDict["companyName"] = $val;
        return $this;
    }
    
    /**
    * Gets the consentProvidedForMinor
    * Sets whether consent has been obtained for minors. Allowed values: null, granted, denied and notRequired. Refer to the legal age group property definitions for further information. Returned only on $select.
    *
    * @return string The consentProvidedForMinor
    */
    public function getConsentProvidedForMinor()
    {
        if (array_key_exists("consentProvidedForMinor", $this->_propDict)) {
            return $this->_propDict["consentProvidedForMinor"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the consentProvidedForMinor
    * Sets whether consent has been obtained for minors. Allowed values: null, granted, denied and notRequired. Refer to the legal age group property definitions for further information. Returned only on $select.
    *
    * @param string $val The consentProvidedForMinor
    *
    * @return User
    */
    public function setConsentProvidedForMinor($val)
    {
        $this->_propDict["consentProvidedForMinor"] = $val;
        return $this;
    }
    
    /**
    * Gets the country
    * The country/region in which the user is located; for example, 'US' or 'UK'. Returned only on $select. Supports $filter.
    *
    * @return string The country
    */
    public function getCountry()
    {
        if (array_key_exists("country", $this->_propDict)) {
            return $this->_propDict["country"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the country
    * The country/region in which the user is located; for example, 'US' or 'UK'. Returned only on $select. Supports $filter.
    *
    * @param string $val The country
    *
    * @return User
    */
    public function setCountry($val)
    {
        $this->_propDict["country"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdDateTime
    * The date and time the user was created. The value cannot be modified and is automatically populated when the entity is created. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. Property is nullable. A null value indicates that an accurate creation time couldn't be determined for the user. Returned only on $select. Read-only. Supports $filter.
    *
    * @return \DateTime The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime")) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the createdDateTime
    * The date and time the user was created. The value cannot be modified and is automatically populated when the entity is created. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. Property is nullable. A null value indicates that an accurate creation time couldn't be determined for the user. Returned only on $select. Read-only. Supports $filter.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return User
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the creationType
    * Indicates whether the user account was created as a regular school or work account (null), an external account (Invitation), a local account for an Azure Active Directory B2C tenant (LocalAccount) or self-service sign-up using email verification (EmailVerified). Returned only on $select. Read-only.
    *
    * @return string The creationType
    */
    public function getCreationType()
    {
        if (array_key_exists("creationType", $this->_propDict)) {
            return $this->_propDict["creationType"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the creationType
    * Indicates whether the user account was created as a regular school or work account (null), an external account (Invitation), a local account for an Azure Active Directory B2C tenant (LocalAccount) or self-service sign-up using email verification (EmailVerified). Returned only on $select. Read-only.
    *
    * @param string $val The creationType
    *
    * @return User
    */
    public function setCreationType($val)
    {
        $this->_propDict["creationType"] = $val;
        return $this;
    }
    
    /**
    * Gets the department
    * The name for the department in which the user works. Returned only on $select. Supports $filter.
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
    * The name for the department in which the user works. Returned only on $select. Supports $filter.
    *
    * @param string $val The department
    *
    * @return User
    */
    public function setDepartment($val)
    {
        $this->_propDict["department"] = $val;
        return $this;
    }
    

     /** 
     * Gets the deviceKeys
     *
     * @return array The deviceKeys
     */
    public function getDeviceKeys()
    {
        if (array_key_exists("deviceKeys", $this->_propDict)) {
           return $this->_propDict["deviceKeys"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the deviceKeys
    *
    * @param DeviceKey $val The deviceKeys
    *
    * @return User
    */
    public function setDeviceKeys($val)
    {
		$this->_propDict["deviceKeys"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * The name displayed in the address book for the user. This value is usually the combination of the user's first name, middle initial, and last name. This property is required when a user is created and it cannot be cleared during updates. Returned by default. Supports $filter and $orderby.
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
    * The name displayed in the address book for the user. This value is usually the combination of the user's first name, middle initial, and last name. This property is required when a user is created and it cannot be cleared during updates. Returned by default. Supports $filter and $orderby.
    *
    * @param string $val The displayName
    *
    * @return User
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the employeeHireDate
    * The date and time when the user was hired or will start work in case of a future hire. Returned only on $select. Supports $filter.
    *
    * @return \DateTime The employeeHireDate
    */
    public function getEmployeeHireDate()
    {
        if (array_key_exists("employeeHireDate", $this->_propDict)) {
            if (is_a($this->_propDict["employeeHireDate"], "\DateTime")) {
                return $this->_propDict["employeeHireDate"];
            } else {
                $this->_propDict["employeeHireDate"] = new \DateTime($this->_propDict["employeeHireDate"]);
                return $this->_propDict["employeeHireDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the employeeHireDate
    * The date and time when the user was hired or will start work in case of a future hire. Returned only on $select. Supports $filter.
    *
    * @param \DateTime $val The employeeHireDate
    *
    * @return User
    */
    public function setEmployeeHireDate($val)
    {
        $this->_propDict["employeeHireDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the employeeId
    * The employee identifier assigned to the user by the organization. Returned only on $select. Supports $filter.
    *
    * @return string The employeeId
    */
    public function getEmployeeId()
    {
        if (array_key_exists("employeeId", $this->_propDict)) {
            return $this->_propDict["employeeId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the employeeId
    * The employee identifier assigned to the user by the organization. Returned only on $select. Supports $filter.
    *
    * @param string $val The employeeId
    *
    * @return User
    */
    public function setEmployeeId($val)
    {
        $this->_propDict["employeeId"] = $val;
        return $this;
    }
    
    /**
    * Gets the employeeOrgData
    * Represents organization data (e.g. division and costCenter) associated with a user. Returned only on $select.
    *
    * @return EmployeeOrgData The employeeOrgData
    */
    public function getEmployeeOrgData()
    {
        if (array_key_exists("employeeOrgData", $this->_propDict)) {
            if (is_a($this->_propDict["employeeOrgData"], "\Beta\Microsoft\Graph\Model\EmployeeOrgData")) {
                return $this->_propDict["employeeOrgData"];
            } else {
                $this->_propDict["employeeOrgData"] = new EmployeeOrgData($this->_propDict["employeeOrgData"]);
                return $this->_propDict["employeeOrgData"];
            }
        }
        return null;
    }
    
    /**
    * Sets the employeeOrgData
    * Represents organization data (e.g. division and costCenter) associated with a user. Returned only on $select.
    *
    * @param EmployeeOrgData $val The employeeOrgData
    *
    * @return User
    */
    public function setEmployeeOrgData($val)
    {
        $this->_propDict["employeeOrgData"] = $val;
        return $this;
    }
    
    /**
    * Gets the employeeType
    * Captures enterprise worker type: Employee, Contractor, Consultant, Vendor, etc. Returned only on $select. Supports $filter.
    *
    * @return string The employeeType
    */
    public function getEmployeeType()
    {
        if (array_key_exists("employeeType", $this->_propDict)) {
            return $this->_propDict["employeeType"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the employeeType
    * Captures enterprise worker type: Employee, Contractor, Consultant, Vendor, etc. Returned only on $select. Supports $filter.
    *
    * @param string $val The employeeType
    *
    * @return User
    */
    public function setEmployeeType($val)
    {
        $this->_propDict["employeeType"] = $val;
        return $this;
    }
    
    /**
    * Gets the externalUserState
    * For an external user invited to the tenant using the invitation API, this property represents the invited user's invitation status. For invited users, the state can be PendingAcceptance or Accepted, or null for all other users. Returned only on $select. Supports $filter with the supported values. For example: $filter=externalUserState eq 'PendingAcceptance'.
    *
    * @return string The externalUserState
    */
    public function getExternalUserState()
    {
        if (array_key_exists("externalUserState", $this->_propDict)) {
            return $this->_propDict["externalUserState"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the externalUserState
    * For an external user invited to the tenant using the invitation API, this property represents the invited user's invitation status. For invited users, the state can be PendingAcceptance or Accepted, or null for all other users. Returned only on $select. Supports $filter with the supported values. For example: $filter=externalUserState eq 'PendingAcceptance'.
    *
    * @param string $val The externalUserState
    *
    * @return User
    */
    public function setExternalUserState($val)
    {
        $this->_propDict["externalUserState"] = $val;
        return $this;
    }
    
    /**
    * Gets the externalUserStateChangeDateTime
    * Shows the timestamp for the latest change to the externalUserState property. Returned only on $select.
    *
    * @return string The externalUserStateChangeDateTime
    */
    public function getExternalUserStateChangeDateTime()
    {
        if (array_key_exists("externalUserStateChangeDateTime", $this->_propDict)) {
            return $this->_propDict["externalUserStateChangeDateTime"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the externalUserStateChangeDateTime
    * Shows the timestamp for the latest change to the externalUserState property. Returned only on $select.
    *
    * @param string $val The externalUserStateChangeDateTime
    *
    * @return User
    */
    public function setExternalUserStateChangeDateTime($val)
    {
        $this->_propDict["externalUserStateChangeDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the faxNumber
    * The fax number of the user. Returned only on $select.
    *
    * @return string The faxNumber
    */
    public function getFaxNumber()
    {
        if (array_key_exists("faxNumber", $this->_propDict)) {
            return $this->_propDict["faxNumber"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the faxNumber
    * The fax number of the user. Returned only on $select.
    *
    * @param string $val The faxNumber
    *
    * @return User
    */
    public function setFaxNumber($val)
    {
        $this->_propDict["faxNumber"] = $val;
        return $this;
    }
    
    /**
    * Gets the givenName
    * The given name (first name) of the user. Returned by default. Supports $filter.
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
    * The given name (first name) of the user. Returned by default. Supports $filter.
    *
    * @param string $val The givenName
    *
    * @return User
    */
    public function setGivenName($val)
    {
        $this->_propDict["givenName"] = $val;
        return $this;
    }
    

     /** 
     * Gets the identities
    * Represents the identities that can be used to sign in to this user account. An identity can be provided by Microsoft (also known as a local account), by organizations, or by social identity providers such as Facebook, Google, and Microsoft, and tied to a user account. May contain multiple items with the same signInType value. Returned only on $select. Supports $filter.
     *
     * @return array The identities
     */
    public function getIdentities()
    {
        if (array_key_exists("identities", $this->_propDict)) {
           return $this->_propDict["identities"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the identities
    * Represents the identities that can be used to sign in to this user account. An identity can be provided by Microsoft (also known as a local account), by organizations, or by social identity providers such as Facebook, Google, and Microsoft, and tied to a user account. May contain multiple items with the same signInType value. Returned only on $select. Supports $filter.
    *
    * @param ObjectIdentity $val The identities
    *
    * @return User
    */
    public function setIdentities($val)
    {
		$this->_propDict["identities"] = $val;
        return $this;
    }
    
    /**
    * Gets the imAddresses
    * The instant message voice over IP (VOIP) session initiation protocol (SIP) addresses for the user. Read-only.
    *
    * @return string The imAddresses
    */
    public function getImAddresses()
    {
        if (array_key_exists("imAddresses", $this->_propDict)) {
            return $this->_propDict["imAddresses"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the imAddresses
    * The instant message voice over IP (VOIP) session initiation protocol (SIP) addresses for the user. Read-only.
    *
    * @param string $val The imAddresses
    *
    * @return User
    */
    public function setImAddresses($val)
    {
        $this->_propDict["imAddresses"] = $val;
        return $this;
    }
    
    /**
    * Gets the infoCatalogs
    * Identifies the info segments assigned to the user. Returned by default.
    *
    * @return string The infoCatalogs
    */
    public function getInfoCatalogs()
    {
        if (array_key_exists("infoCatalogs", $this->_propDict)) {
            return $this->_propDict["infoCatalogs"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the infoCatalogs
    * Identifies the info segments assigned to the user. Returned by default.
    *
    * @param string $val The infoCatalogs
    *
    * @return User
    */
    public function setInfoCatalogs($val)
    {
        $this->_propDict["infoCatalogs"] = $val;
        return $this;
    }
    
    /**
    * Gets the isResourceAccount
    * Do not use – reserved for future use.
    *
    * @return bool The isResourceAccount
    */
    public function getIsResourceAccount()
    {
        if (array_key_exists("isResourceAccount", $this->_propDict)) {
            return $this->_propDict["isResourceAccount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isResourceAccount
    * Do not use – reserved for future use.
    *
    * @param bool $val The isResourceAccount
    *
    * @return User
    */
    public function setIsResourceAccount($val)
    {
        $this->_propDict["isResourceAccount"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the jobTitle
    * The user's job title. Returned by default. Supports $filter.
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
    * The user's job title. Returned by default. Supports $filter.
    *
    * @param string $val The jobTitle
    *
    * @return User
    */
    public function setJobTitle($val)
    {
        $this->_propDict["jobTitle"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastPasswordChangeDateTime
    * The time when this Azure AD user last changed their password. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z Returned only on $select. Read-only.
    *
    * @return \DateTime The lastPasswordChangeDateTime
    */
    public function getLastPasswordChangeDateTime()
    {
        if (array_key_exists("lastPasswordChangeDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastPasswordChangeDateTime"], "\DateTime")) {
                return $this->_propDict["lastPasswordChangeDateTime"];
            } else {
                $this->_propDict["lastPasswordChangeDateTime"] = new \DateTime($this->_propDict["lastPasswordChangeDateTime"]);
                return $this->_propDict["lastPasswordChangeDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastPasswordChangeDateTime
    * The time when this Azure AD user last changed their password. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z Returned only on $select. Read-only.
    *
    * @param \DateTime $val The lastPasswordChangeDateTime
    *
    * @return User
    */
    public function setLastPasswordChangeDateTime($val)
    {
        $this->_propDict["lastPasswordChangeDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the legalAgeGroupClassification
    * Used by enterprise applications to determine the legal age group of the user. This property is read-only and calculated based on ageGroup and consentProvidedForMinor properties. Allowed values: null, minorWithOutParentalConsent, minorWithParentalConsent, minorNoParentalConsentRequired, notAdult and adult. Refer to the legal age group property definitions for further information. Returned only on $select.
    *
    * @return string The legalAgeGroupClassification
    */
    public function getLegalAgeGroupClassification()
    {
        if (array_key_exists("legalAgeGroupClassification", $this->_propDict)) {
            return $this->_propDict["legalAgeGroupClassification"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the legalAgeGroupClassification
    * Used by enterprise applications to determine the legal age group of the user. This property is read-only and calculated based on ageGroup and consentProvidedForMinor properties. Allowed values: null, minorWithOutParentalConsent, minorWithParentalConsent, minorNoParentalConsentRequired, notAdult and adult. Refer to the legal age group property definitions for further information. Returned only on $select.
    *
    * @param string $val The legalAgeGroupClassification
    *
    * @return User
    */
    public function setLegalAgeGroupClassification($val)
    {
        $this->_propDict["legalAgeGroupClassification"] = $val;
        return $this;
    }
    

     /** 
     * Gets the licenseAssignmentStates
    * State of license assignments for this user. Returned only on $select. Read-only.
     *
     * @return array The licenseAssignmentStates
     */
    public function getLicenseAssignmentStates()
    {
        if (array_key_exists("licenseAssignmentStates", $this->_propDict)) {
           return $this->_propDict["licenseAssignmentStates"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the licenseAssignmentStates
    * State of license assignments for this user. Returned only on $select. Read-only.
    *
    * @param LicenseAssignmentState $val The licenseAssignmentStates
    *
    * @return User
    */
    public function setLicenseAssignmentStates($val)
    {
		$this->_propDict["licenseAssignmentStates"] = $val;
        return $this;
    }
    
    /**
    * Gets the mail
    * The SMTP address for the user, for example, 'jeff@contoso.onmicrosoft.com'. Returned by default. Supports $filter and endsWith.
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
    * The SMTP address for the user, for example, 'jeff@contoso.onmicrosoft.com'. Returned by default. Supports $filter and endsWith.
    *
    * @param string $val The mail
    *
    * @return User
    */
    public function setMail($val)
    {
        $this->_propDict["mail"] = $val;
        return $this;
    }
    
    /**
    * Gets the mailNickname
    * The mail alias for the user. This property must be specified when a user is created. Returned only on $select. Supports $filter.
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
    * The mail alias for the user. This property must be specified when a user is created. Returned only on $select. Supports $filter.
    *
    * @param string $val The mailNickname
    *
    * @return User
    */
    public function setMailNickname($val)
    {
        $this->_propDict["mailNickname"] = $val;
        return $this;
    }
    
    /**
    * Gets the mobilePhone
    * The primary cellular telephone number for the user. Returned by default. Read-only for users synced from on-premises directory.
    *
    * @return string The mobilePhone
    */
    public function getMobilePhone()
    {
        if (array_key_exists("mobilePhone", $this->_propDict)) {
            return $this->_propDict["mobilePhone"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the mobilePhone
    * The primary cellular telephone number for the user. Returned by default. Read-only for users synced from on-premises directory.
    *
    * @param string $val The mobilePhone
    *
    * @return User
    */
    public function setMobilePhone($val)
    {
        $this->_propDict["mobilePhone"] = $val;
        return $this;
    }
    
    /**
    * Gets the officeLocation
    * The office location in the user's place of business. Returned by default.
    *
    * @return string The officeLocation
    */
    public function getOfficeLocation()
    {
        if (array_key_exists("officeLocation", $this->_propDict)) {
            return $this->_propDict["officeLocation"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the officeLocation
    * The office location in the user's place of business. Returned by default.
    *
    * @param string $val The officeLocation
    *
    * @return User
    */
    public function setOfficeLocation($val)
    {
        $this->_propDict["officeLocation"] = $val;
        return $this;
    }
    
    /**
    * Gets the onPremisesDistinguishedName
    * Contains the on-premises Active Directory distinguished name or DN. The property is only populated for customers who are synchronizing their on-premises directory to Azure Active Directory via Azure AD Connect. Returned only on $select. Read-only.
    *
    * @return string The onPremisesDistinguishedName
    */
    public function getOnPremisesDistinguishedName()
    {
        if (array_key_exists("onPremisesDistinguishedName", $this->_propDict)) {
            return $this->_propDict["onPremisesDistinguishedName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the onPremisesDistinguishedName
    * Contains the on-premises Active Directory distinguished name or DN. The property is only populated for customers who are synchronizing their on-premises directory to Azure Active Directory via Azure AD Connect. Returned only on $select. Read-only.
    *
    * @param string $val The onPremisesDistinguishedName
    *
    * @return User
    */
    public function setOnPremisesDistinguishedName($val)
    {
        $this->_propDict["onPremisesDistinguishedName"] = $val;
        return $this;
    }
    
    /**
    * Gets the onPremisesDomainName
    * Contains the on-premises domainFQDN, also called dnsDomainName synchronized from the on-premises directory. The property is only populated for customers who are synchronizing their on-premises directory to Azure Active Directory via Azure AD Connect. Returned only on $select. Read-only.
    *
    * @return string The onPremisesDomainName
    */
    public function getOnPremisesDomainName()
    {
        if (array_key_exists("onPremisesDomainName", $this->_propDict)) {
            return $this->_propDict["onPremisesDomainName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the onPremisesDomainName
    * Contains the on-premises domainFQDN, also called dnsDomainName synchronized from the on-premises directory. The property is only populated for customers who are synchronizing their on-premises directory to Azure Active Directory via Azure AD Connect. Returned only on $select. Read-only.
    *
    * @param string $val The onPremisesDomainName
    *
    * @return User
    */
    public function setOnPremisesDomainName($val)
    {
        $this->_propDict["onPremisesDomainName"] = $val;
        return $this;
    }
    
    /**
    * Gets the onPremisesExtensionAttributes
    * Contains extensionAttributes 1-15 for the user. Note that the individual extension attributes are neither selectable nor filterable. For an onPremisesSyncEnabled user, the source of authority for this set of properties is the on-premises and is read-only and is read-only. For a cloud-only user (where onPremisesSyncEnabled is false), these properties may be set during creation or update. These extension attributes are also known as Exchange custom attributes 1-15. Returned only on $select.
    *
    * @return OnPremisesExtensionAttributes The onPremisesExtensionAttributes
    */
    public function getOnPremisesExtensionAttributes()
    {
        if (array_key_exists("onPremisesExtensionAttributes", $this->_propDict)) {
            if (is_a($this->_propDict["onPremisesExtensionAttributes"], "\Beta\Microsoft\Graph\Model\OnPremisesExtensionAttributes")) {
                return $this->_propDict["onPremisesExtensionAttributes"];
            } else {
                $this->_propDict["onPremisesExtensionAttributes"] = new OnPremisesExtensionAttributes($this->_propDict["onPremisesExtensionAttributes"]);
                return $this->_propDict["onPremisesExtensionAttributes"];
            }
        }
        return null;
    }
    
    /**
    * Sets the onPremisesExtensionAttributes
    * Contains extensionAttributes 1-15 for the user. Note that the individual extension attributes are neither selectable nor filterable. For an onPremisesSyncEnabled user, the source of authority for this set of properties is the on-premises and is read-only and is read-only. For a cloud-only user (where onPremisesSyncEnabled is false), these properties may be set during creation or update. These extension attributes are also known as Exchange custom attributes 1-15. Returned only on $select.
    *
    * @param OnPremisesExtensionAttributes $val The onPremisesExtensionAttributes
    *
    * @return User
    */
    public function setOnPremisesExtensionAttributes($val)
    {
        $this->_propDict["onPremisesExtensionAttributes"] = $val;
        return $this;
    }
    
    /**
    * Gets the onPremisesImmutableId
    * This property is used to associate an on-premises Active Directory user account to their Azure AD user object. This property must be specified when creating a new user account in the Graph if you are using a federated domain for the user's userPrincipalName (UPN) property. Important: The $ and _ characters cannot be used when specifying this property. Returned only on $select. Supports $filter.
    *
    * @return string The onPremisesImmutableId
    */
    public function getOnPremisesImmutableId()
    {
        if (array_key_exists("onPremisesImmutableId", $this->_propDict)) {
            return $this->_propDict["onPremisesImmutableId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the onPremisesImmutableId
    * This property is used to associate an on-premises Active Directory user account to their Azure AD user object. This property must be specified when creating a new user account in the Graph if you are using a federated domain for the user's userPrincipalName (UPN) property. Important: The $ and _ characters cannot be used when specifying this property. Returned only on $select. Supports $filter.
    *
    * @param string $val The onPremisesImmutableId
    *
    * @return User
    */
    public function setOnPremisesImmutableId($val)
    {
        $this->_propDict["onPremisesImmutableId"] = $val;
        return $this;
    }
    
    /**
    * Gets the onPremisesLastSyncDateTime
    * Indicates the last time at which the object was synced with the on-premises directory; for example: '2013-02-16T03:04:54Z'. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Returned only on $select. Read-only.
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
    * Indicates the last time at which the object was synced with the on-premises directory; for example: '2013-02-16T03:04:54Z'. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Returned only on $select. Read-only.
    *
    * @param \DateTime $val The onPremisesLastSyncDateTime
    *
    * @return User
    */
    public function setOnPremisesLastSyncDateTime($val)
    {
        $this->_propDict["onPremisesLastSyncDateTime"] = $val;
        return $this;
    }
    

     /** 
     * Gets the onPremisesProvisioningErrors
    * Errors when using Microsoft synchronization product during provisioning. Returned only on $select.
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
    * Errors when using Microsoft synchronization product during provisioning. Returned only on $select.
    *
    * @param OnPremisesProvisioningError $val The onPremisesProvisioningErrors
    *
    * @return User
    */
    public function setOnPremisesProvisioningErrors($val)
    {
		$this->_propDict["onPremisesProvisioningErrors"] = $val;
        return $this;
    }
    
    /**
    * Gets the onPremisesSamAccountName
    * Contains the on-premises sAMAccountName synchronized from the on-premises directory. The property is only populated for customers who are synchronizing their on-premises directory to Azure Active Directory via Azure AD Connect. Returned only on $select. Read-only.
    *
    * @return string The onPremisesSamAccountName
    */
    public function getOnPremisesSamAccountName()
    {
        if (array_key_exists("onPremisesSamAccountName", $this->_propDict)) {
            return $this->_propDict["onPremisesSamAccountName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the onPremisesSamAccountName
    * Contains the on-premises sAMAccountName synchronized from the on-premises directory. The property is only populated for customers who are synchronizing their on-premises directory to Azure Active Directory via Azure AD Connect. Returned only on $select. Read-only.
    *
    * @param string $val The onPremisesSamAccountName
    *
    * @return User
    */
    public function setOnPremisesSamAccountName($val)
    {
        $this->_propDict["onPremisesSamAccountName"] = $val;
        return $this;
    }
    
    /**
    * Gets the onPremisesSecurityIdentifier
    * Contains the on-premises security identifier (SID) for the user that was synchronized from on-premises to the cloud. Returned only on $select. Read-only.
    *
    * @return string The onPremisesSecurityIdentifier
    */
    public function getOnPremisesSecurityIdentifier()
    {
        if (array_key_exists("onPremisesSecurityIdentifier", $this->_propDict)) {
            return $this->_propDict["onPremisesSecurityIdentifier"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the onPremisesSecurityIdentifier
    * Contains the on-premises security identifier (SID) for the user that was synchronized from on-premises to the cloud. Returned only on $select. Read-only.
    *
    * @param string $val The onPremisesSecurityIdentifier
    *
    * @return User
    */
    public function setOnPremisesSecurityIdentifier($val)
    {
        $this->_propDict["onPremisesSecurityIdentifier"] = $val;
        return $this;
    }
    
    /**
    * Gets the onPremisesSyncEnabled
    * true if this object is synced from an on-premises directory; false if this object was originally synced from an on-premises directory but is no longer synced; null if this object has never been synced from an on-premises directory (default). Returned only on $select. Read-only.
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
    * true if this object is synced from an on-premises directory; false if this object was originally synced from an on-premises directory but is no longer synced; null if this object has never been synced from an on-premises directory (default). Returned only on $select. Read-only.
    *
    * @param bool $val The onPremisesSyncEnabled
    *
    * @return User
    */
    public function setOnPremisesSyncEnabled($val)
    {
        $this->_propDict["onPremisesSyncEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the onPremisesUserPrincipalName
    * Contains the on-premises userPrincipalName synchronized from the on-premises directory. The property is only populated for customers who are synchronizing their on-premises directory to Azure Active Directory via Azure AD Connect. Returned only on $select. Read-only.
    *
    * @return string The onPremisesUserPrincipalName
    */
    public function getOnPremisesUserPrincipalName()
    {
        if (array_key_exists("onPremisesUserPrincipalName", $this->_propDict)) {
            return $this->_propDict["onPremisesUserPrincipalName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the onPremisesUserPrincipalName
    * Contains the on-premises userPrincipalName synchronized from the on-premises directory. The property is only populated for customers who are synchronizing their on-premises directory to Azure Active Directory via Azure AD Connect. Returned only on $select. Read-only.
    *
    * @param string $val The onPremisesUserPrincipalName
    *
    * @return User
    */
    public function setOnPremisesUserPrincipalName($val)
    {
        $this->_propDict["onPremisesUserPrincipalName"] = $val;
        return $this;
    }
    
    /**
    * Gets the otherMails
    * A list of additional email addresses for the user; for example: ['bob@contoso.com', 'Robert@fabrikam.com'].Returned only on $select.  Supports$filter.
    *
    * @return string The otherMails
    */
    public function getOtherMails()
    {
        if (array_key_exists("otherMails", $this->_propDict)) {
            return $this->_propDict["otherMails"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the otherMails
    * A list of additional email addresses for the user; for example: ['bob@contoso.com', 'Robert@fabrikam.com'].Returned only on $select.  Supports$filter.
    *
    * @param string $val The otherMails
    *
    * @return User
    */
    public function setOtherMails($val)
    {
        $this->_propDict["otherMails"] = $val;
        return $this;
    }
    
    /**
    * Gets the passwordPolicies
    * Specifies password policies for the user. This value is an enumeration with one possible value being 'DisableStrongPassword', which allows weaker passwords than the default policy to be specified. 'DisablePasswordExpiration' can also be specified. The two may be specified together; for example: 'DisablePasswordExpiration, DisableStrongPassword'.Returned only on $select.
    *
    * @return string The passwordPolicies
    */
    public function getPasswordPolicies()
    {
        if (array_key_exists("passwordPolicies", $this->_propDict)) {
            return $this->_propDict["passwordPolicies"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passwordPolicies
    * Specifies password policies for the user. This value is an enumeration with one possible value being 'DisableStrongPassword', which allows weaker passwords than the default policy to be specified. 'DisablePasswordExpiration' can also be specified. The two may be specified together; for example: 'DisablePasswordExpiration, DisableStrongPassword'.Returned only on $select.
    *
    * @param string $val The passwordPolicies
    *
    * @return User
    */
    public function setPasswordPolicies($val)
    {
        $this->_propDict["passwordPolicies"] = $val;
        return $this;
    }
    
    /**
    * Gets the passwordProfile
    * Specifies the password profile for the user. The profile contains the user's password. This property is required when a user is created. The password in the profile must satisfy minimum requirements as specified by the passwordPolicies property. By default, a strong password is required. Returned only on $select.
    *
    * @return PasswordProfile The passwordProfile
    */
    public function getPasswordProfile()
    {
        if (array_key_exists("passwordProfile", $this->_propDict)) {
            if (is_a($this->_propDict["passwordProfile"], "\Beta\Microsoft\Graph\Model\PasswordProfile")) {
                return $this->_propDict["passwordProfile"];
            } else {
                $this->_propDict["passwordProfile"] = new PasswordProfile($this->_propDict["passwordProfile"]);
                return $this->_propDict["passwordProfile"];
            }
        }
        return null;
    }
    
    /**
    * Sets the passwordProfile
    * Specifies the password profile for the user. The profile contains the user's password. This property is required when a user is created. The password in the profile must satisfy minimum requirements as specified by the passwordPolicies property. By default, a strong password is required. Returned only on $select.
    *
    * @param PasswordProfile $val The passwordProfile
    *
    * @return User
    */
    public function setPasswordProfile($val)
    {
        $this->_propDict["passwordProfile"] = $val;
        return $this;
    }
    
    /**
    * Gets the postalCode
    * The postal code for the user's postal address. The postal code is specific to the user's country/region. In the United States of America, this attribute contains the ZIP code. Returned only on $select.
    *
    * @return string The postalCode
    */
    public function getPostalCode()
    {
        if (array_key_exists("postalCode", $this->_propDict)) {
            return $this->_propDict["postalCode"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the postalCode
    * The postal code for the user's postal address. The postal code is specific to the user's country/region. In the United States of America, this attribute contains the ZIP code. Returned only on $select.
    *
    * @param string $val The postalCode
    *
    * @return User
    */
    public function setPostalCode($val)
    {
        $this->_propDict["postalCode"] = $val;
        return $this;
    }
    
    /**
    * Gets the preferredDataLocation
    * The preferred data location for the user. For more information, see OneDrive Online Multi-Geo. Returned only on $select.
    *
    * @return string The preferredDataLocation
    */
    public function getPreferredDataLocation()
    {
        if (array_key_exists("preferredDataLocation", $this->_propDict)) {
            return $this->_propDict["preferredDataLocation"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the preferredDataLocation
    * The preferred data location for the user. For more information, see OneDrive Online Multi-Geo. Returned only on $select.
    *
    * @param string $val The preferredDataLocation
    *
    * @return User
    */
    public function setPreferredDataLocation($val)
    {
        $this->_propDict["preferredDataLocation"] = $val;
        return $this;
    }
    
    /**
    * Gets the preferredLanguage
    * The preferred language for the user. Should follow ISO 639-1 Code; for example 'en-US'. Returned by default.
    *
    * @return string The preferredLanguage
    */
    public function getPreferredLanguage()
    {
        if (array_key_exists("preferredLanguage", $this->_propDict)) {
            return $this->_propDict["preferredLanguage"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the preferredLanguage
    * The preferred language for the user. Should follow ISO 639-1 Code; for example 'en-US'. Returned by default.
    *
    * @param string $val The preferredLanguage
    *
    * @return User
    */
    public function setPreferredLanguage($val)
    {
        $this->_propDict["preferredLanguage"] = $val;
        return $this;
    }
    

     /** 
     * Gets the provisionedPlans
    * The plans that are provisioned for the user. Returned only on $select. Read-only. Not nullable.
     *
     * @return array The provisionedPlans
     */
    public function getProvisionedPlans()
    {
        if (array_key_exists("provisionedPlans", $this->_propDict)) {
           return $this->_propDict["provisionedPlans"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the provisionedPlans
    * The plans that are provisioned for the user. Returned only on $select. Read-only. Not nullable.
    *
    * @param ProvisionedPlan $val The provisionedPlans
    *
    * @return User
    */
    public function setProvisionedPlans($val)
    {
		$this->_propDict["provisionedPlans"] = $val;
        return $this;
    }
    
    /**
    * Gets the proxyAddresses
    * For example: ['SMTP: bob@contoso.com', 'smtp: bob@sales.contoso.com'] The any operator is required for filter expressions on multi-valued properties. Returned only on $select. Read-only, Not nullable. Supports $filter.
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
    * For example: ['SMTP: bob@contoso.com', 'smtp: bob@sales.contoso.com'] The any operator is required for filter expressions on multi-valued properties. Returned only on $select. Read-only, Not nullable. Supports $filter.
    *
    * @param string $val The proxyAddresses
    *
    * @return User
    */
    public function setProxyAddresses($val)
    {
        $this->_propDict["proxyAddresses"] = $val;
        return $this;
    }
    
    /**
    * Gets the refreshTokensValidFromDateTime
    * Any refresh tokens or sessions tokens (session cookies) issued before this time are invalid, and applications will get an error when using an invalid refresh or sessions token to acquire a delegated access token (to access APIs such as Microsoft Graph).  If this happens, the application will need to acquire a new refresh token by making a request to the authorize endpoint. Returned only on $select. Read-only. Use invalidateAllRefreshTokens to reset.
    *
    * @return \DateTime The refreshTokensValidFromDateTime
    */
    public function getRefreshTokensValidFromDateTime()
    {
        if (array_key_exists("refreshTokensValidFromDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["refreshTokensValidFromDateTime"], "\DateTime")) {
                return $this->_propDict["refreshTokensValidFromDateTime"];
            } else {
                $this->_propDict["refreshTokensValidFromDateTime"] = new \DateTime($this->_propDict["refreshTokensValidFromDateTime"]);
                return $this->_propDict["refreshTokensValidFromDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the refreshTokensValidFromDateTime
    * Any refresh tokens or sessions tokens (session cookies) issued before this time are invalid, and applications will get an error when using an invalid refresh or sessions token to acquire a delegated access token (to access APIs such as Microsoft Graph).  If this happens, the application will need to acquire a new refresh token by making a request to the authorize endpoint. Returned only on $select. Read-only. Use invalidateAllRefreshTokens to reset.
    *
    * @param \DateTime $val The refreshTokensValidFromDateTime
    *
    * @return User
    */
    public function setRefreshTokensValidFromDateTime($val)
    {
        $this->_propDict["refreshTokensValidFromDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the showInAddressList
    * true if the Outlook global address list should contain this user, otherwise false. If not set, this will be treated as true. For users invited through the invitation manager, this property will be set to false. Returned only on $select.
    *
    * @return bool The showInAddressList
    */
    public function getShowInAddressList()
    {
        if (array_key_exists("showInAddressList", $this->_propDict)) {
            return $this->_propDict["showInAddressList"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the showInAddressList
    * true if the Outlook global address list should contain this user, otherwise false. If not set, this will be treated as true. For users invited through the invitation manager, this property will be set to false. Returned only on $select.
    *
    * @param bool $val The showInAddressList
    *
    * @return User
    */
    public function setShowInAddressList($val)
    {
        $this->_propDict["showInAddressList"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the signInSessionsValidFromDateTime
    * Any refresh tokens or sessions tokens (session cookies) issued before this time are invalid, and applications will get an error when using an invalid refresh or sessions token to acquire a delegated access token (to access APIs such as Microsoft Graph).  If this happens, the application will need to acquire a new refresh token by making a request to the authorize endpoint. Returned only on $select. Read-only. Use revokeSignInSessions to reset.
    *
    * @return \DateTime The signInSessionsValidFromDateTime
    */
    public function getSignInSessionsValidFromDateTime()
    {
        if (array_key_exists("signInSessionsValidFromDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["signInSessionsValidFromDateTime"], "\DateTime")) {
                return $this->_propDict["signInSessionsValidFromDateTime"];
            } else {
                $this->_propDict["signInSessionsValidFromDateTime"] = new \DateTime($this->_propDict["signInSessionsValidFromDateTime"]);
                return $this->_propDict["signInSessionsValidFromDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the signInSessionsValidFromDateTime
    * Any refresh tokens or sessions tokens (session cookies) issued before this time are invalid, and applications will get an error when using an invalid refresh or sessions token to acquire a delegated access token (to access APIs such as Microsoft Graph).  If this happens, the application will need to acquire a new refresh token by making a request to the authorize endpoint. Returned only on $select. Read-only. Use revokeSignInSessions to reset.
    *
    * @param \DateTime $val The signInSessionsValidFromDateTime
    *
    * @return User
    */
    public function setSignInSessionsValidFromDateTime($val)
    {
        $this->_propDict["signInSessionsValidFromDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the state
    * The state or province in the user's address. Returned only on $select. Supports $filter.
    *
    * @return string The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            return $this->_propDict["state"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the state
    * The state or province in the user's address. Returned only on $select. Supports $filter.
    *
    * @param string $val The state
    *
    * @return User
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
        return $this;
    }
    
    /**
    * Gets the streetAddress
    * The street address of the user's place of business. Returned only on $select.
    *
    * @return string The streetAddress
    */
    public function getStreetAddress()
    {
        if (array_key_exists("streetAddress", $this->_propDict)) {
            return $this->_propDict["streetAddress"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the streetAddress
    * The street address of the user's place of business. Returned only on $select.
    *
    * @param string $val The streetAddress
    *
    * @return User
    */
    public function setStreetAddress($val)
    {
        $this->_propDict["streetAddress"] = $val;
        return $this;
    }
    
    /**
    * Gets the surname
    * The user's surname (family name or last name). Returned by default. Supports $filter.
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
    * The user's surname (family name or last name). Returned by default. Supports $filter.
    *
    * @param string $val The surname
    *
    * @return User
    */
    public function setSurname($val)
    {
        $this->_propDict["surname"] = $val;
        return $this;
    }
    
    /**
    * Gets the usageLocation
    * A two letter country code (ISO standard 3166). Required for users that will be assigned licenses due to legal requirement to check for availability of services in countries.  Examples include: 'US', 'JP', and 'GB'. Not nullable. Returned only on $select. Supports $filter.
    *
    * @return string The usageLocation
    */
    public function getUsageLocation()
    {
        if (array_key_exists("usageLocation", $this->_propDict)) {
            return $this->_propDict["usageLocation"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the usageLocation
    * A two letter country code (ISO standard 3166). Required for users that will be assigned licenses due to legal requirement to check for availability of services in countries.  Examples include: 'US', 'JP', and 'GB'. Not nullable. Returned only on $select. Supports $filter.
    *
    * @param string $val The usageLocation
    *
    * @return User
    */
    public function setUsageLocation($val)
    {
        $this->_propDict["usageLocation"] = $val;
        return $this;
    }
    
    /**
    * Gets the userPrincipalName
    * The user principal name (UPN) of the user. The UPN is an Internet-style login name for the user based on the Internet standard RFC 822. By convention, this should map to the user's email name. The general format is alias@domain, where domain must be present in the tenant's collection of verified domains. This property is required when a user is created. The verified domains for the tenant can be accessed from the verifiedDomains property of organization. Returned by default. Supports $filter, $orderby, and endsWith.
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
    * The user principal name (UPN) of the user. The UPN is an Internet-style login name for the user based on the Internet standard RFC 822. By convention, this should map to the user's email name. The general format is alias@domain, where domain must be present in the tenant's collection of verified domains. This property is required when a user is created. The verified domains for the tenant can be accessed from the verifiedDomains property of organization. Returned by default. Supports $filter, $orderby, and endsWith.
    *
    * @param string $val The userPrincipalName
    *
    * @return User
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }
    
    /**
    * Gets the userType
    * A string value that can be used to classify user types in your directory, such as 'Member' and 'Guest'. Returned only on $select. Supports $filter.
    *
    * @return string The userType
    */
    public function getUserType()
    {
        if (array_key_exists("userType", $this->_propDict)) {
            return $this->_propDict["userType"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userType
    * A string value that can be used to classify user types in your directory, such as 'Member' and 'Guest'. Returned only on $select. Supports $filter.
    *
    * @param string $val The userType
    *
    * @return User
    */
    public function setUserType($val)
    {
        $this->_propDict["userType"] = $val;
        return $this;
    }
    
    /**
    * Gets the mailboxSettings
    * Settings for the primary mailbox of the signed-in user. You can get or update settings for sending automatic replies to incoming messages, locale, and time zone. Returned only on $select.
    *
    * @return MailboxSettings The mailboxSettings
    */
    public function getMailboxSettings()
    {
        if (array_key_exists("mailboxSettings", $this->_propDict)) {
            if (is_a($this->_propDict["mailboxSettings"], "\Beta\Microsoft\Graph\Model\MailboxSettings")) {
                return $this->_propDict["mailboxSettings"];
            } else {
                $this->_propDict["mailboxSettings"] = new MailboxSettings($this->_propDict["mailboxSettings"]);
                return $this->_propDict["mailboxSettings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the mailboxSettings
    * Settings for the primary mailbox of the signed-in user. You can get or update settings for sending automatic replies to incoming messages, locale, and time zone. Returned only on $select.
    *
    * @param MailboxSettings $val The mailboxSettings
    *
    * @return User
    */
    public function setMailboxSettings($val)
    {
        $this->_propDict["mailboxSettings"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceEnrollmentLimit
    * The limit on the maximum number of devices that the user is permitted to enroll. Allowed values are 5 or 1000.
    *
    * @return int The deviceEnrollmentLimit
    */
    public function getDeviceEnrollmentLimit()
    {
        if (array_key_exists("deviceEnrollmentLimit", $this->_propDict)) {
            return $this->_propDict["deviceEnrollmentLimit"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceEnrollmentLimit
    * The limit on the maximum number of devices that the user is permitted to enroll. Allowed values are 5 or 1000.
    *
    * @param int $val The deviceEnrollmentLimit
    *
    * @return User
    */
    public function setDeviceEnrollmentLimit($val)
    {
        $this->_propDict["deviceEnrollmentLimit"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the aboutMe
    * A freeform text entry field for the user to describe themselves. Returned only on $select.
    *
    * @return string The aboutMe
    */
    public function getAboutMe()
    {
        if (array_key_exists("aboutMe", $this->_propDict)) {
            return $this->_propDict["aboutMe"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the aboutMe
    * A freeform text entry field for the user to describe themselves. Returned only on $select.
    *
    * @param string $val The aboutMe
    *
    * @return User
    */
    public function setAboutMe($val)
    {
        $this->_propDict["aboutMe"] = $val;
        return $this;
    }
    
    /**
    * Gets the birthday
    * The birthday of the user. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z Returned only on $select.
    *
    * @return \DateTime The birthday
    */
    public function getBirthday()
    {
        if (array_key_exists("birthday", $this->_propDict)) {
            if (is_a($this->_propDict["birthday"], "\DateTime")) {
                return $this->_propDict["birthday"];
            } else {
                $this->_propDict["birthday"] = new \DateTime($this->_propDict["birthday"]);
                return $this->_propDict["birthday"];
            }
        }
        return null;
    }
    
    /**
    * Sets the birthday
    * The birthday of the user. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z Returned only on $select.
    *
    * @param \DateTime $val The birthday
    *
    * @return User
    */
    public function setBirthday($val)
    {
        $this->_propDict["birthday"] = $val;
        return $this;
    }
    
    /**
    * Gets the hireDate
    * The hire date of the user. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Returned only on $select.  Note: This property is specific to SharePoint Online. We recommend using the native employeeHireDate property to set and update hire date values using Microsoft Graph APIs.
    *
    * @return \DateTime The hireDate
    */
    public function getHireDate()
    {
        if (array_key_exists("hireDate", $this->_propDict)) {
            if (is_a($this->_propDict["hireDate"], "\DateTime")) {
                return $this->_propDict["hireDate"];
            } else {
                $this->_propDict["hireDate"] = new \DateTime($this->_propDict["hireDate"]);
                return $this->_propDict["hireDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the hireDate
    * The hire date of the user. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Returned only on $select.  Note: This property is specific to SharePoint Online. We recommend using the native employeeHireDate property to set and update hire date values using Microsoft Graph APIs.
    *
    * @param \DateTime $val The hireDate
    *
    * @return User
    */
    public function setHireDate($val)
    {
        $this->_propDict["hireDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the interests
    * A list for the user to describe their interests. Returned only on $select.
    *
    * @return string The interests
    */
    public function getInterests()
    {
        if (array_key_exists("interests", $this->_propDict)) {
            return $this->_propDict["interests"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the interests
    * A list for the user to describe their interests. Returned only on $select.
    *
    * @param string $val The interests
    *
    * @return User
    */
    public function setInterests($val)
    {
        $this->_propDict["interests"] = $val;
        return $this;
    }
    
    /**
    * Gets the mySite
    * The URL for the user's personal site. Returned only on $select.
    *
    * @return string The mySite
    */
    public function getMySite()
    {
        if (array_key_exists("mySite", $this->_propDict)) {
            return $this->_propDict["mySite"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the mySite
    * The URL for the user's personal site. Returned only on $select.
    *
    * @param string $val The mySite
    *
    * @return User
    */
    public function setMySite($val)
    {
        $this->_propDict["mySite"] = $val;
        return $this;
    }
    
    /**
    * Gets the pastProjects
    * A list for the user to enumerate their past projects. Returned only on $select.
    *
    * @return string The pastProjects
    */
    public function getPastProjects()
    {
        if (array_key_exists("pastProjects", $this->_propDict)) {
            return $this->_propDict["pastProjects"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the pastProjects
    * A list for the user to enumerate their past projects. Returned only on $select.
    *
    * @param string $val The pastProjects
    *
    * @return User
    */
    public function setPastProjects($val)
    {
        $this->_propDict["pastProjects"] = $val;
        return $this;
    }
    
    /**
    * Gets the preferredName
    * The preferred name for the user. Returned only on $select.
    *
    * @return string The preferredName
    */
    public function getPreferredName()
    {
        if (array_key_exists("preferredName", $this->_propDict)) {
            return $this->_propDict["preferredName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the preferredName
    * The preferred name for the user. Returned only on $select.
    *
    * @param string $val The preferredName
    *
    * @return User
    */
    public function setPreferredName($val)
    {
        $this->_propDict["preferredName"] = $val;
        return $this;
    }
    
    /**
    * Gets the responsibilities
    * A list for the user to enumerate their responsibilities. Returned only on $select.
    *
    * @return string The responsibilities
    */
    public function getResponsibilities()
    {
        if (array_key_exists("responsibilities", $this->_propDict)) {
            return $this->_propDict["responsibilities"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the responsibilities
    * A list for the user to enumerate their responsibilities. Returned only on $select.
    *
    * @param string $val The responsibilities
    *
    * @return User
    */
    public function setResponsibilities($val)
    {
        $this->_propDict["responsibilities"] = $val;
        return $this;
    }
    
    /**
    * Gets the schools
    * A list for the user to enumerate the schools they have attended. Returned only on $select.
    *
    * @return string The schools
    */
    public function getSchools()
    {
        if (array_key_exists("schools", $this->_propDict)) {
            return $this->_propDict["schools"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the schools
    * A list for the user to enumerate the schools they have attended. Returned only on $select.
    *
    * @param string $val The schools
    *
    * @return User
    */
    public function setSchools($val)
    {
        $this->_propDict["schools"] = $val;
        return $this;
    }
    
    /**
    * Gets the skills
    * A list for the user to enumerate their skills. Returned only on $select.
    *
    * @return string The skills
    */
    public function getSkills()
    {
        if (array_key_exists("skills", $this->_propDict)) {
            return $this->_propDict["skills"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the skills
    * A list for the user to enumerate their skills. Returned only on $select.
    *
    * @param string $val The skills
    *
    * @return User
    */
    public function setSkills($val)
    {
        $this->_propDict["skills"] = $val;
        return $this;
    }
    
    /**
    * Gets the analytics
    *
    * @return UserAnalytics The analytics
    */
    public function getAnalytics()
    {
        if (array_key_exists("analytics", $this->_propDict)) {
            if (is_a($this->_propDict["analytics"], "\Beta\Microsoft\Graph\Model\UserAnalytics")) {
                return $this->_propDict["analytics"];
            } else {
                $this->_propDict["analytics"] = new UserAnalytics($this->_propDict["analytics"]);
                return $this->_propDict["analytics"];
            }
        }
        return null;
    }
    
    /**
    * Sets the analytics
    *
    * @param UserAnalytics $val The analytics
    *
    * @return User
    */
    public function setAnalytics($val)
    {
        $this->_propDict["analytics"] = $val;
        return $this;
    }
    

     /** 
     * Gets the usageRights
     *
     * @return array The usageRights
     */
    public function getUsageRights()
    {
        if (array_key_exists("usageRights", $this->_propDict)) {
           return $this->_propDict["usageRights"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the usageRights
    *
    * @param UsageRight $val The usageRights
    *
    * @return User
    */
    public function setUsageRights($val)
    {
		$this->_propDict["usageRights"] = $val;
        return $this;
    }
    
    /**
    * Gets the informationProtection
    *
    * @return InformationProtection The informationProtection
    */
    public function getInformationProtection()
    {
        if (array_key_exists("informationProtection", $this->_propDict)) {
            if (is_a($this->_propDict["informationProtection"], "\Beta\Microsoft\Graph\Model\InformationProtection")) {
                return $this->_propDict["informationProtection"];
            } else {
                $this->_propDict["informationProtection"] = new InformationProtection($this->_propDict["informationProtection"]);
                return $this->_propDict["informationProtection"];
            }
        }
        return null;
    }
    
    /**
    * Sets the informationProtection
    *
    * @param InformationProtection $val The informationProtection
    *
    * @return User
    */
    public function setInformationProtection($val)
    {
        $this->_propDict["informationProtection"] = $val;
        return $this;
    }
    

     /** 
     * Gets the appRoleAssignments
    * Represents the app roles a user has been granted for an application.
     *
     * @return array The appRoleAssignments
     */
    public function getAppRoleAssignments()
    {
        if (array_key_exists("appRoleAssignments", $this->_propDict)) {
           return $this->_propDict["appRoleAssignments"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the appRoleAssignments
    * Represents the app roles a user has been granted for an application.
    *
    * @param AppRoleAssignment $val The appRoleAssignments
    *
    * @return User
    */
    public function setAppRoleAssignments($val)
    {
		$this->_propDict["appRoleAssignments"] = $val;
        return $this;
    }
    

     /** 
     * Gets the createdObjects
    * Directory objects that were created by the user. Read-only. Nullable.
     *
     * @return array The createdObjects
     */
    public function getCreatedObjects()
    {
        if (array_key_exists("createdObjects", $this->_propDict)) {
           return $this->_propDict["createdObjects"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the createdObjects
    * Directory objects that were created by the user. Read-only. Nullable.
    *
    * @param DirectoryObject $val The createdObjects
    *
    * @return User
    */
    public function setCreatedObjects($val)
    {
		$this->_propDict["createdObjects"] = $val;
        return $this;
    }
    

     /** 
     * Gets the directReports
    * The users and contacts that report to the user. (The users and contacts that have their manager property set to this user.) Read-only. Nullable.
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
    * The users and contacts that report to the user. (The users and contacts that have their manager property set to this user.) Read-only. Nullable.
    *
    * @param DirectoryObject $val The directReports
    *
    * @return User
    */
    public function setDirectReports($val)
    {
		$this->_propDict["directReports"] = $val;
        return $this;
    }
    

     /** 
     * Gets the licenseDetails
    * A collection of this user's license details. Read-only.
     *
     * @return array The licenseDetails
     */
    public function getLicenseDetails()
    {
        if (array_key_exists("licenseDetails", $this->_propDict)) {
           return $this->_propDict["licenseDetails"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the licenseDetails
    * A collection of this user's license details. Read-only.
    *
    * @param LicenseDetails $val The licenseDetails
    *
    * @return User
    */
    public function setLicenseDetails($val)
    {
		$this->_propDict["licenseDetails"] = $val;
        return $this;
    }
    
    /**
    * Gets the manager
    * The user or contact that is this user's manager. Read-only. (HTTP Methods: GET, PUT, DELETE.)
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
    * The user or contact that is this user's manager. Read-only. (HTTP Methods: GET, PUT, DELETE.)
    *
    * @param DirectoryObject $val The manager
    *
    * @return User
    */
    public function setManager($val)
    {
        $this->_propDict["manager"] = $val;
        return $this;
    }
    

     /** 
     * Gets the memberOf
    * The groups, directory roles and administrative units that the user is a member of. Read-only. Nullable.
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
    * The groups, directory roles and administrative units that the user is a member of. Read-only. Nullable.
    *
    * @param DirectoryObject $val The memberOf
    *
    * @return User
    */
    public function setMemberOf($val)
    {
		$this->_propDict["memberOf"] = $val;
        return $this;
    }
    

     /** 
     * Gets the oauth2PermissionGrants
     *
     * @return array The oauth2PermissionGrants
     */
    public function getOauth2PermissionGrants()
    {
        if (array_key_exists("oauth2PermissionGrants", $this->_propDict)) {
           return $this->_propDict["oauth2PermissionGrants"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the oauth2PermissionGrants
    *
    * @param OAuth2PermissionGrant $val The oauth2PermissionGrants
    *
    * @return User
    */
    public function setOauth2PermissionGrants($val)
    {
		$this->_propDict["oauth2PermissionGrants"] = $val;
        return $this;
    }
    

     /** 
     * Gets the ownedDevices
    * Devices that are owned by the user. Read-only. Nullable.
     *
     * @return array The ownedDevices
     */
    public function getOwnedDevices()
    {
        if (array_key_exists("ownedDevices", $this->_propDict)) {
           return $this->_propDict["ownedDevices"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the ownedDevices
    * Devices that are owned by the user. Read-only. Nullable.
    *
    * @param DirectoryObject $val The ownedDevices
    *
    * @return User
    */
    public function setOwnedDevices($val)
    {
		$this->_propDict["ownedDevices"] = $val;
        return $this;
    }
    

     /** 
     * Gets the ownedObjects
    * Directory objects that are owned by the user. Read-only. Nullable.
     *
     * @return array The ownedObjects
     */
    public function getOwnedObjects()
    {
        if (array_key_exists("ownedObjects", $this->_propDict)) {
           return $this->_propDict["ownedObjects"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the ownedObjects
    * Directory objects that are owned by the user. Read-only. Nullable.
    *
    * @param DirectoryObject $val The ownedObjects
    *
    * @return User
    */
    public function setOwnedObjects($val)
    {
		$this->_propDict["ownedObjects"] = $val;
        return $this;
    }
    

     /** 
     * Gets the registeredDevices
    * Devices that are registered for the user. Read-only. Nullable.
     *
     * @return array The registeredDevices
     */
    public function getRegisteredDevices()
    {
        if (array_key_exists("registeredDevices", $this->_propDict)) {
           return $this->_propDict["registeredDevices"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the registeredDevices
    * Devices that are registered for the user. Read-only. Nullable.
    *
    * @param DirectoryObject $val The registeredDevices
    *
    * @return User
    */
    public function setRegisteredDevices($val)
    {
		$this->_propDict["registeredDevices"] = $val;
        return $this;
    }
    

     /** 
     * Gets the scopedRoleMemberOf
    * The scoped-role administrative unit memberships for this user. Read-only. Nullable.
     *
     * @return array The scopedRoleMemberOf
     */
    public function getScopedRoleMemberOf()
    {
        if (array_key_exists("scopedRoleMemberOf", $this->_propDict)) {
           return $this->_propDict["scopedRoleMemberOf"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the scopedRoleMemberOf
    * The scoped-role administrative unit memberships for this user. Read-only. Nullable.
    *
    * @param ScopedRoleMembership $val The scopedRoleMemberOf
    *
    * @return User
    */
    public function setScopedRoleMemberOf($val)
    {
		$this->_propDict["scopedRoleMemberOf"] = $val;
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
    * @return User
    */
    public function setTransitiveMemberOf($val)
    {
		$this->_propDict["transitiveMemberOf"] = $val;
        return $this;
    }
    
    /**
    * Gets the calendar
    * The user's primary calendar. Read-only.
    *
    * @return Calendar The calendar
    */
    public function getCalendar()
    {
        if (array_key_exists("calendar", $this->_propDict)) {
            if (is_a($this->_propDict["calendar"], "\Beta\Microsoft\Graph\Model\Calendar")) {
                return $this->_propDict["calendar"];
            } else {
                $this->_propDict["calendar"] = new Calendar($this->_propDict["calendar"]);
                return $this->_propDict["calendar"];
            }
        }
        return null;
    }
    
    /**
    * Sets the calendar
    * The user's primary calendar. Read-only.
    *
    * @param Calendar $val The calendar
    *
    * @return User
    */
    public function setCalendar($val)
    {
        $this->_propDict["calendar"] = $val;
        return $this;
    }
    

     /** 
     * Gets the calendarGroups
    * The user's calendar groups. Read-only. Nullable.
     *
     * @return array The calendarGroups
     */
    public function getCalendarGroups()
    {
        if (array_key_exists("calendarGroups", $this->_propDict)) {
           return $this->_propDict["calendarGroups"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the calendarGroups
    * The user's calendar groups. Read-only. Nullable.
    *
    * @param CalendarGroup $val The calendarGroups
    *
    * @return User
    */
    public function setCalendarGroups($val)
    {
		$this->_propDict["calendarGroups"] = $val;
        return $this;
    }
    

     /** 
     * Gets the calendars
    * The user's calendars. Read-only. Nullable.
     *
     * @return array The calendars
     */
    public function getCalendars()
    {
        if (array_key_exists("calendars", $this->_propDict)) {
           return $this->_propDict["calendars"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the calendars
    * The user's calendars. Read-only. Nullable.
    *
    * @param Calendar $val The calendars
    *
    * @return User
    */
    public function setCalendars($val)
    {
		$this->_propDict["calendars"] = $val;
        return $this;
    }
    

     /** 
     * Gets the calendarView
    * The calendar view for the calendar. Read-only. Nullable.
     *
     * @return array The calendarView
     */
    public function getCalendarView()
    {
        if (array_key_exists("calendarView", $this->_propDict)) {
           return $this->_propDict["calendarView"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the calendarView
    * The calendar view for the calendar. Read-only. Nullable.
    *
    * @param Event $val The calendarView
    *
    * @return User
    */
    public function setCalendarView($val)
    {
		$this->_propDict["calendarView"] = $val;
        return $this;
    }
    

     /** 
     * Gets the contactFolders
    * The user's contacts folders. Read-only. Nullable.
     *
     * @return array The contactFolders
     */
    public function getContactFolders()
    {
        if (array_key_exists("contactFolders", $this->_propDict)) {
           return $this->_propDict["contactFolders"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the contactFolders
    * The user's contacts folders. Read-only. Nullable.
    *
    * @param ContactFolder $val The contactFolders
    *
    * @return User
    */
    public function setContactFolders($val)
    {
		$this->_propDict["contactFolders"] = $val;
        return $this;
    }
    

     /** 
     * Gets the contacts
    * The user's contacts. Read-only. Nullable.
     *
     * @return array The contacts
     */
    public function getContacts()
    {
        if (array_key_exists("contacts", $this->_propDict)) {
           return $this->_propDict["contacts"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the contacts
    * The user's contacts. Read-only. Nullable.
    *
    * @param Contact $val The contacts
    *
    * @return User
    */
    public function setContacts($val)
    {
		$this->_propDict["contacts"] = $val;
        return $this;
    }
    

     /** 
     * Gets the events
    * The user's events. Default is to show events under the Default Calendar. Read-only. Nullable.
     *
     * @return array The events
     */
    public function getEvents()
    {
        if (array_key_exists("events", $this->_propDict)) {
           return $this->_propDict["events"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the events
    * The user's events. Default is to show events under the Default Calendar. Read-only. Nullable.
    *
    * @param Event $val The events
    *
    * @return User
    */
    public function setEvents($val)
    {
		$this->_propDict["events"] = $val;
        return $this;
    }
    
    /**
    * Gets the inferenceClassification
    * Relevance classification of the user's messages based on explicit designations which override inferred relevance or importance.
    *
    * @return InferenceClassification The inferenceClassification
    */
    public function getInferenceClassification()
    {
        if (array_key_exists("inferenceClassification", $this->_propDict)) {
            if (is_a($this->_propDict["inferenceClassification"], "\Beta\Microsoft\Graph\Model\InferenceClassification")) {
                return $this->_propDict["inferenceClassification"];
            } else {
                $this->_propDict["inferenceClassification"] = new InferenceClassification($this->_propDict["inferenceClassification"]);
                return $this->_propDict["inferenceClassification"];
            }
        }
        return null;
    }
    
    /**
    * Sets the inferenceClassification
    * Relevance classification of the user's messages based on explicit designations which override inferred relevance or importance.
    *
    * @param InferenceClassification $val The inferenceClassification
    *
    * @return User
    */
    public function setInferenceClassification($val)
    {
        $this->_propDict["inferenceClassification"] = $val;
        return $this;
    }
    

     /** 
     * Gets the joinedGroups
    * Read-only. Nullable.
     *
     * @return array The joinedGroups
     */
    public function getJoinedGroups()
    {
        if (array_key_exists("joinedGroups", $this->_propDict)) {
           return $this->_propDict["joinedGroups"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the joinedGroups
    * Read-only. Nullable.
    *
    * @param Group $val The joinedGroups
    *
    * @return User
    */
    public function setJoinedGroups($val)
    {
		$this->_propDict["joinedGroups"] = $val;
        return $this;
    }
    

     /** 
     * Gets the mailFolders
    * The user's mail folders. Read-only. Nullable.
     *
     * @return array The mailFolders
     */
    public function getMailFolders()
    {
        if (array_key_exists("mailFolders", $this->_propDict)) {
           return $this->_propDict["mailFolders"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the mailFolders
    * The user's mail folders. Read-only. Nullable.
    *
    * @param MailFolder $val The mailFolders
    *
    * @return User
    */
    public function setMailFolders($val)
    {
		$this->_propDict["mailFolders"] = $val;
        return $this;
    }
    

     /** 
     * Gets the messages
    * The messages in a mailbox or folder. Read-only. Nullable.
     *
     * @return array The messages
     */
    public function getMessages()
    {
        if (array_key_exists("messages", $this->_propDict)) {
           return $this->_propDict["messages"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the messages
    * The messages in a mailbox or folder. Read-only. Nullable.
    *
    * @param Message $val The messages
    *
    * @return User
    */
    public function setMessages($val)
    {
		$this->_propDict["messages"] = $val;
        return $this;
    }
    
    /**
    * Gets the outlook
    * Selective Outlook services available to the user. Read-only. Nullable.
    *
    * @return OutlookUser The outlook
    */
    public function getOutlook()
    {
        if (array_key_exists("outlook", $this->_propDict)) {
            if (is_a($this->_propDict["outlook"], "\Beta\Microsoft\Graph\Model\OutlookUser")) {
                return $this->_propDict["outlook"];
            } else {
                $this->_propDict["outlook"] = new OutlookUser($this->_propDict["outlook"]);
                return $this->_propDict["outlook"];
            }
        }
        return null;
    }
    
    /**
    * Sets the outlook
    * Selective Outlook services available to the user. Read-only. Nullable.
    *
    * @param OutlookUser $val The outlook
    *
    * @return User
    */
    public function setOutlook($val)
    {
        $this->_propDict["outlook"] = $val;
        return $this;
    }
    

     /** 
     * Gets the people
    * Read-only. The most relevant people to the user. The collection is ordered by their relevance to the user, which is determined by the user's communication, collaboration and business relationships. A person is an aggregation of information from across mail, contacts and social networks.
     *
     * @return array The people
     */
    public function getPeople()
    {
        if (array_key_exists("people", $this->_propDict)) {
           return $this->_propDict["people"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the people
    * Read-only. The most relevant people to the user. The collection is ordered by their relevance to the user, which is determined by the user's communication, collaboration and business relationships. A person is an aggregation of information from across mail, contacts and social networks.
    *
    * @param Person $val The people
    *
    * @return User
    */
    public function setPeople($val)
    {
		$this->_propDict["people"] = $val;
        return $this;
    }
    
    /**
    * Gets the drive
    * The user's OneDrive. Read-only.
    *
    * @return Drive The drive
    */
    public function getDrive()
    {
        if (array_key_exists("drive", $this->_propDict)) {
            if (is_a($this->_propDict["drive"], "\Beta\Microsoft\Graph\Model\Drive")) {
                return $this->_propDict["drive"];
            } else {
                $this->_propDict["drive"] = new Drive($this->_propDict["drive"]);
                return $this->_propDict["drive"];
            }
        }
        return null;
    }
    
    /**
    * Sets the drive
    * The user's OneDrive. Read-only.
    *
    * @param Drive $val The drive
    *
    * @return User
    */
    public function setDrive($val)
    {
        $this->_propDict["drive"] = $val;
        return $this;
    }
    

     /** 
     * Gets the drives
    * A collection of drives available for this user. Read-only.
     *
     * @return array The drives
     */
    public function getDrives()
    {
        if (array_key_exists("drives", $this->_propDict)) {
           return $this->_propDict["drives"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the drives
    * A collection of drives available for this user. Read-only.
    *
    * @param Drive $val The drives
    *
    * @return User
    */
    public function setDrives($val)
    {
		$this->_propDict["drives"] = $val;
        return $this;
    }
    

     /** 
     * Gets the followedSites
     *
     * @return array The followedSites
     */
    public function getFollowedSites()
    {
        if (array_key_exists("followedSites", $this->_propDict)) {
           return $this->_propDict["followedSites"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the followedSites
    *
    * @param Site $val The followedSites
    *
    * @return User
    */
    public function setFollowedSites($val)
    {
		$this->_propDict["followedSites"] = $val;
        return $this;
    }
    

     /** 
     * Gets the extensions
    * The collection of open extensions defined for the user. Nullable.
     *
     * @return array The extensions
     */
    public function getExtensions()
    {
        if (array_key_exists("extensions", $this->_propDict)) {
           return $this->_propDict["extensions"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the extensions
    * The collection of open extensions defined for the user. Nullable.
    *
    * @param Extension $val The extensions
    *
    * @return User
    */
    public function setExtensions($val)
    {
		$this->_propDict["extensions"] = $val;
        return $this;
    }
    

     /** 
     * Gets the appConsentRequestsForApproval
     *
     * @return array The appConsentRequestsForApproval
     */
    public function getAppConsentRequestsForApproval()
    {
        if (array_key_exists("appConsentRequestsForApproval", $this->_propDict)) {
           return $this->_propDict["appConsentRequestsForApproval"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the appConsentRequestsForApproval
    *
    * @param AppConsentRequest $val The appConsentRequestsForApproval
    *
    * @return User
    */
    public function setAppConsentRequestsForApproval($val)
    {
		$this->_propDict["appConsentRequestsForApproval"] = $val;
        return $this;
    }
    

     /** 
     * Gets the approvals
     *
     * @return array The approvals
     */
    public function getApprovals()
    {
        if (array_key_exists("approvals", $this->_propDict)) {
           return $this->_propDict["approvals"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the approvals
    *
    * @param Approval $val The approvals
    *
    * @return User
    */
    public function setApprovals($val)
    {
		$this->_propDict["approvals"] = $val;
        return $this;
    }
    

     /** 
     * Gets the pendingAccessReviewInstances
    * Navigation property to get list of access reviews pending approval by reviewer.
     *
     * @return array The pendingAccessReviewInstances
     */
    public function getPendingAccessReviewInstances()
    {
        if (array_key_exists("pendingAccessReviewInstances", $this->_propDict)) {
           return $this->_propDict["pendingAccessReviewInstances"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the pendingAccessReviewInstances
    * Navigation property to get list of access reviews pending approval by reviewer.
    *
    * @param AccessReviewInstance $val The pendingAccessReviewInstances
    *
    * @return User
    */
    public function setPendingAccessReviewInstances($val)
    {
		$this->_propDict["pendingAccessReviewInstances"] = $val;
        return $this;
    }
    

     /** 
     * Gets the agreementAcceptances
    * The user's terms of use acceptance statuses. Read-only. Nullable.
     *
     * @return array The agreementAcceptances
     */
    public function getAgreementAcceptances()
    {
        if (array_key_exists("agreementAcceptances", $this->_propDict)) {
           return $this->_propDict["agreementAcceptances"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the agreementAcceptances
    * The user's terms of use acceptance statuses. Read-only. Nullable.
    *
    * @param AgreementAcceptance $val The agreementAcceptances
    *
    * @return User
    */
    public function setAgreementAcceptances($val)
    {
		$this->_propDict["agreementAcceptances"] = $val;
        return $this;
    }
    

     /** 
     * Gets the deviceEnrollmentConfigurations
    * Get enrollment configurations targeted to the user
     *
     * @return array The deviceEnrollmentConfigurations
     */
    public function getDeviceEnrollmentConfigurations()
    {
        if (array_key_exists("deviceEnrollmentConfigurations", $this->_propDict)) {
           return $this->_propDict["deviceEnrollmentConfigurations"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the deviceEnrollmentConfigurations
    * Get enrollment configurations targeted to the user
    *
    * @param DeviceEnrollmentConfiguration $val The deviceEnrollmentConfigurations
    *
    * @return User
    */
    public function setDeviceEnrollmentConfigurations($val)
    {
		$this->_propDict["deviceEnrollmentConfigurations"] = $val;
        return $this;
    }
    

     /** 
     * Gets the managedDevices
    * The managed devices associated with the user.
     *
     * @return array The managedDevices
     */
    public function getManagedDevices()
    {
        if (array_key_exists("managedDevices", $this->_propDict)) {
           return $this->_propDict["managedDevices"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the managedDevices
    * The managed devices associated with the user.
    *
    * @param ManagedDevice $val The managedDevices
    *
    * @return User
    */
    public function setManagedDevices($val)
    {
		$this->_propDict["managedDevices"] = $val;
        return $this;
    }
    

     /** 
     * Gets the managedAppRegistrations
    * Zero or more managed app registrations that belong to the user.
     *
     * @return array The managedAppRegistrations
     */
    public function getManagedAppRegistrations()
    {
        if (array_key_exists("managedAppRegistrations", $this->_propDict)) {
           return $this->_propDict["managedAppRegistrations"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the managedAppRegistrations
    * Zero or more managed app registrations that belong to the user.
    *
    * @param ManagedAppRegistration $val The managedAppRegistrations
    *
    * @return User
    */
    public function setManagedAppRegistrations($val)
    {
		$this->_propDict["managedAppRegistrations"] = $val;
        return $this;
    }
    

     /** 
     * Gets the windowsInformationProtectionDeviceRegistrations
    * Zero or more WIP device registrations that belong to the user.
     *
     * @return array The windowsInformationProtectionDeviceRegistrations
     */
    public function getWindowsInformationProtectionDeviceRegistrations()
    {
        if (array_key_exists("windowsInformationProtectionDeviceRegistrations", $this->_propDict)) {
           return $this->_propDict["windowsInformationProtectionDeviceRegistrations"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the windowsInformationProtectionDeviceRegistrations
    * Zero or more WIP device registrations that belong to the user.
    *
    * @param WindowsInformationProtectionDeviceRegistration $val The windowsInformationProtectionDeviceRegistrations
    *
    * @return User
    */
    public function setWindowsInformationProtectionDeviceRegistrations($val)
    {
		$this->_propDict["windowsInformationProtectionDeviceRegistrations"] = $val;
        return $this;
    }
    

     /** 
     * Gets the deviceManagementTroubleshootingEvents
    * The list of troubleshooting events for this user.
     *
     * @return array The deviceManagementTroubleshootingEvents
     */
    public function getDeviceManagementTroubleshootingEvents()
    {
        if (array_key_exists("deviceManagementTroubleshootingEvents", $this->_propDict)) {
           return $this->_propDict["deviceManagementTroubleshootingEvents"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the deviceManagementTroubleshootingEvents
    * The list of troubleshooting events for this user.
    *
    * @param DeviceManagementTroubleshootingEvent $val The deviceManagementTroubleshootingEvents
    *
    * @return User
    */
    public function setDeviceManagementTroubleshootingEvents($val)
    {
		$this->_propDict["deviceManagementTroubleshootingEvents"] = $val;
        return $this;
    }
    

     /** 
     * Gets the mobileAppIntentAndStates
    * The list of troubleshooting events for this user.
     *
     * @return array The mobileAppIntentAndStates
     */
    public function getMobileAppIntentAndStates()
    {
        if (array_key_exists("mobileAppIntentAndStates", $this->_propDict)) {
           return $this->_propDict["mobileAppIntentAndStates"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the mobileAppIntentAndStates
    * The list of troubleshooting events for this user.
    *
    * @param MobileAppIntentAndState $val The mobileAppIntentAndStates
    *
    * @return User
    */
    public function setMobileAppIntentAndStates($val)
    {
		$this->_propDict["mobileAppIntentAndStates"] = $val;
        return $this;
    }
    

     /** 
     * Gets the mobileAppTroubleshootingEvents
    * The list of mobile app troubleshooting events for this user.
     *
     * @return array The mobileAppTroubleshootingEvents
     */
    public function getMobileAppTroubleshootingEvents()
    {
        if (array_key_exists("mobileAppTroubleshootingEvents", $this->_propDict)) {
           return $this->_propDict["mobileAppTroubleshootingEvents"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the mobileAppTroubleshootingEvents
    * The list of mobile app troubleshooting events for this user.
    *
    * @param MobileAppTroubleshootingEvent $val The mobileAppTroubleshootingEvents
    *
    * @return User
    */
    public function setMobileAppTroubleshootingEvents($val)
    {
		$this->_propDict["mobileAppTroubleshootingEvents"] = $val;
        return $this;
    }
    

     /** 
     * Gets the notifications
     *
     * @return array The notifications
     */
    public function getNotifications()
    {
        if (array_key_exists("notifications", $this->_propDict)) {
           return $this->_propDict["notifications"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the notifications
    *
    * @param Notification $val The notifications
    *
    * @return User
    */
    public function setNotifications($val)
    {
		$this->_propDict["notifications"] = $val;
        return $this;
    }
    
    /**
    * Gets the planner
    * Selective Planner services available to the user. Read-only. Nullable.
    *
    * @return PlannerUser The planner
    */
    public function getPlanner()
    {
        if (array_key_exists("planner", $this->_propDict)) {
            if (is_a($this->_propDict["planner"], "\Beta\Microsoft\Graph\Model\PlannerUser")) {
                return $this->_propDict["planner"];
            } else {
                $this->_propDict["planner"] = new PlannerUser($this->_propDict["planner"]);
                return $this->_propDict["planner"];
            }
        }
        return null;
    }
    
    /**
    * Sets the planner
    * Selective Planner services available to the user. Read-only. Nullable.
    *
    * @param PlannerUser $val The planner
    *
    * @return User
    */
    public function setPlanner($val)
    {
        $this->_propDict["planner"] = $val;
        return $this;
    }
    
    /**
    * Gets the insights
    * Read-only. Nullable.
    *
    * @return ItemInsights The insights
    */
    public function getInsights()
    {
        if (array_key_exists("insights", $this->_propDict)) {
            if (is_a($this->_propDict["insights"], "\Beta\Microsoft\Graph\Model\ItemInsights")) {
                return $this->_propDict["insights"];
            } else {
                $this->_propDict["insights"] = new ItemInsights($this->_propDict["insights"]);
                return $this->_propDict["insights"];
            }
        }
        return null;
    }
    
    /**
    * Sets the insights
    * Read-only. Nullable.
    *
    * @param ItemInsights $val The insights
    *
    * @return User
    */
    public function setInsights($val)
    {
        $this->_propDict["insights"] = $val;
        return $this;
    }
    
    /**
    * Gets the settings
    * Read-only. Nullable.
    *
    * @return UserSettings The settings
    */
    public function getSettings()
    {
        if (array_key_exists("settings", $this->_propDict)) {
            if (is_a($this->_propDict["settings"], "\Beta\Microsoft\Graph\Model\UserSettings")) {
                return $this->_propDict["settings"];
            } else {
                $this->_propDict["settings"] = new UserSettings($this->_propDict["settings"]);
                return $this->_propDict["settings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the settings
    * Read-only. Nullable.
    *
    * @param UserSettings $val The settings
    *
    * @return User
    */
    public function setSettings($val)
    {
        $this->_propDict["settings"] = $val;
        return $this;
    }
    
    /**
    * Gets the onenote
    * Read-only.
    *
    * @return Onenote The onenote
    */
    public function getOnenote()
    {
        if (array_key_exists("onenote", $this->_propDict)) {
            if (is_a($this->_propDict["onenote"], "\Beta\Microsoft\Graph\Model\Onenote")) {
                return $this->_propDict["onenote"];
            } else {
                $this->_propDict["onenote"] = new Onenote($this->_propDict["onenote"]);
                return $this->_propDict["onenote"];
            }
        }
        return null;
    }
    
    /**
    * Sets the onenote
    * Read-only.
    *
    * @param Onenote $val The onenote
    *
    * @return User
    */
    public function setOnenote($val)
    {
        $this->_propDict["onenote"] = $val;
        return $this;
    }
    
    /**
    * Gets the photo
    * The user's profile photo. Read-only.
    *
    * @return ProfilePhoto The photo
    */
    public function getPhoto()
    {
        if (array_key_exists("photo", $this->_propDict)) {
            if (is_a($this->_propDict["photo"], "\Beta\Microsoft\Graph\Model\ProfilePhoto")) {
                return $this->_propDict["photo"];
            } else {
                $this->_propDict["photo"] = new ProfilePhoto($this->_propDict["photo"]);
                return $this->_propDict["photo"];
            }
        }
        return null;
    }
    
    /**
    * Sets the photo
    * The user's profile photo. Read-only.
    *
    * @param ProfilePhoto $val The photo
    *
    * @return User
    */
    public function setPhoto($val)
    {
        $this->_propDict["photo"] = $val;
        return $this;
    }
    

     /** 
     * Gets the photos
    * Read-only. Nullable.
     *
     * @return array The photos
     */
    public function getPhotos()
    {
        if (array_key_exists("photos", $this->_propDict)) {
           return $this->_propDict["photos"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the photos
    * Read-only. Nullable.
    *
    * @param ProfilePhoto $val The photos
    *
    * @return User
    */
    public function setPhotos($val)
    {
		$this->_propDict["photos"] = $val;
        return $this;
    }
    
    /**
    * Gets the profile
    * Represents properties that are descriptive of a user in a tenant.
    *
    * @return Profile The profile
    */
    public function getProfile()
    {
        if (array_key_exists("profile", $this->_propDict)) {
            if (is_a($this->_propDict["profile"], "\Beta\Microsoft\Graph\Model\Profile")) {
                return $this->_propDict["profile"];
            } else {
                $this->_propDict["profile"] = new Profile($this->_propDict["profile"]);
                return $this->_propDict["profile"];
            }
        }
        return null;
    }
    
    /**
    * Sets the profile
    * Represents properties that are descriptive of a user in a tenant.
    *
    * @param Profile $val The profile
    *
    * @return User
    */
    public function setProfile($val)
    {
        $this->_propDict["profile"] = $val;
        return $this;
    }
    

     /** 
     * Gets the activities
    * The user's activities across devices. Read-only. Nullable.
     *
     * @return array The activities
     */
    public function getActivities()
    {
        if (array_key_exists("activities", $this->_propDict)) {
           return $this->_propDict["activities"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the activities
    * The user's activities across devices. Read-only. Nullable.
    *
    * @param UserActivity $val The activities
    *
    * @return User
    */
    public function setActivities($val)
    {
		$this->_propDict["activities"] = $val;
        return $this;
    }
    

     /** 
     * Gets the devices
     *
     * @return array The devices
     */
    public function getDevices()
    {
        if (array_key_exists("devices", $this->_propDict)) {
           return $this->_propDict["devices"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the devices
    *
    * @param Device $val The devices
    *
    * @return User
    */
    public function setDevices($val)
    {
		$this->_propDict["devices"] = $val;
        return $this;
    }
    

     /** 
     * Gets the onlineMeetings
     *
     * @return array The onlineMeetings
     */
    public function getOnlineMeetings()
    {
        if (array_key_exists("onlineMeetings", $this->_propDict)) {
           return $this->_propDict["onlineMeetings"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the onlineMeetings
    *
    * @param OnlineMeeting $val The onlineMeetings
    *
    * @return User
    */
    public function setOnlineMeetings($val)
    {
		$this->_propDict["onlineMeetings"] = $val;
        return $this;
    }
    
    /**
    * Gets the presence
    *
    * @return Presence The presence
    */
    public function getPresence()
    {
        if (array_key_exists("presence", $this->_propDict)) {
            if (is_a($this->_propDict["presence"], "\Beta\Microsoft\Graph\Model\Presence")) {
                return $this->_propDict["presence"];
            } else {
                $this->_propDict["presence"] = new Presence($this->_propDict["presence"]);
                return $this->_propDict["presence"];
            }
        }
        return null;
    }
    
    /**
    * Sets the presence
    *
    * @param Presence $val The presence
    *
    * @return User
    */
    public function setPresence($val)
    {
        $this->_propDict["presence"] = $val;
        return $this;
    }
    
    /**
    * Gets the authentication
    *
    * @return Authentication The authentication
    */
    public function getAuthentication()
    {
        if (array_key_exists("authentication", $this->_propDict)) {
            if (is_a($this->_propDict["authentication"], "\Beta\Microsoft\Graph\Model\Authentication")) {
                return $this->_propDict["authentication"];
            } else {
                $this->_propDict["authentication"] = new Authentication($this->_propDict["authentication"]);
                return $this->_propDict["authentication"];
            }
        }
        return null;
    }
    
    /**
    * Sets the authentication
    *
    * @param Authentication $val The authentication
    *
    * @return User
    */
    public function setAuthentication($val)
    {
        $this->_propDict["authentication"] = $val;
        return $this;
    }
    

     /** 
     * Gets the chats
     *
     * @return array The chats
     */
    public function getChats()
    {
        if (array_key_exists("chats", $this->_propDict)) {
           return $this->_propDict["chats"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the chats
    *
    * @param Chat $val The chats
    *
    * @return User
    */
    public function setChats($val)
    {
		$this->_propDict["chats"] = $val;
        return $this;
    }
    

     /** 
     * Gets the joinedTeams
    * The Microsoft Teams teams that the user is a member of. Read-only. Nullable.
     *
     * @return array The joinedTeams
     */
    public function getJoinedTeams()
    {
        if (array_key_exists("joinedTeams", $this->_propDict)) {
           return $this->_propDict["joinedTeams"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the joinedTeams
    * The Microsoft Teams teams that the user is a member of. Read-only. Nullable.
    *
    * @param Team $val The joinedTeams
    *
    * @return User
    */
    public function setJoinedTeams($val)
    {
		$this->_propDict["joinedTeams"] = $val;
        return $this;
    }
    
    /**
    * Gets the teamwork
    * A container for Microsoft Teams features available for the user. Read-only. Nullable.
    *
    * @return UserTeamwork The teamwork
    */
    public function getTeamwork()
    {
        if (array_key_exists("teamwork", $this->_propDict)) {
            if (is_a($this->_propDict["teamwork"], "\Beta\Microsoft\Graph\Model\UserTeamwork")) {
                return $this->_propDict["teamwork"];
            } else {
                $this->_propDict["teamwork"] = new UserTeamwork($this->_propDict["teamwork"]);
                return $this->_propDict["teamwork"];
            }
        }
        return null;
    }
    
    /**
    * Sets the teamwork
    * A container for Microsoft Teams features available for the user. Read-only. Nullable.
    *
    * @param UserTeamwork $val The teamwork
    *
    * @return User
    */
    public function setTeamwork($val)
    {
        $this->_propDict["teamwork"] = $val;
        return $this;
    }
    
    /**
    * Gets the todo
    * Represents the To Do services available to a user.
    *
    * @return Todo The todo
    */
    public function getTodo()
    {
        if (array_key_exists("todo", $this->_propDict)) {
            if (is_a($this->_propDict["todo"], "\Beta\Microsoft\Graph\Model\Todo")) {
                return $this->_propDict["todo"];
            } else {
                $this->_propDict["todo"] = new Todo($this->_propDict["todo"]);
                return $this->_propDict["todo"];
            }
        }
        return null;
    }
    
    /**
    * Sets the todo
    * Represents the To Do services available to a user.
    *
    * @param Todo $val The todo
    *
    * @return User
    */
    public function setTodo($val)
    {
        $this->_propDict["todo"] = $val;
        return $this;
    }
    
}
