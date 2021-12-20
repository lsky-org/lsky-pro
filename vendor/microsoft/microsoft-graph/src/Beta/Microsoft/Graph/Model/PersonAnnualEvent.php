<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PersonAnnualEvent File
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
* PersonAnnualEvent class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PersonAnnualEvent extends ItemFacet
{
    /**
    * Gets the date
    *
    * @return \DateTime The date
    */
    public function getDate()
    {
        if (array_key_exists("date", $this->_propDict)) {
            if (is_a($this->_propDict["date"], "\DateTime")) {
                return $this->_propDict["date"];
            } else {
                $this->_propDict["date"] = new \DateTime($this->_propDict["date"]);
                return $this->_propDict["date"];
            }
        }
        return null;
    }
    
    /**
    * Sets the date
    *
    * @param \DateTime $val The date
    *
    * @return PersonAnnualEvent
    */
    public function setDate($val)
    {
        $this->_propDict["date"] = $val;
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
    * @return PersonAnnualEvent
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the type
    *
    * @return PersonAnnualEventType The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            if (is_a($this->_propDict["type"], "\Beta\Microsoft\Graph\Model\PersonAnnualEventType")) {
                return $this->_propDict["type"];
            } else {
                $this->_propDict["type"] = new PersonAnnualEventType($this->_propDict["type"]);
                return $this->_propDict["type"];
            }
        }
        return null;
    }
    
    /**
    * Sets the type
    *
    * @param PersonAnnualEventType $val The type
    *
    * @return PersonAnnualEvent
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
        return $this;
    }
    
}
