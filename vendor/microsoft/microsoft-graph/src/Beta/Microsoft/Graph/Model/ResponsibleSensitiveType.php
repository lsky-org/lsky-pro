<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ResponsibleSensitiveType File
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
* ResponsibleSensitiveType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ResponsibleSensitiveType extends Entity
{
    /**
    * Gets the description
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
    *
    * @param string $val The value of the description
    *
    * @return ResponsibleSensitiveType
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    /**
    * Gets the id
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
    *
    * @param string $val The value of the id
    *
    * @return ResponsibleSensitiveType
    */
    public function setId($val)
    {
        $this->_propDict["id"] = $val;
        return $this;
    }
    /**
    * Gets the name
    *
    * @return string The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }

    /**
    * Sets the name
    *
    * @param string $val The value of the name
    *
    * @return ResponsibleSensitiveType
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    /**
    * Gets the publisherName
    *
    * @return string The publisherName
    */
    public function getPublisherName()
    {
        if (array_key_exists("publisherName", $this->_propDict)) {
            return $this->_propDict["publisherName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the publisherName
    *
    * @param string $val The value of the publisherName
    *
    * @return ResponsibleSensitiveType
    */
    public function setPublisherName($val)
    {
        $this->_propDict["publisherName"] = $val;
        return $this;
    }
    /**
    * Gets the rulePackageId
    *
    * @return string The rulePackageId
    */
    public function getRulePackageId()
    {
        if (array_key_exists("rulePackageId", $this->_propDict)) {
            return $this->_propDict["rulePackageId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the rulePackageId
    *
    * @param string $val The value of the rulePackageId
    *
    * @return ResponsibleSensitiveType
    */
    public function setRulePackageId($val)
    {
        $this->_propDict["rulePackageId"] = $val;
        return $this;
    }
    /**
    * Gets the rulePackageType
    *
    * @return string The rulePackageType
    */
    public function getRulePackageType()
    {
        if (array_key_exists("rulePackageType", $this->_propDict)) {
            return $this->_propDict["rulePackageType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the rulePackageType
    *
    * @param string $val The value of the rulePackageType
    *
    * @return ResponsibleSensitiveType
    */
    public function setRulePackageType($val)
    {
        $this->_propDict["rulePackageType"] = $val;
        return $this;
    }
}
