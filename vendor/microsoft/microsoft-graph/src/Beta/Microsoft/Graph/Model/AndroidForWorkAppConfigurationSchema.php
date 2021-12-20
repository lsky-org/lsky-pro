<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidForWorkAppConfigurationSchema File
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
* AndroidForWorkAppConfigurationSchema class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AndroidForWorkAppConfigurationSchema extends Entity
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
    * @return AndroidForWorkAppConfigurationSchema
    */
    public function setExampleJson($val)
    {
        $this->_propDict["exampleJson"] = $val;
        return $this;
    }
    

     /** 
     * Gets the schemaItems
    * Collection of items each representing a named configuration option in the schema
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
    * Collection of items each representing a named configuration option in the schema
    *
    * @param AndroidForWorkAppConfigurationSchemaItem $val The schemaItems
    *
    * @return AndroidForWorkAppConfigurationSchema
    */
    public function setSchemaItems($val)
    {
		$this->_propDict["schemaItems"] = $val;
        return $this;
    }
    
}
