<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* FileSecurityState File
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
* FileSecurityState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class FileSecurityState extends Entity
{

    /**
    * Gets the fileHash
    * Complex type containing file hashes (cryptographic and location-sensitive).
    *
    * @return FileHash The fileHash
    */
    public function getFileHash()
    {
        if (array_key_exists("fileHash", $this->_propDict)) {
            if (is_a($this->_propDict["fileHash"], "\Beta\Microsoft\Graph\Model\FileHash")) {
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
    * @return FileSecurityState The FileSecurityState
    */
    public function setFileHash($val)
    {
        $this->_propDict["fileHash"] = $val;
         return $this;
    }
    /**
    * Gets the name
    * File name (without path).
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
    * File name (without path).
    *
    * @param string $val The value of the name
    *
    * @return FileSecurityState
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    /**
    * Gets the path
    * Full file path of the file/imageFile.
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
    * Full file path of the file/imageFile.
    *
    * @param string $val The value of the path
    *
    * @return FileSecurityState
    */
    public function setPath($val)
    {
        $this->_propDict["path"] = $val;
        return $this;
    }
    /**
    * Gets the riskScore
    * Provider generated/calculated risk score of the alert file. Recommended value range of 0-1, which equates to a percentage.
    *
    * @return string The riskScore
    */
    public function getRiskScore()
    {
        if (array_key_exists("riskScore", $this->_propDict)) {
            return $this->_propDict["riskScore"];
        } else {
            return null;
        }
    }

    /**
    * Sets the riskScore
    * Provider generated/calculated risk score of the alert file. Recommended value range of 0-1, which equates to a percentage.
    *
    * @param string $val The value of the riskScore
    *
    * @return FileSecurityState
    */
    public function setRiskScore($val)
    {
        $this->_propDict["riskScore"] = $val;
        return $this;
    }
}
