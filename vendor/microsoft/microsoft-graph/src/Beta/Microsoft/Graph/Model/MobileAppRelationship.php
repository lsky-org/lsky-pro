<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MobileAppRelationship File
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
* MobileAppRelationship class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MobileAppRelationship extends Entity
{
    /**
    * Gets the targetDisplayName
    * The target mobile app's display name.
    *
    * @return string The targetDisplayName
    */
    public function getTargetDisplayName()
    {
        if (array_key_exists("targetDisplayName", $this->_propDict)) {
            return $this->_propDict["targetDisplayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the targetDisplayName
    * The target mobile app's display name.
    *
    * @param string $val The targetDisplayName
    *
    * @return MobileAppRelationship
    */
    public function setTargetDisplayName($val)
    {
        $this->_propDict["targetDisplayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the targetDisplayVersion
    * The target mobile app's display version.
    *
    * @return string The targetDisplayVersion
    */
    public function getTargetDisplayVersion()
    {
        if (array_key_exists("targetDisplayVersion", $this->_propDict)) {
            return $this->_propDict["targetDisplayVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the targetDisplayVersion
    * The target mobile app's display version.
    *
    * @param string $val The targetDisplayVersion
    *
    * @return MobileAppRelationship
    */
    public function setTargetDisplayVersion($val)
    {
        $this->_propDict["targetDisplayVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the targetId
    * The target mobile app's app id.
    *
    * @return string The targetId
    */
    public function getTargetId()
    {
        if (array_key_exists("targetId", $this->_propDict)) {
            return $this->_propDict["targetId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the targetId
    * The target mobile app's app id.
    *
    * @param string $val The targetId
    *
    * @return MobileAppRelationship
    */
    public function setTargetId($val)
    {
        $this->_propDict["targetId"] = $val;
        return $this;
    }
    
    /**
    * Gets the targetPublisher
    * The target mobile app's publisher.
    *
    * @return string The targetPublisher
    */
    public function getTargetPublisher()
    {
        if (array_key_exists("targetPublisher", $this->_propDict)) {
            return $this->_propDict["targetPublisher"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the targetPublisher
    * The target mobile app's publisher.
    *
    * @param string $val The targetPublisher
    *
    * @return MobileAppRelationship
    */
    public function setTargetPublisher($val)
    {
        $this->_propDict["targetPublisher"] = $val;
        return $this;
    }
    
    /**
    * Gets the targetType
    * The type of relationship indicating whether the target is a parent or child. Possible values are: child, parent.
    *
    * @return MobileAppRelationshipType The targetType
    */
    public function getTargetType()
    {
        if (array_key_exists("targetType", $this->_propDict)) {
            if (is_a($this->_propDict["targetType"], "\Beta\Microsoft\Graph\Model\MobileAppRelationshipType")) {
                return $this->_propDict["targetType"];
            } else {
                $this->_propDict["targetType"] = new MobileAppRelationshipType($this->_propDict["targetType"]);
                return $this->_propDict["targetType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the targetType
    * The type of relationship indicating whether the target is a parent or child. Possible values are: child, parent.
    *
    * @param MobileAppRelationshipType $val The targetType
    *
    * @return MobileAppRelationship
    */
    public function setTargetType($val)
    {
        $this->_propDict["targetType"] = $val;
        return $this;
    }
    
}
