<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* InstitutionData File
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
* InstitutionData class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class InstitutionData extends Entity
{
    /**
    * Gets the description
    * Short description of the institution the user studied at.
    *
    * @return string The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }

    /**
    * Sets the description
    * Short description of the institution the user studied at.
    *
    * @param string $val The value of the description
    *
    * @return InstitutionData
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    /**
    * Gets the displayName
    * Name of the institution the user studied at.
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
    * Name of the institution the user studied at.
    *
    * @param string $val The value of the displayName
    *
    * @return InstitutionData
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the location
    * Address or location of the institute.
    *
    * @return PhysicalAddress The location
    */
    public function getLocation()
    {
        if (array_key_exists("location", $this->_propDict)) {
            if (is_a($this->_propDict["location"], "\Beta\Microsoft\Graph\Model\PhysicalAddress")) {
                return $this->_propDict["location"];
            } else {
                $this->_propDict["location"] = new PhysicalAddress($this->_propDict["location"]);
                return $this->_propDict["location"];
            }
        }
        return null;
    }

    /**
    * Sets the location
    * Address or location of the institute.
    *
    * @param PhysicalAddress $val The value to assign to the location
    *
    * @return InstitutionData The InstitutionData
    */
    public function setLocation($val)
    {
        $this->_propDict["location"] = $val;
         return $this;
    }
    /**
    * Gets the webUrl
    * Link to the institution or department homepage.
    *
    * @return string The webUrl
    */
    public function getWebUrl()
    {
        if (array_key_exists("webUrl", $this->_propDict)) {
            return $this->_propDict["webUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the webUrl
    * Link to the institution or department homepage.
    *
    * @param string $val The value of the webUrl
    *
    * @return InstitutionData
    */
    public function setWebUrl($val)
    {
        $this->_propDict["webUrl"] = $val;
        return $this;
    }
}
