<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EducationUser File
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
* EducationUser class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EducationUser extends Entity
{
    /**
    * Gets the accountEnabled
    * True if the account is enabled; otherwise, false. This property is required when a user is created. Supports /$filter.
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
    * True if the account is enabled; otherwise, false. This property is required when a user is created. Supports /$filter.
    *
    * @param bool $val The accountEnabled
    *
    * @return EducationUser
    */
    public function setAccountEnabled($val)
    {
        $this->_propDict["accountEnabled"] = boolval($val);
        return $this;
    }
    

     /** 
     * Gets the assignedLicenses
    * The licenses that are assigned to the user. Not nullable.
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
    * The licenses that are assigned to the user. Not nullable.
    *
    * @param AssignedLicense $val The assignedLicenses
    *
    * @return EducationUser
    */
    public function setAssignedLicenses($val)
    {
		$this->_propDict["assignedLicenses"] = $val;
        return $this;
    }
    

     /** 
     * Gets the assignedPlans
    * The plans that are assigned to the user. Read-only. Not nullable.
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
    * The plans that are assigned to the user. Read-only. Not nullable.
    *
    * @param AssignedPlan $val The assignedPlans
    *
    * @return EducationUser
    */
    public function setAssignedPlans($val)
    {
		$this->_propDict["assignedPlans"] = $val;
        return $this;
    }
    
    /**
    * Gets the businessPhones
    * The telephone numbers for the user. Note: Although this is a string collection, only one number can be set for this property.
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
    * The telephone numbers for the user. Note: Although this is a string collection, only one number can be set for this property.
    *
    * @param string $val The businessPhones
    *
    * @return EducationUser
    */
    public function setBusinessPhones($val)
    {
        $this->_propDict["businessPhones"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdBy
    * Entity who created the user.
    *
    * @return IdentitySet The createdBy
    */
    public function getCreatedBy()
    {
        if (array_key_exists("createdBy", $this->_propDict)) {
            if (is_a($this->_propDict["createdBy"], "\Microsoft\Graph\Model\IdentitySet")) {
                return $this->_propDict["createdBy"];
            } else {
                $this->_propDict["createdBy"] = new IdentitySet($this->_propDict["createdBy"]);
                return $this->_propDict["createdBy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the createdBy
    * Entity who created the user.
    *
    * @param IdentitySet $val The createdBy
    *
    * @return EducationUser
    */
    public function setCreatedBy($val)
    {
        $this->_propDict["createdBy"] = $val;
        return $this;
    }
    
    /**
    * Gets the department
    * The name for the department in which the user works. Supports /$filter.
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
    * The name for the department in which the user works. Supports /$filter.
    *
    * @param string $val The department
    *
    * @return EducationUser
    */
    public function setDepartment($val)
    {
        $this->_propDict["department"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * The name displayed in the address book for the user. Supports $filter and $orderby.
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
    * The name displayed in the address book for the user. Supports $filter and $orderby.
    *
    * @param string $val The displayName
    *
    * @return EducationUser
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the externalSource
    * The type of external source this resource was generated from (automatically determined from externalSourceDetail). Possible values are: sis, lms, or manual.
    *
    * @return EducationExternalSource The externalSource
    */
    public function getExternalSource()
    {
        if (array_key_exists("externalSource", $this->_propDict)) {
            if (is_a($this->_propDict["externalSource"], "\Microsoft\Graph\Model\EducationExternalSource")) {
                return $this->_propDict["externalSource"];
            } else {
                $this->_propDict["externalSource"] = new EducationExternalSource($this->_propDict["externalSource"]);
                return $this->_propDict["externalSource"];
            }
        }
        return null;
    }
    
    /**
    * Sets the externalSource
    * The type of external source this resource was generated from (automatically determined from externalSourceDetail). Possible values are: sis, lms, or manual.
    *
    * @param EducationExternalSource $val The externalSource
    *
    * @return EducationUser
    */
    public function setExternalSource($val)
    {
        $this->_propDict["externalSource"] = $val;
        return $this;
    }
    
    /**
    * Gets the externalSourceDetail
    * The name of the external source this resources was generated from.
    *
    * @return string The externalSourceDetail
    */
    public function getExternalSourceDetail()
    {
        if (array_key_exists("externalSourceDetail", $this->_propDict)) {
            return $this->_propDict["externalSourceDetail"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the externalSourceDetail
    * The name of the external source this resources was generated from.
    *
    * @param string $val The externalSourceDetail
    *
    * @return EducationUser
    */
    public function setExternalSourceDetail($val)
    {
        $this->_propDict["externalSourceDetail"] = $val;
        return $this;
    }
    
    /**
    * Gets the givenName
    * The given name (first name) of the user. Supports /$filter.
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
    * The given name (first name) of the user. Supports /$filter.
    *
    * @param string $val The givenName
    *
    * @return EducationUser
    */
    public function setGivenName($val)
    {
        $this->_propDict["givenName"] = $val;
        return $this;
    }
    
    /**
    * Gets the mail
    * The SMTP address for the user; for example, 'jeff@contoso.onmicrosoft.com'. Read-Only. Supports /$filter.
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
    * The SMTP address for the user; for example, 'jeff@contoso.onmicrosoft.com'. Read-Only. Supports /$filter.
    *
    * @param string $val The mail
    *
    * @return EducationUser
    */
    public function setMail($val)
    {
        $this->_propDict["mail"] = $val;
        return $this;
    }
    
    /**
    * Gets the mailingAddress
    * Mail address of user. Note: type and postOfficeBox are not supported for educationUser resources.
    *
    * @return PhysicalAddress The mailingAddress
    */
    public function getMailingAddress()
    {
        if (array_key_exists("mailingAddress", $this->_propDict)) {
            if (is_a($this->_propDict["mailingAddress"], "\Microsoft\Graph\Model\PhysicalAddress")) {
                return $this->_propDict["mailingAddress"];
            } else {
                $this->_propDict["mailingAddress"] = new PhysicalAddress($this->_propDict["mailingAddress"]);
                return $this->_propDict["mailingAddress"];
            }
        }
        return null;
    }
    
    /**
    * Sets the mailingAddress
    * Mail address of user. Note: type and postOfficeBox are not supported for educationUser resources.
    *
    * @param PhysicalAddress $val The mailingAddress
    *
    * @return EducationUser
    */
    public function setMailingAddress($val)
    {
        $this->_propDict["mailingAddress"] = $val;
        return $this;
    }
    
    /**
    * Gets the mailNickname
    * The mail alias for the user. This property must be specified when a user is created. Supports /$filter.
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
    * The mail alias for the user. This property must be specified when a user is created. Supports /$filter.
    *
    * @param string $val The mailNickname
    *
    * @return EducationUser
    */
    public function setMailNickname($val)
    {
        $this->_propDict["mailNickname"] = $val;
        return $this;
    }
    
    /**
    * Gets the middleName
    * The middle name of user.
    *
    * @return string The middleName
    */
    public function getMiddleName()
    {
        if (array_key_exists("middleName", $this->_propDict)) {
            return $this->_propDict["middleName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the middleName
    * The middle name of user.
    *
    * @param string $val The middleName
    *
    * @return EducationUser
    */
    public function setMiddleName($val)
    {
        $this->_propDict["middleName"] = $val;
        return $this;
    }
    
    /**
    * Gets the mobilePhone
    * The primary cellular telephone number for the user.
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
    * The primary cellular telephone number for the user.
    *
    * @param string $val The mobilePhone
    *
    * @return EducationUser
    */
    public function setMobilePhone($val)
    {
        $this->_propDict["mobilePhone"] = $val;
        return $this;
    }
    
    /**
    * Gets the officeLocation
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
    *
    * @param string $val The officeLocation
    *
    * @return EducationUser
    */
    public function setOfficeLocation($val)
    {
        $this->_propDict["officeLocation"] = $val;
        return $this;
    }
    
    /**
    * Gets the onPremisesInfo
    * Additional information used to associate the AAD user with it's Active Directory counterpart.
    *
    * @return EducationOnPremisesInfo The onPremisesInfo
    */
    public function getOnPremisesInfo()
    {
        if (array_key_exists("onPremisesInfo", $this->_propDict)) {
            if (is_a($this->_propDict["onPremisesInfo"], "\Microsoft\Graph\Model\EducationOnPremisesInfo")) {
                return $this->_propDict["onPremisesInfo"];
            } else {
                $this->_propDict["onPremisesInfo"] = new EducationOnPremisesInfo($this->_propDict["onPremisesInfo"]);
                return $this->_propDict["onPremisesInfo"];
            }
        }
        return null;
    }
    
    /**
    * Sets the onPremisesInfo
    * Additional information used to associate the AAD user with it's Active Directory counterpart.
    *
    * @param EducationOnPremisesInfo $val The onPremisesInfo
    *
    * @return EducationUser
    */
    public function setOnPremisesInfo($val)
    {
        $this->_propDict["onPremisesInfo"] = $val;
        return $this;
    }
    
    /**
    * Gets the passwordPolicies
    * Specifies password policies for the user. See standard [user] resource for additional details.
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
    * Specifies password policies for the user. See standard [user] resource for additional details.
    *
    * @param string $val The passwordPolicies
    *
    * @return EducationUser
    */
    public function setPasswordPolicies($val)
    {
        $this->_propDict["passwordPolicies"] = $val;
        return $this;
    }
    
    /**
    * Gets the passwordProfile
    * Specifies the password profile for the user. The profile contains the user's password. This property is required when a user is created. See standard [user] resource for additional details.
    *
    * @return PasswordProfile The passwordProfile
    */
    public function getPasswordProfile()
    {
        if (array_key_exists("passwordProfile", $this->_propDict)) {
            if (is_a($this->_propDict["passwordProfile"], "\Microsoft\Graph\Model\PasswordProfile")) {
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
    * Specifies the password profile for the user. The profile contains the user's password. This property is required when a user is created. See standard [user] resource for additional details.
    *
    * @param PasswordProfile $val The passwordProfile
    *
    * @return EducationUser
    */
    public function setPasswordProfile($val)
    {
        $this->_propDict["passwordProfile"] = $val;
        return $this;
    }
    
    /**
    * Gets the preferredLanguage
    * The preferred language for the user. Should follow ISO 639-1 Code; for example, 'en-US'.
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
    * The preferred language for the user. Should follow ISO 639-1 Code; for example, 'en-US'.
    *
    * @param string $val The preferredLanguage
    *
    * @return EducationUser
    */
    public function setPreferredLanguage($val)
    {
        $this->_propDict["preferredLanguage"] = $val;
        return $this;
    }
    
    /**
    * Gets the primaryRole
    * Default role for a user. The user's role might be different in an individual class. Possible values are: student, teacher, faculty. Supports /$filter.
    *
    * @return EducationUserRole The primaryRole
    */
    public function getPrimaryRole()
    {
        if (array_key_exists("primaryRole", $this->_propDict)) {
            if (is_a($this->_propDict["primaryRole"], "\Microsoft\Graph\Model\EducationUserRole")) {
                return $this->_propDict["primaryRole"];
            } else {
                $this->_propDict["primaryRole"] = new EducationUserRole($this->_propDict["primaryRole"]);
                return $this->_propDict["primaryRole"];
            }
        }
        return null;
    }
    
    /**
    * Sets the primaryRole
    * Default role for a user. The user's role might be different in an individual class. Possible values are: student, teacher, faculty. Supports /$filter.
    *
    * @param EducationUserRole $val The primaryRole
    *
    * @return EducationUser
    */
    public function setPrimaryRole($val)
    {
        $this->_propDict["primaryRole"] = $val;
        return $this;
    }
    

     /** 
     * Gets the provisionedPlans
    * The plans that are provisioned for the user. Read-only. Not nullable.
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
    * The plans that are provisioned for the user. Read-only. Not nullable.
    *
    * @param ProvisionedPlan $val The provisionedPlans
    *
    * @return EducationUser
    */
    public function setProvisionedPlans($val)
    {
		$this->_propDict["provisionedPlans"] = $val;
        return $this;
    }
    
    /**
    * Gets the refreshTokensValidFromDateTime
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
    *
    * @param \DateTime $val The refreshTokensValidFromDateTime
    *
    * @return EducationUser
    */
    public function setRefreshTokensValidFromDateTime($val)
    {
        $this->_propDict["refreshTokensValidFromDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the residenceAddress
    * Address where user lives. Note: type and postOfficeBox are not supported for educationUser resources.
    *
    * @return PhysicalAddress The residenceAddress
    */
    public function getResidenceAddress()
    {
        if (array_key_exists("residenceAddress", $this->_propDict)) {
            if (is_a($this->_propDict["residenceAddress"], "\Microsoft\Graph\Model\PhysicalAddress")) {
                return $this->_propDict["residenceAddress"];
            } else {
                $this->_propDict["residenceAddress"] = new PhysicalAddress($this->_propDict["residenceAddress"]);
                return $this->_propDict["residenceAddress"];
            }
        }
        return null;
    }
    
    /**
    * Sets the residenceAddress
    * Address where user lives. Note: type and postOfficeBox are not supported for educationUser resources.
    *
    * @param PhysicalAddress $val The residenceAddress
    *
    * @return EducationUser
    */
    public function setResidenceAddress($val)
    {
        $this->_propDict["residenceAddress"] = $val;
        return $this;
    }
    
    /**
    * Gets the showInAddressList
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
    *
    * @param bool $val The showInAddressList
    *
    * @return EducationUser
    */
    public function setShowInAddressList($val)
    {
        $this->_propDict["showInAddressList"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the student
    * If the primary role is student, this block will contain student specific data.
    *
    * @return EducationStudent The student
    */
    public function getStudent()
    {
        if (array_key_exists("student", $this->_propDict)) {
            if (is_a($this->_propDict["student"], "\Microsoft\Graph\Model\EducationStudent")) {
                return $this->_propDict["student"];
            } else {
                $this->_propDict["student"] = new EducationStudent($this->_propDict["student"]);
                return $this->_propDict["student"];
            }
        }
        return null;
    }
    
    /**
    * Sets the student
    * If the primary role is student, this block will contain student specific data.
    *
    * @param EducationStudent $val The student
    *
    * @return EducationUser
    */
    public function setStudent($val)
    {
        $this->_propDict["student"] = $val;
        return $this;
    }
    
    /**
    * Gets the surname
    * The user's surname (family name or last name). Supports /$filter.
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
    * The user's surname (family name or last name). Supports /$filter.
    *
    * @param string $val The surname
    *
    * @return EducationUser
    */
    public function setSurname($val)
    {
        $this->_propDict["surname"] = $val;
        return $this;
    }
    
    /**
    * Gets the teacher
    * If the primary role is teacher, this block will contain teacher specific data.
    *
    * @return EducationTeacher The teacher
    */
    public function getTeacher()
    {
        if (array_key_exists("teacher", $this->_propDict)) {
            if (is_a($this->_propDict["teacher"], "\Microsoft\Graph\Model\EducationTeacher")) {
                return $this->_propDict["teacher"];
            } else {
                $this->_propDict["teacher"] = new EducationTeacher($this->_propDict["teacher"]);
                return $this->_propDict["teacher"];
            }
        }
        return null;
    }
    
    /**
    * Sets the teacher
    * If the primary role is teacher, this block will contain teacher specific data.
    *
    * @param EducationTeacher $val The teacher
    *
    * @return EducationUser
    */
    public function setTeacher($val)
    {
        $this->_propDict["teacher"] = $val;
        return $this;
    }
    
    /**
    * Gets the usageLocation
    * A two-letter country code ([ISO 3166 Alpha-2]). Required for users who will be assigned licenses. Not nullable. Supports /$filter.
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
    * A two-letter country code ([ISO 3166 Alpha-2]). Required for users who will be assigned licenses. Not nullable. Supports /$filter.
    *
    * @param string $val The usageLocation
    *
    * @return EducationUser
    */
    public function setUsageLocation($val)
    {
        $this->_propDict["usageLocation"] = $val;
        return $this;
    }
    
    /**
    * Gets the userPrincipalName
    * The user principal name (UPN) for the user. Supports $filter and $orderby. See standard [user] resource for additional details.
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
    * The user principal name (UPN) for the user. Supports $filter and $orderby. See standard [user] resource for additional details.
    *
    * @param string $val The userPrincipalName
    *
    * @return EducationUser
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }
    
    /**
    * Gets the userType
    * A string value that can be used to classify user types in your directory, such as 'Member' and 'Guest'. Supports /$filter.
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
    * A string value that can be used to classify user types in your directory, such as 'Member' and 'Guest'. Supports /$filter.
    *
    * @param string $val The userType
    *
    * @return EducationUser
    */
    public function setUserType($val)
    {
        $this->_propDict["userType"] = $val;
        return $this;
    }
    

     /** 
     * Gets the classes
    * Classes to which the user belongs. Nullable.
     *
     * @return array The classes
     */
    public function getClasses()
    {
        if (array_key_exists("classes", $this->_propDict)) {
           return $this->_propDict["classes"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the classes
    * Classes to which the user belongs. Nullable.
    *
    * @param EducationClass $val The classes
    *
    * @return EducationUser
    */
    public function setClasses($val)
    {
		$this->_propDict["classes"] = $val;
        return $this;
    }
    

     /** 
     * Gets the schools
    * Schools to which the user belongs. Nullable.
     *
     * @return array The schools
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
    * Schools to which the user belongs. Nullable.
    *
    * @param EducationSchool $val The schools
    *
    * @return EducationUser
    */
    public function setSchools($val)
    {
		$this->_propDict["schools"] = $val;
        return $this;
    }
    

     /** 
     * Gets the taughtClasses
    * Classes for which the user is a teacher.
     *
     * @return array The taughtClasses
     */
    public function getTaughtClasses()
    {
        if (array_key_exists("taughtClasses", $this->_propDict)) {
           return $this->_propDict["taughtClasses"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the taughtClasses
    * Classes for which the user is a teacher.
    *
    * @param EducationClass $val The taughtClasses
    *
    * @return EducationUser
    */
    public function setTaughtClasses($val)
    {
		$this->_propDict["taughtClasses"] = $val;
        return $this;
    }
    
    /**
    * Gets the user
    * The directory user corresponding to this user.
    *
    * @return User The user
    */
    public function getUser()
    {
        if (array_key_exists("user", $this->_propDict)) {
            if (is_a($this->_propDict["user"], "\Microsoft\Graph\Model\User")) {
                return $this->_propDict["user"];
            } else {
                $this->_propDict["user"] = new User($this->_propDict["user"]);
                return $this->_propDict["user"];
            }
        }
        return null;
    }
    
    /**
    * Sets the user
    * The directory user corresponding to this user.
    *
    * @param User $val The user
    *
    * @return EducationUser
    */
    public function setUser($val)
    {
        $this->_propDict["user"] = $val;
        return $this;
    }
    
}
