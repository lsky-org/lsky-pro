<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* GroupPolicyOperation File
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
* GroupPolicyOperation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class GroupPolicyOperation extends Entity
{
    /**
    * Gets the lastModifiedDateTime
    * The date and time the entity was last modified.
    *
    * @return \DateTime The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedDateTime"], "\DateTime")) {
                return $this->_propDict["lastModifiedDateTime"];
            } else {
                $this->_propDict["lastModifiedDateTime"] = new \DateTime($this->_propDict["lastModifiedDateTime"]);
                return $this->_propDict["lastModifiedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastModifiedDateTime
    * The date and time the entity was last modified.
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return GroupPolicyOperation
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the operationStatus
    * The group policy operation status. Possible values are: unknown, inProgress, success, failed.
    *
    * @return GroupPolicyOperationStatus The operationStatus
    */
    public function getOperationStatus()
    {
        if (array_key_exists("operationStatus", $this->_propDict)) {
            if (is_a($this->_propDict["operationStatus"], "\Beta\Microsoft\Graph\Model\GroupPolicyOperationStatus")) {
                return $this->_propDict["operationStatus"];
            } else {
                $this->_propDict["operationStatus"] = new GroupPolicyOperationStatus($this->_propDict["operationStatus"]);
                return $this->_propDict["operationStatus"];
            }
        }
        return null;
    }
    
    /**
    * Sets the operationStatus
    * The group policy operation status. Possible values are: unknown, inProgress, success, failed.
    *
    * @param GroupPolicyOperationStatus $val The operationStatus
    *
    * @return GroupPolicyOperation
    */
    public function setOperationStatus($val)
    {
        $this->_propDict["operationStatus"] = $val;
        return $this;
    }
    
    /**
    * Gets the operationType
    * The type of group policy operation. Possible values are: none, upload, uploadNewVersion, addLanguageFiles, removeLanguageFiles, updateLanguageFiles, remove.
    *
    * @return GroupPolicyOperationType The operationType
    */
    public function getOperationType()
    {
        if (array_key_exists("operationType", $this->_propDict)) {
            if (is_a($this->_propDict["operationType"], "\Beta\Microsoft\Graph\Model\GroupPolicyOperationType")) {
                return $this->_propDict["operationType"];
            } else {
                $this->_propDict["operationType"] = new GroupPolicyOperationType($this->_propDict["operationType"]);
                return $this->_propDict["operationType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the operationType
    * The type of group policy operation. Possible values are: none, upload, uploadNewVersion, addLanguageFiles, removeLanguageFiles, updateLanguageFiles, remove.
    *
    * @param GroupPolicyOperationType $val The operationType
    *
    * @return GroupPolicyOperation
    */
    public function setOperationType($val)
    {
        $this->_propDict["operationType"] = $val;
        return $this;
    }
    
    /**
    * Gets the statusDetails
    * The group policy operation status detail.
    *
    * @return string The statusDetails
    */
    public function getStatusDetails()
    {
        if (array_key_exists("statusDetails", $this->_propDict)) {
            return $this->_propDict["statusDetails"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the statusDetails
    * The group policy operation status detail.
    *
    * @param string $val The statusDetails
    *
    * @return GroupPolicyOperation
    */
    public function setStatusDetails($val)
    {
        $this->_propDict["statusDetails"] = $val;
        return $this;
    }
    
}
