<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Win32LobAppFileSystemDetection File
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
* Win32LobAppFileSystemDetection class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Win32LobAppFileSystemDetection extends Win32LobAppDetection
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.win32LobAppFileSystemDetection");
    }

    /**
    * Gets the check32BitOn64System
    * A value indicating whether this file or folder is for checking 32-bit app on 64-bit system
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
    * A value indicating whether this file or folder is for checking 32-bit app on 64-bit system
    *
    * @param bool $val The value of the check32BitOn64System
    *
    * @return Win32LobAppFileSystemDetection
    */
    public function setCheck32BitOn64System($val)
    {
        $this->_propDict["check32BitOn64System"] = $val;
        return $this;
    }

    /**
    * Gets the detectionType
    * The file system detection type. Possible values are: notConfigured, exists, modifiedDate, createdDate, version, sizeInMB, doesNotExist.
    *
    * @return Win32LobAppFileSystemDetectionType The detectionType
    */
    public function getDetectionType()
    {
        if (array_key_exists("detectionType", $this->_propDict)) {
            if (is_a($this->_propDict["detectionType"], "\Beta\Microsoft\Graph\Model\Win32LobAppFileSystemDetectionType")) {
                return $this->_propDict["detectionType"];
            } else {
                $this->_propDict["detectionType"] = new Win32LobAppFileSystemDetectionType($this->_propDict["detectionType"]);
                return $this->_propDict["detectionType"];
            }
        }
        return null;
    }

    /**
    * Sets the detectionType
    * The file system detection type. Possible values are: notConfigured, exists, modifiedDate, createdDate, version, sizeInMB, doesNotExist.
    *
    * @param Win32LobAppFileSystemDetectionType $val The value to assign to the detectionType
    *
    * @return Win32LobAppFileSystemDetection The Win32LobAppFileSystemDetection
    */
    public function setDetectionType($val)
    {
        $this->_propDict["detectionType"] = $val;
         return $this;
    }
    /**
    * Gets the detectionValue
    * The file or folder detection value
    *
    * @return string The detectionValue
    */
    public function getDetectionValue()
    {
        if (array_key_exists("detectionValue", $this->_propDict)) {
            return $this->_propDict["detectionValue"];
        } else {
            return null;
        }
    }

    /**
    * Sets the detectionValue
    * The file or folder detection value
    *
    * @param string $val The value of the detectionValue
    *
    * @return Win32LobAppFileSystemDetection
    */
    public function setDetectionValue($val)
    {
        $this->_propDict["detectionValue"] = $val;
        return $this;
    }
    /**
    * Gets the fileOrFolderName
    * The file or folder name to detect Win32 Line of Business (LoB) app
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
    * The file or folder name to detect Win32 Line of Business (LoB) app
    *
    * @param string $val The value of the fileOrFolderName
    *
    * @return Win32LobAppFileSystemDetection
    */
    public function setFileOrFolderName($val)
    {
        $this->_propDict["fileOrFolderName"] = $val;
        return $this;
    }

    /**
    * Gets the operator
    * The operator for file or folder detection. Possible values are: notConfigured, equal, notEqual, greaterThan, greaterThanOrEqual, lessThan, lessThanOrEqual.
    *
    * @return Win32LobAppDetectionOperator The operator
    */
    public function getOperator()
    {
        if (array_key_exists("operator", $this->_propDict)) {
            if (is_a($this->_propDict["operator"], "\Beta\Microsoft\Graph\Model\Win32LobAppDetectionOperator")) {
                return $this->_propDict["operator"];
            } else {
                $this->_propDict["operator"] = new Win32LobAppDetectionOperator($this->_propDict["operator"]);
                return $this->_propDict["operator"];
            }
        }
        return null;
    }

    /**
    * Sets the operator
    * The operator for file or folder detection. Possible values are: notConfigured, equal, notEqual, greaterThan, greaterThanOrEqual, lessThan, lessThanOrEqual.
    *
    * @param Win32LobAppDetectionOperator $val The value to assign to the operator
    *
    * @return Win32LobAppFileSystemDetection The Win32LobAppFileSystemDetection
    */
    public function setOperator($val)
    {
        $this->_propDict["operator"] = $val;
         return $this;
    }
    /**
    * Gets the path
    * The file or folder path to detect Win32 Line of Business (LoB) app
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
    * The file or folder path to detect Win32 Line of Business (LoB) app
    *
    * @param string $val The value of the path
    *
    * @return Win32LobAppFileSystemDetection
    */
    public function setPath($val)
    {
        $this->_propDict["path"] = $val;
        return $this;
    }
}
