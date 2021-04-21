<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RelatedContact File
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
* RelatedContact class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RelatedContact extends Entity
{
    /**
    * Gets the accessConsent
    * Indicates whether the user has been consented to access student data.
    *
    * @return bool The accessConsent
    */
    public function getAccessConsent()
    {
        if (array_key_exists("accessConsent", $this->_propDict)) {
            return $this->_propDict["accessConsent"];
        } else {
            return null;
        }
    }

    /**
    * Sets the accessConsent
    * Indicates whether the user has been consented to access student data.
    *
    * @param bool $val The value of the accessConsent
    *
    * @return RelatedContact
    */
    public function setAccessConsent($val)
    {
        $this->_propDict["accessConsent"] = $val;
        return $this;
    }
    /**
    * Gets the displayName
    * Name of the contact. Required.
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
    * Name of the contact. Required.
    *
    * @param string $val The value of the displayName
    *
    * @return RelatedContact
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    /**
    * Gets the emailAddress
    * Email address of the contact.
    *
    * @return string The emailAddress
    */
    public function getEmailAddress()
    {
        if (array_key_exists("emailAddress", $this->_propDict)) {
            return $this->_propDict["emailAddress"];
        } else {
            return null;
        }
    }

    /**
    * Sets the emailAddress
    * Email address of the contact.
    *
    * @param string $val The value of the emailAddress
    *
    * @return RelatedContact
    */
    public function setEmailAddress($val)
    {
        $this->_propDict["emailAddress"] = $val;
        return $this;
    }
    /**
    * Gets the id
    * Identity of the contact within Azure Active Directory.
    *
    * @return string The id
    */
    public function getId()
    {
        if (array_key_exists("id", $this->_propDict)) {
            return $this->_propDict["id"];
        } else {
            return null;
        }
    }

    /**
    * Sets the id
    * Identity of the contact within Azure Active Directory.
    *
    * @param string $val The value of the id
    *
    * @return RelatedContact
    */
    public function setId($val)
    {
        $this->_propDict["id"] = $val;
        return $this;
    }
    /**
    * Gets the mobilePhone
    * Mobile phone number of the contact.
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
    * Mobile phone number of the contact.
    *
    * @param string $val The value of the mobilePhone
    *
    * @return RelatedContact
    */
    public function setMobilePhone($val)
    {
        $this->_propDict["mobilePhone"] = $val;
        return $this;
    }

    /**
    * Gets the relationship
    * Relationship to the user. Possible values are: parent, relative, aide, doctor, guardian, child, other, unknownFutureValue.
    *
    * @return ContactRelationship The relationship
    */
    public function getRelationship()
    {
        if (array_key_exists("relationship", $this->_propDict)) {
            if (is_a($this->_propDict["relationship"], "\Beta\Microsoft\Graph\Model\ContactRelationship")) {
                return $this->_propDict["relationship"];
            } else {
                $this->_propDict["relationship"] = new ContactRelationship($this->_propDict["relationship"]);
                return $this->_propDict["relationship"];
            }
        }
        return null;
    }

    /**
    * Sets the relationship
    * Relationship to the user. Possible values are: parent, relative, aide, doctor, guardian, child, other, unknownFutureValue.
    *
    * @param ContactRelationship $val The value to assign to the relationship
    *
    * @return RelatedContact The RelatedContact
    */
    public function setRelationship($val)
    {
        $this->_propDict["relationship"] = $val;
         return $this;
    }
}
