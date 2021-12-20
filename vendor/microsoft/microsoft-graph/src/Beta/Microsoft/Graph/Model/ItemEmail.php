<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ItemEmail File
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
* ItemEmail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ItemEmail extends ItemFacet
{
    /**
    * Gets the address
    * The email address itself.
    *
    * @return string The address
    */
    public function getAddress()
    {
        if (array_key_exists("address", $this->_propDict)) {
            return $this->_propDict["address"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the address
    * The email address itself.
    *
    * @param string $val The address
    *
    * @return ItemEmail
    */
    public function setAddress($val)
    {
        $this->_propDict["address"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * The name or label a user has associated with a particular email address.
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
    * The name or label a user has associated with a particular email address.
    *
    * @param string $val The displayName
    *
    * @return ItemEmail
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the type
    * The type of email address. Possible values are: unknown, work, personal, main, other.
    *
    * @return EmailType The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            if (is_a($this->_propDict["type"], "\Beta\Microsoft\Graph\Model\EmailType")) {
                return $this->_propDict["type"];
            } else {
                $this->_propDict["type"] = new EmailType($this->_propDict["type"]);
                return $this->_propDict["type"];
            }
        }
        return null;
    }
    
    /**
    * Sets the type
    * The type of email address. Possible values are: unknown, work, personal, main, other.
    *
    * @param EmailType $val The type
    *
    * @return ItemEmail
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
        return $this;
    }
    
}
