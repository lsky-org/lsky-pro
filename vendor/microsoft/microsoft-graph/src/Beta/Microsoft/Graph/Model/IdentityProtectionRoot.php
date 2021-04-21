<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IdentityProtectionRoot File
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
* IdentityProtectionRoot class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IdentityProtectionRoot implements \JsonSerializable
{
    /**
    * The array of properties available
    * to the model
    *
    * @var array(string => string)
    */
    protected $_propDict;
    
    /**
    * Construct a new IdentityProtectionRoot
    *
    * @param array $propDict A list of properties to set
    */
    function __construct($propDict = array())
    {
		$this->_propDict = $propDict;
    }

    /**
    * Gets the property dictionary of the IdentityProtectionRoot
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }
    

     /** 
     * Gets the riskDetections
     *
     * @return array The riskDetections
     */
    public function getRiskDetections()
    {
        if (array_key_exists("riskDetections", $this->_propDict)) {
           return $this->_propDict["riskDetections"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the riskDetections
    *
    * @param RiskDetection $val The riskDetections
    *
    * @return IdentityProtectionRoot
    */
    public function setRiskDetections($val)
    {
		$this->_propDict["riskDetections"] = $val;
        return $this;
    }
    

     /** 
     * Gets the riskyUsers
     *
     * @return array The riskyUsers
     */
    public function getRiskyUsers()
    {
        if (array_key_exists("riskyUsers", $this->_propDict)) {
           return $this->_propDict["riskyUsers"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the riskyUsers
    *
    * @param RiskyUser $val The riskyUsers
    *
    * @return IdentityProtectionRoot
    */
    public function setRiskyUsers($val)
    {
		$this->_propDict["riskyUsers"] = $val;
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
