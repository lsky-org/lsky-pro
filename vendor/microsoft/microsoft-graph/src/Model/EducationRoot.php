<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EducationRoot File
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
* EducationRoot class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EducationRoot extends Entity
{

     /** 
     * Gets the classes
    * Read-only. Nullable.
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
    * Read-only. Nullable.
    *
    * @param EducationClass $val The classes
    *
    * @return EducationRoot
    */
    public function setClasses($val)
    {
		$this->_propDict["classes"] = $val;
        return $this;
    }
    
    /**
    * Gets the me
    * Read-only. Nullable.
    *
    * @return EducationUser The me
    */
    public function getMe()
    {
        if (array_key_exists("me", $this->_propDict)) {
            if (is_a($this->_propDict["me"], "\Microsoft\Graph\Model\EducationUser")) {
                return $this->_propDict["me"];
            } else {
                $this->_propDict["me"] = new EducationUser($this->_propDict["me"]);
                return $this->_propDict["me"];
            }
        }
        return null;
    }
    
    /**
    * Sets the me
    * Read-only. Nullable.
    *
    * @param EducationUser $val The me
    *
    * @return EducationRoot
    */
    public function setMe($val)
    {
        $this->_propDict["me"] = $val;
        return $this;
    }
    

     /** 
     * Gets the schools
    * Read-only. Nullable.
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
    * Read-only. Nullable.
    *
    * @param EducationSchool $val The schools
    *
    * @return EducationRoot
    */
    public function setSchools($val)
    {
		$this->_propDict["schools"] = $val;
        return $this;
    }
    

     /** 
     * Gets the users
    * Read-only. Nullable.
     *
     * @return array The users
     */
    public function getUsers()
    {
        if (array_key_exists("users", $this->_propDict)) {
           return $this->_propDict["users"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the users
    * Read-only. Nullable.
    *
    * @param EducationUser $val The users
    *
    * @return EducationRoot
    */
    public function setUsers($val)
    {
		$this->_propDict["users"] = $val;
        return $this;
    }
    
}
