<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OfficeConfiguration File
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
* OfficeConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OfficeConfiguration implements \JsonSerializable
{
    /**
    * The array of properties available
    * to the model
    *
    * @var array(string => string)
    */
    protected $_propDict;
    
    /**
    * Construct a new OfficeConfiguration
    *
    * @param array $propDict A list of properties to set
    */
    function __construct($propDict = array())
    {
		$this->_propDict = $propDict;
    }

    /**
    * Gets the property dictionary of the OfficeConfiguration
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }
    

     /** 
     * Gets the tenantCheckinStatuses
    * List of office Client check-in status.
     *
     * @return array The tenantCheckinStatuses
     */
    public function getTenantCheckinStatuses()
    {
        if (array_key_exists("tenantCheckinStatuses", $this->_propDict)) {
           return $this->_propDict["tenantCheckinStatuses"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the tenantCheckinStatuses
    * List of office Client check-in status.
    *
    * @param OfficeClientCheckinStatus $val The tenantCheckinStatuses
    *
    * @return OfficeConfiguration
    */
    public function setTenantCheckinStatuses($val)
    {
		$this->_propDict["tenantCheckinStatuses"] = $val;
        return $this;
    }
    
    /**
    * Gets the tenantUserCheckinSummary
    * Entity that describes tenant check-in statues
    *
    * @return OfficeUserCheckinSummary The tenantUserCheckinSummary
    */
    public function getTenantUserCheckinSummary()
    {
        if (array_key_exists("tenantUserCheckinSummary", $this->_propDict)) {
            if (is_a($this->_propDict["tenantUserCheckinSummary"], "\Beta\Microsoft\Graph\Model\OfficeUserCheckinSummary")) {
                return $this->_propDict["tenantUserCheckinSummary"];
            } else {
                $this->_propDict["tenantUserCheckinSummary"] = new OfficeUserCheckinSummary($this->_propDict["tenantUserCheckinSummary"]);
                return $this->_propDict["tenantUserCheckinSummary"];
            }
        }
        return null;
    }
    
    /**
    * Sets the tenantUserCheckinSummary
    * Entity that describes tenant check-in statues
    *
    * @param OfficeUserCheckinSummary $val The tenantUserCheckinSummary
    *
    * @return OfficeConfiguration
    */
    public function setTenantUserCheckinSummary($val)
    {
        $this->_propDict["tenantUserCheckinSummary"] = $val;
        return $this;
    }
    

     /** 
     * Gets the clientConfigurations
    * List of office Client configuration.
     *
     * @return array The clientConfigurations
     */
    public function getClientConfigurations()
    {
        if (array_key_exists("clientConfigurations", $this->_propDict)) {
           return $this->_propDict["clientConfigurations"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the clientConfigurations
    * List of office Client configuration.
    *
    * @param OfficeClientConfiguration $val The clientConfigurations
    *
    * @return OfficeConfiguration
    */
    public function setClientConfigurations($val)
    {
		$this->_propDict["clientConfigurations"] = $val;
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
