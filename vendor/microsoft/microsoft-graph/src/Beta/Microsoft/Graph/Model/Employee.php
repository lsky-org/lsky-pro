<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Employee File
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
* Employee class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Employee extends Entity
{
    /**
    * Gets the address
    *
    * @return PostalAddressType The address
    */
    public function getAddress()
    {
        if (array_key_exists("address", $this->_propDict)) {
            if (is_a($this->_propDict["address"], "\Beta\Microsoft\Graph\Model\PostalAddressType")) {
                return $this->_propDict["address"];
            } else {
                $this->_propDict["address"] = new PostalAddressType($this->_propDict["address"]);
                return $this->_propDict["address"];
            }
        }
        return null;
    }
    
    /**
    * Sets the address
    *
    * @param PostalAddressType $val The address
    *
    * @return Employee
    */
    public function setAddress($val)
    {
        $this->_propDict["address"] = $val;
        return $this;
    }
    
    /**
    * Gets the birthDate
    *
    * @return \DateTime The birthDate
    */
    public function getBirthDate()
    {
        if (array_key_exists("birthDate", $this->_propDict)) {
            if (is_a($this->_propDict["birthDate"], "\DateTime")) {
                return $this->_propDict["birthDate"];
            } else {
                $this->_propDict["birthDate"] = new \DateTime($this->_propDict["birthDate"]);
                return $this->_propDict["birthDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the birthDate
    *
    * @param \DateTime $val The birthDate
    *
    * @return Employee
    */
    public function setBirthDate($val)
    {
        $this->_propDict["birthDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
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
    *
    * @param string $val The displayName
    *
    * @return Employee
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the email
    *
    * @return string The email
    */
    public function getEmail()
    {
        if (array_key_exists("email", $this->_propDict)) {
            return $this->_propDict["email"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the email
    *
    * @param string $val The email
    *
    * @return Employee
    */
    public function setEmail($val)
    {
        $this->_propDict["email"] = $val;
        return $this;
    }
    
    /**
    * Gets the employmentDate
    *
    * @return \DateTime The employmentDate
    */
    public function getEmploymentDate()
    {
        if (array_key_exists("employmentDate", $this->_propDict)) {
            if (is_a($this->_propDict["employmentDate"], "\DateTime")) {
                return $this->_propDict["employmentDate"];
            } else {
                $this->_propDict["employmentDate"] = new \DateTime($this->_propDict["employmentDate"]);
                return $this->_propDict["employmentDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the employmentDate
    *
    * @param \DateTime $val The employmentDate
    *
    * @return Employee
    */
    public function setEmploymentDate($val)
    {
        $this->_propDict["employmentDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the givenName
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
    *
    * @param string $val The givenName
    *
    * @return Employee
    */
    public function setGivenName($val)
    {
        $this->_propDict["givenName"] = $val;
        return $this;
    }
    
    /**
    * Gets the jobTitle
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
    *
    * @param string $val The jobTitle
    *
    * @return Employee
    */
    public function setJobTitle($val)
    {
        $this->_propDict["jobTitle"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastModifiedDateTime
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
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return Employee
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the middleName
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
    *
    * @param string $val The middleName
    *
    * @return Employee
    */
    public function setMiddleName($val)
    {
        $this->_propDict["middleName"] = $val;
        return $this;
    }
    
    /**
    * Gets the mobilePhone
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
    *
    * @param string $val The mobilePhone
    *
    * @return Employee
    */
    public function setMobilePhone($val)
    {
        $this->_propDict["mobilePhone"] = $val;
        return $this;
    }
    
    /**
    * Gets the number
    *
    * @return string The number
    */
    public function getNumber()
    {
        if (array_key_exists("number", $this->_propDict)) {
            return $this->_propDict["number"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the number
    *
    * @param string $val The number
    *
    * @return Employee
    */
    public function setNumber($val)
    {
        $this->_propDict["number"] = $val;
        return $this;
    }
    
    /**
    * Gets the personalEmail
    *
    * @return string The personalEmail
    */
    public function getPersonalEmail()
    {
        if (array_key_exists("personalEmail", $this->_propDict)) {
            return $this->_propDict["personalEmail"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the personalEmail
    *
    * @param string $val The personalEmail
    *
    * @return Employee
    */
    public function setPersonalEmail($val)
    {
        $this->_propDict["personalEmail"] = $val;
        return $this;
    }
    
    /**
    * Gets the phoneNumber
    *
    * @return string The phoneNumber
    */
    public function getPhoneNumber()
    {
        if (array_key_exists("phoneNumber", $this->_propDict)) {
            return $this->_propDict["phoneNumber"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the phoneNumber
    *
    * @param string $val The phoneNumber
    *
    * @return Employee
    */
    public function setPhoneNumber($val)
    {
        $this->_propDict["phoneNumber"] = $val;
        return $this;
    }
    
    /**
    * Gets the statisticsGroupCode
    *
    * @return string The statisticsGroupCode
    */
    public function getStatisticsGroupCode()
    {
        if (array_key_exists("statisticsGroupCode", $this->_propDict)) {
            return $this->_propDict["statisticsGroupCode"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the statisticsGroupCode
    *
    * @param string $val The statisticsGroupCode
    *
    * @return Employee
    */
    public function setStatisticsGroupCode($val)
    {
        $this->_propDict["statisticsGroupCode"] = $val;
        return $this;
    }
    
    /**
    * Gets the status
    *
    * @return string The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            return $this->_propDict["status"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the status
    *
    * @param string $val The status
    *
    * @return Employee
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }
    
    /**
    * Gets the surname
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
    *
    * @param string $val The surname
    *
    * @return Employee
    */
    public function setSurname($val)
    {
        $this->_propDict["surname"] = $val;
        return $this;
    }
    
    /**
    * Gets the terminationDate
    *
    * @return \DateTime The terminationDate
    */
    public function getTerminationDate()
    {
        if (array_key_exists("terminationDate", $this->_propDict)) {
            if (is_a($this->_propDict["terminationDate"], "\DateTime")) {
                return $this->_propDict["terminationDate"];
            } else {
                $this->_propDict["terminationDate"] = new \DateTime($this->_propDict["terminationDate"]);
                return $this->_propDict["terminationDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the terminationDate
    *
    * @param \DateTime $val The terminationDate
    *
    * @return Employee
    */
    public function setTerminationDate($val)
    {
        $this->_propDict["terminationDate"] = $val;
        return $this;
    }
    

     /** 
     * Gets the picture
     *
     * @return array The picture
     */
    public function getPicture()
    {
        if (array_key_exists("picture", $this->_propDict)) {
           return $this->_propDict["picture"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the picture
    *
    * @param Picture $val The picture
    *
    * @return Employee
    */
    public function setPicture($val)
    {
		$this->_propDict["picture"] = $val;
        return $this;
    }
    
}
