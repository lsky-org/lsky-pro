<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Profile File
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
* Profile class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Profile extends Entity
{

     /** 
     * Gets the account
     *
     * @return array The account
     */
    public function getAccount()
    {
        if (array_key_exists("account", $this->_propDict)) {
           return $this->_propDict["account"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the account
    *
    * @param UserAccountInformation $val The account
    *
    * @return Profile
    */
    public function setAccount($val)
    {
		$this->_propDict["account"] = $val;
        return $this;
    }
    

     /** 
     * Gets the addresses
    * Represents details of addresses associated with the user.
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
    * Represents details of addresses associated with the user.
    *
    * @param ItemAddress $val The addresses
    *
    * @return Profile
    */
    public function setAddresses($val)
    {
		$this->_propDict["addresses"] = $val;
        return $this;
    }
    

     /** 
     * Gets the anniversaries
    * Represents the details of meaningful dates associated with a person.
     *
     * @return array The anniversaries
     */
    public function getAnniversaries()
    {
        if (array_key_exists("anniversaries", $this->_propDict)) {
           return $this->_propDict["anniversaries"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the anniversaries
    * Represents the details of meaningful dates associated with a person.
    *
    * @param PersonAnnualEvent $val The anniversaries
    *
    * @return Profile
    */
    public function setAnniversaries($val)
    {
		$this->_propDict["anniversaries"] = $val;
        return $this;
    }
    

     /** 
     * Gets the awards
    * Represents the details of awards or honors associated with a person.
     *
     * @return array The awards
     */
    public function getAwards()
    {
        if (array_key_exists("awards", $this->_propDict)) {
           return $this->_propDict["awards"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the awards
    * Represents the details of awards or honors associated with a person.
    *
    * @param PersonAward $val The awards
    *
    * @return Profile
    */
    public function setAwards($val)
    {
		$this->_propDict["awards"] = $val;
        return $this;
    }
    

     /** 
     * Gets the certifications
    * Represents the details of certifications associated with a person.
     *
     * @return array The certifications
     */
    public function getCertifications()
    {
        if (array_key_exists("certifications", $this->_propDict)) {
           return $this->_propDict["certifications"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the certifications
    * Represents the details of certifications associated with a person.
    *
    * @param PersonCertification $val The certifications
    *
    * @return Profile
    */
    public function setCertifications($val)
    {
		$this->_propDict["certifications"] = $val;
        return $this;
    }
    

     /** 
     * Gets the educationalActivities
    * Represents data that a user has supplied related to undergraduate, graduate, postgraduate or other educational activities.
     *
     * @return array The educationalActivities
     */
    public function getEducationalActivities()
    {
        if (array_key_exists("educationalActivities", $this->_propDict)) {
           return $this->_propDict["educationalActivities"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the educationalActivities
    * Represents data that a user has supplied related to undergraduate, graduate, postgraduate or other educational activities.
    *
    * @param EducationalActivity $val The educationalActivities
    *
    * @return Profile
    */
    public function setEducationalActivities($val)
    {
		$this->_propDict["educationalActivities"] = $val;
        return $this;
    }
    

     /** 
     * Gets the emails
    * Represents detailed information about email addresses associated with the user.
     *
     * @return array The emails
     */
    public function getEmails()
    {
        if (array_key_exists("emails", $this->_propDict)) {
           return $this->_propDict["emails"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the emails
    * Represents detailed information about email addresses associated with the user.
    *
    * @param ItemEmail $val The emails
    *
    * @return Profile
    */
    public function setEmails($val)
    {
		$this->_propDict["emails"] = $val;
        return $this;
    }
    

     /** 
     * Gets the interests
    * Provides detailed information about interests the user has associated with themselves in various services.
     *
     * @return array The interests
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
    * Provides detailed information about interests the user has associated with themselves in various services.
    *
    * @param PersonInterest $val The interests
    *
    * @return Profile
    */
    public function setInterests($val)
    {
		$this->_propDict["interests"] = $val;
        return $this;
    }
    

     /** 
     * Gets the languages
    * Represents detailed information about languages that a user has added to their profile.
     *
     * @return array The languages
     */
    public function getLanguages()
    {
        if (array_key_exists("languages", $this->_propDict)) {
           return $this->_propDict["languages"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the languages
    * Represents detailed information about languages that a user has added to their profile.
    *
    * @param LanguageProficiency $val The languages
    *
    * @return Profile
    */
    public function setLanguages($val)
    {
		$this->_propDict["languages"] = $val;
        return $this;
    }
    

     /** 
     * Gets the names
    * Represents the names a user has added to their profile.
     *
     * @return array The names
     */
    public function getNames()
    {
        if (array_key_exists("names", $this->_propDict)) {
           return $this->_propDict["names"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the names
    * Represents the names a user has added to their profile.
    *
    * @param PersonName $val The names
    *
    * @return Profile
    */
    public function setNames($val)
    {
		$this->_propDict["names"] = $val;
        return $this;
    }
    

     /** 
     * Gets the notes
    * Represents notes that a user has added to their profile.
     *
     * @return array The notes
     */
    public function getNotes()
    {
        if (array_key_exists("notes", $this->_propDict)) {
           return $this->_propDict["notes"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the notes
    * Represents notes that a user has added to their profile.
    *
    * @param PersonAnnotation $val The notes
    *
    * @return Profile
    */
    public function setNotes($val)
    {
		$this->_propDict["notes"] = $val;
        return $this;
    }
    

     /** 
     * Gets the patents
    * Represents patents that a user has added to their profile.
     *
     * @return array The patents
     */
    public function getPatents()
    {
        if (array_key_exists("patents", $this->_propDict)) {
           return $this->_propDict["patents"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the patents
    * Represents patents that a user has added to their profile.
    *
    * @param ItemPatent $val The patents
    *
    * @return Profile
    */
    public function setPatents($val)
    {
		$this->_propDict["patents"] = $val;
        return $this;
    }
    

     /** 
     * Gets the phones
    * Represents detailed information about phone numbers associated with a user in various services.
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
    * Represents detailed information about phone numbers associated with a user in various services.
    *
    * @param ItemPhone $val The phones
    *
    * @return Profile
    */
    public function setPhones($val)
    {
		$this->_propDict["phones"] = $val;
        return $this;
    }
    

     /** 
     * Gets the positions
    * Represents detailed information about work positions associated with a user's profile.
     *
     * @return array The positions
     */
    public function getPositions()
    {
        if (array_key_exists("positions", $this->_propDict)) {
           return $this->_propDict["positions"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the positions
    * Represents detailed information about work positions associated with a user's profile.
    *
    * @param WorkPosition $val The positions
    *
    * @return Profile
    */
    public function setPositions($val)
    {
		$this->_propDict["positions"] = $val;
        return $this;
    }
    

     /** 
     * Gets the projects
    * Represents detailed information about projects associated with a user.
     *
     * @return array The projects
     */
    public function getProjects()
    {
        if (array_key_exists("projects", $this->_propDict)) {
           return $this->_propDict["projects"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the projects
    * Represents detailed information about projects associated with a user.
    *
    * @param ProjectParticipation $val The projects
    *
    * @return Profile
    */
    public function setProjects($val)
    {
		$this->_propDict["projects"] = $val;
        return $this;
    }
    

     /** 
     * Gets the publications
    * Represents details of any publications a user has added to their profile.
     *
     * @return array The publications
     */
    public function getPublications()
    {
        if (array_key_exists("publications", $this->_propDict)) {
           return $this->_propDict["publications"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the publications
    * Represents details of any publications a user has added to their profile.
    *
    * @param ItemPublication $val The publications
    *
    * @return Profile
    */
    public function setPublications($val)
    {
		$this->_propDict["publications"] = $val;
        return $this;
    }
    

     /** 
     * Gets the skills
    * Represents detailed information about skills associated with a user in various services.
     *
     * @return array The skills
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
    * Represents detailed information about skills associated with a user in various services.
    *
    * @param SkillProficiency $val The skills
    *
    * @return Profile
    */
    public function setSkills($val)
    {
		$this->_propDict["skills"] = $val;
        return $this;
    }
    

     /** 
     * Gets the webAccounts
    * Represents web accounts the user has indicated they use or has added to their user profile.
     *
     * @return array The webAccounts
     */
    public function getWebAccounts()
    {
        if (array_key_exists("webAccounts", $this->_propDict)) {
           return $this->_propDict["webAccounts"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the webAccounts
    * Represents web accounts the user has indicated they use or has added to their user profile.
    *
    * @param WebAccount $val The webAccounts
    *
    * @return Profile
    */
    public function setWebAccounts($val)
    {
		$this->_propDict["webAccounts"] = $val;
        return $this;
    }
    

     /** 
     * Gets the websites
    * Represents detailed information about websites associated with a user in various services.
     *
     * @return array The websites
     */
    public function getWebsites()
    {
        if (array_key_exists("websites", $this->_propDict)) {
           return $this->_propDict["websites"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the websites
    * Represents detailed information about websites associated with a user in various services.
    *
    * @param PersonWebsite $val The websites
    *
    * @return Profile
    */
    public function setWebsites($val)
    {
		$this->_propDict["websites"] = $val;
        return $this;
    }
    
}
