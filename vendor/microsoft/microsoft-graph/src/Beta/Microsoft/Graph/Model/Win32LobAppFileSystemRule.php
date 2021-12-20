<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Win32LobAppFileSystemRule File
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
* Win32LobAppFileSystemRule class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Win32LobAppFileSystemRule extends Win32LobAppRule
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.win32LobAppFileSystemRule");
    }

    /**
    * Gets the check32BitOn64System
    * A value indicating whether to expand environment variables in the 32-bit context on 64-bit systems.
    *
    * @return bool The check32BitOn64System
    */
    public function getCheck32BitOn64System()
    {
        if (array_key_exists("check32BitOn64System", $this->_propDict)) {
            return $this->_propDict["check32BitOn64System"];
        } else {
            return null;
        }
    }

    /**
    * Sets the check32BitOn64System
    * A value indicating whether to expand environment variables in the 32-bit context on 64-bit systems.
    *
    * @param bool $val The value of the check32BitOn64System
    *
    * @return Win32LobAppFileSystemRule
    */
    public function setCheck32BitOn64System($val)
    {
        $this->_propDict["check32BitOn64System"] = $val;
        return $this;
    }
    /**
    * Gets the comparisonValue
    * The file or folder comparison value.
    *
    * @return string The comparisonValue
    */
    public function getComparisonValue()
    {
        if (array_key_exists("comparisonValue", $this->_propDict)) {
            return $this->_propDict["comparisonValue"];
        } else {
            return null;
        }
    }

    /**
    * Sets the comparisonValue
    * The file or folder comparison value.
    *
    * @param string $val The value of the comparisonValue
    *
    * @return Win32LobAppFileSystemRule
    */
    public function setComparisonValue($val)
    {
        $this->_propDict["comparisonValue"] = $val;
        return $this;
    }
    /**
    * Gets the fileOrFolderName
    * The file or folder name to look up.
    *
    * @return string The fileOrFolderName
    */
    public function getFileOrFolderName()
    {
        if (array_key_exists("fileOrFolderName", $this->_propDict)) {
            return $this->_propDict["fileOrFolderName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the fileOrFolderName
    * The file or folder name to look up.
    *
    * @param string $val The value of the fileOrFolderName
    *
    * @return Win32LobAppFileSystemRule
    */
    public function setFileOrFolderName($val)
    {
        $this->_propDict["fileOrFolderName"] = $val;
        return $this;
    }

    /**
    * Gets the operationType
    * The file system operation type. Possible values are: notConfigured, exists, modifiedDate, createdDate, version, sizeInMB, doesNotExist.
    *
    * @return Win32LobAppFileSystemOperationType The operationType
    */
    public function getOperationType()
    {
        if (array_key_exists("operationType", $this->_propDict)) {
            if (is_a($this->_propDict["operationType"], "\Beta\Microsoft\Graph\Model\Win32LobAppFileSystemOperationType")) {
                return $this->_propDict["operationType"];
            } else {
                $this->_propDict["operationType"] = new Win32LobAppFileSystemOperationType($this->_propDict["operationType"]);
                return $this->_propDict["operationType"];
            }
        }
        return null;
    }

    /**
    * Sets the operationType
    * The file system operation type. Possible values are: notConfigured, exists, modifiedDate, createdDate, version, sizeInMB, doesNotExist.
    *
    * @param Win32LobAppFileSystemOperationType $val The value to assign to the operationType
    *
    * @return Win32LobAppFileSystemRule The Win32LobAppFileSystemRule
    */
    public function setOperationType($val)
    {
        $this->_propDict["operationType"] = $val;
         return $this;
    }

    /**
    * Gets the operator
    * The operator for file or folder detection. Possible values are: notConfigured, equal, notEqual, greaterThan, greaterThanOrEqual, lessThan, lessThanOrEqual.
    *
    * @return Win32LobAppRuleOperator The operator
    */
    public function getOperator()
    {
        if (array_key_exists("operator", $this->_propDict)) {
            if (is_a($this->_propDict["operator"], "\Beta\Microsoft\Graph\Model\Win32LobAppRuleOperator")) {
                return $this->_propDict["operator"];
            } else {
                $this->_propDict["operator"] = new Win32LobAppRuleOperator($this->_propDict["operator"]);
                return $this->_propDict["operator"];
            }
        }
        return null;
    }

    /**
    * Sets the operator
    * The operator for file or folder detection. Possible values are: notConfigured, equal, notEqual, greaterThan, greaterThanOrEqual, lessThan, lessThanOrEqual.
    *
    * @param Win32LobAppRuleOperator $val The value to assign to the operator
    *
    * @return Win32LobAppFileSystemRule The Win32LobAppFileSystemRule
    */
    public function setOperator($val)
    {
        $this->_propDict["operator"] = $val;
         return $this;
    }
    /**
    * Gets the path
    * The file or folder path to look up.
    *
    * @return string The path
    */
    public function getPath()
    {
        if (array_key_exists("path", $this->_propDict)) {
            return $this->_propDict["path"];
        } else {
            return null;
        }
    }

    /**
    * Sets the path
    * The file or folder path to look up.
    *
    * @param string $val The value of the path
    *
    * @return Win32LobAppFileSystemRule
    */
    public function setPath($val)
    {
        $this->_propDict["path"] = $val;
        return $this;
    }
}
