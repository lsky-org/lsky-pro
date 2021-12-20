<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SecurityBaselineContributingPolicy File
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
* SecurityBaselineContributingPolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SecurityBaselineContributingPolicy extends Entity
{
    /**
    * Gets the displayName
    * Name of the policy
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
    * Name of the policy
    *
    * @param string $val The value of the displayName
    *
    * @return SecurityBaselineContributingPolicy
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    /**
    * Gets the sourceId
    * Unique identifier of the policy
    *
    * @return string The sourceId
    */
    public function getSourceId()
    {
        if (array_key_exists("sourceId", $this->_propDict)) {
            return $this->_propDict["sourceId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sourceId
    * Unique identifier of the policy
    *
    * @param string $val The value of the sourceId
    *
    * @return SecurityBaselineContributingPolicy
    */
    public function setSourceId($val)
    {
        $this->_propDict["sourceId"] = $val;
        return $this;
    }

    /**
    * Gets the sourceType
    * Authoring source of the policy. Possible values are: deviceConfiguration, deviceIntent.
    *
    * @return SecurityBaselinePolicySourceType The sourceType
    */
    public function getSourceType()
    {
        if (array_key_exists("sourceType", $this->_propDict)) {
            if (is_a($this->_propDict["sourceType"], "\Beta\Microsoft\Graph\Model\SecurityBaselinePolicySourceType")) {
                return $this->_propDict["sourceType"];
            } else {
                $this->_propDict["sourceType"] = new SecurityBaselinePolicySourceType($this->_propDict["sourceType"]);
                return $this->_propDict["sourceType"];
            }
        }
        return null;
    }

    /**
    * Sets the sourceType
    * Authoring source of the policy. Possible values are: deviceConfiguration, deviceIntent.
    *
    * @param SecurityBaselinePolicySourceType $val The value to assign to the sourceType
    *
    * @return SecurityBaselineContributingPolicy The SecurityBaselineContributingPolicy
    */
    public function setSourceType($val)
    {
        $this->_propDict["sourceType"] = $val;
         return $this;
    }
}
