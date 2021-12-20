<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PolicySetItem File
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
* PolicySetItem class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PolicySetItem extends Entity
{
    /**
    * Gets the createdDateTime
    * Creation time of the PolicySetItem.
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
    * Creation time of the PolicySetItem.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return PolicySetItem
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * DisplayName of the PolicySetItem.
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
    * DisplayName of the PolicySetItem.
    *
    * @param string $val The displayName
    *
    * @return PolicySetItem
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the errorCode
    * Error code if any occured. Possible values are: noError, unauthorized, notFound, deleted.
    *
    * @return ErrorCode The errorCode
    */
    public function getErrorCode()
    {
        if (array_key_exists("errorCode", $this->_propDict)) {
            if (is_a($this->_propDict["errorCode"], "\Beta\Microsoft\Graph\Model\ErrorCode")) {
                return $this->_propDict["errorCode"];
            } else {
                $this->_propDict["errorCode"] = new ErrorCode($this->_propDict["errorCode"]);
                return $this->_propDict["errorCode"];
            }
        }
        return null;
    }
    
    /**
    * Sets the errorCode
    * Error code if any occured. Possible values are: noError, unauthorized, notFound, deleted.
    *
    * @param ErrorCode $val The errorCode
    *
    * @return PolicySetItem
    */
    public function setErrorCode($val)
    {
        $this->_propDict["errorCode"] = $val;
        return $this;
    }
    
    /**
    * Gets the guidedDeploymentTags
    * Tags of the guided deployment
    *
    * @return string The guidedDeploymentTags
    */
    public function getGuidedDeploymentTags()
    {
        if (array_key_exists("guidedDeploymentTags", $this->_propDict)) {
            return $this->_propDict["guidedDeploymentTags"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the guidedDeploymentTags
    * Tags of the guided deployment
    *
    * @param string $val The guidedDeploymentTags
    *
    * @return PolicySetItem
    */
    public function setGuidedDeploymentTags($val)
    {
        $this->_propDict["guidedDeploymentTags"] = $val;
        return $this;
    }
    
    /**
    * Gets the itemType
    * policySetType of the PolicySetItem.
    *
    * @return string The itemType
    */
    public function getItemType()
    {
        if (array_key_exists("itemType", $this->_propDict)) {
            return $this->_propDict["itemType"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the itemType
    * policySetType of the PolicySetItem.
    *
    * @param string $val The itemType
    *
    * @return PolicySetItem
    */
    public function setItemType($val)
    {
        $this->_propDict["itemType"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastModifiedDateTime
    * Last modified time of the PolicySetItem.
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
    * Last modified time of the PolicySetItem.
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return PolicySetItem
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the payloadId
    * PayloadId of the PolicySetItem.
    *
    * @return string The payloadId
    */
    public function getPayloadId()
    {
        if (array_key_exists("payloadId", $this->_propDict)) {
            return $this->_propDict["payloadId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the payloadId
    * PayloadId of the PolicySetItem.
    *
    * @param string $val The payloadId
    *
    * @return PolicySetItem
    */
    public function setPayloadId($val)
    {
        $this->_propDict["payloadId"] = $val;
        return $this;
    }
    
    /**
    * Gets the status
    * Status of the PolicySetItem. Possible values are: unknown, validating, partialSuccess, success, error, notAssigned.
    *
    * @return PolicySetStatus The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\Model\PolicySetStatus")) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new PolicySetStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }
    
    /**
    * Sets the status
    * Status of the PolicySetItem. Possible values are: unknown, validating, partialSuccess, success, error, notAssigned.
    *
    * @param PolicySetStatus $val The status
    *
    * @return PolicySetItem
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }
    
}
