<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Process File
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
* Process class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Process extends Entity
{
    /**
    * Gets the accountName
    * User account identifier (user account context the process ran under) for example, AccountName, SID, and so on.
    *
    * @return string The accountName
    */
    public function getAccountName()
    {
        if (array_key_exists("accountName", $this->_propDict)) {
            return $this->_propDict["accountName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the accountName
    * User account identifier (user account context the process ran under) for example, AccountName, SID, and so on.
    *
    * @param string $val The value of the accountName
    *
    * @return Process
    */
    public function setAccountName($val)
    {
        $this->_propDict["accountName"] = $val;
        return $this;
    }
    /**
    * Gets the commandLine
    * The full process invocation commandline including all parameters.
    *
    * @return string The commandLine
    */
    public function getCommandLine()
    {
        if (array_key_exists("commandLine", $this->_propDict)) {
            return $this->_propDict["commandLine"];
        } else {
            return null;
        }
    }

    /**
    * Sets the commandLine
    * The full process invocation commandline including all parameters.
    *
    * @param string $val The value of the commandLine
    *
    * @return Process
    */
    public function setCommandLine($val)
    {
        $this->_propDict["commandLine"] = $val;
        return $this;
    }

    /**
    * Gets the createdDateTime
    * Time at which the process was started. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @return \DateTime The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime")) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the createdDateTime
    * Time at which the process was started. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The value to assign to the createdDateTime
    *
    * @return Process The Process
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the fileHash
    * Complex type containing file hashes (cryptographic and location-sensitive).
    *
    * @return FileHash The fileHash
    */
    public function getFileHash()
    {
        if (array_key_exists("fileHash", $this->_propDict)) {
            if (is_a($this->_propDict["fileHash"], "\Microsoft\Graph\Model\FileHash")) {
                return $this->_propDict["fileHash"];
            } else {
                $this->_propDict["fileHash"] = new FileHash($this->_propDict["fileHash"]);
                return $this->_propDict["fileHash"];
            }
        }
        return null;
    }

    /**
    * Sets the fileHash
    * Complex type containing file hashes (cryptographic and location-sensitive).
    *
    * @param FileHash $val The value to assign to the fileHash
    *
    * @return Process The Process
    */
    public function setFileHash($val)
    {
        $this->_propDict["fileHash"] = $val;
         return $this;
    }

    /**
    * Gets the integrityLevel
    * The integrity level of the process. Possible values are: unknown, untrusted, low, medium, high, system.
    *
    * @return ProcessIntegrityLevel The integrityLevel
    */
    public function getIntegrityLevel()
    {
        if (array_key_exists("integrityLevel", $this->_propDict)) {
            if (is_a($this->_propDict["integrityLevel"], "\Microsoft\Graph\Model\ProcessIntegrityLevel")) {
                return $this->_propDict["integrityLevel"];
            } else {
                $this->_propDict["integrityLevel"] = new ProcessIntegrityLevel($this->_propDict["integrityLevel"]);
                return $this->_propDict["integrityLevel"];
            }
        }
        return null;
    }

    /**
    * Sets the integrityLevel
    * The integrity level of the process. Possible values are: unknown, untrusted, low, medium, high, system.
    *
    * @param ProcessIntegrityLevel $val The value to assign to the integrityLevel
    *
    * @return Process The Process
    */
    public function setIntegrityLevel($val)
    {
        $this->_propDict["integrityLevel"] = $val;
         return $this;
    }
    /**
    * Gets the isElevated
    * True if the process is elevated.
    *
    * @return bool The isElevated
    */
    public function getIsElevated()
    {
        if (array_key_exists("isElevated", $this->_propDict)) {
            return $this->_propDict["isElevated"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isElevated
    * True if the process is elevated.
    *
    * @param bool $val The value of the isElevated
    *
    * @return Process
    */
    public function setIsElevated($val)
    {
        $this->_propDict["isElevated"] = $val;
        return $this;
    }
    /**
    * Gets the name
    * The name of the process' Image file.
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
    * The name of the process' Image file.
    *
    * @param string $val The value of the name
    *
    * @return Process
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }

    /**
    * Gets the parentProcessCreatedDateTime
    * DateTime at which the parent process was started. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @return \DateTime The parentProcessCreatedDateTime
    */
    public function getParentProcessCreatedDateTime()
    {
        if (array_key_exists("parentProcessCreatedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["parentProcessCreatedDateTime"], "\DateTime")) {
                return $this->_propDict["parentProcessCreatedDateTime"];
            } else {
                $this->_propDict["parentProcessCreatedDateTime"] = new \DateTime($this->_propDict["parentProcessCreatedDateTime"]);
                return $this->_propDict["parentProcessCreatedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the parentProcessCreatedDateTime
    * DateTime at which the parent process was started. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The value to assign to the parentProcessCreatedDateTime
    *
    * @return Process The Process
    */
    public function setParentProcessCreatedDateTime($val)
    {
        $this->_propDict["parentProcessCreatedDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the parentProcessId
    * The Process ID (PID) of the parent process.
    *
    * @return int The parentProcessId
    */
    public function getParentProcessId()
    {
        if (array_key_exists("parentProcessId", $this->_propDict)) {
            return $this->_propDict["parentProcessId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the parentProcessId
    * The Process ID (PID) of the parent process.
    *
    * @param int $val The value of the parentProcessId
    *
    * @return Process
    */
    public function setParentProcessId($val)
    {
        $this->_propDict["parentProcessId"] = $val;
        return $this;
    }
    /**
    * Gets the parentProcessName
    * The name of the image file of the parent process.
    *
    * @return string The parentProcessName
    */
    public function getParentProcessName()
    {
        if (array_key_exists("parentProcessName", $this->_propDict)) {
            return $this->_propDict["parentProcessName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the parentProcessName
    * The name of the image file of the parent process.
    *
    * @param string $val The value of the parentProcessName
    *
    * @return Process
    */
    public function setParentProcessName($val)
    {
        $this->_propDict["parentProcessName"] = $val;
        return $this;
    }
    /**
    * Gets the path
    * Full path, including filename.
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
    * Full path, including filename.
    *
    * @param string $val The value of the path
    *
    * @return Process
    */
    public function setPath($val)
    {
        $this->_propDict["path"] = $val;
        return $this;
    }
    /**
    * Gets the processId
    * The Process ID (PID) of the process.
    *
    * @return int The processId
    */
    public function getProcessId()
    {
        if (array_key_exists("processId", $this->_propDict)) {
            return $this->_propDict["processId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the processId
    * The Process ID (PID) of the process.
    *
    * @param int $val The value of the processId
    *
    * @return Process
    */
    public function setProcessId($val)
    {
        $this->_propDict["processId"] = $val;
        return $this;
    }
}
