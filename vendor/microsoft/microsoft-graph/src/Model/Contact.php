<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Contact File
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
* Contact class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Contact extends OutlookItem
{
    /**
    * Gets the assistantName
    * The name of the contact's assistant.
    *
    * @return string The assistantName
    */
    public function getAssistantName()
    {
        if (array_key_exists("assistantName", $this->_propDict)) {
            return $this->_propDict["assistantName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the assistantName
    * The name of the contact's assistant.
    *
    * @param string $val The assistantName
    *
    * @return Contact
    */
    public function setAssistantName($val)
    {
        $this->_propDict["assistantName"] = $val;
        return $this;
    }
    
    /**
    * Gets the birthday
    * The contact's birthday. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
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
    * The contact's birthday. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @param \DateTime $val The birthday
    *
    * @return Contact
    */
    public function setBirthday($val)
    {
        $this->_propDict["birthday"] = $val;
        return $this;
    }
    
    /**
    * Gets the businessAddress
    * The contact's business address.
    *
    * @return PhysicalAddress The businessAddress
    */
    public function getBusinessAddress()
    {
        if (array_key_exists("businessAddress", $this->_propDict)) {
            if (is_a($this->_propDict["businessAddress"], "\Microsoft\Graph\Model\PhysicalAddress")) {
                return $this->_propDict["businessAddress"];
            } else {
                $this->_propDict["businessAddress"] = new PhysicalAddress($this->_propDict["businessAddress"]);
                return $this->_propDict["businessAddress"];
            }
        }
        return null;
    }
    
    /**
    * Sets the businessAddress
    * The contact's business address.
    *
    * @param PhysicalAddress $val The businessAddress
    *
    * @return Contact
    */
    public function setBusinessAddress($val)
    {
        $this->_propDict["businessAddress"] = $val;
        return $this;
    }
    
    /**
    * Gets the businessHomePage
    * The business home page of the contact.
    *
    * @return string The businessHomePage
    */
    public function getBusinessHomePage()
    {
        if (array_key_exists("businessHomePage", $this->_propDict)) {
            return $this->_propDict["businessHomePage"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the businessHomePage
    * The business home page of the contact.
    *
    * @param string $val The businessHomePage
    *
    * @return Contact
    */
    public function setBusinessHomePage($val)
    {
        $this->_propDict["businessHomePage"] = $val;
        return $this;
    }
    
    /**
    * Gets the businessPhones
    * The contact's business phone numbers.
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
    * The contact's business phone numbers.
    *
    * @param string $val The businessPhones
    *
    * @return Contact
    */
    public function setBusinessPhones($val)
    {
        $this->_propDict["businessPhones"] = $val;
        return $this;
    }
    
    /**
    * Gets the children
    * The names of the contact's children.
    *
    * @return string The children
    */
    public function getChildren()
    {
        if (array_key_exists("children", $this->_propDict)) {
            return $this->_propDict["children"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the children
    * The names of the contact's children.
    *
    * @param string $val The children
    *
    * @return Contact
    */
    public function setChildren($val)
    {
        $this->_propDict["children"] = $val;
        return $this;
    }
    
    /**
    * Gets the companyName
    * The name of the contact's company.
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
    * The name of the contact's company.
    *
    * @param string $val The companyName
    *
    * @return Contact
    */
    public function setCompanyName($val)
    {
        $this->_propDict["companyName"] = $val;
        return $this;
    }
    
    /**
    * Gets the department
    * The contact's department.
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
    * The contact's department.
    *
    * @param string $val The department
    *
    * @return Contact
    */
    public function setDepartment($val)
    {
        $this->_propDict["department"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * The contact's display name. You can specify the display name in a create or update operation. Note that later updates to other properties may cause an automatically generated value to overwrite the displayName value you have specified. To preserve a pre-existing value, always include it as displayName in an update operation.
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
    * The contact's display name. You can specify the display name in a create or update operation. Note that later updates to other properties may cause an automatically generated value to overwrite the displayName value you have specified. To preserve a pre-existing value, always include it as displayName in an update operation.
    *
    * @param string $val The displayName
    *
    * @return Contact
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    

     /** 
     * Gets the emailAddresses
    * The contact's email addresses.
     *
     * @return array The emailAddresses
     */
    public function getEmailAddresses()
    {
        if (array_key_exists("emailAddresses", $this->_propDict)) {
           return $this->_propDict["emailAddresses"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the emailAddresses
    * The contact's email addresses.
    *
    * @param EmailAddress $val The emailAddresses
    *
    * @return Contact
    */
    public function setEmailAddresses($val)
    {
		$this->_propDict["emailAddresses"] = $val;
        return $this;
    }
    
    /**
    * Gets the fileAs
    * The name the contact is filed under.
    *
    * @return string The fileAs
    */
    public function getFileAs()
    {
        if (array_key_exists("fileAs", $this->_propDict)) {
            return $this->_propDict["fileAs"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the fileAs
    * The name the contact is filed under.
    *
    * @param string $val The fileAs
    *
    * @return Contact
    */
    public function setFileAs($val)
    {
        $this->_propDict["fileAs"] = $val;
        return $this;
    }
    
    /**
    * Gets the generation
    * The contact's generation.
    *
    * @return string The generation
    */
    public function getGeneration()
    {
        if (array_key_exists("generation", $this->_propDict)) {
            return $this->_propDict["generation"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the generation
    * The contact's generation.
    *
    * @param string $val The generation
    *
    * @return Contact
    */
    public function setGeneration($val)
    {
        $this->_propDict["generation"] = $val;
        return $this;
    }
    
    /**
    * Gets the givenName
    * The contact's given name.
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
    * The contact's given name.
    *
    * @param string $val The givenName
    *
    * @return Contact
    */
    public function setGivenName($val)
    {
        $this->_propDict["givenName"] = $val;
        return $this;
    }
    
    /**
    * Gets the homeAddress
    * The contact's home address.
    *
    * @return PhysicalAddress The homeAddress
    */
    public function getHomeAddress()
    {
        if (array_key_exists("homeAddress", $this->_propDict)) {
            if (is_a($this->_propDict["homeAddress"], "\Microsoft\Graph\Model\PhysicalAddress")) {
                return $this->_propDict["homeAddress"];
            } else {
                $this->_propDict["homeAddress"] = new PhysicalAddress($this->_propDict["homeAddress"]);
                return $this->_propDict["homeAddress"];
            }
        }
        return null;
    }
    
    /**
    * Sets the homeAddress
    * The contact's home address.
    *
    * @param PhysicalAddress $val The homeAddress
    *
    * @return Contact
    */
    public function setHomeAddress($val)
    {
        $this->_propDict["homeAddress"] = $val;
        return $this;
    }
    
    /**
    * Gets the homePhones
    * The contact's home phone numbers.
    *
    * @return string The homePhones
    */
    public function getHomePhones()
    {
        if (array_key_exists("homePhones", $this->_propDict)) {
            return $this->_propDict["homePhones"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the homePhones
    * The contact's home phone numbers.
    *
    * @param string $val The homePhones
    *
    * @return Contact
    */
    public function setHomePhones($val)
    {
        $this->_propDict["homePhones"] = $val;
        return $this;
    }
    
    /**
    * Gets the imAddresses
    * The contact's instant messaging (IM) addresses.
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
    * The contact's instant messaging (IM) addresses.
    *
    * @param string $val The imAddresses
    *
    * @return Contact
    */
    public function setImAddresses($val)
    {
        $this->_propDict["imAddresses"] = $val;
        return $this;
    }
    
    /**
    * Gets the initials
    * The contact's initials.
    *
    * @return string The initials
    */
    public function getInitials()
    {
        if (array_key_exists("initials", $this->_propDict)) {
            return $this->_propDict["initials"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the initials
    * The contact's initials.
    *
    * @param string $val The initials
    *
    * @return Contact
    */
    public function setInitials($val)
    {
        $this->_propDict["initials"] = $val;
        return $this;
    }
    
    /**
    * Gets the jobTitle
    * The contact’s job title.
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
    * The contact’s job title.
    *
    * @param string $val The jobTitle
    *
    * @return Contact
    */
    public function setJobTitle($val)
    {
        $this->_propDict["jobTitle"] = $val;
        return $this;
    }
    
    /**
    * Gets the manager
    * The name of the contact's manager.
    *
    * @return string The manager
    */
    public function getManager()
    {
        if (array_key_exists("manager", $this->_propDict)) {
            return $this->_propDict["manager"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the manager
    * The name of the contact's manager.
    *
    * @param string $val The manager
    *
    * @return Contact
    */
    public function setManager($val)
    {
        $this->_propDict["manager"] = $val;
        return $this;
    }
    
    /**
    * Gets the middleName
    * The contact's middle name.
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
    * The contact's middle name.
    *
    * @param string $val The middleName
    *
    * @return Contact
    */
    public function setMiddleName($val)
    {
        $this->_propDict["middleName"] = $val;
        return $this;
    }
    
    /**
    * Gets the mobilePhone
    * The contact's mobile phone number.
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
    * The contact's mobile phone number.
    *
    * @param string $val The mobilePhone
    *
    * @return Contact
    */
    public function setMobilePhone($val)
    {
        $this->_propDict["mobilePhone"] = $val;
        return $this;
    }
    
    /**
    * Gets the nickName
    * The contact's nickname.
    *
    * @return string The nickName
    */
    public function getNickName()
    {
        if (array_key_exists("nickName", $this->_propDict)) {
            return $this->_propDict["nickName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the nickName
    * The contact's nickname.
    *
    * @param string $val The nickName
    *
    * @return Contact
    */
    public function setNickName($val)
    {
        $this->_propDict["nickName"] = $val;
        return $this;
    }
    
    /**
    * Gets the officeLocation
    * The location of the contact's office.
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
    * The location of the contact's office.
    *
    * @param string $val The officeLocation
    *
    * @return Contact
    */
    public function setOfficeLocation($val)
    {
        $this->_propDict["officeLocation"] = $val;
        return $this;
    }
    
    /**
    * Gets the otherAddress
    * Other addresses for the contact.
    *
    * @return PhysicalAddress The otherAddress
    */
    public function getOtherAddress()
    {
        if (array_key_exists("otherAddress", $this->_propDict)) {
            if (is_a($this->_propDict["otherAddress"], "\Microsoft\Graph\Model\PhysicalAddress")) {
                return $this->_propDict["otherAddress"];
            } else {
                $this->_propDict["otherAddress"] = new PhysicalAddress($this->_propDict["otherAddress"]);
                return $this->_propDict["otherAddress"];
            }
        }
        return null;
    }
    
    /**
    * Sets the otherAddress
    * Other addresses for the contact.
    *
    * @param PhysicalAddress $val The otherAddress
    *
    * @return Contact
    */
    public function setOtherAddress($val)
    {
        $this->_propDict["otherAddress"] = $val;
        return $this;
    }
    
    /**
    * Gets the parentFolderId
    * The ID of the contact's parent folder.
    *
    * @return string The parentFolderId
    */
    public function getParentFolderId()
    {
        if (array_key_exists("parentFolderId", $this->_propDict)) {
            return $this->_propDict["parentFolderId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the parentFolderId
    * The ID of the contact's parent folder.
    *
    * @param string $val The parentFolderId
    *
    * @return Contact
    */
    public function setParentFolderId($val)
    {
        $this->_propDict["parentFolderId"] = $val;
        return $this;
    }
    
    /**
    * Gets the personalNotes
    * The user's notes about the contact.
    *
    * @return string The personalNotes
    */
    public function getPersonalNotes()
    {
        if (array_key_exists("personalNotes", $this->_propDict)) {
            return $this->_propDict["personalNotes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the personalNotes
    * The user's notes about the contact.
    *
    * @param string $val The personalNotes
    *
    * @return Contact
    */
    public function setPersonalNotes($val)
    {
        $this->_propDict["personalNotes"] = $val;
        return $this;
    }
    
    /**
    * Gets the profession
    * The contact's profession.
    *
    * @return string The profession
    */
    public function getProfession()
    {
        if (array_key_exists("profession", $this->_propDict)) {
            return $this->_propDict["profession"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the profession
    * The contact's profession.
    *
    * @param string $val The profession
    *
    * @return Contact
    */
    public function setProfession($val)
    {
        $this->_propDict["profession"] = $val;
        return $this;
    }
    
    /**
    * Gets the spouseName
    * The name of the contact's spouse/partner.
    *
    * @return string The spouseName
    */
    public function getSpouseName()
    {
        if (array_key_exists("spouseName", $this->_propDict)) {
            return $this->_propDict["spouseName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the spouseName
    * The name of the contact's spouse/partner.
    *
    * @param string $val The spouseName
    *
    * @return Contact
    */
    public function setSpouseName($val)
    {
        $this->_propDict["spouseName"] = $val;
        return $this;
    }
    
    /**
    * Gets the surname
    * The contact's surname.
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
    * The contact's surname.
    *
    * @param string $val The surname
    *
    * @return Contact
    */
    public function setSurname($val)
    {
        $this->_propDict["surname"] = $val;
        return $this;
    }
    
    /**
    * Gets the title
    * The contact's title.
    *
    * @return string The title
    */
    public function getTitle()
    {
        if (array_key_exists("title", $this->_propDict)) {
            return $this->_propDict["title"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the title
    * The contact's title.
    *
    * @param string $val The title
    *
    * @return Contact
    */
    public function setTitle($val)
    {
        $this->_propDict["title"] = $val;
        return $this;
    }
    
    /**
    * Gets the yomiCompanyName
    * The phonetic Japanese company name of the contact.
    *
    * @return string The yomiCompanyName
    */
    public function getYomiCompanyName()
    {
        if (array_key_exists("yomiCompanyName", $this->_propDict)) {
            return $this->_propDict["yomiCompanyName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the yomiCompanyName
    * The phonetic Japanese company name of the contact.
    *
    * @param string $val The yomiCompanyName
    *
    * @return Contact
    */
    public function setYomiCompanyName($val)
    {
        $this->_propDict["yomiCompanyName"] = $val;
        return $this;
    }
    
    /**
    * Gets the yomiGivenName
    * The phonetic Japanese given name (first name) of the contact.
    *
    * @return string The yomiGivenName
    */
    public function getYomiGivenName()
    {
        if (array_key_exists("yomiGivenName", $this->_propDict)) {
            return $this->_propDict["yomiGivenName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the yomiGivenName
    * The phonetic Japanese given name (first name) of the contact.
    *
    * @param string $val The yomiGivenName
    *
    * @return Contact
    */
    public function setYomiGivenName($val)
    {
        $this->_propDict["yomiGivenName"] = $val;
        return $this;
    }
    
    /**
    * Gets the yomiSurname
    * The phonetic Japanese surname (last name)  of the contact.
    *
    * @return string The yomiSurname
    */
    public function getYomiSurname()
    {
        if (array_key_exists("yomiSurname", $this->_propDict)) {
            return $this->_propDict["yomiSurname"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the yomiSurname
    * The phonetic Japanese surname (last name)  of the contact.
    *
    * @param string $val The yomiSurname
    *
    * @return Contact
    */
    public function setYomiSurname($val)
    {
        $this->_propDict["yomiSurname"] = $val;
        return $this;
    }
    

     /** 
     * Gets the extensions
    * The collection of open extensions defined for the contact. Nullable.
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
    * The collection of open extensions defined for the contact. Nullable.
    *
    * @param Extension $val The extensions
    *
    * @return Contact
    */
    public function setExtensions($val)
    {
		$this->_propDict["extensions"] = $val;
        return $this;
    }
    

     /** 
     * Gets the multiValueExtendedProperties
    * The collection of multi-value extended properties defined for the contact. Read-only. Nullable.
     *
     * @return array The multiValueExtendedProperties
     */
    public function getMultiValueExtendedProperties()
    {
        if (array_key_exists("multiValueExtendedProperties", $this->_propDict)) {
           return $this->_propDict["multiValueExtendedProperties"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the multiValueExtendedProperties
    * The collection of multi-value extended properties defined for the contact. Read-only. Nullable.
    *
    * @param MultiValueLegacyExtendedProperty $val The multiValueExtendedProperties
    *
    * @return Contact
    */
    public function setMultiValueExtendedProperties($val)
    {
		$this->_propDict["multiValueExtendedProperties"] = $val;
        return $this;
    }
    
    /**
    * Gets the photo
    * Optional contact picture. You can get or set a photo for a contact.
    *
    * @return ProfilePhoto The photo
    */
    public function getPhoto()
    {
        if (array_key_exists("photo", $this->_propDict)) {
            if (is_a($this->_propDict["photo"], "\Microsoft\Graph\Model\ProfilePhoto")) {
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
    * Optional contact picture. You can get or set a photo for a contact.
    *
    * @param ProfilePhoto $val The photo
    *
    * @return Contact
    */
    public function setPhoto($val)
    {
        $this->_propDict["photo"] = $val;
        return $this;
    }
    

     /** 
     * Gets the singleValueExtendedProperties
    * The collection of single-value extended properties defined for the contact. Read-only. Nullable.
     *
     * @return array The singleValueExtendedProperties
     */
    public function getSingleValueExtendedProperties()
    {
        if (array_key_exists("singleValueExtendedProperties", $this->_propDict)) {
           return $this->_propDict["singleValueExtendedProperties"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the singleValueExtendedProperties
    * The collection of single-value extended properties defined for the contact. Read-only. Nullable.
    *
    * @param SingleValueLegacyExtendedProperty $val The singleValueExtendedProperties
    *
    * @return Contact
    */
    public function setSingleValueExtendedProperties($val)
    {
		$this->_propDict["singleValueExtendedProperties"] = $val;
        return $this;
    }
    
}
