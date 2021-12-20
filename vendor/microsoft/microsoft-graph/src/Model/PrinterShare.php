<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrinterShare File
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
* PrinterShare class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PrinterShare extends PrinterBase
{
    /**
    * Gets the allowAllUsers
    * If true, all users and groups will be granted access to this printer share. This supersedes the allow lists defined by the allowedUsers and allowedGroups navigation properties.
    *
    * @return bool The allowAllUsers
    */
    public function getAllowAllUsers()
    {
        if (array_key_exists("allowAllUsers", $this->_propDict)) {
            return $this->_propDict["allowAllUsers"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the allowAllUsers
    * If true, all users and groups will be granted access to this printer share. This supersedes the allow lists defined by the allowedUsers and allowedGroups navigation properties.
    *
    * @param bool $val The allowAllUsers
    *
    * @return PrinterShare
    */
    public function setAllowAllUsers($val)
    {
        $this->_propDict["allowAllUsers"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the createdDateTime
    * The DateTimeOffset when the printer share was created. Read-only.
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
    * The DateTimeOffset when the printer share was created. Read-only.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return PrinterShare
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    

     /** 
     * Gets the allowedGroups
    * The groups whose users have access to print using the printer.
     *
     * @return array The allowedGroups
     */
    public function getAllowedGroups()
    {
        if (array_key_exists("allowedGroups", $this->_propDict)) {
           return $this->_propDict["allowedGroups"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the allowedGroups
    * The groups whose users have access to print using the printer.
    *
    * @param Group $val The allowedGroups
    *
    * @return PrinterShare
    */
    public function setAllowedGroups($val)
    {
		$this->_propDict["allowedGroups"] = $val;
        return $this;
    }
    

     /** 
     * Gets the allowedUsers
    * The users who have access to print using the printer.
     *
     * @return array The allowedUsers
     */
    public function getAllowedUsers()
    {
        if (array_key_exists("allowedUsers", $this->_propDict)) {
           return $this->_propDict["allowedUsers"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the allowedUsers
    * The users who have access to print using the printer.
    *
    * @param User $val The allowedUsers
    *
    * @return PrinterShare
    */
    public function setAllowedUsers($val)
    {
		$this->_propDict["allowedUsers"] = $val;
        return $this;
    }
    
    /**
    * Gets the printer
    * The printer that this printer share is related to.
    *
    * @return Printer The printer
    */
    public function getPrinter()
    {
        if (array_key_exists("printer", $this->_propDict)) {
            if (is_a($this->_propDict["printer"], "\Microsoft\Graph\Model\Printer")) {
                return $this->_propDict["printer"];
            } else {
                $this->_propDict["printer"] = new Printer($this->_propDict["printer"]);
                return $this->_propDict["printer"];
            }
        }
        return null;
    }
    
    /**
    * Sets the printer
    * The printer that this printer share is related to.
    *
    * @param Printer $val The printer
    *
    * @return PrinterShare
    */
    public function setPrinter($val)
    {
        $this->_propDict["printer"] = $val;
        return $this;
    }
    
}
