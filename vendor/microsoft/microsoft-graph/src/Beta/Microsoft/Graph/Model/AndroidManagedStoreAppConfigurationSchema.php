<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidManagedStoreAppConfigurationSchema File
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
* AndroidManagedStoreAppConfigurationSchema class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AndroidManagedStoreAppConfigurationSchema extends Entity
{
    /**
    * Gets the exampleJson
    * UTF8 encoded byte array containing example JSON string conforming to this schema that demonstrates how to set the configuration for this app
    *
    * @return \GuzzleHttp\Psr7\Stream The exampleJson
    */
    public function getExampleJson()
    {
        if (array_key_exists("exampleJson", $this->_propDict)) {
            if (is_a($this->_propDict["exampleJson"], "\GuzzleHttp\Psr7\Stream")) {
                return $this->_propDict["exampleJson"];
            } else {
                $this->_propDict["exampleJson"] = \GuzzleHttp\Psr7\stream_for($this->_propDict["exampleJson"]);
                return $this->_propDict["exampleJson"];
            }
        }
        return null;
    }
    
    /**
    * Sets the exampleJson
    * UTF8 encoded byte array containing example JSON string conforming to this schema that demonstrates how to set the configuration for this app
    *
    * @param \GuzzleHttp\Psr7\Stream $val The exampleJson
    *
    * @return AndroidManagedStoreAppConfigurationSchema
    */
    public function setExampleJson($val)
    {
        $this->_propDict["exampleJson"] = $val;
        return $this;
    }
    

     /** 
     * Gets the nestedSchemaItems
    * Collection of items each representing a named configuration option in the schema. It contains a flat list of all configuration.
     *
     * @return array The nestedSchemaItems
     */
    public function getNestedSchemaItems()
    {
        if (array_key_exists("nestedSchemaItems", $this->_propDict)) {
           return $this->_propDict["nestedSchemaItems"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the nestedSchemaItems
    * Collection of items each representing a named configuration option in the schema. It contains a flat list of all configuration.
    *
    * @param AndroidManagedStoreAppConfigurationSchemaItem $val The nestedSchemaItems
    *
    * @return AndroidManagedStoreAppConfigurationSchema
    */
    public function setNestedSchemaItems($val)
    {
		$this->_propDict["nestedSchemaItems"] = $val;
        return $this;
    }
    

     /** 
     * Gets the schemaItems
    * Collection of items each representing a named configuration option in the schema. It only contains the root-level configuration.
     *
     * @return array The schemaItems
     */
    public function getSchemaItems()
    {
        if (array_key_exists("schemaItems", $this->_propDict)) {
           return $this->_propDict["schemaItems"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the schemaItems
    * Collection of items each representing a named configuration option in the schema. It only contains the root-level configuration.
    *
    * @param AndroidManagedStoreAppConfigurationSchemaItem $val The schemaItems
    *
    * @return AndroidManagedStoreAppConfigurationSchema
    */
    public function setSchemaItems($val)
    {
		$this->_propDict["schemaItems"] = $val;
        return $this;
    }
    
}
