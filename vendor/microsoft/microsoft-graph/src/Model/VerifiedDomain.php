<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* VerifiedDomain File
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
* VerifiedDomain class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class VerifiedDomain extends Entity
{
    /**
    * Gets the capabilities
    * For example, 'Email', 'OfficeCommunicationsOnline'.
    *
    * @return string The capabilities
    */
    public function getCapabilities()
    {
        if (array_key_exists("capabilities", $this->_propDict)) {
            return $this->_propDict["capabilities"];
        } else {
            return null;
        }
    }

    /**
    * Sets the capabilities
    * For example, 'Email', 'OfficeCommunicationsOnline'.
    *
    * @param string $val The value of the capabilities
    *
    * @return VerifiedDomain
    */
    public function setCapabilities($val)
    {
        $this->_propDict["capabilities"] = $val;
        return $this;
    }
    /**
    * Gets the isDefault
    * true if this is the default domain associated with the tenant; otherwise, false.
    *
    * @return bool The isDefault
    */
    public function getIsDefault()
    {
        if (array_key_exists("isDefault", $this->_propDict)) {
            return $this->_propDict["isDefault"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isDefault
    * true if this is the default domain associated with the tenant; otherwise, false.
    *
    * @param bool $val The value of the isDefault
    *
    * @return VerifiedDomain
    */
    public function setIsDefault($val)
    {
        $this->_propDict["isDefault"] = $val;
        return $this;
    }
    /**
    * Gets the isInitial
    * true if this is the initial domain associated with the tenant; otherwise, false
    *
    * @return bool The isInitial
    */
    public function getIsInitial()
    {
        if (array_key_exists("isInitial", $this->_propDict)) {
            return $this->_propDict["isInitial"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isInitial
    * true if this is the initial domain associated with the tenant; otherwise, false
    *
    * @param bool $val The value of the isInitial
    *
    * @return VerifiedDomain
    */
    public function setIsInitial($val)
    {
        $this->_propDict["isInitial"] = $val;
        return $this;
    }
    /**
    * Gets the name
    * The domain name; for example, 'contoso.onmicrosoft.com'
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
    * The domain name; for example, 'contoso.onmicrosoft.com'
    *
    * @param string $val The value of the name
    *
    * @return VerifiedDomain
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    /**
    * Gets the type
    * For example, 'Managed'.
    *
    * @return string The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            return $this->_propDict["type"];
        } else {
            return null;
        }
    }

    /**
    * Sets the type
    * For example, 'Managed'.
    *
    * @param string $val The value of the type
    *
    * @return VerifiedDomain
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
        return $this;
    }
}
