<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidManagedStoreAppConfigurationSchemaItem File
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
* AndroidManagedStoreAppConfigurationSchemaItem class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AndroidManagedStoreAppConfigurationSchemaItem extends Entity
{

    /**
    * Gets the dataType
    * The type of value this item describes. Possible values are: bool, integer, string, choice, multiselect, bundle, bundleArray, hidden.
    *
    * @return AndroidManagedStoreAppConfigurationSchemaItemDataType The dataType
    */
    public function getDataType()
    {
        if (array_key_exists("dataType", $this->_propDict)) {
            if (is_a($this->_propDict["dataType"], "\Beta\Microsoft\Graph\Model\AndroidManagedStoreAppConfigurationSchemaItemDataType")) {
                return $this->_propDict["dataType"];
            } else {
                $this->_propDict["dataType"] = new AndroidManagedStoreAppConfigurationSchemaItemDataType($this->_propDict["dataType"]);
                return $this->_propDict["dataType"];
            }
        }
        return null;
    }

    /**
    * Sets the dataType
    * The type of value this item describes. Possible values are: bool, integer, string, choice, multiselect, bundle, bundleArray, hidden.
    *
    * @param AndroidManagedStoreAppConfigurationSchemaItemDataType $val The value to assign to the dataType
    *
    * @return AndroidManagedStoreAppConfigurationSchemaItem The AndroidManagedStoreAppConfigurationSchemaItem
    */
    public function setDataType($val)
    {
        $this->_propDict["dataType"] = $val;
         return $this;
    }
    /**
    * Gets the defaultBoolValue
    * Default value for boolean type items, if specified by the app developer
    *
    * @return bool The defaultBoolValue
    */
    public function getDefaultBoolValue()
    {
        if (array_key_exists("defaultBoolValue", $this->_propDict)) {
            return $this->_propDict["defaultBoolValue"];
        } else {
            return null;
        }
    }

    /**
    * Sets the defaultBoolValue
    * Default value for boolean type items, if specified by the app developer
    *
    * @param bool $val The value of the defaultBoolValue
    *
    * @return AndroidManagedStoreAppConfigurationSchemaItem
    */
    public function setDefaultBoolValue($val)
    {
        $this->_propDict["defaultBoolValue"] = $val;
        return $this;
    }
    /**
    * Gets the defaultIntValue
    * Default value for integer type items, if specified by the app developer
    *
    * @return int The defaultIntValue
    */
    public function getDefaultIntValue()
    {
        if (array_key_exists("defaultIntValue", $this->_propDict)) {
            return $this->_propDict["defaultIntValue"];
        } else {
            return null;
        }
    }

    /**
    * Sets the defaultIntValue
    * Default value for integer type items, if specified by the app developer
    *
    * @param int $val The value of the defaultIntValue
    *
    * @return AndroidManagedStoreAppConfigurationSchemaItem
    */
    public function setDefaultIntValue($val)
    {
        $this->_propDict["defaultIntValue"] = $val;
        return $this;
    }
    /**
    * Gets the defaultStringArrayValue
    * Default value for string array type items, if specified by the app developer
    *
    * @return string The defaultStringArrayValue
    */
    public function getDefaultStringArrayValue()
    {
        if (array_key_exists("defaultStringArrayValue", $this->_propDict)) {
            return $this->_propDict["defaultStringArrayValue"];
        } else {
            return null;
        }
    }

    /**
    * Sets the defaultStringArrayValue
    * Default value for string array type items, if specified by the app developer
    *
    * @param string $val The value of the defaultStringArrayValue
    *
    * @return AndroidManagedStoreAppConfigurationSchemaItem
    */
    public function setDefaultStringArrayValue($val)
    {
        $this->_propDict["defaultStringArrayValue"] = $val;
        return $this;
    }
    /**
    * Gets the defaultStringValue
    * Default value for string type items, if specified by the app developer
    *
    * @return string The defaultStringValue
    */
    public function getDefaultStringValue()
    {
        if (array_key_exists("defaultStringValue", $this->_propDict)) {
            return $this->_propDict["defaultStringValue"];
        } else {
            return null;
        }
    }

    /**
    * Sets the defaultStringValue
    * Default value for string type items, if specified by the app developer
    *
    * @param string $val The value of the defaultStringValue
    *
    * @return AndroidManagedStoreAppConfigurationSchemaItem
    */
    public function setDefaultStringValue($val)
    {
        $this->_propDict["defaultStringValue"] = $val;
        return $this;
    }
    /**
    * Gets the description
    * Description of what the item controls within the application
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
    * Description of what the item controls within the application
    *
    * @param string $val The value of the description
    *
    * @return AndroidManagedStoreAppConfigurationSchemaItem
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    /**
    * Gets the displayName
    * Human readable name
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
    * Human readable name
    *
    * @param string $val The value of the displayName
    *
    * @return AndroidManagedStoreAppConfigurationSchemaItem
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    /**
    * Gets the index
    * Unique index the application uses to maintain nested schema items
    *
    * @return int The index
    */
    public function getIndex()
    {
        if (array_key_exists("index", $this->_propDict)) {
            return $this->_propDict["index"];
        } else {
            return null;
        }
    }

    /**
    * Sets the index
    * Unique index the application uses to maintain nested schema items
    *
    * @param int $val The value of the index
    *
    * @return AndroidManagedStoreAppConfigurationSchemaItem
    */
    public function setIndex($val)
    {
        $this->_propDict["index"] = $val;
        return $this;
    }
    /**
    * Gets the parentIndex
    * Index of parent schema item to track nested schema items
    *
    * @return int The parentIndex
    */
    public function getParentIndex()
    {
        if (array_key_exists("parentIndex", $this->_propDict)) {
            return $this->_propDict["parentIndex"];
        } else {
            return null;
        }
    }

    /**
    * Sets the parentIndex
    * Index of parent schema item to track nested schema items
    *
    * @param int $val The value of the parentIndex
    *
    * @return AndroidManagedStoreAppConfigurationSchemaItem
    */
    public function setParentIndex($val)
    {
        $this->_propDict["parentIndex"] = $val;
        return $this;
    }
    /**
    * Gets the schemaItemKey
    * Unique key the application uses to identify the item
    *
    * @return string The schemaItemKey
    */
    public function getSchemaItemKey()
    {
        if (array_key_exists("schemaItemKey", $this->_propDict)) {
            return $this->_propDict["schemaItemKey"];
        } else {
            return null;
        }
    }

    /**
    * Sets the schemaItemKey
    * Unique key the application uses to identify the item
    *
    * @param string $val The value of the schemaItemKey
    *
    * @return AndroidManagedStoreAppConfigurationSchemaItem
    */
    public function setSchemaItemKey($val)
    {
        $this->_propDict["schemaItemKey"] = $val;
        return $this;
    }

    /**
    * Gets the selections
    * List of human readable name/value pairs for the valid values that can be set for this item (Choice and Multiselect items only)
    *
    * @return KeyValuePair The selections
    */
    public function getSelections()
    {
        if (array_key_exists("selections", $this->_propDict)) {
            if (is_a($this->_propDict["selections"], "\Beta\Microsoft\Graph\Model\KeyValuePair")) {
                return $this->_propDict["selections"];
            } else {
                $this->_propDict["selections"] = new KeyValuePair($this->_propDict["selections"]);
                return $this->_propDict["selections"];
            }
        }
        return null;
    }

    /**
    * Sets the selections
    * List of human readable name/value pairs for the valid values that can be set for this item (Choice and Multiselect items only)
    *
    * @param KeyValuePair $val The value to assign to the selections
    *
    * @return AndroidManagedStoreAppConfigurationSchemaItem The AndroidManagedStoreAppConfigurationSchemaItem
    */
    public function setSelections($val)
    {
        $this->_propDict["selections"] = $val;
         return $this;
    }
}
