<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ExactMatchSession File
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
* ExactMatchSession class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ExactMatchSession extends ExactMatchJobBase
{
    /**
    * Gets the checksum
    *
    * @return string The checksum
    */
    public function getChecksum()
    {
        if (array_key_exists("checksum", $this->_propDict)) {
            return $this->_propDict["checksum"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the checksum
    *
    * @param string $val The checksum
    *
    * @return ExactMatchSession
    */
    public function setChecksum($val)
    {
        $this->_propDict["checksum"] = $val;
        return $this;
    }
    
    /**
    * Gets the datastoreId
    *
    * @return string The datastoreId
    */
    public function getDatastoreId()
    {
        if (array_key_exists("datastoreId", $this->_propDict)) {
            return $this->_propDict["datastoreId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the datastoreId
    *
    * @param string $val The datastoreId
    *
    * @return ExactMatchSession
    */
    public function setDatastoreId($val)
    {
        $this->_propDict["datastoreId"] = $val;
        return $this;
    }
    
    /**
    * Gets the dataUploadURI
    *
    * @return string The dataUploadURI
    */
    public function getDataUploadURI()
    {
        if (array_key_exists("dataUploadURI", $this->_propDict)) {
            return $this->_propDict["dataUploadURI"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the dataUploadURI
    *
    * @param string $val The dataUploadURI
    *
    * @return ExactMatchSession
    */
    public function setDataUploadURI($val)
    {
        $this->_propDict["dataUploadURI"] = $val;
        return $this;
    }
    
    /**
    * Gets the fields
    *
    * @return string The fields
    */
    public function getFields()
    {
        if (array_key_exists("fields", $this->_propDict)) {
            return $this->_propDict["fields"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the fields
    *
    * @param string $val The fields
    *
    * @return ExactMatchSession
    */
    public function setFields($val)
    {
        $this->_propDict["fields"] = $val;
        return $this;
    }
    
    /**
    * Gets the fileName
    *
    * @return string The fileName
    */
    public function getFileName()
    {
        if (array_key_exists("fileName", $this->_propDict)) {
            return $this->_propDict["fileName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the fileName
    *
    * @param string $val The fileName
    *
    * @return ExactMatchSession
    */
    public function setFileName($val)
    {
        $this->_propDict["fileName"] = $val;
        return $this;
    }
    
    /**
    * Gets the processingCompletionDateTime
    *
    * @return \DateTime The processingCompletionDateTime
    */
    public function getProcessingCompletionDateTime()
    {
        if (array_key_exists("processingCompletionDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["processingCompletionDateTime"], "\DateTime")) {
                return $this->_propDict["processingCompletionDateTime"];
            } else {
                $this->_propDict["processingCompletionDateTime"] = new \DateTime($this->_propDict["processingCompletionDateTime"]);
                return $this->_propDict["processingCompletionDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the processingCompletionDateTime
    *
    * @param \DateTime $val The processingCompletionDateTime
    *
    * @return ExactMatchSession
    */
    public function setProcessingCompletionDateTime($val)
    {
        $this->_propDict["processingCompletionDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the remainingBlockCount
    *
    * @return int The remainingBlockCount
    */
    public function getRemainingBlockCount()
    {
        if (array_key_exists("remainingBlockCount", $this->_propDict)) {
            return $this->_propDict["remainingBlockCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the remainingBlockCount
    *
    * @param int $val The remainingBlockCount
    *
    * @return ExactMatchSession
    */
    public function setRemainingBlockCount($val)
    {
        $this->_propDict["remainingBlockCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the remainingJobCount
    *
    * @return int The remainingJobCount
    */
    public function getRemainingJobCount()
    {
        if (array_key_exists("remainingJobCount", $this->_propDict)) {
            return $this->_propDict["remainingJobCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the remainingJobCount
    *
    * @param int $val The remainingJobCount
    *
    * @return ExactMatchSession
    */
    public function setRemainingJobCount($val)
    {
        $this->_propDict["remainingJobCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the rowsPerBlock
    *
    * @return int The rowsPerBlock
    */
    public function getRowsPerBlock()
    {
        if (array_key_exists("rowsPerBlock", $this->_propDict)) {
            return $this->_propDict["rowsPerBlock"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the rowsPerBlock
    *
    * @param int $val The rowsPerBlock
    *
    * @return ExactMatchSession
    */
    public function setRowsPerBlock($val)
    {
        $this->_propDict["rowsPerBlock"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the salt
    *
    * @return string The salt
    */
    public function getSalt()
    {
        if (array_key_exists("salt", $this->_propDict)) {
            return $this->_propDict["salt"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the salt
    *
    * @param string $val The salt
    *
    * @return ExactMatchSession
    */
    public function setSalt($val)
    {
        $this->_propDict["salt"] = $val;
        return $this;
    }
    
    /**
    * Gets the state
    *
    * @return string The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            return $this->_propDict["state"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the state
    *
    * @param string $val The state
    *
    * @return ExactMatchSession
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
        return $this;
    }
    
    /**
    * Gets the totalBlockCount
    *
    * @return int The totalBlockCount
    */
    public function getTotalBlockCount()
    {
        if (array_key_exists("totalBlockCount", $this->_propDict)) {
            return $this->_propDict["totalBlockCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the totalBlockCount
    *
    * @param int $val The totalBlockCount
    *
    * @return ExactMatchSession
    */
    public function setTotalBlockCount($val)
    {
        $this->_propDict["totalBlockCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the totalJobCount
    *
    * @return int The totalJobCount
    */
    public function getTotalJobCount()
    {
        if (array_key_exists("totalJobCount", $this->_propDict)) {
            return $this->_propDict["totalJobCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the totalJobCount
    *
    * @param int $val The totalJobCount
    *
    * @return ExactMatchSession
    */
    public function setTotalJobCount($val)
    {
        $this->_propDict["totalJobCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the uploadAgentId
    *
    * @return string The uploadAgentId
    */
    public function getUploadAgentId()
    {
        if (array_key_exists("uploadAgentId", $this->_propDict)) {
            return $this->_propDict["uploadAgentId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the uploadAgentId
    *
    * @param string $val The uploadAgentId
    *
    * @return ExactMatchSession
    */
    public function setUploadAgentId($val)
    {
        $this->_propDict["uploadAgentId"] = $val;
        return $this;
    }
    
    /**
    * Gets the uploadCompletionDateTime
    *
    * @return \DateTime The uploadCompletionDateTime
    */
    public function getUploadCompletionDateTime()
    {
        if (array_key_exists("uploadCompletionDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["uploadCompletionDateTime"], "\DateTime")) {
                return $this->_propDict["uploadCompletionDateTime"];
            } else {
                $this->_propDict["uploadCompletionDateTime"] = new \DateTime($this->_propDict["uploadCompletionDateTime"]);
                return $this->_propDict["uploadCompletionDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the uploadCompletionDateTime
    *
    * @param \DateTime $val The uploadCompletionDateTime
    *
    * @return ExactMatchSession
    */
    public function setUploadCompletionDateTime($val)
    {
        $this->_propDict["uploadCompletionDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the uploadAgent
    *
    * @return ExactMatchUploadAgent The uploadAgent
    */
    public function getUploadAgent()
    {
        if (array_key_exists("uploadAgent", $this->_propDict)) {
            if (is_a($this->_propDict["uploadAgent"], "\Beta\Microsoft\Graph\Model\ExactMatchUploadAgent")) {
                return $this->_propDict["uploadAgent"];
            } else {
                $this->_propDict["uploadAgent"] = new ExactMatchUploadAgent($this->_propDict["uploadAgent"]);
                return $this->_propDict["uploadAgent"];
            }
        }
        return null;
    }
    
    /**
    * Sets the uploadAgent
    *
    * @param ExactMatchUploadAgent $val The uploadAgent
    *
    * @return ExactMatchSession
    */
    public function setUploadAgent($val)
    {
        $this->_propDict["uploadAgent"] = $val;
        return $this;
    }
    
}
