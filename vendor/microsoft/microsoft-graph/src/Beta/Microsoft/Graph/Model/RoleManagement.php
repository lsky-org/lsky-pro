<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RoleManagement File
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
* RoleManagement class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RoleManagement implements \JsonSerializable
{
    /**
    * The array of properties available
    * to the model
    *
    * @var array(string => string)
    */
    protected $_propDict;
    
    /**
    * Construct a new RoleManagement
    *
    * @param array $propDict A list of properties to set
    */
    function __construct($propDict = array())
    {
		$this->_propDict = $propDict;
    }

    /**
    * Gets the property dictionary of the RoleManagement
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }
    
    /**
    * Gets the directory
    *
    * @return RbacApplication The directory
    */
    public function getDirectory()
    {
        if (array_key_exists("directory", $this->_propDict)) {
            if (is_a($this->_propDict["directory"], "\Beta\Microsoft\Graph\Model\RbacApplication")) {
                return $this->_propDict["directory"];
            } else {
                $this->_propDict["directory"] = new RbacApplication($this->_propDict["directory"]);
                return $this->_propDict["directory"];
            }
        }
        return null;
    }
    
    /**
    * Sets the directory
    *
    * @param RbacApplication $val The directory
    *
    * @return RoleManagement
    */
    public function setDirectory($val)
    {
        $this->_propDict["directory"] = $val;
        return $this;
    }
    
    /**
    * Gets the entitlementManagement
    * The RbacApplication for Entitlement Management
    *
    * @return RbacApplication The entitlementManagement
    */
    public function getEntitlementManagement()
    {
        if (array_key_exists("entitlementManagement", $this->_propDict)) {
            if (is_a($this->_propDict["entitlementManagement"], "\Beta\Microsoft\Graph\Model\RbacApplication")) {
                return $this->_propDict["entitlementManagement"];
            } else {
                $this->_propDict["entitlementManagement"] = new RbacApplication($this->_propDict["entitlementManagement"]);
                return $this->_propDict["entitlementManagement"];
            }
        }
        return null;
    }
    
    /**
    * Sets the entitlementManagement
    * The RbacApplication for Entitlement Management
    *
    * @param RbacApplication $val The entitlementManagement
    *
    * @return RoleManagement
    */
    public function setEntitlementManagement($val)
    {
        $this->_propDict["entitlementManagement"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceManagement
    * The RbacApplication for Device Management
    *
    * @return RbacApplicationMultiple The deviceManagement
    */
    public function getDeviceManagement()
    {
        if (array_key_exists("deviceManagement", $this->_propDict)) {
            if (is_a($this->_propDict["deviceManagement"], "\Beta\Microsoft\Graph\Model\RbacApplicationMultiple")) {
                return $this->_propDict["deviceManagement"];
            } else {
                $this->_propDict["deviceManagement"] = new RbacApplicationMultiple($this->_propDict["deviceManagement"]);
                return $this->_propDict["deviceManagement"];
            }
        }
        return null;
    }
    
    /**
    * Sets the deviceManagement
    * The RbacApplication for Device Management
    *
    * @param RbacApplicationMultiple $val The deviceManagement
    *
    * @return RoleManagement
    */
    public function setDeviceManagement($val)
    {
        $this->_propDict["deviceManagement"] = $val;
        return $this;
    }
    
    /**
    * Gets the ODataType
    *
    * @return string The ODataType
    */
    public function getODataType()
    {
        return $this->_propDict["@odata.type"];
    }
    
    /**
    * Sets the ODataType
    *
    * @param string The ODataType
    *
    * @return Entity
    */
    public function setODataType($val)
    {
        $this->_propDict["@odata.type"] = $val;
        return $this;
    }
    
    /**
    * Serializes the object by property array
	* Manually serialize DateTime into RFC3339 format
    *
    * @return array The list of properties
    */
    public function jsonSerialize()
    {
        $serializableProperties = $this->getProperties();
        foreach ($serializableProperties as $property => $val) {
            if (is_a($val, "\DateTime")) {
                $serializableProperties[$property] = $val->format(\DateTime::RFC3339);
            } else if (is_a($val, "\Microsoft\Graph\Core\Enum")) {
                $serializableProperties[$property] = $val->value();
            }
        }
        return $serializableProperties;
    }
}
