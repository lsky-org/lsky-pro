<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ExternalConnection File
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
* ExternalConnection class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ExternalConnection extends Entity
{
    /**
    * Gets the configuration
    * Specifies additional application IDs that are allowed to manage the connection and to index content in the connection. Optional.
    *
    * @return Configuration The configuration
    */
    public function getConfiguration()
    {
        if (array_key_exists("configuration", $this->_propDict)) {
            if (is_a($this->_propDict["configuration"], "\Beta\Microsoft\Graph\Model\Configuration")) {
                return $this->_propDict["configuration"];
            } else {
                $this->_propDict["configuration"] = new Configuration($this->_propDict["configuration"]);
                return $this->_propDict["configuration"];
            }
        }
        return null;
    }
    
    /**
    * Sets the configuration
    * Specifies additional application IDs that are allowed to manage the connection and to index content in the connection. Optional.
    *
    * @param Configuration $val The configuration
    *
    * @return ExternalConnection
    */
    public function setConfiguration($val)
    {
        $this->_propDict["configuration"] = $val;
        return $this;
    }
    
    /**
    * Gets the description
    * Description of the connection displayed in the Microsoft 365 admin center. Optional.
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
    * Description of the connection displayed in the Microsoft 365 admin center. Optional.
    *
    * @param string $val The description
    *
    * @return ExternalConnection
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the name
    * The display name of the connection to be displayed in the Microsoft 365 admin center. Maximum length of 128 characters. Required.
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
    * The display name of the connection to be displayed in the Microsoft 365 admin center. Maximum length of 128 characters. Required.
    *
    * @param string $val The name
    *
    * @return ExternalConnection
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    
    /**
    * Gets the state
    * Indicates the current state of the connection. Possible values are draft, ready, obsolete, and limitExceeded. Required.
    *
    * @return ConnectionState The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            if (is_a($this->_propDict["state"], "\Beta\Microsoft\Graph\Model\ConnectionState")) {
                return $this->_propDict["state"];
            } else {
                $this->_propDict["state"] = new ConnectionState($this->_propDict["state"]);
                return $this->_propDict["state"];
            }
        }
        return null;
    }
    
    /**
    * Sets the state
    * Indicates the current state of the connection. Possible values are draft, ready, obsolete, and limitExceeded. Required.
    *
    * @param ConnectionState $val The state
    *
    * @return ExternalConnection
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
        return $this;
    }
    

     /** 
     * Gets the groups
     *
     * @return array The groups
     */
    public function getGroups()
    {
        if (array_key_exists("groups", $this->_propDict)) {
           return $this->_propDict["groups"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the groups
    *
    * @param ExternalGroup $val The groups
    *
    * @return ExternalConnection
    */
    public function setGroups($val)
    {
		$this->_propDict["groups"] = $val;
        return $this;
    }
    

     /** 
     * Gets the items
    * Read-only. Nullable.
     *
     * @return array The items
     */
    public function getItems()
    {
        if (array_key_exists("items", $this->_propDict)) {
           return $this->_propDict["items"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the items
    * Read-only. Nullable.
    *
    * @param ExternalItem $val The items
    *
    * @return ExternalConnection
    */
    public function setItems($val)
    {
		$this->_propDict["items"] = $val;
        return $this;
    }
    

     /** 
     * Gets the operations
    * Read-only. Nullable.
     *
     * @return array The operations
     */
    public function getOperations()
    {
        if (array_key_exists("operations", $this->_propDict)) {
           return $this->_propDict["operations"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the operations
    * Read-only. Nullable.
    *
    * @param ConnectionOperation $val The operations
    *
    * @return ExternalConnection
    */
    public function setOperations($val)
    {
		$this->_propDict["operations"] = $val;
        return $this;
    }
    
    /**
    * Gets the schema
    * Read-only. Nullable.
    *
    * @return Schema The schema
    */
    public function getSchema()
    {
        if (array_key_exists("schema", $this->_propDict)) {
            if (is_a($this->_propDict["schema"], "\Beta\Microsoft\Graph\Model\Schema")) {
                return $this->_propDict["schema"];
            } else {
                $this->_propDict["schema"] = new Schema($this->_propDict["schema"]);
                return $this->_propDict["schema"];
            }
        }
        return null;
    }
    
    /**
    * Sets the schema
    * Read-only. Nullable.
    *
    * @param Schema $val The schema
    *
    * @return ExternalConnection
    */
    public function setSchema($val)
    {
        $this->_propDict["schema"] = $val;
        return $this;
    }
    
}
